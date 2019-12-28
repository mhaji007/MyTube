<?php 
require_once("includes/header.php");

if(!isset($_POST["uploadButton"])){
    echo"No file sent to ppage.";
    exit();
}

//1. Create file upload data

$videoUploadDate = new VideoUploadData($_POST["fileInput"], $_POST["title"], $_POSt["descriptionInput"], $POST["privacyInput"], $POST["categoryInput"], "REPLACE_THIS");

//2. Process video data (upload)
//3. Check if upload was successful 
?>