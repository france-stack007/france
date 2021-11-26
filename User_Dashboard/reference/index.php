<?php
include "connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Agriculture Management System</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/matrix-login.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox" style="margin-top: 250px;">
    <form name="form1" class="form-vertical" action="" method="post">
        <div class="control-group normal_text"><h3>Login Page</h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text"
                                                                                       placeholder="Username" name="username" required/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password"
                                                                                      placeholder="Password" name="password" required/>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <input type="submit" name="submit1" value="Login" class="btn btn-success">
            <!--<a type="submit1" name="submit1" value="Login" class="btn btn-success">!-->
            
            <span class="pull-right"><a href="newHome.php" class="flip-link btn btn-info" id="">Back To Home?</a></span>
        </div>
    </form>
    <?php
        if(isset($_POST["submit1"]))
        {
            $username=mysqli_real_escape_string($link, $_POST["username"]);
            $password=mysqli_real_escape_string($link, $_POST["password"]);
           
            $count=0;
            $res=mysqli_query($link,"SELECT * FROM user_registration WHERE username='$username' && password='$password' && role='user' && status='active'");
            $count=mysqli_num_rows($res);
            if($count>0){
                $_SESSION['login_user'] = $_POST['username'];
                ?>
                <script type="text/javascript">
                    window.location="user_dashboard.php";
                </script>
                <?php
                echo $count;
            }
            else{
                ?>
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Invalid username or password, or account blocked by the admin.
                </div>
                <?php
            }
        }
    ?>
</div>
<style>
body{
    background-image: url('./img/agriBack.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>
</body>

</html>