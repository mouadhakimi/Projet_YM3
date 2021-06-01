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
$date = $_POST['date'];
$time = $_POST['time'];
$requette_2 = "INSERT INTO concours VALUES (NULL,'$date','$time')";
if ($conn->query($requette_2) === TRUE) {
    echo "<script>alert('Concours ajouter');</script>";
    echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/ajout_données.php');</script>";
} else {
    echo "Error updating record: " . $conn->error;
}
?>