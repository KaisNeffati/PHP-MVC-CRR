<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

include '../Model/projet.php';
if($_POST) {
   
    $p= new projet("","");
    $p->set_code($_POST['code_textbox']);    
    $p->set_libelle($_POST['libelle_textbox']);
    $p->insert_projet();
    
}
}
?>