<?php
session_start();
/*print_r($_SESSION);
die;*/

require_once '../includes/config.php';
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
//echo date('d-m-Y H:i:s');
$resultset = mysqli_query($conn, "SELECT * FROM tbl_register WHERE 1 ORDER BY RegId ASC");

/*$sql_query = "SELECT name, gender, address, designation, age FROM developers LIMIT 10";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));*/
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
  $developer_records[] = $rows;
} 


if(isset($_POST["export_data"])) {	
	$filename = "phpzag_data_export_".date('Ymd') . ".xls";	
	
	/*header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment;filename=\"$filename\"");
    header("Cache-Control: max-age=0");*/
	
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	
	
	/*$show_coloumn = false;
	if(!empty($developer_records)) {
	  foreach($developer_records as $record) {
		if(!$show_coloumn) {
		  // display field/column names in first row
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}*/
	//exit;  
}



/*if(isset($_POST["export_data"])) {  
  $filename = "lovely_data_export_".date('Ymd') . ".xls";     
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$filename\"");  
  
  $show_coloumn = false;
  if(!empty($developer_records)) {
    foreach($developer_records as $record) {
    if(!$show_coloumn) {
      // display field/column names in first row
      echo @implode("\t", array_keys($record)) . "\n";
      $show_coloumn = true;
    }
    echo @implode("\t", array_values($record)) . "\n";
    }
  }
}*/


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Registration Forms</title>
<link href="css/admin-skin.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include("header.php"); ?>
<div class="bodybar">

  <table width="1000" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="180" align="left" valign="top"><?php include('left.php'); ?>
  </td>
  <td width="1000" align="left" valign="top">
  <table width="1000" cellspacing="0" cellpadding="4" border="0" bgcolor="silver" align="center" class="bordertable" >
  <tr bgcolor="#e5e5e5">
    <td class="header_td">View Registration Forms </td>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">         
        <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info" style="float: right;
    margin-bottom: 10px;">Export to excel</button>
    </form>
  </tr>
 </table>
   <form action="" method="post"><? if(isset($_REQUEST['msg'])=='y'){ echo $_SESSION['message'];}?>
    <table width="1000" border="0" cellpadding="0" cellspacing="1" class="bordertable" >
      <tr bgcolor="whitesmoke">
        <td width="110" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">&nbsp;&nbsp;&nbsp;REG NO </td>
        <td width="163" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">WHO ARE YOU </td>
        <td width="163" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">NAME </td>
        <td width="163" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">GENDER</td>
        <td width="163" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">MOBILE</td>
        <td width="112" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">EMAIL</td>
        <td width="112" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">DOB</td>
        <td width="60" align="left" valign="middle" bgcolor="whitesmoke" class="topheader_td">View Details </td>
      </tr>
<?php
$class='class1';
$queryString = "";
$rowsPerPage =100;
$query = mysqli_query($conn, "SELECT * FROM tbl_register WHERE 1 ORDER BY RegId ASC");
//$pagingLink = $common->getPagingLink($sql, $rowsPerPage,$queryString);
while($res = mysqli_fetch_array($query))
{?>
  <tr onmousemove="javascript: this.style.background='#ECF1F2'" onmouseout="javascript: this.style.background='#FFFFFF'">
    <td width="110" align="left" valign="middle"  class="left-tdtext"><?php echo stripslashes($res['RegId']); ?></td>
    <td align="left" valign="middle" class="left-tdtext"><?php if($res['WhoAreYou']!="Others") echo $res['WhoAreYou']; else echo $res['WhoAreYouOther'];?></td>
    <td align="left" valign="middle" class="left-tdtext"><?php echo stripslashes($res['FirstName'].' '.$res['LastName']); ?> </td>
    <td align="left" valign="middle" class="left-tdtext"><?php echo stripslashes($res['Gender']); ?></td>
    <td align="left" valign="middle" class="left-tdtext"><?php echo stripslashes($res['Mobile']); ?></td>
    <td align="left" valign="middle" class="left-tdtext"><?php echo stripslashes($res['Email']); ?></td>
    <td align="left" valign="middle" class="left-tdtext"><?php echo stripslashes($res['DateofBirth']); ?></td>
    <td width="60" align="left" valign="middle" class="left-tdtext">
    <a href="view-details?id=<?php echo $res['RegId']; ?>" class="bluelink">Details </a></td>
  </tr>
<?php }?>
<tr bgcolor="#CCCCCC">
    <td colspan="6" align="center" valign="middle"><?php //echo $pagingLink;  ?></td>
    </tr>
    </table>  
  </form>
  </td>
  </tr>
  </table>
</div>
<?php include('footer.php'); ?>
</body>
</html>
