<?php
if(isset($_GET['action'])){
    //Deconnexion du compte

    if($_GET['action']=='logout'){

        //Activation des session
        session_start();

        //Suppression des sessions apres deconnexion
        session_destroy();

        //Redirection a la page d'acceuil apres deconnexion
        header('Location:index.php');
        //Mise a jour du compte
    }elseif($_GET['action'] == 'updateAcount'){
        if(isset($_POST['submit'])){

            extract($_POST);
            if(!empty($username) and !empty($oldPassword) and !empty($newPassword) and !empty($confirmNewPassword)){
                

                if($newPassword==$confirmNewPassword){

                    $uppercase = preg_match("@[A-Z]@",$newPassword);
                    $lowercase = preg_match("@[a-z]@",$newPassword);
                    $number = preg_match("@[0-9]@",$newPassword);

                    if(!$uppercase || !$lowercase || !$number|| (strlen($newPassword )<5)){
                        $alert = array('alert-Error ', ' le nouveau mot de passe doit etre constitué des majuscules ,
                        miniscules,nombres et etre supperieur à 5 caracteres');

                    }else{
                        require_once('config/database.php');

                        $QueryVerification = $db->prepare("SELECT * FROM utilisateur WHERE loginUtil=? ");
                        $QueryVerification->execute(array(getAdmin()));
                
                        $reponses = $QueryVerification->fetch(PDO::FETCH_OBJ);
                        if (isset($reponses->loginUtil)) {
                           
                            $PassAdmin = $reponses->passUtil;
                            //Verification de mot de passe
                
                            if (password_verify($oldPassword, $PassAdmin)) {

                                $NewPasswordHash=password_hash($Newpassword, PASSWORD_BCRYPT);

                                $QueryUpdateAccount =$db->prepare("UPDATE utilisateur SET loginUtil=?, passUtil=?  WHERE loginUtil=?");
                                $QueryUpdateAccount->execute(array($username,$NewPasswordHash,getAdmin()));

                                //Déconnexion de l'utilisateur
                                header('Location:admin.php?page=acount&action=logout');
                
                               
                            } else {
                                $alert = array('alert-Error ', ' Ancien mot de passe ne correspond pas au mot de passe enregistré');
                            }
                        } else {
                            $alert = array('alert-Error ', ' Erreur ce compte n\'existe pas');
                        }

                    }

                   

                }else{
                    $alert = array('alert-Error', 'le nouveau mot de passe et celui de la confirmation doivent etre identique');
                }

            }else{
                $alert = array('alert-Error', 'aucun champs ne doit etre vide');
            }
        }
          
    }
    else{
        getTemplate('Error_404');
    }
}else{
    getTemplate('Error_404');

}