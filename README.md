# CSP useful, a collection of scripts, thoughts about CSP

I'm testing and using CSP (Content Security Policy), and here are some thoughts, resources, scripts and ideas on it.


## What CSP is really good for

### In development

I use __CSP to clean up some bad old contents__ (with inline-styles for example).

1. Just activate CSP on a site with a report-uri
2. Ask your boss/collegues/grandma to browse the website
3. All notifications will come without doing anything (yes, I’m lazy)
4. Yay, you know where you have to make some cleanup

Moreother, if you don't have the time to clean it, setting up CSP policy will avoid bad old styles from breaking the nice/clean new design. Or it will tell you when contributors are doing shit on the website.

### Progressive enhancement and orthogonality

As far as I can see, using CSP on my jQuery plugins helped me a lot to design them without inline styles/js. See for example: http://a11y.nicolas-hoffmann.net/

So it is a great help for progressive enhancement, orthogonality and clean front-end.


## How to see easily CSP directives on a website

For Firefox: make Maj+F2 and type "security csp". It will show you directives and advices.

If you have webdevelopper toolbar, go into infos - HTTP headers.



## About plugins

JS/jQuery plugins should provide the CSP requirements they need to work (especially inline-styles or inline-js), so:

- we will know what they need instead of having to discover it
- we would be able to choose a plugin according to its capabilities to respect orthogonality (see http://openweb.eu.org/articles/orthogonality-with-css)



## Scripts

### Report-URI folder

In [folder "report-uri"](https://github.com/nico3333fr/CSP-useful/tree/master/report-uri), you may find examples of CSP parsers you can use for report-uri.

- csp-parser-basic.php 	: the most basic one, it sends an e-mail.
- csp-parser-enhanced.php :	avoids some bugs (listed below)
- csp-parser-with-database.php : put notifications in a database, then you can do whatever you want with all these informations! :)




### CSP directives for third-party services

In [folder "CSP for third party services"](https://github.com/nico3333fr/CSP-useful/tree/master/csp-for-third-party-services), you may find examples of directives you need to use for some services.




### CSP Check folder

In [folder "csp-check"](https://github.com/nico3333fr/CSP-useful/tree/master/csp-check), you may find the source of a proof of concept: this script was a quick and dirty way to reproduce a bug in Firefox, you can see it in action here: http://csp.nicolas-hoffmann.net/

Basically, the page generates an unique id, notifications sent to report-uri are put in database, the page makes an AJAX call to database, and the unique id helps to find CSP errors in database.

This is useful to prove bugs, not only for Firefox. ^^

To reproduce the bug:

1. Open http://csp.nicolas-hoffmann.net/ 
2. The page is going to generate a unique id, ex http://csp.nicolas-hoffmann.net/?id=foo
3. Wait some seconds. The page doesn't find any notification in the database.
4. Now inspect the page with Firefox inspector, please highlight some elements.
5. Close the inspector
6. Refresh the page with the id you have : http://csp.nicolas-hoffmann.net/?id=foo
7. It is going to find a lot of CSP errors.

At the beginning, I've made it to prove that some Chrome extensions are sending notifications to report-uri (while they should not), and it helped to find/prove a bug in Firefox Inspector.

Here is the reported bug: https://bugzilla.mozilla.org/show_bug.cgi?id=1195302

It should be solved with Firefox 43 https://bugzilla.mozilla.org/show_bug.cgi?id=1185351 :)




## Bugs I've found

- Firefox: https://bugzilla.mozilla.org/show_bug.cgi?id=1195302 (inspector, extensions?)
- Firefox: https://bugzilla.mozilla.org/show_bug.cgi?id=1215108 (bookmarklets)
- Chrome/Blink : https://code.google.com/p/chromium/issues/detail?id=524356 (extensions)
- Chrome (bookmarklets too, testing)
- Safari/Webkit : https://bugs.webkit.org/show_bug.cgi?id=149000 (extensions)
- Edge (no URL tracker yet, same workaround than for Firefox)

These bugs are just annoying, they are not critical. They provide false-positives notifications on report-uri.


## Resources

### Resources

- http://content-security-policy.com/
- http://www.w3.org/TR/CSP/
- http://www.html5rocks.com/en/tutorials/security/content-security-policy/
- http://websec.io/2012/10/02/Intro-to-Content-Security-Policy.html
- http://content-security-policy.com/presentations/


### Why you should use CSP

- https://www.aaron-gustafson.com/notebook/more-proof-we-dont-control-our-web-pages/


### Interesting posts on how to deploy CSP
 
- https://blog.twitter.com/2011/improving-browser-security-csp
- https://github.com/blog/1477-content-security-policy


### Other

- https://github.com/nico3333fr/CSP-useful (yes you are here)


### Online tools that test CSP

- https://www.dareboost.com/
- https://securityheaders.io/

Enjoy!

[Nicolas Hoffmann](http://www.nicolas-hoffmann.net/) - [@Nico3333fr](https://twitter.com/Nico3333fr)
