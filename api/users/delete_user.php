<?php
var_dump($_GET);
function delete_client(){
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql = $cnx->prepare('DELETE from users where idUser=?');
    $sql->execute([$id]);
}
}
delete_client();
header('Location:../../admin.php');
exit();
