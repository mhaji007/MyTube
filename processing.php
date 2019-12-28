<?php 
require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");

if(!isset($_POST["uploadButton"])){
    echo"No file sent to ppage.";
    exit();
}

//1. Create file upload data

$videoUploadData = new VideoUploadData($_POST["fileInput"], $_POST["title"], $_POSt["descriptionInput"], $POST["privacyInput"], $POST["categoryInput"], "REPLACE_THIS");

//2. Process video data (upload)

$videoProcessor = new VideoProcessor($con);
$wasSuccesssful = $videoProcessor->upload();
//3. Check if upload was successful 
?>