<?php
    class ModelMessage_p{
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
        
        public function getMessage_p($objet,$contenu,$date){
           
            $connection = $this->dbConnect();

            $mod = $_POST['id_mo'];

            var_dump($mod);

            foreach((array)$mod as $id_mo) {
                $sql='INSERT INTO messages(objet_mess,contenu_mess,date_mess,id_mo) VALUES("'.$objet.'","'.$contenu.'","'.$date.'",'.$id_mo.')';
                
                $req=  $connection->query($sql);
                

            }


        } 
    }
    
    
?>