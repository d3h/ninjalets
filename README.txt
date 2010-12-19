ninjalets

"Ninja Bookmarklets", for site admin/developers.  Creates site-agnostic keyboard shortcuts to visit common admin-pages of your CMS/webapp.  Works on *any* install,  even on sites you've never visited before.  Preconfigured at the moment only for Drupal.

Created 2006-2010, by Dan Howard.  git@github.com:d3h/ninjalets.git

--------

What are Ninja Bookmarklets?

If you spend a lot of time administering and developing for a certain CMS (eg. Drupal), you'll find yourself visiting the same pages on a lot of sites.  For example, 'user/login' for Drupal:
  http://mysite.com/user/login
  http://theirsite.com/user/login
  http://othersite.com/user/login

Finding and clicking the login link on the page is not too hard, but any ninja-coder knows that keyboard shortcuts are much faster.

With Ninja Bookmarklets, you can have a bookmarklet called "Login".  You can access it with 2 keystokes if you place it in your main bookmarks folder.  eg. In Firefox-- you can invoke it with "alt-B L" (for 'Bookmarks... Login').
  
It doesn't matter what site you are on.  If you are on foo.com, then "alt-B L" will take you to "foo.com/user/login".  But over on blahblah.com, "alt-B L" will take you to "blahblah.com/user/login".  

Besides 'user/login' on Drupal, there are a lot of other common pages that you tend to visit a lot, such as:
  'admin/build/views'
  'admin/build/modules'
...etc.  

It comes with these and a lot of other common pages pre-installed.  And you can add more of your own.

If you use only a few Ninja Bookmarklets, you can put them in your main bookmarks folder:

Bookmarks
  - Login   (alt-B L)
  - Views   (alt-B V)
  - Modules (alt-B M)
  ...
  - Weather
  - Mom's blog
  ...etc
  
Normally, though, you'll want to put them in their own subfolder of the bookmarks:
Bookmarks
  - Ninja Bookmarklets
     - Login   (alt-B N L)
     - Views   (alt-B N V)
     - Modules (alt-B N M)
  ...
  - Weather
  - Mom's blog
  ...etc
  
Now, it's 3 keys instead of 2, but they are in their own namespace.  And if you use "Ninjalets", "alt-B N" is really fast to type, as B and N are next to each other on the keyboard.
  





