<?php
  include_once 'includes/register.inc.php';
  include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Letter Management System</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/default.css" rel="stylesheet" />
     <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
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
                        <h5>  <center>Enter Details To Register</center>  </h5>  
                       <span class="error"> <?php
                      if (!empty($error_msg)) {
                          echo $error_msg;
                      }
                      ?></span><x>
                         <ul>
                    <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
                    <li>Emails must have a valid email format</li>
                    <li>Passwords must be at least 6 characters long</li>
                    <li>Passwords must contain
                        <ul>
                            <li>At least one uppercase letter (A..Z)</li>
                            <li>At least one lower case letter (a..z)</li>
                            <li>At least one number (0..9)</li>
                        </ul>
                    </li>
                    <li>Your password and confirmation must match exactly</li>
                </ul></x>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"  method="post" 
                                            name="registration_form">
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="* Your Username " name="username"/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" name="email" placeholder="* Your Email " />
                                        </div>
                                        
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="* Your Password " name="password"/>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="* Retype Password " name="confirmpwd"/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            
                                            <select class="form-control" name="position" placeholder="* Your Position ">
                                              <option> Admin</option>
                                              <option> User1 </option>
                                              <option>User2  </option>
                                              <option>User3</option>
                                             
                                            </select>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">!</span>
                                            <input type="password" class="form-control" name="code" placeholder="* code " />
                                        </div>
                                         <div class="form-group">
                                         <input type="button" class="btn btn-primary"
                                                value="REGISTER" 
                                               onclick="return regformhash(this.form,
                                                         this.form.username,
                                                         this.form.email,
                                                         this.form.password,
                                                           this.form.confirmpwd,this.form.position,this.form.code);" /> 
                                          
                                        </div>

                                    <hr />
                                   <p>Return to the <a href="login.php">login page</a>.</p>
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
      <!-- LOGIN SCRIPTS -->
     <script type="text/JavaScript" src="assets/js/sha512.js"></script> 
        <script type="text/JavaScript" src="assets/js/forms.js"></script> 
   
</body>
</html>
