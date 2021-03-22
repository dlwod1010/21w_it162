<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

$siteKey = "6LdMNTsaAAAAAEZ9ro2lqgzg-IS2Ypnh5QUFBOHE";
$secretKey = "6LdMNTsaAAAAAIAwiibtAUQx7mGIlD8-JMqjHTnQ";
$server = 'coderjlee.com';


$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Home page";
        $logo = 'fa-home';
        $PageID = 'About Me';

    break;

    case 'big/index.php':
        $title = "Jiae's WEB120 Big page";
        $PageID = 'BIG';
    break;

    case 'flowchart.php':
        $title = "Flowchart page";
        $PageID = 'Flowchart';
    break;    

    case 'dondduk/index.php':
        $title = "Final Project";
        $PageID = 'Final project';        
    break;

    case 'contactme.php':
        $title = "Contact Page";
        $PageID = 'Contact Jiae';
        $logo_color = ' style="color:#0f0"';
    break;

    case 'aia.php':
        $title = "AIA Page";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
     
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['dondduk/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Jiae";


// a function to generate links and keep the hightlight the current page

/* 
<li><a href="index.php" class="selected">Welcome</a></li>
<li><a href="big/index.php">Big</a></li>
<li><a href="aia.php">AIA</a></li>
<li><a href="flowchart.php">Flowchart/Layout</a></li>
<li><a href="fp/index.php">Final Project</a></li>
<li><a href="contactme.php">Contact Jiae</a></li> 
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text) {

        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li> "; 

        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li> ";  
        }        

    }
    
    return $myReturn;
}



?>
 