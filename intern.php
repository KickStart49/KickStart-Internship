<?php 
include('include/db.php');
session_start();
$intern_id = $_GET["id"];
if(isset($_SESSION["User_Id"])){
	$uid = $_SESSION["User_Id"];
	$execute=mysqli_query($connect,"INSERT INTO match_intern(student_id,intern_id)VALUES('$uid','$intern_id')");
	$_SESSION["Success_Message"] = "Applied Successful";
	echo '<script type="text/javascript">location.href = "showintern?id='.$intern_id.'";
				</script>';
}else{
	echo '<script type="text/javascript">location.href = "login";
				</script>';
}


?>