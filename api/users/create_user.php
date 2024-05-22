<?php
function creat_users(){
    try {
        if(
            isset($_POST['pseudo']) &&
            isset($_POST['password']) &&
            $_SERVER['REQUEST_METHOD'] === "POST"
            ){
                $pseudo = $_POST['pseudo'] ;
                $password = $_POST['password'];            
                $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
                $rp = $cnx->prepare("INSERT INTO users(pseudo,password) VALUES(?, ?)");
                $rp->execute([$pseudo,$password]);

     if(!$rp->execute([$pseudo,$password])){

        throw new Exception("La requete à échoué", 1);
        
     }
    }
    } catch (PDOException $e) {
        echo "Error de connection avec la bdd",$e->errorInfo;
    }
   
}
$user = creat_users();
// var_dump($user);

?>