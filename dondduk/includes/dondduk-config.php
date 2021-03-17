<?php

/*
portal-config.php

Used to store all of Dondduk configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
date_default_timezone_set('Asia/Seoul');

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
        $logo = '';
     
}

// $nav1['home.php'] = "Welcome";
$nav1['order.php'] = "online order";
$nav1['about.php'] = "about Dondduk";
$nav1['menu.php'] = "menu";
$nav1['contact.php'] = "contact";
$nav1['https://map.naver.com/v5/entry/place/1539489212?c=14136004.1448371,4494401.7337420,15,0,0,0,dh&placePath=%2Fbooking%3Fentry=plt'] class ="reservation";


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
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a> "; 

        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";  
        }        

    }
    
    return $myReturn;
}



?>
 