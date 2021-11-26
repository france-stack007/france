<?php
include "dash_header.php";
include "connection.php";
?>

<nav class="navbar navbar-light bg-light bg-primary fixed-top flex-md-nowrap p-50">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-nowrap" href="#" id="dash" style="color: green">Homepage Settings</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 0 0 20px" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
                <div class="vl" style="display: inline"></div>
                  Personnel
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 0 0 20px" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </a>
            </li>
        </ul>
</nav>

<div class="parentCon">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-dark d-none d-md-block sidebar shadow">
                <div class="left-sidebar"></div>
                <ul class="nav flex-column sidebar-nav">
                    <li class="nav-item" style="padding: 0 0 25px 35px">
                        <h2 class="nav-link" style="color: green; display: inline; padding: 0">Agri</h2><h2 class="nav-link" style="display: inline; padding: 0">culture</h2>
                    </li>
                    <hr style="color: white">
                    <li class="nav-item ">
                        <a class="nav-link pl-10" href="dash_body.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_profile_personnel.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_farmers_request.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Farmers Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_farmers_reg_request.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Farmers Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_approved_panel.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Approved Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_add_farmer.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Add Farmer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_farmers_list.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>
                        Farmers List</a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-item">
                        <a class="nav-link" href="dash_farmers_list.php" style="display: inline; color: green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0; padding: 0; text-align: center" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                            <div class="dropdown" style="display: inline">
                                <a href="#" class="dropbtn" style="text-decoration: none; color: green">Settings</a>
                                <div class="dropdown-content" style="text-align: center">
                                    <a href="dash_home_imgs.php" id="farmer" class="farmer" style="text-decoration: none; display: block">Change Home Image</a>
                                    <a href="dash_home_contents.php" class="admin" style="text-decoration: none; display: block">Change Home Content</a>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h3>Customize Home Images</h3>
        <hr>
        <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 600px; padding:10px;">
          <div class="span12">
              <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            </div>
            <div class="widget-content nopadding">
              <form name="form1" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
  
                <div class="control-group">
                  <label class="control-label">Image 1:</label>
                  <div class="controls">
                    <input type="file" class="form-control span11" name="img1"/>
                  </div>
                </div>
                
                <div class="control-group">
                  <label class="control-label">Image 2:</label>
                  <div class="controls">
                    <input type="file" class="form-control span11" name="img2"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Image 3:</label>
                  <div class="controls">
                    <input type="file" class="form-control span11" name="img3"/>
                  </div>
                </div>

                <div class="alert alert-danger" id="error" style="display: none;">
                    <strong>Warning!</strong> User Already Exist! Please Try Another.
                </div>
                
                <div class="form-actions" style="display: flex; justify-content: center; margin: 20px">
                    <button type="submit" name="submit1" class="btn btn-success" style="width: 25%">Save</button>
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
                  <th>Image 1</th>
                  <th>Image 2</th>
                  <th>Image 3</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $res=mysqli_query($link,"SELECT * FROM home_imgs");
                  while($row=mysqli_fetch_array($res))
                  {
                        echo "<tr>";
                        echo "<td>"; ?> <img src="<?php echo $row["image1"]; ?>" height="200" width="200"> <?php echo "</td>";
                        echo "<td>"; ?> <img src="<?php echo $row["image2"]; ?>" height="200" width="200"> <?php echo "</td>";
                        echo "<td>"; ?> <img src="<?php echo $row["image3"]; ?>" height="200" width="200"> <?php echo "</td>";
                        echo "<td>"; ?> <a href="delete_img.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <?php
        if(isset($_POST["submit1"]))
        {
            $tm1=md5(time());
            $tm2=md5(time());
            $tm3=md5(time());

            $fnm1=$_FILES["img1"]["name"];
            $fnm2=$_FILES["img2"]["name"];
            $fnm3=$_FILES["img3"]["name"];

            $dst1="./img/".$tm1.$fnm1;
            $dst2="./img/".$tm2.$fnm2;
            $dst3="./img/".$tm3.$fnm3;

            $dstOne="img/".$tm1.$fnm1;
            $dstTwo="img/".$tm2.$fnm2;
            $dstThree="img/".$tm3.$fnm3;

            move_uploaded_file($_FILES["img1"]["tmp_name"], $dstOne);
            move_uploaded_file($_FILES["img2"]["tmp_name"], $dstTwo);
            move_uploaded_file($_FILES["img3"]["tmp_name"], $dstThree);
            
            mysqli_query($link, "INSERT INTO home_imgs VALUES(NULL, '$dstOne', '$dstTwo', '$dstThree')");
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
        ?>
    </main>
</div>

<?php
include "dash_footer.php";
?>