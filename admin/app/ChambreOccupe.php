<?php
require('config/database.php');
extract($_POST);

if ((isset($_GET['page'])) && ($_GET['page'] == 'ChambreOccupe')) {

   

    if (isset($_GET['action']) and ($_GET['action']) =='Libre') {
         $idChambre= $_GET['id']; 

        $queryUpdateChambres = $db->prepare("UPDATE chambre SET etatChbre='Libre' WHERE idchamb=? ");
        $queryUpdateChambres->execute(array($idChambre));

        $alert = array('alert-success', 'Votre reservation a éte effectue(e) avec success');

        header('location:admin.php?page=ChambreLibre');


    }

}