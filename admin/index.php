<?php
session_start();
if (isset($_SESSION['admin'])) {

    header('Location:admin.php?page=acceuil');

} else {
    
    require_once('app/function.php');
    getTemplateApp('login', 'login');
}
?>
