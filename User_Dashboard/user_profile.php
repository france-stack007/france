<?php
include "header.php";
include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="user_dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            User Profile</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <div class="container">
                <div class="wrapper">
                    <?php
                        $req=mysqli_query($link, "SELECT * FROM user_registration WHERE
                        username='$_SESSION[login_user]'");
                    ?>
                    <h2 style="text-align: center;">User Profile</h2>
                    <?php
                        $row=mysqli_fetch_assoc($req);
                        //echo "<div style='text-align: center'><img class='img-circle profile-img' height=110 width=120 src='img/user_icon.png'>
                        //</div>";
                        echo "<div style='text-align: center'>"; ?> <img src="<?php echo $row["image"]; ?>" height="110" width="120" class="img-circle profile-img"> <?php echo "<div>";
                    ?>
                    <div style="text-align: center;"><b>Welcome, </b>
                        <h4>
                            <?php echo $row['firstname']; ?>
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <?php
                        echo "<b>";
                            echo "<table class='table table-bordered table-striped table-sm'>";
                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b> First Name: </b>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row['firstname'];
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b> Last Name: </b>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row['lastname'];
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b> Username: </b>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row['username'];
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b> Role: </b>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row['role'];
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                    echo "<td>";
                                        echo "<b> Status: </b>";
                                    echo "</td>";

                                    echo "<td>";
                                        echo $row['status'];
                                    echo "</td>";
                                echo "</tr>";
                                
                            echo "</table>";
                        echo "</b>";    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
.wrapper{
    width: 400px;
    margin: 0 auto;
    color: black;
    /*background-color: grey;*/
    /*border: solid black;
    /*border-radius: 2rem;*/
    /*border-width: 5px;*/
}
#header{
  background-image: url('./img/agriBack.jpg');
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
</div>
<?php
include "footer.php";
?>