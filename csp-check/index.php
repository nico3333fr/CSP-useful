<?php

$lang='en';
$prefix='./';

$analytics_track_page='';
// spécifier page virtuelle à tracker si besoin


include($prefix.'layout/includes/all.php');


// no unique id => generate
if ( !isset( $_GET['id'] ) ) {
	$unique_id = random(20);
	
	$trouve = true;
	
	while ($trouve) {
		$query_check = " SELECT unique_id FROM csp_reports WHERE unique_id = '".mysqli_real_escape_string( $lk , $unique_id )."' ";
		execute_query($query_check,$error_check,$taille_tablo_check,$tablo_check,$lk);
		if ( $taille_tablo_check == 0 ){
		   	$trouve = false;
		   }
		   else {
			    $unique_id = random(20);
		        }
		
	    }
	// redirection
	header( 'Location: ./?id='.$unique_id );
	die();
}

?>
<!DOCTYPE html>
<!--[if lte IE 6]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" class="ie6 oldies no-js"> <![endif]-->
<!--[if lte IE 7]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" class="ie7 oldies no-js"> <![endif]-->
<!--[if IE 8]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" class="ie8 oldies no-js">  <![endif]-->
<!--[if IE 9]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" class="ie9 no-js">  <![endif]-->
<!--[if gt IE 9]><!--> <html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang; ?>" class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8" />

<title>CSP tester </title>
<link href="<?php echo $prefix; ?>layout/css/<?php echo _CSS_FILENAME; ?>" rel="stylesheet" media="all" />

</head>
<body role="document">

<div id="page">


   <main class="mw960e main center mt2 pt1" id="main" role="main">
   
   
   
     <h1>CSP tester</h1>
	 
	 <p>This page should return no CSP error. Please be patient some seconds…</p>
     
     <p id="js-return" data-id-go="<?php echo $_GET['id']; ?>" aria-live="polite" aria-atomic="true">
	 
	 </p>

     
   </main>
  </div>

<script src="<?php echo $prefix ?>layout/js/jquery.js"></script>
</body>
</html>
