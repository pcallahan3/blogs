<?php

/*Always include your .htaccess file for routing*/



require_once("vendor/autoload.php");

$f3 = Base::instance();


 //Set debug level
    $f3->set('DEBUG', 3);
    
    //$f3=require('lib/base.php');
    $f3->config('config.ini');
    $f3->config('routes.ini');
    $f3->run();