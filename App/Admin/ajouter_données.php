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
$nom = $_POST['nom'];
$ecole = $_POST['ecole'];
$definition = $_POST['definition'];
$salaire = $_POST['Salaire'];
$formation = $_POST['formation'];
$employeurs = $_POST['principaux_employeurs'];
$qualités = $_POST['qualités_compétences_nécessaires'];
$lien = $_POST['lien'];
if($conn->query("INSERT INTO `filiere` (`filiere_id`, `nom_filiere`, `ecole`, `definition`, `salaire`, `formation`, `principaux_employeurs`, `qualités_compétences_nécéssaires`, `lien`) VALUES (NULL, '$nom', '$ecole', '$definition', '$salaire', '$formation', '$employeurs', '$qualités', '$lien') ")==TRUE or die($conn->error)){
    echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_filiere.php');</script>";
    echo "<script>alert('$nom_filiere,est ajouter avec succés');</script>";
}
?>