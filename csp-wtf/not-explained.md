# CSP, WTF?

Sometimes, CSP notifications are __really difficult to understand or very strange__. Here is a collection of some CSP WTF.
If you have an idea (even if the idea is WTF) for some of these, do not hesitate to participate :)


---------------------------------------
var delay = null; currDisplay = null;

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "var delay = null; currDisplay = null;fun...",
        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?


---------------------------------------
# bindo.js


```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-8c58b64eb15e9f517f26e499365d17ba0b6efac064e05e5a067c3d0774edc530742ae4f7929618ca1b7647dece6f8580ddecf44763af9a1eb070f32df4c98da6' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://asrvvv-a.akamaihd.net/get?addonname=[Enter%20Product%20Name]&clientuid=[Enter%20Client%20UID]&subID=&affid=9658&subaffid=1007&href=https%3A%2F%2Fwww.estcequonmetenprodaujourdhui.info%2F",
        "line-number": 1,
        "column-number": 108967,
        "source-file": "https://cdn.ext335.com/vdsuper/bindo.js?f=22",
        "status-code": 0

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# webPageNotificationsController


```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-5a14701a62e1d1e782fea29568e4c1b34d9e13b579503eb9ab22849c754dc665eb10016ea1e7a767fd9463e0812f66c00f24b34c0878de0eef58f318b9b5a2df'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "top: {{ webPageNotificationsController.o...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-5a14701a62e1d1e782fea29568e4c1b34d9e13b579503eb9ab22849c754dc665eb10016ea1e7a767fd9463e0812f66c00f24b34c0878de0eef58f318b9b5a2df'"

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ related to web push notifications, but no idea how it happened.


---------------------------------------
# stackoverflow favicon


```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-e6dc47cac8fc1827bf73eb502fd62153ced82007fb06112468b7e44b726857a17e4daca1a5e1fe14535f75dcef5957fc1541f4d80f2d45c5f55498b6caa4dfaf' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://www.stackoverflow.com/favicon.ico",
        "status-code": 0

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ I don’t know how it happened, but it happened! #achievementUnlocked

---------------------------------------
# secure.optibuymac.com


```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-fc85f9cce142a7f611d456f9ab4feab4bda03d6ee41a3b8191663dcc323c4fe78836d7aa09e7f78bcbcd875af0bec995739e3c8e799569933d4cf92d54742475' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://secure.optibuymac.com/servicejs/components/?source=upd-1720&version=2.0&isn=800",
        "line-number": 1,
        "column-number": 794,

        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ Any idea???

---------------------------------------
# rsc.cdn77.org


```
{
    "csp-report": {
        "blocked-uri": "https://1487482361.rsc.cdn77.org",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1704-Je-hacke-le-retour-d-experience-via-un-phrase-veloute-Sud-Web.html",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "",
        "violated-directive": "child-src https://www.nicolas-hoffmann.net"
    }
}
```

__WTF:__ ???

__Answer:__ Any idea???


---------------------------------------
# mxaddon-pkg


```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1610-Un-site-et-CSS-en-right-to-left.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "",
        "source-file": "mxaddon-pkg",
        "line-number": 40,
        "column-number": 100
    }
}
```

__WTF:__ ???

__Answer:__ What is that???

---------------------------------------
# Null


```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "",
        "violated-directive": "script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "null"
    }
}
```

__WTF:__ ???

__Answer:__ ??? Well, null.


---------------------------------------
# function inception


```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/contact.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "script-sample": "(function n(){!function(){function e(e,t...",
        "source-file": "https://www.nicolas-hoffmann.net/source/contact.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# adsstrike.pro


```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://habrahabr.ru/company/zfort/blog/328636/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://adsstrike.pro/code/pid/965578_BNX.js?rev=3657",

        "line-number": 1,
        "column-number": 897,
        "source-file": "https://adsstrike.pro/code/?pid=965578&r=0.9275899753455017",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ Probably malware, any idea?


---------------------------------------
# cr-input.mxpnl.net


```
{
    "csp-report": {
        "document-uri": "https://van11y.net/?utm_source=forwebdev_tlgrm&utm_medium=announcement&utm_campaign=van11y--kollektsiya-gotovyh-k-ispolzovani",
        "referrer": "",
        "violated-directive": "connect-src",
        "effective-directive": "connect-src",
        "original-policy": "default-src 'none';script-src 'unsafe-eval' 'self';style-src 'self';img-src 'self';font-src 'self';connect-src 'self';child-src 'self';frame-ancestors 'none';manifest-src 'self';report-uri /csp-parser.php;",
        "disposition": "enforce",
        "blocked-uri": "https://cr-input.mxpnl.net/data?_channel_id=&_partner_id=39571&_sub_id=0000&_app_version=1.0.23&_app=cs-dca",
        "line-number": 34166,
        "column-number": 15,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website (not in sources, neither in scripts).

__Answer:__ I don’t know where it comes from, but I see it REALLY often in CSP reports.



---------------------------------------
# 7a2rnuey1tw9ar.ru


```
{
    "csp-report": {
        "document-uri": "http://www.visionclinique.ch/en/",
        "referrer": "http://www.alexstangos.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ; style-src 'self'  data: 'unsafe-inline' ; img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://7a2rnuey1tw9ar.ru/ajs/28722/c/766973696f6e636c696e697175652e6368_0.js",
        "line-number": 1,
        "column-number": 1216,
        "source-file": "http://ze406soi.ru/pjs/28722.js",
        "status-code": 200
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea? Malware, other?


---------------------------------------
# loadingpages.me


```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1455-Note-de-lecture-HTML5-une-reference-pour-le-developpeur-web.html",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://loadingpages.me/jo/is?id=F701A4D7-A60A-58B0-AD9F-E41CAE3E15B2&d=5a01fca9-d552-45e9-a47c-f34d2a14e626&cl=upd",
        "line-number": 1,
        "column-number": 262,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?


---------------------------------------
# rw_sendSocketMessage

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors 'none'; manifest-src https://van11y.net; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://van11y.net/accessible-accordion/",
        "script-sample": "function rw_sendSocketMessage(aData){$th...",

        "source-file": "https://van11y.net/",
        "violated-directive": "script-src https://van11y.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?


---------------------------------------
# wrcx

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "http://www.aprotec.ch/fr/bonus/fonds-ecran-economiseur-ecran",
        "line-number": 1,
        "original-policy": "default-src http://www.aprotec.ch; script-src http://www.aprotec.ch https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src http://www.aprotec.ch data:; img-src http://www.aprotec.ch https://www.google-analytics.com http://www.google-analytics.com http://*.aprotec.ch http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src http://www.aprotec.ch; report-uri http://www.aprotec.ch/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": ".wrcx {display:none} .r .wrcx,  .fc .wrc...",
        "source-file": "http://www.aprotec.ch/fr/bonus/fonds-ecran-economiseur-ecran",

        "violated-directive": "style-src http://www.aprotec.ch data:"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea??????????????????????


---------------------------------------
# akamaihd.net

```
{
    "csp-report": {
        "document-uri": "[anonymised]/fr/infos-pratiques/normes",
        "referrer": "https://www.google.com/",
        "violated-directive": "script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "eval",
        "line-number": 18,
        "column-number": 274,
        "source-file": "https://dragonbranch-a.akamaihd.net",
        "status-code": 200
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-8c58b64eb15e9f517f26e499365d17ba0b6efac064e05e5a067c3d0774edc530742ae4f7929618ca1b7647dece6f8580ddecf44763af9a1eb070f32df4c98da6' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://asrvvv-a.akamaihd.net/get?addonname=[Enter%20Product%20Name]&clientuid=[Enter%20Client%20UID]&subID=&affid=9658&subaffid=1007&href=https%3A%2F%2Fwww.estcequonmetenprodaujourdhui.info%2F",
        "line-number": 1,
        "column-number": 108967,
        "source-file": "https://cdn.ext335.com/vdsuper/bindo.js?f=22",
        "status-code": 0

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# gridify

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://ashishmishra.in/gridify/images/color-picker.png",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea? (gridify?)


---------------------------------------
# .topbanneradvertise

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": ".topbanneradvertise, .top-publicite, .pu...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea? (malware, anti-malware ?)


---------------------------------------
# loadingdata.site

```

{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1455-Note-de-lecture-HTML5-une-reference-pour-le-developpeur-web.html",
        "referrer": "https://www.google.co.uk/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://loadingdata.site/jo/is?id=85035230-CDAF-5EF3-B6AE-7CCDFAC59826&d=8daa1cca-7b6f-455f-933e-5291713281c7&cl=upd",
        "line-number": 1,
        "column-number": 263,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?


---------------------------------------
# allowAdblock

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-0c129e0260e278785f2166e318ddb0779f7b3c55deb9a7a0535e2aea464c8c5f70cc5e90ba9c34d1de9bdd90c31d01dda7f680164620e39eaa8741c85490ee39'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.facebook.com/",
        "script-sample": "(function allowAdblock() {\nnoAds = true;...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?


---------------------------------------
# *.davebestdeals.com

```

{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1209-Clim-City-enfin-reussi.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://pstatic.davebestdeals.com/nwp/v0_0_1148/release/Shared/App/SharedApp.js?t=1",
        "line-number": 2,
        "column-number": 1381,
        "source-file": "https://istatic.davebestdeals.com/fo/ec/ade.js?subid=common1",
        "status-code": 0
    }
}
```
or 
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1209-Clim-City-enfin-reussi.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://static.donation-tools.org/widgets/gtn/widget.js?_irh_subid=common1&_irh_exid=ade",
        "line-number": 2,
        "column-number": 13158,

        "source-file": "https://istatic.davebestdeals.com/fo/ec/ade.js?subid=common1",
        "status-code": 0
    }
}
```
or

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.dz/",
        "violated-directive": "script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://pstatic.davebestdeals.com",
        "source-file": "https://istatic.davebestdeals.com",
        "line-number": 2,
        "column-number": 1381,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website (not in sources, neither in scripts).

__Answer:__ I don’t know where it comes from (malware?), but I see it REALLY often in CSP reports.


---------------------------------------
# data1.itineraire.info and its friends data1.*

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self' *.vimeo.com *.akamaihd.net ;  script-src  'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net *.vimeo.com *.vimeocdn.com *.newrelic.com *.nr-data.net ; style-src 'self' data: *.vimeocdn.com ; img-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' *.vimeo.com *.vimeocdn.com *.akamaihd.net ; frame-ancestors 'none' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://data1.itineraire.info/assets/get-octapid.php?callback=fdz_octapid_cb&plugin_key=s2nwnMfCRqD15%3A6LL%241adQ&app_code=itineraire&browser=ch",
        "line-number": 15,
        "column-number": 101260,

        "source-file": "https://data1.itineraire.info/assets/js/jquery.js?app=itineraire&plugin_key=s2nwnMfCRqD15:6LL$1adQ&host=[anonymised]&201737",
        "status-code": 0
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "https://data1.iti-maps.fr",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1410-Hommage-a-une-femme-extraordinaire.html",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors 'none'; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",

        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or 
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://data1.recettes.net/assets/get-octapid.php?callback=fdz_octapid_cb&plugin_key=MblYKwZwCG1nfLq%24Q9k4Pw&app_code=recettes&browser=ch",
        "line-number": 15,
        "column-number": 101260,
        "source-file": "https://data1.recettes.net/assets/js/jquery.js?app=recettes&plugin_key=MblYKwZwCG1nfLq$Q9k4Pw&host=[anonymised]&2017423",
        "status-code": 200
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "https://data1.allo-pages.fr",
        "document-uri": "https://www.nicolas-hoffmann.net/source/la_saline_royale_arc_et_senans.php",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",

        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea? (it seems to be confirmed by other RUM sources)


---------------------------------------
# _PostRPC

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net; img-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://rocssti.net; connect-src https://rocssti.net; child-src https://rocssti.net; frame-ancestors 'none'; manifest-src https://rocssti.net; form-action https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "",
        "script-sample": "(function(){function _PostRPC() {\t\t// in...",
        "source-file": "https://rocssti.net/",

        "violated-directive": "script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website ```_PostRPC```.

__Answer:__ any idea?


---------------------------------------
# fireads.men

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1302-Balise-video-de-HTML5-comment-l-inserer.html",
        "referrer": "https://www.google.tn/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://fireads.men/code/pid/592076_ALL.js?rev=779",
        "line-number": 1,
        "column-number": 857,
        "source-file": "https://fireads.men/code/?pid=592076&r=4567196",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website ```fireads.men…```.

__Answer:__ malware, ad ?

---------------------------------------
# e={Vue:null

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "http://www.visionclinique.ch/en/contact-us",
        "line-number": 1,
        "original-policy": "default-src http://www.visionclinique.ch; script-src http://www.visionclinique.ch http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval'; style-src http://www.visionclinique.ch data: 'unsafe-inline'; img-src http://www.visionclinique.ch http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src http://www.visionclinique.ch; report-uri http://www.visionclinique.ch/csp-parser.php",
        "referrer": "",
        "script-sample": ";(function r(n){var t={},e={Vue:null,on:...",
        "source-file": "http://www.visionclinique.ch/en/contact-us",
        "violated-directive": "script-src http://www.visionclinique.ch http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval'"

    }
}
```

__WTF:__ nothing like this on the website ```e={Vue:null```.

__Answer:__ Any idea?

---------------------------------------
# dataloading.net

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "referrer": "https://www.google.sn/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://dataloading.net/j/ijs?id=3FDC5C45-BCC8-53E4-AE57-010C7DAACD7B&d=23536a95-1dc4-496f-9964-b85788f42bd1&cl=upd",

        "line-number": 1,
        "column-number": 263,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website ```dataloading.net```.

__Answer:__ Any idea?

---------------------------------------
# app.abtasty.com

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "default-src 'none'",
        "effective-directive": "connect-src",
        "original-policy": "default-src 'none';  script-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' 'unsafe-inline' ; img-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://app.abtasty.com",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website ```https://app.abtasty.com```.

__Answer:__ Any idea?


---------------------------------------
# twitbridge.com

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.google-analytics.com/analytics.js",
        "line-number": 20,
        "column-number": 84,
        "source-file": "https://twitbridge.com/ads/include.js?app=proxynetflix",
        "status-code": 0

    }
}
```

__WTF:__ nothing like this on the website ```https://twitbridge.com/ads/include.js?app=proxynetflix```.

__Answer:__ Any idea?


---------------------------------------
# savingsslider-a.akamaihd.net

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://savingsslider-a.akamaihd.net",
        "status-code": 0

    }
}
```

__WTF:__ nothing like this on the website ```savingsslider-a.akamaihd.net```.

__Answer:__ Any idea?


---------------------------------------
# Webpack_require

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-0bd14b711ba3af83406636089338bc1af90ee9f34cd4e9cb452888b389cefe5fbf4606f68e215060320feb12db10f29c641cdd5304045dca045d81c088b1cdb7'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.google.com/url?q=https%3A%2F%2Fwww.estcequonmetenprodaujourdhui.info%2F&sa=D&sntz=1&usg=AFQjCNHvJDS4K8FPbvGaIiPVKOhXufgrLw",
        "script-sample": "!function(t){function __webpack_require_...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"

    }
}
```

__WTF:__ no function like this on the website ```__webpack_require_```.

__Answer:__ Any idea?


---------------------------------------
# if (window.google && (window.google.sn

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "http://www.inoreader.com/article/3a9c6e7f353461af-est-ce-quon-met-en-production-aujourdhui",

        "script-sample": "if (window.google && (window.google.sn |...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ ```if (window.google && (window.google.sn``` nothing like this on this website. Saw it in several CSP reports, with different resources.

__Answer:__ anybody, an idea?

---------------------------------------
# chrome://kango

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 2,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors 'none'; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.qwant.com/",
        "script-sample": "call to eval() or related function blocked by CSP",
        "source-file": "chrome://kango-edb6a15c-5f8c-4531-92fa-98e988cf233c/content/lib/jquery-1.8.1.min.js",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ chrome://kango-edb6a15c-5f8c-4531-92fa-98e988cf233c/content/lib/jquery-1.8.1.min.js (nothing like this on this website)

__Answer:__ Any idea? (firefox extension, other?)

---------------------------------------
# Website frames itself ??

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "frame-ancestors",
        "effective-directive": "frame-ancestors",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'unsafe-inline' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "status-code": 0
    }
}
```

__WTF:__ ???

__Answer:__ attempt of framing this website without sending a referrer? (any better idea?)


---------------------------------------
# root .mod > ._jH + .rscontainer???

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/realisations-css-rocssti",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net; img-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://rocssti.net; connect-src https://rocssti.net; child-src https://rocssti.net; frame-ancestors 'none'; manifest-src https://rocssti.net; form-action https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "https://rocssti.net/guideline-rocssti-css",
        "script-sample": "\n:root .mod > ._jH + .rscontainer\n{ disp...",
        "source-file": "https://rocssti.net/realisations-css-rocssti",
        "violated-directive": "style-src https://rocssti.net"
    }
}
```

__WTF:__ no code like this on this website.

__Answer:__ Any idea?


---------------------------------------
# "try {\r\nwindow.AG_onLoad = function ????

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "try {\r\nwindow.AG_onLoad = function(func)...",
        OR
        "script-sample": "try {\r\nvar AG_onLoad=function(func){if(d...",
        OR 

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ WTF is this? (no code like this on this website)

__Answer:__ Any idea?

---------------------------------------
# embed[height=\"175\"][width=\"175\"] ????

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors 'none'; manifest-src https://van11y.net; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://www.google.de/",
        "script-sample": "embed[height=\"175\"][width=\"175\"], embed[...",
        "source-file": "https://van11y.net/accessible-tab-panel/",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ WTF is this? (no embed on this website)

__Answer:__ Any idea?


---------------------------------------
# function (a,x,m,I){var c={safeWindow: ?????

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function (a,x,m,I){var c={safeWindow:{}...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or 
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1040-Filtre-anti-spam-pour-les-commentaires.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "(function (a,m,h,H){var c={safeWindow:{}...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1040-Filtre-anti-spam-pour-les-commentaires.html",

        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ WTF is this? (no source like this in this website)

__Answer:__ Any idea?


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
If you have some examples to share (even if you don't know what the fuck it is coming from), feel free to share them. Anonymize the URL/policy if needed.
