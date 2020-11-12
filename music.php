<!DOCTYPE html>
<html lang="en">
<head>
	<title>Music</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<nav class="navbar navbar-inverse" style="background-color: #6A728A;">
    <div class="container-fluid" id="final-proj-menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="#">Iesus' Portfolio</a>
      </div>
      <div class="collapse navbar-collapse" id="navCollapse">
      <ul class="nav navbar-nav navbar-right">
               <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
               <li><a href="../happy-birthday"><span class="glyphicon glyphicon-gift"> Happy Birthday!</span></a></li>
               <li class="active"><a href="../music-database"><span class="glyphicon glyphicon-cd"> Music Database</span></a></li>
          </ul>
      </ul>
      </nav>
<ul class="nav nav-pills nav-justified">
  <li><a class="giddy" href="index.php">Home</a></li>
  <li class="active"><a class="giddy" href="music.php">The Music</a></li>
  <li><a class="giddy" href="products.php">Products</a></li>
</ul>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/americanidiot.png" alt="New York"> 
    </div>
    <div class="item">
      <img src="img/carrieandlowell.jpg" alt="Chicago">
    </div>
    <div class="item">
      <img src="img/deathbach.jpg" alt="Los Angeles">    
    </div>
    <div class="item">
      <img src="img/inutero.jpg" alt="Los Angeles"> 
    </div>
    <div class="item">
      <img src="img/ledfour.jpg" alt="Los Angeles">   
    </div>
    <div class="item">
      <img src="img/maadcity.jpg" alt="Los Angeles">   
    </div>
    <div class="item">
      <img src="img/sevenswans.jpg" alt="Los Angeles">    
    </div>
    <div class="item">
      <img src="img/appetite.jpg" alt="Los Angeles">
    </div>
    <div class="item">
      <img src="img/license.jpg" alt="Los Angeles">      
    </div>
    <div class="item">
      <img src="img/blackparade.jpg" alt="Los Angeles">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
<table id="albumname" border="10" cellspacing="10" cellpadding="15">
		<tr><th>Ten Favorite Albums</th></tr>
	<?php 
	$albums = array("American Idiot", "Led Zepplin IV", "In Utero", "Death of a Bachelor", "Carrie & Lowell", "Seven Swans", "good kid, m.A.A.d city", "Appetite For Destruction", "Licensed to Ill", "The Black Parade");
	shuffle($albums);
	for ($i=0; $i < sizeof($albums); $i++) 
	{ 
		
		echo "<tr><td>$albums[$i]</td></tr>";
	}
	 ?>
</table>
</body>
</html>