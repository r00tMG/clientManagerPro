<?php
function read_user(){
    $connection = new PDO('mysql:host=localhost; dbname=clientManagerDB', 'phpmyadmin', 'password');
    $response = $connection->prepare('SELECT *FROM users');
    $response->execute(); 
    $users = $response->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}
// $users = read_user();
// var_dump($users);