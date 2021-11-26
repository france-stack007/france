<?php
include "dash_header.php";
include "connection.php";
?>

<nav class="navbar navbar-light bg-light bg-primary fixed-top flex-md-nowrap p-50">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-nowrap" href="#" id="dash" style="color: green">Farmers Request Services</a>
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
                        <a class="nav-link" href="dash_farmers_request.php" >
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
                        <a class="nav-link" href="dash_add_farmer.php" style="color: green">
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
                        <a class="nav-link" href="dash_farmers_list.php" style="display: inline">
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

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="popup3" style="background-color: rgba(0,128,0, 0.2); padding: 20px; border-radius: 2em; margin: 0 0 20px 0">
            <div class="popup-content3">
                <div class="popup-child1-3" style="display: flex; flex-direction: column; flex-wrap: wrap;">
                    <h1>Create Farmers Account</h1>
                    <hr style="width: 400px; background: black; border: 2px solid black; border-radius: 1em; margin-left: 35px">
                    <label for="selectD">Register for </label>
                    <select class="selectD" style="width: 100%; height: auto; margin-bottom: 20px; padding: 5px; background-color: transparent; border-radius: 3px">
                        <option selected>Choose Services</option>
                        <option value="1">High Value Crop</option>
                        <option value="2">Rice Crop</option>
                        <option value="2">Corn</option>
                    </select>
                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Lastname</label>
                                <input class="inputC" type="text" name="surname" placeholder="Surname" required>
                            </div>
                            <div>
                            <label for="firstname">Firstname </label>
                                <input class="inputC" type="text" name="firstname" placeholder="Firstname" required>
                            </div>
                            <div>
                            <label for="middlename">Middlename</label>
                                <input class="inputC" type="text" name="middlename" placeholder="Middlename" required>
                            </div>
                        </div>

                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Stree/Subdiv/Sitio </label>
                                <input class="inputC" type="text" name="surname" placeholder="Stree/Subdiv/Sitio" required>
                            </div>
                            <div>
                            <label for="firstname">Barangay</label>
                                <input class="inputC" type="text" name="firstname" placeholder="Barangay" required>
                            </div>
                            <div>
                            <label for="middlename">Municipality</label>
                                <input class="inputC" type="text" name="middlename" placeholder="Municipality" required>
                            </div>
                        </div>

                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Province </label>
                                <input class="inputC" type="text" name="surname" placeholder="Province" required>
                            </div>
                            <div>
                            <label for="firstname">Zipcode</label>
                                <input class="inputC" type="text" name="firstname" placeholder="Zipcode" required>
                            </div>
                            <div>
                            <label for="middlename">Contact No.</label>
                                <input class="inputC" type="number" name="middlename" placeholder="Contact No." required>
                            </div>
                        </div>

                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Place of Birth</label>
                                <input class="inputC" type="text" name="surname" placeholder="Place of Birth" required>
                            </div>
                            <div>
                            <label for="firstname">Civil Status</label>
                                <input class="inputC" type="text" name="firstname" placeholder="Civil Status" required>
                            </div>
                            <div>
                            <label for="middlename">Region</label>
                                <input class="inputC" type="text" name="middlename" placeholder="Region" required>
                            </div>
                        </div>

                        <div class="inputG" style="display: flex; justify-content: space-evenly; flex-wrap: wrap">
                            <div class="inputC">
                                <label for="start">Date of Birth</label>
                                <input type="date" id="start" name="trip-start"
                                    value="2000-01-01"
                                    min="1900-01-01" max="2050-12-31" class="inputC">
                            </div>
                            <div class="inputC">
                            <label for="selectD">Sex</label>
                            <select class="inputC">
                                <option selected>Choose Sex</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>

                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Province </label>
                                <input class="inputC" type="text" name="surname" placeholder="Province" required>
                            </div>
                            <div>
                            <label for="firstname">Zipcode</label>
                                <input class="inputC" type="text" name="firstname" placeholder="Zipcode" required>
                            </div>
                            <div>
                            <label for="middlename">Contact No.</label>
                                <input class="inputC" type="number" name="middlename" placeholder="Contact No." required>
                            </div>
                        </div>
                        
                        <div class="inputG" style="display: flex; gap: 20px; justify-content: space-evenly; flex-wrap: wrap">
                            <div>
                            <label for="surname">Province </label>
                                <input class="inputC" type="text" name="surname" placeholder="Province" required>
                            </div>
                            <div>
                            <label for="firstname">Zipcode</label>
                                <input class="inputC" type="text" name="firstname" placeholder="Zipcode" required>
                            </div>
                            <div>
                            <label for="middlename">Contact No.</label>
                                <input class="inputC" type="number" name="middlename" placeholder="Contact No." required>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="popup-child2-3" style="display: flex; justify-content: center; flex-wrap: wrap">
                    <button class="btn btn-success" style="width: 70%">Submit</button>
                </div>
            </div>
        </div>
    </main>
<style>
.inputC{
    width: 100%; 
    height: auto; 
    padding: 5px;
    margin-bottom: 20px;
    background-color: transparent;
    border-radius: 3px;
}
label {
    display: block;
    font-weight: 200;
    font: 1rem 'Fira Sans', sans-serif;
}
input, label {
    margin: .4rem 0;
}
</style>
</div>

<?php
include "dash_footer.php";
?>