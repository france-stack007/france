<?php
include "farmers_dash_header.php";
include "connection.php";
?>

<nav class="navbar navbar-light bg-light bg-primary fixed-top flex-md-nowrap p-50">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-nowrap" href="#" id="dash" style="color: green">Dashboard</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 0 0 20px" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
                <div class="vl" style="display: inline"></div>
                  Farmers
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
                        <a class="nav-link pl-10" href="farmers_dash_body.php" style="color: green">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="farmers_dash_profile.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                            Request Services</a>
                    </li>
                    <hr style="color: white">
                </ul>
            </div>
        </div>
    </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid green;
         padding: 15px 0 0 0; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.2)">
         <h3 style="margin-right: 130px">History Log</h3>
            <div>
                <label for="middlename">Program: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Program" required>
            </div>
            <div>
                <label for="middlename">Search name: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Search name" required>
            </div>
            <div>
                <label for="middlename">Barangay: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Barangay" required>
            </div>
            <div>
                <a href="#" id="printB"><button class="btn btn-success" style="margin: 0 10px 10px 0">PRINT</button></a>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-sm" id="tableSearch">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Request</th>
                    <th>Date Request</th>
                    <th>Commodity</th>
                    <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res=mysqli_query($link,"SELECT * FROM user_registration");
                    while($row=mysqli_fetch_array($res))
                    {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <a href="#" id="viewB"><button class="btn btn-success" style="width: 100%">Approved</button></a><?php echo "</td>";
                            echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
<?php
include "farmers_dash_footer.php";
?>