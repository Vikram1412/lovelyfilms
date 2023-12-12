<?php
session_start();
require_once '../includes/config.php';


?>
<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type='text/css'>
html, body {
	height: 100% !important;
}
body {
	text-align: center;
	background-color: #EEEEEE;
	background-image: url(images/admin_login.gif);
	background-repeat: no-repeat;
	background-position: center center;
	margin:0px;
	padding:0px;
}
div.box {
	border: 1px dashed #AAAAAA;
	padding: 15px;
	background: #FFFFFF;
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
        width: 470px;
}
td.login {
	font-family: "Trebuchet MS", tahoma, verdana, serif;
	font-size: 9pt;
}
input.text {
	font-family: arial, tahoma, verdana, serif;
	font-size: 9pt; 
}
div.error {
	text-align: center;
	padding-top: 3px;
	font-weight: bold;
}
.#E35E1B{
color:#FF0000;
}
</style>


</head>
<body>
<table cellspacing="0" cellpadding="0" style="width: 100%; height: 100%;">
<tr>
<td align="center">
	<form action="login.php" method="POST" id="loginfrm" name="loginfrm">
	<div class="box">
		<table cellpadding="0" cellspacing="0">
		<tr>
				<td colspan="5" align="center" valign="middle" class="#E35E1B"><?php if(isset($_SESSION['MSG'])){ echo $_SESSION['MSG']; } else { unset($_SESSION['MSG']); } ?></td>
</tr>
<tr>
<td colspan="5" align="center" valign="middle" class="login">&nbsp;</td>
</tr>
		<tr>
		<td class="login">Username: &nbsp;</td>
		<td class="login"><input type="text" class="text" name="txtUserName" id="username" maxlength="50"> </td>
		<td class="login">&nbsp;&nbsp;Password: &nbsp;</td>
		<td class="login"><input type="password" class="text" name="txtPassword" id="password" maxlength="50"> </td>
		<td class="login"><input type="submit" value="Login"></td>
		</tr>
		</table>
	</div>
   </form>
</td>
</tr>
</table>

</body>
</html>