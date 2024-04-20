<?php
require('config/database.php');

 //Affichage des reservations
 $QueryAffichageReservation = $db->prepare("SELECT R.idreser,CL.nomcli,CL.prenCli,CL.telCli,R.datereser,R.datearrive,R.datedepart,C.libelchamb,C.imagechamb FROM reservation R,client CL,chambre C,utilisateur U WHERE U.idutil=R.idutil AND CL.idcli=R.idcli AND C.idchamb=R.idchamb order by idreser desc ");
 $QueryAffichageReservation->execute();
