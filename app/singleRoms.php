<?php 
 require('admin/config/database.php');
 
 
 if(($_GET['page']=='singleRoms') && isset($_GET['id'])){

    $QuerySinglePost=$db->prepare("SELECT * FROM chambre WHERE idchamb=?");
    $QuerySinglePost->execute(array($_GET['id']));

   $reponses=$QuerySinglePost->fetch(PDO::FETCH_OBJ);
 

 }
 
 
 
 ?>

  