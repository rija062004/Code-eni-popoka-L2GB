<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>
<body>
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">

      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Connexion CitizenConnect</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="POST" action="crud.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="" name="user">
            <label for="floatingInput">Surnom</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="pww">
            <label for="floatingPassword">Mot de passe</label>
          </div>
          <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary btn-lg"  value="Se connecter" id="exampleFormControlInput1" name="connect">
                </div>
          <small class="text-body-secondary">Cliquer le bouton bleu pour se connecter sur CITIZENCONNECT.</small>
          <hr class="my-4">
          
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
           <a href="citoyen.php">Créer un compte</a> 
          </button>
          
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>