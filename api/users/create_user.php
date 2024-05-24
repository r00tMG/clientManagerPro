<?php
function creat_users(){
    try {
        if(
            isset($_POST['pseudo']) &&
            isset($_POST['password']) &&
            // isset($_POST['profile_image']) &&
            $_SERVER['REQUEST_METHOD'] === "POST"
            ){
                $pseudo = $_POST['pseudo'] ;
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT,['cost'=>12]);            
                $profile_image = $_FILES['profile_image'] ;

                if( isset($profile_image) && $profile_image['error']==0){
                    $filename=$profile_image['name'];
                    $filetype=$profile_image['type'];
                    // $filesize=$profile_image['size'];
                    $extension = pathinfo($filename)['extension'];
                    $allowed = [
                        'jpg'=>'image/jpg',
                        'jpeg'=>'image/jpeg',
                        'png'=>'image/png'
                    ];
                    // var_dump(key_exists($extension,$allowed) || in_array($filetype,$allowed));
                    if(key_exists($extension,$allowed) || in_array($filetype,$allowed)){
                        $dossier='uploads';
                        // if(!is_dir($dossier)){
                            // mkdir(__DIR__.DIRECTORY_SEPARATOR.$dossier,0777,true);
                            // die();
                        // }
                        
                        $newName = md5(uniqid());
                        $newfileName = __DIR__.DIRECTORY_SEPARATOR.$dossier.DIRECTORY_SEPARATOR.$newName.'.'.$extension;
                        $moveFile = move_uploaded_file($profile_image['tmp_name'],$newfileName);
                        if($moveFile){
                            echo '<script class="bg-success">alert("Votre compte a été créer avec succés")</script>';
                        }else{
                            echo 'File not upload';
                        }
                    }else{
                        echo 'vote extendion .'.$extension.' n\'est pas autorisé' ;
                    }
                }else{
                    echo '<script class="bg-danger">alert("Ceci n\'est pas un fichier attendu")</script>';
                    
                }

                $cnx = new PDO('mysql:host=localhost;dbname=clientManagerDB','phpmyadmin','password');
                $rp = $cnx->prepare("INSERT INTO users(pseudo,password,profile_image) VALUES(?, ?, ?)");
                $rp->execute([$pseudo,$password,$newName.'.'.$extension]);
     if(!$rp->execute([$pseudo,$password,$newName.'.'.$extension])){

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
