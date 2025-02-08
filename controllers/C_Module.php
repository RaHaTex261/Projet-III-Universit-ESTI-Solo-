<?php
   include("models/ModelModule.php");
   class C_Module{
       

       public function insertModule(){

           if(isset($_POST['nom'],$_POST['ref'],$_POST['id_cat'])){
               extract($_POST);


               $E = new ModelModule();
               $E->getModule($nom,$ref,$id_cat);
             
           }
             include('views/viewModule.php');
           
       }

   }

   
?>