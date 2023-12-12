<?php
session_start();
include("includes/config.php");

if (! empty($_POST["state_id"])) {
    $query = "SELECT * FROM tbl_districts WHERE state_id = '" . $_POST["state_id"] . "' order by name asc";
    $results = mysqli_query($conn, $query);
    ?>
	<option value disabled selected>Select City</option>
	<?php foreach ($results as $city) { ?>
	<option value="<?php echo $city["id"]; ?>"><?php echo $city["name"]; ?></option>
	<?php
    }
}
?>