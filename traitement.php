<?php

session_start();

include 'dataConnexion.php';

if(isset($_POST['valider']))  {

    
    $email= htmlspecialchars($_POST['username']);
    $mdp= ($_POST['password']);

    if(!empty($_POST['username'] && ($_POST['password']))){

        $req=$con->prepare('SELECT email,password FROM candidat WHERE email=?');
        $req->execute(array($email));
        $stmt=$req->fetch();

        if($req->rowCount() > 0){
            $_SESSION['username']=$email;
            $_SESSION['password']=$email;

            header('location:PageStage/index.html');
        }
        else{
            die ('veuillez vous inscrire!!!');
        }
}else{
    echo 'veuillez remplir les champs';
}
}else{
    echo 'Pas de connexion';
}


?>
