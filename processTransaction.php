<?php
error_reporting(0);
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
date_default_timezone_set('Asia/Kolkata');
require_once("includes/config.php");
require_once('phpmailer/class.phpmailer.php');
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");

$query = "SELECT RegId FROM tbl_registration WHERE 1";
if ($result=mysqli_query($conn,$query)){
	$rowcount=mysqli_num_rows($result);
	if($rowcount < 1){
		$sql = "ALTER TABLE tbl_registration AUTO_INCREMENT=10000001";
		if (!mysqli_query($conn,$sql)){
		    die('Error: ' . mysqli_error($conn));
		}
	}
}

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
$PaymentModeSet='ONLINE';
//$isValidChecksum = "TRUE";

/*echo "<pre>";
print_r($_POST);
die;
*/
if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		$query = "INSERT INTO tbl_registration SET 
		WhoAreYou='".mysqli_real_escape_string($conn,$_SESSION['Price'])."',
		FirstName='".mysqli_real_escape_string($conn,$_SESSION['firstName'])."',
		LastName='".mysqli_real_escape_string($conn,$_SESSION['lastName'])."',
		DOB='".mysqli_real_escape_string($conn,$_SESSION['dob'])."',
		Height='".mysqli_real_escape_string($conn,$_SESSION['height'])."',
		Weight='".mysqli_real_escape_string($conn,$_SESSION['weight'])."',
		Gender='".mysqli_real_escape_string($conn,$_SESSION['gender'])."',
		HaveYouMembership='".mysqli_real_escape_string($conn,$_SESSION['haveYouMembership'])."',
		State='".mysqli_real_escape_string($conn,$_SESSION['state'])."',
		NearestCity='".mysqli_real_escape_string($conn,$_SESSION['nearestCity'])."',
		Address='".mysqli_real_escape_string($conn,$_SESSION['address'])."',
		Experience='".mysqli_real_escape_string($conn,$_SESSION['experience'])."',
		Languages='".mysqli_real_escape_string($conn,$_SESSION['languages'])."',
		InTos='".mysqli_real_escape_string($conn,$_SESSION['inTos'])."',
		Email='".mysqli_real_escape_string($conn,$_SESSION['email'])."',
		ContactNumber='".mysqli_real_escape_string($conn,$_SESSION['contactNumber'])."',
		VideoUrl='".mysqli_real_escape_string($conn,$_SESSION['videoUrl'])."',
		ProfilePic='".mysqli_real_escape_string($conn,$_SESSION['file_name'])."',
		PaymentModeSet='".mysqli_real_escape_string($conn,$PaymentModeSet)."',
		MID_PTM='".mysqli_real_escape_string($conn,$_POST['MID'])."',
		ORDERID_PTM='".mysqli_real_escape_string($conn,$_POST['ORDERID'])."',
		TXNID_PTM='".mysqli_real_escape_string($conn,$_POST['TXNID'])."',
		BANKTXNID_PTM='".mysqli_real_escape_string($conn,$_POST['BANKTXNID'])."',
		TXNAMOUNT_PTM='".mysqli_real_escape_string($conn,$_POST['TXNAMOUNT'])."',
		CURRENCY_PTM='".mysqli_real_escape_string($conn,$_POST['CURRENCY'])."',
		STATUS_PTM='".mysqli_real_escape_string($conn,$_POST['STATUS'])."',
		RESPCODE_PTM='".mysqli_real_escape_string($conn,$_POST['RESPCODE'])."',
		RESPMSG_PTM='".mysqli_real_escape_string($conn,$_POST['RESPMSG'])."',
		TXNDATE_PTM='".mysqli_real_escape_string($conn,$_POST['TXNDATE'])."',
		GATEWAYNAME_PTM='".mysqli_real_escape_string($conn,$_POST['GATEWAYNAME'])."',
		BANKNAME_PTM='".mysqli_real_escape_string($conn,$_POST['BANKNAME'])."',
		PAYMENTMODE_PTM='".mysqli_real_escape_string($conn,$_POST['PAYMENTMODE'])."',
		CHECKSUMHASH_PTM='".mysqli_real_escape_string($conn,$_POST['CHECKSUMHASH'])."',
		AddedDate='".date('d-m-Y')."',
		sessid='".session_id()."',
		iplog='".$_SERVER['REMOTE_ADDR']."'";
		$results = mysqli_query($conn, $query);
		$regId = mysqli_insert_id($conn);
		
		$imageArr = array();
		$filesName = explode(",", $_SESSION['file_name']);
        $image_count = 1;
		foreach($filesName as $value){
        	$fileSource = "tmpUploads/".$value;
    		$newFileName = "IMG_".$image_count."_".$regId.".jpg";
    		$fileDestination = "uploads/".$newFileName;
    		copy($fileSource, $fileDestination);
    		@unlink($fileSource);
    		$dir = 'tmpUploads';
            foreach(glob($dir.'*.*') as $v){
               @unlink($v);
            }
    		$imageArr[] = $newFileName;
            $image_count ++; 
		}
        
        $image_name = @implode(',', $imageArr);

		$query1 = "UPDATE tbl_registration SET ProfilePic='".mysqli_real_escape_string($conn,$image_name)."' WHERE RegId=".$regId."";
		$result = mysqli_query($conn, $query1);

		if($_POST['STATUS']=='TXN_SUCCESS'){
			$TXN_SUCCESS = 'Success';
		}

		if($_POST['TXNID']!=""){
			$TXNID = $_POST['TXNID'];
		}

		$urlStr = "You%20have%20successfully%20registered%20with%20Reg.%20No.%20".$regId."%20for%20LOVELY%20FILMS.";
		$urlAPI = "http://websms.one97.net/sendsms/sms_request.php?username=binsys1&password=binsys&smsfrom=LOVELY&receiver=".$_SESSION['contactNumber']."&content=".$urlStr."";
		$homepage = file_get_contents($urlAPI);

		$message = '<html>
		<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title></title>
		</head>
		<body>
		<table width="100%" border="0" style="border: solid 1px #FF9900;">
		  <tr>
		    <td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">Dear '.ucfirst($_SESSION['firstName']).',<br/><br/>You have successfully registered for Lovely Films Production Private Limited.</td>
		  </tr>
		  <tr>
		    <td height="53" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;">
		    Payment status: '.$TXN_SUCCESS.'<br>
		    Your transaction ID: '.$TXNID.'<br>
		    Your Registration No: <b>'.$regId.'</b><br>
		    Your Name : <b>'.ucfirst($_SESSION['firstName']).' '.ucfirst($_SESSION['lastName']).'</b><br>
		    Your Mobile : <b>+91'.$_SESSION['contactNumber'].'</b><br>
		    Your Email : <b>'.$_SESSION['email'].'</b>
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

		$mail = new PHPMailer(true); //New instance, with exceptions enabled
		$body             = "$message";
		$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
		$mail->IsSMTP();                           // tell the class to use SMTP
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Port       = 25;                    // set the SMTP server port
		$mail->Host       = "admin.inbox18.com"; // SMTP server
		$mail->Username   = "44614727";     // SMTP server username
		$mail->Password   = "bvRWB40GaE";            // SMTP server password
		$mail->IsSendmail();  // tell the class to use Sendmail
		$mail->AddReplyTo("info@lovelyfilms.in","No Reply");
		$mail->From       = "info@lovelyfilms.in";
		$mail->FromName   = "Lovely Films";
		$to = trim($_SESSION['email']);
		$mail->AddAddress($to);
		$mail->Subject  = "Lovely Films Registration No ". $regId;
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap   = 80; // set word wrap
		$mail->MsgHTML($body);
		$mail->IsHTML(true); // send as HTML
		$mail->Send();
		header("location: statusPayment?msg=Success");
	}
	else {
		//echo "<b>Transaction status is failure</b>" . "<br/>";
		//header('Location: register?msg=Transaction failure!');
		header('Location: statusPayment?msg=Failure');
	}
}
else{
	//echo "<b>Checksum mismatched.</b>";
	//header('Location: register?msg=Checksum mismatched!');
	header('Location: statusPayment?msg=Mismatched');
}	
?>