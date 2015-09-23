<?php

// http://kitmacallister.com/2011/minify-css-with-php/
function minifyCSS($string){

	/* Strips Comments */
	$string = preg_replace('!/\*.*?\*/!s','', $string);
	$string = preg_replace('/\n\s*\n/',"\n", $string);

	/* Minifies */
	$string = preg_replace('/[\n\r \t]/',' ', $string);
	$string = preg_replace('/ +/',' ', $string);
	$string = preg_replace('/ ?([,:;{}]) ?/','$1',$string);

	/* Kill Trailing Semicolon, Contributed by Oliver */
	$string = preg_replace('/;}/','}',$string);

	/* Return Minified CSS */
	return $string;
}

$error_css_mini = false;

// simple securité
if (   file_exists(@$prefix.'layout/css/styles.css') 
    && file_exists(@$prefix.'layout/css/styles_mini.css')  
    && is_writable(@$prefix.'layout/css/styles_mini.css')
    ) {

      $date_css = filemtime($prefix.'layout/css/styles.css');
      
      // sélectionner le fichier et chopper son timestamp
      $date_css_mini = filemtime($prefix.'layout/css/styles_mini.css');
      
      
      // ensuite comparer la date et le timestamp, voir si regeneration nécessaire
      if ($date_css>$date_css_mini){
         // regen and minify
         $filename = $prefix.'layout/css/styles.css';
         $handle = fopen($filename, "r");
         $content = fread($handle, filesize($filename));
      
         $result = minifyCSS($content);
         
         $fp = fopen($prefix.'layout/css/styles_mini.css', 'w');
         fwrite($fp, $result);
         //define("_CSS_FILENAME",'styles_mini_'.$date_css.'.css');
         define("_CSS_FILENAME",'styles_mini.css');
      }
      else {
            //define("_CSS_FILENAME",'styles_mini_'.$date_css.'.css');
            define("_CSS_FILENAME",'styles_mini.css');
            }

   }
   else {
         define("_CSS_FILENAME",'styles_20120909.css');
         }
		 

?>
