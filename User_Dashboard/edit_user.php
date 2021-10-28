<?php
include "header_admin.php";
include "connection.php";

$id=$_GET["id"];

$firstname="";
$lasttname="";
$username="";
$password="";
$role="";
$image="";

$res = mysqli_query($link,"SELECT * FROM user_registration WHERE id=$id");
while($row=mysqli_fetch_array($res))
{
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $username=$row["username"];
    $password=$row["password"];
    $role=$row["role"];
    $image=$row["image"];
}
?>

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo_admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Edit User</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

<div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit New User</h5>
        </div>

        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <img src="<?php echo $image;?>" height="100" width="100" style="margin-left: 200px;">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Username" name="username" value="<?php echo $username; ?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password" class="span11" placeholder="Enter Password" name="password" value="<?php echo $password; ?>"/>
              </div>
            </div>

            <div class="control-group">
                <label class="control-label">Select Role :</label>
                <div class="controls">
                    <select name="role" class="span11" value="<?php echo $role; ?>">
                        <option>User</option>
                        <option>Admin</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
              <label class="control-label">Image :</label>
              <div class="controls">
                <input type="file" class="form-control span11" name="image1"/>
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display: none;">
                    <strong>Warning!</strong> User Already Exist! Please Try Another.
            </div>
            
            <div class="form-actions">
              <button type="submit" name="update1" class="btn btn-success">Update</button>
            </div>
            
            <div class="alert alert-success" id="success" style="display: none;">
                <strong>Success!</strong> Record Inserted Successfully.
            </div>
          </form>
        </div>
    </div>
</div>

<?php

if(isset($_POST["update1"]))
{
    $tm=md5(time());
    $fnm=$_FILES["image1"]["name"];
      
    if($fnm=="")
    {
        mysqli_query($link, "update user_registration set firstname='$_POST[firstname]', lastname='$_POST[lastname]', username='$_POST[username]', password='$_POST[password]', role='$_POST[role]' WHERE id=$id");
    }
    else{
        $dst="./img/".$tm.$fnm;
        $dst1="img/".$tm.$fnm;
        move_uploaded_file($_FILES["image1"]["tmp_name"], $dst);

        mysqli_query($link, "update user_registration set firstname='$_POST[firstname]', lastname='$_POST[lastname]', username='$_POST[username]', password='$_POST[password]', role='$_POST[role]', image='$dst1' where id=$id");
    }
    ?>
    <script type="text/javascript">
    document.getElementById("error").style.display="none";
    document.getElementById("success").style.display="block";
    setTimeout(function(){
        window.location.href=window.location.href;
        window.location="add_new_user.php";
    }, 3000);
    </script>
    <?php
}
?>
</div>
<style>
#header{
  background-image: url('./img/agriBack.jpg');
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<?php
include "footer.php"; 
?>