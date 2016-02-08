<?php


include '../Model/users.php';
if ($_POST) {
    $u= new users(0,"","","","","","","","");
    $u->setlogin($_POST['loginn']);
    $u->setmots_pass($_POST['pass_word']); 
    $u->connecter_user();    
}

?>