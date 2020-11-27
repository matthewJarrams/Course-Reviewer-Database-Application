<?php

    //Define directories
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'coursereviewer_API' );
    defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');


    //load the config file
    require_once(INC_PATH.DS."config.php");

    //core classes
    require_once(CORE_PATH.DS."user.php");
    require_once(CORE_PATH.DS."department.php");
    require_once(CORE_PATH.DS."club.php");
    require_once(CORE_PATH.DS."building.php");
    require_once(CORE_PATH.DS."class.php");



?>