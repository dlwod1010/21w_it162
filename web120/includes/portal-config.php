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

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Jiae's WEB120 portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break;

    case 'big.php':
        $title = "Jiae's WEB120 Big page";
        $PageID = 'BIG';
    break;

    case 'flowchart.php':
        $title = "Jiae's WEB120 Flowchart page";
        $PageID = 'Flowchart';
    break;    

    case 'final_project.php':
        $title = "Jiae's WEB120 F/P page";
        $PageID = 'Final project';        
    break;

    case 'contactme.php':
        $title = "Jiae's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Jiae';
        $logo_color = ' style="color:#0f0"';
    break;

    case 'aia.php':
        $title = "Jiae's Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';
     
}

$nav1['index.php'] = "Welcome";
$nav1['big.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['final_project.php'] = "Final Project";
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
 