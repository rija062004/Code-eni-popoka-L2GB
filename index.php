<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../citizenconnect/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Citizen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="./css/modals.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
   <link rel="stylesheet" href="./assets/dist/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="./assets/dist/js/bootstrap.bundle.min.js.map">

<link href="../citizenconnect/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    #bb {
  background-image: url("../citizenconnect/image/bleu\ marine.jpg");  
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  }
  @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .logo {
            max-width: 100px;
            border-radius: 50%;
            border: 2px solid transparent;
            animation: fadeIn 2s ease-in-out;
        }
        
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

    
    <!-- Custom styles for this template -->
    
  </head>
  

   
<body style="position:fixed" >
 
<!--<div class="b-example-divider"></div>-->
<div class="modal modal-sheet d-block bg-body-secondary p-4 py-md-5 " tabindex="-1" role="dialog" id="bb">

  <div class="position-absolute top-0 end-0 p-3">
    <img src="../citizenconnect/image/logo.jpg" alt="Logo" class="img-fluid logo">
</div>

  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow" style="background: none;">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">CITIZEN</h1>
        
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="POST" action="crud.php">
          
          <div class="form-floating mb-3">
            <input type="numero" class="form-control rounded-3" id="floatingInput" placeholder="03xxxxxx" name="user" autocomplete="off">
            <label for="floatingInput">Nom Utilsateur (Surnom)</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="pww" autocomplete="off">
            <label for="floatingPassword">Mot de Passe</label>
            <span class="toggle-password" onclick="togglePassword()">👁️</span>
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary btn-lg"  value="Se connecter" id="exampleFormControlInput1" name="connect">
        </div>
         <!-- <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">➕S'inscrire</button>  -->
         
          <hr class="my-4">
         <!--<h2 class="fs-5 fw-bold mb-3">Creer un compte</h2> --> 
          
          <a href="citoyen.php" class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit"><svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>➕S'inscrire</a>
          
        </form>
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
