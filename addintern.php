<?php
include("include/db.php");
session_start();
if(isset($_POST["submit"])){
	$category = mysqli_real_escape_string($connect,$_POST["selectcat"]);
	$detail = mysqli_real_escape_string($connect,$_POST["detail"]);
	$title = mysqli_real_escape_string($connect,$_POST["title"]);
	$uname = mysqli_real_escape_string($connect,$_GET["uname"]);
	$startdate = mysqli_real_escape_string($connect,$_POST["start"]);
	$applyby = mysqli_real_escape_string($connect,$_POST["applyby"]);
	$duration = mysqli_real_escape_string($connect,$_POST["duration"]);
	$type = mysqli_real_escape_string($connect,$_POST["type"]);
	$title = mysqli_real_escape_string($connect,$_POST["title"]);
	$postedon = date("Y/m/d");
	$location = mysqli_real_escape_string($connect,$_POST["location"]);

	if(isset($_POST["stnone"])){
		$stipend = mysqli_real_escape_string($connect,$_POST["stnone"]);
	}elseif(isset($_POST["stmon"])){
		$stipend = mysqli_real_escape_string($connect,$_POST["monthval"]);
		$stipend .= " /Month";
	}
	
	$compname = $uname;
	
	$execute1=mysqli_query($connect,"INSERT INTO internship(title,category,compname,location,startdate,duration,stipend,postedon,applyby,type,detail)VALUES('$title','$category','$compname','$location','$startdate','$duration','$stipend','$postedon','$applyby','$type','$detail')");
	if($execute1){
		$_SESSION["Success_Message"]="Internship added successfully";
	}			
	else{
		$_SESSION["Error_Message"]="Internship update error";
	}
	
echo '<script type="text/javascript">location.href = "admin.php";
</script>';
}
?>