<?php
try {
    require_once 'create_client.php';
   
        $fileClientExported = '../data/fileClientExport.csv';
        $ressource = fopen($fileClientExported,'r');
        fgetcsv($ressource,null,',');
        while($line = fgetcsv($ressource,null,',')){
            create_client($line[0],$line[1],$line[2],$line[3]);
        }
        fclose($ressource);
        
        if(!$ressource){
            throw new Exception("Erreur de recuperation de données");
        }else{
            header('location:../../');
            die();
        }
} catch (PDOException $e) {
    echo "Erreur ",$e->errorInfo;
}