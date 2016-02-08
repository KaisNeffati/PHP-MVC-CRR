<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class users {
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $status;
    private $fonction;
    private $full_access;
    private $login;
    private $mots_pass;   
    
    public function __construct($matricule,$nom,$prenom,$email,$status,$fonction,$full_access,$login,$mots_pass) {
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->status=$status;
        $this->fonction=$fonction;
        $this->full_access=$full_access;
        $this->login=$login;
        $this->mots_pass=$mots_pass; 
    }
    
        public function getmatricule() {
        return $this->matricule;
    }
    public function setmatricule($matricule) {
        $this->matricule=$matricule;
    }
        public function getnom() {
        return $this->nom;
    }
    public function setnom($nom) {
        $this->nom=$nom;
    }
        public function getprenom() {
        return $this->prenom;
    }
    public function setprenom($prenom) {
        $this->prenom=$prenom;
    }
        public function getemail() {
        return $this->email;
    }
    public function setemail($email) {
        $this->email=$email;
    }
        public function getstatus() {
        return $this->status;
    }
    public function setstatus($status) {
        $this->status=$status;
    }
        public function getfonction() {
        return $this->fonction;
    }
    public function setfonction($fonction) {
        $this->fonction=$fonction;
    }
        public function getlogin() {
        return $this->login;
    }
    public function setlogin($login) {
        $this->login=$login;
    }
        public function getmotspass() {
        return $this->mots_pass;
    }
    public function setmots_pass($mots_pass) {
        $this->mots_pass=$mots_pass;
    }
        public function getfull_access() {
        return $this->full_access;
    }
    public function setfull_access($full_access) {
        $this->full_access=$full_access;
    }
    public function connecter_user()
    {
        include'connection.php';
        $req="SELECT * FROM `user` WHERE `login` = '$this->login' AND `mots_pass` = '$this->mots_pass'";
        $result=mysqli_query($con,$req);
        $numreq=mysqli_num_rows($result);
        if($numreq > 0) {
            while ($fsu = mysqli_fetch_array($result))
            {               
            session_start();                
            $_SESSION['mat']= $fsu['matricule'];
            $_SESSION['stats']=TRUE;
            if ($fsu['full_access']=='admin')
            {
            echo "<script language=javascript>
                document.location.href='liste_utilisateurs.php';
            </script> ";       
            }
            else
            {echo "<script language=javascript>
                document.location.href='liste_crr_user.php';
            </script> ";}
            }
        }
        else
        {
            echo "<script language=javascript> alert('Verifier vos information');
                document.location.href='../View/index.php';
            </script> ";              
        }
        
    }
    public function select_users()
    {
        include'connection.php';
        $req="SELECT * from user ";
        $result=  mysqli_query($con,$req);
        
            while ($data = mysqli_fetch_array($result))
                {
                ?>
                                        <tr>
                                            <th><?php echo $data['matricule']?></th>
                                            <th><?php echo $data['nom']?></th>
                                            <th><?php echo $data['prenom']?></th>
                                            <th><?php echo $data['email']?></th>
                                            <th><?php echo $data['status']?></th>
                                            <th><?php echo $data['fonction']?></th>
                                            <th><?php echo $data['full_access']?></th>
                                            <th><?php echo $data['login']?></th>
                                            <th><?php echo $data['mots_pass']?></th>
                                            
                                        </tr>
                                        <?php
                }

    }
    
    public function insert_user() {
        
        include'connection.php';
         $sql = "INSERT INTO user ( matricule, nom, prenom, email, status, full_access, login, mots_pass, fonction) VALUES ('" . $this->matricule . "', '" . $this->nom . "', '" . $this->prenom . "', '" . $this->email . "', '" . $this->status . "', '" . $this->full_access . "', '" . $this->login . "', '" . $this->mots_pass . "', '" . $this->fonction . "')";

        if (mysqli_query($con, $sql)) {
            echo "<script language=javascript> alert('New user created successfully');
                document.location.href='../View/ajouter_utilisateur.php';
            </script> "; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    public function disconnect() {
        session_start();
        $_SESSION = array();
        session_destroy();
         echo "<script language=javascript>
                document.location.href='../View/index.php';
            </script> "; 
    }
    public function print_select()
    {
        include'connection.php';
        $req="SELECT * FROM user ";
        $result=mysqli_query($con,$req);
        $numreq=mysqli_num_rows($result);
        if($numreq > 0) {
            while ($data = mysqli_fetch_array($result))
            {                
                ?>
            <OPTION  value=<?php echo $data['matricule']?> > <?php echo $data['nom']; echo " "; echo $data['prenom']; ?> </OPTION>
            <?php
            }
        }
        else
        {
            echo "<script language=javascript> alert('il n y a pas des projets');
                document.location.href='../View/liste_utilisateurs.php';
            </script> ";              
        }
        
        
    }
    
    
    
}
?>