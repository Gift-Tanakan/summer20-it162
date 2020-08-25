<?php
/*
Big config.php

Used to store all of our WEB120 configuration information

*/
//place URL & labels in the array here for navigation:
//$nav1['index.php'] = "Welcome";
//$nav1['big/index.php'] = "Big";
//$nav1['contactme.php'] = "Contact Gift";

//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

$siteKey = "6LfwW7gZAAAAAKTKv_4Mi2HEYNdU--yaNHeFU-U-";
$secretKey = "6LfwW7gZAAAAAPNI6CRKkrtYCM8zIpBzPjDoLyxb";

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
        //switch makes THIS PAGE reusable for other pages 
    case 'index.php':
        $title = "Big Research Repo";
        $logo = 'fa-home';
        $PageID = 'Welcome to my Web Dev Repo and More!';
        break;

    case 'contactme.php':
        $title = "Contact Gift";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Gift';
        //        $logo_color = ' style="color:#0f0"';

        break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = "fa-cube";
        $PageID = 'Flexbox Research';
        //        $logo_color = ' style="color:#00f"';

        break;
    case 'galleries.php':
        $title = "Galleries Research";
        $logo = "fa-camera-retro";
        $PageID = 'Galleries Research';
        //        $logo_color = ' style="color:#00f"';

        break;

    case 'shoppingcarts.php':
        $title = "Shopping Carts Research";
        $logo = "fa-shopping-basket";
        $PageID = 'Shopping Carts Research';
        //        $logo_color = ' style="color:#00f"';

        break;
    case 'siteapp.php':
        $title = "Responsive Site VS Mobile App Research";
        $logo = "fa-html5";
        $PageID = 'Responsive Site VS Mobile App Research';
        //        $logo_color = ' style="color:#00f"';

        break;
        
    case 'map.php':
        $title = "Map to Seattle Central College";
        $logo = "fa-map-o"; 
        $PageID = 'Map to Seattle Central College';
        //        $logo_color = ' style="color:#00f"';

        break;

    case 'calendar.php':
        $title = "Calendar";
        $logo = "fa-calendar"; 
        $PageID = 'Calendar';
        //        $logo_color = ' style="color:#00f"';

        break;
        
    case 'customwptheme.php':
        $title = "Custom WordPress Theme"; 
        $logo = "fa-youtube-square"; 
        $PageID = 'Custom WordPress Theme';
        //        $logo_color = ' style="color:#00f"';

        break;
        
    case 'webcam.php':
        $title = "Webcam"; //2 examples of webcam, one is live, another is reg.
        $logo = "fa-eye"; 
        $PageID = 'Webcam';
        //        $logo_color = ' style="color:#00f"';

        break;
        
    case 'contactme.php':
        $title = "Contact Gift";
        $logo = "fa-pencil-square-o";
        $PageID = 'Contact Gift';
        //        $logo_color = ' style="color:#00f"';

        break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';

}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
//function makeLinks($linkArray)
//{
//    $myReturn = '';
////myReturn is similar to setting a variable
//    foreach($linkArray as $url => $text)
//        //foreach for each allows us to get each item and investigate it one at a time. this case we investigate linkarray 
//    {
//        if($url == THIS_PAGE)
//        {//selected page - add class reference
//            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
//        }else{
//            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
//        }    
//    }
//
//    return $myReturn;    
//}

?>
