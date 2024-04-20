<?php
function alertMessage($alert){
    
    if(isset($alert)){
        $result ='<div class='.$alert[0].'>'.$alert[1].'</div><br>';
        return $result;
    }
    }
    function getTemplate($template){
        require('templates/'.$template.'.php');
    }
    function getApp($app){
        require('app/'.$app.'.php');
    }
    function getTemplateApp($template,$app){

        require('app/'.$app.'.php');
        require('templates/'.$template.'.php');

    }
    function getHeader(){
        require('templates/partials/header.php');
    }
    function getFooter(){ 
        require('templates/partials/footer.php');
    }
    function getAdmin(){
        return $_SESSION['admin'];
    }/*
    function slug($text) {

        $text= preg_replace('~[^\pL\d]+~u','-', $text);
        $text= iconv('utf-8','us-ascii//TRANSLIT',$text);
        $text= preg_replace('~[^-\W]+~','',$text);
        $text= trim($text,'-');
        $text= preg_replace('~-+~','-',$text);
        $text= strtolower($text);

        if(empty($text)){
            return 'n-a';
        }
        return $text;

    }*/