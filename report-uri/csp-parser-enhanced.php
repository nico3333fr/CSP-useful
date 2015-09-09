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
if ($data = json_decode($data, true)) {

  // get source-file to perform some tests
  $source_file   = $data['csp-report']['source-file'];
  $script_sample = $data['csp-report']['script-sample'];
  

  if (
     
     // avoid false positives notifications coming from Chrome extensions (Wappalyzer, MuteTab, etc.)
     // bug here https://code.google.com/p/chromium/issues/detail?id=524356
     strpos($source_file, 'chrome-extension://') === false 
     
     // avoid false positives notifications coming from Safari extensions (diigo, evernote, etc.)
     && strpos($source_file, 'safari-extension://') === false
     
     // avoid Firefox inline styles false positives notifications coming from inspector
     // bug will be be fixed in next versions, see https://bugzilla.mozilla.org/show_bug.cgi?id=1195302
     // & https://bugzilla.mozilla.org/show_bug.cgi?id=1185351
     // activate it only if a lot of people are inspecting your pages => avoid a LOT of notifications
     // use this at your own risk: with great power comes great responsibilities
     /*
      && ( 
          strpos($script_sample, 'position:absolute;') === false
          && strpos($script_sample, 'top:') === false
          )
      */
     
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
