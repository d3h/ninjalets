<?php

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
    'extract_values_from_linkarray' => array(
                 'extract_into' => 'NID_FROM_EDIT',
                 'regexp'       => "\/node\/(\d+)\/edit\b",  ),

    'extract_values_from_linkarray' => array(
                 'extract_into' => 'UID_FROM_EDIT',
                 'regexp'       => "\/user\/(\d+)\/edit\b",  ),
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
