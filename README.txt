Ninjalets

"Ninja Bookmarklets", for site admin/developers.  Creates site-agnostic bookmarks to visit common admin-pages of your CMS/webapp.  Works on *any* install,  even on sites you've never visited before.  Preconfigured for Drupal, but can work with any CMS or webapp.

Created 2006-2011, by Dan Howard.  git@github.com:d3h/ninjalets.git



Why do I want Ninja Bookmarklets?
---------------------------------

A Ninja Bookmarklet (aka 'ninjalet') is like a regular bookmark to a page like "user/login" or any common drupal-path, but it takes you to the 'user/login' page OF WHATEVER SITE YOU ARE ON.  Because bookmarks can be accessed via keyboard shortcuts, it gives you ninja-fast access to the most common admin pages of any site.



"I don't really get it... explain me it better."
------------------------------------------------

If you spend a lot of time administering sites powered by the same CMS, you'll find yourself regularly visiting the same pages on a lot of sites.  For example, the 'user/login' page in Drupal:
  http://siteA.com/user/login
  http://siteB.com/user/login
  http://webhost.com/test-site/user/login

The old-fashioned way is to bookmark all three of these...  but that will quickly become tedious if you work on a lot of sites:
  "Login on site A"
  "Login on site B"
  "Login on test site"

With Ninja Bookmarklets, you can have single a bookmarklet that works on whatever site you are visiting:
  "Login"
  
It doesn't matter what site you are on.  If you are on foo.com and you invoke the "Login" bookmarklet, it will take you to "foo.com/user/login".  But over on the blah.com/ClientX site, it takes you to "blah.com/ClientX/user/login".  



-----------------------------------------------
----------  >>>  QUICK START!!  <<<  ----------
-----------------------------------------------

You'll understand it much faster when you can try it out:

- Go to Firefox
- Open its bookmark manager
- Import one of the two pre-built bookmarklet-archives that comes with this package:
       1) 'simple_sample_ninja_bookmarklet.html', if you are shy or untrusting.
             (contains a single bookmarklet -- 'user/login').
    or 2) 'drupal_ninja_bookmarklets.html' if you live life to the fullest.
             (contains the full set of ninja bookmarklets for Drupal).
- Go to any Drupal site.
- Try out the bookmarklets that are now in Firefox's bookmarks menu. 





Drupal Ninjalets
----------------

Ninja Bookmarklets can be used with any CMS or web-app, but right now it comes set up for Drupal.  For example, it can take you to:
  'admin/build/modules'
  'admin/user/permissions'
  'admin/content/taxonomy'

...and lots more of the common admin pages.

You can add more of your own, and completely customise it.



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
    - Modules      (alt-B N M)
    - Permissions  (alt-B N P)
    - Taxonomy     (alt-B N T)
  ...
  - Weather page
  - Mom's blog
  ...etc
  
("Ninja Bookmarklets" is a good naming-choice for this sub-folder.  Because it starts with 'N', you can access it with 'alt-B N', which is really fast and easy to type on a qwerty keyboard.)



Shortcut URLs
-------------
If you can't use keyboard shortcuts, shortcut URLs are the next best thing.  

In Firefox, each bookmark/bookmarklet can have a shortcut URL (aka "keyword").  If you assign such a keyword to a bookmark and then later type that keyword in the URL bar, Firefox invokes that bookmark/bookmarklet.

So most ninjalets will have a shortcut URL assigned to them.  For example, for the Modules page, it is "mod".  You will see the shortcut URL written with the ninjalet in square brackets, like this:
  Modules ['mod']
  Permissions ['per']
  Taxonomy ['tax']
  ...etc...
  
ctrl-L (command-L on Mac) takes you to the URL bar.  So "ctrl-L mod" is all you need to type to invoke the bookmarklet and get to the modules page.

 



Consistency across versions
---------------------------

In Drupal version 5 and 6, the logout page is
  'user/logout'  

But in version 7, it's simply
  'logout'

So Ninja bookmarklets can (and out-of-the-box it *does*) create a whole seperate bookmark submenu for each version:
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

The shortcut URLs are modified slightly across versions:  If Drupal 6 is the default version, then
  Drupal 5 would get:  "Permissions ['5per']"
  Drupal 6 would get:  "Permissions ['per']"
  Drupal 7 would get:  "Permissions ['7per']"




Special Ninjalets
-----------------

(Note that, currently, none of these special ninjalets can be combined
together, and the macros only support one instance of the special code per
ninjalet.)


  * Prompt-macros

        'node/{PROMPT:Enter node-ID (nid)}/delete'   
                (This ninjalet is under "Node... Delete... Number...")

                When this ninjalet is invoked, you are prompted to enter a 
                node-ID.  If you enter '234', then you will get sent to 
                'node/234/delete'.
        

  * Link-sniffing macros
    
        'node/{NID_FROM_EDIT}/delete'                
                (This ninjalet is under "Node... Delete... This...")

                The browser looks through all links on the page, looking for 
                one of form 'node/234/edit' (where '234' is any number).  
                If it finds it, then it assumes it has found the ID of the 
                node you are on.  It extracts that number into "NID_FROM_EDIT", 
                and sends you to 'node/234/delete'.
        

  * Drupal Path
    
        There is a ninjalet that extracts the current drupal path and shows 
        it to you in an edit box.  You can copy it to the clipboard, or change 
        it to anything you like, and you'll get taken to that page.
        
        
  * HTTP/HTTPS switching
    
        If you are on 
              http://foo.com/somepage
             
        ... this lets you switch to 
              https://foo.com/somepage.  
             
        Or vice-versa.
        

  * Server switching
    
        '>>>> http://foo.com/dev-site'
    
        This will preserve the drupal-path, and switch the server that you are on.  
        
        If you are on 
              http://livesite.com/somepage/somewhere
              
        ... it will take you to
              http://foo.com/dev-site/somepage/somewhere
              
              



Drupal install subdirs (setup)
------------------------------
   --> See comments in user-specific.php




How to run the make file
------------------------
   --> See comments in make.php



