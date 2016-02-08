<?php


$con= new mysqli('localhost','root','');
if (!$con) {
   die('Impossible de se connecter : ' . mysql_error());
}

$db_selected = mysqli_select_db($con,'CRR');
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
        

?>

