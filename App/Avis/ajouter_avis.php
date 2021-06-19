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
    $prenom = $_POST['prénom'];
    $sexe = $_POST['sexe'];
    $numéro = $_POST['numéro'];
    $mail = $_POST['mail'];
    $ecole = $_POST['ecole'];
    $annee_universitaire = $_POST['annee_universitaire'];
    $filiere_actuelle = $_POST['filiere_actuelle'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $interesse = $_POST['interesse'];
    $id_filiere = $_POST['filiere'];
    $avis = $_POST['avis'];
    $année_obtention = $_POST['année'];
    $mention = $_POST['mention'];
    $requette = $conn->query("SELECT nom_filiere FROM filiere WHERE filiere_id = '$id_filiere'") or die($conn->error);
    $row = $requette->fetch_array();
    $filiere_interessee = $row['nom_filiere'];
    if($conn->query("INSERT INTO `etudiant` (`etudiant_id`, `nom`, `prenom`, `sexe`, `numero_telephone`, `email`, `ecole`, `filiere_actuelle`, `date_de_naissance`, `interesse`, `filiere_interesse`, `année_universitaire`, `avis`,`mention`,`année_obtention`) VALUES (NULL, '$nom', '$prenom', '$sexe', '$numéro', '$mail', '$ecole', '$filiere_actuelle', '$date_de_naissance', '$interesse', '$filiere_interessee', '$annee_universitaire', '$avis','$mention', '$année_obtention') ")==TRUE or die($conn->error)){
        echo "<script>alert('$nom $prenom, Yncréa Maroc vous souhaite la bienvenue');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/Projet/App/main/main.html');</script>";
    }
?>