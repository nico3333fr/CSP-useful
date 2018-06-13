# CSP, WTF?

Sometimes, CSP notifications are __really difficult to understand or very strange__. Here is a collection of some CSP WTF.
If you have an idea (even if the idea is WTF) for some of these, do not hesitate to participate :)

---------------------------------------
# Pocket

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1643-L-angoissant-sujet-de-la-veille-technologique.html",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://getpocket.com/b/r4.js?h=sdtrojfqhbysnrtudsfxrhpiyjbdijfiragyrxhrqvohrtefdem4d55ae69ad&u=https%3A%2F%2Fwww.nicolas-hoffmann.net%2Fsource%2F1643-L-angoissant-sujet-de-la-veille-technologique.html%23comment158796&t=L%E2%80%99%C2%AB%20angoissant%20%C2%BB%20sujet%20de%20la%20veille%20technologique%20-%20Nico%27s%20Dreams%20-%20Nicolas-Hoffmann.net",
        "line-number": 1,
        "column-number": 1420,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `https://getpocket.com/b/r4.js...`

__Answer:__ This is caused by Pocket, ~~however, I don't have exact details on how it happens,~~ Pocket answered in a tweet (https://twitter.com/pocketsupport/status/997215117518561282), it is caused by bookmarklet in the browser.


---------------------------------------
# a11y.css

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/",
        "referrer": "",
        "violated-directive": "style-src",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ; base-uri 'none' ; form-action 'none' ;  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://rawgit.com/ffoodd/a11y.css/master/css/a11y-en.css",
        "line-number": 1,
        "column-number": 184,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://rawgit.com/ffoodd/a11y.css/master/css/a11y-en.css",`

__Answer:__ this bookmarklet is using CSS to provide advices about accessibility. Believe me, it is great, you should have a look: https://ffoodd.github.io/a11y.css/


---------------------------------------
# Hangouts

```
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-9405ae36c387ea791f7a69b7247da1a8fa9f462ba705d26a35e4d06b1610bedbf80b66486e02fe65a4d5897d164f11115c9a05e15d002b1f2e9fc49a4d652fd4'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.google.com/url?q=https://www.estcequonmetenprodaujourdhui.info/&sa=D&source=hangouts&ust=1521034206267000&usg=AFQjCNGk2slAWSMgl0w8kqOJNz43adh5_Q",
        "script-sample": ";!function(){var t=0,e=function(t,e){ret...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": ";!function(){var t=0,e=function(t,e){ret...",`

__Answer:__ looking at the referrer, seems to come from Google Hangouts.

---------------------------------------
# hotjar.com

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "style-src",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-67a5a0e484940504c4b8f8b6f93b1a239055c0a5c8c1c2ed1eb194a5aa848f78f207f851d2db435c6b9db84a590d2c44ee8a903732a0c69f88a7eb4938c0e6ee' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "inline",
        "line-number": 4,
        "column-number": 3,
        "source-file": "https://static.hotjar.com/c/hotjar-730716.js?sv=6",
        "status-code": 0,
        "script-sample": ""
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
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-67a5a0e484940504c4b8f8b6f93b1a239055c0a5c8c1c2ed1eb194a5aa848f78f207f851d2db435c6b9db84a590d2c44ee8a903732a0c69f88a7eb4938c0e6ee' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://script.hotjar.com/modules-6e79f0dfd21f4aaa93751842ae0b97f6.js",
        "line-number": 3,
        "column-number": 199,

        "source-file": "https://static.hotjar.com/c/hotjar-730716.js?sv=6",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"source-file": "https://static.hotjar.com/c/hotjar-730716.js?sv=6",`

__Answer:__ Appears to be a adware/malware, according to these lists https://github.com/StevenBlack/hosts (these are not on the sites, but on client machine)

---------------------------------------
# wrcx

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]",
        "line-number": 1,
        "original-policy": "default-src [anonymised]; script-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src [anonymised] data:; img-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://*.[anonymised] http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src [anonymised]; report-uri [anonymised]/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": ".wrcx {display:none} .r .wrcx,  .fc .wrc...",
        "source-file": "[anonymised]",

        "violated-directive": "style-src [anonymised] data:"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ [as suggested by @IanOliver](https://github.com/nico3333fr/CSP-useful/issues/42), might be caused by [extension pointers](https://github.com/vikeshkhanna/pointers).

---------------------------------------
# cip-genpw-icon

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/fr/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; worker-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": ".cip-genpw-icon.cip-icon-key-small {back...",

        "source-file": "https://van11y.net/fr/",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ `"script-sample": ".cip-genpw-icon.cip-icon-key-small {back...",` 

__Answer:__ seems it's coming from a browser extension called [ChromeIPass](https://github.com/pfn/passifox/blob/master/chromeipass/chromeipass.css#L45) and/or its Firefox counterpart PassIFox. (thanks @parseword for [the info](https://github.com/nico3333fr/CSP-useful/issues/40) :) )

---------------------------------------
# Monetizus.com ad-framework used in browser extensions

### Known list of domains:
```
lnkr.us
urlvalidation.com
adrs.me
adnotbad.com
adserv.info
amiok.org
analyzecdn.xyz
analyzenetwork.xyz
bootstrapnet.space
butstrap.space
cdnanalytics.xyz
cdncash.com
cdncash.net
cdncash.org
cdnclntr.com
cdnjs.space
cdnlvry.xyz
cdnnetwok.xyz
cdnstr.xyz
cdnswf.xyz
cdnvalid.xyz
connectionstrenth.com
domainanalyzing.xyz
domaincdn.xyz
domainvalidation.xyz
eluxer.net
extenjo.net
flowanalytic.site
ge0ip.com
ge0ip.net
ge0ip.org
glganltcs.space
glgnltks.xyz
icontent.us
infoanalytics.tools
infoprovider.group
intrnlcss.xyz
jsfuel.com
lancheck.net
metrext.com
netanalitics.space
netanalytics.xyz
netanalyzer.space
netcheckcdn.xyz
netstats.space
netwcdn.xyz
networkanalytics.xyz
networkcheck.xyz
ratexchange.net
serverads.net
siteheart.net
spaceshipad.com
spedcheck.space
spidtest.org
spidtest.space
statcounter.biz
statvalidation.website
takethatad.com
thisadsfor.us
tradeadsexchange.com
trafficvalidation.tools
trendtext.eu
validanalytics.xyz
validationcdn.xyz
validcdn.xyz
validcndnet.xyz
validdomain.xyz
whatzmyip.net
worldnaturenet.xyz
www1.thrgh.space
www4.thrgh.space
www5.thrgh.space
www7.thrgh.space
www8.thrgh.space
www9.thrgh.space
ydpi.pw
```

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1453-Pour-faire-transcription-textuelle-video-sous-titrage.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://netcheckcdn.xyz/optout/get?jsonp=__twb_cb_7740428&key=171ad33fdf3bb911a6&t=1516890924333",
        "line-number": 1,
        "column-number": 5375,
        "source-file": "https://s3.amazonaws.com/js-static/171ad33fdf3bb911a6.js",
        "status-code": 0
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://van11y.net/?utm_source=forwebdev_vk&utm_medium=announcement&utm_campaign=van11y--kollektsiya-gotovyh-k-ispolzovani",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://butstrap.space/metric/?mid=&wid=49377&sid=&tid=590&rid=LOADED&custom1=van11y.net&t=1502215731726",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://connectionstrenth.com/optout/get?jsonp=__twb_cb_56941106&key=da2e092ff7bc4ea89e&t=1496394531140",
        "line-number": 1,
        "column-number": 5387,
        "source-file": "https://s3.amazonaws.com/cashe-js/da2e092ff7bc4ea89e.js",
        "status-code": 0
    }
}
```
or 
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.com/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://connectionstrenth.com/metric/?mid=&wid=51067&sid=&tid=3490&rid=LAUNCHED&t=1496394531110",
        "status-code": 0
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "https://www.google.com/url?q=https%3A%2F%2Fwww.estcequonmetenprodaujourdhui.info%2F&sa=D&sntz=1&usg=AFQjCNHvJDS4K8FPbvGaIiPVKOhXufgrLw",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-0e30e24f03b6aff50857761ff277cb48ae5d4abd8916eb28eff379b310991f49049fdab74803ac28dd33e7c25afa7f25b8236e8322d0b6505e23a54c6fa91131' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://cdnnetwok.xyz/optout/get?jsonp=__twb_cb_932473221&key=129740f254bb8da750&t=1512727184191",
        "line-number": 1,
        "column-number": 5371,

        "source-file": "https://s3.amazonaws.com/js-cache/129740f254bb8da750.js?sid=measuit",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://netanalytics.xyz/optout/get",
        "line-number": 1,
        "column-number": 5377,
        "source-file": "https://s3.amazonaws.com/js-static/1631d86052fdda5d5f.js"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://networkcheck.xyz/optout/get",
        "line-number": 1,
        "column-number": 5377,
        "source-file": "https://s3.amazonaws.com/js-static/1631d86052fdda5d5f.js"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1556-Bug-Internet-Explorer-attributs-width-height-vides-img.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://takethatad.com/optout/get?jsonp=__twb_cb_478053953&key=b24534b96fde8c01af&t=1510064009178",
        "line-number": 1,
        "column-number": 5373,
        "source-file": "https://s3.amazonaws.com/cashe-js/b24534b96fde8c01af.js",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://adnotbad.com/metric/?mid=&wid=51151&sid=&tid=4916&rid=LOADED&custom1=[anonymised]&t=1502350073365",
        "status-code": 200,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "https://www.google.fr/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-3e8ff80e25db946668f71ab2c2cd3d875cbb1655edb281b40e4ba83771b2a84bd37dd64f79232345952a787431357801ed08851cab40a658eecf02c695cce007' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://extenjo.net/metric/?mid=&wid=51824&sid=&tid=5727&rid=LOADED&custom1=www.estcequonmetenprodaujourdhui.info&t=1518450851863",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://spedcheck.space/metric/?mid=&wid=50529&sid=&tid=5108&rid=LAUNCHED&t=1520861130776",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://plainjs.com/javascript/plugins/accessible-tabs-panel-system-163/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ; base-uri 'none' ;  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://spidtest.org/metric/?mid=&wid=51391&sid=&tid=4002&rid=FINISHED&custom1=van11y.net&t=1512059045445",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://adnotbad.com/metric/?mid=&wid=51151&sid=&tid=4916&rid=LOADED&custom1=[anonymised]&t=1502350073365",
        "status-code": 200,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://infoanalytics.tools/optout/get?jsonp=__twb_cb_659869152&key=17416ac5a9194609e3&t=1527290417218",
        "line-number": 1,
        "column-number": 5383,
        "source-file": "https://s3.amazonaws.com/jscache/17416ac5a9194609e3.js"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://statcounter.biz/optout/get?jsonp=__twb_cb_236927780&key=175abcd073ccafc00c&t=1527049545629",
        "line-number": 1,
        "column-number": 5375,
        "source-file": "https://s3.amazonaws.com/jscache/175abcd073ccafc00c.js"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://statvalidation.website/optout/get?jsonp=__twb_cb_782112499&key=15ab0c1ea47bf53f33&t=1527416602469",
        "line-number": 1,
        "column-number": 5389,
        "source-file": "https://s3.amazonaws.com/js-static/15ab0c1ea47bf53f33.js"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://trafficvalidation.tools/optout/get?jsonp=__twb_cb_556044363&key=19ff3cca12e47e3099&t=1527481253681",
        "line-number": 1,
        "column-number": 5391,
        "source-file": "https://s3.amazonaws.com/jscache/19ff3cca12e47e3099.js"
    }
}
```

__WTF:__ ???

__Answer:__
- Appears to be a malware browser extension (blocked-uri matching pattern `https://*/optout/get` and `https://*/metric/` from the parallel client requests) and according to these lists https://github.com/StevenBlack/hosts (these are not on the sites, but on client machine)
- Domain list extracted from [this](https://gist.github.com/StudioMaX/62af7d906c7e3ba4df294e4e39026159) malware js-file.
- This JS-file analyzed by a malware analysis service [here](https://www.hybrid-analysis.com/sample/1afd88371f2d0b1cc17d37947f3c4bfab86c2aab64831bfc18287dbc5244b9bd?environmentId=100)
- from some browser extensions, ex [vk downloader](https://addons.mozilla.org/fr/firefox/addon/vkontakteru-downloader/). Explanation kindly brought [here by linksilver](https://github.com/nico3333fr/CSP-useful/issues/28).
- appears to be related to ad server used by some Chrome extensions: https://www.reddit.com/r/technology/comments/4lltgu/psa_imgur_uploader_is_injecting_ads_on_google_and/
- Appears to be a malware, according to these [Kaspersky](https://forum.kaspersky.com/index.php?/topic/390680-s3amazonawscom-constant-notifications-blocked-an-advertisement-site-or-a-url-that-can-be-used-by-criminals-to-damage-your-computer-or-personal-data-s3amazonaws/)/[ESET](https://forum.eset.com/topic/14840-jsadwarerevizerb-malware-eset-fails-to-remove/) forum threads

### Currently known browser extensions:
- 1-Click YouTube Video Download
- Best YouTube Video Downloader
- Imgur Uploader
- VK Downloader


---------------------------------------
# AutoCardAnywhere

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-bffe3095c80ffd7a3394fb9a6e36f3494d4f3c8bfe77ee569e8e168f16a7a6b2a8df06911d90605c29579528f948b473b75cab04d36c0c11cf2d7001e0db66df'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ".autocardanywhere-popup {background-colo...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-bffe3095c80ffd7a3394fb9a6e36f3494d4f3c8bfe77ee569e8e168f16a7a6b2a8df06911d90605c29579528f948b473b75cab04d36c0c11cf2d7001e0db66df'"
    }
}
```

__WTF:__ `"script-sample": ".autocardanywhere-popup {background-colo...",`

__Answer:__ code used by AutoCardAnywhere extension https://www.autocardanywhere.com/ 

---------------------------------------
# Ciuvo / steganos-api.ciuvo.com

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.tn/",
        "violated-directive": "frame-src",
        "effective-directive": "frame-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.ciuvo.com",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ???

__Answer:__ Appears to be a malware: https://ipsec.pl/content-security-policy/2014/content-security-policy-malware-detector.html (these are not on the sites, but on client machine)


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
or 
```
{
    "csp-report": {
        "blocked-uri": "https://1480876790.rsc.cdn77.org",
        "document-uri": "https://www.[anonymised]/fr/produits/sonorisation",
        "original-policy": "default-src https://www.[anonymised]; script-src https://www.[anonymised] https://www.google-analytics.com http://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.[anonymised] data:; img-src https://www.[anonymised] https://www.google-analytics.com http://www.google-analytics.com https://*.[anonymised] https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src https://www.[anonymised]; base-uri https://www.[anonymised]; connect-src https://www.[anonymised] https://www.google-analytics.com http://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; report-uri https://www.[anonymised]/csp-parser.php",
        "referrer": "https://www.google.com/",
        "violated-directive": "script-src https://www.[anonymised] https://www.google-analytics.com http://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ ???

__Answer:__ Appears to be a CDN with malwares inside: http://www.removemalwarevirus.com/1023003381-rsc-cdn77-org-removal-tips (these are not on the sites, but on client machine)

---------------------------------------
# window.klTabId_kis

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "window.klTabId_kis = 'firefox.tab.3825bb...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ `"script-sample": "window.klTabId_kis = 'firefox.tab.3825bb...",`

__Answer:__ code being injected into the user's browser by Kaspersky Internet Security, according to https://forum.kaspersky.com/index.php?/topic/332491-kis-2016-ie11-save-as-txt-file-corrupted/ (thanks @parseword for the tip)

---------------------------------------
# eshopcomp

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1085-La-vallee-des-Glaciers-en-HDRI.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://istatic.eshopcomp.com/fo/ec/tor.js",
        "line-number": 1,
        "column-number": 100,
        "status-code": 0
    }
}
```

__WTF:__ `"blocked-uri": "https://istatic.eshopcomp.com/fo/ec/tor.js",` 

__Answer:__ Seems that eshopcomp is an malware https://malwaretips.com/blogs/istatic-eshopcomp-com-removal/

---------------------------------------
# myShopMate

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1452-Les-prefixes-constructeurs-comment-bien-les-utiliser.html",
        "referrer": "https://www.google.es/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://secure.myshopmatemac.com/servicejs/components/?source=pr-1633&version=2.0&isn=800",
        "line-number": 1,
        "column-number": 725,
        "status-code": 0,
        "script-sample": ""

    }
}
```

__WTF:__ `"blocked-uri": "https://secure.myshopmatemac.com/servicejs/components/?source=pr-1633&version=2.0&isn=800",` 

__Answer:__ Seems that myShopMate is an adware program https://www.pcrisk.com/removal-guides/10354-my-shopmate-adware-mac

---------------------------------------
# Facebook

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "http://m.facebook.com/",
        "violated-directive": "style-src 'self' 'nonce-14584c3305109c96f431263b495bff18527afe86cd21ca00f4eac2766e086efff98527a5e9e53507589f8e81b9777ce7aaa1ee15927a32b879947a8de403d161' ",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-14584c3305109c96f431263b495bff18527afe86cd21ca00f4eac2766e086efff98527a5e9e53507589f8e81b9777ce7aaa1ee15927a32b879947a8de403d161' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "blocked-uri": "",
        "status-code": 0
    }
}
```

__WTF:__ `"blocked-uri": "",`

__Answer:__ Page shared on facebook mobile version

---------------------------------------
# Google+

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "https://plus.url.google.com/url?sa=j&url=https%3A%2F%2Fwww.estcequonmetenprodaujourdhui.info%2F&uct=1508493467&usg=3cm13-wUguzJdcieYZL76V1sp4A.",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'unsafe-eval' 'self' ; style-src 'self' 'nonce-30463e7d71893e961698f5b656903f2633966ff39be5469742ebbfb32f9fe8b5b946bf6905a9d50fbf50ee11eb4a8568905b4e0425ea3e8c40cea891b36ace89' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; base-uri 'none';  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "inline",
        "line-number": 674,
        "column-number": 23,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "inline",`

__Answer:__ redirection on Google+

---------------------------------------
# Mastodon

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/fr/2017/10/30/Version-2.0-du-script-onglets-accessibles-et-simplification",
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://mamot.fr/web/timelines/tag/inkscape",
        "source-file": "https://van11y.net/fr/2017/10/30/Version-2.0-du-script-onglets-accessibles-et-simplification",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ `"referrer": "https://mamot.fr/web/timelines/tag/inkscape",`

__Answer:__ related to Mastodon.

---------------------------------------
# alecyueee.us

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-hide-show/",
        "referrer": "https://van11y.net/downloads/hide-show/demo/index.html",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ;  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://alecyueee.us",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Seems to be related to malicious chrome extensions ("Fabulous for Facebook", "Photozoom for Facebook", etc.)  https://superuser.com/questions/643926/some-chrome-extension-redirects-me-to-malicious-sites-when-amazon-com-is-accesse


---------------------------------------
# app.trackduck.com

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-accordion/",
        "referrer": "https://www.google.com/",
        "violated-directive": "connect-src",
        "effective-directive": "connect-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://app.trackduck.com/api/v1/project/toolbar?url=https%3A%2F%2Fvan11y.net%2Faccessible-accordion%2F&extension=chrome",
        "line-number": 1,
        "column-number": 761,
        "status-code": 0,
        "script-sample": ""

    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Probably caused by embedding page in https://trackduck.com/ (feedback tool)

---------------------------------------
# netvibes

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1706-Amelioration-progressive-et-bugs-sont-dans-un-bateau.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.netvibes.com/dashboard/2",
        "script-sample": "/* See license.txt for terms of usage */...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1706-Amelioration-progressive-et-bugs-sont-dans-un-bateau.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ ?????

__Answer:__ probably caused by embedding website/page in Netvibes. More details would be great :)

---------------------------------------
# root .mod > ._jH + .rscontainer

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

__Answer:__ Comes from https://easylist-downloads.adblockplus.org/easylist.txt (```.mod > ._jH + .rscontainer``` in the middle) and some ad blocking extensions like [uBlock Origin](https://github.com/gorhill/uBlock/issues/327) add the CSS in a `<style>` tag on the web page. Explanation kindly brought by [3ventic here](https://github.com/nico3333fr/CSP-useful/issues/29).

---------------------------------------
# Skype Assets

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-6cac35e090bfc98deede0c665c6337b24b8d934be416c8e117373fdeb04aaa3765ff89a5e78c3884cd34c1c68e63d9457a4a0ceee8c9221d07da60a32bce6a0a' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://sxt.cdn.skype.com/assets/fonts/SkypeAssets-Light.ttf",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-6cac35e090bfc98deede0c665c6337b24b8d934be416c8e117373fdeb04aaa3765ff89a5e78c3884cd34c1c68e63d9457a4a0ceee8c9221d07da60a32bce6a0a' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://sxt.cdn.skype.com/assets/fonts/SkypeAssets-Regular.ttf",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ?????

__Answer:__ related to Skype extension for Chrome: https://github.com/nico3333fr/CSP-useful/issues/27 

---------------------------------------
# material.io/resizer

```
{
    "csp-report": {
        "blocked-uri": "",
        "document-uri": "https://van11y.net/",
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors 'none'; manifest-src https://van11y.net; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://material.io/resizer/",
        "violated-directive": "frame-ancestors 'none'"
    }
}
```

__WTF:__ ?

__Answer:__ material.io/resizer tries to embed your website to test how it is displayed... and embeds it in iframes, so it can't be displayed if you don't allow it in CSP directives.

---------------------------------------
# wd7bdb20e4d622f6569f3e8503138c859d.win / partner-net.men

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-simple-tooltip/",
        "referrer": "https://github.com/atalan/a11y-resources/blob/master/list-of-a11y-resources.md",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.google-analytics.com/analytics.js",
        "line-number": 3,
        "column-number": 65,
        "source-file": "https://wd7bdb20e4d622f6569f3e8503138c859d.win/ga.js",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://van11y.net/",
        "referrer": "https://van11y.net/downloads/simple-tooltip/demo/index.html",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://wd7bdb20e4d622f6569f3e8503138c859d.win",
        "status-code": 0,
        "script-sample": ""
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
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-0cbeb2b91bdf97330b8f1f4eb10ed61b66703479440655fb8d1bdaad3855d3cddf46aa191b979406204a6b4583ecde645a50f99d7611e3c636822bda56d72f0a' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://partner-net.men/code/?pid=973820&r=8279006",
        "line-number": 215,
        "column-number": 257,

        "source-file": "https://wd7bdb20e4d622f6569f3e8503138c859d.win/ga.js",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ wd7bdb20e4d622f6569f3e8503138c859d.win

__Answer:__ related to web developer extension compromission, see https://gist.github.com/piedpiperRichard/076516da60f45842f1a6e6ae35a9a240 && https://gist.github.com/amlwwalker/c56b717e0b5236e98da7239fdb493dea

---------------------------------------
# function injectPageScriptAPI

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]",
        "line-number": 1,
        "original-policy": "default-src http://[anonymised]; script-src http://[anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src http://[anonymised] data:; img-src http://[anonymised] https://www.google-analytics.com http://www.google-analytics.com http://*.[anonymised] http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src http://[anonymised]; report-uri http://[anonymised]/csp-parser.php",
        "referrer": "https://www.google.be/",
        "script-sample": "try {\r\n(function injectPageScriptAPI(scr...",
        "source-file": "[anonymised]",
        "violated-directive": "script-src http://[anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
 ?
__WTF:__ nothing like this on the website.

__Answer:__ might be related to Adguard browser extension ? https://github.com/AdguardTeam/AdguardBrowserExtension/pull/694

---------------------------------------
# Skype web


```

{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6e06851a1ca7ed29068ff9594b4b973f43b8841f724613df1c95136c3a59eeec71de4ceeac729c5280f688c6b808878c0c77c1dce5acc9b2ba927ca0fc4c2298'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://web.skype.com/fr/",
        "script-sample": "[href^=\"https://plus.google.com/share?ur...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6e06851a1ca7ed29068ff9594b4b973f43b8841f724613df1c95136c3a59eeec71de4ceeac729c5280f688c6b808878c0c77c1dce5acc9b2ba927ca0fc4c2298'"
    }
}
```
and 
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6e06851a1ca7ed29068ff9594b4b973f43b8841f724613df1c95136c3a59eeec71de4ceeac729c5280f688c6b808878c0c77c1dce5acc9b2ba927ca0fc4c2298'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://web.skype.com/fr/",
        "script-sample": "ADS-RIGHT,\nAFS-AD,\n[ad-id^=\"googlead\"],\n...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6e06851a1ca7ed29068ff9594b4b973f43b8841f724613df1c95136c3a59eeec71de4ceeac729c5280f688c6b808878c0c77c1dce5acc9b2ba927ca0fc4c2298'"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ related to Skype, didn't find how to reproduce.

---------------------------------------
# Google tag manager


```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-anciennes-experiences.php",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.googletagmanager.com/gtm.js?id=GTM-TMLW42T",
        "line-number": 2,
        "column-number": 299,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ Loading a dubious script from Google Tag Manager. When you load it manually, the body of this script contains a function named `checkBtc` amongst other likely malicious JS code. This is a common pattern, because if you use Google Tag Manager then scripts like this would likely slip through your CSP.

---------------------------------------
# Google Search for Android


```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "android-app://com.google.android.googlequicksearchbox",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://1.1.1.1/bmi/[anonymised]/layout/images/swiss-label.png",
        "status-code": 200
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ related to google search app on android.

---------------------------------------
# Adguard Ad Blocking Filters


```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://a11y.nicolas-hoffmann.net/",
        "script-sample": ".werbung, .text_werbung, .firstload, .We...",
        "source-file": "https://www.nicolas-hoffmann.net/source/",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ might be related to Adguard Ad Blocking Filters https://adguard.com/

---------------------------------------
# ng:cloak/ngInspect_clickedEl

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-5a14701a62e1d1e782fea29568e4c1b34d9e13b579503eb9ab22849c754dc665eb10016ea1e7a767fd9463e0812f66c00f24b34c0878de0eef58f318b9b5a2df'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "@charset \"UTF-8\";[ng\\:cloak],[ng-cloak],...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-5a14701a62e1d1e782fea29568e4c1b34d9e13b579503eb9ab22849c754dc665eb10016ea1e7a767fd9463e0812f66c00f24b34c0878de0eef58f318b9b5a2df'"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-2905cfa57de27d0311c5a7926fff9ba90e2f29934fe3fe100691ae4688d46410819413d239d2338287978476be84634a7ade18863c03f8d64f20236c3dc07c5e'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "window._ngInspect_clickedEl = null;docum...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ This is not on this website. :)

__Answer:__ related to angular directive https://docs.angularjs.org/api/ng/directive/ngCloak (however, don't know how it came to this website, maybe debug tool? Might be related to https://addons.mozilla.org/fr/firefox/addon/ng-inspect/)


---------------------------------------
# ahrefs.*


```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "original-policy": "default-src https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me; script-src https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-!
 parser.php",
        "referrer": "",
        "script-sample": "onsubmit attribute on DIV element",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me https://ahrefs.com http://ahrefs.com https://*.ahrefs.me http://*.ahrefs.me https://www.estcequonmetenprodaujourdhui.info https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ ???

__Answer:__ related to https://ahrefs.com/ tool, however, I was not able to reproduce. 

---------------------------------------
# int.search.myway.com


```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "//\r\n//alert('videodownload2 begin');\r\n;(...",
        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "/*!\r\n * jQuery JavaScript Library v1.4.2...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": ";(function($){\r\n\tvar Plugin = $.Wondersh...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "//alert('jQuery.Wondershare_WSVCU_Plugin...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "/*!\n * jquery.base64.js 0.1 - https://gi...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "//WS\u00e8\u00a7\u0086\u00e9\u00a2\u0091\u00e4\u00b8\u008b\u00e8\u00bd\u00bd\u00e6\u008f\u0092\u00e4\u00bb\u00b6\u00e8\u00be\u0085\u00e5\u008a\u00a9\u00e5\u00ae\u009e\u00e7\u008e\u00b0\u00e5\u008d\u0095\u00e5\u0085\u0083...",
        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://int.search.myway.com/search/GGmain.jhtml?p2=%5EBYC%5Exdm024%5ELMFRFR%5Efr&ptb=97120439-8D7B-41CC-84DD-7E9B53B40901&n=78399c5d&ind=&cn=fr&ln=fr&si=&tpr=hpsb&trs=wtt&brwsid=1afe115d-7025-46e5-9a3d-42b6374704b5&searchfor=Photos%20de%20la%20cascade%20du%20rouget&st=tab",
        "script-sample": "\r\n;(function($){\r\n\tjq_relocation = $.rel...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cascade_rouget.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
Etc.



__WTF:__ ???

__Answer:__ all related to int.search.myway.com, however, I was not able to reproduce.

---------------------------------------
# Google Analytics Opt-out Add-on

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.youtube.com/",
        "script-sample": "window[\"_gaUserPrefs\"] = { ioo : functio...",
        "source-file": "https://www.nicolas-hoffmann.net/source/",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ might be related to Google Analytics Opt-out Add-on: https://github.com/sj26/mailcatcher/issues/205

---------------------------------------
# feedly.com

```

{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1704-Je-hacke-le-retour-d-experience-via-un-phrase-veloute-Sud-Web.html",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://feedly.com/i/category/Webdesign",
        "script-sample": "call to eval() or related function blocked by CSP",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ Probably caused by RSS-reader like feedly.

---------------------------------------
# audiocdn.lingualeo.com


```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://habrahabr.ru/company/zfort/blog/328636/",
        "violated-directive": "media-src",
        "effective-directive": "media-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://audiocdn.lingualeo.com/v2/1/1771-631152008.mp3",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website (not in sources, neither in scripts). (a mp3 that says ARIA!)

__Answer:__ seems like http://lingualeo.com/ is a tool to learn languages.

---------------------------------------
# yellowads.men


```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://yellowads.men/code/pid/812933_BNX.js?rev=479",
        "line-number": 1,
        "column-number": 894,
        "source-file": "https://yellowads.men/code/?pid=812933&r=8076680",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ probably malware on client side (see https://www.supprimervirus.net/supprimer-b-yellowads-men/ in french)

---------------------------------------
# volcanicpixels.com


```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-18be64c7f0c944fcb4616aaa4bedf3b3b68f137d288bdbe5431f83db2659ccc084dfb1772f70aeeb6990db7c731d7052ea3fa87ad1853cf47f6a92c96478266f' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://commondatastorage.googleapis.com/assets.volcanicpixels.com/webfonts/blokk/BLOKKRegular.woff",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ probably related to https://www.volcanicpixels.com/

---------------------------------------
# jsl.infostatsvc.com


```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1302-Balise-video-de-HTML5-comment-l-inserer.html",
        "referrer": "https://www.google.tn/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://jsl.infostatsvc.com/?InitException_3=1163|,|EvalError%3A%20Refused%20to%20evaluate%20a%20string%20as%20JavaScript%20because%20%27unsafe-eval%27%20is%20not%20an%20allowed%20source%20of%20script%20in%20the%20following%20Content%20Security%20Policy%20directive%3A%20%22script-src%20%27self%27%20google-analytics.com%20stats.g.doubleclick.net%20https%3A%2F%2Fstats.g.doubleclick.net%22.%0A|,|7b4157d9-ecfb-4481-8e94-9f8f55a3e7f3|,|0|,|1000R|,|Chrome|,|Browser",
        "status-code": 0
    }
}

```

__WTF:__ nothing like this on the website.

__Answer:__ it seems to be an adware on client side: https://malwaretips.com/blogs/remove-jsl-infostatsvc-com-virus/

---------------------------------------
# GeckoScriptBridge.js

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 48,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-dd3204dc997ae03878f3be16ed08edd4b56f28feb5f91d78c828174b83475f5d0c89f80e537f9e71dc805a5cecbfe9c54189040bc027e10120fa81630fbb2094'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "call to eval() or related function blocked by CSP",
        "source-file": "jar:file:///C:/Program%20Files%20(x86)/ZennoLab/RU/ZennoPoster%20Pro/5.10.7.0/Progs/XulFx.xpi!/components/GeckoScriptBridge.js",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ probably an extension on Firefox (related to http://zennolab.com/en/products/zennoposter/ ?).


---------------------------------------
# password toggler

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/en/builder-css",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net; img-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://rocssti.net; connect-src https://rocssti.net; child-src https://rocssti.net; frame-ancestors 'none'; manifest-src https://rocssti.net; form-action https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "https://github.com/nico3333fr/ROCSSTI",
        "script-sample": ".password-toggler-button-parent {positio...",
        "source-file": "https://rocssti.net/en/builder-css",
        "violated-directive": "style-src https://rocssti.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ might be related to this extension: https://github.com/pckltr/password-toggler 

---------------------------------------
# zscaler.net

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 33,
        "original-policy": "default-src 'none'; script-src https://*.zscaler.net https://www.estcequonmetenprodaujourdhui.info; style-src https://*.zscaler.net https://www.estcequonmetenprodaujourdhui.info 'nonce-4515373d1f1bbf1fb067e0413eb950978109202566edfe05826f0654dfb581b133a5b9e824faad5d2a46ffe5c3068cdfe576568f48e3ae604a9c1ce597ccb59a'; img-src https://*.zscaler.net https://www.estcequonmetenprodaujourdhui.info data:; font-src https://*.zscaler.net https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.google.fr/search?q=est-ce+qu%27on+met+en+prod+aujourd%27hui&ie=utf-8&oe=utf-8&safe=active&gws_rd=cr&ei=dpPwWKS5NoObU-yrvrAJ",
        "script-sample": "\n\nbody {\n  background: #fff;\n  color: #0...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://*.zscaler.net https://www.estcequonmetenprodaujourdhui.info 'nonce-4515373d1f1bbf1fb067e0413eb950978109202566edfe05826f0654dfb581b133a5b9e824faad5d2a46ffe5c3068cdfe576568f48e3ae604a9c1ce597ccb59a'"
    }
}
```
or 
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 33,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-34341fafadab0a7272c62cddbde2fc8eaca52160cdf3977ae2775ec4e460d5416d5e1104371cb1f5633c7e2615bd8d778949e6cc704751f3e88241d243a4c9e8'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://login.zscalertwo.net/sfc_upq?origurl=https%3A%2F%2Fwww%2eestcequonmetenprodaujourdhui%2einfo%2f&_ordtok=RN43WVqnbHJrHTVMqVqkWnSDpR&smup_ca=ifVFH1s2wK3jKL7Q&smup_ci=4b2WWVhRN3F2s&smupcat=akpEMmY3bjU1RkZnTg",
        "script-sample": "\n\nbody {\n  background: #fff;\n  color: #0...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-34341fafadab0a7272c62cddbde2fc8eaca52160cdf3977ae2775ec4e460d5416d5e1104371cb1f5633c7e2615bd8d778949e6cc704751f3e88241d243a4c9e8'"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1209-Clim-City-enfin-reussi.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "font-src https://*.zscalertwo.net 'self'",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none'; script-src https://*.zscalertwo.net 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://*.zscalertwo.net 'self' data:  ; img-src https://*.zscalertwo.net 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ; connect-src https://*.zscalertwo.net 'self'; font-src https://*.zscalertwo.net 'self'; media-src https://*.zscalertwo.net 'self'; object-src https://*.zscalertwo.net 'self' www.youtube.com ; child-src https://*.zscalertwo.net 'self' ; frame-ancestors 'self' ; manifest-src https://*.zscalertwo.net 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "blocked-uri": "data",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website (no zscaler.net in this website CSP policy).

__Answer:__ zscaler is a cloud web security solution, any idea how it changes CSP settings for a website?

---------------------------------------
# comic-sans-replacer

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-76972fbfb86f1f6b41a0174d3c05b814d0d47e4aaa20d33b1da9e93d66bb8183fd39cc383d7d6bfc382dc3d08cd42eb78337aaec644abd4892e7cd1afa73830d' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://cdn.jsdelivr.net/comic-sans-replacer/1.1/fonts/ComicNeue-Regular.ttf",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ might be related to this extension: https://github.com/niutech/comic-sans-replacer (see http://comicneue.com/)

---------------------------------------
# rdc.apicit.net/tags.clickintext.net

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-a1c74e229ddba899e0755f048c03cbef27f7b82c91246ed161cb7eb96e92f2de170082a9a64d133e3aec9e5a339a0627ee6d860a016ad7397c40ca0dc9781131' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://rdc.apicit.net/addtrack/index.fr.r1s147942.jquery.js?_=1491288121",
        "line-number": 12,
        "column-number": 31,
        "source-file": "https://tags.clickintext.net/fNTzhFiADKTTZ",
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ probable malware/ads on client. (to confirm)


---------------------------------------
# Anti adblock killer

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src 'unsafe-eval' 'self' www.3-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';script-src 'unsafe-eval' 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net;style-src 'self' 'unsafe-inline';img-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data:;font-src 'self';child-src 'self';frame-ancestors 'none';manifest-src 'self';report-uri /csp-parser.php;",
        "blocked-uri": "https://reek.github.io/anti-adblock-killer/k2Uw7isHrMm5JXP1Vwdxc567ZKc1aZ4I.js",
        "line-number": 787,
        "column-number": 18,
        "status-code": 0
    }
}
```

__WTF:__ no script like this on the website ```anti-adblock-killer```.

__Answer:__ related to https://github.com/reek/anti-adblock-killer use.


---------------------------------------
# getpingu

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-5a294a67d2b3dbad928c8c7f3c9a9e8863c64676f6f5a3cd3297f933bc668f4fb18a672b7a0bbba10556c08664c8828a1cca6b652430dc7061919d4e95082192' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://getpingu.com/assets/fonts/icomoon/icomoon.ttf",
        "status-code": 0
    }
}
```

__WTF:__ no asset like this on the website ```https://getpingu.com/assets/fonts/icomoon/icomoon.ttf```.

__Answer:__ probably related to a Chrome extension of https://getpingu.com/.


---------------------------------------
# BitDefender js injection?

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "referrer": "",
        "violated-directive": "style-src 'self' data:  ",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "inline",
        "source-file": "https://www.nicolas-hoffmann.net/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&0=0&0=0",
        "line-number": 195,
        "column-number": 10,
        "status-code": 0
    }
}
```

__WTF:__ no file like https://www.nicolas-hoffmann.net/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&0=0&0=0" on this website

__Answer:__ a bug from BitDefender https://forum.bitdefender.com/index.php?/topic/36108-netdefenderhuindhuijs/ && https://www.mediawiki.org/wiki/Topic:Sfreu9aqsah82mdz


---------------------------------------
# var Cacaoweb

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]",
        "line-number": 1,
        "original-policy": "default-src [anonymised]; script-src [anonymised] http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval'; style-src [anonymised] data: 'unsafe-inline'; img-src [anonymised] http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src [anonymised]; report-uri [anonymised]/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "var Cacaoweb = { callbackIsRunning: func...",
        "source-file": "[anonymised]/fr/",
        "violated-directive": "script-src [anonymised] http://www.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval'"
    }
}
```

__WTF:__ var Cacaoweb = { callbackIsRunning… (nothing like this on this website)

__Answer:__ Might be related to an extension named Cacaoweb https://github.com/PinoDeiPalazzi/cacaowebinterface/blob/master/chrome%20addon/cacaoweb.js


---------------------------------------
# uBlock and Faceporn (yes!)

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-IfAzvGfLDZPy2xJ5ew818hNfNFX8X8IDJleC1bw0+4laSFwurX1LT76CTFga'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "[href^=\"http://www.faceporn.net/free?\"]\n...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-IfAzvGfLDZPy2xJ5ew818hNfNFX8X8IDJleC1bw0+4laSFwurX1LT76CTFga'"
    }
}
```

__WTF:__ faceporn.net ?????????????????????????????????????????????????????????? (nothing like this on this website)

__Answer:__ Might be related to an issue in extensions like uBlock https://github.com/chrisaljoudi/uBlock/issues/161 that are inserting inline-styles to hide links pointing out to this.

---------------------------------------
# Android webview

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1301-Balise-video-Ogg-Theora-Mp4-et-HTML5.html",
        "referrer": "https://www.google.com/search?q=mp4&hl=fr&source=android-browser-type&prmd=svin&source=lnms&tbm=vid&sa=X&ved=0ahUKEwiikYPD_ZXSAhWjHsAKHQoNAgkQ_AUICCgB",
        "violated-directive": "img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "android-webview",
        "status-code": 0

    }
}
```

__WTF:__ android-webview

__Answer:__ web view in android app.


---------------------------------------
# Devtools ?

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'unsafe-inline'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "window.devToolsOptions = Object.assign(w...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ window.devToolsOptions

__Answer:__ might be related to [Redux DevTools extension](http://extension.remotedev.io/) (to confirm).  


---------------------------------------
# Digg

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/realisations-css-rocssti",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net; img-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://rocssti.net; connect-src https://rocssti.net; child-src https://rocssti.net; frame-ancestors 'none'; manifest-src https://rocssti.net; form-action https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "https://t.co/JFev84Iili",
        "script-sample": "dummyRuleForDigg{}",

        "source-file": "https://rocssti.net/realisations-css-rocssti",
        "violated-directive": "style-src https://rocssti.net"
    }
}
```

__WTF:__ dummyRuleForDigg{} ?

__Answer:__ caused by Digg, but don't have any details on how it happens (extension, other ?).

---------------------------------------
# Evernote

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1573-Guides-de-styles-CSS-pour-integrateur.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors 'none'; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "http://openweb.eu.org/articles/taking-css-conventions-and-document-them",
        "script-sample": "/* Copyright 2014 Evernote Corporation. ...",

        "source-file": "https://www.nicolas-hoffmann.net/source/1573-Guides-de-styles-CSS-pour-integrateur.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ Copyright 2014 Evernote

__Answer:__ caused by Evernote Web Clipper, https://discussion.evernote.com/topic/85811-evernote-adding-styling-to-my-html-in-phpstorm/


---------------------------------------
# CSP What The Font number two

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/fr/infobulles-tooltips-accessibles/",
        "referrer": "https://t.co/TgcBdtHiqn",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://themes.googleusercontent.com/static/fonts/inconsolata/v5/BjAYBlHtW3CJxDcjzrnZCIbN6UDyHWBl620a-IRfuBk.woff",
        "status-code": 0
    }
}
```
and
```
{
    "csp-report": {
        "document-uri": "https://rocssti.net/realisations-css-rocssti",
        "referrer": "https://t.co/JFev84Iili",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' ; img-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  font-src 'self'; connect-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://themes.googleusercontent.com/static/fonts/rosarivo/v1/OGdIq-p0tOtBN2VMVvO9W_esZW2xOQ-xsNqO47m55DA.woff",
        "status-code": 0

    }
}
```

__WTF:__ Inconsolata et Rosarivo are not used on these sites, neither any reference to CSS from google font. (?)

__Answer:__ Related to extension that allow to personnalize fonts, like https://chrome.google.com/webstore/detail/font-changer-with-google/jgjhhoglgjdklldfgoffdiaceffijeke/related

---------------------------------------
# CSP What The Font number one

```
{
    "csp-report": {
        "document-uri": "about:blank",
        "referrer": "",
        "violated-directive": "font-src 'self'",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://github.com/google/fonts/blob/master/apache/opensans/OpenSans-Light.ttf?raw=true",
        "status-code": 0
    }
}
```
and
```
{
    "csp-report": {
        "document-uri": "about:blank",
        "referrer": "",
        "violated-directive": "font-src 'self'",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxko2lTMeWA_kmIyWrkNCwPc.woff2",
        "status-code": 0

    }
}
```

__WTF:__ Open Sans is suggested on the website https://www.estcequonmetenprodaujourdhui.info/ but not from Github or Google, and not even loaded from a webfont.

__Answer:__ Might be related to extension that allow to personnalize fonts, like https://chrome.google.com/webstore/detail/font-changer-with-google/jgjhhoglgjdklldfgoffdiaceffijeke/related

---------------------------------------
# Opera mini double WTF

```
{
    "csp-report": {
        "document-uri": "[Anonymised]",
        "referrer": "https://www.google.ch/",
        "violated-directive": "style-src 'self' data: ",
        "effective-directive": "style-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://adblockers.opera-mini.net",
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
        "violated-directive": "style-src",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-1e06551000a8d8186c9e4fa4b3a3d42536156246d4f94be747dea5b2b3513850dbfd186ffd8bf437b33ead6c16f9bdb4b349156b75e91a1f8df880471cf69bb3' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://adblockers.opera-mini.net/css_block/page_0_24e0kl4y70wbt1yl6ubo6mmu4iikj9axe517otg3vbutjnpeiy.css",
        "line-number": 143,
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",

        "status-code": 0
    }
}
```
and
```
{
    "csp-report": {
        "document-uri": "[Anonymised]",
        "referrer": "https://www.google.ch/",
        "violated-directive": "script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "opera://js-inject",

        "status-code": 200
    }
}
```

__WTF:__ adblockers.opera-mini.net and opera://js-inject ???

__Answer:__ related to Opera Mini (these 2 notification came at the same time on the same page). If you have more details on how Opera mini works (I’m not expert in Opera mini), do not hesitate to complete.


---------------------------------------
# ms-browser-extension

```
{
    "csp-report": {
        "document-uri": "http://www.visionclinique.ch/fr/la-clinique",
        "referrer": "http://www.visionclinique.ch/fr/",
        "violated-directive": "img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ; style-src 'self'  data: 'unsafe-inline' ; img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "ms-browser-extension",
        "status-code": 200

    }
}
```

__WTF:__ ms-browser-extension ? 

__Answer:__ browser extension on Edge/IE ? (to confirm, I don't know how to reproduce)



---------------------------------------
# ISP updates/adds files on mobiles

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "http://www.google.fr/",
        "violated-directive": "img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://91.68.209.8/bmi/[anonymised]/layout/images/…",
        "status-code": 200
    }
}
```

__WTF:__ no code like this 91.68.209.8/bmi/ on the website.

__Answer:__ might be related to some ISPs that are inserting scripts on your website, probably with proxies (see http://security.stackexchange.com/questions/9368/mobile-carrier-javascript-injection or https://reflets.info/sfr-modifie-le-source-html-des-pages-que-vous-visitez-en-3g/ in french).


---------------------------------------
# Google translate

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "[anonymised]",
        "violated-directive": "img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "https://www.gstatic.com/images/branding/product/2x/translate_24dp.png",
        "status-code": 200
    }
}
```

__WTF:__ no code like this on this website.

__Answer:__ related to Google Translate <del>however, to confirm in which exact case it happens</del>, Pavel B. confirmed: happens when a user translates the page using Google Translate inside Google Chrome (at least on Android, did not happen in Chrome for desktop).


---------------------------------------
# onsubmit/onchange/onfocusin/etc. attribute on DIV element

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-accordion/",
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors 'none'; manifest-src https://van11y.net; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://www.google.com.au/",
        "script-sample": "onsubmit attribute on DIV element",
        OR
        "script-sample": "onchange attribute on DIV element",
        OR 
        "script-sample": "onfocusin attribute on DIV element",
        OR
        "script-sample": "onselectstart attribute on DIV element", 

        "source-file": "https://van11y.net/accessible-accordion/",
        "violated-directive": "script-src https://van11y.net"
    }
}
```

__WTF:__ WTF is this? (no event like this on this website)

__Answer:__ This seems to be related to a check in Jquery 1.x. See https://bugzilla.mozilla.org/show_bug.cgi?id=1336076 for details


---------------------------------------
# pstatic.davebestdeals.com

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "https://www.google.pl/",
        "violated-directive": "script-src 'self' *.google-analytics.com stats.g.doubleclick.net ",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' *.google-analytics.com stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' *.google-analytics.com stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://pstatic.davebestdeals.com/nwp/v0_0_1143/release/Shared/App/SharedApp.js?t=3",

        "line-number": 2,
        "column-number": 1381,
        "source-file": "http://istatic.davebestdeals.com/fo/ec/ade.js?subid=test5",
        "status-code": 200
    }
}
```

__WTF:__ WTF is this? (no source like this in the website)

__Answer:__ Might be a malware on client machine: http://urlquery.net/report.php?id=1482137618866 (to confirm)


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

__Answer:__ related to React Devtools Chrome extension https://github.com/facebook/react-devtools/blob/master/backend/installGlobalHook.js (thanks @julienbrument)


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

## "Reader" in Maxthon browser

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

__Answer:__ according to https://github.com/nico3333fr/CSP-useful/issues/36 it is related to reader mode with Maxthon (thanks to @ngyikp for the tip)

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

## Kaspersky crap

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "original-policy": "default-src 'none'; connect-src https://www.nicolas-hoffmann.net https://ff.kis.v2.scr.kaspersky-labs.com wss://ff.kis.v2.scr.kaspersky-labs.com; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ff.kis.v2.scr.kaspersky-labs.com wss://ff.kis.v2.scr.kaspersky-labs.com; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data: https://ff.kis.v2.scr.kaspersky-labs.com wss://ff.kis.v2.scr.kaspersky-labs.com; style-src https://www.nicolas-hoffmann.net data: 'nonce-CE685168D546AE408DFC9824262D6189' https://ff.kis.v2.scr.kaspersky-labs.com wss://ff.kis.v2.scr.kaspersky-labs.com; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https:!
 //www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "transform:translate(NaNpx, NaNpx);",

        "source-file": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data: 'nonce-CE685168D546AE408DFC9824262D6189' https://ff.kis.v2.scr.kaspersky-labs.com wss://ff.kis.v2.scr.kaspersky-labs.com"
    }
}
```

__WTF:___ ```"script-sample": "transform:translate(NaNpx, NaNpx);",``` seriously.

__Answer:__ still Kaspersky doign some crap.


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
or
```
        "script-sample": "#ghostery-button{z-index: 2147483646 !im...",
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
# "LoadingPages" malware

### Known list of domains
```
dataloading.net
loadingdata.site
loadingpabes.info
loadingpage.info
loadingpages.me
loadingpageson.science
loadingpagesos.bid
loadingpagesos.download
loadingpagesose.date
loadingpagesson.club
loadingpales.info
loadingpaqes.info
nonfas.us
querfi.us
```

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
or 
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://www.loadingpage.info/jo/is?id=ABAB9665-4319-5B30-8BA5-E65A0FA34045&d=0000a645-d7f1-414d-9748-0a6a64cd0553&cl=pcpc",
        "line-number": 1,
        "column-number": 268,
        "status-code": 0
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://van11y.net/fr/modale-accessible/",
        "referrer": "https://t.co/Jg07AwKRhR",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://loadingpaqes.info/jo/is?id=85A70030-25F8-5A51-8140-4CA4FFB108E4&d=3168a8ab-1bcf-41ba-a65d-762b1336fdca&cl=upd",
        "line-number": 1,
        "column-number": 264,
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
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
or 
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://loadingpagesos.download/jo/is2?id=3A598687-2F6E-53F1-9054-DBE586472F44&d=5a01fca9-d552-45e9-a47c-f34d2a14e626&cl=upd",
        "line-number": 1,
        "column-number": 271,
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "http://loadingpagesson.club/jo/is2",
        "line-number": 1,
        "column-number": 268
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "http://loadingpagesos.bid/jo/is2",
        "line-number": 1,
        "column-number": 266
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "http://loadingpageson.science/jo/is2",
        "line-number": 1,
        "column-number": 270
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ Based on this: https://stackoverflow.com/questions/44265331/why-chrome-browser-automatically-send-cross-origin-request-to-http-loadingpage this is a hacked MacOS Client.

---------------------------------------
# const V8_STACK_

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-047029342697026cb2f6f7a85794cde34108f59845b90a35a7605918fb73ae04a2a268e02aff1d654593e2abf237aafec20258c588da9fd81c6fb3df4baf3266'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function (ERROR) {\n\n    const V8_STACK_...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-4518704035a96cf7a2b2254a811878c1a6e45e647700026870a435596f5aa7f0aab5685a0b8a707f03322340e4e6b9ce7acba9a6f302f016af53d4f4d0012c03'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function (NAVIGATOR, OBJECT) {\n\n    OBJ...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"script-sample": "(function (ERROR) {\n\n    const V8_STACK_...",`
__WTF:__ `"script-sample": "(function (NAVIGATOR, OBJECT) {\n\n    OBJ...",` (not present on the website of course)

__Answer:__ Injected by [Privacy Badger](https://www.eff.org/privacybadger) [(Source)](https://github.com/EFForg/privacybadger/blob/b654b487b3696e4a9c4f011ebceb06fe7182adb1/src/js/contentscripts/fingerprinting.js#L26) and [(Source)](https://github.com/EFForg/privacybadger/blob/ef6a2b38b2550e8805076b072645367c4e044a79/src/js/contentscripts/dnt.js#L23)

---------------------------------------
# Vue devtools

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; worker-src https://van11y.net; base-uri 'none'; form-action 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://van11y.net/",
        "script-sample": ";(function(e){let t={};if(e.hasOwnProper...",
        "source-file": "https://van11y.net/accessible-tab-panel/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"script-sample": ";(function(e){let t={};if(e.hasOwnProper...",` (not present on the website of course)

__Answer:__ Injected by the [Vue devtools](https://github.com/vuejs/vue-devtools) [(Source)](https://github.com/vuejs/vue-devtools/blob/master/src/backend/hook.js)

---------------------------------------
# savingsslider-a.akamaihd.net / canvaspl-a.akamaihd.net

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
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "violated-directive": "img-src 'self' data: [anonymised]",
        "effective-directive": "img-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://canvaspl-a.akamaihd.net",
        "source-file": "https://savingsslider-a.akamaihd.net",
        "line-number": 29,
        "column-number": 138
    }
}
```

__WTF:__ nothing like this on the website ```savingsslider-a.akamaihd.net```.

__Answer:__ Appears to be a malware (browser extension Savings Slider): https://malwaretips.com/blogs/savings-slider-virus/ (these are not on the sites, but on client machine)

---------------------------------------
# Free games with adware browser extension

### Known list of domains:
```
elsewheregames.com
fungamesshop.com
gameandslash.com
gamephrase.com
gamersurface.com
pinballpal.com
```

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://gamephrase.com/api/pcgc",
        "line-number": 1,
        "column-number": 17112,
        "source-file": "[anonymised]"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://elsewheregames.com/api/pcgc",
        "line-number": 1,
        "column-number": 17325,
        "source-file": "[anonymised]"
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://fungamesshop.com/api/pcgc?iid=5d640da1-43aa-43b4-abeb-13c2f6a2a36f&iidList=5d640da1-43aa-43b4-abeb-13c2f6a2a36f&ipt=false&itt=false",
        "line-number": 1,
        "column-number": 416874
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://gamersurface.com/api/pcgc?iid=9632d345-9768-4975-95d6-f6be20a9519c&iidList=9632d345-9768-4975-95d6-f6be20a9519c&ipt=false&itt=false",
        "line-number": 1,
        "column-number": 17325
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://pinballpal.com/api/pcgc?iid=6ca7da4e-2638-4198-84fc-78d26dc73484&iidList=6ca7da4e-2638-4198-84fc-78d26dc73484&ipt=false&itt=false",
        "line-number": 1,
        "column-number": 17325
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "connect-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://gameandslash.com/api/pcgc?iid=a12e8011-68ea-4b30-9578-c0db8da6db3a&iidList=a12e8011-68ea-4b30-9578-c0db8da6db3a&ipt=false&itt=true",
        "line-number": 1,
        "column-number": 17325
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ seems it's coming from a browser extension [GamePhrase](http://www.gamephrase.com/about-us/)/[ElsewhereGames](http://www.elsewheregames.com/about-us/) (free browser games, they require to install their extension)

---------------------------------------
# QualityCheck/ga.js

```
{
    "csp-report": {
        "blocked-uri": "http://m59.prod2016.com/QualityCheck/ga.js",
        "document-uri": "[anonymised]",
        "original-policy": "default-src [anonymised]; script-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src [anonymised] data:; img-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://*.[anonymised] http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; report-uri [anonymised]csp-parser.php",
        "referrer": "",
        "violated-directive": "script-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ ????? 

__Answer:__ Appears to be a adware/malware, according to these lists https://github.com/StevenBlack/hosts, [also this thread](https://meta.stackexchange.com/questions/267846/dnsunlocker-intrusive-ads) (these are not on the sites, but on client machine)

---------------------------------------
# Apple QuickLook

```
EvalError: Refused to evaluate a string as JavaScript because 'unsafe-eval' is not an allowed source of script in the following Content Security Policy directive: "default-src x-apple-ql-id: 'unsafe-inline'".
```

__WTF:__ This is an error from template Function constructor

__Answer:__ This is a bug in Apple QuickLook. When you e.g. open Excel document from your page, it is opened in browser using QuickLook and QuickLook patches your CSP policy to add "x-apple-ql-id:" source. When you navigate back, CSP is not restored and could lead to violation reports.

---------------------------------------
# blackspider.com

```
original-policy: [default-src proxy-login.blackspider.com ssl-proxy-login.blackspider.com; font-src 'self' https://fonts.gstatic.com; frame-ancestors 'none'; img-src 'self' proxy-login.blackspider.com ssl-proxy-login.blackspider.com; report-uri /csp; script-src 'self' 'report-sample' proxy-login.blackspider.com ssl-proxy-login.blackspider.com; style-src 'self' 'unsafe-inline' proxy-login.blackspider.com ssl-proxy-login.blackspider.com]
```

__WTF:__ I don't have any blackspider junk in my CSP policy

__Answer:__ Your user (or his company) uses security ~crapware~ software that mess with visited sites, probably using fake SSL certificates (https://blackspider.com), as they need to inject this policy changes into SSL connection. Good side is that there were no errors observed yet due to this software.

---------------------------------------
# getstencil.com

```
{
    "csp-report": {
        "blocked-uri": "https://getstencil.com",
        "document-uri": "[your_site_uri]",
        "original-policy": "[skip]... frame-src 'none'; ...[skip]",
        "violated-directive": "frame-src"
    }
}
```

__WTF:__ ????? 

__Answer:__ Looks like user with plugin from https://getstencil.com. This plugin use iframe to embed visited site.

---------------------------------------
If you have some examples to share (even if you don't know what the fuck it is coming from), feel free to share them. Anonymize the URL/policy if needed.
