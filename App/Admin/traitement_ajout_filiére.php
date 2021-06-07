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
$salaire = $_POST['salaire'];
$formation = $_POST['formation'];
$principaux_employeurs = $_POST['principaux_employeurs'];
$qualites_competences_necessaires = $_POST['qualites_competences_necessaires'];
$lien = $_POST['lien'];
$requette_2 = "INSERT INTO filiere VALUES (NULL,'$nom','$ecole', '$definition','$salaire','$formation','$principaux_employeurs','$qualites_competences_necessaires','$lien')";
if ($conn->query($requette_2) === TRUE) {
    echo "<script>alert('Filiére ajouté');</script>";
    echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_filiere.php');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
?>