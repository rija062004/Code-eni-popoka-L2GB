<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande permis de conduire</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="css/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap.min.css"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
     <link rel="stylesheet" href="./css/product.css">
     <link rel="stylesheet" href="./css/navbars.css">
      
     <script src="./css/jquery-3.5.1.min.js"></script>
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
     <script src="./bootstrap-5.2.3-dist/js/bootstrap.js"></script>
     <script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
     <script src="./bootstrap-5.2.3-dist/js/bootstrap.esm.js"></script>
     <script src="."></script>
     <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
      #back {
        background-image: url("./image/voiture1.jpg");  
  background-repeat: no-repeat;
  background-position: center;
  margin-bottom: -100%;
  background-size: cover;
  min-height: 100vh;

      }
      .modal {
    opacity: 0.8; /* Réglez cette valeur selon vos besoins (entre 0 et 1) */
}
     </style>
<body>
    <?php
    include "fonction.php";
    ?>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:0;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CitizenConnect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dash.html">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Etat-Civil
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="naissance.php">Acte de naissance</a></li>
                <li><a class="dropdown-item" href="mariage.php">Acte de mariage</a></li>
                <li><a class="dropdown-item" href="deces.php">Acte de décés</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Permis
              </a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="permisconduire.php">Permis de conduire</a></li>
                <li><a class="dropdown-item" href="permisconstruire.php">Permis de construction</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Impot
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="impot.php">Paiment</a></li>
                <li><a class="dropdown-item" href="categorie.php">Ajout de catégorie</a></li>
                
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            
            <a href="index.php" class="btn btn-outline-primary" type="button">Déconnecter</a>
          </form>
        </div>
      </div>
    </nav>
    <div id="back">
    <div class="container">
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="back">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Permis de conduire</h1>
              
              <a href="dash.html" type="button" class="btn-close"  aria-label="Close"></a>
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form action="" method="post">
                <div class="form-floating mb-3">
                  <input type="texte" class="form-control rounded-3" id="cinconduire" placeholder="CIN" name="cinconduire">
                  <label for="cinconduire"><strong>CIN</strong> </label>
                </div>

                <div class="form-floating mb-3">
                <select name="niveau" id="niveau" class="form-select rounded-3">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                  <label for="niveau"><strong>Niveau</strong></label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="nomautoecole" placeholder="Nom de l'auto-ecole " name="nomautoecole">
                    <label for="nomautoecole"><strong> Nom de l'auto-ecole</strong></label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="adresseautoecole" placeholder="Adresse de l'auto-ecole " name="adresseautoecole">
                    <label for="adresseautoecole"><strong>Adresse de l'auto-ecole</strong></label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control rounded-3" id="dateexamen" placeholder="Date de l'examen" name="dateexamen">
                    <label for="date"> <strong> Date de l'examen</strong></label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="lieuexamen" placeholder="Lieu de l'examen" name="lieuexamen">
                    <label for="lieuexamen"><strong>Lieu de l'examen</strong></label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="prixconduire" placeholder="Nom de l'auto-ecole " name="prixconduire">
                    <label for="prixconduire"><strong>Prix</strong></label>
                </div>
                 

                
                 <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary btn-lg"  value="Demander" id="envoyer" name="envoyer">
                    </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <?php
    
    if(isset($_POST['envoyer'])){
      $cinconduire = $_POST['cinconduire'];
      $username =$_SESSION['username'];
      $niveau = $_POST['niveau'];
      
      

      $dateexamen = $_POST['dateexamen']; // Correction ici
      $lieuexamen = $_POST['lieuexamen'];
      $nomautoecole = $_POST['nomautoecole'];
      $adresse = $_POST['adresseautoecole'];
      $prixconduire = $_POST['prixconduire'];
  
      insertDataConduire($cinconduire, $username, $niveau, $dateexamen, $lieuexamen, $nomautoecole, $adresse, $prixconduire);
  }
  

    ?>
    
</body>
</html>