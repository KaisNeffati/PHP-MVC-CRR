<?php

class projet {
    private $code;
    private $libelle;
    
    public function __construct($code,$libelle) {
        $this->code=$code;
        $this->libelle=$libelle;
    }
    public function get_code()
    {return($this->code);}
    public function set_code($code)
    {$this->code=$code;}
    public function get_libelle()
    {return($this->libelle);}
    public function set_libelle($libelle)
    {$this->libelle=$libelle;}
    
    public function print_select()
    {
        include'connection.php';
        $req="SELECT * FROM `projet`";
        $result=mysqli_query($con,$req);
        $numreq=mysqli_num_rows($result);
        if($numreq > 0) {
            while ($data = mysqli_fetch_array($result))
            {                
                ?>
            <OPTION  value=<?php echo $data['code']?> > <?php echo $data['libelle'] ?> </OPTION>
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
    public function insert_projet() {
        
        include'connection.php';
         $sql = "INSERT INTO projet ( code, libelle) VALUES ('" . $this->code . "', '" . $this->libelle . "')";

        if (mysqli_query($con, $sql)) {
            echo "<script language=javascript> alert('New projet created successfully');
                document.location.href='../View/ajouter_projet.php';
            </script> "; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
        public function select_projet() {
        include'connection.php';
        $req="SELECT * from projet ";
        $result=  mysqli_query($con,$req);
        
            while ($data = mysqli_fetch_array($result))
                {
                ?>
                                        <tr>
                                            <th><?php echo $data['code']?></th>
                                            <th><?php echo $data['libelle']?></th>                                                                                      
                                        </tr>
                                        <?php
                }
        
        }
    
    
}
