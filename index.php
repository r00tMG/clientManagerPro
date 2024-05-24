<?php
require_once 'api/auth/functions.php';
require_once 'api/auth/config.php';
session_start();
// isConnect();
if(empty($_SESSION['users'])){
redirect_to_login();
}else{
    isConnect();
}
// echo '<pre>';
// var_dump($_SESSION['users'][0]);
// var_dump(isConnect());
// echo '<pre>';
// unset($_SESSION['users']);
// unset($_SESSION['user']);

//Creation de client
require_once 'api/clients/create_client.php';
if( 
    !empty($_POST['name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone']) &&
    !empty($_POST['status'])  &&
    !empty($_SERVER['REQUEST_METHOD']==="POST") 
    ) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $status=$_POST['status'];
    create_client($name,$email,$phone,$status);
    
}
// récupération des clients
require_once 'api/clients/read_client.php';
$clients = read_client();

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
<body >
    
    
    <!-- Menu -->
    <?php require_once 'menu.php' ?>
    <!-- Fin menu -->

<div class="container my-5 w-75">
<div class="card text-bg-dark">
  <img src="img/csv.jpeg" class="card-img" alt="image card">
  <div class="card-img-overlay d-flex align-items-end">
    <!-- <h5 class="card-title text-center text-dark">Import and Export</h5> -->
    
    <div class="container w-75 ">
        <div class="col-md-6 m-auto d-flex justify-content-center">
            <button  class="text-center mx-2 btn btn-outline-dark ">
                <a class="text-decoration-none text-light d-inline-block" href="api/clients/export_client.php">Export
                <svg stroke="currentColor" class="text-warning" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M11 16L13 16 13 7 16 7 12 2 8 7 11 7z"></path><path d="M5,22h14c1.103,0,2-0.897,2-2v-9c0-1.103-0.897-2-2-2h-4v2h4v9H5v-9h4V9H5c-1.103,0-2,0.897-2,2v9C3,21.103,3.897,22,5,22 z"></path></svg>
                </a>
            </button>
            <button class="text-center mx-2 btn btn-outline-dark">
                <a class="text-decoration-none text-light d-inline-block" href="api/clients/import_client.php">Import
                <svg stroke="currentColor" class="text-info" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 18L16 13 13 13 13 2 11 2 11 13 8 13z"></path><path d="M19,9h-4v2h4v9H5v-9h4V9H5c-1.103,0-2,0.897-2,2v9c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2v-9C21,9.897,20.103,9,19,9 z"></path></svg>                        </a>
            </button>
        </div>
        <div class="row">
            <!-- <div class="col-md-6">
            </div> -->
        </div>
    
    
    </div>
  </div>
</div>
        <div class="container mt-3 w-75">
        <form class="d-flex" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-outline-primary" type="submit">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>
            </button>
        </form>
        </div>
        <table class="table table-bordered">
            <h1 class="text-center"> Liste des clients </h1>
            <thead class="table-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" colspan="4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clients as $client):?>
                <tr>
                    <td class="text-center"><?=$client['idClient']?></td>
                    <td class="text-center"><?=$client['name']?></td>
                    <td class="text-center"><?=$client['email']?></td>
                    <td class="text-center"><?=$client['phone']?></td>
                    <td class="text-center"><?=$client['status']?></td>
                    <td class="text-center">
                        <a class="text-decoration-none " href="api/clients/delete_client.php?id=<?=$client['idClient']?>">
                        <svg stroke="currentColor" class="text-danger " fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"></path><path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"></path></svg>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="text-decoration-none" href="api/clients/edit_client.php?id=<?=$client['idClient']?>">
                        <svg stroke="currentColor" class="text-primary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M7,17.013l4.413-0.015l9.632-9.54c0.378-0.378,0.586-0.88,0.586-1.414s-0.208-1.036-0.586-1.414l-1.586-1.586	c-0.756-0.756-2.075-0.752-2.825-0.003L7,12.583V17.013z M18.045,4.458l1.589,1.583l-1.597,1.582l-1.586-1.585L18.045,4.458z M9,13.417l6.03-5.973l1.586,1.586l-6.029,5.971L9,15.006V13.417z"></path><path d="M5,21h14c1.103,0,2-0.897,2-2v-8.668l-2,2V19H8.158c-0.026,0-0.053,0.01-0.079,0.01c-0.033,0-0.066-0.009-0.1-0.01H5V5	h6.847l2-2H5C3.897,3,3,3.897,3,5v14C3,20.103,3.897,21,5,21z"></path></svg>
                        </a>
                    </td>
                    
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>











<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>