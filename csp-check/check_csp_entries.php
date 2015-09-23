<?php
$lang='en';
$prefix='./';

include($prefix.'layout/includes/all.php');

$id_go=@$_GET['id_go'];

$query_csp = "SELECT * FROM csp_reports WHERE document_uri LIKE '%".mysqli_real_escape_string( $lk , $id_go )."%' ";
execute_query($query_csp,$error_csp,$taille_tablo_csp,$tablo_csp,$lk);



header('Content-type: application/json');

if ($taille_tablo_csp>0){
	
	$tablo_return = array();
	
	$i = 0;
	while ( $i<$taille_tablo_csp ){
		  $tablo_return[]= array(
                      'full_report' => $tablo_csp[$i]['full_report']
                   );
		  ++$i;
	      }
	
	
}

$jsonstring = json_encode($tablo_return);

echo $jsonstring;


?>
