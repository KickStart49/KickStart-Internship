<?php 
include('include/db.php');

if(isset($_POST["submit"])){	
		$email = mysqli_real_escape_string($connect,$_POST["email"]);
		$password = mysqli_real_escape_string($connect,$_POST["password"]);
		session_start();
		$query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
		$execute=mysqli_query($connect,$query);
		
		if($execute){
			if($dr=mysqli_fetch_array($execute)){
				if($dr["category"] == 'student'){
					$uid = $dr["id"];
					$uname = $dr["name"];
					$uemail = $dr["email"];
			
					$_SESSION["User_Id"] = $uid;
					$_SESSION["User_Name"] = $uname;
					$_SESSION["User_Email"] = $uemail;
					$_SESSION["category"] = "student";
					echo '<script type="text/javascript">location.href = "internships.php";
				</script>';
				}else{
					$uid = $dr["id"];
					$uname = $dr["name"];
					$uemail = $dr["email"];
					
					$_SESSION["category"] = "employer";
					$_SESSION["User_Id"] = $uid;
					$_SESSION["User_Name"] = $uname;
					$_SESSION["User_Email"] = $uemail;

					$_SESSION["Success_Message"] = "Welcome ".$uname." !";
					echo '<script type="text/javascript">location.href = "internships.php";
					</script>';
				}
			}
			else{
				$_SESSION["Load_Error_Message"] = "Something Went Wrong";
				echo '<script type="text/javascript">location.href = "login.php";
					</script>';
			}
		}
		else{
		$_SESSION["Load_Error_Message"] = "Something Went Wrong";
		echo '<script type="text/javascript">location.href = "login.php";
					</script>';
		}	
}

?>