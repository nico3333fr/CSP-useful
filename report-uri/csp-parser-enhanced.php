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


// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
// Get the raw POST data
$data = file_get_contents('php://input');


// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
if ($data = json_decode($data, true)) {

  // get source-file to perform some tests
  $source_file   = $data['csp-report']['source-file'];
  $blocked_uri   = $data['csp-report']['blocked-uri'];
  $script_sample = $data['csp-report']['script-sample'];
  $referrer      = $data['csp-report']['referrer'];

  if (
     
     // avoid false positives notifications coming from Chrome extensions (Wappalyzer, MuteTab, etc.)
     // bug here https://code.google.com/p/chromium/issues/detail?id=524356
     strpos($source_file, 'chrome-extension://') === false 
     
     // avoid false positives notifications coming from Safari extensions (diigo, evernote, etc.)
     && strpos($source_file, 'safari-extension://') === false
     && strpos($blocked_uri, 'safari-extension://') === false
     
     // search engine extensions ?
     && strpos($source_file, 'se-extension://') === false
     
     // added by browsers in webviews
     && strpos($blocked_uri, 'webviewprogressproxy://') === false
     
     // Google Search App see for details https://github.com/nico3333fr/CSP-useful/commit/ecc8f9b0b379ae643bc754d2db33c8b47e185fd1
     && strpos($blocked_uri, 'gsa://onpageload') === false
     
     // ;(function installGlobalHook(window) => https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#function-installglobalhookwindow
     && strpos($script_sample, ';(function installGlobalHook(window)') === false
     
     // Facebook share https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#facebook 
     && strpos($referrer, 'http://l.facebook.com/') === false 
     && strpos($referrer, 'https://l.facebook.com/') === false
     
     // BlockAdBlock etc. https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#var-fuckadblockblockadblock--function-
     && strpos($script_sample, 'var FuckAdBlock = function') === false 
     && strpos($script_sample, 'var BlockAdBlock = function') === false
     
     // "Reader" in MacOS Safari? https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#reader-in-macos-safari
     && strpos($blocked_uri, 'mx://res/reader-mode/reader.html') === false
     
     // Ghostery inline styles https://github.com/nico3333fr/CSP-useful/tree/master/csp-wtf#ghostery
     && strpos($script_sample, '@media print {#UNIQUE_ID-ghostery') === false 
     && strpos($script_sample, '@media print {#ghostery-purple-box') === false 
     
     
     ) {

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
