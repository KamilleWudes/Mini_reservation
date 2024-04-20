<?php
require('config/database.php');
extract($_POST);

if ((isset($_GET['page'])) && ($_GET['page'] == 'plats')) {

    //AJOUTER ARTICLES

    if (isset($addpost)) {

        //Verification des champs vides de meme pour le champs image

        if (!empty($titre) and !empty($place) and !empty($prix) and ($_FILES['image']['name'] != '')) {

            $file_dir = "dist/images/";

            $tmp_file = $_FILES["image"]['tmp_name'];
            $type_file = $_FILES["image"]['type'];

            if (!strstr($type_file, "png") && !strstr($type_file, "jpeg") && !strstr($type_file, "JPEG") && !strstr($type_file, "PNG")) {

                exit("Seuls les fichies images au formant png et jpeg sont acceptées");
            }
            $name_image = time() . '.jpg';
            if (!move_uploaded_file($tmp_file, $file_dir . $name_image)) {
                exit("Impossible de copier l'image dans le repertoire cible");
            }
            $QueryInsertPost = $db->prepare("INSERT INTO plats(nomPlat,descrPlat,priPlat,imagePlat)
            VALUES(?,?,?,?)");
            $QueryInsertPost->execute(array($titre,$place,$prix,$name_image));

            $alert = array('alert-success', 'Votre plats a ete ajoutée avec success');
        } else {
            $alert = array('alert-Error', 'les champs ne doivent pas etre vide de meme pour le champ image');
        }
    }

    //AFFICHER LES PLATS

    $QueryAllArticle = $db->prepare('SELECT * FROM plats order by idPlat desc');
    $QueryAllArticle->execute();

    //Suppression d'article

    if (isset($_GET['action']) and ($_GET['action']) == 'delete') {

        $QueryDeleteArticle = $db->prepare('DELETE FROM plats WHERE idPlat=?');
        $QueryDeleteArticle->execute(array($_GET['id']));
        header('location:admin.php?page=plats');
    }

    //Modification de l'article
    if (isset($_GET['action']) and ($_GET['action']) == 'modify') {

        //Affichage du conenu de la table posts
        $QueryRecuperationPost = $db->prepare("SELECT * FROM plats WHERE idPlat=?");
        $QueryRecuperationPost->execute(array($_GET['id']));

        $recuperation = $QueryRecuperationPost->fetch(PDO::FETCH_OBJ);
        if (isset($_POST['modifyPost'])) {
            extract($_POST);
            if (!empty($titre) and !empty($prix) and !empty($place) and  !empty($id) and ($_FILES['image']['name'] != '')) {

                $file_dir = "dist/images/";

                $tmp_file = $_FILES["image"]['tmp_name'];
                $type_file = $_FILES["image"]['type'];
    
                if (!strstr($type_file, "png") && !strstr($type_file, "jpeg") && !strstr($type_file, "JPEG") && !strstr($type_file, "PNG")) {
    
                    exit("Seuls les fichies images au formant png et jpeg sont acceptées");
                }
                $name_image = time() . '.jpg';
                if (!move_uploaded_file($tmp_file, $file_dir . $name_image)) {
                    exit("Impossible de copier l'image dans le repertoire cible");
                }

                $QueryUpdateArticle = $db->prepare("UPDATE plats SET nomPlat=?,descrPlat=?,priPlat=?,imagePlat=? WHERE idPlat=?");
                $QueryUpdateArticle->execute(array($titre,$place, $prix,$name_image,$id));

                header('location:admin.php?page=plats');
            } else {
                $alert = array('alert-Error', 'les champs  ne doivent pas etre vide');
            }
        }
    }
} else {
    getTemplate('Error_404');
}
