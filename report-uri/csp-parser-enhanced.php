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
$tab_filter = array (
    /*
    'MANDATORY: string_to_search' => array (
         'filter_on' => 'MANDATORY: field to search on, see later for filtering', // source_file/blocked_uri/script_sample/referrer/doc_uri
         'case_description' => '', // Optional: URL for description 
         'comment' => '' // Optional: a… comment! */
    )
    */
    'chrome-extension://' => array (
         'filter_on' => 'source_file',
         'case_description' => 'https://code.google.com/p/chromium/issues/detail?id=524356',
         'comment' => 'avoid false positives notifications coming from Chrome extensions (Wappalyzer, MuteTab, etc.)'
    ),
    'safari-extension://' => array (
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
    'mx://res/reader-mode/reader.html' => array (
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
    'embed[height=\"175\"][width=\"175\"]' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#embedheight175width175-',
         'comment' => 'WTF ?'
    ),
    'try {\r\nwindow.AG_onLoad = function' => array (
         'filter_on' => 'script_sample',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#try-rnwindowag_onload--function-',
         'comment' => 'WTF ?'
    ),
    'https://www.gstatic.com/images/branding/product/2x/translate_24dp.png' => array (
         'filter_on' => 'blocked_uri',
         'case_description' => 'https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#google-translate',
         'comment' => 'Google Translate'
    )/*,
    '' => array (
         'filter_on' => 'source_file',
         'case_description' => '',
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
