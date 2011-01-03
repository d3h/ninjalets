<?php

$server_switching_array = array(

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

);

include 'core.php';
include 'drupal-specific.php';

set_install_subdir_containers(array(
        'localhost',
        '127.0.0.1',
        'dev.fwwd:8080',
        '74.50.62.70:8080',
));


define('DEFAULT_VERSION', 6);

print render_tree(array('5 - Drupal-Five Bookmarklets',  $drupal_bookmarklet_tree), 5);
print render_tree(array('N - Drupal-Six Bookmarklets',   $drupal_bookmarklet_tree), 6);
print render_tree(array('7 - Drupal-Seven Bookmarklets', $drupal_bookmarklet_tree), 7);
