<?php
if ($_SESSION['stats']!=1)
     echo "<script language=javascript> alert('Vous devez connecter .!');
                document.location.href='../View/index.php';
            </script> "; 
else{

include '../Model/crr.php';
if($_POST) {
   
    $c= new crr(0,"","","","","","");
    $c->setmatricule($_POST['matricule_textbox']);    
    $c->setprojet($_POST['projet_liste_deroulant']);
    $c->setmot_cle($_POST['mot_cle_textbox']);
    $c->setdate_d_reunion($_POST['date_d_reunion_textbox']); 
    $c->setdate_d_sys($_POST['date_sys_textbox']); 
    $c->setliste_d_invite($_POST['liste_des_invites_textbox']);
    $c->setproces_verbal($_POST['proces_verbal_textbox']); 

    $c->insert_crr();
    
}
}
?>