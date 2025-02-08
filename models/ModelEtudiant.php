<?php
    class ModelEtudiant{

    public function dbConnect(){
        try {
            $connection = new PDO('mysql:host=localhost;dbname=phpproject', 'root', '');
            echo 'ok';
            return $connection;
        } catch (PDOException $e) {
            die('erreur : '.$e->getMessage());
            exit();
        }
        
    }
    
    public function getEtudiants($name,$firstname,$email,$password){
       
            $connection = $this->dbConnect();
            $sql="INSERT INTO etudiant(nom_et,prenom_et,email_et,password_et) VALUES(?,?,?,?)";
            $req=  $connection->prepare($sql);
            $req->execute(array($name,$firstname,$email,$password));

    }

    public function listEtudiants(){
        $connection = $this->dbConnect();
            $sql="SELECT* FROM etudiant;";
            $req=  $connection->prepare($sql);
            $req->execute();
            $rep = $req->fetchall();
            return $rep; 


    }
}


?>
