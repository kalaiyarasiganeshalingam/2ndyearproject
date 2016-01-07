<?php
//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username']) || (trim($_SESSION['Semail']) == '')) {
		header("location: ../login.php");
		exit();
	}
	//include 'login.php';
?>
