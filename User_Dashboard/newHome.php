<?php
session_start();
include "connection.php";
//$email = "";
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayala District City Agriculturist</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">-->
<body>
    
    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
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
                        <li><a href="#aboutUs">About us</a></li>
                        <li><a href="#" id="request">Request</a></li>
                        <li><a href="#home">Home</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">ACCOUNTS</button>
                            <div class="dropdown-content">
                              <a href="#" id="farmer" class="farmer">Farmer</a>
                              <a href="#" id="personnel" class="personnel">Personnel</a>
                              <a href="index_admin.php" class="admin">Admin</a>
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
            <div class="carousel-inner" role="listbox" id="home">
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
    <!-- POPUP LOG IN -->
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1" style="margin-bottom: 5px">
                <h1>Welcome Back!</h1>
                <p>Login to continue your account.</p>
                <form name="form" action="#" method="post" autocomplete="off">
                    <div class="input-box">
                        <i class="fas fa-envelope"></i><input type="text" placeholder="Username" class="popIn" name="username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-key"></i><input type="password" placeholder="Password" class="popIn" name="password" id="inPass" required>
                        <span class="eye" onclick="myFunction()">
                            <i id="hide1" class="fas fa-eye" style="cursor: pointer"></i>
                            <i id="hide2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                        </span>
                    </div>
                    <h5 class="forPass" id="forPass" style="cursor: pointer; font-weight: bolder; padding-top: 20px">Forgot your password?</h5>
                    <hr style="margin-top: 34px;">
                    <!--<a href="" class="loginB" id="loginB" style="position: relative; text-decoration: none; z-index: 1" name="login">LOGIN</a>-->
                    <input class="loginB" id="loginB" type="submit" name="login" value="LOGIN">
                    <!--<button class="loginB" id="loginB" type="submit" name="login" class="btn btn-success">Login</button>-->
                    <a href="" class="closeB" id="closeB" style="position: relative; text-decoration: none; z-index: 1; cursor: pointer">CLOSE</a>
                </form>
                <?php
                    if(isset($_POST["login"]))
                    {
                        $username=mysqli_real_escape_string($link, $_POST["username"]);
                        $password=mysqli_real_escape_string($link, $_POST["password"]);
                    
                        $count=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='user' && status='active'");
                        $count=mysqli_num_rows($res);
                        if($count>0){
                            ?>
                            <script type="text/javascript">
                                window.location="demo_admin.php";
                            </script>
                            <?php
                            echo $count;
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid username or password.
                                <script type="text/javascript">
                                    const popup = document.querySelector('.popup');
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popup.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="popup-child2">
                <img src="./img/Image.png" width="380" height="280" style="border-radius: 0.6em">
                <div class="regB">
                    <hr>
                    <label for="registerB">Don't have an account?</label>
                    <a href="" class="registerB" id="registerB" style="text-decoration: none; margin-bottom: 20px">Register</a>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP RESET PASSWORD -->
    <div class="popup-1">
        <div class="popup-content-1">
            <div class="popup-child1-1">
                <h1>Reset your password.</h1> <h3 class="xB-1" id="xB-1" style="position: absolute; top: 0px; right: 20px; cursor: pointer">X</h3>
                    <p>Enter a new password for your account.</p>
                    <form name="form1" action="#" method="post" autocomplete="off">
                        <div class="input-box">
                            <!--<i class="fas fa-mask" style="margin: 0 0 90px 170px; position: absolute"></i>--><input type="password" class="popInSession" value="<?php echo $_SESSION['login_user'];?>" name="username0" readonly>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-key"></i><input type="password" placeholder="New password" id="inPass1-1" class="popIn-1" name="newpass" required>
                            <span class="eye2" onclick="myFunction1()">
                                <i id="hide1-1" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-1" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <div class="input-box" style="margin-bottom: 15px">
                            <i class="fas fa-key"></i><input type="password" placeholder="Confirm new password" id="inPass1-2" class="popIn-1" name="c_newpass" required>
                            <span class="eye2" onclick="myFunction11()">
                                <i id="hide1-12" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-12" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <hr>
                        <!--<a href="" class="resetB-1" id="resetB-1" style="text-decoration: none" name="update1">CHANGE PASSWORD</a>-->
                        <input class="resetB-1" id="resetB-1" type="submit" name="update1" value="CHANGE PASSWORD">
                    </form>
                    <?php
                        if(isset($_POST['update1'])){
                            $password = mysqli_real_escape_string($link, $_POST['newpass']);
                            $cpassword = mysqli_real_escape_string($link, $_POST['c_newpass']);

                            if($password !== $cpassword){
                                ?>
                                <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Mismatched password entered .</div>
                                <script type="text/javascript">
                                    const popup3 = document.querySelector(".popup-1");
                                    window.onload = function(){
                                        setTimeout(function(){
                                            popup3.style.display = "flex";
                                        },1000)
                                    }
                                    //setTimeout("location.reload(true);",1000);
                                </script>
                                <?php
                            }else{
                                $username = mysqli_real_escape_string($link, $_POST['username0']);
                                $password = mysqli_real_escape_string($link, $_POST['newpass']);

                                mysqli_query($link, "UPDATE user_registration SET password='$password' WHERE username='$username'");
                                ?>
                                <div class="alert alert-success" style="margin-top: 10px">
                                <strong>Success!</strong> Your password has been changed.</div>
                                <script type="text/javascript">
                                    const popup3 = document.querySelector(".popup-1");
                                    const farmer = document.querySelector(".farmer");
                                    const personel = document.querySelector(".personnel");
                                    const admin = document.querySelector(".admin");
                                    window.onload = function(){
                                        setTimeout(function(){
                                            popup3.style.display = "flex";
                                            popup3.style.pointerEvents = "none";
                                            farmer.style.pointerEvents = "none";
                                            personel.style.pointerEvents = "none";
                                            admin.style.pointerEvents = "none";
                                        },1000)
                                        setTimeout(function(){
                                            popup3.style.display = "none";
                                            farmer.style.pointerEvents = "";
                                            personel.style.pointerEvents = "";
                                            admin.style.pointerEvents = "";
                                        },10000)
                                    }
                                    //setTimeout("location.reload(true);",1000);
                                </script>
                                <?php
                            }
                        }
                    ?>
            </div>
            <div class="popup-child2-1">
                <img src="./img/undraw_authentication_fsn5 1.png" width="420" height="320" style="border-radius: 0.6em">
            </div>
        </div>
    </div>

    <!-- POPUP FORGOT PASSWORD -->
    <div class="popup-2">
        <div class="popup-content-2">
            <div class="popup-child1-2" style="margin-top: 40px">
                <h1>Forgot your password?</h1><h3 class="xB-2" id="xB-2" style="position: absolute; top: 0px; right: 20px; cursor: pointer">X</h3>
                    <p>Enter your secretphrase to reset your password.</p>
                    <form name="form2" action="#" method="post" autocomplete="off">
                        <div class="input-box">
                            <i id="key" class="fas fa-mask"></i><input type="password" placeholder="Secretphrase" id="inPass2" class="popIn-2" name="username2" required>
                            <span class="eye2" onclick="myFunction2()">
                                <i id="hide1-2" class="fas fa-eye" style="cursor: pointer; display: none"></i>
                                <i id="hide2-2" class="fas fa-eye-slash" style="cursor: pointer"></i>
                            </span>
                        </div>
                        <hr style="margin-top: 30px;">
                        <!--<a href="" class="forB-2" id="forB-2" style="text-decoration: none" name="check">SEND EMAIL</a>-->
                        <input class="forB-2" id="forB-2" type="submit" name="check" value="CONFIRM">
                        <!--<a href="newHome.php?id=<?php echo $row["id"]; ?>"> <button class="forB-2" id="forB-2" type="button" class="btn btn-success">Edit</button></a>-->
                    </form>
                    <?php

                    if(isset($_POST["check"]))
                    {
                        $username2=mysqli_real_escape_string($link, $_POST["username2"]);
                        
                        $count2=0;
                        $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username2' && role='user' && status='active'");
                        $count2=mysqli_num_rows($res);
                        if($count2>0){
                            $_SESSION['login_user'] = $_POST['username2'];
                            $username = $_SESSION['username2'];
                            ?>
                            <script type="text/javascript">
                                const popup1 = document.querySelector(".popup-1");
                                window.onload = function(){
                                    if(!window.location.hash) {
                                        window.location = window.location + '#loader';
                                        window.location.reload();
                                    }
                                    setTimeout(function(){
                                        popup1.style.display = "flex";
                                    },800)
                                        
                                }
                                //setTimeout("location.reload(true);",1000);
                            </script>
                            <?php
                            echo $count2;
                        }
                        else{
                            ?>
                            <div class="alert alert-danger" style="margin-top: 10px">
                                <strong>Warning!</strong> Invalid Secretphrase contact the admin for <br> more details.
                                <script type="text/javascript">
                                    const popup2 = document.querySelector(".popup-2");
                                    window.onload = function(){
                                    setTimeout(function(){
                                        popup2.style.display = "flex";
                                        }, 1000)
                                    }
                                </script>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="popup-child2-2">
                <img src="./img/undraw_forgot_password_gi2d 1.png" width="380" height="280" style="border-radius: 0.6em">
            </div>
        </div>
    </div>

    <section class="supp">
        <div class="container" style="text-align: center;">
            <div>
                <h1>DATA-DRIVEN SOLUTION</h1>
            </div>
            <hr class="hr1">
            <div>
                <h3>INDUSTRIES</h3>
                <p>Our farm management software portfolio supports all stakeholders of agrified value chain<br>
                    Find out how we solve real-life challenges in your industry
                </p>
            </div>
        </div>
        <div class="parentCon">
            <div>
                <img src="./img/agriBack.jpg" width="400" height="auto" style="border-radius: 0.6em">
                <br>
                <center><button class="btn1">Learn more</button></center>
            </div>
            <div>
                <img src="./img/agriBack.jpg" width="400" height="auto" style="border-radius: 0.6em">
                <br>
                <center><button class="btn2">Learn more</button></center>
            </div>
            <div>
                <img src="./img/agriBack.jpg" width="400" height="auto" style="border-radius: 0.6em">
                <br>
                <center><button class="btn3" id="aboutUs">Learn more</button></center>
            </div>
        </div>
        <br>
        <br>
        <div class="container" style="text-align: center;">
            <div>
                <h1>THE STORY OF AYALA DISTRICT</h1>
                <h1>AGRICULTURIST</h1>
            </div>
            <hr class="hr2">
            <br>
            <br>
            <section class="parentCon1">
                <article class="column" >
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <article class="column" >   
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
            </section>
        </div>
        <br>
        <br>
        <div class="container" style="text-align: center;">
            <div>
                <h1>LEADERSHIP TEAM</h1>
            </div>
        </div>
        <hr class="hr3">
        <br>
        <br>
        <div class="gridParent">
            <div class="gridChild1">
                <img src="./img/prof1.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild2">
                <img src="./img/prof2.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild3">
                <img src="./img/prof3.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild4">
                <img src="./img/prof4.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild5">
                <img src="./img/prof4.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild6">
                <img src="./img/prof3.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild7">
                <img src="./img/prof2.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
            <div class="gridChild8">
                <img src="./img/prof1.jpg" width="250" height="auto" style="border-radius: 10em;">
                <div style="text-align: center;">
                    <h3>Name</h3>
                    <h5>Kimi No Yawa</h5>
                </div>
            </div>
        </div>
        <hr style="width: 1000px; background: green; border: 2px solid white; border-radius: 1em; margin-top: 80px">
        <div class="contact" id="contact">
            <div class="contact-form">
                <div class="container">
                 <form>
                  <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-12">
                     <h1>Get in Touch</h1> 
                   </div>
                   <div class="col-lg-8 col-md-8 col-sm-12 right">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control form-control-lg">
                        </textarea>
                      </div>
                      <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                   </div>
                  </div>
                 </form>
                </div>
               </div>
        </div>
      </section>
      <footer>
        <main>
            <div class="box1">
                <h3>LOGO</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box2">
                <h3>ABOUT</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box3">
                <h3>QUICK LINKS</h3>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="box4">
                <h4>RiseTech</h4>
            </div>
        </div>
        </main>
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
        function myFunction() {
            var x = document.getElementById("inPass");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction2() {
            var x = document.getElementById("inPass2");
            var y = document.getElementById("hide1-2");
            var z = document.getElementById("hide2-2");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction1() {
            var x = document.getElementById("inPass1-1");
            var y = document.getElementById("hide1-1");
            var z = document.getElementById("hide2-1");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        function myFunction11() {
            var x = document.getElementById("inPass1-2");
            var y = document.getElementById("hide1-12");
            var z = document.getElementById("hide2-12");

            if(x.type === 'password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }

        document.getElementById("forPass").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".popup-2").style.display = "flex";
        })

        document.getElementById("xB-2").addEventListener("click", function(){
            document.querySelector(".popup-2").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("xB-1").addEventListener("click", function(){
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("farmer").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup-2").style.display = "none";
        })

        document.getElementById("personnel").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup-2").style.display = "none";
        })

        document.getElementById("closeB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        })

</script>
</body>
</html>
<style>
html{
    /*filter: invert(0);*/
    scroll-behavior: smooth;
}
body {
	font-family: 'Poppins', sans-serif;
}
header .carousel-inner .item {
	height: 100vh;
}
.farmer{
    pointer-events: ;
}
.personnel{
    pointer-events: ;
}
.admin{
    pointer-events: ;
}
/*CONTACT SECTION*/
.contact-form{
 margin: 6em 0;
 position: relative;  
}

.contact-form h1{
 padding:2em 1px;
 color: #F97300; 
}
.contact-form .right{
 max-width: 600px;
}
.contact-form .right .btn-secondary{
 background:  #F97300;
 color: #fff;
 border:0;
}
.contact-form .right .form-control::placeholder{
 color: #888;
 font-size: 16px;
}
/*POPUP START*/
.popup{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content{
    height: auto;
    width: 800px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active{
    -webkit-box-shadow: 0 0 0 30px white inset !important;
}
input:focus, textarea:focus, select:focus{
    outline: none;
}
::placeholder{
    color: #ccc;
}
.input-box{
    display: flex;
    flex-direction: row;
}
.fas{
    position: absolute;
    margin: 0;
    padding: 33px 25px 0 0;
}
.eye{
    position: relative;
    padding-right: 10px;
}
.eye2{
    position: relative;
    padding-right: 40px;
}
#key{
    margin: 0;
    position: absolute;
    padding: 33px 0 0 30px;
}
#hide1{
    display: none;
}
.popIn{
    background-color: transparent;
    margin: 16px auto;
    display: relative;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup-1{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content-1{
    height: auto;
    width: 900px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popInSession{
    text-align: center;
    color: transparent;
    /*margin: 15px 0;*/
    margin: 0;
    padding: 0;
    width: 0;
    height: 0;
    background-color: transparent;
    display: relative;
    /*width: 90%;*/
    /*padding: 8px;*/
    /*margin-left: 20px;*/
    border: none;
}
.popIn-1{
    margin: 15px 0;
    background-color: transparent;
    display: relative;
    pointer-events: ;
    width: 90%;
    padding: 8px;
    margin-left: 20px;
    border: none;
    border-bottom: 2px solid black;
}
.popup-2{
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.popup-content-2{
    height: auto;
    width: 850px;
    background: white;
    display: flex;
    padding: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 5px;
    position: relative;
}
.popIn-2{
    margin: 20px auto;
    background-color: transparent;
    display: relative;
    width: 100%;
    padding: 8px;
    margin-left: 50px;
    border: none;
    border-bottom: 2px solid black;
}
.regB{
    margin-top: 0px;
}
.closeB, .loginB, .registerB, .resetB-1, .forB-2{
    color: green;
    display: inline;
	background: white;
	font-size: 12px;
	font-weight: bold;
	padding: 8px 20px;
	margin-right: 20px;
	border-radius: 20px;
	border: 2.5px solid green;
}
.closeB:hover, .loginB:hover, .registerB:hover, .resetB-1:hover, .forB-2:hover{
    background-color: green;
    border: 2.5px solid white;
    color: white;
}
/*NAV START*/
h1{
    font-weight: bold;
}
main{
    color: white;
    display: grid;
    grid-template-columns: 50% 25% 25%;
}
.box1{
    text-align: justify;
    padding: 0 5em 0 50px;
}
.box2{
    text-align: justify;
    padding: 0 5em 0 0;
}
.box3{
    text-align: justify;
    padding: 0 5em 0 0;
}
.box4{
    background-color: rgba(0,128,0, 1);
    margin-top: 50px;
    padding: 15px 0 15px 0;
    grid-column: 1/4;
}
.gridParent{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    justify-items: center;
    gap: 15px 10px;
}
.parentCon{
    max-width: 100%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}
.parentCon1{
    display: flex;
    padding-left: 60px;
}
article {
    text-align: justify;
    padding: 0 5em 0 0;
}
.supp{
    padding: 40px 0 40px 0;
    background-color: rgba(128,128,128, 0.2);
}
.btn1, .btn2, .btn3{
    color: green;
	background: white;
	font-size: 12px;
	font-weight: bold;
	padding: 8px 20px;
	margin: 20px;
	border-radius: 20px;
	border: 2.5px solid green;
	cursor: pointer;
}
.btn1:hover, .btn2:hover, .btn3:hover{
    background-color: green;
    border: 2.5px solid white;
    color: white;
}
.hr1, .hr2, .hr3{
    width: 500px;
    background: green;
    border: 2px solid green;
    border-radius: 1em;
}
footer{
    display: block;
    padding: 50px 0 0 0;
    background-color: rgba(0,128,0, 0.8);
    text-align: center;
}
.navbar-inverse {
	background-color: transparent;
	border-color: transparent;
}
.navbar-inverse .navbar-brand {
	color: #fff;
	font-size: 40px;
    background: linear-gradient(to left, rgb(0,255,0), rgb(0,128,0));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
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
@media only screen and (min-width: 380px) and (max-width: 991px) {
	.carousel-caption {
		padding-bottom: 350px;
	}
	.carousel-caption h2 {
		font-size: 50px;
	}
}
@media only screen and (max-width: 380px) {
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
  /*background-color: rgba(76, 88, 76, 0.3);*/
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