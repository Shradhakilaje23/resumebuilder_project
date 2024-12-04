<?php
require('con1.php');
session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
     $Admin_login = ($_POST["Admin_login"]);
     $Admin_pass =($_POST["Admin_pass"]);
 
     $sql = " select * from  alogin where Admin_login='$Admin_login' and Admin_pass='$Admin_pass' ";
     $query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['Admin_login'] = $Admin_login;
			header('location:Adminpanel.php');
		}else{
			echo "login failed";
			header('location:Resumebuilder.php');
		}
    }
  
 ?>