# CSP, WTF?

Sometimes, CSP notifications are __really difficult to understand or very strange__. Here is a collection of some CSP WTF.
If you have an idea (even if the idea is WTF) for some of these, do not hesitate to participate :)


---------------------------------------
# promlinkdev.com

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/fr/carrousel-accessible/",
        "referrer": "https://www.google.com/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "upgrade-insecure-requests;  block-all-mixed-content; default-src 'none' ;  script-src 'self'; style-src 'self' 'nonce-521bad469d4e2cf9d6bc53a042c41812693d322f02c71d4a49dd15638d9b2ea89ffc28b0aa48fe251977ca6a651b05211069937661a04a25e3c42a669b3d0f39' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ; base-uri 'none' ; form-action 'none' ;   report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://promlinkdev.com/metric/?mid=&wid=52190&sid=&tid=7537&rid=FINISHED&custom1=van11y.net&t=1545148039090",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://promlinkdev.com/metric/?mid=&wid=52190&sid=&tid=7537&rid=FINISHED&custom1=van11y.net&t=1545148039090",`

__Answer:__ might be related to a Chrome plugin/malware that collects infos? https://twitter.com/ppcelery/status/1034684436405776385 (to confirm)

---------------------------------------
# "blocked-uri": "inline"

```
{
    "csp-report": {
        "blocked-uri": "inline",
        "column-number": 1,
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src 'self'; style-src 'self' 'nonce-9c4e6327b3e08a59727c9510d1428a2373f7a3e21e77dcf3a0a5664a6671ddf44348f8f4436fdd5234fea8d89bf51e49597fc4f62906b476939fed70b618c838'; img-src 'self' data:; font-src 'self'; child-src 'self' https://www.youtube.com; frame-src 'self' https://www.youtube.com; frame-ancestors 'self'; manifest-src 'self'; worker-src 'self'; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",

        "referrer": "",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"blocked-uri": "inline",`

__Answer:__ any idea? (had it a lot on several websites)

---------------------------------------
# secure.myshopcouponmac.com

```
{
    "csp-report": {
        "document-uri": "http://www.visionclinique.ch/fr/",
        "referrer": "https://www.bing.com/",
        "violated-directive": "script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ; style-src 'self'  data: 'unsafe-inline' ; img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ; child-src 'self' ; connect-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://secure.myshopcouponmac.com",
        "status-code": 200
    }
}
```

__WTF:__ `"blocked-uri": "http://secure.myshopcouponmac.com",`

__Answer:__ any idea?

---------------------------------------
# nowexttype.com/metric

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://nowexttype.com/metric/?mid=&wid=52096&sid=&tid=5793&rid=FINISHED&custom1=www.nicolas-hoffmann.net&t=1534858854002",
        "status-code": 0,
        "script-sample": ""
    }
}

```

__WTF:__ `blocked-uri": "https://nowexttype.com/metric/?mid=&wid=52096&sid=&tid=5793&rid=FINISHED&custom1=www.nicolas-hoffmann.net&t=1534858854002",`

__Answer:__ any idea?

---------------------------------------
# function (DOCUMENT, dispatchEvent, CUST

```
{
    "csp-report": {
        "blocked-uri": "",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-f9e3796b32e5c5c1a8ce11ff44ef39752ad6312c871db84a2d4531fe15e5fb465f8a0e526054ff4cd9782405748dc6df1d4f1d402d5689f3a9968f5c17118295'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function (DOCUMENT, dispatchEvent, CUST...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"script-sample": "(function (DOCUMENT, dispatchEvent, CUST...",`

__Answer:__ any idea?

---------------------------------------
# Date.prefs

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-c1cc86428d1a19af063cc7eda865da40104545133f7b57a968cc505462946cea4335851e40522b0fa9487223ea42ebd8ca8837f38902465c80be41ac8874736a'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "{\n  Date.prefs = Date.prefs || ['Etc/GMT...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "{\n  Date.prefs = Date.prefs || ['Etc/GMT...",` (not present on the website of course)

__Answer:__ any idea?

---------------------------------------
# onclick attribute on MENUITEM element

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-hide-show/",
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net 'nonce-cce7e9e02a82c11be9d30cb58f6286e74056d34af3504502c9bb098cfffa35ec9fb7b42bb545ebd33198f4c387de1adc2c7824dd232fd3e6225a15bdd3b0c6e2'; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; worker-src https://van11y.net; base-uri 'none'; form-action 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://www.google.com/",
        "script-sample": "onclick attribute on MENUITEM element",
        "source-file": "https://van11y.net/accessible-hide-show/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"script-sample": "onclick attribute on MENUITEM element",` (not present on the website of course)

__Answer:__ any idea?

---------------------------------------
# window.script1528893700887, etc.

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-a75fb51f810ed69e1120e3fff6451795d41615fbf740ab2cceaafc7427f2b0b5dcdb8ba7a3a646c9eaae5360639edf55a0bbf134032d792730be81dec91f5280'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "window.script1528893700887=1;",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src"
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
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-20cfb2d2995666ce7a62fa2fb5a0be54d29c8efa59639388de15b1d365155e4c9d5b87eacc779cb1f5a8baadf9ae10bb12da22200e6849e7e6f71814fb619527'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "window.script1529679894872=1;",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ `"script-sample": "window.script1528893700887=1;",` (not present on the website of course)

__Answer:__ any idea? (I've seen it a lot on my websites)

---------------------------------------
# admixer, twkv.ru

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-dfbe534ef67b334699fb118d182c4903a2d759290e3ab4cb82a54c41bd9a03dcdf7b76eccb0363b3e22be32ab8ab352d0addf446a993bf5167df15c4a77e242a'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "div[id^=\"admixer_\"], a[href*=\".twkv.ru\"]...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-dfbe534ef67b334699fb118d182c4903a2d759290e3ab4cb82a54c41bd9a03dcdf7b76eccb0363b3e22be32ab8ab352d0addf446a993bf5167df15c4a77e242a'"
    }
}
```

__WTF:__ `"script-sample": "div[id^=\"admixer_\"], a[href*=\".twkv.ru\"]...",` (not present on the website of course)

__Answer:__ any idea?

---------------------------------------
# .ggbox, .a_p, .a_fr, .a_cn

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-dfbe534ef67b334699fb118d182c4903a2d759290e3ab4cb82a54c41bd9a03dcdf7b76eccb0363b3e22be32ab8ab352d0addf446a993bf5167df15c4a77e242a'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ".ggbox, .a_p, .a_fr, .a_cn, a[href^=\"htt...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-dfbe534ef67b334699fb118d182c4903a2d759290e3ab4cb82a54c41bd9a03dcdf7b76eccb0363b3e22be32ab8ab352d0addf446a993bf5167df15c4a77e242a'"
    }
}
```

__WTF:__ `"script-sample": ".ggbox, .a_p, .a_fr, .a_cn, a[href^=\"htt...",` (not present on the website of course)

__Answer:__ any idea?

---------------------------------------
# ;undefined

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-7e4af45f25cc287c8a81085d3e7bdb71953f93d6851842bee46edbafac94d661d5820b104241f0ee9b32a83adaed85e5a381c7628de1fec58f96a088057ae5b9'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ";undefined",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": ";undefined",` (not present on the website of course)

__Answer:__ any idea? (I've seen it a lot on my websites)

---------------------------------------
# s3gt_translate_tooltip_mini

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.com/",
        "script-sample": "#s3gt_translate_tooltip_mini { display: ...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "violated-directive": "style-src"
    }
}
```

__WTF:__ `"script-sample": "#s3gt_translate_tooltip_mini { display: ...",` (not present on the website of course)

__Answer:__ any idea?

---------------------------------------
# inter.gamefunnetwork.com

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://inter.gamefunnetwork.com/InterYield/bindevent.do?e=click&affiliate=caiydgames&subid=organic_slither&iytonly=false&disableBackButton=true&snoozeMinutes=5&adCountIntervalHours=24&maxAdCountsPerInterval=5&pop=over&doublepop=false&engover=ADV-KeywordMarketplace&attributionDisabled=false&endpoint=https%3A%2F%2Finter.gamefunnetwork.com&attributionLink=https%3A%2F%2Fgamefunnetwork.com%2Fgames%2Funinstall.php&attributionTitle=gamefunnetwork&disob=true&tabOver=true",
        "line-number": 8,
        "column-number": 15,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://inter.gamefunnetwork.com/InterYield/bindevent.do?e=click&affiliate=caiydgames&subid=organic_slither&iytonly=false&disableBackButton=true&snoozeMinutes=5&adCountIntervalHours=24&maxAdCountsPerInterval=5&pop=over&doublepop=false&engover=ADV-KeywordMarketplace&attributionDisabled=false&endpoint=https%3A%2F%2Finter.gamefunnetwork.com&attributionLink=https%3A%2F%2Fgamefunnetwork.com%2Fgames%2Funinstall.php&attributionTitle=gamefunnetwork&disob=true&tabOver=true",`

__Answer:__ any idea???? (of course, this is not present on the website)

---------------------------------------
# fdz.octapi.net

```
{
    "csp-report": {
        "blocked-uri": "https://fdz.octapi.net",
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ `"blocked-uri": "https://fdz.octapi.net",`

__Answer:__ considered as "potentially bad" on https://github.com/rtanglao/rt-csp, to confirm.

---------------------------------------
# Interaktiva rum

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/2018/01/29/New-feature-for-accessible-hide-show-script-pseudo-element",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; worker-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://t.co/Y6BUBcPZvQ",
        "script-sample": "/*\nCopyright (c) 2016 Interaktiva rum Sv...",
        "source-file": "https://van11y.net/2018/01/29/New-feature-for-accessible-hide-show-script-pseudo-element",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ `"script-sample": "/*\nCopyright (c) 2016 Interaktiva rum Sv...",`

__Answer:__ ?????

---------------------------------------
# .oo-ui-windowManager-floating

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-hide-show/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://van11y.net/downloads/hide-show/demo/index.html",
        "script-sample": ".oo-ui-windowManager-floating,\n.videoblo...",
        "source-file": "https://van11y.net/accessible-hide-show/",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ `"script-sample": ".oo-ui-windowManager-floating,\n.videoblo...",`

__Answer:__ ?????

---------------------------------------
# if (typeof document.isSecretServer

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-192ecffc96a9e2f801c015d453540a126b798e31a2acd09504f557d6c2fd09c5cf4eeda488ecce44b559413661fb854d1c8a387e10bcf756cb6d285131331ebb'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "if (typeof document.isSecretServer !== '...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "if (typeof document.isSecretServer !== '...",`

__Answer:__ any idea for this secret server?

---------------------------------------
# ht.www.sogou.com

```
{
    "csp-report": {
        "document-uri": "http://www.[anonymised]/",
        "referrer": "",
        "violated-directive": "img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ",
        "effective-directive": "img-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; connect-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; report-uri /csp-parser.php ;",
        "blocked-uri": "http://ht.www.sogou.com",
        "status-code": 200
    }
}
```

__WTF:__ `"blocked-uri": "http://ht.www.sogou.com",`

__Answer:__ any idea?

---------------------------------------
# const open = XMLHttpRequest.pro...

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "\n  {\n    const open = XMLHttpRequest.pro...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ `"script-sample": "\n  {\n    const open = XMLHttpRequest.pro...",`

__Answer:__ any idea?

---------------------------------------
# substantielwww.dyndns.org

```
{
    "csp-report": {
        "blocked-uri": "http://substantielwww.dyndns.org/configuration/webissimoonlinetrack.txt?r=https%3A%2F%2Fcse.google.fr%2Fcse%3Fsa%3DRechercher%26q%3Dtami%25C3%25A9%2Bsavoie%26position%3Dhaut%26cx%3Dpartner-pub-4856195807639056%253A7971617658%26cof%3DFORID%253A10%26ie%3DUTF-8%26ad%3Dn9%26num%3D10%26rurl%3Dhttp%253A%252F%252Fsubstantiel.fr%252Fliens%252Fresultats.php%253Fsa%253DRechercher%2526q%253Dtami%2525C3%2525A9%252Bsavoie%2526position%253Dhaut%2526cx%253Dpartner-pub-4856195807639056%25253A7971617658%2526cof%253DFORID%25253A10%2526ie%253DUTF-8%26siteurl%3Dhttp%253A%252F%252Fwww.ordissinaute.fr%252Frecherche&u=https%3A%2F%2Fwww.nicolas-hoffmann.net%2Fsource%2Fvacances_savoie_seythenex_tamie.php",
        "document-uri": "https://www.nicolas-hoffmann.net/source/vacances_savoie_seythenex_tamie.php",
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; frame-ancestors 'none'; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://cse.google.fr/cse?sa=Rechercher&q=tami%C3%A9+savoie&position=haut&cx=partner-pub-4856195807639056%3A7971617658&cof=FORID%3A10&ie=UTF-8&ad=n9&num=10&rurl=http%3A%2F%2Fsubstantiel.fr%2Fliens%2Fresultats.php%3Fsa%3DRechercher%26q%3Dtami%25C3%25A9%2Bsavoie%26position%3Dhaut%26cx%3Dpartner-pub-4856195807639056%253A7971617658%26cof%3DFORID%253A10%26ie%3DUTF-8&siteurl=http%3A%2F%2Fwww.ordissinaute.fr%2Frecherche",

        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ `"blocked-uri": "http://substantielwww.dyndns.org/configuration/webissimoonlinetrack.txt?r=https%3A%2F%2Fcse.google.fr%2Fcse%3Fsa%3DRechercher%26q%3Dtami%25C3%25A9%2Bsavoie%26position%3Dhaut%26cx%3Dpartner-pub-4856195807639056%253A7971617658%26cof%3DFORID%253A10%26ie%3DUTF-8%26ad%3Dn9%26num%3D10%26rurl%3Dhttp%253A%252F%252Fsubstantiel.fr%252Fliens%252Fresultats.php%253Fsa%253DRechercher%2526q%253Dtami%2525C3%2525A9%252Bsavoie%2526position%253Dhaut%2526cx%253Dpartner-pub-4856195807639056%25253A7971617658%2526cof%253DFORID%25253A10%2526ie%253DUTF-8%26siteurl%3Dhttp%253A%252F%252Fwww.ordissinaute.fr%252Frecherche&u=https%3A%2F%2Fwww.nicolas-hoffmann.net%2Fsource%2Fvacances_savoie_seythenex_tamie.php",`

__Answer:__ any idea?

---------------------------------------
# .reclame, .advertenties, .advertentie

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://github.com/nico3333fr/CSP-useful",
        "script-sample": ".reclame, .advertenties, .advertentie, ....",
        "source-file": "https://van11y.net/",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ `"script-sample": ".reclame, .advertenties, .advertentie, ....",`

__Answer:__ any idea? (probable extension to avoid ads)

---------------------------------------
# __defineGetter__

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6fb8f680bbaf01291e861185d08b3993646efd6130ad0e02b08e2b3eaf0f44951121666a1c0f8bc42195ffce898b0409663078c01b507d76188b6972ed67dce1'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "navigator.__defineGetter__(\"userAgent\", ...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "navigator.__defineGetter__(\"userAgent\", ...",`

__Answer:__ any idea?

---------------------------------------
# "Highlight style classes"

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://rocssti.net/realisations-css-rocssti",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://rocssti.net; img-src https://rocssti.net https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; font-src https://rocssti.net; connect-src https://rocssti.net; child-src https://rocssti.net; frame-ancestors 'none'; manifest-src https://rocssti.net; form-action https://rocssti.net; report-uri https://rocssti.net/csp-parser.php",
        "referrer": "https://t.co/JFev84Iili",
        "script-sample": "/**\n * Highlight style classes\n * .a bac...",

        "source-file": "https://rocssti.net/realisations-css-rocssti",
        "violated-directive": "style-src https://rocssti.net"
    }
}
```

__WTF:__ `"script-sample": "/**\n * Highlight style classes\n * .a bac...",`

__Answer:__ any idea? (probable extension?)

---------------------------------------
# vimiumOnClickAttributeName

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-edc352fca5a685811a2d0495d5bdf3d29235567868d4eea45576907d83d7a47ed7d93678d21ce817e4e27f306e9badea216d48ac75664d610e896831e58ff313'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function(vimiumOnClickAttributeName) {\n...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "(function(vimiumOnClickAttributeName) {\n...",`

__Answer:__ any idea?

---------------------------------------
# seo-highlighter

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1189814a4cc04dfa11266336a441908657fc64d4eb271ce60e53744aa399724d68021b157161b464f0caa9028fdba69e9752a6a0699dca7cd44de10d0f9a7a2b'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": " .seo-highlighter { border-color: red; b...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1189814a4cc04dfa11266336a441908657fc64d4eb271ce60e53744aa399724d68021b157161b464f0caa9028fdba69e9752a6a0699dca7cd44de10d0f9a7a2b'"
    }
}
```

__WTF:__ `"script-sample": " .seo-highlighter { border-color: red; b...",`

__Answer:__ any idea? (probable extension, to confirm)

---------------------------------------
# s3.amazonaws.com/js-cache

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://plainjs.com/javascript/plugins/accessible-tabs-panel-system-163/",
        "violated-directive": "style-src",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ; base-uri 'none' ;  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "inline",
        "line-number": 1,
        "column-number": 9116,
        "source-file": "https://s3.amazonaws.com/js-cache/fa25c29ce29a202e02.js",
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "referrer": "",
        "violated-directive": "style-src",
        "effective-directive": "style-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "inline",
        "line-number": 1,
        "column-number": 310,
        "source-file": "https://s3.amazonaws.com/cashe-js/1d71065a79cb556b40.js",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"source-file": "https://s3.amazonaws.com/js-cache/fa25c29ce29a202e02.js",`

__Answer:__ any idea?

---------------------------------------
# contextMenu.js

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "",
        "script-sample": "/*\n * contextMenu.js v 1.4.0\n * Author: ...",
        "source-file": "https://www.nicolas-hoffmann.net/source/",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ `"script-sample": "/*\n * contextMenu.js v 1.4.0\n * Author: ...",`

__Answer:__ any idea?

---------------------------------------
# @-webkit-keyframes load4

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "",
        "script-sample": "@-webkit-keyframes load4 {\n    0%,\n    1...",

        "source-file": "https://www.nicolas-hoffmann.net/source/",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ `"script-sample": "@-webkit-keyframes load4 {\n    0%,\n    1...",`

__Answer:__ any idea?

---------------------------------------
# function overrideDefaultMethods

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; base-uri 'none'; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "try{(function overrideDefaultMethods(r, ...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ `"script-sample": "try{(function overrideDefaultMethods(r, ...",`

__Answer:__ any idea?

---------------------------------------
# app_store.png

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://www.google.se/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self' ; child-src 'self' ; frame-ancestors 'self'  ; manifest-src 'self' ; worker-src 'self' ; base-uri 'none' ;  report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://www.paperkarma.com/images/app_store.png?1458949381",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://www.paperkarma.com/images/app_store.png?1458949381",`

__Answer:__ whaaaaaaaaat is that?

---------------------------------------
# iframe {display: none;}

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-51d3b37c305331b6dcace3a8cdd23508240c8e665aa3373291ad0998dfc2abbfdaca803454687dd7065c88ab4f077d3f8353d1b2885cfa101f2e9c58d8324a5b'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "iframe {display: none;}",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-51d3b37c305331b6dcace3a8cdd23508240c8e665aa3373291ad0998dfc2abbfdaca803454687dd7065c88ab4f077d3f8353d1b2885cfa101f2e9c58d8324a5b'"

    }
}
```

__WTF:__ `"script-sample": "iframe {display: none;}",`

__Answer:__ any idea?

---------------------------------------
# function detect (win)

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; base-uri 'none'; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://van11y.net/accessible-tab-panel/",
        "script-sample": ";(function detect (win) {\n  setTimeout(f...",
        "source-file": "https://van11y.net/",
        "violated-directive": "script-src https://van11y.net"
    }
}
```

__WTF:__ `"script-sample": ";(function detect (win) {\n  setTimeout(f...",`

__Answer:__ any idea?

---------------------------------------
# vimvixen-console-frame

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-b18622dc4ea86707289c2f632c2cb6e8490496edebfaa34b58b271562a39b383dcf8d9e702c7f923e0b3ffc373c4e122d7a6626c9376cd19e94ba7423ab4d88e'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ".vimvixen-console-frame {\n  margin: 0;\n ...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-b18622dc4ea86707289c2f632c2cb6e8490496edebfaa34b58b271562a39b383dcf8d9e702c7f923e0b3ffc373c4e122d7a6626c9376cd19e94ba7423ab4d88e'"
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
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-64b5b6e36936c335b478c542484db29c7415bbfd9b57e204056483b0e3d3b53d33ef8035ed5ac19da21c1fb4f10477c1987ce5b7dea3e0c6c52f51335a089dbf'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors https://www.estcequonmetenprodaujourdhui.info; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": ".vimvixen-hint {\n  background-color: yel...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-64b5b6e36936c335b478c542484db29c7415bbfd9b57e204056483b0e3d3b53d33ef8035ed5ac19da21c1fb4f10477c1987ce5b7dea3e0c6c52f51335a089dbf'"
    }
}
```

__WTF:__ `"script-sample": ".vimvixen-console-frame {\n  margin: 0;\n ...",`

__Answer:__ What is that? `vimvixen-console-frame`

---------------------------------------
# mc.yandex.ru

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';script-src 'unsafe-eval' 'self';style-src 'self' 'nonce-894c96c24fab0b71baa217e8c4c799ac29c71bbabfd8fa43e1ce8f327557025ed17416e8aa93eab0b795367a1782ec84eebbdc6610d5706f70d41af2410fb526';img-src 'self'  data:;font-src 'self';child-src 'self';frame-ancestors 'none';manifest-src 'self';base-uri 'none';report-uri /csp-parser.php;",
        "disposition": "enforce",
        "blocked-uri": "https://mc.yandex.ru/watch/44443582",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://mc.yandex.ru/watch/44443582",`

__Answer:__ this website does not use this. Might be ISP in russia inserting Yandex watch.js ? https://aboutdfir.com/yandex-ru-and-intrusion-investigations/

---------------------------------------
# Many CSS class names in this file

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6d7c01d7f06a094cec57dfffe62ed5ff85e7c82486b547a8248610581e9164a30b517b18c3cceb4db0a32b263cc0d8aa3d93a3e8bf8c8cd39e3769003de111b1'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "/*\n * Many CSS class names in this file ...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6d7c01d7f06a094cec57dfffe62ed5ff85e7c82486b547a8248610581e9164a30b517b18c3cceb4db0a32b263cc0d8aa3d93a3e8bf8c8cd39e3769003de111b1'"

    }
}
```

__WTF:__ `"script-sample": "/*\n * Many CSS class names in this file ...",` (not present on this site)

__Answer:__ any idea?

---------------------------------------
# cdnsure.com

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1209-Clim-City-enfin-reussi.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "frame-src",
        "effective-directive": "frame-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://cdnsure.com",
        "status-code": 0,
        "script-sample": ""

    }
}
```

__WTF:__ `"blocked-uri": "https://cdnsure.com",` (not present on this site)

__Answer:__ any idea?

---------------------------------------
# css.zohostatic.com

```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1471-astuce-CSS-input-type-submit-reset-button.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "font-src",
        "effective-directive": "font-src",
        "original-policy": "default-src 'none';  script-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' data:  ; img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data: ;  connect-src 'self';  font-src 'self'; media-src 'self'; object-src 'self' www.youtube.com ;  child-src 'self' ;  frame-ancestors 'self' ; manifest-src 'self' ; form-action 'self' ; base-uri 'none'; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://css.zohostatic.com/projects/f0/fonts/ProximaNova-Sbold-webfont.ttf",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://css.zohostatic.com/projects/f0/fonts/ProximaNova-Sbold-webfont.ttf",`

__Answer:__ any idea?

---------------------------------------
# document.currentScript.setAttribute

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-6a98a876036e4ad3245bc400ed75254e90d087fd1ac5fa214335f936f05a260a630b43a1f1a69af401117b034b7e212df2ecd371c97f6d933eaf067851080c29'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; base-uri 'none'; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.nextinpact.com/",
        "script-sample": "document.currentScript.setAttribute(\"res...",

        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}

```

__WTF:__ `script-sample": "document.currentScript.setAttribute(\"res...",`

__Answer:__ any idea?

---------------------------------------
# mstat.acestream.net

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';script-src 'unsafe-eval' 'self';style-src 'self' 'nonce-21bc187dd5669b028fa558f96694a81d4670daca21999dc750ba070ca64244ddc6a6438d34860c3fcc0a3991dd2f6cb1b204058d4693fac957817b06f90e5370';img-src 'self'  data:;font-src 'self';child-src 'self';frame-ancestors 'none';manifest-src 'self';base-uri 'none';report-uri /csp-parser.php;",
        "disposition": "enforce",
        "blocked-uri": "https://mstat.acestream.net/p2p-search/metrika.js?loc=www.estcequonmetenprodaujourdhui.info&_r=0.9360435255632686",
        "line-number": 18900,
        "column-number": 16,
        "status-code": 0,
        "script-sample": ""
    }
}
```
or
```
{
    "csp-report": {
        "document-uri": "https://www.nicolas-hoffmann.net/source/1283-Utilisation-des-sprites-CSS-ou-portes-coulissantes.html",
        "referrer": "https://www.google.fr/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';script-src 'unsafe-eval' 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net;style-src 'self' data:;img-src 'self' google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net ssl.google-analytics.com data:;connect-src 'self';font-src 'self';media-src 'self';object-src 'self' www.youtube.com;child-src 'self';frame-ancestors 'self';manifest-src 'self';form-action 'self';base-uri 'none';report-uri /csp-parser.php;",
        "disposition": "enforce",
        "blocked-uri": "https://mstat.acestream.net/ace-cast/metrika.js?loc=www.nicolas-hoffmann.net&_r=0.8785435676739033",
        "line-number": 561,
        "column-number": 35,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "https://mstat.acestream.net/p2p-search/metrika.js?loc=www.estcequonmetenprodaujourdhui.info&_r=0.9360435255632686",`

__Answer:__ probable ad network (according to https://github.com/rtanglao/rt-csp), to confirm.

---------------------------------------
# :root audio[data-po76pdm]

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-71d5da372e0ae0a8a4587c7e820966f2ef52b7d07eebb418b3762eccd2fb8001acf33241e0206ca2114f8604cba3b6079dfecad79cf0237ceaaba67bc37c8106'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.nicolas-hoffmann.net/",
        "script-sample": ":root audio[data-po76pdm],\n:root   img[d...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-71d5da372e0ae0a8a4587c7e820966f2ef52b7d07eebb418b3762eccd2fb8001acf33241e0206ca2114f8604cba3b6079dfecad79cf0237ceaaba67bc37c8106'"
    }
}
```

__WTF:__ `"script-sample": ":root audio[data-po76pdm],\n:root   img[d...",`

__Answer:__ Any idea?

---------------------------------------
# function injected(eventName, injectedIn...

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-e4a1d71a5b9f72bafaa4f7ee0fa59292790e0983c63eb05c0970dcc9bc9176696480d80a7550d7aac34ede6a9c4713f360f70d1968df935e73432f985f5e0568'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "(function injected(eventName, injectedIn...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "(function injected(eventName, injectedIn...",`

__Answer:__ Error disappears after disabling Adblock Plus 3.0?! https://issues.adblockplus.org/ticket/5953

---------------------------------------
# @media screen {@font-face{font-family:'O

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-9fc5176bcc9d274f4da65642769e4b2b63527cb81454d11090b1fdefdf5fe192f444f421bd8b4cafa4b81177e1c75f71e33f827d6124f535c468697f7eba1976'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "@media screen {@font-face{font-family:'O...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-9fc5176bcc9d274f4da65642769e4b2b63527cb81454d11090b1fdefdf5fe192f444f421bd8b4cafa4b81177e1c75f71e33f827d6124f535c468697f7eba1976'"
    }
}
```

__WTF:__ `"script-sample": "@media screen {@font-face{font-family:'O...",`

__Answer:__ Any idea? (saw it a lot in reports recently)

---------------------------------------
# trc_related_container

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "<anonymized>",
        "line-number": 1,
        "original-policy": "default-src <anonymized>; script-src <anonymized> https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src <anonymized> data:; img-src <anonymized> https://www.google-analytics.com http://www.google-analytics.com <anonymized> http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src <anonymized>; report-uri <anonymized>/csp-parser.php",
        "referrer": "",
        "script-sample": ".trc_related_container div[data-item-syn...",
        "source-file": "<anonymized>",
        "violated-directive": "style-src <anonymized> data:"

    }
}
```

__WTF:__ `"script-sample": ".trc_related_container div[data-item-syn...",`

__Answer:__ Any idea?

---------------------------------------
# l.messenger.com

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "https://l.messenger.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-e76913749ae391cd6fe3471a4b4b054b377ff0d5a64c744d75b5fcae574f96ce3dd2bc3ee0c63953f5103381ae1766b49e1462d93d1bf500507b55bbca497bb8' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "eval",
        "line-number": 10,
        "column-number": 461,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"referrer": "https://l.messenger.com/",`

__Answer:__ Messenger in web version?

---------------------------------------
# addEventListener('mousedown'

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1261cadb69dac27f61c2ffc713db69710582e794e0706ff7d70e281062a80fb25e53cf02ed73420671e997769cec53dbef0364873ce4989e75354ac7004b144c'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "document.addEventListener('mousedown', f...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ `"script-sample": "document.addEventListener('mousedown', f...",`

__Answer:__ Any idea?

---------------------------------------
# mickey-hand.png

```
{
    "csp-report": {
        "document-uri": "<anonymized>",
        "referrer": "https://www.google.de/",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "<anonymized>",
        "disposition": "report",
        "blocked-uri": "http://www.snazzyspace.com/cursorsfolder/mickey-hand.png",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ `"blocked-uri": "http://www.snazzyspace.com/cursorsfolder/mickey-hand.png",`

__Answer:__ Maybe some sort of extensions that manipulate the courser image but why do they load that using the browser?

---------------------------------------
# local IP?

```
{
    "csp-report": {
        "document-uri": "<anonymized>",
        "referrer": "",
        "violated-directive": "<anonymized>",
        "effective-directive": "connect-src",
        "original-policy": "<anonymized>",
        "blocked-uri": "https://192.168.1.81:3443",
        "status-code": 0,
        "source-file": "<anonymized>",
        "line-number": 591,
        "column-number": 11
    }
}

```

__WTF:__ `"blocked-uri": "https://192.168.1.81:3443"`

__Answer:__ Somebody doing local dev.

---------------------------------------
# body#dummybodyid .diigolet

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://van11y.net/accessible-hide-show/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://van11y.net; style-src https://van11y.net; img-src https://van11y.net; font-src https://van11y.net; connect-src https://van11y.net; child-src https://van11y.net; frame-ancestors https://van11y.net; manifest-src https://van11y.net; report-uri https://van11y.net/csp-parser.php",
        "referrer": "https://www.qwant.com/",
        "script-sample": "body#dummybodyid .diigolet,body#dummybod...",

        "source-file": "https://van11y.net/accessible-hide-show/",
        "violated-directive": "style-src https://van11y.net"
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea how to reproduce?

---------------------------------------
# pllaff-up.ru

```
{
    "csp-report": {
        "document-uri": "http://www.visionclinique.ch/en/",
        "referrer": "https://yandex.kz/clck/jsredir?from=yandex.kz%3Bsearch%2F%3Bweb%3B%3B&text=&etext=1559.24wb2jgH6MmMboHfi0H6Bk7D2_NMDHQGBGDQv0k-G7VGDyVCW8RZA40ODuO7uL17.774d9db85048e11dc10c8bb3d6770db9716374d3&uuid=&state=PEtFfuTeVD5kpHnK9lio9dFa2ePbDzX7fH_cbK-eu2V8J4cbFpzDXVHZJKQvpytSeUWqKrUImfJn8iwEFqatOg,,&&cst=AiuY0DBWFJ5Hyx_fyvalFBAG7tbgwmI_-lAb_5NHsbdOFiNzRUyp1i0F6YIyTUZ4MqaoDQQNX3FuUuTTfPev4MIkPypdbvON2O_mRgdnybvC6-e4lz3yA52PEE8tqWN3TG1h4-BGHjDo4iJtbA5pdGNT1iMSvmnYwBleO0kbUP4cR7TuzMsNYD_U682C0Hb-2zROzDqLXZMGCsEeW87qVX0OFm2CPdexqXqkqJvXKKvl3bg_LtcWv78jeadoYw_teKKQikFg4RYoO0DobhTiJ8-ChyufZzjq&data=UlNrNmk5WktYejR0eWJFYk1LdmtxbEwzM21mU1JlN2FQMElINGd2emlVOHlJWXVLdV9KVkVaQkJEZFNWUFZwVmJzSGVGT0c0eG9od1czeFRGZ3Vhakx5ZGNXbkEtbWRxcGZNclJvV1ZldVZ2ekRSTXZXZXlQQSws&sign=6b225c21dc54fb0295eaecdb33be3d79&keyno=0&b64e=2&ref=orjY4mGPRjkm1GYumWD8VpzF_kJ2sVs57K9Nmt84FMoVEqgBDx7ov6x1cZnOPS8KSvtuidR99U3HGJXMAVG420lzZb4o9zKT&l10n=ru&cts=1506680153592&mc=3.169925001442312&bu=uniq150667776385335
 5184",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'self';  script-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net 'unsafe-eval' ; style-src 'self'  data: 'unsafe-inline' ; img-src 'self' http://www.google-analytics.com https://www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://pllaff-up.ru",
        "status-code": 200,
        "script-sample": ""
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea?

---------------------------------------
# installHook

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.com/",
        "script-sample": ";(function installHook (window) {\n  var ...",
        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea?

---------------------------------------
# paypalobjects.com

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/skins-css-alternatives-site.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.nicolas-hoffmann.net/source/photo_numerique.php",
        "script-sample": "img[src=\"https://www.paypalobjects.com/f...",
        "source-file": "https://www.nicolas-hoffmann.net/source/skins-css-alternatives-site.php",

        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea?

---------------------------------------
# pubblicita

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]/fr/en-savoir-plus",
        "line-number": 1,
        "original-policy": "default-src [anonymised]; script-src [anonymised] http://*.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net; style-src [anonymised] data:; img-src [anonymised] http://*.google-analytics.com https://www.google-analytics.com http://stats.g.doubleclick.net data:; child-src [anonymised]; report-uri [anonymised]/csp-parser.php",
        "referrer": "[anonymised]/fr/",
        "script-sample": ".pubblicita, .adv_esterno, .topbanneradv...",
        "source-file": "[anonymised]/fr/en-savoir-plus",
        "violated-directive": "style-src [anonymised] data:"
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea?

---------------------------------------
# s3.amazonaws.com

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://van11y.net/?utm_source=forwebdev_tlgrm&utm_medium=announcement&utm_campaign=van11y--kollektsiya-gotovyh-k-ispolzovani",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://s3.amazonaws.com",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ????? Nothing like this on the website.

__Answer:__ Any idea?

---------------------------------------
# fileice()

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1f90226a3e842f36d22456deae329e028e298251686c3b13fb814baae38e30d2aebb76c238f8e9c34f524a8348d33dd35e67ca0dc17c1b7fb3bd2b630a1481ae'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "[onclick=\"fileice();\"],\n[onclick=\"$(this...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1f90226a3e842f36d22456deae329e028e298251686c3b13fb814baae38e30d2aebb76c238f8e9c34f524a8348d33dd35e67ca0dc17c1b7fb3bd2b630a1481ae'"
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# Google audio pronunciation files

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/",
        "referrer": "https://van11y.net/downloads/tab-panel/demo/index.html",
        "violated-directive": "media-src",
        "effective-directive": "media-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://ssl.gstatic.com/dictionary/static/sounds/oxford/feature--_us_1.mp3",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ Nothing like this on the website.

__Answer:__  audio pronunciation files of English dictionary words from Google (https://www.labnol.org/internet/download-audio-pronunciation-words/21064/), however, don't have any idea on how it happened.

---------------------------------------
# function s(t,n,e,r){t.initialize(

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1634-Attribut-SVG-viewbox-rwd-responsive.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "(function s(t,n,e,r){t.initialize(n,e,r)...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1634-Attribut-SVG-viewbox-rwd-responsive.html",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# toggleGifsOverlay

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1ee886179a6d0ad4fe881e43de988c1be686f51032edcca2c224d16776e92b1472af0f86416002f10f06e4b8bcc181d6e1eadb7eea101bbf5585f115d16763f4'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "#toggleGifsOverlay, #toggleGifsOverlay *...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-1ee886179a6d0ad4fe881e43de988c1be686f51032edcca2c224d16776e92b1472af0f86416002f10f06e4b8bcc181d6e1eadb7eea101bbf5585f115d16763f4'"

    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# password-toggler-button-parent

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

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# minvid__overlay__container

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-e025a70e91cf7811cfc2ce6e3feaa107a9d26baeb2e4e921525f1fa85fedd3c8b6a3af002af37dc05a3cc4681f89a9feb21888f20d931fd4307037f2c20db035'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "\n.minvid__overlay__container {\n    align...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-e025a70e91cf7811cfc2ce6e3feaa107a9d26baeb2e4e921525f1fa85fedd3c8b6a3af002af37dc05a3cc4681f89a9feb21888f20d931fd4307037f2c20db035'"
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# forecastfox

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-87f37adff12051ed64d95171cf07f92d6933f59edc01c008bfa82182be5eb73e691fe631c5c873d24b1dc30834c83749f7d8ec3ccac88e8b60d173157d272789'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "script-sample": "#forecastfox-boljdehmejbffnfiiicckjhafab...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-87f37adff12051ed64d95171cf07f92d6933f59edc01c008bfa82182be5eb73e691fe631c5c873d24b1dc30834c83749f7d8ec3ccac88e8b60d173157d272789'"
    }
}
```

__WTF:__ ?????

__Answer:__ related to forecastfox extension, did not find how to reproduce.

---------------------------------------
# simple-finder.com

```
{
    "csp-report": {
        "document-uri": "https://rocssti.net/",
        "referrer": "https://github.com/",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src 'self' ; img-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  font-src 'self'; connect-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; form-action 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "eval",
        "line-number": 1,
        "column-number": 186,
        "source-file": "https://simple-finder.com",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea of what is simple-finder.com ? (website is empty)

---------------------------------------
# background-image: url(resource://jid1-dg…

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]",
        "original-policy": "default-src [anonymised]; script-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src [anonymised] data:; img-src [anonymised] https://www.google-analytics.com http://www.google-analytics.com http://*.[anonymised] http://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src [anonymised]; report-uri http://[anonymised]/csp-parser.php",
        "referrer": "",
        "script-sample": "background-image: url(resource://jid1-dg...",
        "source-file": "[anonymised]",
        "violated-directive": "style-src [anonymised] data:"

    }
}
```

__WTF:__ ????? (very often seen in my CSP reports, others do https://webcompat.com/issues/4907 )

__Answer:__ Any idea?

---------------------------------------
# A9AdsMiddleBoxTop, A9AdsOutOfStockWidge

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "[anonymised]",
        "line-number": 1,
        "original-policy": "default-src [anonymised] https://*.vimeo.com https://*.akamaihd.net; script-src [anonymised] https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://*.vimeo.com https://*.vimeocdn.com https://*.newrelic.com https://*.nr-data.net; style-src [anonymised] data: https://*.vimeocdn.com; img-src [anonymised] https://www.google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net data:; child-src [anonymised] https://*.vimeo.com https://*.vimeocdn.com https://*.akamaihd.net; frame-ancestors 'none'; report-uri [anonymised]/csp-parser.php",
        "referrer": "https://www.google.com/",
        "script-sample": "#A9AdsMiddleBoxTop,#A9AdsOutOfStockWidge...",
        "source-file": "[anonymised]",
        "violated-directive": "style-src [anonymised] data: https://*.vimeocdn.com"
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# btUp.png

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "img-src",
        "effective-directive": "img-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-d140329620098a37c6d5b66e543e24f54f016ff1250e322bd6b0d8367cfe61083bfdfe4849bbdf3c5eb6e115ac612e3ecc5a60173f7929e7b95fa0cf93bda509' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://i2.cdscdn.com/imagesok/mco/btUp.png",
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# #Ad2, #AdText, #Ad_Top ...

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1586-SMACSS-architecture-evolutive-et-modulable-des-CSS.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr",
        "script-sample": "#Ad2, #AdText, #Ad_Top, #Adbanner, #Adfo...",
        "source-file": "https://www.nicolas-hoffmann.net/source/1586-SMACSS-architecture-evolutive-et-modulable-des-CSS.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ ?????

__Answer:__ Any idea?

---------------------------------------
# undroider

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "referrer": "https://www.google.com/",
        "violated-directive": "frame-src",
        "effective-directive": "frame-src",
        "original-policy": "default-src 'self';  script-src 'self' https://www.google-analytics.com http://www.google-analytics.com  stats.g.doubleclick.net https://stats.g.doubleclick.net ; style-src 'self' data: ; img-src 'self' https://www.google-analytics.com http://www.google-analytics.com *.[anonymised] stats.g.doubleclick.net https://stats.g.doubleclick.net data: ;  child-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "http://undroider.com",
        "line-number": 1,
        "column-number": 299,
        "status-code": 200,
        "script-sample": ""
    }
}
```

__WTF:__ ?????

__Answer:__ What is that? any idea?

---------------------------------------
# Cloudflare

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "cloudflare-app[app-id=\"no-adblock\"] {dis...",

        "source-file": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "body:not(.adbmodal-cloudflare-open) clou...",

        "source-file": "https://www.nicolas-hoffmann.net/source/1447-Background-image-couleurs-CSS-accessibilite.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ ?????

__Answer:__ related to Cloudflare, however, did not find how to reproduce these CSP notifications.

---------------------------------------
# var api = {};

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-04be18be6c236ee4ca881ebe91355b3d7c3e1cdadcacea4e58dd8626556ee53e44cabbbbd12093d07a524d6d0164f2a9b34b5e892c795f6ce24b27b3cb4cbe78'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "(function(){\r\nvar api = {};\r\ntry {\r\n(fun...",
        "source-file": "https://www.estcequonmetenprodaujourdhui.info/",
        "violated-directive": "script-src https://www.estcequonmetenprodaujourdhui.info"
    }
}
```

__WTF:__ ?????

__Answer:__ any idea?

---------------------------------------
# This is not a zero-length file!

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/1632-Le-meilleur-spam-du-monde.html",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "/* This is not a zero-length file! */",
        "source-file": "https://www.nicolas-hoffmann.net/source/1632-Le-meilleur-spam-du-monde.html",
        "violated-directive": "style-src https://www.nicolas-hoffmann.net data:"
    }
}
```

__WTF:__ well, happy to know that is not a zero-length file. And ?

__Answer:__ any idea?

---------------------------------------
# dl.metabar.ru

```
{
    "csp-report": {
        "document-uri": "https://van11y.net/accessible-tab-panel/",
        "referrer": "https://van11y.net/?utm_source=forwebdev_tlgrm&utm_medium=announcement&utm_campaign=van11y--kollektsiya-gotovyh-k-ispolzovani",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none' ;  script-src 'self'; style-src 'self' ; img-src 'self'; font-src 'self';  connect-src 'self'; child-src 'self' ; frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",
        "blocked-uri": "https://dl.metabar.ru/static/js/sovetnik.min.js?mbr=true&settings=%7B%22affId%22%3A1020%2C%22clid%22%3A2210496%2C%22applicationName%22%3A%22SaveFrom%22%2C%22aviaEnabled%22%3Atrue%2C%22offerEnabled%22%3Atrue%7D",
        "line-number": 24688,

        "column-number": 27,
        "status-code": 0,
        "script-sample": ""
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# ISAnalysterLoader/ISCommonAnalyster

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "var ISAnalysterLoader = {\n\t//\tload Analy...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```
or
```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "// funnyordie.com\nvar ISCommonAnalyster ...",

        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# AttachStyleEnum

```
{
    "csp-report": {
        "blocked-uri": "self",
        "document-uri": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "line-number": 1,
        "original-policy": "default-src 'none'; script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net; style-src https://www.nicolas-hoffmann.net data:; img-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net https://ssl.google-analytics.com data:; connect-src https://www.nicolas-hoffmann.net; font-src https://www.nicolas-hoffmann.net; media-src https://www.nicolas-hoffmann.net; object-src https://www.nicolas-hoffmann.net https://www.youtube.com; child-src https://www.nicolas-hoffmann.net; frame-ancestors https://www.nicolas-hoffmann.net; manifest-src https://www.nicolas-hoffmann.net; form-action https://www.nicolas-hoffmann.net; report-uri https://www.nicolas-hoffmann.net/csp-parser.php",
        "referrer": "https://www.google.fr/",
        "script-sample": "var AttachStyleEnum = {\n\tAttachOuterTopL...",
        "source-file": "https://www.nicolas-hoffmann.net/source/cv-developpeur-web-integrateur-xhtml-css.php",
        "violated-directive": "script-src https://www.nicolas-hoffmann.net https://google-analytics.com https://stats.g.doubleclick.net https://stats.g.doubleclick.net"
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# cdn.viglink.com

```
{
    "csp-report": {
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "referrer": "",
        "violated-directive": "script-src",
        "effective-directive": "script-src",
        "original-policy": "default-src 'none';  script-src 'self' ; style-src 'self' 'nonce-3e97624acd1b9dd5a8fd3ed039567079c5519e504cf1f505b62926fa5c30cc56d769a41675f51a23ee1d9b3fe5fbf963fa7ba4a595020d2d0411e070ca84097f' ; img-src 'self'  data: ;  font-src 'self'; child-src 'self' ;  frame-ancestors 'none' ; manifest-src 'self' ; report-uri /csp-parser.php ;",
        "disposition": "enforce",

        "blocked-uri": "https://cdn.viglink.com/api/vglnk.js",
        "line-number": 1,
        "column-number": 61245,
        "status-code": 0
    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# cloudfront.net

```
{
    "csp-report": {
        "blocked-uri": "https://d3ijcis4e2ziok.cloudfront.net",
        "document-uri": "https://www.estcequonmetenprodaujourdhui.info/",
        "original-policy": "default-src 'none'; script-src https://www.estcequonmetenprodaujourdhui.info; style-src https://www.estcequonmetenprodaujourdhui.info 'nonce-079629c8fd8e205b456b5d3d4102e097e62c897b430b06f8ece5b186229113d8b472b07ae7ee113417d36f512379a1c55cc4b19238c010ce96c0941e5393f7f2'; img-src https://www.estcequonmetenprodaujourdhui.info data:; font-src https://www.estcequonmetenprodaujourdhui.info; child-src https://www.estcequonmetenprodaujourdhui.info; frame-ancestors 'none'; manifest-src https://www.estcequonmetenprodaujourdhui.info; report-uri https://www.estcequonmetenprodaujourdhui.info/csp-parser.php",
        "referrer": "",
        "violated-directive": "child-src https://www.estcequonmetenprodaujourdhui.info"

    }
}
```

__WTF:__ nothing like this on the website.

__Answer:__ any idea?

---------------------------------------
# var delay = null; currDisplay = null;

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

__Answer:__ Based on https://github.com/nico3333fr/CSP-useful/issues/32 a firefox extension using a framework called Kango.

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
# static.cmptch.com

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "img-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://static.cmptch.com/v/img/bannerOptOutButton.png"
    }
}
```

__WTF:__ WTF is this?

__Answer:__ No idea how this could happen. Any idea?

---------------------------------------
# enet.enec.gov.ae

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://enet.enec.gov.ae"
    }
}
```

__WTF:__ WTF is this?

__Answer:__ Domain enet.enec.gov.ae doesn't exist. But domain enec.gov.ae is resolved to this: The Emirates Nuclear Energy Corporation (ENEC) is leading the development of the United Arab Emirates (UAE) Peaceful Nuclear Energy Program and building the country’s first nuclear energy plant. Maybe some internal government network?

---------------------------------------
# pe78ohwhk.ru

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://pe78ohwhk.ru/d6safundjenk6af/29136.js",
        "line-number": 1,
        "column-number": 1144
    }
}
```

__WTF:__ WTF is this?

__Answer:__ Probably some malware. Any idea?

---------------------------------------
# searches3250409-a.akamaihd.net

```
{
    "csp-report": {
        "document-uri": "[anonymised]",
        "effective-directive": "script-src",
        "original-policy": "[anonymised]",
        "blocked-uri": "https://searches3250409-a.akamaihd.net"
    }
}
```

__WTF:__ WTF is this?

__Answer:__  Any idea?

---------------------------------------
# mp3 file?

```
{
    "csp-report": {
        "blocked-uri": "chrome",
        "document-uri": "https://micr0lab.org/mu0l_0030/mp3/01_-_DAUA_-_Qui_heritera.mp3",
        "original-policy": "default-src https://micr0lab.org data: blob: https://*.vimeo.com https://*.vimeocdn.com https://*.yumpu.com https://*.youtube.com https://*.jquery.com https://*.openstreetmap.org https://fonts.gstatic.com https://duckduckgo.com; script-src https://micr0lab.org 'unsafe-inline' 'unsafe-eval' blob: https://*.micr0lab.org https://vimeo.com https://player.vimeo.com https://*.vimeocdn.com https://*.yumpu.com https://*.youtube.com https://*.jquery.com; style-src https://micr0lab.org 'unsafe-inline' https://*.vimeocdn.com https://*.googleapis.com; object-src https://micr0lab.org https://*.openstreetmap.org https://*.micr0lab.org https://*.amazonaws.com https://*.quantserve.com; connect-src https://micr0lab.org https://vimeo.com; img-src https://micr0lab.org data:; report-uri https://micr0lab.org/tech/php/csp_rep.php; base-uri https://micr0lab.org",
        "referrer": "",
        "violated-directive": "script-src"
    }
}
```

__WTF:__ How a mp3 could violate the `script-src` policy? Is it because, on some browser, a script is launched to play music files?

__Answer:__ ????

---------------------------------------
If you have some examples to share (even if you don't know what the fuck it is coming from), feel free to share them. Anonymize the URL/policy if needed.
