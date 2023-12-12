<?php
error_reporting(0);
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
if((!isset($_SESSION)) || (!isset($_POST))){
  header('Location:register');
}else{
require_once("includes/config.php");
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");

$whoAreYou                      = explode("_", $_POST['whoAreYou']);
$_SESSION['whoAreYou']          = $whoAreYou['1'];
$_SESSION['firstName']          = $_POST['firstName'];
$_SESSION['lastName']           = $_POST['lastName'];
$_SESSION['dob']                = $_POST['dob'];
$_SESSION['height']             = $_POST['height'];
$_SESSION['weight']             = $_POST['weight'];
$_SESSION['gender']             = $_POST['gender'];
$_SESSION['haveYouMembership']  = $_POST['haveYouMembership'];
$_SESSION['state']              = $_POST['state'];
$_SESSION['nearestCity']        = $_POST['nearestCity'];
$_SESSION['address']            = $_POST['address'];
$_SESSION['experience']         = $_POST['experience'];
$_SESSION['languages']          = $_POST['languages'];
$_SESSION['languagesName']      = $_POST['languagesName'];
$_SESSION['inTos']              = $_POST['inTos'];
$_SESSION['email']              = $_POST['email'];
$_SESSION['contactNumber']      = $_POST['contactNumber'];
$_SESSION['videoUrl']           = $_POST['videoUrl'];

for($i=0; $i<count($_FILES["uploadFile"]["name"]); $i++){
   $fileArr[] = $_FILES["uploadFile"]["name"][$i];
}

$_SESSION['file_name'] = @implode(',', $fileArr);
$filesName = explode(",", $_SESSION['file_name']);


if($_SESSION['languagesName']==""){
    foreach ($_POST['languages'] as $value){
        $languagesArr[] = $value;
    }
    $_SESSION['languages'] = @implode(',', $languagesArr);
    $langName = explode(",", $_SESSION['languages']);
}else{
    $languagesName = $_SESSION['languagesName'];
    $_SESSION['languages'] = $languagesName;
}


$queryTypeName = mysqli_query($conn, "SELECT ID, Name,Price FROM tbl_types WHERE ID='".$_SESSION['whoAreYou']."'");
$rowTypeName = mysqli_fetch_array($queryTypeName);
$_SESSION['Price'] = $rowTypeName['Price'];

$checkSum = "";
$paramList = array();

$ORDER_ID = "LFPH" . rand(10000,99999999);
$CUST_ID = "CUST001";
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = $_SESSION['Price'];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

$paramList["CALLBACK_URL"] = "http://lovelyfilms.in/beta/lovelyfilms/processTransaction";
$paramList["MSISDN"] = "8130423725"; //Mobile number of customer
$paramList["EMAIL"] = "aftab.alam@binsys.co.in"; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //
//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

$queryHeight = mysqli_query($conn, "SELECT ID, Height FROM tbl_height WHERE ID='".$_SESSION['height']."'");
$rowHeight = mysqli_fetch_array($queryHeight);

$queryState = mysqli_query($conn, "SELECT ID, Name FROM tbl_state WHERE ID='".$_SESSION['state']."'");
$rowState = mysqli_fetch_array($queryState);

$queryCity = mysqli_query($conn, "SELECT ID, Name FROM tbl_city WHERE ID='".$_SESSION['nearestCity']."'");
$rowCity = mysqli_fetch_array($queryCity);





?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<!-- Title Page-->
<title>Lovely Films Production House</title>

<!-- Icons font CSS-->
<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Font special for pages-->

<!-- Vendor CSS-->

<link href="css/select2.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/main_rg.css" rel="stylesheet" media="all">

<!--new links-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> -->
<!--end of new links-->
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
<!--navigation-->
<?php include('header.php');?>
<!--end of navigation-->
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
				  <p class="gr-cl">: <?php echo ucfirst($rowTypeName['Name']);?></p>
               </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">First Name</div>
            <div class="value">
              <div class="input-group">
				  <p class="gr-cl">: <?php echo ucfirst($_SESSION["firstName"]);?></p>
              
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Last Name</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo ucfirst($_SESSION["lastName"]);?></p>
             
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Date of Birth</div>
            <div class="value">
              <div class="input-group">
				  <p class="gr-cl">: <?php echo $_SESSION["dob"];?></p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Height</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $rowHeight["Height"];?></p>
              
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Weight</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["weight"];?> KG</p>
               
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Gender</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["gender"];?></p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Have you CINTAA membership ?</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["haveYouMembership"];?></p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">State</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $rowState["Name"];?></p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Your city or nearest city</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $rowCity["Name"];?></p>
        
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Address</div>
            <div class="value">
              <div class="input-group">
				  <p class="gr-cl">: <?php echo $_SESSION["address"];?></p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Experience</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["experience"];?> Years</p>
                
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Languages</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">:
				   
				   <?php 
				    if($_SESSION['languagesName']==""){
				        $hasComma = false;
                        foreach($langName as $value){
                            $queryLanguage = mysqli_query($conn, "SELECT ID, Name FROM tbl_language WHERE ID='".$value."'");
                            $rowLanguage = mysqli_fetch_array($queryLanguage);
                            if ($hasComma){ 
                                echo ", "; 
                            }
                            echo '<span>'.ucfirst($rowLanguage['Name']).'</span>';
                            $hasComma=true;
                        }  
				    }else{
				        echo '<span>'.ucfirst($languagesName).'</span>';
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
				   <p class="gr-cl">: <?php echo $_SESSION["inTos"];?></p>
              
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Email</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["email"];?></p>
            
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Contact Number</div>
            <div class="value">
              <div class="input-group">
				   <p class="gr-cl">: <?php echo $_SESSION["contactNumber"];?></p>
               
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Video Url</div>
            <div class="value">
              <div class="input-group">
				<p class="gr-cl">: <?php echo $_SESSION["videoUrl"];?></p>
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
                    foreach($filesName as $value){
                    ?>
                    <img height="100" width="80" src="tmpUploads/<?php echo $value;?>"/>
                    <?php $i++; }?>
                </p>
              </div>
            </div>
          </div>

          <form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
              <?php
              foreach($paramList as $name => $value) {
                  echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
              }
              ?>
              <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum; ?>">
		          <div class="full">
                <button class="btn btn-danger" type="submit" name="submit" value="Checkout">Proceed to Pay </button>
                <!-- <a class="btn btn-danger" href="javascript:history.back();" style="text-decoration:none;">Back</a> -->
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--footer section-->
<?php include('footer.php');?>
</body>
</html>
<!-- end document-->
<?php }?>


