<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu </title>
    <link rel="stylesheet" href="css/accueiladmin.css">
</head>
<body>
    <nav>
        <ul class="liste-items">
            <li class="items">HOME</li>
            <li class="items">MESSAGE</li>
            <li class="items">CLASSES
                <span>&#9660;</span>
                <ul class="sous-liste">
                    <li class="items-sous-liste">INFO_253</li>
                    <li class="items-sous-liste">INFO_250</li>
                    <li class="items-sous-liste">INFO_110</li>
                </ul>            
            </li>
            <li class="items">STUDENTS
                <span>&#9660;</span>
                <ul class="sous-liste">
                    <li class="items-sous-liste">Listing Students</li>
                </ul>
            </li>
            <li class="items">PROFESSOR
                <span>&#9660;</span>
                <ul class="sous-liste">
                    <li class="items-sous-liste">Listing Professor</li>
                </ul>
            </li>
            <li class="items">MANAGEMENT
            <span>&#9660;</span>
                <ul class="sous-liste">
                    <li class="items-sous-liste">Gestion liste
                        <ul class="sous-liste2">
                        <li class="items-sous-liste"><a href="list_prof.php">Profsessor</a>
                        <li class="items-sous-liste"><a href="list_et.php">Students</a>
                        </ul>
                    </li>
                    <li class="items-sous-liste">Modification Informations</li>
                    <li class="items-sous-liste">Suprrimer Personne</li>
                    <li class="items-sous-liste">Suivre Historique</li>
                </ul>          
            </li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        </ul>
    </nav>

    <div class="title">
                <h1>Welcome <?php echo $_SESSION['username']; ?> &#128522</h1>
    </div>

</body>
</html>

<!-- © 2025 RaHaTex - Tous droits réservés. -->