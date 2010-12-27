<?php

include 'user_specific.php';
include 'build.php';



$drupal_bookmarklet_tree = array(

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
      array('P - Page  (node/add/page)',                            'node/add/page'),
      array('L - List types, to choose one to add...  (node/add)',  'node/add'),
      array('E - Enter a type to add   (node/add/your_node_type)',  'node/add/{PROMPT:Node type to create}'),
      array('N - New (create a whole new content-type)',   '5,6:admin/content/types/add', '7:admin/structure/types/add'),
      array('-------------------------------'),
      array('User',        '5,6:admin/user/user/create', '7:admin/people/create'),
    )),

    array('L - List', array(
      array('Content', '5,6:admin/content/node',         '7:admin/content'),
      array('Fields',  '5,6:admin/content/types/fields', '7:admin/reports/fields'),
      array('Types',   '5,6:admin/content/types',        '7:admin/structure/types'),
      array('-------------------------------'),
      array('Users',   '5,6:admin/user/user',            '7:admin/people'),
    )),

    array('-------------------------------'),
    array('S -- url Suffix (get and/or change it)',   '[GET_URL_SUFFIX]'),
    array('-------------------------------'),
    array('1 - (switch to HTTP)',    '[CHANGE_TO_HTTP]'),
    array('2 - (switch to HTTPS)',   '[CHANGE_TO_HTTPS]'),
    array('-------------------------------'),
    array(', - logiN',    'user/login'),
    array('. - logouT',   '5,6:logout',                 '7:user/logout'),
    array('-------------------------------'),
    array('N - meNu',     '5,6:admin/build/menu',       '7:admin/structure/menu'),
    array('U - views',    '5,6:admin/build/views',      '7:admin/structure/views'),
    array('K - blocK',    '5,6:admin/build/block',      '7:admin/structure/block'),
    array('M - Modules',  '5,6:admin/build/modules',    '7:admin/modules'),
    array('P - Permissions', '5:admin/user/access', '6:admin/user/permissions', '7:admin/people/permissions'),
    array('T - Taxonomy', '5,6:admin/content/taxonomy', '7:admin/structure/taxonomy'),
    array('H - tHemes',   '5,6:admin/build/themes', '    7:admin/appearance'),
    array('W - Watchdog', '5:admin/logs/watchdog',    '6,7:admin/reports/dblog'),
    array('-------------------------------'),
    array('X - switch servers', $server_switching_array),
  );



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


//print render_tree($drupal_5_bookmarklet_tree);
print render_tree(array('5 - Drupal-Five Bookmarklets',  $drupal_bookmarklet_tree), 5);
print render_tree(array('N - Drupal-Six Bookmarklets',   $drupal_bookmarklet_tree), 6);
print render_tree(array('7 - Drupal-Seven Bookmarklets', $drupal_bookmarklet_tree), 7);
//print render_tree($drupal_7_bookmarklet_tree);
