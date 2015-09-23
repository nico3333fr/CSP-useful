<?php


@$lk = mysqli_connect("localhost","your_user_name","your_user_pass","your_db_name");
if (!$lk)
{
	echo "<br /><br />La base de données est inaccessible.";
	exit;
}

if (!mysqli_set_charset($lk, "utf8")) {
    printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($lk));
    exit;
}


?>
