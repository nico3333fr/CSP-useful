<?php

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();

header('Content-Language: en');
header('Pragma: no-cache');
header('Keep-Alive: timeout=5, max=100'); 
header('Connection: keep-alive');  
header('Cache-Control: no-store, no-cache, must-revalidate');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options:DENY');  
header('X-XSS-Protection: 1; mode=block');  
header('Set-Cookie: HttpOnly'); 

require_once( 'inc-connexion.php');
require_once( 'inc-mini-css.php');
require_once( 'inc-fonctions.php');


// CSP policy	 
header('Content-Security-Policy: default-src \'self\';  script-src \'self\' *.google-analytics.com  ; style-src \'self\' data: ; img-src \'self\' *.google-analytics.com data: ;  frame-src \'self\' ; report-uri /csp-parser.php ; ');//report-uri /csp-parser.php 

?>
