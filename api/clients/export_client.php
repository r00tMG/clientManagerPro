<?php
try{

    $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
    $sql = $cnx->prepare('SELECT *from client');
    $sql->execute([]);
    $client = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($client);
    // echo '</pre>';
    $clientCsv = '../data/client.csv';
    foreach($client as $item){
        file_put_contents($clientCsv,"\n".implode(',',$item),FILE_APPEND);       
    }
    if(!$clientCsv){
        throw new Exception("Fichier csv non existant");
    }else{
        header('location:../../');
    }
}catch(PDOException $e){
    echo "Error de connection",$e->getMessage();
}