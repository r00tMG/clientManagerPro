<?php
var_dump($_GET);
var_dump($_POST);

try{
    if( isset($_GET['id']) ){
        $id = $_GET['id'];
    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql =  $cnx -> prepare('SELECT *from client where idClient=?');
    $sql->execute([$id]);
    $client = $sql -> fetch();
    // echo '<pre>';
    // var_dump($client);
    // echo '<pre>';
    if(!$client){
        throw new Exception();
    }
} 
}catch(Exception $e){
    echo 'Error de connexion',$e->getMessage();
}

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
<?php
require_once '../../menu.php';
?>
<div class="container mt-5 w-50">
        <h3 class="text-center">MODIFIER UN CLIENT</h3>
        <form action="update_client.php" method="POST" class="form-group">
            <div class="mb-2">
                <input type="text" name="idClient" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}?>" placeholder="IdClient" class="form-control">
            </div>
            <div class="mb-2">
                <input type="text" name="name" value="<?php if(isset($client['name'])){echo ($client['name']);}?>" id="" placeholder="Nom" class="form-control">
            </div>
            <div class="mb-2">
                <input type="text" name="email"  value="<?php if(isset($client['email'])){echo ($client['email']);}?>" placeholder="Email" class="form-control">
            </div>
            <div class="mb-2">
                <input type="text" name="phone" value="<?php if(isset($client['phone'])){echo ($client['phone']);}?>" placeholder="Phone" class="form-control">
            </div>
            <div class="mb-2">
                <input type="text" name="status" value="<?php if(isset($client['status'])){echo ($client['status']);}?>" placeholder="Status" class="form-control">
            </div>
            <div>
                <input  type="submit" value="UPDATE" class="btn btn-primary mx-auto" name="" id=""  class="form-control">
            </div>
            
        </form>
</div>





</body>