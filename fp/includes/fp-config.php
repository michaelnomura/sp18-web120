<?php
/**
 * portal-config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//site keys for web-students.net (we used these in WEB110 - yours will be new and based upon your own server)
$siteKey = "6LfelDYUAAAAAFzeIMeojqqa-pvfqpphTV-I3-0x";
$secretKey = "6LfelDYUAAAAAImbHOahvzq9ah4WdBLJGqtFy01t";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['menu.php'] = "Menu";
$nav1['map.php'] = "Map";
$nav1['contact.php'] = "Contact";


switch(THIS_PAGE)
{
    case "index.php":
        $title = "Michael Nomura: WEB120 Portal Website";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
    
    case "aia.php":
        $title = "Michael Nomura: Final Project AIA";
        $logo = "fa-users";
        $PageID = "Final Project:Audience, Issues and Approach";
    break;
        
    case "ux.php":
        $title = "Michael Nomura: Final Project Flowchart and Layout";
        $logo = "fa-file-text-o";
        $PageID = "Final Project: Flowchart and Layout";
    break;

        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;
        
}

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//no class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
  
        }
        
    }
    
    return $myReturn;
}