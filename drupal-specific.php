<?php

include 'user_specific.php';
include 'build.php';

$drupal_5_bookmarklet_tree =
  array('5 - Drupal-5 Bookmarklets', array(

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
      array('User #',    'user/{PROMPT:Enter user # (uid)}/delete'),
    )),
    array('-------------------------'),
    array('z - Menu',  'admin/build/menu'),
    array('W - Views', 'admin/build/views'),
    array('P - Permissions', 'admin/user/access'),
////    array('Q - mysQL (phpmyadmin) (TO DO)',          'to_do'),
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
    array('G - watchdoG', 'admin/logs/watchdog'),
    array('-------------------------------'),
    array('Y - Drupal Path -- get and/or change it.',   '[GET_URL_SUFFIX]'),
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



$drupal_6_bookmarklet_tree =
  array('N - Drupal-6 Bookmarklets', array(

    array('V - View', array(
      array('Node', array(
        array('this', 'node/{NID_FROM_EDIT}'),
        array('number',   'node/{PROMPT:Enter node ID (nid)}'),
      )),
      array('User', array(
        array('this', 'user/{UID_FROM_EDIT}'),
        array('number',  'user/{PROMPT:Enter user ID (uid)}'),
      )),
    )),

    array('E - Edit', array(
      array('Node', array(
        array('this', 'node/{NID_FROM_EDIT}/edit'),
        array('number',   'node/{PROMPT:Enter node-ID (nid)}/edit'),
      )),
      array('User', array(
        array('this', 'user/{UID_FROM_EDIT}/edit'),
        array('number',   'user/{PROMPT:Enter user ID (uid)}/edit'),
      )),
    )),

    array('D - Delete', array(
      array('Node', array(
        array('this', 'node/{NID_FROM_delete}/delete'),
        array('number',   'node/{PROMPT:Enter node ID (nid)}/delete'),
      )),
      array('User', array(
        array('this', 'user/{UID_FROM_delete}/delete'),
        array('number',   'user/{PROMPT:Enter user ID (uid)}/delete'),
      )),
    )),

    array('A - Add', array(
      array('P - Page  (node/add/page)',           'node/add/page'),
      array('L - List types, to choose one to add...  (node/add)',           'node/add'),
      array('E - Enter a type to add   (node/add/your_node_type)',      'node/add/{PROMPT:Node type to create}'),
      array('N - New (create a whole new content-type)',   'admin/content/types/add'),
      array('-------------------------------'),
      array('User',           'admin/user/user/create'),
    )),

    array('L - List', array(
      array('Content', 'admin/content/node'),
      array('Fields',  'admin/content/types/fields'),
      array('Types',   'admin/content/types'),
      array('-------------------------------'),
      array('Users',   'admin/user/user'),
    )),

    array('-------------------------------'),
    array('S -- url Suffix (get and/or change it)',   '[GET_URL_SUFFIX]'),
    array('-------------------------------'),
    array('1 - (switch to HTTP)',    '[CHANGE_TO_HTTP]'),
    array('2 - (switch to HTTPS)',   '[CHANGE_TO_HTTPS]'),
    array('-------------------------------'),
    array(', - logiN',  'user/login'),
    array('. - logouT', 'logout'),
    array('-------------------------------'),
    array('N - meNu',  'admin/build/menu'),
    array('U - views', 'admin/build/views'),
    array('K - blocK',    'admin/build/block'),
    array('M - Modules',  'admin/build/modules'),
    array('P - Permissions', 'admin/user/permissions'),
    array('T - Taxonomy', 'admin/content/taxonomy'),
    array('H - tHemes',   'admin/build/themes'),
    array('W - Watchdog', 'admin/reports/dblog'),
    array('-------------------------------'),
    array('X - switch servers', $server_switching_array),
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
    array('K - blocK',    'admin/structure/block', 'myblock'),
    array('M - Modules',  'admin/modules'),
    array('H - tHemes',   'admin/appearance'),
    array('X - taXonomy', 'admin/structure/taxonomy'),
    array('G - watchdoG', 'admin/reports/dblog'),
    array('-------------------------------'),
    array('Y - Drupal Path -- get and/or change it.',   '[GET_URL_SUFFIX]'),
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


add_extractives(array(
    array('extract_values_from_linkarray', array(
                 'extract_into' => 'NID_FROM_EDIT',
                 'regexp'       => "\/node\/(\d+)\/edit\b",
    )),

    array('extract_values_from_linkarray', array(
                 'extract_into' => 'UID_FROM_EDIT',
                 'regexp'       => "\/user\/(\d+)\/edit\b",
    )),

));


set_install_subdir_containers(array(
        'localhost',
        '127.0.0.1',
        'dev.fwwd:8080',
        '74.50.62.70:8080',
        'bob.com/foo',
));


print render_tree($drupal_5_bookmarklet_tree);
print render_tree($drupal_6_bookmarklet_tree);
print render_tree($drupal_7_bookmarklet_tree);
