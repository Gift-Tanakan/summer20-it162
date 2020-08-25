<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
//$nav1['aia.php'] = "AIA";
//$nav1['flowchart.php'] = "Flowchart";
//$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Gift";

//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
//switch makes THIS PAGE reusable for other pages 
    case 'index.php':
        $title = "Gift's IT162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;

    case 'contactme.php':
        $title = "Gift's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Gift';
        $logo_color = ' style="color:#0f0"';

        break;

//    case 'aia.php':
//        $title = "Gift's Final Project AIA (Client work)";
//        $logo = "fa-universal-access";
//        $logo_color = ' style="color:#00f"';
//
//        break;


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
function makeLinks($linkArray)
{
    $myReturn = '';
//myReturn is similar to setting a variable
    foreach($linkArray as $url => $text)
        //foreach for each allows us to get each item and investigate it one at a time. this case we investigate linkarray 
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }else{
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
        }    
    }

    return $myReturn;    
}

?>
