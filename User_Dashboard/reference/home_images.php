<?php
  include "header_admin.php";
  include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo_admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Update Home Images</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
          <div class="span12">
              <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Customized Home Images</h5>
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
                        echo "<td>"; ?> <a href="delete_img.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Delete</button></a> <?php echo "</td>";
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
<style>
.searchCon{
    display: flex;
}
#header{
  background-image: url('./img/agriBack.jpg');
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#myInput{
    margin: 6px 0px 0px auto;
    height: 30px;
    width: 300px;
}
</style>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableSearch");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }
</script>
</div>
<?php
include "footer.php";
?>