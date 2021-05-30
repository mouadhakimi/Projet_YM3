<?php
    $id = $_POST['filiere'];
    $servername = "127.0.0.1";
    $database = "projet_ym3";
    $username = "root";
    $password = "root";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error()."<br>");
    }
    if($conn->query("DELETE FROM filiere WHERE filiere_id = $id") == TRUE){
        echo "<script>alert('Filière supprimé');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_filiere.php');</script>";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
?>