<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

include '../Model/users.php';
$u= new users(0,"","","","","","","","");
$u->print_select();
}
?>
