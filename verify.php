<?php
error_reporting(1);
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
if((!isset($_SESSION)) || (!isset($_POST))){
  header('Location:register');
}else{
require_once("includes/config.php");

$_SESSION['txtWhoAreYou']          = $_POST['txtWhoAreYou'];
$_SESSION['txtWhoAreYouOther']     = $_POST['txtWhoAreYouOther'];
$_SESSION['txtFirstName']          = $_POST['txtFirstName'];
$_SESSION['txtLastName']           = $_POST['txtLastName'];
$_SESSION['txtDateofBirth']        = $_POST['txtDateofBirth'];
$_SESSION['txtHeight']             = $_POST['txtHeight'];
$_SESSION['txtWeight']             = $_POST['txtWeight'];
$_SESSION['txtGender']             = $_POST['txtGender'];
$_SESSION['txtCINTAAMembership']   = $_POST['txtCINTAAMembership'];
$_SESSION['txtState']              = $_POST['txtState'];
$_SESSION['txtDistrict']           = $_POST['txtDistrict'];
$_SESSION['txtAddress']            = $_POST['txtAddress'];
$_SESSION['txtEduQualifications']  = $_POST['txtEduQualifications'];
$_SESSION['txtExperience']         = $_POST['txtExperience'];
$_SESSION['txtLanguages']          = $_POST['txtLanguages'];
$_SESSION['txtLanguagesName']      = $_POST['txtLanguagesName'];
$_SESSION['txtExperienceInTo']     = $_POST['txtExperienceInTo'];
$_SESSION['txtEmail']              = $_POST['txtEmail'];
$_SESSION['txtMobile']             = $_POST['txtMobile'];
$_SESSION['txtVideoUrl']           = $_POST['txtVideoUrl'];



foreach ($_POST['txtExperienceInTo'] as $value){
    $ExperienceInToArr[] = $value;
}
$_SESSION['txtExperienceInTo']  = @implode(',', $ExperienceInToArr);
$ExperienceInToName = explode(",", $_SESSION['txtExperienceInTo'] );

for($i=0; $i<count($_FILES["txtUploadFile"]["name"]); $i++){
   $fileArr[] = $_FILES["txtUploadFile"]["name"][$i];
}

$_SESSION['file_name'] = @implode(',', $fileArr);
$filesName = explode(",", $_SESSION['file_name']);

foreach ($_POST['txtVideoUrl'] as $value){
    $VideoUrlArr[] = $value;
}
$_SESSION['txtVideoUrl']  = @implode(',', $VideoUrlArr);
$VideoUrlArrName = explode(",", $_SESSION['txtVideoUrl'] );


if($_SESSION['txtLanguagesName']==""){
    foreach ($_POST['txtLanguages'] as $value){
        $LanguagesArr[] = $value;
    }
    $_SESSION['txtLanguages'] = @implode(',', $LanguagesArr);
    $langName = explode(",", $_SESSION['txtLanguages']);
}else{
    $LanguagesName = $_SESSION['txtLanguagesName'];
    $_SESSION['txtLanguages'] = $LanguagesName;
}

$queryHeight = mysqli_query($conn, "SELECT ID, Height FROM tbl_height WHERE ID='".$_SESSION['txtHeight']."'");
$rowHeight = mysqli_fetch_array($queryHeight);

$queryState = mysqli_query($conn, "SELECT id, name FROM tbl_state WHERE id='".$_SESSION['txtState']."'");
$rowState = mysqli_fetch_array($queryState);

$queryCity = mysqli_query($conn, "SELECT id, name FROM tbl_districts WHERE id='".$_SESSION['txtDistrict']."'");
$rowCity = mysqli_fetch_array($queryCity);

$_SESSION['txtHeightName']   = $rowHeight['Height'];
$_SESSION['txtStateName']    = $rowState['name'];
$_SESSION['txtDistrictName'] = $rowCity['name'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>Lovely Films</title>
<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="css/select2.min.css" rel="stylesheet" media="all">
<link href="css/main_rg.css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
.select2-container--default .select2-selection--multiple {
    background-color: inherit !important;
    height: 50px;
    border: none;
}
.checkbox {
    width: 20px;
    height: 20px;
    float: left;
    margin-right: 10px;
}
.error{color: red; font-style: italic; font-weight: 500;}
	.gr-cl{
		color:#505050;
		font-size: 16px;
	}
.form-row .name{text-transform:uppercase; font-size:13px;}
 p{margin-bottom:0px !important;}
</style>
</head>

<body>
<?php include('header.php');?>
<div class="page-wrapper bg-gra-03 p-b-50 bg-rg" style="padding-top:100px;">
  <div class="wrapper wrapper--w790">
    <div class="card card-5">
      <div class="card-heading">
        <h2 class="title">Preview</h2>
      </div>
      <div class="card-body">
          <div class="form-row">
            <div class="name">Who are You ?</div>
            <div class="value">
              <div class="input-group">
                <?php 
                if($_SESSION['txtWhoAreYou']=="Others"){ ?>
				        <p class="gr-cl">: <?php echo ucfirst($_SESSION['txtWhoAreYouOther']);?></p>
                <?php } else { ?>
                <p class="gr-cl">: <?php echo ucfirst($_SESSION['txtWhoAreYou']);?></p>
                <?php }?>
               </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">First Name</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo ucfirst($_SESSION["txtFirstName"]);?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Last Name</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo ucfirst($_SESSION["txtLastName"]);?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Date of Birth</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtDateofBirth"];?></p>
              </div>
            </div>
          </div>

          <?php if($_SESSION['txtHeightName']){?>
          <div class="form-row">
            <div class="name">Height</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION['txtHeightName'];?></p>
              </div>
            </div>
          </div>
          <?php }?>

          <?php if($_SESSION['txtWeight']){?>
          <div class="form-row">
            <div class="name">Weight</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtWeight"];?> KG</p>
              </div>
            </div>
          </div>
          <?php }?>

          <div class="form-row">
            <div class="name">Gender</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtGender"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Have you CINTAA membership ?</div>
            <div class="value">
              <div class="input-group">
				          <p class="gr-cl">: <?php echo $_SESSION["txtCINTAAMembership"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">State</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION['txtStateName'];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">District</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION['txtDistrictName'];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Address</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtAddress"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Education Qualifications</div>
            <div class="value">
              <div class="input-group">
                <p class="gr-cl">: <?php echo $_SESSION["txtEduQualifications"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Experience</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtExperience"];?> Years</p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Languages</div>
            <div class="value">
              <div class="input-group">
    				   <p class="gr-cl">:
    				   <?php 
    				    if($_SESSION['txtLanguagesName']==""){
    				          $hasComma = false;
                      foreach($langName as $row){
                          if ($hasComma){ 
                              echo ", "; 
                          }
                          echo '<span>'.ucfirst($row).'</span>';
                          $hasComma=true;
                      }  
    				    }else{
    				        echo '<span>'.ucfirst($LanguagesName).'</span>';
    				    }
                ?>
                </p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">In To</div>
            <div class="value">
              <div class="input-group">
                <p class="gr-cl">:
				        <?php 
                $hasComma = false;
                  foreach($ExperienceInToName as $row){
                      if ($hasComma){ 
                          echo ", "; 
                      }
                      echo '<span>'.$row.'</span>';
                      $hasComma=true;
                  }
                ?>
                </p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Email</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtEmail"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Contact Number</div>
            <div class="value">
              <div class="input-group">
				        <p class="gr-cl">: <?php echo $_SESSION["txtMobile"];?></p>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Video Url</div>
            <div class="value">
              <div class="input-group">
              <?php 
                $hasComma = false;
                  foreach($VideoUrlArrName as $row){
                      if ($hasComma){ 
                          echo "<br>"; 
                      }
                      echo '<span>'.$row.'</span>';
                      $hasComma=true;
                  }
              ?>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Image</div>
            <div class="value">
              <div class="input-group">
                <p class="gr-cl"> : 
                    <?php 
                    $i = 0;
                    foreach($filesName as $row){
                    ?>
                    <img height="100" width="80" src="tmpUploads/<?php echo $row;?>"/>
                    <?php $i++; }?>
                </p>
              </div>
            </div>
          </div>

          <form method="post" action="processSubmission" name="f1">
		          <div class="full">
                <a class="btn btn-danger" href="javascript:history.back();" style="text-decoration:none;">Back</a>
                <?php //if((!isset($_SESSION)) || (!isset($_POST))){ ?>
                <button class="btn btn-danger" type="submit" name="submit" value="Checkout">Submit</button>
                <?php //}?>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>
</body>
</html>
<?php }?>


