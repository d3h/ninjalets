<?php


$drupal_bookmarklet_tree = array(

    array('V - View', array(
      array('Node', array(
        array('this',   '(vnt)', 'node/{NID_FROM_EDIT}'),
        array('number', '(vnn)', 'node/{PROMPT:Enter node ID (nid)}'),
      )),
      array('User', array(
        array('this',   '(vut)', 'user/{UID_FROM_EDIT}'),
        array('number', '(vun)', 'user/{PROMPT:Enter user ID (uid)}'),
      )),
    )),

    array('E - Edit', array(
      array('Node', array(
        array('this',   '(ent)', 'node/{NID_FROM_EDIT}/edit'),
        array('number', '(enn)', 'node/{PROMPT:Enter node-ID (nid)}/edit'),
      )),
      array('User', array(
        array('this',   '(eut)', 'user/{UID_FROM_EDIT}/edit'),
        array('number', '(eun)', 'user/{PROMPT:Enter user ID (uid)}/edit'),
      )),
    )),

    array('D - Delete', array(
      array('Node', array(
        array('this',   '(dnt)', 'node/{NID_FROM_delete}/delete'),
        array('number', '(dnn)', 'node/{PROMPT:Enter node ID (nid)}/delete'),
      )),
      array('User', array(
        array('this',   '(dut)', 'user/{UID_FROM_delete}/delete'),
        array('number', '(dun)', 'user/{PROMPT:Enter user ID (uid)}/delete'),
      )),
    )),

    array('A - Add', array(
      array('P - Page  (node/add/page)',                            'node/add/page'),
      array('L - List types, to choose one to add...  (node/add)',  'node/add'),
      array('E - Enter a type to add   (node/add/your_node_type)',  'node/add/{PROMPT:Node type to create}'),
      array('N - New (create a whole new content-type)',   '5,6:admin/content/types/add', '7:admin/structure/types/add'),
      array('-------------------------------'),
      array('User',    '5,6:admin/user/user/create',     '7:admin/people/create'),
    )),

    array('L - List', array(
      array('Content', '5,6:admin/content/node',         '7:admin/content'),
      array('Fields',  '5,6:admin/content/types/fields', '7:admin/reports/fields'),
      array('Types',   '5,6:admin/content/types',        '7:admin/structure/types'),
      array('-------------------------------'),
      array('Users',   '5,6:admin/user/user',            '7:admin/people'),
    )),

    array('-------------------------------'),
    array(', - logiN',    '(in)', 'user/login'),
    array('. - logouT',   '(out)', '5,6:logout',                 '7:user/logout'),
    array('-------------------------------'),
    array('N - meNu',     '(men)', '5,6:admin/build/menu',       '7:admin/structure/menu'),
    array('U - views',    '(vu)', '5,6:admin/build/views',       '7:admin/structure/views'),
    array('B - Block',    '(blk)', '5,6:admin/build/block',      '7:admin/structure/block'),
//  array('K - blocK',    '(blk)', '5,6:admin/build/block',      '7:admin/structure/block'),   // Works better in Opera's bookmark-namespace, where the 'B' is already taken.
    array('F - Features', '(fea)', '5:', '6:admin/build/features','7:admin/structure/features'),  // Explicitly exclude from v5.
    array('C - Contexts', '(con)',   '6:admin/build/context',    '7:admin/structure/context'),   // Silently exclude from v5.
    array('-------------------------------'),
    array('M - Modules',  '(mod)', '5,6:admin/build/modules',    '7:admin/modules'),
    array('P - Permissions', '(per)', '5:admin/user/access', '6:admin/user/permissions', '7:admin/people/permissions'),
    array('T - Taxonomy', '(tax)', '5,6:admin/content/taxonomy', '7:admin/structure/taxonomy'),
    array('H - tHemes',   '(the)', '5,6:admin/build/themes', '    7:admin/appearance'),
    array('W - Watchdog', '(log)', '5:admin/logs/watchdog',    '6,7:admin/reports/dblog'),
    array('-------------------------------'),
    array('S -- "url Suffix" (get and/or change drupal-path)',  '(path)',  '[GET_URL_SUFFIX]'),
    array('-------------------------------'),
    array('X - switch servers', $server_switching_array),
    array('1 - switch to HTTP',    '(http)', '[CHANGE_TO_HTTP]'),
    array('2 - switch to HTTPS',   '(https)', '[CHANGE_TO_HTTPS]'),
  );



// Set up the "{NID_FROM_EDIT}" and "{UID_FROM_EDIT}" macros.
add_extractives(array(
    array('extract_values_from_linkarray', array(
                 'extract_into' => 'NID_FROM_EDIT',
                 'regexp'       => "\/node\/(\d+)\/edit\b",
                 'no_edit_links_msg' => "No node-edit link found-- unable to infer this node's ID.",
                 'multi_edit_links_msg' => "Multiple node-edit links found on page-- unable to infer this node's ID.",
    )),

    array('extract_values_from_linkarray', array(
                 'extract_into' => 'UID_FROM_EDIT',
                 'regexp'       => "\/user\/(\d+)\/edit\b",
                 'no_edit_links_msg' => "No user-edit link found-- unable to infer this user's ID.",
                 'multi_edit_links_msg' => "Multiple user-edit links found on page-- unable to infer this user's ID.",
    )),
));


