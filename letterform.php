<?php
include_once '../db_connect.php';
include_once 'functions.php';
include 'register.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!----Calender -------->
   <link href="../assets/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />

	
		 
</head>
<body>

<div id="wrapper">
	<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

  <div style="color: white;
padding: 10px 50px 10px 50px;
float: right;
font-size: 18px;"> <span>Welcome <?php echo htmlentities($_SESSION['username']); ?>!&nbsp</span>
					<a href="../logout.php" class="btn btn-danger square-btn-adjust">LOGOUT</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="../assets/img/uoj_crest.png" class="user-image img-responsive"/>
					</li>
				
					<li  >
                        <a  class="active-menu" href="protected_page.php"><i class="fa fa-edit fa-3x"></i> Add New </a>
                    </li>
					
					  <li  >
                        <a  href="viewpage.php"><i class="fa fa-table fa-3x"></i> View All </a>
                    </li>
					 <li>
                        <a  href="hardcopy.php"><i class="fa fa-qrcode fa-3x"></i> Hard Copies</a>
                    </li>
                     <li >
                        <a   href="#"><i class="fa fa-laptop fa-3x"></i> Users<span class="fa arrow"></span></a>
                    	    <ul class="nav nav-second-level">
                            <li>
                                <a href="accdetail.php">Users List</a>
                            </li>
                            <li>
                                <a href="addnew.php">Add New User</a>
                            </li>
                            
                        </ul>

                    </li>
                    <li>
                        <a   href="#"><i class="fa fa-dashboard fa-3x"></i> Account Setings<span class="fa arrow"></span></a>
                    	    <ul class="nav nav-second-level">
                            <li>
                                <a href="accdetail.php">My Account</a>
                            </li>
                            <li>
                                <a href="Accsettings.php">Reset Password</a>
                            </li>
                            
                        </ul>

                    </li>

                    	 <li  >
                        <a  href="histry.php"><i class="fa fa-bar-chart-o fa-3x"></i> History</a>
                    </li>
					
					 <li >
                        <a   href="../login.php"><i class="fa fa-bolt fa-3x"></i> &nbsp &nbsp &nbsp Logout</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                        <h3><center>Letter Registration Form </center></h3>
                       
                    </div>
                </div><span class="error"><?php echo $error; ?></span>
                 <!-- /. ROW  -->
                 <hr />	
                 <h6>Please note that fields marked <span class="error">*</span> 
        are required.</h6>
          <div class="row">
            <div class="col-md-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
			
                    <div class="panel-heading">
                            <h4>Basic Details</h4>
                    </div>
					
                   <div class="panel-body">
                      <div class="row">
						<form role="form" action="" method="post">
						
                            <div class="col-md-6">
												<div class="form-group">
													<h5>Date <span class="error"> * </span></h5>
													<input type="text" name="date" value="<?php echo date("j/m/Y")?>"  class="form-control" id="datepicker">
												</div>
												<div class="form-group">
													<h5>From</h5>
													<select class="form-control" name="outherfrom" placeholder="Select One">
														<option value="" selected></option>
														<option> Registrar's Office </option>
														<option>Vice Chancheller </option>
														<option>Finance Branch</option>
														<option>Capital Works & Planning</option>
														<option>Administration Branch</option>
														<option>Establishments [Academic]</option>
														<option>Establishments [Non Academic]</option>
														<option>Examinations Branch</option>
														<option>Admissions Branch</option>
														<option>Student Welfare</option>
														<option>Academic Branch</option>
														<option>External Examinations</option>
														<option>Library</option>
														<option>Internal Audit Unit</option>
														<option>Planning & MaintenanceHealth Centre</option>
														<option>Physical Education</option>
														<option>Student Counselling</option>
														<option>Security</option>
														<option>Faculty of Arts</option>
														<option>Faculty of Agriculture</option>
														<option>Faculty of Graduate Studies</option>
														<option>Faculty of management Studies & Commerce</option>
														<option>Faculty of Science</option>
														<option>Faculty of Medicine</option>
														<option>Kilinochi Premises</option>
														<option>Faculty of Engineering</option>
														<option>VAVUNIYA CAMPUS/Administration</option>
														<option>VAVUNIYA CAMPUS/Establishments </option>
														<option>VAVUNIYA CAMPUS/Finance Branch </option>
														<option>VAVUNIYA CAMPUS/Examinations & Student Welfare</option>
														<option>VAVUNIYA CAMPUS/Applied Science </option>
														<option>VAVUNIYA CAMPUS/Business Science </option>
														<option>VAVUNIYA CAMPUS/</option>
														 <option> Department/Accounting</option>
														<option>Department/Agronomy</option>
														<option>Department/Agricultural Biology</option>
														<option>Department/Agricultural Chemistry</option>
														<option>Department/Agricultural Economics</option>
														<option>Department/Agricultural Engineering</option>
														<option>Department/Anatomy</option>
														<option>Department/Animal Science</option>
														<option>Department/Biochemistry</option>
														<option>Department/Botany</option>
														<option>Department/Chemistry</option>
														<option>Department/Christian and Islamic Civilization</option>

														<option>Department/Community Medicine</option>
														<option>Department/Computer Science</option>
														<option>Department/Dance</option>
														<option> Department/Economics</option>
														<option>Department/Education</option>
														<option> Department/Financial Management</option>
														<option> Department/Fine Arts</option>
														<option>Department/Fisheries</option>
														<option>Department/Forensic Medicine</option>
														<option>Department/Geography</option>
														<option>Department/Hindu Civilization</option>
														<option>Department/History</option>
														<option>Department/Human Resource Management</option>

														<option>Department/Law</option>
														<option>Department/Linguistics and English</option>
														<option>Department/Marketing</option>
														<option>Department/Mathematics and Statistics</option>
														<option>Department/Medicine</option>
														<option>Department/Music</option>
														<option>Department/Obstetrics and Gynaecology</option>
														<option>Department/Paediatrics</option>
														<option>Department/Pathology</option>
														<option>Department/Pharmacology</option>
														<option>Department/Philosophy</option>
														<option>Department/Physics</option>
														<option>Department/Physiology</option>

														<option>Department/Political Science</option>
														<option>Department/Psychiatry</option>
														<option>Department/Sanskrit</option>
														<option>Department/Sociology</option>
														<option>Department/Surgery</option>
														<option>Department/Tamil</option>
														<option>Department/Zoology</option>
														<option>Vavuniya Campus/Department/Accountancy and Finance</option>
														<option>Vavuniya Campus/Department/Biological Science</option>
														<option>Vavuniya Campus/Department/Economics and Mgt</option>
														<option>Vavuniya Campus/Department/Physical Science</option>
														<option>Colombo</option>
														<option>Trinco</option>
														<option>Extra Mural Studies Unit</option>
														<option>Computer Centre</option>
														<option>Staff Development Centre</option>
														<option>Sports Science Unit</option>
														<option>Staff Development Centre</option>
														<option>Workers Education Unit</option>
														<option>English Language Teaching Centre</option>
													</select>
												</div>
													<div class="form-group">
													<h5>Subject</h5>
													<textarea name="heading" class="form-control" rows="3"></textarea>
												</div>
											
												<div class="form-group">
													<h5>Other Important Details</h5>
													<textarea name="outher" class="form-control" rows="3"></textarea>
												</div>
											
												
												<div class="form-group">
													<h5>Attach HardCopy</h5>
													<input type="file" class="form-control" name="file"/>
													
												</div>
												<div class="form-group">
													<h5>Receiver</h5>
													<input type="text" name="rece" value="Admin" class="form-control">
										<br>
										</div>
												 <button type="submit" name="submit" value="Submit" class="btn btn-default">SUBMIT</button>
												&nbsp&nbsp&nbsp&nbsp
												<button type="reset" class="btn btn-primary">RESET</button>
							</div>
							<div class="col-md-6">
										<fieldset disabled="disabled">
                                            <div class="form-group">
                                                
                                            <h5>Serial No <span class="error">  </span></h5>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="This field is Auto Increase with date" disabled />
                                            </div>
                                         </fieldset>
										<div class="form-group">
													<h5>To</h5>
													<select class="form-control" name="outherto" placeholder="Select One" value="">
														<option value="" selected></option>
														<option> Bursar </option>
														<option> Senior Assistant Bursar  </option>
														<option>Senior Assistant Bursar [Payments]</option>
														<option>Assistant Bursar/ Supplies I</option>
														<option>Senior Assistant Bursar/ Supplies II </option>
														<option>Assistant Bursar [Personal Emoluments] </option>
														<option>Assistant Bursar </option>
													</select>
											</div>
										<div class="form-group">
													<h5>Bill/Cheque No</h5>
													<input type="text" name="billno"  placeholder="" class="form-control">
										</div>
										<div class="form-group">
													<h5>Amount</h5>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon">Rs.</span>
											<input type="text" name="amount" class="form-control" placeholder="Cash">
                                        </div>
										
										
										<div class="form-group">
													<h5>If you return this letter fill down...<br></h5>
													<h5>Return Reason</h5>
													<textarea name="reason" value="" placeholder="Reason" class="form-control" rows="3"></textarea>
										<br>
										</div>
										<div class="form-group">
													<h5>Return Date</h5>
													<input type="text" name="retdate" placeholder="Return Date"  class="form-control" id="datepicker2">
										</div>
						</div>
						</form>
					
						<br />
					</div>
                </div>
            </div>
                     <!-- End Form Elements -->
        </div>
    </div><footer>
                <hr>
                   <p class="fl_left">© 2015 | <a href="#">University Of Jaffna in Finance</a>  | All Rights Reserved </p>
                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="fl_right">Created by | <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">kichaa4@gmail.com</a> | ® Group8 </p>
                
            </footer>
				
                <!-- /. ROW  -->
	</div>
             <!-- /. PAGE INNER  -->
</div>
            
         <!-- /. PAGE WRAPPER  -->
</div></div>
     <!-- /. WRAPPER  -->


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
  
 <!-- DATE PICKER-->
		  <script src="../assets/js/jquery-ui.js"></script>
		  <script>
			$(document).ready(function () {
				$( '#datepicker' ).datepicker({
				  changeMonth: true,//this option for allowing user to select month
				  changeYear: true //this option for allowing user to select from year range
				});$( '#datepicker2' ).datepicker({
				  changeMonth: true,//this option for allowing user to select month
				  changeYear: true //this option for allowing user to select from year range
				});
			  }

			);
		</script> 
		    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
	
</body>
</html>

