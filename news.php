<?php
session_start();
require_once 'includes/config.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lovely Films</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<?php include('favicon.php'); ?>
</head>

<body>
<!-- Navigation -->

<?php 

include('header.php');

// this variable initiate for every pages title
$page_title ="News";
include('second-header.php');

?>

<!--news section-->
<section>
  <div class="full bg-white" >
    <div class="container">
      <div class="full">
        <h1 class="text-uppercase text-center mt-my">Top News</h1>
      </div>
      <div class="full mt-5">
        <?php
        $query = mysqli_query($conn, "SELECT id, title, description, link, photo FROM tbl_news WHERE 1");
        while($res = mysqli_fetch_array($query)){
        ?>
        <div class="full mb-5" style="border:solid 1px #b2b2b2;">
          <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12 float-left text-center forimg row">
            <img src="adminmain/uploads/news/<?php  if($res['photo']) { echo $res['photo']; } else { echo 'Na.png'; }?>" alt="" title="" style="height: 190px">
          </div>
			    <div class="col-xl-10 col-lg-8 col-md-6 col-sm-12 col-12 float-left mt-4 ml-3">
            <h2><?php echo stripslashes($res['title']); ?></h2>
            <p><a href="<?php echo stripslashes($res['link']); ?>"><?php echo stripslashes($res['description']); ?></a></p>
          </div>
        </div>
      <?php } ?>
      </div>
      </div>
    </div>
</section>
<!--end of news section--> 

<!--footer section-->
<?php include('footer.php');?>
<!--end of footer section--> 

</body>
</html>
