<!DOCTYPE html>
<html lang="en">
<head>


<?php
include('session.php');
?>


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
          <link rel="shortcut icon" href="/css/faviconlogo.ico">
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
                  <h2 class="h5"><?php echo $usernameadmin;?></h2><span>Administrator</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="EmployeeManagerMenu.php"> <i class="icon-home"></i>Home                             </a></li>
                  <li><a href="EmployeeDatabase.php"> <i class="fa fa-users"></i>Employee Database                 </a></li>
                  <li><a href="manageleaves.php"> <i class="fa fa-calendar"></i>Manage Leaves                </a></li>
                    <li><a href="#LocationManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-map-marker"></i>Location Manager</a>
                    <ul id="LocationManager" class="collapse list-unstyled ">
                      <li><a href="/LocationManager/LocationView.php">Location</a></li>
                      <li><a href="/LocationManager/Roaster.php">Assign Employees</a></li>
                      <li><a href="/LocationManager/DisplayDuty.php">Duty Roster</a></li>
                    </ul> 
                    </li>                            </a></li>
                    <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll Manager</a>
                      <ul id="PayrollManager" class="collapse list-unstyled ">
                          <li><a href="/Payroll/PayrollMenu.php">Payroll</a></li>
                          <li><a href="/Payroll/PayrollSettings.php">Payroll Settings</a></li>
                          <li><a href="/Payroll/AdminClaims.php">Claims</a></li>
                        </ul>
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
<!-- Ajax google api -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Main File-->
<script src="js/front.js"></script>

<style>


</style>

<body>

 <?php
   $token = $_GET['token'];

   
   $data = new Firestore('EmployeeRegistar');
   $result = $data->getDocument($token);


 ?>

    <body>
    <div class="container">  
            <div class="form-group">
    <form action = "EditDetails.php" method="POST" name="add_name" id="add_name">


        <center>
        <h1>Edit Employee Details</h1>
        </center>

        <div class="table-responsive">  
            <table class="table table-borderedless-light" id="dynamic_field">  


<tr>                       
<!--Name-->
<td>
<label>Name</label> 
<input type="text" id="Name" name="Name" class = "form-control" value = "<?php echo $result['Name'];?>" size="50" class="form-control"/></td>
</tr>


<tr>
<!--Age-->
<td>
<label>Age</label>      
<input type="number" id ="Age" name="Age" class = "form-control" value = "<?php echo $result['Age'];?>" size="1" min="1" max="100"/></td>
</tr>

<tr>
<!--Client Name-->
<td>
<label>NRIC</label>  
<input type="number" name="NRIC" class = "form-control" min="1" maxlength="12" value = "<?php echo $result['NRIC'];?>" size="1"/></td>
</select>
</tr>


<tr>
<!--Religion-->
<td>
<label>Religion</label>      
<select name="religion"  class = "form-control">
    <option value="<?php echo $result['Religion'];?>"><?php echo $result['Religion'];?></option>
    <option value="Atheist">Atheist</option>
    <option value="Baha'i">Baha'i</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Cao Dai">Cao Dai</option>
    <option value="Chinese traditional religion">Chinese traditional religion</option>
    <option value="Christianity">Christianity</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Islam">Islam</option>
    <option value="Jainism">Jainism</option>
    <option value="Juche">Juche</option>
    <option value="Judaism">Judaism</option>
    <option value="Neo-Paganism">Neo-Paganism</option>
    <option value="Secular">Secular</option>
    <option value="Shinto">Shinto</option>
    <option value="Sikhism">Sikhism</option>
    <option value="Spiritism">Spiritism</option>
    <option value="Tenrikyo">Tenrikyo</option>
    <option value="Unitarian-Universalism">Unitarian-Universalism</option>
    <option value="Zoroastrianism">Zoroastrianism</option>
    <option value="Audi" selected>Islam</option>
    <option value="Other">Other</option></select></td>
</tr>

<tr>
<!--Nationality-->
<td>
<label>Nationality</label>      
<select name="Nationality" class = "form-control" >
   <option value="<?php echo $result['Nationality'];?>"><?php echo $result['Nationality'];?></option>
   <option value="afghan">Afghan</option>
   <option value="albanian">Albanian</option>
   <option value="algerian">Algerian</option>
   <option value="american">American</option>
   <option value="andorran">Andorran</option>
   <option value="angolan">Angolan</option>
   <option value="antiguans">Antiguans</option>
   <option value="argentinean">Argentinean</option>
   <option value="armenian">Armenian</option>
   <option value="australian">Australian</option>
   <option value="austrian">Austrian</option>
   <option value="azerbaijani">Azerbaijani</option>
   <option value="bahamian">Bahamian</option>
   <option value="bahraini">Bahraini</option>
   <option value="bangladeshi">Bangladeshi</option>
   <option value="barbadian">Barbadian</option>
   <option value="barbudans">Barbudans</option>
   <option value="batswana">Batswana</option>
   <option value="belarusian">Belarusian</option>
   <option value="belgian">Belgian</option>
   <option value="belizean">Belizean</option>
   <option value="beninese">Beninese</option>
   <option value="bhutanese">Bhutanese</option>
   <option value="bolivian">Bolivian</option>
   <option value="bosnian">Bosnian</option>
   <option value="brazilian">Brazilian</option>
   <option value="british">British</option>
   <option value="bruneian">Bruneian</option>
   <option value="bulgarian">Bulgarian</option>
   <option value="burkinabe">Burkinabe</option>
   <option value="burmese">Burmese</option>
   <option value="burundian">Burundian</option>
   <option value="cambodian">Cambodian</option>
   <option value="cameroonian">Cameroonian</option>
   <option value="canadian">Canadian</option>
   <option value="cape verdean">Cape Verdean</option>
   <option value="central african">Central African</option>
   <option value="chadian">Chadian</option>
   <option value="chilean">Chilean</option>
   <option value="chinese">Chinese</option>
   <option value="colombian">Colombian</option>
   <option value="comoran">Comoran</option>
   <option value="congolese">Congolese</option>
   <option value="costa rican">Costa Rican</option>
   <option value="croatian">Croatian</option>
   <option value="cuban">Cuban</option>
   <option value="cypriot">Cypriot</option>
   <option value="czech">Czech</option>
   <option value="danish">Danish</option>
   <option value="djibouti">Djibouti</option>
   <option value="dominican">Dominican</option>
   <option value="dutch">Dutch</option>
   <option value="east timorese">East Timorese</option>
   <option value="ecuadorean">Ecuadorean</option>
   <option value="egyptian">Egyptian</option>
   <option value="emirian">Emirian</option>
   <option value="equatorial guinean">Equatorial Guinean</option>
   <option value="eritrean">Eritrean</option>
   <option value="estonian">Estonian</option>
   <option value="ethiopian">Ethiopian</option>
   <option value="fijian">Fijian</option>
   <option value="filipino">Filipino</option>
   <option value="finnish">Finnish</option>
   <option value="french">French</option>
   <option value="gabonese">Gabonese</option>
   <option value="gambian">Gambian</option>
   <option value="georgian">Georgian</option>
   <option value="german">German</option>
   <option value="ghanaian">Ghanaian</option>
   <option value="greek">Greek</option>
   <option value="grenadian">Grenadian</option>
   <option value="guatemalan">Guatemalan</option>
   <option value="guinea-bissauan">Guinea-Bissauan</option>
   <option value="guinean">Guinean</option>
   <option value="guyanese">Guyanese</option>
   <option value="haitian">Haitian</option>
   <option value="herzegovinian">Herzegovinian</option>
   <option value="honduran">Honduran</option>
   <option value="hungarian">Hungarian</option>
   <option value="icelander">Icelander</option>
   <option value="indian">Indian</option>
   <option value="indonesian">Indonesian</option>
   <option value="iranian">Iranian</option>
   <option value="iraqi">Iraqi</option>
   <option value="irish">Irish</option>
   <option value="israeli">Israeli</option>
   <option value="italian">Italian</option>
   <option value="ivorian">Ivorian</option>
   <option value="jamaican">Jamaican</option>
   <option value="japanese">Japanese</option>
   <option value="jordanian">Jordanian</option>
   <option value="kazakhstani">Kazakhstani</option>
   <option value="kenyan">Kenyan</option>
   <option value="kittian and nevisian">Kittian and Nevisian</option>
   <option value="kuwaiti">Kuwaiti</option>
   <option value="kyrgyz">Kyrgyz</option>
   <option value="laotian">Laotian</option>
   <option value="latvian">Latvian</option>
   <option value="lebanese">Lebanese</option>
   <option value="liberian">Liberian</option>
   <option value="libyan">Libyan</option>
   <option value="liechtensteiner">Liechtensteiner</option>
   <option value="lithuanian">Lithuanian</option>
   <option value="luxembourger">Luxembourger</option>
   <option value="macedonian">Macedonian</option>
   <option value="malagasy">Malagasy</option>
   <option value="malawian">Malawian</option>
   <option value="malaysian">Malaysian</option>
   <option value="maldivan">Maldivan</option>
   <option value="malian">Malian</option>
   <option value="maltese">Maltese</option>
   <option value="marshallese">Marshallese</option>
   <option value="mauritanian">Mauritanian</option>
   <option value="mauritian">Mauritian</option>
   <option value="mexican">Mexican</option>
   <option value="micronesian">Micronesian</option>
   <option value="moldovan">Moldovan</option>
   <option value="monacan">Monacan</option>
   <option value="mongolian">Mongolian</option>
   <option value="moroccan">Moroccan</option>
   <option value="mosotho">Mosotho</option>
   <option value="motswana">Motswana</option>
   <option value="mozambican">Mozambican</option>
   <option value="namibian">Namibian</option>
   <option value="nauruan">Nauruan</option>
   <option value="nepalese">Nepalese</option>
   <option value="new zealander">New Zealander</option>
   <option value="ni-vanuatu">Ni-Vanuatu</option>
   <option value="nicaraguan">Nicaraguan</option>
   <option value="nigerien">Nigerien</option>
   <option value="north korean">North Korean</option>
   <option value="northern irish">Northern Irish</option>
   <option value="norwegian">Norwegian</option>
   <option value="omani">Omani</option>
   <option value="pakistani">Pakistani</option>
   <option value="palauan">Palauan</option>
   <option value="panamanian">Panamanian</option>
   <option value="papua new guinean">Papua New Guinean</option>
   <option value="paraguayan">Paraguayan</option>
   <option value="peruvian">Peruvian</option>
   <option value="polish">Polish</option>
   <option value="portuguese">Portuguese</option>
   <option value="qatari">Qatari</option>
   <option value="romanian">Romanian</option>
   <option value="russian">Russian</option>
   <option value="rwandan">Rwandan</option>
   <option value="saint lucian">Saint Lucian</option>
   <option value="salvadoran">Salvadoran</option>
   <option value="samoan">Samoan</option>
   <option value="san marinese">San Marinese</option>
   <option value="sao tomean">Sao Tomean</option>
   <option value="saudi">Saudi</option>
   <option value="scottish">Scottish</option>
   <option value="senegalese">Senegalese</option>
   <option value="serbian">Serbian</option>
   <option value="seychellois">Seychellois</option>
   <option value="sierra leonean">Sierra Leonean</option>
   <option value="singaporean">Singaporean</option>
   <option value="slovakian">Slovakian</option>
   <option value="slovenian">Slovenian</option>
   <option value="solomon islander">Solomon Islander</option>
   <option value="somali">Somali</option>
   <option value="south african">South African</option>
   <option value="south korean">South Korean</option>
   <option value="spanish">Spanish</option>
   <option value="sri lankan">Sri Lankan</option>
   <option value="sudanese">Sudanese</option>
   <option value="surinamer">Surinamer</option>
   <option value="swazi">Swazi</option>
   <option value="swedish">Swedish</option>
   <option value="swiss">Swiss</option>
   <option value="syrian">Syrian</option>
   <option value="taiwanese">Taiwanese</option>
   <option value="tajik">Tajik</option>
   <option value="tanzanian">Tanzanian</option>
   <option value="thai">Thai</option>
   <option value="togolese">Togolese</option>
   <option value="tongan">Tongan</option>
   <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
   <option value="tunisian">Tunisian</option>
   <option value="turkish">Turkish</option>
   <option value="tuvaluan">Tuvaluan</option>
   <option value="ugandan">Ugandan</option>
   <option value="ukrainian">Ukrainian</option>
   <option value="uruguayan">Uruguayan</option>
   <option value="uzbekistani">Uzbekistani</option>
   <option value="venezuelan">Venezuelan</option>
   <option value="vietnamese">Vietnamese</option>
   <option value="welsh">Welsh</option>
   <option value="yemenite">Yemenite</option>
   <option value="zambian">Zambian</option>
   <option value="zimbabwean">Zimbabwean</option></select></td>
</tr>

                 
<tr>
<!--Position-->
<td>
<label>Position</label>  
<select name="Position" class = "form-control">
<option value="<?php echo $result['Position'];?>"><?php echo $result['Position'];?></option>
    <option value="Manager">Manager</option>
    <option value="Office Worker">Office Worker</option>
    <option value="Full-time Cleaner">Full-time Cleaner</option>
    <option value="Part-time Cleaner">Part-time Cleaner</option>
    </select></td>
</tr> 


<tr>
<!--Gender-->
<td>
<label>Gender</label>
<select name="Gender" class = "form-control">
<option selected="<?php echo $result['Gender'];?>"><?php echo $result['Gender'];?></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select></td>
</tr>


<tr>
<!--Marital Status-->
<td>
<label>Marital Status</label>
<select name="MaritalStatus" class = "form-control">
<option value="<?php echo $result['MaritalStatus'];?>"><?php echo $result['MaritalStatus'];?></option>
    <option value="Single">Single</option>
    <option value="Married">Married</option>
    <option value="Widowed">Widowed</option>
    </select></td>
</tr>


<tr>
<!--No of Dependents-->
<td>
<label>No of Dependents</label>
<input type="number" name="dependents" class = "form-control" value = "<?php echo $result['Dependents'];?>" size="1" min="1" max="50"/></td>
</tr>

<tr>
<!--Mobile Phone Number-->
<td>
<label>Mobile Phone Number</label>
<input type="text" name="countrycode" class = "form-control" value="<?php echo $result['countrycode'];?>" size="2"/>
<input type="number" name="PhoneNo" class = "form-control" value="<?php echo $result['PhoneNo'];?>" size="10"/></td>
</tr>


<tr>
<!--Date of Birth-->
<td>
<label>Date of Birth</label>
<input type="date" id="birthday" class = "form-control" value="<?php echo $result['Birthdate'];?>" name="birthday"></td>
</tr>

<tr>
<!--Starting Date-->
<td>
<label>Starting Date</label>
<input type="date" id="StartDate" value="<?php echo $result['StartDate'];?>" class = "form-control" name="StartDate"></td>
</tr>

<tr>
<!--End Date-->
<td>
<label>End Date</label>
<input type="date" id="EndDate" name="EndDate" value="<?php echo $result['EndDate'];?>" class = "form-control"></td>
</tr>


<tr>
<!--Address-->
<td>
<label>Address</label>
<textarea cols="80" rows="3" value="address" class = "form-control" name="address"><?php echo $result['address'];?></textarea></td>
</tr>

<tr>
<!--Email-->
<td>
<label>Email</label>
<input type="email" id="email" name="email" value="<?php echo $result['email'];?>" class = "form-control" size ="30"/></td>
</tr>

<tr>
<!--Bank Name-->
<td>
<label>Bank Name</label>
<input type="text" id="Bank" class = "form-control" value="<?php echo $result['Bank'];?>" name="Bank"> </td>
</tr>

<tr>
<!--Back Account Number-->
<td>
<label>Back Account Number</label>
<input type="number" id="BankNum" class = "form-control" value="<?php echo $result['BankNum'];?>" name="BankNum"></td>
</tr>


</table>  
<br></br>    

 <!--Hidden Employee ID Field-->
 <input type="hidden" id="EmployeeID" name="EmployeeID" value="<?php echo $result['EmployeeID'];?>">
        
<!--Buttons-->
<center>
<div class="center">
<button type="submit" name="submit"  class="btn btn-success" value="Submit">Update</button>
&nbsp; &nbsp;&nbsp;
<button type="button" class="btn btn-danger" value="cancel" onclick="window.location.href='EmployeeDatabase.php';">Cancel</button></div></center>
       </div>  
  </form>  
</div>  
</div>  
</body>  
</html>  