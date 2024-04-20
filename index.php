<?php
require('admin/config/database.php');

require('admin/app/function.php');
    getHeader();
    if(!isset($_GET['page'])){

        getTemplateApp('home','home');
         
    }elseif($_GET['page']=='chambre'){

        getTemplateApp('chambre','chambre');

    }elseif($_GET['page']=='singleRoms'){

        getTemplateApp('singleRoms','singleRoms');

    }elseif($_GET['page']=='restaurant'){

        getTemplateApp('restaurant','restaurant');
    }elseif($_GET['page']=='about'){

        getTemplateApp('about','about');

    }elseif($_GET['page']=='contact'){

        getTemplateApp('contact','contact');
        
    }elseif($_GET['page']=='reunion'){

        getTemplateApp('reunion','reunion');
        
    }elseif($_GET['page']=='singleRom2'){

        getTemplateApp('singleRom2','singleRom2');

    }elseif($_GET['page']=='singleRom3'){

        getTemplateApp('singleRom3','singleRom3'); 

    }elseif($_GET['page']=='disponible1'){
        
        getTemplateApp('disponible1','disponible1');

    }elseif($_GET['page']=='disponible2'){

        getTemplateApp('disponible2','disponible2');
        
    }elseif($_GET['page']=='reservation'){

        getTemplateApp('reservation','reservation');
    }

   

 getFooter(); ?>