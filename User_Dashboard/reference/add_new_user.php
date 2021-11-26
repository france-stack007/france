<?php
  include "header_admin.php";
  include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo_admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Add New User</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

<div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New User</h5>
        </div>

        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" name="firstname" aria-label="Small" aria-describedby="inputGroup-sizing-sm"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" name="lastname"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Username" name="username"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password" name="password"/>
              </div>
            </div>

            <div class="control-group">
                <label class="control-label">Select Role :</label>
                <div class="controls">
                    <select name="role" class="span11">
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
              <button type="submit" name="submit1" class="btn btn-success">Save</button>
            </div>
            
            <div class="alert alert-success" id="success" style="display: none;">
                    <strong>Success!</strong> Record Inserted Successfully.
            </div>
          </form>
        </div>
    </div>
    <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $res=mysqli_query($link,"SELECT * FROM user_registration");
                  while($row=mysqli_fetch_array($res))
                  {
                        echo "<tr>";
                        echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
                        echo "<td>"; echo $row["firstname"]; echo "</td>";
                        echo "<td>"; echo $row["lastname"]; echo "</td>";
                        echo "<td>"; echo $row["username"]; echo "</td>";
                        echo "<td>"; echo $row["password"]; echo "</td>";
                        echo "<td>"; echo $row["role"]; echo "</td>";
                        echo "<td>"; echo $row["status"]; echo "</td>";
                        echo "<td>"; ?> <a href="edit_user.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                        echo "<td>"; ?> <a href="delete_user.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
      </div>
<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $res=mysqli_query($link, "SELECT * FROM user_registration WHERE username='$_POST[username]'");
    $count=mysqli_num_rows($res);

    if($count>0)
    {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else{
      $tm=md5(time());
      $fnm=$_FILES["image1"]["name"];
      $dst="./img/".$tm.$fnm;
      $dst1="img/".$tm.$fnm;
      move_uploaded_file($_FILES["image1"]["tmp_name"], $dst);
      
      mysqli_query($link, "INSERT INTO user_registration VALUES(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[role]', 'Active', '$dst1')");
        ?>
        <script type="text/javascript">
            document.getElementById("error").style.display="none";
            document.getElementById("success").style.display="block";
            setTimeout(function(){
              window.location.href=window.location.href;
            }, 3000);
        </script>
        <?php
    }
}
?>
<style>
#header{
  background-image: url('./img/agriBack.jpg');
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</div>
<?php
include "footer.php"; 
?>