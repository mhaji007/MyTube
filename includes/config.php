<?php

ob_start(); // turns on output buffering


date_default_timezone_set("America/Los_Angeles");


try {
    $con = new PDO("msql:dbname=MyTube;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  // outputs a warning in addition to setting the error code
}

catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 

}

?>