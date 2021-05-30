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
        $user = $_POST['user'];
        $pass_word = $_POST['pass']; 

        $sql = $conn->query("SELECT pass_word FROM administrateur WHERE username = '$user'") or die($conn->error);
        $mot = $sql->fetch_assoc();

         if ($pass_word == $mot['pass_word']) {
            $sql1 = $conn->query("SELECT Nom_complet FROM administrateur WHERE username = '$user'") or die($conn->error);
            $nom_complet = $sql1->fetch_assoc();
            setcookie('Nom_complet', $nom_complet['Nom_complet'], time() + (86400 * 30), "/"); 
            $cook = $_COOKIE['Nom_complet'];
            echo "<script>
                window.location.replace('http://127.0.0.1/Projet/App/Admin/admin.php');
                </script>";
        }

        echo "<script>
        alert('Login Failed!Retry!');
            window.location.replace('http://127.0.0.1/Projet/App/Admin/connexion_admin.php');
            </script>";
        ?>