<?php
include("include/db.php");
if(isset($_POST["submit"])){
	$name = mysqli_real_escape_string($connect,$_POST["name"]);
	$email = mysqli_real_escape_string($connect,$_POST["email"]);
	$password = mysqli_real_escape_string($connect,$_POST["password"]);
	$conpassword = mysqli_real_escape_string($connect,$_POST["conpassword"]);
	
	if($password != $conpassword){
		$_SESSION["Load_Error_Message"] = "Password didn't Match";
					echo '<script type="text/javascript">location.href = "signup";
					</script>';
	}else{

	$query = "SELECT * FROM register WHERE email = '$email'";
	$execute=mysqli_query($connect,$query);
	
		if(mysqli_fetch_array($execute)){
			$_SESSION["Load_Error_Message"] = "You are already our Registered User ! Login Here.";
			echo '<script type="text/javascript">location.href = "login";
				</script>';
		
		}
	elseif(isset($_POST["student"])){
				$stucat = mysqli_real_escape_string($connect,$_POST["student"]);
				$execute2 = mysqli_query($connect,"INSERT INTO register(name,email,password,category)VALUES('$name','$email','$password','$stucat')");
				if($execute2){
					$_SESSION["User_Name"] = $name;
					$_SESSION["User_Email"] = $email;
					$_SESSION["category"] = "student";
					$_SESSION["Success_Message"] = "Welcome ".$name." !";

					$query = "SELECT id FROM register WHERE email = '$email'";
					$execute=mysqli_query($connect,$query);
					if($dr = mysqli_fetch_array($execute)){
					$_SESSION["User_Id"] = $dr["id"];}

					echo '<script type="text/javascript">location.href = "internships";
					</script>';
				}else{
					$_SESSION["Load_Error_Message"] = "Something Went Wrong";
					echo '<script type="text/javascript">location.href = "login";
					</script>';
				}

	}elseif(isset($_POST["employer"])){
				$empcat = mysqli_real_escape_string($connect,$_POST["employer"]);
				$execute1 = mysqli_query($connect,"INSERT INTO register(name,email,password,category,date)VALUES('$name','$email','$password','$empcat','$date')");
				if($execute1){
					$_SESSION["User_Name"] = $name;
					$_SESSION["User_Email"] = $email;

					$_SESSION["category"] = "employer";
					$_SESSION["Success_Message"] = "Welcome ".$name." !";

					$query = "SELECT id FROM register WHERE email = '$email'";
					$execute=mysqli_query($connect,$query);
					if($dr = mysqli_fetch_array($execute)){
					$_SESSION["User_Id"] = $dr["id"];}

					echo '<script type="text/javascript">location.href = "admin";
					</script>';
				}else{
					$_SESSION["Load_Error_Message"] = "Something Went Wrong";
					echo '<script type="text/javascript">location.href = "login";
					</script>';
				}
	}	
}
}		
?>