<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<<<<<<< HEAD
                   <div>
                        <a class="nav-link" href="?connect">Connexion</a>
</div>
                    
                    <p class="lead">Veuillez vous connecter</p>

                    <hr>
                    <div>
=======

<div class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
      <a href="./" class="navbar-brand">Accueil</a>
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-md-auto">

       
      </ul>
    </div>
  </div>

  
                 
                    
                    
                    <br>
                    <p class="container">Veuillez vous connecter</p>
                    <div class="container">
>>>>>>> a7dd0f3d41b38024106238199ed62578bbb10a2a
                        <?php
                        if (isset($error)) :
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php
                        endif;
                        ?>
                        <form action="" name="connexion" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Votre login</label>
                                <input type="text" name="theuserLogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <small id="emailHelp" class="form-text text-muted">Login incorrect</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Votre mot de passe</label>
                                <input type="password" name="theuserPwd" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </form>
                    </div>
                
                </div>

            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>
</body>

</html>
