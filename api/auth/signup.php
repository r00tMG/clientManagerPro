<?php
      require_once '../users/create_user.php';
        $user = creat_users();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script type="module" src="js/script.js"></script>
    <title>ClientManager</title>
</head>
<body>
    
<!-- Menu -->
<?php
//  require_once '../../menu.php' 
 ?>    
    <!-- Fin menu -->

<div class="container mt-5 p-5 w-50 bg-light rounded">
  <div class="row mt-5">
    <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
      <h3 class="text-center">S'inscrire</h3>
<?php
      // var_dump($_FILES)
?>
      <div class="col-md-6">
        <input type="email" class="form-control" name="pseudo" placeholder="exemple@gmail.com">
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="col-md-6">
        <input type="file" class="form-control" name="profile_image" placeholder="">
      </div>
      
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
      <div class="col-12">
          <p>Si vous êtes inscrites,<a href="login.php">Se connecter</a></p>
        </div>
    </form>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>