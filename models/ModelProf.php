<?php
    class ModelProf{
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
        
        public function getProf($name,$firstname,$email){
           
            $connection = $this->dbConnect();

            /**** Insertion dans la table profs */
            $sql="INSERT INTO profs(nom_p,prenom_p,email_p) VALUES(?,?,?)";
            echo 'ok';
            $req=  $connection->prepare($sql);
            $req->execute(array($name,$firstname,$email));

            $id_prof = $connection->lastInsertId();



            /*** Insertion dans la table module_prof */
            $modules = $_POST['mod'];

            var_dump($modules);

            foreach($modules as $id_module) {
                $sql="INSERT INTO module_prof(id_p, id_mo) VALUES(?,?)";
                echo 'ok';
                $req=  $connection->prepare($sql);
                $req->execute(array($id_prof,$id_module));
    
            }


        } 

        public function listProf(){
            $connection = $this->dbConnect();
                $sql="SELECT* FROM profs ";
                $req=  $connection->prepare($sql);
                $req->execute();
                $rep = $req->fetchall();
                return $rep; 
    
    
        }
    }

    
?>