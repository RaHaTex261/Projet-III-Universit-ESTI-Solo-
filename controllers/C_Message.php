<?php
   include("models/ModelMessage.php");
   class C_Message{
    

       public function insertMessage(){


           if(isset($_POST['objet'],$_POST['contenu'],$_POST['date'])){
               extract($_POST);
    echo "ok";
               $M = new ModelMessage ;
               $M->getMessage($objet,$contenu,$date);
               
           }
             
           include('views/viewMessage.php');
       }
       
   }

?>