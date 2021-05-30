<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Acceuil Administrateur</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="../css/dropdown.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="../js/dropdown.js"></script>
    </head>
    <body >
            <div class="page-header">
                <a href="../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>
                <a href="https://github.com/mouadhakimi-code/Project" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../Photo/github.png"
                alt="Logo GitHub"></a>
                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
            
            <div class="dropdown">
                <?php
                $nom = $_COOKIE['Nom_complet'];
                echo "<button onclick='myFunction()' class='dropbtn' >$nom</button>";
                ?>
                
                <div id="myDropdown" class="dropdown-content">
                <a href="change_password.php">Changer de mot de passe</a>
                <a href="connexion_admin.php">Déconnexion</a>
                </div>
            </div> 
        <div class="container-fluid">
            <div class="warning">
                <div class="form1">
                <form method="post" action="traitement_etudiant.php">
                <input type="button" value="Afficher les étudiants" onclick="submit()" class="btn btn-dark">
                </form>
                <br>
                </div>
                <div class="form2">
                <form method="post" action="traitement_filiere.php">
                <input type="button" value="Gestion des filières" onclick="submit()" id ="btn2" class="btn btn-dark">
                </form>
                <br>
                </div>
                <div class="form3">
                <form method="post" action="traitement_ajout.php">
                <input type="button" value="Ajouter un admin" onclick="submit()" id ="btn3" class="btn btn-dark">
                </form>
                <br>
                </div>
                <div class="form2">
                <form method="post" action="traitement_suppression.php">
                <input type="button" value="Supprimer un admin" onclick="submit()" id="btn4" class="btn btn-dark">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>