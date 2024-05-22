<?php
function read_client(){
    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql = $cnx->prepare('SELECT *FROM client');
    $sql->execute() ;
    $clients = $sql->fetchAll();
    // var_dump($clients);
    return $clients;
}

// var_dump($clients);