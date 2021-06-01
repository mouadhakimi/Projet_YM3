<!DOCTYPE html>
<html lang="fr">
    <head>
    <link rel="icon" type="image/png" sizes="16x16" href="../../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../css/robotique.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        $id = 13 ;
        ?>
        <meta charset="utf-8" />
        <div class='nom_filiere'>
                <?php
                $sql = "SELECT nom_filiere FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<title>".htmlspecialchars ($row['nom_filiere'])."</title>" ;
                ?>
            </div>
    </head>
    <body >
            <div class="page-header">
                <a href="../../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>
                <a href="https://github.com/mouadhakimi-code/Project" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../../Photo/github.png"
                alt="Logo GitHub"></a>
                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
            <br>
            <div class='nom_filiere'>
                <?php
                $sql = "SELECT nom_filiere FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<p class='display-4'>".htmlspecialchars ($row['nom_filiere'])."</p>" ;
                ?>
            </div>
            <div class="definition">
                <p class="display-6"> DEFINITION :</p>
                <?php
                $sql = "SELECT definition FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo $row['definition'] ;
                ?>
            </div>
            <br>
            <div class="formation">
                <p class="display-6"> FORMATION :</p>
                <?php
                $sql = "SELECT formation FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo $row['formation'] ;
                ?>
            </div>
            <br>
            <div class="qualité_compétences_nécessaire">
                <p class="display-6"> QUALITES ET COMPETENCES NECESSAIRES :</p>
                <?php
                $sql = "SELECT qualités_compétences_nécéssaires FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo $row['qualités_compétences_nécéssaires'] ;
                ?>
            </div>
            <br>
            <div class="principaux_employeurs">
                <p class="display-6"> PRINCIPAUX EMPLOYEURS :</p>
                <?php
                $sql = "SELECT principaux_employeurs FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo $row['principaux_employeurs'] ;
                ?>
            </div>
            <br>
            <div class="salaire">
                <p class="display-6"> SALAIRE :</p>
                <?php
                $sql = "SELECT salaire FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo $row['salaire'] ;
                ?>
            </div>
    </body>
</html>