<?php
include "header.php";
include "connection.php";
if(isset($_SESSION["user"])){
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="user_dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Dashboard</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid" >
    <div class="row-fluid " style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="container-fluid ">
            <div class="card" style="width: 15rem; border-style: solid; border-width: 5px; border-radius: 10px; float: left">  
                <div class="card-body">
                    <h3 class="card-title text-center">No of Users Registered</h3>
                    <h1 class="card-text text-center">
                        <?php
                            $count=0;
                            $res=mysqli_query($link,"SELECT * FROM user_registration");
                            $count=mysqli_num_rows($res);
                            echo $count;
                        ?>
                    </h1>
                </div>
            </div>
            <div class="card" style="width: 15rem; border-style: solid; border-width: 5px; border-radius: 10px; float: left; margin-left: 5px">  
                <div class="card-body">
                    <h3 class="card-title text-center">No of Services Availed</h3>
                    <h1 class="card-text text-center">
                        5
                    </h1>
                </div>
            </div>
            <div class="card" style="width: 15rem; border-style: solid; border-width: 5px; border-radius: 10px; float: left; margin-left: 5px">  
                <div class="card-body">
                    <h3 class="card-title text-center">No of Company Registered</h3>
                    <h1 class="card-text text-center">
                        1
                    </h1>
                </div>
            </div>
            <div class="card" style="width: 15rem; height: 9.4rem; border-style: solid; border-width: 5px; border-radius: 10px; float: left; margin-left: 5px">  
                <div class="card-body">
                    <h3 class="card-title text-center">Total Products</h3>
                    <h1 class="card-text text-center">
                        0
                    </h1>
                </div>
            </div>
        </div>
        <br>
        <div class="searchCon">
            <h2>Ayala District City Agriculturist</h2> 
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Service.." title="Type in a name">
        </div>
        <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="tableSearch">
                    <thead>
                      <tr>
                        <th>Request ID</th>
                        <th>Company</th>
                        <th>Service</th>
                        <th>Date Ordered</th>
                        <th>Location</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1,001</td>
                        <td>Ayala Agriculture</td>
                        <td>Soil Sampling</td>
                        <td>9/26/2021</td>
                        <td>Ayala, Zone 5</td>
                      </tr>
                      <tr>
                        <td>1,002</td>
                        <td>Ayala Agriculture</td>
                        <td>Financial Assistance</td>
                        <td>9/24/2021</td>
                        <td>Ayala, Zone 5</td>
                      </tr>
                      <tr>
                        <td>1,003</td>
                        <td>Ayala Agriculture</td>
                        <td>Soil Sampling</td>
                        <td>9/26/2021</td>
                        <td>Ayala, Zone 5</td>
                      </tr>
                      <tr>
                        <td>1,004</td>
                        <td>Ayala Agriculture</td>
                        <td>Soil Sampling</td>
                        <td>9/26/2021</td>
                        <td>Ayala, Zone 5</td>
                      </tr>
                      <tr>
                        <td>1,005</td>
                        <td>Ayala Agriculture</td>
                        <td>Soil Sampling</td>
                        <td>9/26/2021</td>
                        <td>Ayala, Zone 5</td>
                      </tr>
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
@media (max-width: 480px){
  #user-nav {
    margin: 0px auto;
    top: -31px;
    border-top: none;
    width: 250px;
    left: -3%;
    text-align: center;
    float: none;
  }
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
            td = tr[i].getElementsByTagName("td")[2];
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