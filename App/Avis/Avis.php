<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un administrateur</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréamaroc.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/avis.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <body >
            <div class="page-header">
                <a href="../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>
                <a href="https://github.com/mouadhakimi-code/Project" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../Photo/github.png"
                alt="Logo GitHub"></a>
                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
        <div class="container-fluid">
            <div class="warning">
                <form action="ajouter_avis.php" method="post">
                    <h4>Donner votre avis : </h4><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nom </span>
                        <input type="text" placeholder="Nom " name="nom" id="nom" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Prénom </span>
                        <input type="text" placeholder="Prénom " name="prénom" class="form-control" required><br>
                        </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Sexe </span>&ensp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" value="Homme"/>
                            <label class="form-check-label" for="inlineRadio1">Homme</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" value="Femme">
                            <label class="form-check-label" for="inlineRadio1">Femme</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Numéro de telephone </span>
                        <input type="text" placeholder="+2126 ....." name="numéro" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">E-mail</span>
                        <input type="email" placeholder="Adresse mail" name="mail" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Ecole</span>
                        <input type="text" placeholder="Ecole" name="ecole" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Année</span>
                        <select name="annee_universitaire" class="form-control">
                            <option value="2éme Bac">2éme Bac</option>
                            <option value="BAC+1">BAC+1</option>
                            <option value="BAC+2">BAC+2</option>
                            <option valur="BAC+3">BAC+3</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Filiere actuelle</span>
                        <input type="text"  placeholder="Filiere actuelle" name="filiere_actuelle" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Date de naissance</span>
                        <input type="date" name="date_de_naissance" class="form-control" required><br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Intéréssé ? </span>&ensp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="interesse" value="Oui"/>
                            <label class="form-check-label" for="interesse">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="interesse" value="Non">
                            <label class="form-check-label" for="interesse">Non</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Si oui, Quelle filiére vous intérésse ?</span>
                        <select name="filiere" class="form-control">
                        <?php
                                $sql = $conn->query("SELECT filiere_id,nom_filiere FROM filiere");
                                while($row = $sql->fetch_array()){
                                    echo '<option value="'.$row['filiere_id'].'">'. htmlspecialchars($row['nom_filiere']).'</option>';
                                }?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Avis</span>
                        <textarea name="avis" class="form-control" required></textarea>
                    </div>
                    <input type="button" value="Envoyer" onclick="submit()"  class="btn btn-dark">
                </form>
            </div>
        </div>
    </body>
</html>