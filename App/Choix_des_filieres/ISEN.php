<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../../App/css/maps.css" />
<script src="../js/maps.js"></script>
<title>ISEN Lille</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<link href="../css/isen.css" rel="stylesheet">
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
<body class="bg-light">

		<div class="page-header">
			<a href="../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
			src="../../Photo/yncréamaroc.png"
			alt="Logo yncréa Maroc"></a>
			<a href="https://github.com/mouadhakimi/Projet_YM3" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
			src="../../Photo/github.png"
			alt="Logo GitHub"></a>
			<p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
		</div>

<div class="container">

<section class="section-content py-3">
	<div class="row">
		<aside class="col-lg-3"> 
<nav class="sidebar card py-2">
<ul class="nav flex-column">
	<li class="nav-item">
    <?php
        $ecole = 'ISEN';
        $sql = $conn->query("SELECT lien,nom_filiere FROM filiere WHERE ecole = '$ecole'");
        while($row = $sql->fetch_array()){
            echo '<a class="nav-link" href="ISEN_filieres/'.htmlspecialchars($row['lien']).'">'. htmlspecialchars($row['nom_filiere']).'</a>';
        } 
    ?>
	</li>
</ul>
</nav>
<a href="https://www.isen-lille.fr/wp-content/uploads/2020/12/PLAQUETTE-PGE-JUNIA-ISEN.pdf"
        class="btn btn-dark" id="btn"download="maquette_isen.pdf">Télécharger la brochure</a>
		</aside>
		<main class="col-lg-9">

<h3>ISEN Lille  </h3>
<p>De la prépa intégrée au diplôme d’ingénieur,
l’ISEN Lille accompagne ses étudiants vers le métier du numérique qui est fait pour eux.
Nos maîtres-mots : l’excellence, l’agilité, la curiosité et l’esprit d’équipe.
Rejoignez la tribu !</p>

<p class="text-muted"> Fondé en 1956, l’Institut supérieur de l’électronique et du numérique (ISEN) Lille est une grande école d'ingénieurs reconnue par le ministère de l’Enseignement supérieur et habilitée par la Commission des titres d’ingénieur (CTI).

Depuis plus de 60 ans, nous répondons aux besoins des entreprises du numérique, en faisant de nos étudiants de solides techniciens, parfaitement aguerris aux technologies numériques et à leurs mutations. En plus de leurs compétences scientifiques, nous les invitons aussi à développer leurs compétences personnelles, leur leadership, leur autonomie et leur envie d’entreprendre. Pour eux-mêmes déjà, mais aussi pour les organisations dans lesquelles ils exerceront leur métier.

L’ISEN Lille est plus qu’une école d’ingénieurs. C’est une expérience à vivre. </p>
<img class="isen"
			src="../../Photo/isen.jpg"
			alt="Photo Isen">
		</main>
	</div>
</section>

</div>
<br>
<footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: rgb(221, 202, 202);">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-4 mx-auto">
                <p><img
                  src="../../Photo/yncréamaroc.png"
                  alt="Logo yncréa Maroc"></p>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacts :</h5>
                <ul class="list-unstyled">
                  <li>
                    <a class="btn btn-primary" style="background-color: #27dd73;width: 241px;" href="https://api.whatsapp.com/send?phone=212661754018" role="button" target="_blank"><img id="whastaap" src="../../Photo/whatsapp.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;width: 241px;" href="mailto:yousra.el-hassani@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;width: 233px;" href="mailto:jean-marc.fontugne@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Directeur des opérations</a>
                  </li>
                </ul>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                <nav class="nav flex-column">
                  <a class="nav-link" href="../Choix_des_filieres/choix_ecole.php">Filiéres</a>
                  <a class="nav-link" href="../main/admission.php">Admission</a>
                  <a class="nav-link" href="../Admin/connexion_admin.php">Administrateur</a>
                  <a class="nav-link" href="../main/admission.php">Frais de scolarité</a>
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
              <a href="../Avis/Avis.php" class="btn btn-danger btn-rounded">Avis</a>
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