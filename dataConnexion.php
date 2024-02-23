<?php

try {


    $con= new PDO("mysql:host=localhost;dbname=start;port=3306;charset=utf8",'root','');
 
    
} catch (\Exception $th) {
    echo 'erreur de connexion'.$th ->getMessage();
    //throw $th;
}
?>
