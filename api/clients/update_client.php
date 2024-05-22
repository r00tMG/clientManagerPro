<?php
var_dump($_GET);
var_dump($_POST);
try{
    if( isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['status'],$_POST['idClient']) ){
        $id = $_POST['idClient'];
      $name =  $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $status = $_POST['status'];
    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql =  $cnx->prepare('UPDATE client SET name=?,email=?,phone=?,status=? where idClient=?');
    $query = $sql->execute([$name,$email,$phone,$status,$id]);
    var_dump($query);
    if(!$query){
         throw new Exception();
    }else{
        header('Location:../../');
        die();
    }
} 
}catch(Exception $e){
    echo 'Error de connexion',$e->getMessage();
}