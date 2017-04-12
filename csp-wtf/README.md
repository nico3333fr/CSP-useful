# CSP, WTF?

Sometimes, CSP notifications are __really difficult to understand or very strange__. Here is a collection of some CSP WTF.
If you have an idea (even if the idea is WTF) for some of these, do not hesitate to participate :)

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
# data1.itineraire.info ?

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

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

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
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.aprotec.ch stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://adblockers.opera-mini.net",
        "status-code": 200

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
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.aprotec.ch stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
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

__WTF:__ WTF is this? (no source like this in this website)

__Answer:__ Any idea?


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
