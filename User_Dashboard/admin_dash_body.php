<?php
include "admin_dash_header.php";
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
                  Admin
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
                        <a class="nav-link pl-10" href="admin_dash_body.php" style="color: green">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dash_profile.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_register_coordinator.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0 20px 0 0" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Register Coordinator</a>
                    </li>
                    <hr style="color: white">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="display: inline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin: 0; padding: 0; text-align: center" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                            <div class="dropdown" style="display: inline">
                                <a href="#" class="dropbtn" style="text-decoration: none; color: white">Settings</a>
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
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1">
                <div class="col-md-4 well" id="leftPanel" style="padding: 5px">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail" style="border-radius: 10em; margin-top: 15px">
                                    <h2>Jethro Guerrero</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning" >
                                            High Value Crops</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-8 well" id="rightPanel" style="margin-top: 10px;">
                    <form role="form">
                        <h2>Personnels profile</h2>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                    <label for="first_name">Firstname</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" style="text-align: center" value="Jethro" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                <label for="last_name">Lastname</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" style="text-align: center" value="Guerrero" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin: 10px 0 10px;">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control input-lg" tabindex="4" style="text-align: center" value="jeth2x@yahoo.edu.ph" readonly>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" style="text-align: center" value="red_Pink321" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                    <label for="password_confirmation">Address</label>
                                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" style="text-align: center" value="Ayala Zone 3, Zamboanga City" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                    <label for="password">Birthdate</label>
                                    <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" value="03/19/1999" style="text-align: center" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                <div class="form-group">
                                    <label for="password_confirmation">Date Created</label>
                                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" style="text-align: center" value="11/26/2021 | 7:32PM" readonly>
                                </div>
                            </div>
                        </div>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="row">
                        </div>
                    </form>
                </div>
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid green;
         padding: 15px 0 0 0; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.2)">
         <h3 style="margin-right: 0px">Personnels History Log</h3>
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
                <a href="#" id="printB"><button class="btn btn-success" style="margin: 0 10px 10px 0;">PRINT</button></a>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-sm" id="tableSearch">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Position</th>
                    <th>Program</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <!-- <th>Commodity</th>
                    <th>Size(HA)</th>
                    <th>Barangay</th>
                    <th>Contact Number</th> -->
                    <!-- <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res=mysqli_query($link,"SELECT * FROM user_registration");
                    while($row=mysqli_fetch_array($res))
                    {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
                            echo "<td>"; echo $row["lastname"]; echo "</td>";
                            echo "<td>"; echo $row["firstname"]; echo "</td>";
                            //echo "<td>"; echo $row["username"]; echo "</td>";
                            //echo "<td>"; echo $row["password"]; echo "</td>";
                            //echo "<td>"; echo $row["role"]; echo "</td>";
                            //echo "<td>"; echo $row["status"]; echo "</td>";
                            echo "<td>"; echo $row["username"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <a href="#" id="viewB"><button class="btn btn-success" style="width: 100%">View</button></a><?php echo "</td>";
                            echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
<?php
include "admin_dash_footer.php";
?>