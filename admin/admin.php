<?php
session_start();

if (isset($_SESSION['admin'])) {
    require_once('app/function.php');

    if (isset($_GET['page'])) {

        switch ($_GET['page']) {

            case 'acceuil':
                getTemplateApp('acceuil','acceuil');
                break;
            case 'acount':
                getTemplateApp('acount', 'acount');
                break;
            case 'category':
                getTemplateApp('category', 'category');
                break;
            case 'posts':
                getTemplateApp('posts','posts');
                break;
                case 'commentaire':
                    getTemplateApp('commentaire','commentaire');
                    break;
                    case 'plats':
                        getTemplateApp('plats','plats');
                        break;
                        case 'divers':
                            getTemplateApp('divers','divers');
                     break;
                            case 'ChambreLibre':
                                getTemplateApp('ChambreLibre','ChambreLibre');
                                break;
                                case 'ChambreOccupe':
                                    getTemplateApp('ChambreOccupe','ChambreOccupe');
                                 break;
            default:
                getTemplate('Error_404');
                break;
        }
    } else {
        getTemplate('Error_404');
    }
} else {
    header('location:index.php');
}
