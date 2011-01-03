<?php

include 'core.php';
include 'user-specific.php';
include 'drupal-specific.php';

define('DEFAULT_VERSION', 6);

$drupal_ninjalets_output_file = 'drupal_ninja_bookmarklets.html';

$fh = fopen($drupal_ninjalets_output_file, 'w') or die("Can't open '$drupal_ninjalets_output_file'.");

fwrite($fh, render_tree(array('5 - Drupal 5.x Bookmarklets', $drupal_bookmarklet_tree), 5));
fwrite($fh, render_tree(array('N - Drupal 6.x Bookmarklets', $drupal_bookmarklet_tree), 6));
fwrite($fh, render_tree(array('7 - Drupal 7.x Bookmarklets', $drupal_bookmarklet_tree), 7));

fclose($fh);