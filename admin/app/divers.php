<?php
require('config/database.php');
extract($_POST);

if ((isset($_GET['page'])) && ($_GET['page'] == 'divers')) {

    //AJOUTER ARTICLES

    if (isset($addpost)) {

        //Verification des champs vides de meme pour le champs image

        if (!empty($titre) and !empty($place) and !empty($prix) and !empty($contenu) and ($_FILES['image']['name'] != '') and ($_FILES['images']['name'] != '')) {

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

            $file_dirs = "dist/images/";

            $tmp_files = $_FILES["images"]['tmp_name'];
            $type_files = $_FILES["images"]['type'];

            if (!strstr($type_files, "png") && !strstr($type_files, "jpeg") && !strstr($type_files, "JPEG") && !strstr($type_files, "PNG")) {

                exit("Seuls les fichies images au formant png et jpeg sont acceptées");
            }
            $name_images = time() . '.jpg';
            if (!move_uploaded_file($tmp_files, $file_dirs . $name_images)) {
                exit("Impossible de copier l'image dans le repertoire cible");
            }

            $QueryInsertPost = $db->prepare("INSERT INTO posts(nomPost,prenomPost,contenPost,imagPersPost,imageDiversPost,textImagPost)
            VALUES(?,?,?,?,?,?)");
            $QueryInsertPost->execute(array($titre,$place,$prix,$name_image,$name_images,$contenu));

            $alert = array('alert-success', 'Votre information a ete ajoutée avec success');
        } else {
            $alert = array('alert-Error', 'les champs ne doivent pas etre vide de meme pour le champ image');
        }
    }

    //AFFICHER LES PLATS

    $QueryAllArticle = $db->prepare('SELECT * FROM posts order by idPost desc');
    $QueryAllArticle->execute();

    //Suppression d'article

    if (isset($_GET['action']) and ($_GET['action']) == 'delete') {

        $QueryDeleteArticle = $db->prepare('DELETE FROM posts WHERE idPost=?');
        $QueryDeleteArticle->execute(array($_GET['id']));
        header('location:admin.php?page=divers');
    }

    //Modification de l'article
    if (isset($_GET['action']) and ($_GET['action']) == 'modify') {

        //Affichage du contenu de la table posts
        $QueryRecuperationPost = $db->prepare("SELECT * FROM posts WHERE idPost=?");
        $QueryRecuperationPost->execute(array($_GET['id']));

        $recuperation = $QueryRecuperationPost->fetch(PDO::FETCH_OBJ);
        if (isset($_POST['modifyPost'])) {
            extract($_POST);
            if (!empty($titre) and !empty($place) and !empty($prix) and !empty($contenu) and ($_FILES['image']['name'] != '') and ($_FILES['images']['name'] != '')) {

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

                $file_dir = "dist/images/";

                $tmp_file = $_FILES["images"]['tmp_name'];
                $type_file = $_FILES["images"]['type'];
    
                if (!strstr($type_file, "png") && !strstr($type_file, "jpeg") && !strstr($type_file, "JPEG") && !strstr($type_file, "PNG")) {
    
                    exit("Seuls les fichies images au formant png et jpeg sont acceptées");
                }
                $name_images = time() . '.jpg';
                if (!move_uploaded_file($tmp_file, $file_dir . $name_images)) {
                    exit("Impossible de copier l'image dans le repertoire cible");
                }

                $QueryUpdateArticle = $db->prepare("UPDATE posts SET nomPost=?,prenomPost=?,contenPost=?,imagPersPost=?,imageDiversPost=?,textImagPost=? WHERE idPost=?");
                $QueryUpdateArticle->execute(array($titre,$place,$prix,$name_image,$name_images,$contenu,$id));

                header('location:admin.php?page=divers');
            } else {
                $alert = array('alert-Error', 'les champs  ne doivent pas etre vide');
            }
        }
    }
} else {
    getTemplate('Error_404');
}
