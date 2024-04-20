<?php
require('config/database.php');

 //Affichage des commentaires
 $QueryAffichageCom = $db->prepare("SELECT * FROM  commentaire order by dateCom desc ");
 $QueryAffichageCom->execute();
