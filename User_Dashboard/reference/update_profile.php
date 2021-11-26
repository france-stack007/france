<?php
include "header.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="user_dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
            Update Profile</a></div>
    </div>
    
    <!--End-breadcrumbs-->

    <!--Action boxes-->
<div class="container-fluid">
    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-align-justify"></i> </span>
            <h5>Update Profile</h5>
            </div>

            <div class="widget-content nopadding">
            <form name="form1" action="" method="post" class="form-horizontal">
                <div class="control-group">
                <label class="control-label">First Name :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="First name" name="firstname"/>
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Last Name :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="Last name" name="lastname"/>
                </div>
                
                <div class="control-group">
                <label class="control-label">Username :</label>
                <div class="controls">
                    <input type="text" class="span11" placeholder="Username" name="username"/>
                </div>

                <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                    <input type="password"  class="span11" placeholder="Enter Password" name="password"/>
                </div>

                <div class="control-group">
                <label for="normal" class="control-label">Phone Number :</label>
                <div class="controls">
                    <input type="text" id="mask-phoneInt" class="span11 mask text">
                    <span class="help-block blue span11">+63 999 999 999</span> </div>
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
    </div>
</div>
<style>
#header{
  background-image: url('./img/agriBack.jpg');
  -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
</div>
<?php
include "footer.php";
?>