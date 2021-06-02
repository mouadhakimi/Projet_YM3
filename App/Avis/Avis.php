<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un administrateur</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/avis.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../App/css/maps.css" />
        <script src="../js/maps.js"></script>
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
                            <option value="NULL">NULL</option>
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
        <br>
        <br>
        <footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: rgb(221, 202, 202);">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-4 mx-auto">
                <p><img
                  src="../../Photo/yncréamaroc.png"
                  alt="Logo yncréa Maroc"></p>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacts :</h5>
                <ul class="list-unstyled">
                  <li>
                    <a class="btn btn-primary" style="background-color: #27dd73;" href="https://api.whatsapp.com/send?phone=212661754018" role="button" target="_blank"><img id="whastaap" src="../../Photo/whatsapp.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;" href="mailto:yousra.el-hassani@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;" href="mailto:jean-marc.fontugne@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Directeur des opérations</a>
                  </li>
                </ul>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                <nav class="nav flex-column">
                  <a class="nav-link active" href="../Choix_des_filieres/choix_ecole.php">Filiéres</a>
                  <a class="nav-link" href="../main/admission.php">Admission</a>
                  <a class="nav-link" href="../Admin/connexion_admin.php" >Administrateur</a>
                  <a class="nav-link" href="../main/frais_scolarite.html">Frais de scolarité</a>
                </nav>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div id="map"></div>
              <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG6HKPiiC2B1W_mYlYx5MmtK9Vk09cQ4w&callback=initMap&libraries=&v=weekly"
                async
              ></script>
            </div>
          </div>
          <hr>
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <h5 class="mb-1">Donnez votre avis !</h5>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-danger btn-rounded disabled">Avis</a>
            </li>
          </ul>
          <hr>
          <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://yncreamaroc.ma/"> Yncréa Maroc</a>
            <p>Tous droits réservés</p>
          </div>
        </footer>
    </body>
</html>