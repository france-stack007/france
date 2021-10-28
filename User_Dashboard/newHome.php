<?php
include "connection.php";

$res = mysqli_query($link,"SELECT * FROM home_imgs");
while($row=mysqli_fetch_array($res))
{
    $image1=$row["image1"];
    $image2=$row["image2"];
    $image3=$row["image3"];
}

$res = mysqli_query($link,"SELECT * FROM home_content");
while($row=mysqli_fetch_array($res))
{
    $content11=$row["content1.1"];
    $content12=$row["content1.2"];
    $content21=$row["content2.1"];
    $content22=$row["content2.2"];
    $content31=$row["content3.1"];
    $content32=$row["content3.2"];
}

?>
<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayala District City Agriculturist</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ayala Agriculture</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="index_request.php">Request</a></li>
                        <li><a href="newHome.html">Home</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">ACCOUNTS</button>
                            <div class="dropdown-content">
                              <a href="index.php">Farmer</a>
                              <a href="index.php">Personnel</a>
                              <a href="index_admin.php">Admin</a>
                            </div>
                        </div>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url('<?php echo $image1;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s"><span><?php echo $content11;?></span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s"><?php echo $content12;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                    
                <div class="item">
                    <div class="banner" style="background-image: url('<?php echo $image2;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s"><span><?php echo $content21;?></span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s"><?php echo $content22;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                
                <div class="item">
                    <div class="banner" style="background-image: url('<?php echo $image3;?>');"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s"><span><?php echo $content31;?></span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s"><?php echo $content32;?></h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    <section class="supporting">
        <div class="container" style="text-align: center;">
      
          <div class="col">
            <img src="./img/facebook.svg">
            <h5 style="font-weight: 900;">FACEBOOK</h5>
            <p>Make your projects look great and interact beautifully.</p>
            <a href="#" class="btn1"> Learn More</a><br>
          </div>
          
          <div class="col">
            <img src="./img/instagram.png">
            <h5 style="font-weight: 900;">INSTAGRAM</h5>
            <p>Use modern tools to turn your design into a web site</p>
            <a href="#" class="btn2"> Learn More</a><br>
          </div>
          
          <div class="col">
            <img src="./img/google-plus.png">
            <h5 style="font-weight: 900;">GOOGLE</h5>
            <p>Use modern tools to turn your design into a web site</p>
            <a href="#" class="btn3"> Learn More</a><br>
          </div>
        </div>
      </section>
      
      <footer>
        <div class="container">
          <p>&copy; RiseTech</p>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<style>
body {
	font-family: 'Poppins', sans-serif;
}
header .carousel-inner .item {
	height: 100vh;
}
/*NAV START*/
footer{
    display: block;
    margin-top: 30px;
    margin-bottom: 30px;
    text-align: center;
}
.navbar-inverse {
	background-color: transparent;
	border-color: transparent;
}
.navbar-inverse .navbar-brand {
	color: #fff;
	font-size: 40px;
	padding: 40px 15px;
	font-weight: 1000;
}
.nav.navbar-nav.navbar-right {
	margin: 25px 0;
}
.navbar-inverse .navbar-nav>li>a {
	color: #fff;
    font-weight: 700;
    font-size: 15.3px;
	text-transform: uppercase;
}
.banner {
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	height: 100vh;
}
.carousel-caption {
	padding-bottom: 250px;
	font-family: poppins;
}
.carousel-caption h2 {
	font-size: 70px;
	text-transform: uppercase;
	font-weight: bold;
}
.carousel-caption h2 span {
	color: #EDBB00;
}
.carousel-caption a {
	background: #EDBB00;
	padding: 15px 35px;
	display: inline-block;
	margin-top: 15px;
	color: #fff;
	text-transform: uppercase;
	border-radius: 25px;
}
.carousel-control.right {
	background-image: none;
}
.carousel-control.left {
	background-image: none;
}
.carousel-indicators .active {
	background-color: #EDBB00;
	border-color: #EDBB00;
}
.supporting {
    padding-top: 50px;
    background-color: rgba(0,128,0, 0.8);
    padding-bottom: 50px;
}
.supporting .col {
    font-family: 'Signika Negative', sans-serif;
    text-align: center;
    display: inline-table;
    height: 200px;
    width: 200px;
}
.supporting img {
    height: 32px;
}
.supporting h2 {
    font-weight: 600;
    font-size: 23px;
    text-transform: uppercase;
}
.supporting p {
    color: black;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    padding: 0 20px;
    margin-bottom: 20px;
}
.supporting a {
    background-color: white;
    color: #333333;
    font-family: 'Signika Negative', sans-serif;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1.3px;
    text-decoration: none;
    text-transform: uppercase;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8em;
    border: 2px solid black;
}
.btn1:hover{
    background-color: rgba(0,128,0, 1);
    color: white;
}

.btn2:hover{
    background-color: rgba(0,128,0, 1);
    color: white;
}

.btn3:hover{
    background-color: rgba(0,128,0, 1);
    color: white;
}
/*responsive css*/

@media only screen and (min-width: 480px) and (max-width: 991px) {
	.carousel-caption {
		padding-bottom: 350px;
	}
	.carousel-caption h2 {
		font-size: 50px;
	}
}
@media only screen and (max-width: 480px) {
	.navbar-inverse .navbar-brand {
		font-size: 30px;
		padding: 20px 15px;
	}
	.navbar-collapse {
		background: rgba(0, 0, 0, 0.5);
	}
	.carousel-caption {
		padding-bottom: 120px;
	}
	.carousel-caption h2 {
		font-size: 25px;
	}
	.carousel-caption h3 {
		font-size: 18px;
	}
	.carousel-caption a {
		padding: 10px 25px;
	}
    .dropbtn {
    color: white;
    background-color: transparent;
    padding: 14px;
    font-size: 15.3px;
    border: none;
    }
}
.dropbtn {
  color: white;
  font-family: 'Poppins', sans-serif;
  background-color: transparent;
  padding: 14px;
  font-weight: 700;
  font-size: 15.3px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(76, 88, 76, .7);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: transparent;}
</style>
</html>