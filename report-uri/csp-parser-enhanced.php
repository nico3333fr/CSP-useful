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
    'chromenull:/' => array (
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
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#function-installglobalhookwindow',
         'comment' => ';(function installGlobalHook(window)'
    ),
    'http://l.facebook.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#facebook ',
         'comment' => 'Facebook share'
    ),
    'https://l.facebook.com' => array (
         'filter_on' => 'referrer',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#facebook ',
         'comment' => 'Facebook share'
    ),
    'var FuckAdBlock = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#var-fuckadblockblockadblock--function-',
         'comment' => 'BlockAdBlock etc.'
    ),
    'var BlockAdBlock = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#var-fuckadblockblockadblock--function-',
         'comment' => 'BlockAdBlock etc.'
    ),
    'mx://' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#reader-in-macos-safari',
         'comment' => '"Reader" in MacOS Safari? '
    ),
    '@media print {#UNIQUE_ID-ghostery' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#ghostery',
         'comment' => 'Ghostery inline styles'
    ),
    '@media print {#ghostery-purple-box' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#ghostery',
         'comment' => 'Ghostery inline styles'
    ),
    '@media print {#ghostery-button' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#ghostery',
         'comment' => 'Ghostery inline styles'
    ),
    '(function (a,x,m,I){var c={safeWindow:{' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#function-axmivar-csafewindow-',
         'comment' => 'WTF ?'
    ),
    'onsubmit attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onchange attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onfocusin attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ),
    'onselectstart attribute on DIV element' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#onsubmitonchangeonfocusinetc-attribute-on-div-element',
         'comment' => 'WTF ?'
    ), 
    'embed[height="175"][width="175"]' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#embedheight175width175-',
         'comment' => 'WTF ?'
    ),
    'window.AG_onLoad = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#try-rnwindowag_onload--function-',
         'comment' => 'WTF ?'
    ),
    'AG_onLoad=function(func)' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#try-rnwindowag_onload--function-',
         'comment' => 'WTF ?'
    ),
    'https://www.gstatic.com/images/branding/product/2x/translate_24dp.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#google-translate',
         'comment' => 'Google Translate'
    ),
    'root .mod > ._jH + .rscontainer' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#root-mod--_jh--rscontainer',
         'comment' => 'WTF ?'
    ),
    'window.oldSetTimeout=window.setTimeout' => array (
         'filter_on' => 'script_sample',
         'case_description' => '',
         'comment' => 'WTF ?'
    ),
    'android-webview' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#android-webview',
         'comment' => ''
    ),
    'window.devToolsOptions = Object.' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#devtools-',
         'comment' => ''
    ),
    'dummyRuleForDigg{}' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#digg',
         'comment' => ''
    ),
    'Copyright 2014 Evernote' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#evernote',
         'comment' => ''
    ),
    'http://adblockers.opera-mini.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#opera-mini-double-wtf',
         'comment' => ''
    ),
    'ms-browser-extension' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#ms-browser-extension',
         'comment' => ''
    ),
    'http://91.68.209.' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#isp-updatesadds-files-on-mobiles',
         'comment' => ''
    ),
    'http://www.faceporn.net/' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#ublock-and-faceporn-yes',
         'comment' => ''
    ),
    'Cacaoweb = { callbackIsRunning' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#var-cacaoweb',
         'comment' => ''
    ),
    'chrome://kango-' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#chromekango',
         'comment' => ''
    ),
    'netdefender/hui/ndhui.js' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#bitdefender-js-injection',
         'comment' => ''
    ),
    'if (window.google && (window.google.sn' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#getpingu',
         'comment' => ''
    ),
    'getpingu.com/assets' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#getpingu',
         'comment' => ''
    ),
    '__webpack_require' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#webpack_require',
         'comment' => ''
    ),
    'reek.github.io/anti-adblock-killer' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#anti-adblock-killer',
         'comment' => ''
    ),
    'savingsslider-a.akamaihd.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#savingsslider-aakamaihdnet',
         'comment' => ''
    ),
    'twitbridge.com/ads' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#twitbridgecom',
         'comment' => ''
    ),
    'app.abtasty.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#appabtastycom',
         'comment' => ''
    ),
    'dataloading.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#dataloadingnet',
         'comment' => ''
    ),
    'e={Vue:null' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#evuenull',
         'comment' => ''
    ),
    'fireads.men' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#fireadsmen',
         'comment' => ''
    ),
    '_PostRPC()' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#_postrpc',
         'comment' => ''
    ),
    'rdc.apicit.net' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#rdcapicitnettagsclickintextnet',
         'comment' => ''
    ),
    'tags.clickintext.net' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#rdcapicitnettagsclickintextnet',
         'comment' => ''
    ),
    'data1.itineraire.info' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#data1itineraireinfo-',
         'comment' => ''
    ),
    'data1.itineraire.info' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#data1itineraireinfo-',
         'comment' => ''
    ),
    'data1.iti-maps.fr' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#data1itineraireinfo-',
         'comment' => ''
    ),
    'comic-sans-replacer' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#comic-sans-replacer',
         'comment' => ''
    ),
    'davebestdeals.com' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#pstaticdavebestdealscom',
         'comment' => ''
    ),
    '.davebestdeals.com' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#pstaticdavebestdealscom',
         'comment' => ''
    ),
    '.password-toggler-button-parent' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#password-toggler',
         'comment' => ''
    ),
    'allowAdblock()' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#allowadblock',
         'comment' => ''
    ),
    'loadingdata.site' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#loadingdatasite',
         'comment' => ''
    ),
    'ZennoPoster' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#geckoscriptbridgejs',
         'comment' => ''
    ),
    'jar:file' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#geckoscriptbridgejs',
         'comment' => 'extensions'
    )/*,
    '' => array (
         'filter_on' => 'source_file',
         'case_description' => '',
         'comment' => ''
    ),
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
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/blob/master/csp-wtf/README.md#zscalernet',
         'comment' => ''
    )*/
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
