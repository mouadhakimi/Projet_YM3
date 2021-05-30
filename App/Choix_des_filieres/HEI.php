<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréamaroc.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            echo '<a class="nav-link" href="'.htmlspecialchars($row['lien']).'">'. htmlspecialchars($row['nom_filiere']).'</a>';
        } 
    ?>
	</li>
</ul>
</nav>
<a href="https://www.hei.fr/wp-content/uploads/2020/11/HEI_Plaquette-2020-OK-1.pdf"
        class="btn btn-dark" download="maquette_isen.pdf" >Télécharger la brochure</a>
		</aside>
		<main class="col-lg-9">
<h3>HEI Lille  </h3>
<p>HEI, programme "grande école" d'ingénieur à Lille, forme des ingénieurs généralistes tournés vers l'avenir.</p>

<p class="text-muted">Depuis plus de 130 ans, nous renouvelons tous les jours nos expertises. HEI, c’est avant tout un programme grande école d’ingénieurs généralistes, mais c'est bien plus encore ! HEI est un programme "grande école" post-bac qui permet à l’issue des 5 années d’études d’obtenir le diplôme d’ingénieur de niveau Bac+5 reconnu par la CTI (commission des titres d’ingénieurs).
HEI recrute ses étudiants directement après le bac (admission sur concours) ou après un parcours dans l’enseignement supérieur. Le but d’HEI est de former des ingénieurs polyvalents ayant une capacité d’adaptabilité et d’innovation.
Nos diplômés s’insèrent rapidement sur le marché du travail et occupent des métiers variés, qui allient sciences, techniques, management…

Rejoignez dès maintenant HEI, choisissez l’avenir qui vous ressemble. </p>

		</main>
	</div>
</section>

</div>

</body>
</html>