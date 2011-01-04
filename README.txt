Ninjalets

"Ninja Bookmarklets", for site admin/developers.  Creates site-agnostic bookmarks to visit common admin-pages of your CMS/webapp.  Works on *any* install,  even on sites you've never visited before.  Preconfigured for Drupal, but can work with any CMS or webapp.

Created 2006-2010, by Dan Howard.  git@github.com:d3h/ninjalets.git



What is a Ninjalet?
-------------------

A ninjalet ("Ninja Bookmarklet") is like a regular bookmark to a page like "user/login" (or any common drupal-path), but it takes you to the 'user/login; page **of the site you are on**.  Because bookmarks can be accessed via keyboard shortcuts, it gives you ninja-fast access to the most common admin pages on the site you are editing.


"I don't really get it... explain it better."
---------------------------------------------

If you spend a lot of time administering sites powered by the same CMS, you'll find yourself regularly visiting the same pages on a lot of sites.  For example, the 'user/login' page in Drupal:
  http://siteA.com/user/login
  http://siteB.com/user/login
  http://webhost.com/my-install-dir/user/login

The old-fashioned way is to bookmark all three of these...  but that will be tedious if you work on a lot of sites:
  "Login on site A"
  "Login on site B"
  "Login on test site"

With Ninja Bookmarklets, you can have single a bookmarklet that works on whatever site you are visiting:
  "Login"
  
It doesn't matter what site you are on.  If you are on foo.com and you invoke that bookmarklet, it will take you to "foo.com/user/login".  But over on blah.com/ClientX-dev-site, it takes you to "blah.com/ClientX-dev-site/user/login".  




-----------------------------------
---------- QUICK START!! ----------
-----------------------------------

- Go to Firefox
- Open its bookmark manager
- Import the pre-built 'drupal_ninja_bookmarklets.html' file that comes with this package.
- Go to any Drupal site.
- Try out the bookmarklets that are now in Firefox's bookmarks menu.





Drupal Ninjalets
----------------

Ninja Bookmarklets can be used with any CMS or web-app, but right now it comes set up for Drupal.  It has ninjalets for:
  'admin/build/modules'
  'admin/user/permissions'
  'admin/content/taxonomy'

...and lots more.

And you can add more of your own.



Keyboard Shortcuts
------------------

(Note-- these are for Firefox and Opera on Windows... I would love to hear of an efficient equivalent for Mac or Linux.)

If you use only a few Ninja Bookmarklets, you can put them in your main bookmarks folder, with your other bookmarks.  This way, you can activate them with as few as two key-strokes each:

- Bookmarks
  - Modules        (alt-B M)
  - Permissions    (alt-B P)
  - Taxonomy       (alt-B T)
  ...
  - Weather page
  - Mom's blog
  ...etc
  
Normally, though, you'll want to put them in their own subfolder.  Now they require at least 3 key-strokes each, but they are all in their own namespace:
- Bookmarks
  - Ninja Bookmarklets         <-- (sub-folder added here)
    - Modules      (alt-B M)
    - Permissions  (alt-B P)
    - Taxonomy     (alt-B T)
  ...
  - Weather page
  - Mom's blog
  ...etc
  
("Ninja Bookmarklets" is a good naming-choice for this sub-folder.  Because it starts with 'N', you can access it with 'alt-B N', which is really fast and easy to type on a qwerty keyboard.)



Shortcut URLs
-------------
If you can't use keyboard shortcuts (explained above), shortcut URLs are the next best thing.  

In Firefox, each bookmark (and bookmarklet) can have a shortcut URL (aka "keyword").  If you assign such a keyword to a bookmark and then later type that keyword in the URL bar, Firefox takes you to the URL of that bookmark.

So most ninalets will have a shortcut URL assigned to it.  For example, for the Modules page, it is "mod".  You will see the shortcut URL written with the ninjalets in square brackets, like this:
  Modules ['mod']
  Permissions ['per']
  Taxonomy ['tax']
  ...etc...
  
ctrl-L takes you to the URL bar (at least in Windows it does... mac/linux equivalent anyone?).  So "ctrl-L mod" is all you need to type to the modules page.



Consistency across versions
---------------------------

In Drupal version 5 and 6, the logout page is
  'user/logout'  

But in version 7, it's simply
  'logout'

So Ninja bookmarklets can create (and out-of-the-box it *does* create) a whole seperate bookmark submenu for each version:
- Bookmarks
  - 5 - Ninja Bookmarklets (Drupal 5)
    - Permissions    -> goes to 'admin/user/access'
    - Logout         -> goes to 'user/logout'
    (...etc)
  - N - Ninja Bookmarklets (Drupal 6)
    - Permissions    -> goes to 'admin/user/permissions'
    - Logout         -> goes to 'user/logout'
    (...etc)
  - 7 - Ninja Bookmarklets (Drupal 7)
    - Permissions    -> goes to 'admin/people/permissions'
    - Logout         -> goes to 'logout'
    (...etc)

The shortcut urls are modified slightly across versions:  If Drupal 6 is the default version, then
  Drupal 5 would get:  "Permissions ['5per']"
  Drupal 6 would get:  "Permissions ['per']"
  Drupal 7 would get:  "Permissions ['7per']"





Still to expand upon...

    Macros:
      -prompt
      -get_from_edit_links

    Special:
      - http/https
      - get path

    Server switching

    Drupal install subdirs (setup)
    
    How to run the make file (ie. from command line).



Random snippets of text...

    Why do I need Ninja Bookmarklets?

    Basically, because they will make you faster, more nimble, more ninja-like in navigating the admin pages.

    If you are a ninja-admin, you know that keyboard-shortcuts are far faster than finding/pointing/clicking.  Bookmarking a page is a way to make a keyboard shortcut to it, but you don't want to have to bookmark that same login page on all of the drupal sites you work on.
