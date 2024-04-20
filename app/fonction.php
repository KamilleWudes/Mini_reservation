<?php
function alertMessag($aler){
    
    if(isset($alert)){
        $result ='<div class='.$alert[0].'>'.$alert[1].'</div><br>';
        return $result;
    }
    }