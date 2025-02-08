<?php
    class ModelModule{
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
        
        public function getModule($nom,$ref,$id_cat){
           
            $connection = $this->dbConnect();
                $sql="INSERT INTO module (nom_mo,reference_mo,id_cat) VALUES(?,?,?) ";
                echo 'ok';
                $req=  $connection->prepare($sql);
                $req->execute(array($nom,$ref,$id_cat));

    
        } 
    }



?>