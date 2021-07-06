
<?php
session_start();
session_regenerate_id();
// date_default_timezone_set("Asia/Kathmandu");
ob_start();//truns on output buffering

    spl_autoload_register(function($class_name){
      include "src/$class_name.php";
    })

?>
