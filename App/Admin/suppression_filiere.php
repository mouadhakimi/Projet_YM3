<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Suppression filiére</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/supression_filiere.css">
        <link rel="stylesheet" href="../css/dropdown.css">
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
    <body>
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
                <form method="post" action="suppression_3.php">
                        <h3>Vous voulez supprimer : </h3>
                        <select name="filiere" class="form-control">
                        <?php
                                $sql = $conn->query("SELECT filiere_id,nom_filiere FROM filiere");
                                while($row = $sql->fetch_array()){
                                    echo '<option value="'.$row['filiere_id'].'">'. htmlspecialchars($row['nom_filiere']).'</option>';
                                }?>
                        </select>
                        <br>
                <input type="button" value="Supprimer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
    </body>
</html>