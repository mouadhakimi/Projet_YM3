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
    $nom_complet = $_COOKIE['Nom_complet'];
    $mdp_actuel = $_POST['mdp_actuel'];
    $new_pass1 = $_POST['nouveau_mdp1'];
    $new_pass2 = $_POST['nouveau_mdp2'];
    $requette_1 = "SELECT pass_word FROM administrateur WHERE Nom_complet = '$nom_complet'";
    $sql = $conn->query($requette_1) or die($conn->error);
    $row = $sql->fetch_array() ;
    if ($row['pass_word'] == $mdp_actuel){
        if($new_pass1 == $new_pass2){
            $requette_2 = "UPDATE administrateur SET pass_word='$new_pass1' WHERE Nom_complet = '$nom_complet'";
            if ($conn->query($requette_2) === TRUE) {
                echo "<script>alert('Mot de passe modifié');</script>";
                echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/admin.php');</script>";
              } else {
                echo "Error updating record: " . $conn->error;
              }
        }else{
            echo "<script>alert('Mots de passes ne sont pas identiques');</script>";
            echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/change_password.php');</script>";
        }
    }else{
        echo "<script>alert('Mot de passe actuel invalide !');</script>";
        echo "<script>window.location.replace('http://127.0.0.1/Projet/App/Admin/change_password.php');</script>";
    }
?>