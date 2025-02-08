<?php
    class ModelMessage{
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
        
        public function getMessage($objet,$contenu,$date){
           
            $connection = $this->dbConnect();

            $etudiants = $_POST['et'];


            foreach($etudiants as $id_et) {
                $sql='INSERT INTO messages(objet_mess,contenu_mess,date_mess, id_et) VALUES("'.$objet.'","'.$contenu.'","'.$date.'", '.$id_et.')';
                
                $req=  $connection->query($sql);
                

            }


        } 
    }
    
    
?>