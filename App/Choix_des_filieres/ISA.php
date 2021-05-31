<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">

<title>ISA Lille</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/isa.css"/>
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
        $ecole = 'ISA';
        $sql = $conn->query("SELECT lien,nom_filiere FROM filiere WHERE ecole = '$ecole'");
        while($row = $sql->fetch_array()){
            echo '<a class="nav-link" href="ISA_filieres/'.htmlspecialchars($row['lien']).'">'. htmlspecialchars($row['nom_filiere']).'</a>';
        } 
    ?>
	</li>
</ul>
</nav>
<a href="https://www.isa-lille.fr/wp-content/uploads/2020/11/Junia%E2%80%A2ISA-Plaquette-Recrutement-2020-V9_compressed-1.pdf"
        class="btn btn-dark" download="maquette_isen.pdf" >Télécharger la brochure</a>
		</aside>
		<main class="col-lg-9">

<h3>ISA Lille  </h3>
<p>L'ISA Lille est un programme grande école qui forme des ingénieurs en agriculture, agroalimentaire, environnement et paysage.</p>
<h5 class="text-muted" >BIENVENUE À L'ISA</h5>
<p class="text-muted"> 
L'ISA est un programme de Junia, grande école d'ingénieurs. L'ISA propose une gamme de formations (Ingénieur, Licence, Master) et des activités de Recherche et de conseils aux entreprises dans les domaines de l'agriculture, l'agroalimentaire, l'environnement et le paysage.</p>

		</main>
	</div>
</section>

</div>

</body>
</html>