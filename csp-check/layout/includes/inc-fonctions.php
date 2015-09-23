<?php

function random($car) {
  $string = "";
  $chaine = "abcdefghijklmnpqrstuvwxy";
  srand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++) {
    $string .= $chaine[rand()%strlen($chaine)];
    }
  return $string;
}


/* ---------------------------------------------
----- Execute query
--------------------------------------------- */
function execute_query($sql,&$error,&$taille_tablo,&$tablo,&$connexion){
 
    $error = '';
    $result = mysqli_query($connexion, $sql) or $error=mysqli_error($connexion);
    
    if ($error==''){
        $taille_tablo = mysqli_num_rows($result);
        if ($taille_tablo != 0){ // si y a qqch   	 
            $k=0;
            while ( $tab=mysqli_fetch_array($result) ){
                  $tablo[$k]=$tab;
                  $k++;
                  }
            }//finsi y a qqch
           }// fin si
   }// fin fonction

?>
