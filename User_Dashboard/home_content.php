<?php
    include "header_admin.php";
    include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo_admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Update Home Content</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

<div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Customize Home Contents</h5>
        </div>

        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            
           <div class="control-group">
                <label class="control-label">First Slide 1st Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="1st Paragraph" name="firsttag1"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">First Slide 2nd Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="2nd Paragraph" name="firsttag2"/>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Second Slide 1st Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="1st Paragraph" name="secondtag1"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Second Slide 2nd Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="2nd Paragraph" name="secondtag2"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Third Slide 1st Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="1st Paragraph" name="thirdtag1"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Third Slide 2nd Tag :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="2nd Paragraph" name="thirdtag2"/>
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
                  <th>content1.1</th>
                  <th>content1.2</th>
                  <th>content2.1</th>
                  <th>content2.2</th>
                  <th>content3.1</th>
                  <th>content3.2</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $res=mysqli_query($link,"SELECT * FROM home_content");
                  while($row=mysqli_fetch_array($res))
                  {
                        echo "<tr>";
                        echo "<td>"; echo $row["content1.1"]; echo "</td>";
                        echo "<td>"; echo $row["content1.2"]; echo "</td>";
                        echo "<td>"; echo $row["content2.1"]; echo "</td>";
                        echo "<td>"; echo $row["content2.2"]; echo "</td>";
                        echo "<td>"; echo $row["content3.1"]; echo "</td>";
                        echo "<td>"; echo $row["content3.2"]; echo "</td>";
                        echo "<td>"; ?> <a href="delete_content.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
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
<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link, "INSERT INTO home_content VALUES(NULL, '$_POST[firsttag1]', '$_POST[firsttag2]', '$_POST[secondtag1]', '$_POST[secondtag2]', '$_POST[thirdtag1]', '$_POST[thirdtag2]')");
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
</div>
<?php
include "footer.php";
?>