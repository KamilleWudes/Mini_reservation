<?php

require('admin/config/database.php');
require_once('admin/app/function.php');

if(isset($_POST['submit'])){

   extract($_POST);

   if(!empty($name) and(!empty($tel)) and(!empty($subjet)) and(!empty($message))) {

       $QueryInsertContact=$db->prepare("INSERT INTO commentaire(nomCom,telCom,sujetCom,contenuCom,dateCom) VALUES(?,?,?,?,NOW())");
     $QueryInsertContact->execute (array($name,$tel,$subjet,$message));

    } else{

        $alert = array('alert-Error', 'les champs ne doivent pas etre vide');

    }
   }
?>