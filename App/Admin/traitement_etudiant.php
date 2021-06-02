<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Historique</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/traitement_etudiant.css">
        <link rel="stylesheet" href="../css/dropdown.css">
        <script src="../js/dropdown.js"></script>
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
        <link rel="stylesheet" type="text/css" href="../../App/css/maps.css" />
        <script src="../js/maps.js"></script>
    </head>
    <body>
            <div class="page-header">
                <a href="../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>
                <a href="https://github.com/mouadhakimi-code/Project" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../Photo/github.png"
                alt="Logo GitHub"></a>
                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
            <div class="dropdown" id="traitement">
                <?php
                $nom = $_COOKIE['Nom_complet'];
                echo "<button onclick='myFunction()' class='dropbtn' >$nom</button>";
                ?>
                
                <div id="myDropdown" class="dropdown-content">
                <a href="change_password.php">Changer de mot de passe</a>
                <a href="connexion_admin.php">Déconnexion</a>
                </div>
            </div> 
        <div class="container-fluid">
            <div class="page-body">
                <form method="post" action="suppression_etudiant.php">
                    <input type="button" value="Supprimer un étudiant" onclick="submit()" class="btn btn-dark"  style="float:right;margin-top:45px;height:56px;">
                </form>
                <form method="post" action="suppression_etudiants.php">
                    <input type="button" value="Supprimer tous les étudiants" onclick="submit()" class="btn btn-dark" style="float:right;margin-top:45px;height:56px;">
                </form>
                <br>
                <h5>Les étudiants qui ont visité cette journée portes ouvertes sont :</h5>
                <br>
                <br>
                <TABLE class="table"> 
                    <THEAD class="thead-dark">
                    <TR> 
                    <TH> Nom </TH> 
                    <TH> Prénom </TH> 
                    <TH> Sexe </TH>
                    <TH> Numéro de téléphone </TH> 
                    <TH> E-mail </TH> 
                    <TH> Ecole </TH>
                    <TH> Filiere actuelle </TH>
                    <TH> Date de naissance </TH>
                    <TH> Interesse </TH>
                    <TH> Filiere interesse </TH>
                    <TH> Année universitaire </TH>
                    <TH> Avis </TH>
                    </TR> 
                    <THEAD>
                    <?php
                        $sql = "SELECT * FROM etudiant";
                        $requette = $conn->query($sql);
                        while($row = $requette->fetch_array())
                            {
                                echo"<TR> 
                                <TD>".$row['nom']."</TD> 
                                <TD>".$row['prenom']." </TD> 
                                <TD>".$row['sexe']." </TD>
                                <TD>".$row['numero_telephone']."</TD> 
                                <TD>".$row['email']."</TD> 
                                <TD>".$row['ecole']."</TD>
                                <TD>".$row['filiere_actuelle']."</TD>
                                <TD>".$row['date_de_naissance']." </TD>
                                <TD><CENTER>".$row['interesse']."</CENTER></TD>
                                <TD>".$row['filiere_interesse']." </TD>
                                <TD><CENTER>".$row['année_universitaire']."</CENTER></TD>
                                <TD>".$row['avis']."</TD>
                                </TR> ";
                            }
                    ?>
                </TABLE>
            </div>
        </div>
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
                    <a class="btn btn-primary" style="background-color: #27dd73;width: 241px;" href="https://api.whatsapp.com/send?phone=212661754018" role="button" target="_blank"><img id="whastaap" src="../../Photo/whatsapp.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;width: 241px;" href="mailto:yousra.el-hassani@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Responsable d'admission</a>
                  </li>
                  <br>
                  <li>
                    <a class="btn btn-primary" style="background-color: #3db2dd;width: 233px;" href="mailto:jean-marc.fontugne@yncrea.fr?subject=Demande de renseignements" role="button" target="_blank"><img id="whastaap" src="../../Photo/mail.png" style=" width: 25px;"> Directeur des opérations</a>
                  </li>
                </ul>
              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                <nav class="nav flex-column">
                  <a class="nav-link" href="../Choix_des_filieres/choix_ecole.php">Filiéres</a>
                  <a class="nav-link" href="../main/admission.php">Admission</a>
                  <a class="nav-link disabled">Administrateur</a>
                  <a class="nav-link" href="../main/admission.php">Frais de scolarité</a>
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
              <a href="../Avis/Avis.php" class="btn btn-danger btn-rounded">Avis</a>
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