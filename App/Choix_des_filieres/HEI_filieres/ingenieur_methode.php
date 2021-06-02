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
        $id = 22 ;
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
        <link rel="stylesheet" type="text/css" href="../../../App/css/maps.css" />
        <script src="../../js/maps.js"></script>
    </head>
    <body >
            <div class="page-header">
                <a href="../../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>
                <a href="https://github.com/mouadhakimi/Projet_YM3" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../../Photo/github.png"
                alt="Logo GitHub"></a>
                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
            <br>
            <div class="container-fluid">
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
                echo "<p class='text-muted'>".htmlspecialchars ($row['definition'])."</p>" ;
                ?>
            </div>
            <br>
            <div class="formation">
                <p class="display-6"> FORMATION :</p>
                <?php
                $sql = "SELECT formation FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<p class='text-muted'>".$row['formation']."</p>" ;
                ?>
            </div>
            <br>
            <div class="qualité_compétences_nécessaire">
                <p class="display-6"> QUALITES ET COMPETENCES NECESSAIRES :</p>
                <?php
                $sql = "SELECT qualités_compétences_nécéssaires FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<p class='text-muted'>".htmlspecialchars ($row['qualités_compétences_nécéssaires'])."</p>" ;
                ?>
            </div>
            <br>
            <div class="principaux_employeurs">
                <p class="display-6"> PRINCIPAUX EMPLOYEURS :</p>
                <?php
                $sql = "SELECT principaux_employeurs FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<p class='text-muted'>".htmlspecialchars ($row['principaux_employeurs'])."</p>" ;
                ?>
            </div>
            <br>
            <div class="salaire">
                <p class="display-6"> SALAIRE :</p>
                <?php
                $sql = "SELECT salaire FROM filiere WHERE filiere_id = $id";
                $requette = $conn->query($sql);
                $row = $requette->fetch_array();
                echo "<p class='text-muted'>".htmlspecialchars ($row['salaire'])."</p>" ;
                ?>
            </div>
    </div>
    <br>
        <br>
        <footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: rgb(221, 202, 202);">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-4 mx-auto">
                <p><img
                  src="../../../Photo/yncréamaroc.png"
                  alt="Logo yncréa Maroc"></p>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacts :</h5>
                <ul class="list-unstyled">
                  <li>
                    <a class="btn btn-primary" style="background-color: #27dd73;" href="https://api.whatsapp.com/send?phone=212661754018" role="button" target="_blank"><img id="whastaap" src="../../../Photo/whatsapp.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;" href="mailto:yousra.el-hassani@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../../Photo/mail.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;" href="mailto:jean-marc.fontugne@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../../Photo/mail.png" style=" width: 25px;"> Directeur des opérations</a>
                  </li>
                </ul>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                <nav class="nav flex-column">
                  <a class="nav-link disabled" >Filiéres</a>
                  <a class="nav-link" href="../../main/admission.php">Admission</a>
                  <a class="nav-link" href="../../Admin/connexion_admin.php">Administrateur</a>
                  <a class="nav-link" href="../../main/frais_scolarite.html">Frais de scolarité</a>
                </nav>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div id="map"></div>
              <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG6HKPiiC2B1W_mYlYx5MmtK9Vk09cQ4w&callback=initMap&libraries=&v=weekly"
                async
              ></script>
            </div>
          </div>
          <hr>
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <h5 class="mb-1">Donnez votre avis !</h5>
            </li>
            <li class="list-inline-item">
              <a href="../../Avis/Avis.php" class="btn btn-danger btn-rounded">Avis</a>
            </li>
          </ul>
          <hr>
          <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://yncreamaroc.ma/"> Yncréa Maroc</a>
            <p>Tous droits réservés</p>
          </div>
        </footer>
    </body>
</html>