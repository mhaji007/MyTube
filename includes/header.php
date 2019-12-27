<?php require_once("includes/config.php"); ?>
<!DCOTYPE html>
<html>
<head>
<title>MyTube</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/commonActions.js"></script>
</head>
<body>

    <div id="pageContainer">
        
        <div id="mastHeadContainer">
            <button class="navShowHide">
                <img src="assets/images/icons/menu.png" alt="">
            </button>

            <a class="LogoContainer" href="index.php">
                <img src = "assets/images/icons/MyTube.png" title="logo" alt=" site logo">
            </a>

            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" class="searchBar" name="term" placeholer="Search...">
                    <button class="searchButton">
                        <img src="assets/images/icons/search.png" alt="search button">
                    </button>

                </form>
            </div>

            <div class="rightIcons">
                
                <a href="upload.php">
                <img src="assets/images/icons/upload.png" alt="upload button">
                </a>

                <a href="#">
                <img src="assets/images/profilePictures/default.png" alt="user page">
                </a>

            </div>

        </div>
        
        <div id="sideNavContainer" style = "display:none;">
        
        </div>

        <div id="mainSectionContainer">

            <div id="mainContentContainer">