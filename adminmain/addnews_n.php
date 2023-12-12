<?php
session_start();
require_once '../includes/config.php';

if (isset($_POST["Submit"])) {

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $link = $_POST['link'];

    $filename = $_FILES["photo"]["name"]; 
    $tempname = $_FILES["photo"]["tmp_name"];     
    $folder = "uploads/news/".$filename; 
    move_uploaded_file($tempname, $folder);

    $sqlInsert = "INSERT INTO tbl_news (title, description, link, photo)
           values ('" . $title . "','" . $description . "','" . $link . "','" . $filename . "')";
    $result = mysqli_query($conn, $sqlInsert);

    if (! empty($result)) {
        header("location:news_n.php?msg=Added success");
    } else {
        header("location:news_n.php?msg=Added failed");
    }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Add News </title>

<link href="css/admin-skin.css" rel="stylesheet" type="text/css" />

<link href="css/cmxform.css" rel="stylesheet" type="text/css" />

</head>



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

		<td class="header_td">Add News</td>

	  	<td align="right">&nbsp;</td>

	</tr>

 

   <form action="" method="post" enctype="multipart/form-data" id="addcategory">


    <table width="808" border="0" cellspacing="2" cellpadding="2" class="bordertable" >

      <tr>

      		<td colspan="4" align="left" valign="middle"><table width="550" border="0" align="center" cellpadding="2" cellspacing="2">

  

  <tr>

    <td height="10" colspan="2" align="left" valign="top"><img src="images/spacer.gif" height="10" width="1" /></td>

    </tr>

  <tr>

    <td width="161" align="right" valign="top"><strong> Title :</strong> &nbsp;&nbsp;&nbsp;</td>

    <td><input name="title" type="text" class="login_input" id="title" size="42px" required  /></td>

  </tr>

   <tr>

    <td align="right" valign="top"><strong> Description  :</strong> &nbsp;&nbsp;&nbsp;</td>

    <td><textarea name="description" cols="40" rows="6" id="description" required ></textarea></td>

  </tr>

   <tr>

    <td align="right" valign="top"><strong> Link  :</strong> &nbsp;&nbsp;&nbsp;</td>

    <td><input name="link" id="link" type="text" class="login_input"  size="42px" required></td>

  </tr>

   <tr>

    <td align="right" valign="top"><strong> Photo :</strong> &nbsp;&nbsp;&nbsp;</td>

    <td><input name="photo" id="photo" type="file" class="login_input" size="42px" ></td>

  </tr>

  

    <td height="30" valign="middle">&nbsp;</td>

      <td height="30" align="center" valign="middle">&nbsp;</td>

    </tr>

</table></td>

      		</tr>

      <tr>

        <td align="center"><label>

          <input type="submit" name="Submit" value="Submit" />


        </label></td>

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

