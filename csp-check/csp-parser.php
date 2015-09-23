<?php 
// Note: this script requires PHP = 5.4.
// Inspired from https://mathiasbynens.be/notes/csp-reports

// Dareboost wants it? Not a problem.
header('X-Content-Type-Options: "nosniff"');

// Mysql connexion
$prefix='./';
include($prefix.'layout/includes/all.php');

// check database
/*
if( mysqli_num_rows(mysqli_query($lk, "SHOW TABLES LIKE 'csp_reports'"))==0 ) {
                                       
	$strtable = "CREATE TABLE IF NOT EXISTS `csp_reports` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`full_report` mediumtext NOT NULL,
					`document_uri` mediumtext NOT NULL,
					`referrer` mediumtext NOT NULL,
					`violated_directive` mediumtext NOT NULL,
					`original_policy` mediumtext NOT NULL,
					`blocked_uri` mediumtext NOT NULL,
					`source_file` mediumtext NOT NULL,
					`line_number` mediumtext NOT NULL,
					`column_number` mediumtext NOT NULL,
					`status_code` mediumtext NOT NULL,
					PRIMARY KEY (`id`)
					) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
  $objtable = mysqli_query($lk, $strtable);

}
*/



// Get the raw POST data
$data = file_get_contents('php://input');



// Only continue if it’s valid JSON that is not just `null`, `0`, `false` or an
// empty string, i.e. if it could be a CSP violation report.
if ($data = json_decode($data, true)) {

    // Prettify the JSON-formatted data
    $data = json_encode(
                $data,
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                );
      

  $query_insert = " INSERT INTO csp_reports SET ";
	$query_insert.= " document_uri       = '".mysqli_real_escape_string( $lk , $data['csp-report']['document-uri'] )."', ";
	$query_insert.= " full_report        = '".mysqli_real_escape_string( $lk , $data_flat )."', ";	  
	$query_insert.= " referrer           = '".mysqli_real_escape_string( $lk , $data['csp-report']['referrer'] )."', ";
	$query_insert.= " violated_directive = '".mysqli_real_escape_string( $lk , $data['csp-report']['violated-directive'] )."', ";
	$query_insert.= " original_policy    = '".mysqli_real_escape_string( $lk , $data['csp-report']['original-policy'] )."', ";
	$query_insert.= " blocked_uri 	   = '".mysqli_real_escape_string( $lk , $data['csp-report']['blocked-uri'] )."', ";
	$query_insert.= " source_file        = '".mysqli_real_escape_string( $lk , $data['csp-report']['source-file'] )."', ";
	$query_insert.= " line_number        = '".mysqli_real_escape_string( $lk , $data['csp-report']['line-number'] )."', ";
	$query_insert.= " column_number      = '".mysqli_real_escape_string( $lk , $data['csp-report']['column-number'] )."', ";
	$query_insert.= " status_code        = '".mysqli_real_escape_string( $lk , $data['csp-report']['status-code'] )."' ";
	  
	$obj = mysqli_query($lk, $query_insert);

}

?>
