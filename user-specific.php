<?php

$server_switching_array = array(

  array('A - Client-A', array(
    array('dev',   '(adev)',   '>>>> http://example.com/clientA-dev'),   //  ** see note below
    array('stage', '(astage)', '>>>> http://example.com/clientA-stage'),
    array('live',  '(alive)',  '>>>> http://clienta.example.com'),
  )),
  array('B - Client-B', array(
    array('dev',   '(bdev)',   '>>>> http://example.com/clientB-dev'),
    array('stage', '(bstage)', '>>>> http://example.com/clientB-stage'),
    array('live',  '(blive)',  '>>>> http://clientb.example.com'),
  )),
  array('foo.com',      '(foo)',  '>>>> http://foo.com'),
  array('bar.com:8080', '(bar)',  '>>>> http://bar.com:8080'),
  array('blah.com/~myuser/mytestsite',                                   //  ** see note below
               '(testsite)', '>>>> http://blah.com/~myuser/mytestsite'),
);


/*
 *  ** Whenever you have servers where you put installs of your CMS *below* the main directory,
 *      you need to tell ninjalets about it here.  We call these locations
 *     "install subdir containers".
 *
 *     In the $server_switching_array above, we have multiple installs of Drupal (clientA-dev and
 *     clientA-stage) under example.com.  So we must tell ninjalets (below) that "example.com" is an
 *     "install subdir container".  That means that if ninjalets sees you are on
 *     the page http://example.com/clientz/this/that it will assume that means that drupal itself
 *     is installed in "example.com/clientz", and the drupal path is "this/that".
 *
 *     If, however, you did NOT include 'example.com' in the list of "install subdir containers",
 *     then when ninjalets sees you are on the page http://example.com/clientz/this/that,
 *     it would assume that means that drupal itself is installed in directly in "example.com",
 *     and that the drupal path is "clientz/this/that".
 *
 */


/* Note that the "install subdir containers" (below) are used by nearly all of the ninjalets, not
 * just the server-switching ones above.
 *
 * ninjalets will normally assume that drupal is installed in the root directory of a site, so it
 * will usually be only your development environments that you need to include in the list below.
 */

set_install_subdir_containers(array(
        'localhost',         //  http://localhost/foo will be assumed to be a drupal site,
                             //   and http://localhost itself is assumed *not* to be one.
        '127.0.0.1',
        'blah.com/~myuser',  //  http://blah.com/~myuser/foo will be assumed to be a drupal site,
                             //   and http://blah.com/~myuser itself is assumed *not* to be one.

        'example.com',       //  http://example.com/foo will be assumed to be a drupal site,
                             //   and http://example.com itself is assumed *not* to be one.
));



//TODO:  The system should be able to infer "install subdir containers" from the server-switching array.
//   That is, if '>>>> http://example.com/client-X' is a ninjalet, then it is safe to assume that
//   example.com is an install-subdir-container.
