<?php
$uploadfile=$_FILES["txtUploadFile"]["tmp_name"];
$folder="tmpUploads/";
move_uploaded_file($_FILES["txtUploadFile"]["tmp_name"], "$folder".$_FILES["txtUploadFile"]["name"]);
echo $_FILES["txtUploadFile"]["name"];


/*$newfilename = rand(100000,999999).'_'. $_FILES["uploadFile"]["name"];
move_uploaded_file($_FILES["uploadFile"]["tmp_name"], "tmpUploads/" . $newfilename);
echo $newfilename;*/

?>