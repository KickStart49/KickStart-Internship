<?php  
session_start();
		function message(){
		if(isset($_SESSION["Error_Message"])){

			$output = "<div class=\"alert alert-danger\" role=\"alert\">";
			$output.=htmlentities($_SESSION["Error_Message"]);
			$output.="</div>";
			$_SESSION["Error_Message"]=null;
			return $output;
			
		}
		elseif(isset($_SESSION["Success_Message"])) {
			$output1 = "<div class=\"alert alert-success\" role=\"alert\">";
			$output1.=htmlentities($_SESSION["Success_Message"]);
			$output1.="</div>";
			$_SESSION["Success_Message"]=null;
			return $output1;
		}
		elseif(isset($_SESSION["Load_Error_Message"])) {
			$output1 = "<div class=\"alert alert-danger\" role=\"alert\">";
			$output1.=htmlentities($_SESSION["Load_Error_Message"]);
			$output1.="</div>";
			$_SESSION["Load_Error_Message"]=null;
			return $output1;
		}

		}
	
		function check(){
			if(isset($_SESSION["User_Id"])){
				$uid = $_SESSION["User_Name"];	
			return $uid;
			}
			else{
				session_destroy();
				return "false";

			}

		}
?>
