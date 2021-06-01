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
$nom = $_POST['filiere'];
$colonne = $_POST['columns'];
$definition = $_POST['definition'];
$donnée = $_POST['donnée'];
$requette_2 = "UPDATE filiere SET $colonne ='$donnée' WHERE nom_filiere = '$nom'";
if ($conn->query($requette_2) === TRUE) {
    echo "<script>alert('Donnée modifier');</script>";
    echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/ajout_données.php');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
?>