<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Cleaning Management HRIS</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="robots" content="all,follow">
          <!-- Bootstrap CSS-->
          <link rel="stylesheet" href="vendorbootstrap/bootstrap/css/bootstrap.min.css">
          <!-- Font Awesome CSS-->
          <link rel="stylesheet" href="vendorbootstrap/font-awesome/css/font-awesome.min.css">
          <!-- Fontastic Custom icon font-->
          <link rel="stylesheet" href="css/fontastic.css">
          <!-- Google fonts - Roboto -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
          <!-- jQuery Circle-->
          <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
          <!-- Custom Scrollbar-->
          <link rel="stylesheet" href="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
          <!-- theme stylesheet-->
          <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
          <!-- Custom stylesheet - for your changes-->
          <link rel="stylesheet" href="css/custom.css">
          <!-- Favicon-->
          <link rel="shortcut icon" href="css/faviconlogo.ico">
          <!-- Tweaks for older IEs--><!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <body>
          <!-- Side Navbar -->
          <nav class="side-navbar">
            <div class="side-navbar-wrapper">
              <!-- Sidebar Header    -->
              <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img src="img/avatar-11.jpg" alt="person" class="img-fluid rounded-circle">
                  <h2 class="h5">Michael Scott</h2><span>Branch Manager</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="/EmployeeDatabase/EmployeeManagerMenu.html"> <i class="icon-home"></i>Home                             </a></li>
                  <li><a href="/EmployeeDatabase/EmployeeDatabase.php"> <i class="fa fa-users"></i>Employee Database
                    <li><a href="#LocationManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-map-marker"></i>Location Manager</a>
                    <ul id="LocationManager" class="collapse list-unstyled ">
                      <li><a href="/LocationManager/LocationView.php">Location</a></li>
                      <li><a href="/LocationManager/Roaster.php">Assign Employees</a></li>
                      <li><a href="/LocationManager/DisplayDuty.php">Duty Roster</a></li>
                    </ul> 
                    </li>                            
                  <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll Manager</a>
                  <ul id="PayrollManager" class="collapse list-unstyled ">
                      <li><a href="/Payroll/PayrollMenu.php">Payroll</a></li>
                      <li><a href="/Payroll/PayrollSettings.php">Payroll Settings</a></li>
                      <li><a href="/Payroll/AdminClaims.php">Claims</a></li>
                    </ul>
                  </li>
                  <li><a href="tables.html"> <i class="fa fa-area-chart"></i>Dashboard                             </a></li>
                  <li><a href="#Smartapp" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-mobile"></i>Smart App</a>
                    <ul id="Smartapp" class="collapse list-unstyled ">
                      <li><a href="/loginsystem/view.php">Attendance</a></li>
                      <li><a href="/App/reports.php">Reports</a></li>
                      <li><a href="/App/" download="app-release.apk">APK Download</a></li>
                    </ul>
                  </li>
              </div>
          </nav>
          <div class="page">
            <!-- navbar-->
            <header class="header">
              <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>CLEANING MANAGEMENT SYSTEM</span><strong class="text-primary"> HRIS</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                      <!-- Notifications dropdown-->
                      <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>10 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Log out-->
                      <li class="nav-item"><a href="/Users/SignIn.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
<!-- Header Section-->
<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
<!-- JavaScript files-->
<script src="vendorbootstrap/jquery/jquery.min.js"></script>
<script src="vendorbootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendorbootstrap/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendorbootstrap/chart.js/Chart.min.js"></script>
<script src="vendorbootstrap/jquery-validation/jquery.validate.min.js"></script>
<script src="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/charts-home.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>

<script>  
$(document).ready(function(){  
var i=1;  
$('#add').click(function(){  
i++;  
$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Block Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
});  
$(document).on('click', '.btn_remove', function(){  
var button_id = $(this).attr("id");   
$('#row'+button_id+'').remove();  
});   
});  

//Remove current available place
function myFunction() {
  var myobj = document.getElementById("name");
  myobj.remove();  

  var myobjdelete = document.getElementById("remove");
  myobjdelete.remove(); 

}


</script>

<style>

table {
  border-collapse: collapse;
  width: auto;
  color: #D5DBDF;
  font-family: serif;
  font-size: 15px;
  text-align: center;
  }
  
  th {
  background-color: #475056 ;
  color: white;
  font-size: 16px;
  }
  tr:nth-child(even) {background-color: #D5DBDF}

  .bottom-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-60%); 
        } 
          


#wrapper
{
  width:995px;
  padding:0px;
  margin:0px auto;
  font-family:helvetica;
  text-align:center;
}

</style> 

<body>

    <?php
   $token = $_GET['token'];

   include('GFirestore.php');
   $data = new Firestore('LocationRegistar');
   $result = $data->getDocument($token);

   ?>

     <div class="container">  
            <div class="form-group">
    <form action = "UpdateLocation.php" method="POST" name="add_name" id="add_name">

    <div class="table-responsive">  
            <table class="table table-borderedless-light" id="dynamic_field">  


    <!--Location Name-->
    <div class="left">
    <label>Location Name : </label></div>
    <div class="right">
    <input type="text" id="LocationName" name="LocationName" value = "<?php echo $result['LocationName'];?>" size="30" /></div> <br> <br>

    <!--Location Address-->
    <div class="left">
        <label>Location Address:</label> </div>
        <div class="right">
        <textarea cols="80" rows="3" value="Address" name="Address"><?php echo $result['Address'];?>
        </textarea></div>
        <br> </br>

    <!--Working Hours-->
    <div class="left">
        <label>Working Hours :</label></div>
        <div class="right">
        <select name="workingHours">
        <option value="<?php echo $result['workingHours'];?>"><?php echo $result['workingHours'];?></option>
        <option value="7:00AM-4:00PM">7:00AM-4:00PM</option>
        <option value="8:00AM-5:00PM">8:00AM-5:00PM</option>
        <option value="9:00AM-6:00PM">9:00AM-6:00PM</option>
        <option value="10:00AM-7:00PM">10:00AM-7:00PM</option>
        </select></div><br></br> 

    <!--Client Name-->
    <div class="left">
        <label>Clients Name : </label></div>
        <div class="right">
        <input type="text" id="ClientName" name="ClientName" value = "<?php echo $result['ClientName'];?>" size="30" /></div> <br> <br>

    <!--Client Phone Number-->
    <div class="left">
    <label>Client Phone Number : </label></div>
    <div class="right">
    <input type="number" name="ClientPhone" value = "<?php echo $result['ClientPhone'];?>" min="1" maxlength="20" size="1"/> </div> 
    <br></br>

    <!--Hidden Location ID Field-->
    <div class="left">
    <input type="hidden" id="LocationID" name="LocationID" value="<?php echo $result['LocationID'];?>">
    </div>


<!-- Get Blocks -->
<div class="left">
<label>Block Names</label> 
<?php $y= 0; foreach($result['Block'] as $rows){ $y++; ?>
<input type="text" name="name[]" id = "name" placeholder="Maluri" class="form-control name_list" value = " <?php echo $rows ?>" /> 
<button type="button" name="remove" id="remove" class="btn btn-danger btn_remove" onclick="myFunction()" >X</button>
<?php } ?>

<!-- Add more Blocks -->
<button type="button" name="add" id="add" class="btn btn-success">Add More</button>
</div> 

<br></br>

    <!--Buttons-->
    <div class="center">
        <button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
         &nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-danger" value="cancel" onclick="window.location.href='LocationView.php';">Cancel</button></div>
        </form>
    </body>
    </html>
    </table>
    </div>
    </div>
    </table>
    </div>
