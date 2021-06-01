<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Ajout de données</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/avis.css">
        <link rel="stylesheet" href="../css/dropdown.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="../js/dropdown.js"></script>
        <?php
        $servername = "127.0.0.1";
        $database = "projet_ym3";
        $username = "root";
        $password = "root";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error()."<br>");
        }
        ?>
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
                <form action="ajouter_données.php" method="post">
                    <h4>Changer les données d'une filiére : </h4><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Filiere :</span>
                        <select name="filiere" class="form-control">
                        <?php
                                $sql = $conn->query("SELECT DISTINCT(nom_filiere)  FROM filiere");
                                while($row = $sql->fetch_array()){
                                    echo '<option value="'.htmlspecialchars($row['nom_filiere']).'">'. htmlspecialchars($row['nom_filiere']).'</option>';
                                }?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Vous voulez changer :</span>
                        <select name="columns" class="form-control">
                                <option value="definition">Définition</option>
                                <option value="salaire">Salaire</option>
                                <option value="formation">Formation</option>
                                <option value="principaux_employeurs">Domaine d'emploi</option>
                                <option value="qualités_compétences_nécéssaires">Qualités et compétences nécessaires</option>
                                <option value="lien">Lien</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ecrire la donnée que vous voulez changer</span>
                        <textarea name="donnée" class="form-control" required></textarea>
                    </div>
                    <input type="button" value="Envoyer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
    </body>
</html>