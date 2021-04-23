<?php
    session_start();
include_once 'isAuthenticated.php';
$pageTitle = 'login';
include_once 'fragments/header.php';

?>
 

 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <?php include_once 'fragments/alert.php'; ?>
          <div class="card-body">
            <h5 class="card-title text-center">Bienvenue Veuillez entrer vos données</h5>
    <form action="processLogin.php" method="post" >
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input
                name="pwd"
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password">
                <a id="emailHelp" class="form-text text-muted" href="#">Mot de passe oublié</a>

        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase " >Se connecter</button>
    </form>
    </div>
        </div>
      </div>
    </div>
  </div>

   
</body>
</html>
