<?php include 'includes/fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Michael Nomura: WEB120 Portal Website</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/table.css" />
</head>
<body>
<div class="wrapper">
<header>
  <h1><a href="index.php"> 
      Teriyaki Madness</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1);?>
        <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul>
  </nav>
</header>       
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>
 <!-- END Header Include Here --> 

 

        
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
<p>Teriyaki Madness Text</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Specials</h3>
 <p>Lunch Specials</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer include-->
<footer>
  <p><small>&copy; 2016 - 2018/06/04 by <a href="contactme.php">Teriyaki Madness</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>