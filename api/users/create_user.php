<?php
function creat_users(){
    try {
        if(
            isset($_POST['pseudo']) &&
            isset($_POST['password']) &&
            $_SERVER['REQUEST_METHOD'] === "POST"
            ){
                $pseudo = $_POST['pseudo'] ;
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT,['cost'=>12]);            
                $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
                $rp = $cnx->prepare("INSERT INTO users(pseudo,password) VALUES(?, ?)");
                $rp->execute([$pseudo,$password]);
     if(!$rp->execute([$pseudo,$password])){

        throw new Exception("La requete à échoué");
        
     }else{
        echo '<script>
                alert("Votre compte a été créé avec succés")
        </script>';
     }
    }
    } catch (PDOException) {
//         echo '<script>
//         alert("L\'email saisi existe déjà, Veuillez réessayer un autre")
// </script>';
    }
   
}
// $user = creat_users();
// var_dump($user);

?>