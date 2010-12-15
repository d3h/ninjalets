<?php


$drupal_6_bookmarklet_tree =
  array('6 - Drupal-6 Bookmarklets', array(

    array('Edit this user',   'user/{UID_FROM_EDIT}/edit'),
    array('This user\'s order history',   'user/{UID_FROM_EDIT}/order-history'),
    array('Path -- get and/or change it.',   '[GET_URL_SUFFIX]'),

    array('V - View', array(
      array('This node', 'node/{NID_FROM_EDIT}'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}'),
    )),
    array('E - Edit', array(
      array('This node', 'node/{NID_FROM_EDIT}/edit'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}/edit'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}/edit'),
    )),
    array('D - Delete', array(
      array('This node', 'node/{NID_FROM_EDIT}/delete'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}/delete'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}/delete'),
    )),
    array('-------------------------'),
    array('z - Menu',  'admin/build/menu'),
    array('W - Views', 'admin/build/views'),
    array('P - Permissions', 'admin/user/permissions'),
//    array('Q - mysQL (phpmyadmin) (TO DO)',          'to_do'),
    array('1 - (switch to HTTP)',    '[CHANGE_TO_HTTP]'),
    array('2 - (switch to HTTPS)',   '[CHANGE_TO_HTTPS]'),
    array('A - Add', array(
      array('L - List',           'node/add'),
      array('P - Page',           'node/add/page'),
      array('N - Node (node/add/brew_your_own)',      'node/add/{PROMPT:Node type to create?}'),
      array('T - Type (create a new content type)',   'admin/content/types/add'),
      array('U - User',           'admin/user/user/create'),
    )),
    array('L - List', array(
      array('C - Content', 'admin/content/node'),
      array('F - Fields',  'admin/content/types/fields'),
      array('T - Types',   'admin/content/types'),
      array('U - Users',   'admin/user/user'),
    )),
    array('-------------------------------'),
    array('N - logiN',  'user/login'),
    array('T - logouT', 'logout'),
    array('-------------------------------'),
    array('K - blocK',    'admin/build/block'),
    array('M - Modules',  'admin/build/modules'),
    array('H - tHemes',   'admin/build/themes'),
    array('X - taXonomy', 'admin/content/taxonomy'),
    array('G - watchdoG', 'admin/reports/dblog'),
    array('-------------------------------'),
    array('Y - bYo - brew Your own',   '{PROMPT:Enter your Drupal URL suffix}'),
    array('-------------------------------'),
    array('X - Server Switching', array(
      array('CIS', array(
        array('dev.Metlakatla',  '>>>> http://dev.metlakatla.ca'),
        array('CISfeaturedev', '>>>> http://cisfeaturedev.geomemes.com'),
      )),
      array('b - BCEOHRN',        '>>>> http://bceohrn.ca'),
      array('s - BCEOHRN search', '>>>> http://bceohrn.ca/search'),   // Why not just leave out support for this for now?  Who besides Joe puts a drupal install insides another drupal install??
      array('FWWD', array(
        array('live',  '>>>> http://dev.fwwd:8080/ERdecisions.com'),
        array('stage', '>>>> http://dev.fwwd:8080/ERdecisions.staging'),
        array('dev',   '>>>> http://dev.fwwd:8080/ERdecisions.development'),
      )),
    )),
  ));


$drupal_7_bookmarklet_tree =
  array('7 - Drupal-7 Bookmarklets', array(

    array('Edit this user',   'user/{UID_FROM_EDIT}/edit'),

    array('V - View', array(
      array('This node', 'node/{NID_FROM_EDIT}'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}'),
    )),
    array('E - Edit', array(
      array('This node', 'node/{NID_FROM_EDIT}/edit'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}/edit'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}/edit'),
    )),
    array('D - Delete', array(
      array('This node', 'node/{NID_FROM_EDIT}/delete'),
      array('Node #',    'node/{PROMPT:Enter node # (nid)}/delete'),
      array('User #',    'user/{PROMPT:Enter user # (uid)}/cancel'),
    )),
    array('-------------------------'),
    array('z - Menu',  'admin/structure/menu'),
    array('W - Views', 'admin/structure/views'),
    array('P - Permissions', 'admin/people/permissions'),
//    array('Q - mysQL (phpmyadmin) (TO DO)',          'to_do'),
    array('1 - (switch to HTTP)',    '[CHANGE_TO_HTTP]'),
    array('2 - (switch to HTTPS)',   '[CHANGE_TO_HTTPS]'),
    array('A - Add', array(
      array('L - List',           'node/add'),
      array('P - Page',           'node/add/page'),
      array('N - Node (node/add/brew_your_own)',      'node/add/{PROMPT:Node type to create?}'),
      array('T - Type (create a new content type)',   'admin/structure/types/add'),
      array('U - User',           'admin/people/create'),
    )),
    array('L - List', array(
      array('C - Content', 'admin/content'),
      array('F - Fields',  'admin/reports/fields'),
      array('T - Types',   'admin/structure/types'),
      array('U - Users',   'admin/people'),
    )),
    array('-------------------------------'),
    array('N - logiN',  'user/login'),
    array('T - logouT', 'user/logout'),
    array('-------------------------------'),
    array('K - blocK',    'admin/structure/block'),
    array('M - Modules',  'admin/modules'),
    array('H - tHemes',   'admin/appearance'),
    array('X - taXonomy', 'admin/structure/taxonomy'),
    array('G - watchdoG', 'admin/reports/dblog'),
    array('-------------------------------'),
    array('Y - bYo - brew Your own',   '{PROMPT:Enter your Drupal URL suffix}'),
    array('-------------------------------'),
    array('X - Server Switching', array(
      array('b - BCEOHRN',        '>>>> http://bceohrn.ca'),
      array('s - BCEOHRN search', '>>>> http://bceohrn.ca/search'),   // Why not just leave out support for this for now?  Who besides Joe puts a drupal install insides another drupal install??
      array('FWWD', array(
        array('live',  '>>>> http://dev.fwwd:8080/ERdecisions.com'),
        array('stage', '>>>> http://dev.fwwd:8080/ERdecisions.staging'),
        array('dev',   '>>>> http://dev.fwwd:8080/ERdecisions.development'),
      )),
    )),
  ));

$install_subdir_containers = array(
  'localhost',
  '127.0.0.1',
  'dev.fwwd:8080',
  '74.50.62.70:8080',
  'bob.com/foo',
);

pre_parse_servers(array($install_subdir_containers, $drupal_7_bookmarklet_tree));



$extractives = array(
    'extract_values_from_linkarray' => array(
                 'extract_into' => 'NID_FROM_EDIT',
                 'regexp'       => "\/node\/(\d+)\/edit\b",  ),

    'extract_values_from_linkarray' => array(
                 'extract_into' => 'UID_FROM_EDIT',
                 'regexp'       => "\/user\/(\d+)\/edit\b",      ),

    'http_https' => array(),

    'get_url_suffix' => array(),

    'switch_servers' => array(),

    'get_prompt_bookmarkletjs'  => array(),
    
    'get_normal_bookmarkletjs'  => array(),
);




print render_tree($drupal_6_bookmarklet_tree);
print render_tree($drupal_7_bookmarklet_tree);





function pre_parse_servers($lists) {
  // Recurse through arrays of arrays.
  // Whenever anything is found starting with ">>>>", add that to list of install dirs to look for.
  // It will infer (assume) that ">>>> someserver.com/my_site" means "someserver.com is a place to look
  //    for drupal install in subdirs of it.
}

function render_tree($tree) {
  return "<DL><P>\n" . render_subtree($tree) . "</DL>\n";
}

// Recursively render sub-trees.
function render_subtree($subtree) {
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
      $output .= render_subtree($element);
    }
    // Render normal link.
    else if (is_string($element[1])) {
      $output .= indent($depth, "<DT><A HREF=\"javascript:". get_js($element[1]) ."\">$element[0]</A>");
      // print indented($depth, "<DD>(comment goes here)</DD>");
    }
  }
  --$depth;
  $output .= indent($depth, "</DL><P>");
  return $output;
}

function indent($depth, $text) {
  return str_repeat(' ', $depth*2) . $text . "\n";
}

function get_js($url_suffix) {
  $bookmarklet_js = '';
  global $extractives;

  foreach ($extractives as $function => $params) {
    $function( $url_suffix, $bookmarklet_js, $params);
    if (!$url_suffix) {
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



// Convert something like this:   "node/{NID_FROM_EDIT}/delete"
//                   into this:   array('before_nid' => 'node/', 'after_nid' => '/delete')
// Returns NULL if no match.
function extract_values_from_linkarray(&$url_suffix, &$bookmarklet_js, $params) {
  $matches = array();
  if (preg_match("/(^.*){".$params['extract_into']."}(.*$)/", $url_suffix, $matches)) {
    $before_nid = $matches[1];
    $after_nid  = $matches[2];
    $url_suffix = '';  // because we're done processing it.

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

    $bookmarklet_js = <<<END_JS
      lin = document.links;
      var regexp = /(.*)$REGEXP_FRAGMENT/;
      var a=[];
      for (y=0; y<lin.length; y++)  {
        if (regexp.test(lin[y].href)==true) {
          urlroot = RegExp.$1;
          a.push(RegExp.$2);
        }
      }
      switch (a.length) {
        case 0:
          alert ('No node-edit link found-- unable to infer node to delete.');
          break;
        case 1:
          location.href = urlroot + '/' + $DESTINATION;
          break;
        default:
          alert ('Multiple node-edit links found on page-- unable to infer node to delete.');
      }
END_JS;
  }
}

function http_https(&$url_suffix, &$bookmarklet_js) {
  $matches = array();
  if (preg_match('#^\[CHANGE_TO_(HTTP|HTTPS)\]$#', $url_suffix, $matches)) {
    $NEW_PROTOCOL = strtolower($matches[1]);
    $url_suffix = '';  // because we're done processing it.

    $bookmarklet_js = <<<END_JS
      var regex1=/^(https|https):\/\/(.*)$/i;
      var lh=location.href;
      if (regex1.test(lh)){
        server_and_path = RegExp.$2;
        location.href = '$NEW_PROTOCOL://' + server_and_path;
      }
      else {
        alert("Can't find URL protocol.");
      }
END_JS;
  }
}


function get_url_suffix(&$url_suffix, &$bookmarklet_js) {
  $matches = array();
  if ($url_suffix == '[GET_URL_SUFFIX]') {
    $INSTALL_SUBDIRS_REGEXP_FRAGMENT = _get_install_subdirs_regexp_fragment();
    $url_suffix = '';  // because we're done processing it.

    $bookmarklet_js = <<<END_JS
      var regex1=/(https?:\/\/($INSTALL_SUBDIRS_REGEXP_FRAGMENT)\/[^\/]*)[\/]?(.*)/i;
      var regex2=/(https?:\/\/[^\/]*)\/?(.*drupal[^\/]*|)[\/]?(.*)/i;
      var lh=location.href;
      if (regex1.test(lh)) {
        server_and_path = RegExp.$1;
        url_suffix = RegExp.$3;
      }
      else if (regex2.test(lh)) {
        server_and_path = RegExp.$1 + (RegExp.$2 ? '/'+RegExp.$2 : '');
        url_suffix = RegExp.$3;
      }
      if (server_and_path) {
        changed = prompt("Drupal path.)", url_suffix);
        if (changed==url_suffix || changed == null) {
          void(0);  /* Do nothing */
        }
        else {
          location.href = server_and_path + '/' +changed;
        }
      }
      else {
        alert("Can't find URL protocol.");
      }
END_JS;
  }
}

function switch_servers(&$url_suffix, &$bookmarklet_js) {
  $matches = array();
  if (preg_match("/^ *>>>> *(.+)$/", $url_suffix, $matches)) {
    $NEW_SERVER_AND_INSTALLDIR = $matches[1];
    $INSTALL_SUBDIRS_REGEXP_FRAGMENT = _get_install_subdirs_regexp_fragment();
    $url_suffix = '';  // because we're done processing it.

    $bookmarklet_js = <<<END_JS
      var regex1=/(https?:\/\/($INSTALL_SUBDIRS_REGEXP_FRAGMENT)\/[^\/]*)[\/]?(.*)/i;
      var regex2=/(https?:\/\/[^\/]*)[\/]?(.*drupal[^\/]*|)[\/]?(.*)/i;
      var lh=location.href;
      if (regex1.test(lh) || regex2.test(lh)){
        url_suffix=RegExp.$3;
        location.href = '$NEW_SERVER_AND_INSTALLDIR/' + url_suffix;
      }
      else {
        alert("Can't find server and url-suffix.");
      }
END_JS;
  }
}

function _shared_normal_bookmarkletjs() {
  $INSTALL_SUBDIRS_REGEXP_FRAGMENT = _get_install_subdirs_regexp_fragment();

  return <<<END_JS
    var regex1=/(https?:\/\/($INSTALL_SUBDIRS_REGEXP_FRAGMENT)\/[^\/]*)/i;
    var regex2=/(https?:\/\/[^\/]*)[\/]?(.*drupal[^\/]*|)/i;
    var lh=location.href;
    if (regex1.test(lh)==true){
      url_root=RegExp.$1;
    }
    else if(regex2.test(lh)==true){
      url_root = RegExp.$1 + '/' + RegExp.$2;
    }
    else{
      alert("Couldn't extract server name from current URL, '" + lh + "' !");
    }
END_JS;
}


function _get_install_subdirs_regexp_fragment() {
  global $install_subdir_containers;
  // This will be something like "foo.com|bar.com|hey.com\/subdir".
  return str_replace(
          array('/'  , '.'  ),
          array('\\/', '\\.'),
          implode('|', $install_subdir_containers)
  );

}
function get_prompt_bookmarkletjs(&$url_suffix, &$bookmarklet_js) {
  $matches = array();

  // Convert this:   "some/dir/{PROMPT:My message}"
  //    into this:   destination    => "'some/dir/' + user_response"
  //             and prompt_message => My message"
  if (preg_match("/(^.*)({PROMPT:([^}]*)})(.*$)/", $url_suffix, $matches)) {
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
    //  $urlsuffix_string_js  will be something like:  "'node/add/' + user_response"
    $URLSUFFIX_STRING_JS = implode(' + ', $parts);
    $PROMPT_MESSAGE      = $matches[3];

    $bookmarklet_js =  _shared_normal_bookmarkletjs();
    $bookmarklet_js .= <<<END_JS
      if(url_root){
        user_response = prompt('$PROMPT_MESSAGE');
        if (user_response != null) {
          location.href = url_root + '/' + $URLSUFFIX_STRING_JS
        }
        else {
          void(0);  /* Return undefined, so browser stays on same page. */
        }
      }
END_JS;

    $url_suffix = '';  // because we are done processing it.
  }
}



function get_normal_bookmarkletjs(&$URL_SUFFIX, &$bookmarklet_js) {
  $bookmarklet_js = _shared_normal_bookmarkletjs();
  //// A bit more JS yet to be added... still have to set location.href:

  // The URL is prescribed.  Simple.
  $bookmarklet_js .= <<<END_JS
    if(url_root){
      location.href = url_root + '/' + '$URL_SUFFIX';
    }
END_JS;

  $url_suffix = '';  // because we're done processing it.
}


