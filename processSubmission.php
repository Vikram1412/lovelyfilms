<?php
error_reporting(0);
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
date_default_timezone_set('Asia/Kolkata');
require_once("includes/config.php");
require_once('phpmailer/class.phpmailer.php');

$query = "SELECT RegId FROM tbl_register WHERE 1";
if ($result=mysqli_query($conn,$query)){
	$rowcount=mysqli_num_rows($result);
	if($rowcount < 1){
		$sql = "ALTER TABLE tbl_register AUTO_INCREMENT=10100001";
		if (!mysqli_query($conn,$sql)){
		    die('Error: ' . mysqli_error($conn));
		}
	}
}


foreach ($_POST['txtExperienceInTo'] as $value){
    $ExperienceInToArr[] = $value;
}
$txtExperienceInTo  = @implode(',', $ExperienceInToArr);


foreach ($_POST['txtVideoUrl'] as $value){
    $VideoUrlArr[] = $value;
}
$txtVideoUrl  = @implode(',', $VideoUrlArr);


if($_POST['txtLanguagesName']==""){
    foreach ($_POST['txtLanguages'] as $value){
        $LanguagesArr[] = $value;
    }
    $txtLanguages = @implode(',', $LanguagesArr);
    $LanguagesName = "";

}else{
    foreach ($_POST['txtLanguages'] as $value){
        $LanguagesArr[] = $value;
    }
    $txtLanguages = @implode(',', $LanguagesArr);
    $LanguagesName = $_POST['txtLanguagesName'];

}


$queryHeight = mysqli_query($conn, "SELECT ID, Height FROM tbl_height WHERE ID='".$_POST['txtHeight']."'");
$rowHeight = mysqli_fetch_array($queryHeight);

$queryState = mysqli_query($conn, "SELECT id, name FROM tbl_state WHERE id='".$_POST['txtState']."'");
$rowState = mysqli_fetch_array($queryState);

$queryCity = mysqli_query($conn, "SELECT id, name FROM tbl_districts WHERE id='".$_POST['txtDistrict']."'");
$rowCity = mysqli_fetch_array($queryCity);

$txtHeightName   = $rowHeight['Height'];
$txtStateName    = $rowState['name'];
$txtDistrictName = $rowCity['name'];



$query = "INSERT INTO tbl_register SET 
WhoAreYou='".mysqli_real_escape_string($conn,$_POST['txtWhoAreYou'])."',
WhoAreYouOther='".mysqli_real_escape_string($conn,$_POST['txtWhoAreYouOther'])."',
FirstName='".mysqli_real_escape_string($conn,$_POST['txtFirstName'])."',
LastName='".mysqli_real_escape_string($conn,$_POST['txtLastName'])."',
DateofBirth='".mysqli_real_escape_string($conn,$_POST['txtDateofBirth'])."',
Height='".mysqli_real_escape_string($conn,$txtHeightName)."',
Weight='".mysqli_real_escape_string($conn,$_POST['txtWeight'])."',
Gender='".mysqli_real_escape_string($conn,$_POST['txtGender'])."',
CINTAAMembership='".mysqli_real_escape_string($conn,$_POST['txtCINTAAMembership'])."',
State='".mysqli_real_escape_string($conn,$txtStateName)."',
District='".mysqli_real_escape_string($conn,$txtDistrictName)."',
Address='".mysqli_real_escape_string($conn,$_POST['txtAddress'])."',
EduQualifications='".mysqli_real_escape_string($conn,$_POST['txtEduQualifications'])."',
Experience='".mysqli_real_escape_string($conn,$_POST['txtExperience'])."',
Languages='".mysqli_real_escape_string($conn,$txtLanguages)."',
LanguagesName='".mysqli_real_escape_string($conn,$LanguagesName)."',
ExperienceInTo='".mysqli_real_escape_string($conn,$txtExperienceInTo)."',
Email='".mysqli_real_escape_string($conn,$_POST['txtEmail'])."',
Mobile='".mysqli_real_escape_string($conn,$_POST['txtMobile'])."',
VideoUrl='".mysqli_real_escape_string($conn,$txtVideoUrl)."',
UploadFile='".mysqli_real_escape_string($conn,"")."',
ip_address='".$_SERVER['REMOTE_ADDR']."',
session_id='".session_id()."',
created_at='".date('d-m-Y')."'";
$results = mysqli_query($conn, $query);
$regId = mysqli_insert_id($conn);

//print_r($regId);die;

if (!file_exists('uploads/'.$regId)) {
    mkdir('uploads/'.$regId, 0777, true);
}

$imageArr = array();
if($regId >0){
  $j = 1; 
  
  for($i = 0; $i < count($_FILES['file']['name']); $i++) {

      $validextensions = array("jpeg", "jpg", "png");
      $ext = explode('.', basename($_FILES['file']['name'][$i]));
      $file_extension = end($ext);
      $target_path = "uploads/".$regId."/";
      $newFileName = "IMG_".$j.".jpg";
   
      $target_path = $target_path . $newFileName;

      $j = $j + 1;
      if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
          //echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
      } else {
          //echo $j. ').<span id="error">please try again!.</span><br/><br/>';
      }
      /*echo "<pre>";
      print_r($target_path);*/

      
    
      /*if(($_FILES["file"]["size"][$i])
              && in_array($file_extension, $validextensions)) {
          if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
              echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
          } else {
              echo $j. ').<span id="error">please try again!.</span><br/><br/>';
          }
      }*/
      $imageArr[] = $newFileName;
  }
}

$image_name = @implode(',', $imageArr);
//print_r($image_name);

/*$imageArr = array();
$filesName = explode(",", $_POST['file_name']);
$image_count = 1;

if (!file_exists('uploads/'.$regId)) {
    mkdir('uploads/'.$regId, 0777, true);
}

foreach($filesName as $value){
	$fileSource = "tmpUploads/".$value;
	$newFileName = "IMG_".$image_count."_".$regId.".jpg";
	$fileDestination = "uploads/".$regId.'/'.$newFileName;
	copy($fileSource, $fileDestination);
	@unlink($fileSource);
	$dir = 'tmpUploads';
    foreach(glob($dir.'*.*') as $v){
       @unlink($v);
    }
	$imageArr[] = $newFileName;
    $image_count ++; 
}

$image_name = @implode(',', $imageArr);*/

$query1 = "UPDATE tbl_register SET UploadFile='".mysqli_real_escape_string($conn,$image_name)."' WHERE RegId=".$regId."";
$result = mysqli_query($conn, $query1);


/*$urlStr = "You%20have%20successfully%20registered%20with%20Reg.%20No.%20".$regId."%20for%20LOVELY%20FILMS.";
$urlAPI = "http://websms.one97.net/sendsms/sms_request.php?username=binsys1&password=binsys&smsfrom=LOVELY&receiver=".$_SESSION['Mobile']."&content=".$urlStr."";
$homepage = file_get_contents($urlAPI);*/

$message = '<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title></title>
</head>
<body>
<table width="100%" border="0" style="border: solid 1px #FF9900;">
  <tr>
    <td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">Dear '.ucfirst($_SESSION['txtFirstName']).',<br/><br/>You have successfully registered for Lovely Films Private Limited.</td>
  </tr>
  <tr>
    <td height="53" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">
    Your Registration Number: <b>'.$regId.'</b><br>
    Your Name : <b>'.ucfirst($_SESSION['txtFirstName']).' '.ucfirst($_SESSION['txtLastName']).'</b><br>
    Your Mobile : <b>+91'.$_SESSION['txtMobile'].'</b><br>
    Your Email : <b>'.$_SESSION['txtEmail'].'</b>
    </td>
  </tr>
  <tr>
    <td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><br/><br/>Looking forward to a warm and longstanding association with you.</td>
  	</tr>
  <tr>
    <td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;"><br>Thank You.<br>Yours sincerely, <br><br>
      Manager - Customer Service<br>
      <br>
</td>
  </tr>
</table>
</body>
</html>';

/*$mail = new PHPMailer(true); //New instance, with exceptions enabled
$body             = $message;
$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
$mail->IsSMTP();                           // tell the class to use SMTP
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP server port
$mail->Host       = "master.sarvmail.com"; // SMTP server
$mail->Username   = "smtp99988706";     // SMTP server username
$mail->Password   = "zWF4tk5ZIW";            // SMTP server password
$mail->IsSendmail();  // tell the class to use Sendmail
$mail->AddReplyTo("info@lovelyfilms.in","No Reply");
$mail->From       = "info@lovelyfilms.in";
$mail->FromName   = "Lovely Films";
$to = trim($_SESSION['txtEmail']);
$mail->AddAddress($to);
$mail->Subject  = "Lovely Films Registration Number ". $regId;
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->WordWrap   = 80;
$mail->MsgHTML($body);
$mail->IsHTML(true);
$mail->Send();*/

echo "<script>location.href='status?msg=Success';</script>";
	
?>