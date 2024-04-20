<?php session_start(); ?>
<?php  
//session_start();

  $dbhost = '127.0.0.1';
  $dbname ='gestion_reservation_chambres'; //nom de la base de donnee
  $dbuser ='root';
  $dbpwd ='';

  try 
  {
  	$db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
  } 
  catch (PDOException $e) 
  {
    $alert=array('alert-Error',"une erreur est survenue lors de la connexion à la base de donnée".$e->getMessage());
  	//die("une erreur est survenue lors de la connexion a  la base de données".$e->getMessage());
  }
?>
<?php

//require_once('admin/app/function.php');
 
 //$QueryAllPost=$db->prepare("SELECT * FROM chambre LIMIT 0,6");
 //$QueryAllPost->execute();
 if(isset($_POST["valider"])){
    
   $idChambre = $_GET['action'];
   
    extract($_POST);
    //var_dump($name,$prenom,$eaddress,$phone);
    //die();

     if(!empty($name) and (!empty($prenom)) and (!empty($eaddress)) and (!empty($phone)) and (!empty($checkindates)) and (!empty($checkoutdate)) and ($checkindates < $checkoutdate)){
     
      $QueryVerification = $db->prepare("SELECT * FROM chambre WHERE etatChbre = 'occuper' AND idChamb=? ");
      $QueryVerification->execute(array($idChambre));
      if($QueryVerification->rowCount() == 0){
       
        $QueryInsertClient = $db->prepare("INSERT INTO client (nomcli,prenCli,telCli,emailcli) VALUES (?,?,?,?)");
        $QueryInsertClient->execute(array($name,$prenom,$phone,$eaddress));

        $querySelect=$db->prepare("SELECT MAX(idcli) FROM client");
        $querySelect->execute();
       $id=$querySelect->fetchAll()[0];
        $idCli = $id["MAX(idcli)"];
      //   var_dump($idCli);
      //  die();
        
        $QueryInsertReservation = $db->prepare("INSERT INTO reservation (datearrive,datedepart,idcli,idchamb) VALUES(?,?,?,?)");
       // $QueryInsertReservation;

        $QueryInsertReservation->execute(array($checkindates,$checkoutdate,$idCli,$idChambre));
        

        $queryUpdateReservation = $db->prepare("UPDATE chambre SET etatChbre= 'occuper' WHERE idchamb=? ");
        $queryUpdateReservation->execute(array($idChambre));

        $alert = array('alert-success', 'Votre reservation a éte effectue(e) avec success');

      }else{
        $alert = array('alert-Error', ' Désole !! cette chambre est deja reserve. Veuillez choisir une autre chambre sur le site ');

      }

     }else{
            
        $alert = array('alert-Error', 'les champs ne doivent pas etre vide pour effectuer la reservation et verifier les dates de reservation');
     }

 }
 
 ?>



