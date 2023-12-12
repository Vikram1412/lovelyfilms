<?php
if(!isset($_SESSION['admin_userid'])){
	session_start();
	session_destroy();
	session_start();
	//header('location:index');
	echo "<script>location.href='users';</script>";
	$_SESSION['MSG']="Logout Successfully!";
}
	
?>
<div class="topbar">
  <table width="1000" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="154" align="left" valign="middle">&nbsp;</td>
  <td width="705" align="right" valign="top" height="100">
  <div style="float:left; width:390px; font-size:16px; font-weight:bold; margin-top:50px; color:#FFFFFF;">Welcome to Admin Panel Username: <font style="color:#00FF00;"><?php if(isset($_SESSION['admin_userid'])) echo $_SESSION['admin_userid'];?></font></div>
  <img src="images/admin_watermark.gif" width="293" height="90" border="0" align="absmiddle">
</td>
  </tr>
  <tr>
  		<td valign="middle" colspan="3">
 		<!-- <form name="search" method="post" action="search-view-user">
			<table width="520" align="right" cellpadding="5" cellspacing="0">
				<tr>
					<td style="float: right;"><font style="color:#000099; font-size:12px;">Enter Registration No:</font>&nbsp;&nbsp;<input type="text" name="RegId" value="" style="height:16px; width:100px; font-size:16px;" /></td>
					<td><input type="submit" name="searchbtn" value="Search" /></td>
				</tr>
			</table>
		</form> -->
<tr>
  		<!-- <td valign="top" colspan="3">
			<table width="1000" align="center" cellpadding="0" cellspacing="0" style="color:#0000CC; height:30px;">
			<?php
				$sql1=mysqli_query($conn, "SELECT * FROM tbl_register WHERE RegId IS NOT NULL");
				$totalRegistration = mysqli_num_rows($sql1);
			?>
				<tr>
					<td valign="middle">
						<div style="padding:0px 0px 0px 0px;">Total Registration -&nbsp;&nbsp;<font style="color:#00CC00; font-size:15px;"><?php echo number_format($totalRegistration); ?></font>
						</div>
					</td>
				</tr>
			</table>
		</td> -->
  </tr>
  <tr>
<!-- <td valign="middle" align="right" colspan="3"><div style="padding:0px 0px 0px 0px;"><a href="users" style="text-decoration:none;"><font style="color:#00CC00; font-size:15px;">Back</font></a></div></td> -->
</tr>  
</table>	
</div>
