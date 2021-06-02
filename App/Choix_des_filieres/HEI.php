<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../../App/css/maps.css" />
<script src="../js/maps.js"></script>
<title>HEI Lille</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<link href="../css/hei.css" rel="stylesheet">
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
			<a href="https://github.com/mouadhakimi-code/Project" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
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
        $ecole = 'HEI';
        $sql = $conn->query("SELECT lien,nom_filiere FROM filiere WHERE ecole = '$ecole'");
        while($row = $sql->fetch_array()){
            echo '<a class="nav-link" href="HEI_filieres/'.htmlspecialchars($row['lien']).'">'. htmlspecialchars($row['nom_filiere']).'</a>';
        } 
    ?>
	</li>
</ul>
</nav>
<a href="https://www.hei.fr/wp-content/uploads/2020/11/HEI_Plaquette-2020-OK-1.pdf"
        class="btn btn-dark"  id="btn" download="maquette_isen.pdf" >Télécharger la brochure</a>
		</aside>
		<main class="col-lg-9">
<h3>HEI Lille  </h3>
<p>HEI, programme "grande école" d'ingénieur à Lille, forme des ingénieurs généralistes tournés vers l'avenir.</p>

<p class="text-muted">Depuis plus de 130 ans, nous renouvelons tous les jours nos expertises. HEI, c’est avant tout un programme grande école d’ingénieurs généralistes, mais c'est bien plus encore ! HEI est un programme "grande école" post-bac qui permet à l’issue des 5 années d’études d’obtenir le diplôme d’ingénieur de niveau Bac+5 reconnu par la CTI (commission des titres d’ingénieurs).
HEI recrute ses étudiants directement après le bac (admission sur concours) ou après un parcours dans l’enseignement supérieur. Le but d’HEI est de former des ingénieurs polyvalents ayant une capacité d’adaptabilité et d’innovation.
Nos diplômés s’insèrent rapidement sur le marché du travail et occupent des métiers variés, qui allient sciences, techniques, management…

Rejoignez dès maintenant HEI, choisissez l’avenir qui vous ressemble. </p>

<h4>Vie étudiante</h4>
<p class="text-muted">A une heure de Paris, Lille est l’endroit idéal pour les jeunes : événements, expositions, vie étudiante, gastronomie. Située à 20 minutes à pieds de la Grand Place et à deux pas de la Citadelle, le campus d'HEI offre un cadre de vie plutôt agréable.</p>
<video class="d-block w-100" autoplay muted replay loop>
                    <source src="../../Video/Hei.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="text-align : left;">Links</h5>
                <nav class="nav flex-column" style="text-align : left;">
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