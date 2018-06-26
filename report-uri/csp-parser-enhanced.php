<?php 
// Note: this script requires PHP ≥ 5.4.
// Inspired from https://mathiasbynens.be/notes/csp-reports

// Dareboost wants it? Not a problem.
header('X-Content-Type-Options: "nosniff"');

// Specify the email address to send reports to
define('EMAIL', 'your@email.com');
// Specify the desired email subject for violation reports
define('SUBJECT', 'CSP violation');

// Get the raw POST data
$data = file_get_contents('php://input');

// array for filtering
$tab_filter = array(
    /*
    // avoid having the same entry
    'MANDATORY: string_to_search' => array (
         'filter_on' => 'MANDATORY: field to search on, see later for filtering', // source_file/blocked_uri/script_sample/referrer/doc_uri/original_policy
         'case_description' => '', // Optional: URL for description 
         'comment' => '' // Optional: a… comment!
    )
    */
    'chromenull://' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'resource://' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'mxjscall://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'res://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'safari-resource://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'chromenull://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'chromeinvoke://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'chromeinvokeimmediate://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'crwebnull://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'crwebinvoke://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'crwebimmediate://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'mbinit://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'opera://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'none://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://report-uri.io/',
         'comment' => 'Coming from report_uri tool'
    ),
    'chrome-extension://' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://code.google.com/p/chromium/issues/detail?id=524356',
         'comment' => 'avoid false positives notifications coming from Chrome extensions (Wappalyzer, MuteTab, etc.)'
    ),
    'chrome-extension:/' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://code.google.com/p/chromium/issues/detail?id=524356',
         'comment' => 'avoid false positives notifications coming from Chrome extensions (Wappalyzer, MuteTab, etc.)'
    ),
    'safari-extension:/' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => '',
         'comment' => 'avoid false positives notifications coming from Safari extensions (diigo, evernote, etc.)'
    ),
    'safari-extension://' => array (
         'filter_on' => 'source_file',
         'case_description' => '',
         'comment' => 'avoid false positives notifications coming from Safari extensions (diigo, evernote, etc.)'
    ),
    'se-extension://' => array (
         'filter_on' => 'source_file',
         'case_description' => '',
         'comment' => 'search engine extensions ?'
    ),
    'webviewprogressproxy://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => '',
         'comment' => 'added by browsers in webviews'
    ),
    'gsa://onpageload' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/commit/ecc8f9b0b379ae643bc754d2db33c8b47e185fd1',
         'comment' => 'Google Search App'
    ), 
    ';(function installGlobalHook(window)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#function-installglobalhookwindow',
         'comment' => ';(function installGlobalHook(window)'
    ),
    'http://l.facebook.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#facebook',
         'comment' => 'Facebook share'
    ),
    'https://l.facebook.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#facebook',
         'comment' => 'Facebook share'
    ),
    'var FuckAdBlock = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#var-fuckadblockblockadblock--function-',
         'comment' => 'BlockAdBlock etc.'
    ),
    'var BlockAdBlock = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#var-fuckadblockblockadblock--function-',
         'comment' => 'BlockAdBlock etc.'
    ),
    'mx://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#reader-in-macos-safari',
         'comment' => '"Reader" in MacOS Safari? '
    ),
    '@media print {#UNIQUE_ID-ghostery' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ghostery',
         'comment' => 'Ghostery inline styles'
    ),
    '@media print {#ghostery-purple-box' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ghosteryy',
         'comment' => 'Ghostery inline styles'
    ),
    '@media print {#ghostery-button' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ghostery',
         'comment' => 'Ghostery inline styles'
    ),
    '{safeWindow:{' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-axmivar-csafewindow-',
         'comment' => 'WTF ?'
    ),
    'onsubmit attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onchange attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onfocusin attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onselectstart attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ), 
    'embed[height=' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#embedheight175width175-',
         'comment' => 'WTF ?'
    ),
    'window.AG_onLoad = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#try-rnwindowag_onload--function-',
         'comment' => 'WTF ?'
    ),
    'AG_onLoad=function(func)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#try-rnwindowag_onload--function-',
         'comment' => 'WTF ?'
    ),
    'https://www.gstatic.com/images/branding/product/2x/translate_24dp.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#google-translate-1',
         'comment' => 'Google Translate'
    ),
    'root .mod > ._jH + .rscontainer' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#root-mod--_jh--rscontainer',
         'comment' => 'WTF ?'
    ),
    'window.oldSetTimeout=window.setTimeout' => array (
         'filter_on' => 'script_sample',
         'case_description' => '',
         'comment' => 'WTF ?'
    ),
    'android-webview' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#android-webview',
         'comment' => ''
    ),
    'window.devToolsOptions = Object.' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#devtools-',
         'comment' => ''
    ),
    'dummyRuleForDigg{}' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#digg',
         'comment' => ''
    ),
    'Copyright 2014 Evernote' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#evernote',
         'comment' => ''
    ),
    'adblockers.opera-mini.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#opera-mini-double-wtf',
         'comment' => ''
    ),
    'ms-browser-extension' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#opera-mini-double-wtf',
         'comment' => ''
    ),
    'http://91.68.209.' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#isp-updatesadds-files-on-mobiles',
         'comment' => ''
    ),
    'http://www.faceporn.net/' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ublock-and-faceporn-yes',
         'comment' => ''
    ),
    'Cacaoweb = { callbackIsRunning' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#var-cacaoweb',
         'comment' => ''
    ),
    'chrome://kango-' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#chromekango',
         'comment' => ''
    ),
    'netdefender/hui/ndhui.js' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#bitdefender-js-injection',
         'comment' => ''
    ),
    'if (window.google && (window.google.sn' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#if-windowgoogle--windowgooglesn',
         'comment' => ''
    ),
    'getpingu.com/assets' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#getpingu',
         'comment' => ''
    ),
    '__webpack_require' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#webpack_require',
         'comment' => ''
    ),
    'reek.github.io/anti-adblock-killer' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#anti-adblock-killer',
         'comment' => ''
    ),
    'savingsslider-a.akamaihd.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#savingsslider-aakamaihdnet',
         'comment' => ''
    ),
    'twitbridge.com/ads' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#twitbridgecom',
         'comment' => ''
    ),
    'app.abtasty.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#appabtastycom',
         'comment' => ''
    ),
    'dataloading.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'e={Vue:null' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#evuenull',
         'comment' => ''
    ),
    'fireads.men' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#fireadsmen',
         'comment' => ''
    ),
    '_PostRPC()' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#_postrpc',
         'comment' => ''
    ),
    'rdc.apicit.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#rdcapicitnettagsclickintextnet',
         'comment' => ''
    ),
    'tags.clickintext.net' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#rdcapicitnettagsclickintextnet',
         'comment' => ''
    ),
    'comic-sans-replacer' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#comic-sans-replacer',
         'comment' => ''
    ),
    'davebestdeals.com' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#davebestdealscom',
         'comment' => ''
    ),
    '.davebestdeals.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#davebestdealscom',
         'comment' => ''
    ),
    '.password-toggler-button-parent' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#password-toggler-button-parent',
         'comment' => ''
    ),
    'allowAdblock()' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#allowadblock',
         'comment' => ''
    ),
    'loadingdata.site' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'ZennoPoster' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#geckoscriptbridgejs',
         'comment' => ''
    ),
    'jar:file' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#geckoscriptbridgejs',
         'comment' => 'extensions'
    ),
    '.topbanneradvertise' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#topbanneradvertise',
         'comment' => ''
    ),
    'ashishmishra.in/gridify' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#gridify',
         'comment' => ''
    ),
    'akamaihd.net' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#akamaihdnet',
         'comment' => ''
    ),
    '.wrcx {display:none}' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#wrcx',
         'comment' => ''
    ),
    'rw_sendSocketMessage(aData)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#rw_sendsocketmessage',
         'comment' => ''
    ),
    'jsl.infostatsvc.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#jslinfostatsvccom',
         'comment' => ''
    ),
    'assets.volcanicpixels.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#volcanicpixelscom',
         'comment' => ''
    ),
    'loadingpages.me' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpages.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpage.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'ze406soi.ru' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#7a2rnuey1tw9arru',
         'comment' => ''
    ),
    'lingualeo.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#audiocdnlingualeocom',
         'comment' => ''
    ),
    'feedly.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#feedlycom',
         'comment' => ''
    ),
    'window["_gaUserPrefs"]' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#google-analytics-opt-out-add-on',
         'comment' => ''
    ),
    'cr-input.mxpnl.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cr-inputmxpnlnet',
         'comment' => ''
    ),
    'adsstrike.pro' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#adsstrikepro',
         'comment' => ''
    ),
    'function n(){!function(){function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-inception',
         'comment' => ''
    ),
    'null' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#null',
         'comment' => ''
    ),
    'mxaddon-pkg' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#mxaddon-pkg',
         'comment' => ''
    ),
    'rsc.cdn77.org' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#rsccdn77org',
         'comment' => ''
    ),
    'rsc.cdn77.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#rsccdn77org',
         'comment' => ''
    ),
    'data1.' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#data1itineraireinfo-and-its-friends-data1',
         'comment' => ''
    ),
    '/data1.' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#data1itineraireinfo-and-its-friends-data1',
         'comment' => ''
    ),
    'connectionstrenth.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#connectionstrenthcom',
         'comment' => ''
    ),
    'int.search.myway.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#intsearchmywaycom',
         'comment' => ''
    ),
    'ng:cloak' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ngcloaknginspect_clickedel',
         'comment' => ''
    ),
    'window._ngInspect_clickedEl' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ngcloaknginspect_clickedel',
         'comment' => ''
    ),
    '.werbung, .text_werbung' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#adguard-ad-blocking-filters',
         'comment' => ''
    ),
    'secure.optibuymac.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#secureoptibuymaccom',
         'comment' => ''
    ),
    'www.stackoverflow.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#stackoverflow-favicon',
         'comment' => ''
    ),
    'webPageNotificationsController' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#webpagenotificationscontroller',
         'comment' => ''
    ),
    'bindo.js' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#bindojs',
         'comment' => ''
    ),
    'var delay = null; currDisplay = null' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#var-delay--null-currdisplay--null',
         'comment' => ''
    ),
    'cloudfront.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cloudfrontnet',
         'comment' => ''
    ),
    'findizer.fr' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#findizer',
         'comment' => ''
    ),
    'cdn.viglink.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cdnviglinkcom',
         'comment' => ''
    ),
    'var AttachStyleEnum' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#attachstyleenum',
         'comment' => ''
    ),
    'ISAnalysterLoader' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#isanalysterloaderiscommonanalyster',
         'comment' => ''
    ),
    'ISCommonAnalyster' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#isanalysterloaderiscommonanalyster',
         'comment' => ''
    ),
    'dl.metabar.ru' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#dlmetabarru',
         'comment' => ''
    ),
    'This is not a zero-length file' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#this-is-not-a-zero-length-file',
         'comment' => ''
    ),
    'var api = {};' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#var-api--',
         'comment' => ''
    ),
    'sxt.cdn.skype.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#skype-assets',
         'comment' => ''
    ),
    'cloudflare-app[app-id=' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cloudflare',
         'comment' => ''
    ),
    '.adbmodal-cloudflare-open' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cloudflare',
         'comment' => ''
    ),
    '1.1.1.1/bmi' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#google-search-for-android',
         'comment' => ''
    ),
    'www.googletagmanager.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#google-tag-manager',
         'comment' => ''
    ),
    'web.skype.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#skype-web',
         'comment' => ''
    ),
    'function injectPageScriptAPI' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#function-injectpagescriptapi',
         'comment' => ''
    ),
    'wd7bdb20e4d622f6569f3e8503138c859d.win' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#wd7bdb20e4d622f6569f3e8503138c859dwin--partner-netmen',
         'comment' => ''
    ),
    'wd7bdb20e4d622f6569f3e8503138c859d.win' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#wd7bdb20e4d622f6569f3e8503138c859dwin--partner-netmen',
         'comment' => ''
    ),
    'partner-net.men' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#wd7bdb20e4d622f6569f3e8503138c859dwin--partner-netmen',
         'comment' => ''
    ),
    'material.io' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#materialioresizer',
         'comment' => ''
    ),
    'undroider.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#undroider',
         'comment' => ''
    ),
    '#Ad2, #AdText, #Ad_Top' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#ad2-adtext-ad_top-',
         'comment' => ''
    ),
    'i2.cdscdn.com/imagesok/mco/btUp.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#btuppng',
         'comment' => ''
    ),
    'adnotbad.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    '#A9AdsMiddleBoxTop' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#a9adsmiddleboxtop-a9adsoutofstockwidge',
         'comment' => ''
    ),
    'background-image: url(resource://jid1' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#background-image-urlresourcejid1-dg',
         'comment' => ''
    ),
    'simple-finder.com' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#simple-findercom',
         'comment' => ''
    ),
    'QualityCheck/ga.js' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#qualitycheckgajs',
         'comment' => ''
    ),
    '#forecastfox' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#forecastfox',
         'comment' => ''
    ),
    '.minvid__overlay__container' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#minvid__overlay__container',
         'comment' => ''
    ),
    '.password-toggler-button-parent' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#password-toggler-button-parent',
         'comment' => ''
    ),
    '#toggleGifsOverlay' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#togglegifsoverlay',
         'comment' => ''
    ),
    'function s(t,n,e,r){t' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-stnertinitialize',
         'comment' => ''
    ),
    'ssl.gstatic.com/dictionary' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#google-audio-pronunciation-files',
         'comment' => ''
    ),
    'onclick="fileice()' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#fileice',
         'comment' => ''
    ),
    '.pubblicita, .adv_esterno' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#pubblicita',
         'comment' => ''
    ),
    'img[src="https://www.paypalobjects.com' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#paypalobjectscom',
         'comment' => ''
    ),
    'function installHook (window)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#installhook',
         'comment' => ''
    ),
    'loadingpaqes.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'www.netvibes.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#netvibes',
         'comment' => ''
    ),
    'app.trackduck.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#apptrackduckcom',
         'comment' => ''
    ),
    'alecyueee.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#alecyueeeus',
         'comment' => ''
    ),
    'pllaff-up.ru' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#pllaff-upru',
         'comment' => ''
    ),
    'body#dummybodyid .diigolet' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#bodydummybodyid-diigolet',
         'comment' => ''
    ),
    '192.168.1' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#local-ip',
         'comment' => ''
    ),
    'cursorsfolder/mickey-hand.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#mickey-handpng',
         'comment' => ''
    ),
    'document.addEventListener(\'mousedown\'' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#addeventlistenermousedown',
         'comment' => ''
    ),
    'l.messenger.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#lmessengercom',
         'comment' => ''
    ),
    '.trc_related_container div[data-item' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#trc_related_container',
         'comment' => ''
    ),
    '@media screen {@font-face{font-family:\'O' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#media-screen-font-facefont-familyo',
         'comment' => ''
    ),
    'function injected(eventName, injectedIn' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-injectedeventname-injectedin',
         'comment' => ''
    ),
    'const V8_STACK_' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#const-v8_stack_',
         'comment' => ''
    ),
    ':root audio[data-' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#root-audiodata-po76pdm',
         'comment' => ''
    ),
    'moz-extension://' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#moz-extension',
         'comment' => ''
    ),
    'a[rel~=\'nofollow\']{outline' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#arelnofollow',
         'comment' => ''
    ),
    'mstat.acestream.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#mstatacestreamnet',
         'comment' => ''
    ),
    'mamot.fr' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#mastodon',
         'comment' => ''
    ),
    'takethatad.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'document.currentScript.setAttribute' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#documentcurrentscriptsetattribute',
         'comment' => ''
    ),
    'cdnsure.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cdnsurecom',
         'comment' => ''
    ),
    'plus.url.google.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#google',
         'comment' => ''
    ),
    'Many CSS class names in this file' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#many-css-class-names-in-this-file',
         'comment' => ''
    ),
    'ssl.google-analytics.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#google-analytics-connect-src-violation',
         'comment' => ''
    ),
    'mc.yandex.ru' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#mcyandexru',
         'comment' => ''
    ),
    'm.facebook.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#facebook',
         'comment' => ''
    ),
    '.vimvixen-console-frame' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#vimvixen-console-frame',
         'comment' => ''
    ),
    'myshopmatemac.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#myshopmate',
         'comment' => ''
    ),
    'spidtest.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#spidtestorgmetric',
         'comment' => ''
    ),
    '.cip-genpw-icon.cip-icon-key-small' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#cip-genpw-icon',
         'comment' => ''
    ),
    'function detect (win)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-detect-win',
         'comment' => ''
    ),
    'iframe {display: none;}' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#iframe-display-none',
         'comment' => ''
    ),
    'www.paperkarma.com/images/app_store.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#app_storepng',
         'comment' => ''
    ),
    'try{(function overrideDefaultMethods' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#function-overridedefaultmethods',
         'comment' => ''
    ),
    '@-webkit-keyframes load4' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#-webkit-keyframes-load4',
         'comment' => ''
    ),
    'contextMenu.js' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#contextmenujs',
         'comment' => ''
    ),
    's3.amazonaws.com/js-cache' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#s3amazonawscomjs-cache',
         'comment' => ''
    ),
    'cdnnetwok.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#cdnnetwokxyz',
         'comment' => ''
    ),
    '.seo-highlighter' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#seo-highlighter',
         'comment' => ''
    ),
    'function(vimiumOnClickAttributeName)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#vimiumonclickattributename',
         'comment' => ''
    ),
    'istatic.eshopcomp.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#eshopcomp',
         'comment' => ''
    ),
    'Highlight style classes' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#highlight-style-classes',
         'comment' => ''
    ),
    'window.klTabId_kis' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#windowkltabid_kis',
         'comment' => ''
    ),
    'navigator.__defineGetter__' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#definegetter',
         'comment' => ''
    ),
    '.reclame, .advertenties, .advertentie' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#reclame-advertenties-advertentie',
         'comment' => ''
    ),
    'substantielwww.dyndns.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#substantielwwwdyndnsorg',
         'comment' => ''
    ),
    'extenjo.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'fdz.octapi.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#fdzoctapinet',
         'comment' => ''
    ),
    'static.hotjar.com' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#hotjarcom',
         'comment' => ''
    ),
    'inter.gamefunnetwork.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#intergamefunnetworkcom',
         'comment' => ''
    ),
    'loadingpagesos.download' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'spedcheck.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    '&source=hangouts' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#hangouts',
         'comment' => ''
    ),
    'function (NAVIGATOR, OBJECT)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#const-v8_stack_',
         'comment' => ''
    ),
    'function(e){let t={};if(e.hasOwnProper' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#vue-devtools',
         'comment' => ''
    ),
    'window.loop11ExtTerritory = true' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#windowloop11extterritory--true',
         'comment' => ''
    ),
    'ffoodd/a11y.css' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#a11ycss',
         'comment' => ''
    ),
    'canvaspl-a.akamaihd.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#savingsslider-aakamaihdnet--canvaspl-aakamaihdnet',
         'comment' => ''
    ),
    'savingsslider-a.akamaihd.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#savingsslider-aakamaihdnet--canvaspl-aakamaihdnet',
         'comment' => ''
    ),
    'www.ciuvo.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#ciuvo--steganos-apiciuvocom',
         'comment' => ''
    ),
    's3gt_translate_tooltip_mini' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#s3gt_translate_tooltip_mini',
         'comment' => ''
    ),
    'loadingpabes.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpageson.science' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpagesos.bid' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpagesose.date' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpagesson.club' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'loadingpales.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'nonfas.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'querfi.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#loadingpages-malware',
         'comment' => ''
    ),
    'gamephrase.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#gamephrase--elsewheregames',
         'comment' => ''
    ),
    'elsewheregames.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#gamephrase--elsewheregames',
         'comment' => ''
    ),
    'getpocket.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#pocket',
         'comment' => ''
    ),
    'moz-extension' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#moz-extension',
         'comment' => ''
    ),
    'lnkr.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'urlvalidation.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'adrs.me' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'adserv.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'amiok.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'analyzecdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'analyzenetwork.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'bootstrapnet.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'butstrap.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnanalytics.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdncash.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdncash.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdncash.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnclntr.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnjs.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnlvry.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnnetwok.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnstr.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnswf.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'cdnvalid.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'connectionstrenth.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'domainanalyzing.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'domaincdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'domainvalidation.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'eluxer.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'flowanalytic.site' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'ge0ip.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'ge0ip.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'ge0ip.org' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'glganltcs.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'glgnltks.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'icontent.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'infoanalytics.tools' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'infoprovider.group' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'intrnlcss.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'jsfuel.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'lancheck.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'metrext.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netanalitics.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netanalytics.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netanalyzer.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netcheckcdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netstats.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'netwcdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'networkanalytics.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'networkcheck.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'ratexchange.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'serverads.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'siteheart.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'spaceshipad.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'spidtest.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'statcounter.biz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'statvalidation.website' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'thisadsfor.us' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'tradeadsexchange.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'trafficvalidation.tools' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'trendtext.eu' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'validanalytics.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'validationcdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'validcdn.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'validcndnet.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'validdomain.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'whatzmyip.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'worldnaturenet.xyz' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www1.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www4.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www5.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www7.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www8.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'www9.thrgh.space' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'ydpi.pw' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#monetizuscom-ad-framework-used-in-browser-extensions',
         'comment' => ''
    ),
    'getstencil.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#getstencilcom',
         'comment' => ''
    ),
    'elsewheregames.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    'fungamesshop.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    'gameandslash.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    'gamephrase.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    'gamersurface.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    'pinballpal.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#free-games-with-adware-browser-extension',
         'comment' => ''
    ),
    ';undefined' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#undefined',
         'comment' => ''
    ),
    '.ggbox' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#ggbox-a_p-a_fr-a_cn',
         'comment' => ''
    ),
    'admixer_' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#admixer-twkvru',
         'comment' => ''
    ),
    '.twkv.ru' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#admixer-twkvru',
         'comment' => ''
    ),
    'window.script15' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#windowscript1528893700887-etc',
         'comment' => ''
    ),
    '.blackspider.com' => array (
         'filter_on' => 'original_policy',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#blackspidercom',
         'comment' => ''
    ),
    'mozbar.moz.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#httpsmozbarmozcom',
         'comment' => ''
    ),
    '.tota11y-dark-color-scheme' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#tota11y-bookmarklet',
         'comment' => ''
    ),
    'onclick attribute on MENUITEM element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#onclick-attribute-on-menuitem-element',
         'comment' => ''
    ),
    'gj.track.uc.cn' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#spyware-gjtrackuccn',
         'comment' => ''
    ),
    'Date.prefs =' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#dateprefs',
         'comment' => ''
    )/*,
    '' => array (
         'filter_on' => 'source_file',
         'case_description' => '',
         'comment' => ''
    )
    // if you are not using these services, uncomment these lines to enable other filters
    ,
    'https://github.com/google/fonts/blob/master/apache' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => '',
         'comment' => ''
    ),
    'https://fonts.gstatic.com/s/' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => '',
         'comment' => ''
    ),
    'fonts.googleapis.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => '',
         'comment' => ''
    ),
    'zscaler.net' => array (
         'filter_on' => 'original_policy',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/explained.md#zscalernet',
         'comment' => ''
    ),
    's3.amazonaws.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#s3amazonawscom',
         'comment' => ''
    ),
    'css.zohostatic.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/not-explained.md#csszohostaticcom',
         'comment' => ''
    )
    */
);
     


// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
if ($data = json_decode($data, true)) {
  
  $report_issue  = true;
  $filter_on     = '';

  // now perform checks on all element in array => filtering CSP noise
  foreach ( $tab_filter as $filter_check => $options ) {
    
      switch ($options['filter_on']) {
        case 'source_file':
            $filter_on = $data['csp-report']['source-file'];
            break;
        case 'blocked_uri':
            $filter_on = $data['csp-report']['blocked-uri'];
            break;
        case 'script_sample':
            $filter_on = $data['csp-report']['script-sample'];
            break;
        case 'referrer':
            $filter_on = $data['csp-report']['referrer'];
            break;
        case 'doc_uri':
            $filter_on = $data['csp-report']['document-uri'];
            break;
        case 'original_policy':
            $filter_on = $data['csp-report']['original-policy'];
            break;
      }
      
      if ( strpos($filter_on, $filter_check) !== false ){
         $report_issue = false;
         break;
         }
    
    }

  if ( $report_issue === true  ) {

          // Prettify the JSON-formatted data
          $data = json_encode(
                    $data,
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                  );
      
          // Simply mail the CSP violation report
          mail(EMAIL, SUBJECT, $data, 'Content-Type: text/plain;charset=utf-8');
      }

}

?>
