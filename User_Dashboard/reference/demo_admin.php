<?php
include "header_admin.php";
include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo_admin.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid" style="position: relative">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px" >
            <div class="searchCon">
                <h2>Farmers Section</h2>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            </div>
          <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tableSearch">
                    <thead>
                  <tr>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $res=mysqli_query($link,"SELECT * FROM user_registration");
                    while($row=mysqli_fetch_array($res))
                    {
                          echo "<tr>";
                          echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100" style="display: block; margin-left: auto; margin-right: auto"> <?php echo "</td>";
                          echo "<td>"; echo $row["firstname"]; echo "</td>";
                          echo "<td>"; echo $row["lastname"]; echo "</td>";
                          echo "<td>"; echo $row["username"]; echo "</td>";
                          echo "<td>"; echo $row["password"]; echo "</td>";
                          echo "<td>"; echo $row["role"]; echo "</td>";
                          echo "<td>"; echo $row["status"]; echo "</td>";
                          echo "</tr>";
                    }
                  ?>
                </tbody>
                    </table>
                  </div>
                </main>
              </div>
          </div>
      </div>
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
<script type="text/javascript">
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
    function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
</script>
</div>
<?php
include "footer.php";
?>