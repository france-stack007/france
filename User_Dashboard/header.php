<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header">

    <h2 style="color: white;position: absolute">
        <a href="user_dashboard.php" style="color:white; margin-left: 30px; margin-top: 40px">Dashboard</a>
    </h2>
</div>

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i
                    class="icon icon-user"></i> <span class="text" >Welcome <?php echo $_SESSION['login_user']; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="user_profile.php"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="index.php"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-menu-->

<div id="sidebar">
    <ul>
        <li class="active">
            <a href="user_dashboard.php"><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>
        <li>
            <a href="user_profile.php"><i class="icon icon-user"></i><span>Profile</span></a>
        </li>
        <li>
            <a href="update_profile.php"><i class="icon icon-user"></i><span>Update Profile</span></a>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i><span>Forms</span> <span
                class="label label-important">1</span></a>
            <ul>
                <li><a href="request.php">Request Services Form</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--sidebar-menu-->
<div id="search">
        <a href="index.php" style="color:white"><i class="icon icon-share-alt"></i><span>Log Out</span></a>
</div>