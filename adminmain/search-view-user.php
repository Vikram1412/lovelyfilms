<?php
session_start();
require_once '../includes/config.php';
if($_REQUEST['RegId'] != NULL)
{
$_SESSION['RegId']=$_REQUEST['RegId'];
}

$query = mysqli_query($conn, "SELECT * FROM tbl_registration WHERE RegId='".$_REQUEST['RegId']."'");
$fetchSqlVal=mysqli_fetch_array($query);
$count = mysqli_num_rows($query);

$queryHeight = mysqli_query($conn, "SELECT Height FROM tbl_height WHERE ID='".$fetchSqlVal['Height']."'");
$rowHeight = mysqli_fetch_array($queryHeight);

$queryState = mysqli_query($conn, "SELECT Name FROM tbl_state WHERE ID='".$fetchSqlVal['State']."'");
$rowState = mysqli_fetch_array($queryState);

$queryCity = mysqli_query($conn, "SELECT ID, Name FROM tbl_city WHERE ID='".$fetchSqlVal['NearestCity']."'");
$rowCity = mysqli_fetch_array($queryCity);

$queryType = mysqli_query($conn, "SELECT Name FROM tbl_types WHERE ID='".$fetchSqlVal['WhoAreYou']."'");
$rowType = mysqli_fetch_array($queryType);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Application Forms</title>

<link href="css/admin-skin.css" rel="stylesheet" type="text/css" />
<link href="css/cmxform.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.bold {	font-size: 12px;
	font-weight: bold;
	color:#000000;
}
.style1 {color: #990000}
-->
    </style>
<style type="text/css">
.style1 {color: #FF0000}
div#tipDiv {
    padding:4px;
    color:#000; font-size:11px; line-height:1.2;
    background-color:#E1E5F1; border:1px solid #667295; 
    width:210px;
	 height:auto; 
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
</style>

</head>

<body>
<?php include("header.php"); ?>
<div class="bodybar">

  <table width="1000" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="180" align="left" valign="top"><?php include('left.php'); ?>

  </td>
  <td width="950" align="left" valign="top">
  <table width="1000" cellspacing="0" cellpadding="4" border="0" bgcolor="silver" align="center" class="bordertable" >
	<tr bgcolor="#e5e5e5">
		<td class="header_td">View User Details </td>
	  	<td align="left">
        
        </td>
	</tr>
 </table>	
    <table border="0" cellpadding="0" cellspacing="0"  style="width:100%; " class="tablmain">
	<tr>
		<td valign="top" style="border:none;">
			<table cellpadding="0" cellspacing="0" style="width:1000px; font-size:11px;  font-family:Arial, Helvetica, sans-serif; " border="0">
				<tr>
					<td valign="top" style="border:none;">
					<div class="menu_header">Personal Details</div>
                                <fieldset>
                                    <center>
						<table cellspacing="0" cellpadding="0" width="100%" border="0" style="border:1px soid #000;" >
							<tbody>
							 
					</tr>
					<tr>
					<td colspan="2">
			  <table align="left" cellspacing="2" cellpadding="4" style="width:98%;" border="0"> 
                        <tbody>
						<!-- <tr>
							<td colspan="2" align="left" >
								<b>Personal Details	</b>
							</td>
						</tr> -->
						<?php if($count > 0){?>
						<tr>
                            <td valign="top" align="left" width="33%"> Registration No : </td>
                            <td valign="middle" colspan="3" align="left" ><font style="font-weight:bold;"><?php echo $fetchSqlVal['RegId'];?></font>
                                </td>
                          </tr>
                          <tr>
                            <td valign="top" align="left" width="33%"> Who Are You : </td>
                            <td valign="middle" colspan="3" align="left"><font style="font-weight:bold;"><?php echo $rowType['Name'];?></font>
                                </td>
                          </tr>
						  <tr>
                            <td valign="top" align="left" width="33%"> Name : </td>
                            <td valign="middle" colspan="3" align="left" ><font style="font-weight:bold;"><?php echo $fetchSqlVal['FirstName'].' '.$fetchSqlVal['LastName'];?></font>
                                </td>
                          </tr>                                                                                 
                          <tr>
                            <td align="left"> Date of Birth : </td>
                           <td colspan="3" align="left" valign="top">
                           <font style="font-weight:bold;"><?php echo $fetchSqlVal['DOB'];?></font>
							</td>

                          <tr>
                          <td align="left">Height : </td>
                          <td colspan="3"><font style="font-weight:bold;"><?php echo $rowHeight['Height'];?></font></td>
                          
                         </tr>
                          <tr>
                            <td align="left"> Weight : </td>
                            <td colspan="3" align="left"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Weight'];?> KG</font></td>
                          </tr>
                          <tr>
                              <td align="left"> Gender :</td>
                              <td colspan="3"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Gender'];?></font></td>
                             
                            </tr>
                         <tr>
                            <td align="left">Have You Membership :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['HaveYouMembership'];?></font></td>
                          </tr> 
						    <tr>
                            <td align="left">State :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $rowState['Name'];?></font></td>
                          </tr> 
						  <tr>
                            <td align="left"> Nearest City : </td>
                            <td colspan="3" align="left"><font style="font-weight:bold;"><?php echo $rowCity['Name'];?></font></td>
                          </tr>
						    <tr>
                            <td align="left">Address :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Address'];?></font></td>
                          </tr> 
                          </tr>
						    <tr>
                            <td align="left">Experience :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Experience'];?> Years</font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">Languages :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Languages'];?></font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">In To :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['InTos'];?></font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">Email ID :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['Email'];?></font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">Contact Number :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['ContactNumber'];?></font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">Video Url :</td>
                            <td colspan="3" align="left" bordercolor="1"><font style="font-weight:bold;"><?php echo $fetchSqlVal['VideoUrl'];?></font></td>
                          </tr>
                          </tr>
						    <tr>
                            <td align="left">Profile Photo :</td>
                            <td colspan="3" align="left" bordercolor="1">
                            	<img height="100" width="90" src="../uploads/<?php echo $fetchSqlVal["ProfilePic"];?>"/>
                            </td>
                          </tr>
                          <?php }else{?>
                          <tr>
                            <td colspan="3" align="left" bordercolor="1">
                            	Record not found!
                            </td>
                          </tr>
                      	<?php  } ?>
					  </tbody>
					</table>
					</td>
					</tr>
					<tr>

									</tr>								
							</tbody>
						</table>
					</td>
					 </center>
                                </fieldset>
				</tr>
			</table>
		</td>
	</tr>
</table>
                </td>
            </tr>
			
        </tbody></table>
    
</div>

            </div></td>
        </tr>
		
   
      
      <tr>
        <td width="136" valign="top">&nbsp;</td>
        <td width="252">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>  
  </td>
  </tr>
  
  </table>
</div>
<?php include('footer.php'); ?>

</body>
</html>
