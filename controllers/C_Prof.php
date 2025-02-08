<?php
   include("models/ModelProf.php");
   class C_Prof{
    

       public function insertProf(){


           if(isset($_POST['name'],$_POST['firstname'],$_POST['email'])){
               extract($_POST);
    echo "ok";
               $E = new ModelProf ;
               $E->getProf($name,$firstname,$email);
               
           }
             
           include('views/viewProf.php');
       }

       public function lister_p(){

        $Et = new ModelProf ;
        $rep = $Et->listProf();
        include('views/list_prof.php');
   }
   
       
   }

?>