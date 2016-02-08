<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

include '../Model/users.php';
if($_POST) {
   
    $u= new users(0,"","","","","","","","");
    $u->setmatricule($_POST['matricule_textbox']);    
    $u->setnom($_POST['nom_textbox']);
    $u->setfonction($_POST['fonction_liste_deroulant']);
    $u->setprenom($_POST['prenom_textbox']); 
    $u->setemail($_POST['email_textbox']); 
    $u->setstatus($_POST['status_textbox']);
    $u->setfull_access($_POST['full_access_textbox']); 
    $u->setlogin($_POST['login_textbox']);    
    $u->setmots_pass($_POST['mots_de_passe_textbox']); 
    $u->insert_user();
    
}
}
?>