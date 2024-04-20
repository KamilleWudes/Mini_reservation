<?php
require('config/database.php');

if (isset($_GET['page']) == 'category') {

    //Ajouter d'une Categorie

    if (isset($_POST['addcategory'])) {

        if (!empty($_POST['category'])) {

            extract($_POST);

            $QueryInsertCategorie = $db->prepare("INSERT INTO  categorie(libelcat) VALUES(?)");
            $QueryInsertCategorie->execute(array($category));

            //execute(array($titre, $categorie, $contenu, $name_image));

        } else {
            $alert = array('alert-Error', 'le champs catégorie ne doit etre vide');
        }
    }

    //Affichage des categories
    $QueryAffichageCate = $db->prepare("SELECT * FROM  categorie order by idcat desc ");
    $QueryAffichageCate->execute();

    //SUPPRESSION ET MODIFICATION DES CATEGORIES
    if (isset($_GET['action'])) {

        //SUPPRESSION DES CATEGORIES
        if ($_GET['action'] == 'delete') {

            $QueryDeleteCate = $db->prepare("DELETE FROM  categorie WHERE idcat=?");
            $QueryDeleteCate->execute(array($_GET['id']));

            header('location:admin.php?page=category');
        } elseif ($_GET['action'] == 'modify') {

            // MODIFICATION DES CATEGORIES

            //Affichage du conenu de la table posts
            
            $QueryRecuperationCat = $db->prepare("SELECT * FROM categorie  WHERE idcat=?");
            $QueryRecuperationCat->execute(array($_GET['id']));

            $recuperationCategory = $QueryRecuperationCat->fetch(PDO::FETCH_OBJ);

            if (isset($_POST['modifycategory'])) {

                if (!empty($_POST['NewNamecategory']) and !empty($_POST['id'])) {

                    $QueryUpdateCate = $db->prepare("UPDATE categorie SET libelcat=? WHERE idcat=?");
                    $QueryUpdateCate->execute(array($_POST['NewNamecategory'],$_POST['id']));

                    //Redirection a la page principale
                    header('location:admin.php?page=category');
                } else {

                    $alert = array('alert-Error', 'le champs catégorie ne doit etre vide');
                }
            }
        }
    }
} else {
    getTemplate('Error_404');
}
