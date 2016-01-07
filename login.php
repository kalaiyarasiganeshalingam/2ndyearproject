
<?php
include_once '../db_connect.php';
include_once '../includes/functions.php';
 
 sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Letter Management System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/default.css" rel="stylesheet" />
	 <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
   

             <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            

          <div style="color: white;
        padding: 10px 50px 10px 50px;
        float: left;
        font-size: 20px;">
        
                <h2>University Of Jaffna - Finance Department</h2>
        </div>
        </nav>       
      
           
        
            <div class="col-md-12">
        
            <br>
                <br>
            </div>
        
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h5> <center>Enter Details To Login</center>   </h5>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="process_login.php" method="post" name="login_form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email ID" />
                                        </div>
                                       <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Enter Your Password" name="password"/>
                                        </div>
                                         <div class="form-group">
                                          <input type="button" class="btn btn-primary" value="LOGIN" onclick="formhash(this.form, this.form.password);" /> 
                                             <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>

                                    <hr />

                                     <?php
                                    if (isset($_GET['error'])) {
                                        echo '<span class="error">Error Logging In!</span>';
                                    }
                                   
                                        if (login_check($mysqli) == true) {
                                                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
                                 
                                            echo '<p>Do you want to change user? <a href="logout.php">Log out</a>.</p>';
                                        } else {
                                                        echo '<p>Currently logged ' . $logged . '.</p>';
                                                         echo "<p>If you don't have a login, please <a href='registerform.php'>register</a></p>";
                                                        
                                                }
                                ?>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
         
        </div>
    </div>

       
            <footer>
                <hr>
                   <p class="fl_left">© 2015 | <a href="#">University Of Jaffna in Finance</a>  | All Rights Reserved </p>
                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="fl_right">Created by | <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">kichaa4@gmail.com</a> | ® Group8 </p>
                
            </footer>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
      <!-- LOGIN SCRIPTS -->
     <script type="text/JavaScript" src="../assets/js/sha512.js"></script> 
        <script type="text/JavaScript" src="../assets/js/forms.js"></script> 
   
</body>
</html>
