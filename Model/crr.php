<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class crr
{
    private $matricule;
    private $projet;
    private $mot_cle;
    private $date_d_reunion;
    private $date_d_sys;
    private $liste_d_invite;
    private $proces_verbal;
    
    public function getmatricule(){return $this->matricule;}
    public function setmatricule($matricule){$this->matricule=$matricule;}
    public function getprojet(){return $this->projet;}
    public function setprojet($projet){$this->projet=$projet;}
    public function getmot_cle(){return $this->mot_cle;}
    public function setmot_cle($mot_cle){$this->mot_cle=$mot_cle;}
    public function getdate_d_reunion(){return $this->date_d_reunion;}
    public function setdate_d_reunion($date_d_reunion){$this->date_d_reunion=$date_d_reunion;}
    public function getdate_d_sys(){return $this->date_d_sys;}
    public function setdate_d_sys($date_d_sys){$this->date_d_sys=$date_d_sys;}
    public function getliste_d_invite(){return $this->liste_d_invite;}
    public function setliste_d_invite($liste_d_invite){$this->liste_d_invite=$liste_d_invite;}
    public function getproces_verbal(){return $this->proces_verbal;}
    public function setproces_verbal($proces_verba){$this->proces_verbal=$proces_verba;}
    
    public function select_crr() {
        include'connection.php';
        $req="SELECT * from crr ";
        $result=  mysqli_query($con,$req);
        
            while ($data = mysqli_fetch_array($result))
                {
                ?>
                                        <tr>
                                            <th><?php echo $data['matricule']?></th>
                                            <th><?php echo $data['projet']?></th>
                                            <th><?php echo $data['mot_cle']?></th>
                                            <th><?php echo $data['date_d_reunion']?></th>
                                            <th><?php echo $data['date_d_sys']?></th>
                                            <th><?php echo $data['liste_d_invite']?></th>
                                            <th><?php echo $data['proces_verbal']?></th>
                                            <th><?php echo $data['present']?></th>
                                                                         
                                        </tr>
                                        <?php
                }
        
    }
     public function insert_crr() {
        
        include'connection.php';
         $sql = "INSERT INTO crr ( matricule, projet, mot_cle, date_d_reunion, date_d_sys, liste_d_invite, proces_verbal) VALUES ('" . $this->matricule . "', '" . $this->projet . "', '" . $this->mot_cle . "', '" . $this->date_d_reunion . "', '" . $this->date_d_sys . "', '" . $this->liste_d_invite . "', '" . $this->proces_verbal . "')";

        if (mysqli_query($con, $sql)) {
            echo "<script language=javascript> alert('New crr created successfully');
                document.location.href='../View/ajouter_crr.php';
            </script> "; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    
    
    
}
?>