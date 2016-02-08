<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../Model/crr.php';
$c= new crr(0,"","","","","","");
$c->select_crr();
}
?>