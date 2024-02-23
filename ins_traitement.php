<?php

session_start();

include 'dataConnexion.php';

if(!empty($_POST)){

    $valid = (bool) true;   

    if(isset($_POST['inc']))  {

        $nom= htmlspecialchars(trim($_POST['nom']));
        $prenom= htmlspecialchars(trim($_POST['prenom']));
        $email= htmlspecialchars(trim($_POST['email']));
        $mdp= htmlspecialchars(trim($_POST['password']));
        $proc= htmlspecialchars(trim($_POST['procedure']));
        $domaine= htmlspecialchars(trim($_POST['domaine']));
        $contact= htmlspecialchars(trim($_POST['contact']));
        $adresse= htmlspecialchars(trim($_POST['adresse']));


        if(empty($nom)){

            $valid = false;
            $err_nom= 'ce champs ne peut etre vide';
        }
        if(empty($prenom)){

            $valid = false;
            $err_prenom= 'ce champs ne peut etre vide';
        }
        if(empty($email)){

            $valid = false;
            $err_email= 'ce champs ne peut etre vide';
        }
        if(empty($mdp)){

            $valid = false;
            $err_mdp= 'ce champs ne peut etre vide';
        }
        if(empty($proc)){

            $valid = false;
            $err_proc= 'ce champs ne peut etre vide';
        }
        if(empty($domaine)){

            $valid = false;
            $err_domaine= 'ce champs ne peut etre vide';
        }
        if(empty($contact)){

            $valid = false;
            $err_contact= 'ce champs ne peut etre vide';
        }
        if(empty($adresse)){

            $valid = false;
            $err_adresse= 'ce champs ne peut etre vide';
        }

        if($valid){

            $req= $con ->prepare("INSERT INTO candidat (nom,prenom,email,password,procedures,domaine,contact,adresse) VALUES (?,?,?,?,?,?,?,? )");
            $req ->execute(array($nom,$prenom,$email,$mdp,$proc,$domaine,$contact,$adresse));
            $_SESSION ['success']='candidat enregistré';
            header("Location: index.php");
         }
    }
}












?>
