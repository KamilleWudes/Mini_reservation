<?php 
 require('admin/config/database.php');
 
 $QueryAllPost=$db->prepare("SELECT * FROM chambre order by idchamb desc LIMIT 0,6");
 $QueryAllPost->execute();
 
 
 ?>