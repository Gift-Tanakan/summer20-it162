<?php include "big-config.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <!--<script src="https://use.fontawesome.com/6a71565c22.js"></script>-->
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/form.css" />
        <script src="https://use.fontawesome.com/a9e8f01869.js"></script>

        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>

    <body>
        <!-- START WRAPPER -->
        <main class="wrapper">
            <header>
                <!--    <h1><a href="index.php"><i class="logo fa fa-home"></i> Gift's IT162 Portal</a></h1>-->
                <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Gift's Web Dev Repo and More!</a></h1>

                    <nav id="cssmenu">
                        <ul>
                            <li><a href="../index.php"><span><i class="fa fa-fw fa-home"></i>My Portal</span></a></li>
                            <li><a href="index.php"><span><i class="fa fa-fw fa-pencil-square-o"></i> BIG</span></a></li>
                            <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                            <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                            <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                            <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Responsive Site VS Mobile App</span></a></li>
                            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a> 
                            <ul>
                                <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i>Calendar</span></a></li>
                                <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li> 
                                <li><a href="customwptheme.php"><span><i class="fa fa-fw fa-youtube-square"></i>Custom WordPress Theme</span></a></li>
                                
                                
                                
                            </ul>
                                </li>
                            <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i>Webcam</span></a></li><!--find new icon-->
                            <li><a href="contactme.php"><span><i class="fa fa-fw fa-pencil-square-o"></i>Contact Gift</span></a></li>


                        </ul>

                    </nav>
                    </header>

                <!-- START LEFT COL -->
                <section>
                    <h2 class="PageID" ><?=$PageID?></h2>