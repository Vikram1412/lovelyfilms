<?php
error_reporting(0);
session_start();
require_once '../includes/config.php';
	if(isset($_POST['txtUserName'])){
		
		$username=$_POST['txtUserName'];
		$password=$_POST['txtPassword'];
		//echo "SELECT * FROM `tbl_admin` WHERE admin_userid='$username' && admin_pass='$password' && admin_status='1'";die;
		$query=mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE admin_userid='$username' && admin_pass='$password' && admin_status='1'");
	
		if (mysqli_num_rows($query) == 0){
			$_SESSION['MSG']="Login Failed. User not Found!";
			header('location:index');
		}
		else{
			$row=mysqli_fetch_array($query);
			$_SESSION['ADMIN_ID']=$row['ID'];
			$_SESSION['admin_userid'] = $row['admin_userid'];
			
			echo "<script>location.href='users';</script>";
		}
	}
	else{
		header('location:index.php');
		$_SESSION['MSG']="Please Login!";
	}
?>