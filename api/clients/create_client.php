<?php

function create_client($name,$email,$phone,$staus){
    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql= $cnx->prepare('INSERT INTO client(name,email,phone,status) VALUES(?,?,?,?)');
    $sql->execute([$name,$email,$phone,$staus]);

}
// create_client('scsq','cdv','vdvdv','vd');