<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>citoyen form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <style>
     
        
      #back {
        background-image: url("./image/bleu marine.jpg");  
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
    <style>
 .toggle-password {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        .form-floating {
            position: relative;
        }
    

    </style>
</head>
<body>
  <div id="back">
    <div class="container">
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2">Citoyen</h1>
              
              <a href="index.php" type="button" class="btn-close"  aria-label="Close"></a>
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form action="crud.php" method="POST">
                <div>
                <div class="form-floating mb-3">
                  <input type="texte" class="form-control rounded-3" id="floatingInput" placeholder="Surnom" name="surnom">
                  <label for="floatingInput"><strong>Surnom</strong></label>
                </div>
                <div class="form-floating mb-3">
                  <input type="texte" class="form-control rounded-3" id="floatingInput" placeholder="Nom" name="nom">
                  <label for="floatingInput"><strong>Nom</strong></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="texte" class="form-control rounded-3" id="floatingInput" placeholder="Prenom" name="prenom">
                    <label for="floatingInput"><strong>Prenom</strong></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="texte" class="form-control rounded-3" id="floatingInput" placeholder="xxxx@gmail.com" name="email">
                    <label for="floatingInput"><strong>Email</strong></label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="" name="psswd">
                    <label for="floatingPassword"><strong>Mot de passe</strong></label>
                    <span class="toggle-password" onclick="togglePassword()">👁️</span>
                    
                  </div>  
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control rounded-3" id="floatingInput" placeholder="034xxxxxxx" name="tel">
                    <label for="floatingInput"><strong>Tél</strong></label>
                  </div>
                
                  <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary btn-lg"  value="S'inscrire" id="exampleFormControlInput1" name="kk">
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</body>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        function togglePassword() {
            var passwordField = document.getElementById("floatingPassword");
            var passwordFieldType = passwordField.getAttribute("type");
            if (passwordFieldType === "password") {
                passwordField.setAttribute("type", "text");
            } else {
                passwordField.setAttribute("type", "password");
            }
        }
    </script>
</html>