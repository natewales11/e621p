e621p
=======

A full screen E621 presentation or slide show.

http://e621p.webege.com <temporary>

Hotkeys
-------

* a - toggles auto-next (play/pause)
* t - collapse/uncollapse title
* c - collapse/uncollapse controls
* i - open image in a new tab
* r - open comments in a new tab 
* f - toggle full screen mode
* Arrow keys, pgup/pgdown, spacebar change slides
* Swipe gestures on phones

Features
--------

* Supports all tags, including order: date, count or name, rating: e, q, s and combining tags such as "wolf+rating:s"
* Number of items loaded per Ajax request can be changed for optimal performance on all internet connections.
* Ability to switch between NSFW and SFW content at a click of a button. (This relies on the images being tagged correctly on E621.net)
* ~~You can save the html file locally and use it, just make sure you add a separator e.g. the question mark in file:///c/myredditp.html?/r/gifs so the browser knows to pick up the right file and go to the right subreddit.~~ Because of the Access Control Allow Origin header not being set, a local PHP script on the web server will be used to load the XML / API, removing the ability for local file usage without a web server.
* 
How to use
--------

An example of the functionality of the website; 

http://e621p.webege.com/?tags=<TAGS>&page=<PAGE_NO>&limit=<NO_IMG_PER_API_REQ>

This is the base syntax of the website's url. There isn't a search bar implemented so you will either have to enter the variables into the URL bar or copy the tag's from the E621 Search bar.

* Single tags - http://e621p.webege.com/?tags=wolf&page=1&limit=15>
This indicates that were searching for anything tagged with wolf, starting on page one and are loading 15 images per load cycle.

*Multiple tags - http://e621p.webege.com/?tags=wolf+order:score&page=1&limit=15
Just like E621, adding a + between seperate tags combines them and seaches for images which contain all of them.

Source:
	Made by Ubershmekel http://uberpython.wordpress.com/
	RedditP https://github.com/ubershmekel/redditp

