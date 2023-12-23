<?php

/*  $servername = "localhost";
$username = "binsysco";
$password = "g$9Qt@3KrE";
$db = "binsysco_lovelyfi_lovelyfilms"; */

$servername = "localhost";
$username = "root";
$password = "";
$db = "biosmart_lovelyfilms"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>

<?php function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
		//echo "1";
        $ip = $_SERVER['HTTP_CLIENT_IP'];
		
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
		//echo '2';
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
		//echo '3';
        $ip = $_SERVER['REMOTE_ADDR'];
		//echo $ip;
    }
	//echo '4';
	//echo $ip;
    return $ip;
}
//echo 'User Real IP - '.getUserIpAddr();
 $ip = getUserIpAddr();
 //echo "<br>";
?>
<?php
	//include 'dbconfig.php';
	$qry = "SELECT * FROM `ipdb` WHERE `ip` = '$ip'";
	$result = mysqli_query($conn,$qry);
	$num = mysqli_num_rows($result);
	if ($num == 0){
		$qry3 = "INSERT INTO `ipdb`(`ip`) VALUES ('$ip')";
		mysqli_query($conn,$qry3);
		//echo "new ip register";	
		$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
		$result1 = mysqli_query($conn,$qry1);
		$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
		$count = $row1['visiters'];
		$count = $count + 1;
		//echo "<br>";
		//echo "number of unique visiters is $count";
		$qry2 = "UPDATE `counter` SET `visiters`='$count' WHERE `id`=0";
		$result2=mysqli_query($conn,$qry2);
    }else{
		$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
		$result1 = mysqli_query($conn,$qry1);
		$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
		//print_r($row1);
		$count = $row1['visiters'];
		//echo "<br>";
		//echo "number of unique visiters is $count";
    }
?>