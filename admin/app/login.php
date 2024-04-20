<?php
if (isset($_POST['submit']) and isset($_POST['username']) and isset($_POST['password'])) {

    extract($_POST);
    if (!empty($username) and !empty($password)) {

        //Connexion a la base de données
        require_once('config/database.php');

        $QueryVerification = $db->prepare("SELECT * FROM utilisateur WHERE loginUtil=? ");
        $QueryVerification->execute(array($username));

        $reponses = $QueryVerification->fetch(PDO::FETCH_OBJ);
        if (isset($reponses->loginUtil)) {
            $UserAdmin = $reponses->loginUtil;
            $PassAdmin = $reponses->passUtil;
            //Verification de mot de passe  	

            if (password_verify($password,$PassAdmin)) {

                session_start();
                $_SESSION['admin'] = $username;
                //Redirection a la page admin
                header('location:admin.php?page=acceuil');
            } else {
                $alert = array('alert-Error', 'Erreur!Mot de passe incorrects');
            }
        } else {
            $alert = array('alert-Error', 'Erreur!Identifiant incorrects');
        }
    } else {

        $alert = array('alert-Error', 'Erreur!Champs vide(s)');
    }
}
