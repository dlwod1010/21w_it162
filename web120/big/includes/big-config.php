<?php



define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$siteKey = "6LdMNTsaAAAAAEZ9ro2lqgzg-IS2Ypnh5QUFBOHE";
$secretKey = "6LdMNTsaAAAAAIAwiibtAUQx7mGIlD8-JMqjHTnQ";
$server = 'coderjlee.com';


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Main Page";
        $PageID = 'Client Questionaries';

    break;

    case 'flexbox.php':
        $title = "Flexbox Reseach";
        $PageID = 'A simple guide to Flexbox';
    break;    

    case 'galleries.php':
        $title = "Galleries";
        $PageID = 'How to create a Responsive Gallery with Flexbox';        
    break;

    case 'calendar.php':
        $title = "Google Calendar";
        $PageID = 'Google Calendar';        
    break;

    case 'map.php':
        $title = "Google Map";
        $PageID = 'Maps & Directions ';        
    break;

    case 'youtube.php':
        $title = "YouTube";
        $PageID = 'Video: Accessibility Fundamentals';        
    break;
    
    case 'carts.php':
        $title = "Shopping Carts";
        $PageID = 'Shopping Carts';        
    break;

    case 'siteapp.php':
        $title = "Responsive Site & Apps";
        $PageID = 'Responsive websites and Native apps';        
    break;
    
    case 'webcam.php':
        $title = "Web Cam";
        $PageID = 'Web Cam';        
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PafeID = '';
     
}


?>
 