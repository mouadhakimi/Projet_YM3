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
                    <h4>Ajouter les données d'une filiére : </h4><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nom de la filiére </span>
                        <input type="text" placeholder="Nom " name="nom" id="nom" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ecole :</span>
                        <select name="ecole" class="form-control">
                        <?php
                                $sql = $conn->query("SELECT DISTINCT(ecole)  FROM filiere");
                                while($row = $sql->fetch_array()){
                                    echo '<option value="'.htmlspecialchars($row['ecole']).'">'. htmlspecialchars($row['ecole']).' Lille</option>';
                                }?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Définition</span>
                        <textarea name="definition" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Salaire</span>
                        <textarea name="Salaire" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Formation</span>
                        <textarea name="formation" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Domaine d'emploi</span>
                        <textarea name="principaux_employeurs" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Qualités et compétences nécessaires</span>
                        <textarea name="qualités_compétences_nécessaires" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Lien PHP</span>
                        <textarea name="lien" class="form-control" required></textarea>
                    </div>
                    <input type="button" value="Envoyer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
    </body>
</html>