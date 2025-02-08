<?php
   require_once("models/ModelEtudiant.php");
   class C_Etudiant {


       

       public function insertEtudiant(){

           if(isset($_POST['name'],$_POST['firstname'],$_POST['email'],$_POST['password'])){
               extract($_POST);


               $E = new ModelEtudiant ;
               $E->getEtudiants($name,$firstname,$email,$password);
             
           }
             include('views/viewEtudiant.php');
           
           
       }

       public function lister(){

            $Et = new ModelEtudiant ;
            $rep = $Et->listEtudiants();
            include('views/list_et.php');
       }
       

   }

   
?>