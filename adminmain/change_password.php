<?php
require_once 'config/config.php';
require_once 'functions/functions.php';
$common->checkUser();
if($_REQUEST['cur_pass'])
{
$common->change_password();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password </title>
<link href="css/admin-skin.css" rel="stylesheet" type="text/css" />
<link href="css/cmxform.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript" type="text/javascript">
function cat(catid)
{
location.href='?catid='+catid;
}

</script>

<script type="text/javascript" src="../nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<body>
<?php include("header.php"); ?>
<div class="bodybar">

  <table width="990" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="180" align="left" valign="top">
    <?php include('left.php'); ?>
  </td>
  <td width="808" align="left" valign="top">
  <table width="808" cellspacing="0" cellpadding="4" border="0" bgcolor="silver" align="center" class="bordertable" >
	<tr bgcolor="#e5e5e5">
		<td class="header_td">Change Password </td>
	  	<td align="right">&nbsp;</td>
	</tr>
 </table>
   <form action="" method="post" enctype="multipart/form-data" id="addcategory">
   <span style="color:#FF0000"><strong><?php if($_REQUEST['msg']=='y'){ echo $_SESSION['message'];}?></strong></span>
    <table width="808" border="0" cellspacing="2" cellpadding="2" class="bordertable" >
      <tr>
        <td width="198">&nbsp;</td>
        <td width="283">&nbsp;</td>
        <td width="291">&nbsp;</td>
        <td width="34">&nbsp;</td>
      </tr>
      <tr>
      		<td colspan="4" align="left" valign="middle"><table width="450" border="0" align="center" cellpadding="2" cellspacing="2">
  
  <tr>
    <td height="10" colspan="2" align="left" valign="top"><img src="images/spacer.gif" height="10" width="1" /></td>
    </tr>
  <tr>
    <td width="161" align="right" valign="top"><strong><span class="red_starmen">*</span> Current Password  :</strong> &nbsp;&nbsp;&nbsp;</td>
    <td><input name="cur_pass" type="text" class="login_input validate[required,length[5,14]]" id="cur_pass" size="30px" /></td>
  </tr>
   <tr>
    <td align="right" valign="top"><strong><span class="red_starmen">*</span> New Password  :</strong> &nbsp;&nbsp;&nbsp;</td>
    <td><input name="new_pass" type="password" class="login_input validate[required,length[5,14]]" id="new_pass" size="30px" /></td>
  </tr>
   <tr>
    <td align="right" valign="top"><strong><span class="red_starmen">*</span> Confirm Password  :</strong> &nbsp;&nbsp;&nbsp;</td>
    <td><input name="conf_pass" type="password" class="login_input validate[required,length[5,14]]" id="conf_pass" size="30px" /></td>
  </tr>
    <td height="30" valign="middle">&nbsp;</td>
      <td height="30" align="center" valign="middle">&nbsp;</td>
    </tr>
</table></td>
      		</tr>
  
      

      
	  
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td><label>
          <input type="submit" name="Submit" value="Submit" />
          <input type="reset" name="reset" id="reset" value="Reset" />
        </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>  
  </form>
  </td>
  </tr>
  </table>
</div>
<?php include("footer.php"); ?>
</body>
</html>
