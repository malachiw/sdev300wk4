<!DOCTYPE html>
<!--index.html-->
<!--Nov 5, 2017 -->
<html lang ="en">
 <head>
  <meta charset="UTF-8"/>
  <title>Bad Wolf Den</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Acme|Lato" rel="stylesheet">
 </head>
 <body>
  <div class="navbar">
   <a href="index.html">Bad Wolf Den</a>
   <a href="contact.html">Contact</a>
   <a href="https://twitter.com/hashtag/doctorwho">News</a>
   <div class="dropdown">
    <button class="dropbtn">Departments
    </button>
    <div class="dropdown-content" id="myDropdown">
     <a href="sonics.html">Sonic Screwdrivers</a>
     <a href="timey.html">Timey Wimey Detector</a>
     <a href="davros.html">Davros</a>
     </div>
   </div> 
  </div>

<body>

Welcome <?php echo $_POST["firstname"];?><br>
Your comment: <?php echo $_POST["comments"]; ?>

</body>
</html> 