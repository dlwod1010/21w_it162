<?php

/*
portal-config.php
Used to store all of Dondduk configuration information
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
//date_default_timezone_set('Asia/Seoul');
date_default_timezone_set('America/Los_Angeles');

$siteKey = "6LdMNTsaAAAAAEZ9ro2lqgzg-IS2Ypnh5QUFBOHE";
$secretKey = "6LdMNTsaAAAAAIAwiibtAUQx7mGIlD8-JMqjHTnQ";
$server = 'coderjlee.com';

switch(THIS_PAGE){

    case 'index.php':
        $title = "Dondduk | The barbeque grill";
        $PageID = 'main page';
        break;

    case 'about.php':
        $title = "About Dondduk";
        $PageID = 'about Dondduk';
        break;

    case 'order.php':
        $title = "Online Ordering";
        $PageID = 'Online Ordering';
        break;    

    case 'menu.php':
        $title = "Menu Info";
        $PageID = 'menu info';        
        break;

    case 'contact.php':
        $title = "Contact Us";
        $PageID = 'Contact';
        break;

    default:
        $title = THIS_PAGE;   
}

//$nav2['index.php'] = "Welcome";
$deliveryLink = "https://baemin.me/3MWlmXszl";
$nav2[$deliveryLink] = "delivery";
$nav2['order.php'] = "online order";
$nav2['about.php'] = "about Dondduk";
$nav2['menu.php'] = "menu";
$nav2['contact.php'] = "contact";
$mapLink = "https://map.naver.com/v5/entry/place/1539489212?c=14136004.1448371,4494401.7337420,15,0,0,0,dh&placePath=%2Fbooking%3Fentry=plt";
$nav2[$mapLink] = "reservation";

// a function to generate links and keep the hightlight the current page
function makeLinks($nav, $mapLink)
{
    $myReturn = '';
    foreach($nav as $url => $text) {

        $targetValue = '_self';
        if ($url == $mapLink) { 
            $targetValue = '_blank';
        }

        $id = $nav[$url];
        if($url == THIS_PAGE){
            $myReturn .= "<a id=\"$id\" class=\"selected\" href=\"$url\" target=\"$targetValue\">$text</a> "; 
        }else{
            $myReturn .= "<a id=\"$id\" href=\"$url\" target=\"$targetValue\">$text</a>";  
        }

    }
    
    return $myReturn;
}

?>
 