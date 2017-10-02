<?php
if ( !empty( $_SERVER["PHP_AUTH_USER"] ) && !empty( $_SERVER["PHP_AUTH_PW"] ) ) {
  if ( $_SERVER["PHP_AUTH_USER"] == "XXX" && $_SERVER["PHP_AUTH_PW"] == "YYY" ) {
  
    
  } else {
    header('WWW-Authenticate: Basic realm="Say hello"');
    header('HTTP/1.0 401 Unauthorized');
    header('status: 401 Unauthorized');
    echo "<h1>Unauthorized access</h1>";
    exit();
  }
} else {
  header('WWW-Authenticate: Basic realm="Say hello"');
  header('HTTP/1.0 401 Unauthorized');
  header('status: 401 Unauthorized');
  echo "<h1>Unauthorized access</h1>";
  exit();
}

$lang='en';
$prefix='./';
$folderid='';

if ( isset($_POST['csp_dir']) ){
    $csp_dir = htmlspecialchars($_POST['csp_dir']);
}
else {
     $csp_dir = "Content-Security-Policy: default-src 'self';";
     }

header('Content-Language: en');
header('Pragma: no-cache');
header('Keep-Alive: timeout=5, max=100'); 
header('Connection: keep-alive');  
header('Cache-Control: no-store, no-cache, must-revalidate');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options:DENY');  
header('X-XSS-Protection: 1; mode=block');  
header('Set-Cookie: HttpOnly');  

header($csp_dir);

require_once( './layout/includes/inc-mini-css.php');




if ( isset($_POST['csp_head']) ){
    $csp_head = @$_POST['csp_head'];
}
else {
     $csp_head = '';
     }

if ( isset($_POST['csp_body']) ){
    $csp_body = @$_POST['csp_body'];
}
else {
     $csp_body = '';
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

<title>CSP Playground </title>
<link href="<?php echo $prefix; ?>layout/css/<?php echo _CSS_FILENAME; ?>" rel="stylesheet" media="all" />

<meta name="description" content="CSP Playground" />
<meta name="keywords" content="CSP, Content security Policy, Playground" />


<?php echo $csp_head; ?>


</head>
<body role="document">

<div id="page">


   <main class="mw960e main center mt2 pt1 aligncenter" id="main" role="main">
   
   
     <h1>CSP playground</h1>
	 
	   <form action="playground.php" method="post">
     
       <label for="id_csp_dir" class="bl m0">
         Please insert CSP Directives<br>
         <textarea name="csp_dir" id="id_csp_dir" cols="30" rows="2" class="w80 m0"><?php echo $csp_dir; ?></textarea>
       </label>
       <br>
       <label for="id_csp_head" class="bl m0">
         &lt;head&gt;<br>
         <textarea name="csp_head" id="id_csp_head" cols="30" rows="3" class="w80 m0"><?php echo htmlspecialchars($csp_head); ?></textarea><br>
         &lt;/head&gt;
       </label>
       
       <label for="id_csp_body" class="bl m0">
         &lt;body&gt;<br>
         <textarea name="csp_body" id="id_csp_body" cols="30" rows="5" class="w80 m0"><?php echo htmlspecialchars($csp_body); ?></textarea><br>
         &lt;/body&gt;
       </label>
       
       <button type="submit" class="button pl2 pr2 big">Let’s test these!</button>
     
     </form>
     
     <?php echo $csp_body; ?>
   
   
   </main>
</div>


</body>
</html>
