<?php
   include("models/ModelMessage_p.php");
   class C_Message_p{
    

       public function insertMessage_p(){


           if(isset($_POST['objet'],$_POST['contenu'],$_POST['date'])){
               extract($_POST);
    echo "ok";
               $M = new ModelMessage_p ;
               $M->getMessage_p($objet,$contenu,$date);
               
           }
             
           include('views/viewMess_p.php');
       }
       
   }

?>