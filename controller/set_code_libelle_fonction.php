<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

include '../Model/fonction.php';
$u= new fonction("","");
$u->print_select();
}
?>