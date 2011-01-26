<?php

/*
 * To use this file, just cd to the directory where you unpacked it, and type "php make.php".
 *   It will overwrite and recreate the output file, listed below.
 */


include 'core.php';
include 'user-specific.php';
include 'drupal-specific.php';

define('DEFAULT_VERSION', 6);
define('INCLUDE_LINEFEEDS_IN_JAVASCRIPT_FOR_READABLE_OUTPUT', FALSE);



//// Generate main bookmarklets.

$drupal_ninjalets_output_file = 'drupal_ninja_bookmarklets.html';

$fh = fopen($drupal_ninjalets_output_file, 'w')
        or die("Can't open '$drupal_ninjalets_output_file'.");

fwrite($fh, start_bookmark_file());
fwrite($fh, render_tree(array('5 - Drupal 5.x Bookmarklets', $drupal_bookmarklet_tree), 5));
fwrite($fh, render_tree(array('N - Drupal 6.x Bookmarklets', $drupal_bookmarklet_tree), 6));
fwrite($fh, render_tree(array('7 - Drupal 7.x Bookmarklets', $drupal_bookmarklet_tree), 7));
fwrite($fh, end_bookmark_file());

fclose($fh);



//// Generate simple-sample bookmarklet.

$simple_sample_drupal_login_file = 'simple_sample_ninja_bookmarklet.html';
$fh = fopen($simple_sample_drupal_login_file, 'w')
        or die("Can't open '$simple_sample_drupal_login_file'.");

fwrite($fh, render_tree(
        array('Ninja Bookmarklet simple sample', array(
            array('Login to Drupal (go to "user/login")',    '(in)', 'user/login')
        ))
));

fclose($fh);
