# CSP, WTF?

Sometimes, CSP notifications are really difficult to understand. Here is a collection of some CSP WTF.

---------------------------------------
# var FuckAdBlock/BlockAdBlock = function ?????

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "var FuckAdBlock = function () {\n        ...",
        OR
        "script-sample": "var BlockAdBlock = function () 

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ WTF is this? (no anti-ad-blocker on this website)

__Answer:__ Any idea?


---------------------------------------

# function installGlobalHook(window)?
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ";(function installGlobalHook(window) {\n\"...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ WTF is this?

__Answer:__ Any idea?


---------------------------------------

# Facebook

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/fr/news",
        "referrer": "http://l.facebook.com/lsr.php?u=https%3A%2F%2Fvan11y.net%2Ffr%2Fnews&ext=1484049768&hash=Acnqg-XK_DjHw5pz1PFrhONBex15J-PaH_UELLYmOrB5qA",
        "violated-directive": "script-src 'self'",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "eval",
        "line-number": 1,
        "column-number": 33772,
        "status-code": 0
    }
}
```

__WTF:__ WTF is this? (no Facebook on website)

__Answer:__ This notification happens when you share a page on Facebook.

---------------------------------------

# Encrypted Google???

```
{
    "csp-report": {
        "blocked-uri": "data",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors 'none'; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://encrypted.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=15&ved=0ahUKEwj7rZm71LXRAhUJd1AKHU_WDKsQFghTMA4&url=https%3A%2F%2Fwww.nicolas-hoffmann.net%2Fsource%2Fcv-developpeur-web-integrateur-xhtml-css.php&usg=AFQjCNFrcAgKXpkNZwoeMmWoHRh1nXGDng&sig2=6hsRHorN3KYBDYg_qI3RRg",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ WTF is this?

__Answer:__ No idea how this could happen. Any idea?


---------------------------------------

## "Reader" in MacOS Safari?
```
{
    "csp-report": {
        "document-uri": "Anonymized",
        "referrer": "Anonymized",
        "violated-directive": "default-src 'self'",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com Anonymized stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "mx://res/reader-mode/reader.html"
    }
}
```

__WTF:___ ```mx://res/reader-mode/reader.html```

__Answer:__ Might be related to "Reader" in MacOS Safari. (to confirm)

---------------------------------------

## Kaspersky

```
{
    "csp-report": {
        "document-uri": "Anonymized",
        "referrer": "https://www.google.ch/",
        "violated-directive": "script-src 'self' https://www.google-analytics.com http://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net http://gc.kis.scr.kaspersky-labs.com",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self'; connect-src 'self' http://gc.kis.scr.kaspersky-labs.com; script-src 'self' https://www.google-analytics.com http://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net http://gc.kis.scr.kaspersky-labs.com; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com Anonymized stats.g.doubleclick.net https://stats.g.doubleclick.net data: http://gc.kis.scr.kaspersky-labs.com; style-src 'self' data: 'nonce-1B74BD89-2A22-4B93-B451-1C9E1052A0EC'; child-src 'self' ; report-uri /csp-parser.php",
        "blocked-uri": "http://www.tabcontent.net",
        "source-file": "http://apps-analytics.net",
        "line-number": 1,
        "column-number": 299,
        "status-code": 200
    }
}
```
__WTF:___ ```http://gc.kis.scr.kaspersky-labs.com```, ```http://gc.kis.scr.kaspersky-labs.com```, ```nonce-1B74BD89-2A22-4B93-B451-1C9E1052A0EC``` are not in the CSP policy header sent (????), how these can be reported?

__Answer:__ Explanation kindly provided by [@tigertoes](https://github.com/tigertoes):

> Browser extensions can, and do have the ability to modify CSP policy directives BEFORE the user agent applies them. https://matthewspencer.github.io/browser-extensions-and-csp-headers/
this useful blog post expands more on how to practically apply it. I too have seen lots of reports (it appears in 5% of all my reports on a large trafficked website). Kaspersky offers browser extensions that some users to actually install, I'm convinced it's these that are the cause.

> Bloxx, Zscaler, Blackspider, and many more products are also doing this. What's really hard is that some of these products also offer MITM products, so it's hard to know if they are rewriting the response headers at the networking layer, or it's "MITB" (man in the browser, aka these extensions). One can corellate from HPKP reporting, however if the user's machine has the MITM'd CA in their trust chain, it's all moot.

---------------------------------------

## GSA

```
{
    "csp-report": {
        "document-uri": "Anonymized",
        "referrer": "https://www.google.ch/",
        "violated-directive": "default-src 'self'",
        "original-policy": "default-src 'self';  script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ; style-src 'self'  data: 'unsafe-inline' ; img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "gsa://onpageload"
    }
}
```
__WTF:___ ```gsa://onpageload```

__Answer:__ Appears to be related to Google Search App on iOS.

---------------------------------------

## Ghostery
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/",
        "line-number": 1,
        "original-policy": "default-src https://rocssti.net https://rocssti.net; script-src https://rocssti.net https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net https://rocssti.net data:; img-src https://rocssti.net https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "https://rocssti.net/realisations-css-rocssti",
        "script-sample": "@media print {#UNIQUE_ID-ghostery {displ...",

        "source-file": "https://rocssti.net/",
        "violated-directive": "style-src https://rocssti.net https://rocssti.net data:"
    }
}
```
or
```
        "script-sample": "@media print {#ghostery-purple-box {disp...",
```

__WTF:__ Ghostery???

__Answer:__ Might be generated by inline-styles (if not allowed) by Ghostery extension on Firefox (to confirm). It is related to this bug of bookmarklets/extensions https://bugzilla.mozilla.org/show_bug.cgi?id=866522, and reported https://bugzilla.mozilla.org/show_bug.cgi?id=866522#c73

---------------------------------------

## Trusteer Rapport

```
{
    "csp-report": {
        "violated-directive": "connect-src 'self' checkout.stripe.com",
        "column-number": 9,
        "line-number": 49,
        "effective-directive": "connect-src",
        "document-uri": null,
        "status-code": 0
        "blocked-uri": "https://nikkomsgchannel/e?001e005100[...]",
        "original-policy": "script-src 'self' checkout.stripe.com; default-src 'self'; img-src 'self' q.stripe.com encryptr.org; media-src 'self'; style-src 'self' 'unsafe-inline'; frame-src 'self' checkout.stripe.com player.vimeo.com; connect-src 'self' checkout.stripe.com; font-src 'self'; report-uri /csp_report/",
    }
}
```

__WTF:__ Trusteer Rapport

__Answer:__ From an email conversation with IBM Security Trusteer Technical Support:

> "[...] please be advise [sic] that when a Chrome user clicks on areas in the page, it triggers https nikko requests (https://nikkomsgchannel/e?xxxx) in order to communicate with Rapport and to protect the user. The Nikko messages are expected as they indicate back and forth https requests between Rapport and the Chrome browser.

> In addition, kindly note that Rapport injects itself into the Chrome browser in order to track user action and to protect it from malicious activities. To do that, Rapport sends and uses back & forth requests with Chrome. The main implication is that when opening the Console (F12) these requests seem like failed requests.
The reason for this is that the console issues the https request externally / outside of the network. As a result, it returns with errors because there is no such external address, as the communication is internal between Rapport and Chrome.

> Lastly, please be advised that we can suggest steps on how to avoid these messages, but since these messages appear in an internal report, we suggest simply label it as a legit source."

Confirmed CSP reports received contain the user agent:  
`Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36`

Does not seem to affect Safari, Firefox or Micorsoft browsers.

---------------------------------------

# Browser Malware

```
{
"csp-report": {
            "document-uri": anonymised,
            "referrer": "https://www.google.fr/",
            "violated-directive": "script-src 'self' ssl.google-analytics.com www.google-analytics.com",
            "effective-directive": "script-src",
            "original-policy": "default-src 'self'; style-src 'self'; connect-src www.google-analytics.com; font-src 'none'; object-src 'none'; frame-src https://www.youtube-nocookie.com; child-src https://www.youtube-nocookie.com; script-src 'self' ssl.google-analytics.com www.google-analytics.com; img-src 'self' ssl.google-analytics.com www.google-analytics.com; report-uri /csp-report.php",
            "blocked-uri": "https://m12.dnsqa.me/QualityCheck/ga.js",
            "line-number": 45,
            "column-number": 285,
            "source-file": "https://www.google-analytics.com/analytics.js",
            "status-code" => 0
        }
}
```

__WTF:__ ```https://m12.dnsqa.me/QualityCheck/ga.js``` originating from ```https://www.google-analytics.com/analytics.js```

__Answer:__ A reply from security@google.com, relating to this and similar reports:

> I talked this report over with some of my colleagues on the security team, and at first I had thought that you might have had a user with a compromised corporate MITM proxy somewhere.  However, I think that the most likely situation is that these log entries are coming from a client who has been compromised and is running in-browser malware.  This in-browser malware is modifying the Analytics script to redirect users to the malicious domain, and I think this explains the discrepancy in line length between the analytics.js file you see and what shows up in the CSP violation report.

> I can mention that the Chrome team has a lot of people who are working on defending against in-browser malware, but I'm afraid that this isn't something that we can fix on the server side.


---------------------------------------

# about:blank????

```

{
    "csp-report": {
        "document-uri": "about:blank",
        "referrer": "",
        "violated-directive": "font-src 'self'",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com  data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'none' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://github.com/google/fonts/blob/master/apache/opensans/OpenSans-Semibold.ttf?raw=true",
        "status-code": 0
    }
}
```

__WTF:__ ```"document-uri": "about:blank",``` on my personal website www.nicolas-hoffmann.net with a font???

__Answer:__ Any idea?

---------------------------------------

# Google Translate?

```
{
    "csp-report": {
        "document-uri": "Anonymized",
        "referrer": "Anonymized",
        "violated-directive": "img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://www.gstatic.com/images/branding/product/2x/translate_24dp.png",
        "status-code": 200
    }
}
```

__WTF:__ The image is not on the website, at any place.

__Answer:__ Might be related to Google Translate. (to confirm how, and check how it can happen)


---------------------------------------
If you have some examples to share (even if you don't know what the fuck it is coming from), feel free to share them. Anonymize the URL/policy if needed.
