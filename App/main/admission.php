<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Admission</title>
        <link rel="icon" type="image/png" sizes="16x16" href="../../Photo/yncréa_maroc.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/admission.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../App/css/maps.css" />
        <script src="../js/maps.js"></script>
    </head>
    <body>
            <div class="page-header">
            
                <a href="../main/main.html" id="retour à la page d'accueuil" ><img class="yncréa-maroc"
                src="../../Photo/yncréamaroc.png"
                alt="Logo yncréa Maroc"></a>

                <a href="https://github.com/mouadhakimi/Projet_YM3" id="retour à la page git-hub" target="_blank" ><img class="git-hub"
                src="../../Photo/github.png"
                alt="Logo GitHub"></a>

                <p id="titre" class="display-4" >JOURNEE PORTES OUVERTES</p>
            </div>
        <div class="container-fluid">
            <br>
        <a href="https://yncreamaroc.ma/wp-content/uploads/2021/03/Brochure_Yncrea_Maroc_2021.pdf" target="_blank"><img src="../../Photo/yncrea_brochure.jpg"></a>
        <br>
        <br>
        <table>
            <tr>
                <th style="width :800px;">
                    <p class="bold">Pour votre admission, il faudrait valider ces étapes:<br>

                    - Etude de dossier (relevé de notes global du baccalauréat).<br>
                    - Entretien de motivation (pour valider votre niveau en français et connaître votre profil).</p>
                    <p class="text-muted">
                                            * Un entretien technique (maths et physique) si nécessaire.

                        <br>Pour lancer votre procédure, veuillez remplir le formulaire ci-dessous.

                        Dès que vous postulez, vous recevez par premier mail vous indiquant la procédure pour le paiement et la prise des rendez-vous de vos entretiens.

                        L’admission en première année se traite de la même façon pour les étudiants marocains et étrangers (résidents ou non-résidents au Maroc).

                        Frais des entretiens : 400 Dhs (possibilité de paiement par carte bancaire).

                        Bon courage!</p>
                </th>
                <th>
                <img class="france" src="../../Photo/2-ans-france-300x264.png">
                </th>
                </tr>
        </table>
        <br>
        <br>
        <h4>Concours restant :</h4>
        <div class="container-fluid">
            <br>
        <TABLE class="table" style ="text-align : center;"> 
                    <THEAD style="background-color:yellow;">
                    <TR> 
                    <TH> Date </TH> 
                    <TH> Heure </TH>
                    </TR> 
                    <THEAD>
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
                        $sql = "SELECT * FROM concours";
                        $requette = $conn->query($sql);
                        while($row = $requette->fetch_array())
                            {
                                echo"<TR> 
                                <TD>".$row['Date_concours']." </TD> 
                                <TD>".$row['Heure']."</TD> 
                                </TR>";
                            }
                    ?>
                </TABLE>
                        </div>
                <br>
                <h3 class="text-muted">Je m'inscris au concours :</h3>
                            <br>
                            <a href="https://843k20rv3xo.typeform.com/to/b8KZtRk3"><button type="button" class="btn btn-warning" style="width : 150px;margin-left : 200px;">Je m'inscris</button></a>
                            <br>
                            <br>
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
                  <a class="nav-link disabled">Admission</a>
                  <a class="nav-link" href="../Admin/connexion_admin.php">Administrateur</a>
                  <a class="nav-link" href="frais_scolarite.html">Frais de scolarité</a>
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