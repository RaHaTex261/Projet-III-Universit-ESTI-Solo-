<?php
include ("controllers/C_Etudiant.php");
$et = new C_Etudiant;
$et->insertEtudiant();
$et->lister();
    

?>
<!-- © 2025 RaHaTex - Tous droits réservés. -->