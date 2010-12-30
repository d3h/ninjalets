<?php


/* Letters that are taken in bookmark menus:
 * 
 * Opera:   B - (Bookmark page...)
 * Firefox: O - (Open all in tabs...)
 * Chrome/Safari: none.
 * 
 * Keyword/hotphrase:
 *  Opera:   Nickname
 *  Firefox: Keyword
 *  Chrome/Safari: none.
 *
 * TODO-dan: try importing output of this into each browser, and if it doesn't work, find out what it's expecting.
 */

/* If drupal-module integration, to extract drupal-menus into bookmarklet-trees,
 *    then use menu_tree_all_data().  If you supply the second param (one node in the tree), it prunes the tree so that it
 *    contains only the nodes you would see if you were on the page represented by that node, and the tree
 *    was being displayed as a normal drupal menu.  This is not what I want.   I want the whole tree.
 *    If we want only a sub tree, get the whole tree, and I an prune it myself.
 *
 * menu_get_names() gets a list of all menus available.  Note that "admin_menu" is one of them!
 */




// Prepend some more extractives to main array, then return it.
function add_extractives($new_extractives = array()) {
  static $extractives = array(
    array('http_https'),
    array('get_local_path'),
    array('switch_servers'),
    array('get_prompt_bookmarkletjs'),
    array('get_normal_bookmarkletjs'),
  );

  $extractives = array_merge($new_extractives, $extractives);
  return $extractives;
}

// (just a convenience wrapper function.)
function get_extractives() {
  return add_extractives();
}





function render_tree($tree, $version = DEFAULT_VERSION) {
  return "<DL><P>\n" . render_subtree($tree, $version) . "</DL>\n";
}

// Recursively render sub-trees.
function render_subtree($subtree, $version = DEFAULT_VERSION) {
  static $depth = 1;  // keeps track of how many levels deep we are, for indenting and pretty-printing.
  $output = '';
  $output .= indent($depth, "<DT><H3>$subtree[0]</H3>");
  $output .= indent($depth, "<DL><P>");
  ++$depth;
  foreach ($subtree[1] as $element ) {
    //  Sanity check.
    if (! is_string($element[0])) {
      die("First element must be a string.");
    }
    //  Render horizontal-rule (line), testing for '--------', 4 chars or longer.
    else if (preg_match("/^ *-{4,} *$/", $element[0])) {   
      $output .= indent($depth, "<HR>");
    }
    //  Render sub-dir (recursion).
    else if (is_array($element[1])) {
      $output .= render_subtree($element, $version);
    }
    // Render normal link.
    else if (is_string($element[1])) {
      $suffix = '';
      $shortcut = '';
      get_appropriate_link_info($suffix, $shortcut, array_slice($element, 1), $version);
      if ($suffix) {
        $link_tag = "<A HREF=\"javascript:". get_js($suffix) .'"';
        if ($shortcut) {
          $link_tag .= ' SHORTCUTURL="' . $shortcut . '"';
        }
        $link_tag .= ">$element[0]</A>";
        $output .= indent($depth, "<DT>$link_tag</DT>");

        $output .= indent($depth, "<DD>Ninja!</DD>");
      }
    }
  }
  --$depth;
  $output .= indent($depth, "</DL><P>");
  return $output;
}

function get_appropriate_link_info(&$suffix, &$shortcut, $parse_me = array(), $version = DEFAULT_VERSION) {
  foreach ($parse_me as $item) {
    $matches = array();
    if (preg_match('/^\((.+)\)$/', $item, $matches)) {
      $shortcut = $matches[1];
      if ($version != DEFAULT_VERSION) {
        $shortcut = $version . $shortcut;  // so that "foo" for main version is "7foo" for version 7.
      }
      continue;
    }
    else if (preg_match('/^([^>{]+):(.+)/', $item, $matches)) {
      print "Version is $version.";
      $versions = explode(',', $matches[1]);
      if (! in_array($version, $versions)) {
        continue;
      }
      $suffix = $matches[2];
    }
    else {
      $suffix = $item;
    }
  }
}


function indent($depth, $text) {
  return str_repeat(' ', $depth*2) . $text . "\n";
}

function get_js($local_path) {
  $bookmarklet_js = '';
  $extractives = get_extractives();

  foreach ($extractives as $extractive) {
    $function = $extractive[0];
    if (isset($extractive[1])) {
      $params = $extractive[1];
    }
    else {
      $params = array();
    }

    $function( $local_path, $bookmarklet_js, $params);
    if (!$local_path) {
      break;
    }
  }
  return html_escaped($bookmarklet_js);
}



function html_escaped($my_js) {
  return str_replace(
          array('"'),
          array('&quot;'),
          $my_js
  );
}


// Process local-paths like this one:   "node/{NID_FROM_EDIT}/delete"
//   You have to pass in the name of the 'variable' you are extracting into.  "NID_FROM_EDIT", here.
//   And you have to pass in a regexp that it uses to find the value, matching the regexp against
//   all links.  eg. "\/node\/(\d+)\/edit\b" to get the numeric part from a link of form 
//   "node/1234/edit".
function extract_values_from_linkarray(&$local_path, &$bookmarklet_js, $params) {
  $matches = array();
  if (preg_match("/(^.*){".$params['extract_into']."}(.*$)/", $local_path, $matches)) {
    $before_nid = $matches[1];
    $after_nid  = $matches[2];
    $local_path = '';  // because we're done processing it.

    $dest_parts = array();
    if ($before_nid) {
      $dest_parts[] = "'$before_nid'";
    }
    $dest_parts[] = 'a[0]';  // This will be the extracted bit from the regexp, if the regexp matches.
    if ($after_nid) {
      $dest_parts[] = "'$after_nid'";
    }

    $REGEXP_FRAGMENT = $params['regexp'];  // should be something like "\/node\/(\d+)\/edit\b" 
    $DESTINATION = implode(' + ', $dest_parts);   // should be something like:  "'node/' + a[0] + '/delete'"
    $NO_ID_MSG    = $params['no_edit_links_msg'];
    $MULTI_ID_MSG = $params['multi_edit_links_msg'];

    $bookmarklet_js = <<<END_JS
      lin = document.links;
      var regexp = /(.*)$REGEXP_FRAGMENT/;
      var a=[];
      for (y=0; y<lin.length; y++)  {
        if (regexp.test(lin[y].href)==true) {
          install_root = RegExp.$1;
          a.push(RegExp.$2);
        }
      }
      switch (a.length) {
        case 0:
          alert ("$NO_ID_MSG");
          /* TODO-dan: Pull these messages out of these functions-- they are drupal-specific, and url-specific. */
          break;
        case 1:
          location.href = install_root + '/' + $DESTINATION;
          break;
        default:
          alert ("$MULTI_ID_MSG");
      }
END_JS;
  }
}

function http_https(&$local_path, &$bookmarklet_js) {
  $matches = array();
  if (preg_match('#^\[CHANGE_TO_(HTTP|HTTPS)\]$#', $local_path, $matches)) {
    $NEW_PROTOCOL = strtolower($matches[1]);
    $local_path = '';  // because we're done processing it.

    $bookmarklet_js = <<<END_JS
      var regex1=/^(http|https):\/\/(.*)$/i;
      var lh=location.href;
      if (regex1.test(lh)){
        install_root = RegExp.$2;
        location.href = '$NEW_PROTOCOL://' + install_root;
      }
      else {
        alert("Can't find URL protocol.");
      }
END_JS;
  }
}


function get_local_path(&$local_path, &$bookmarklet_js) {
  $matches = array();
  if ($local_path == '[GET_URL_SUFFIX]') {
    $local_path = '';  // because we're done processing it.

    // TODO-dan: Refactor the 3 fns that use _regexp_setup_js(), as they have code in common.
    //    -- the test-invocations, the assignment of results to vars, and the alert message if no matches.
    // could maybe combine this refactored stuff with the already-refactored stuff in _regexp_setup_js().

    $bookmarklet_js = _regexp_setup_js();
    $bookmarklet_js .= <<<END_JS
      if (regex1.test(lh)) {
        install_root = RegExp.$1;
        local_path = RegExp.$3;
      }
      else if (regex2.test(lh)) {
        install_root = RegExp.$1 + (RegExp.$2 ? '/'+RegExp.$2 : '');
        local_path = RegExp.$3;
      }
      if (install_root) {
        changed_path = prompt("Local path.", local_path);
        if (changed_path==local_path || changed_path == null) {
          void(0);  /* Do nothing */
        }
        else {
          location.href = install_root + '/' +changed_path;
        }
      }
      else {
        alert("Can't find URL protocol.");
      }
END_JS;
  }
}

function switch_servers(&$local_path, &$bookmarklet_js) {
  $matches = array();
  if (preg_match("/^ *>>>> *(.+)$/", $local_path, $matches)) {
    $local_path = '';  // because we're done processing it.

    $INSTALL_ROOT = $matches[1];

    $bookmarklet_js = _regexp_setup_js();
    $bookmarklet_js .= <<<END_JS
      if (regex1.test(lh) || regex2.test(lh)){
        local_path=RegExp.$3;
        location.href = '$INSTALL_ROOT/' + local_path;
      }
      else {
        alert("Can't find server and url-suffix.");
      }
END_JS;
  }
}

function _regexp_setup_js() {
  $INSTALL_SUBDIRS_REGEXP_FRAGMENT = _get_install_subdirs_regexp_fragment();

  // TODO-dan: Remove word 'drupal' from this regexp-- refactor it so that it is in a separate array of
  //     possible strings to look for, and package it with the drupal-specific stuff.
  return <<<END_JS
    regex1=/(https?:\/\/($INSTALL_SUBDIRS_REGEXP_FRAGMENT)\/[^\/]*)[\/]?(.*)/i;
    regex2=/(https?:\/\/[^\/]*)\/?(.*drupal[^\/]*|)\/?(.*)/i;
    lh=location.href;
END_JS;
  // TODO-dan: fix regex1/regex2... I think there are still issues with double-slashes showing up.
}

function _shared_normal_bookmarkletjs() {

  $return_val = _regexp_setup_js();

  $return_val .= <<<END_JS
    if (regex1.test(lh)==true){
      install_root=RegExp.$1;
    }
    else if(regex2.test(lh)==true){
      install_root = RegExp.$1 + (RegExp.$2 ? '/'+RegExp.$2 : '');
    }
    else{
      alert("Couldn't extract server name from current URL, '" + lh + "' !");
    }
END_JS;

  return $return_val;
}

function set_install_subdir_containers($my_containers = NULL) {
  static $containers;
  if ($my_containers) {
    $containers = $my_containers;
  }
  return $containers;
}

// (just a convenience wrapper function.)
function get_install_subdir_containers() {
  return set_install_subdir_containers();
}


function _get_install_subdirs_regexp_fragment() {
  // This will be something like "foo.com|bar.com|hey.com\/subdir".
  return str_replace(
          array('/'  , '.'  ),
          array('\\/', '\\.'),
          implode('|', get_install_subdir_containers())
  );

}
function get_prompt_bookmarkletjs(&$local_path, &$bookmarklet_js) {
  $matches = array();

  // Convert this:   "some/dir/{PROMPT:My message}"
  //    into this:   destination    => "'some/dir/' + user_response"
  //             and prompt_message => My message"
  if (preg_match("/(^.*)({PROMPT:([^}]*)})(.*$)/", $local_path, $matches)) {
    $bookmarklet_js = _shared_normal_bookmarkletjs();

    $parts = array();
    if (!empty($matches[1])) {
      $parts[] = "'$matches[1]'";
    }
    $parts[] = "user_response";  // a javascript var, into which we will have stored the user-input.
    if (!empty($matches[4])) {
      $parts[] = "'$matches[4]'";
    }

    // We have to prompt the user for part of the URL.
    //  $localpath_string_js  will be something like:  "'node/add/' + user_response"
    $LOCALPATH_STRING_JS = implode(' + ', $parts);
    $PROMPT_MESSAGE      = $matches[3];

    $bookmarklet_js =  _shared_normal_bookmarkletjs();
    $bookmarklet_js .= <<<END_JS
      if(install_root){
        user_response = prompt('$PROMPT_MESSAGE');
        if (user_response != null) {
          location.href = install_root + '/' + $LOCALPATH_STRING_JS
        }
        else {
          void(0);  /* Return undefined, so browser stays on same page. */
        }
      }
END_JS;

    $local_path = '';  // because we are done processing it.
  }
}



function get_normal_bookmarkletjs(&$LOCAL_PATH, &$bookmarklet_js) {
  $bookmarklet_js = _shared_normal_bookmarkletjs();
  //// A bit more JS yet to be added... still have to set location.href:

  // The URL is prescribed.  Simple.
  $bookmarklet_js .= <<<END_JS
    if(install_root){
      location.href = install_root + '/$LOCAL_PATH';
    }
END_JS;

  $local_path = '';  // because we're done processing it.
}


