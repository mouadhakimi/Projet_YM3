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
    $user = $_POST['user'];
    $pass_word1 = $_POST['pass_word1']; 
    $pass_word2 = $_POST['pass_word2']; 
    $sql1 = $conn->query("SELECT username FROM administrateur;");
    while($row = $sql1->fetch_array()){
        if($user ==  $row['username']){
            echo "<script>alert('Cet administrateur existe dejà');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_ajout.php');</script>";
        }
    } 
    if($pass_word1 == $pass_word2){
        if($conn->query("INSERT INTO `administrateur` (`admin_id`, `Nom_complet`, `username`, `pass_word`) VALUES (NULL, '$nom', '$user', '$pass_word1');") == TRUE){
            echo "<script>alert('Administrateur ajouté');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_ajout.php');</script>";
        }
    }else{
        echo "<script>alert('Les mots de passes ne sont pas identiques');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/traitement_ajout.php');</script>";
    }
?>