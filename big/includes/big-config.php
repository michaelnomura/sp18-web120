<?php
/**
 * big-config.php provides a place to store configuration info, 
 */

//site keys for web-students.net (we used these in WEB110 - yours will be new and based upon your own server)
$siteKey = "6LfelDYUAAAAAFzeIMeojqqa-pvfqpphTV-I3-0x";
$secretKey = "6LfelDYUAAAAAImbHOahvzq9ah4WdBLJGqtFy01t";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE)
{
    case "index.php":
        $title = "Michael Nomura: Web Dev Examples";
        $logo = "fa-home";
        $PageID = "Sample Client Form";
    break;    
    case "flexbox.php":
        $title = "Michael Nomura: Flexbox";
        $logo = "fa-th-large";
        $PageID = "Flexbox Research";
    break;
    
    case "galleries.php":
        $title = "Galleries";
        $logo = "fa-file-image-o";
        $PageID = "Galleries Research";
    break;
        
    case "map.php":
        $title = "Michael's Google Map";
        $logo = "fa-map-o";
        $PageID = "Where in the world is Michael";
    break;
    case "youtube.php":
        $title = "Michael's World Press VS Joomla";
        $logo = "fa-youtube";
        $PageID = "World Press VS Joomla";
    break;
    case "calendar.php":
        $title = "Michael's Event Calendar";
        $logo = "fa-calendar";
        $PageID = "Michael's Event Calendar";
    break;
        
    case "parallax.php":
        $title = "Michael Nomura's Parallax Research";
        $logo = "fa-window-restore";
        $PageID = "Parallax Research";
    break;
        case "shoppingcarts.php":
        $title = "Michael Nomura's Shopping Cart Research";
        $logo = "fa-file-text-o";
        $PageID = "Shopping Cart Research";
    break;
        case "siteapp.php":
        $title = "Michael Nomura's Responsive VS Native Mobile App";
        $logo = "fa-mobile";
        $PageID = "Responsive VS Native Mobile App Research";
    break;
        case "webcam.php":
        $title = "Michael Nomura's Two examples of web cams";
        $logo = "fa-video-camera";
        $PageID = "Two examples of web cams";
    break;
    case "contactme.php":
        $title = "Michael Nomura: Contact Form";
        $logo = "fa-pencil-square-o";
        $PageID = "Contact Michael";
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = "fa-home";
        $PageID = "";
    break;
        
}

