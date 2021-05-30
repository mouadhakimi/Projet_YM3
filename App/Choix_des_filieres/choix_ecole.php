<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Choix ecoles</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréamaroc.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/choix_ecoles.css"/>
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

            <a href="http://127.0.0.1/Projet/App/Admin/connexion_admin.php" id="page admin" ><img class="admin"
            src="../../Photo/admin2.png"
            alt="Logo GitHub"></a>

            <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
        </div>
        
        <div class="container-fluid">
            <div class="warning" >
                <p>Veuillez selectionner l'ecole que vous voulez découvrir</p>
                <form action="action.php" method="post" style="">
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
                    <input type="button" value="Suivant" onclick="submit()" class="btn btn-dark">
                </form>
            </div>
            
        </div>
    </body>
</html>