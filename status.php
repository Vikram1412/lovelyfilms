<?php
error_reporting(0);
require_once("includes/config.php");

$msg = $_GET['msg'];
if($msg=="Success"){
    $errorMsg = "You have been successfully registered with us!"; 
}else if($msg=="Failure"){
    $errorMsg = "<p style='color:red'>Sorry, your registration failed. Please go back and try again<p> <a href='register'>Back</a>";
}else{
    $errorMsg = "<p style='color:red'>Sorry, your registration failed. Please go back and try again<p> <a href='register'>Back</a>";
}

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
<title>Lovely Films</title>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
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
</style>
</head>

<body>
<!--navigation-->
<?php 

include('header.php');

include('second-header.php');
?>
<!--end of navigation-->
<div class="page-wrapper bg-gra-03 p-b-50 bg-rg" style="padding-top:100px;">
  <div class="wrapper wrapper--w790">
    <div class="card card-5" style="margin-top:100px; height: 100px;">
     <h5 class="text-center" style="margin-top:35px; color:#348724;"><?php echo $errorMsg;?></h5>
    </div>
  </div>
</div>
<section>
<?php include('footer.php');?>
</section>


<script src="jquery/jquery.min.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/global.js"></script>
<script src="js/function.js"></script>
<script src="js/jquery.validate.min.js"></script>
</body>
</html>
