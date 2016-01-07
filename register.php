<?php
	//Establishing Connection with Server
	$connection = mysql_connect("localhost", "root", "");
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$position = filter_input(INPUT_POST, 'position');
	//Selecting Database from Server
	$db = mysql_select_db("db_documentation", $connection);
	$error=''; // Variable To Store Error Message

	if(isset($_POST['submit'])){
	//Fetching variables of the form which travels in URL
    
  	if (empty($_POST['date'])) 
		{
			$error = "<br/>** Insertion Failed <br/> ** You must enter the date  fields";  
		}
		
		else
		{

		
			$date=$_POST['date'];
			//$serialno=$_POST['serialno'];
			$from=$_POST['outherfrom'];
			$to=$_POST['outherto'];
			$heading=$_POST['heading'];
			$billno=$_POST['billno'];
			$amount=$_POST['amount'];
			$view=$_FILES["upload"]["name"];
			$rece=$_POST['rece'];
			$outher=$_POST['outher'];
			$reason=$_POST['reason'];
			$rdate=$_POST['retdate'];



				$get_query = mysql_query("SELECT `date` FROM `regtable` WHERE `date` = '".$date."'");

				$auto_increment_id = 1;

				while($row = mysql_fetch_assoc($get_query))
				{
				  //$update_query = mysql_query("UPDATE `regtable` SET `se_no`=$auto_increment_id WHERE `date` = '".$row['date']."'");
				  $auto_increment_id++;
				}

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["upload"]["name"]));
if ((($_FILES["upload"]["type"] == "image/gif")
|| ($_FILES["upload"]["type"] == "image/jpeg")
|| ($_FILES["upload"]["type"] == "image/png")
||($_FILES["upload"]["type"] == "image/jpg"))
&& ($_FILES["upload"]["size"] < 1000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["upload"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["upload"]["error"] . "<br />";
    }
  else
    {
    
 
    if (file_exists("../hardcopies/" . $_FILES["upload"]["name"]))
      {
      ?>
 <script>
  alert('File name already exists');
  
 </script>
 <?php
      }
    else
      {
      move_uploaded_file($_FILES["upload"]["tmp_name"],
      "../hardcopies/" . $_FILES["upload"]["name"]);
      
      }
    }
  }
else
  {
  ?>
 <script>
  alert('Sorry, cannot file');
  //window.location='protected_page.php';
 </script>
 <?php
  }
 
			
	      			
				    $query = mysql_query("insert into regtable(`date`, `se_no`, `from`, `to`, `heading`, `billno`, `amount`,`view`, `receiver`, `other`, `reason`, `return_date`) values ('".$date."',  '$auto_increment_id',  '".$from."',  '".$to."',  '".$heading."', '".$billno."',  '".$amount."', '".$view."', '".$rece."',   '".$outher."', '".$reason."', '".$rdate."')");
					$query2=mysql_query("INSERT INTO `history`(`username`,  `position`, `action`)
                                 VALUES ('$username','$position','Add New Letter ')");

					echo $error ="<br/>Data Inserted successfully...!!";
				

		    
		    
   		}
}
	//Closing Connection with Server
	mysql_close($connection);
?>	
