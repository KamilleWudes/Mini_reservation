<?php  
//session_start();

  $dbhost = '127.0.0.1';
  $dbname ='gestion_reservation_chambre'; //nom de la base de donnee
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
