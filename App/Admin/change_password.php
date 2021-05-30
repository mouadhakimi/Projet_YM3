<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Changer de mot de passe</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/avis.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/dropdown.css">
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
                <a href="change_password.php"  class="btn disabled">mot de passe</a>
                <a href="connexion_admin.php">Déconnexion</a>
                </div>
            </div> 
        <div class="container-fluid">
            <div class="warning">
                <form action="change.php" method="post">
                    <h4>Changer le mot de passe : </h4><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Mot de passe actuel : </span>
                        <input type="password" placeholder="Password" name="mdp_actuel" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nouveau mot de passe : </span>
                        <input type="password" placeholder="New Password" name="nouveau_mdp1" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ressaisissez le nouveau mot de passe : </span>
                        <input type="password" placeholder="Re-New Password" name="nouveau_mdp2" class="form-control" required><br>
                    </div>
                    <input type="button" value="Enregistrer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
    </body>
</html>