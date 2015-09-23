# CSP Check

This script was a quick and dirty "proof of concept" to reproduce a bug in Firefox, you can see it in action here: http://csp.nicolas-hoffmann.net/

At the beginning, I've made it to prove that some Chrome extensions are sending notifications to report-uri (while they should not), and it helped to find/prove a bug in Firefox Inspector.

Here is the reported bug : https://bugzilla.mozilla.org/show_bug.cgi?id=1195302

It should be solved with Firefox 43 https://bugzilla.mozilla.org/show_bug.cgi?id=1185351 :)
