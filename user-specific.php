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



set_install_subdir_containers(array(
        'localhost',
        '127.0.0.1',
        'dev.fwwd:8080',
        '74.50.62.70:8080',
));

