<?php
include "header.php";
session_start();
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <div class="searchCon">
                <h2>Section title</h2> 
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Service.." title="Type in a name">
            </div>
        <div class="table-responsive">
                  <table class="table table-striped table-sm" id="tableSearch">
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