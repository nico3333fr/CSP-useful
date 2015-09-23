# CSP Check

This script was a quick and dirty "proof of concept" to reproduce a bug in Firefox, you can see it in action here: http://csp.nicolas-hoffmann.net/

1. Open http://csp.nicolas-hoffmann.net/ 
2. The page is going to generate a unique id, ex http://csp.nicolas-hoffmann.net/?id=foo
3. Wait some seconds. The page doesn't find any notification in the database.
4. Now inspect the page with Firefox inspector, please highlight some elements.
5. Close the inspector
6. Refresh the page with the id you have : http://csp.nicolas-hoffmann.net/?id=foo
7. It is going to find a lot of CSP errors.

At the beginning, I've made it to prove that some Chrome extensions are sending notifications to report-uri (while they should not), and it helped to find/prove a bug in Firefox Inspector.

Here is the reported bug : https://bugzilla.mozilla.org/show_bug.cgi?id=1195302

It should be solved with Firefox 43 https://bugzilla.mozilla.org/show_bug.cgi?id=1185351 :)
