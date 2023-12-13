<?php
	session_start();
	session_destroy();
	//session_start();
	//header('location:index');
		/* 		echo "<script>window.location.href='https://lovelyfilms.in/adminmain/index';</script>"; */
				echo "<script>window.location.href='http://localhost/website/lovelyfilms/lovelyfilms/adminmain/index';</script>";

	$_SESSION['MSG']="Logout Successfully!";
?>