<?php 
include("include/db.php");
include("session.php");
$uname = check();
if($_SESSION["category"]=="student"){
	echo '<script type="text/javascript">
        alert("Only For Employers");
        location.href = "internships.php";
				</script>';
}elseif($uname == 'false'){
  echo '<script type="text/javascript">location.href = "login.php";
        </script>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">

<!--****************************************************Menu*********************************************-->
<!--****************************************************Menu*********************************************-->

			<div class="col-2 menu">
				<ul class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <div class="sidebar-header header-cover">
        
        <!-- Sidebar brand image -->
        <div class="sidebar-image">
           <img src="images/logo.png" style="width: 80%;">
        </div>
        <!-- Sidebar brand name -->
        <a data-toggle="dropdown" class="sidebar-brand text-center" style="color: #ffffff;">
            <?php echo 'Welcome '.strtoupper($_SESSION["User_Name"]). '!'; ?>
        </a>
        <br>
        <br>
    </div>
					
  					<li class="nav-item">
    					<a class="nav-link active" data-toggle="pill" aria-controls="dashboard" aria-selected="true" href="#dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>   Dashboard</a>
  					</li>
  					<li class="nav-item">
   	 					<a class="nav-link" data-toggle="pill" aria-controls="addintern" aria-selected="false" href="#addintern"><i class="fa fa-plus-square" aria-hidden="true"></i>   Post Internship</a>
  					</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" aria-controls="hire" aria-selected="false" href="#hire"><i class="fa fa-plus" aria-hidden="true"></i>   Hire Interns</a>
            </li>
  					<li class="nav-item">
    					<a class="nav-link" aria-selected="false" href="internships.php"><i class="fa fa-rss-square" aria-hidden="true"></i>   Go to Inernships</a>
  					</li>
  					<li class="nav-item">
   	 					<a class="nav-link" aria-selected="false" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>   Logout</a>
  					</li>
				</ul>
			</div>

<!--****************************************************Main*********************************************-->
<!--****************************************************Main*********************************************-->

			<div class="col-10 main">		
        <div class="tab-content" id="v-pills-tabContent">

<!--****************************************************Main*********************************************-->
<!--****************************************************Main*********************************************-->


        <div id="dashboard" class="tab-pane fade show active" role="tabpanel" aria-labelledby="dashboard'">
            <section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">DASHBOARD</h5>
        <div class="row">
          <?php echo message(); ?>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/prahar.jpg" alt="card image"></p>
                                    <h4 class="card-title">STUDENTS</h4>
                                    <p class="card-text">Over Millions of Students all over the World !</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-sign-out"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">STUDENTS</h4>
                                    <p class="card-text">More than 80,000 interns trust Internshala for applying interns.
              Find internship across 100+ companies round the year. And it's free!</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="images/employer.jpg" alt="card image"></p>
                                    <h4 class="card-title">EMPLOYERS</h4>
                                    <p class="card-text">Over 80000+ Brands all over the World !</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-sign-out"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">EMPLOYERS</h4>
                                    <p class="card-text">More than 80,000 brands trust Internshala for hiring interns.
Find interns across 100+ profiles round the year. And it's free!</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>
			  </div>

<!--****************************************************AddPost*********************************************-->
<!--****************************************************AddPost*********************************************-->

				<div id="addintern" class="tab-pane fade" role="tabpanel" aria-labelledby="addintern">
					<div class="jumbotron mx-auto align-items-center text-center">
  					<h1 class="display section-title">Start Hiring Now !</h1>
            <p class="lead">Post Your Internship Offer Free !</p>
  					<hr class="my-4">
  				<?php echo '	
					<form class="col-md-8 align-items-center was-validated" id="form" action="addintern.php?uname='.$uname.'" method="post" enctype="multipart/form-data"	>'; ?>
					<br>
					<div class="form-group">
    				<label for="selectcat">Select Category</label>
    				<select class="form-control" id="selectcat" name="selectcat">
<?php 
$execute=mysqli_query($connect,"SELECT * FROM category");
$rows = mysqli_num_rows($execute);
while($datarow = mysqli_fetch_array($execute)){
$name = $datarow["name"];
echo "<option value=".$name.">".$name."</option>";    					
}
?>
      
    				</select>
  					</div>
  						<div class="form-group">
    						<label for="title">Title</label>
    						<input type="text" name="title" class="form-control form-control-md" id="title" aria-describedby="title" placeholder="Title of Internship" required>
  						</div>
              <div class="form-group">
                <label for="start">Start Date</label>
                <select type="dropdown" name="start" class="form-control form-control-md" id="start" aria-describedby="start" placeholder="Starting Date" required>
                <option value="Immediate">Immediate</option>
                <option value="Next Month">Next Month</option>
              </select>
              </div>

              <div class="form-group">
                <label for="applyby">Apply By</label>
                <input type="date" name="applyby" class="form-control form-control-md" id="applyby" aria-describedby="applyby" placeholder="Apply By" required>
              </div>

              <div class="form-group">
                <label for="duration">Duration</label>
                <select type="dropdown" name="duration" class="form-control form-control-md" id="duration" aria-describedby="duration" placeholder="Enter Duration" required>
                <option value="1 Month">1 Month</option>
                <option value="2 Months">2 Months</option>
                <option value="3 Months">3 Months</option>
                <option value="4 Months">4 Months</option>
                <option value="5 Months">5 Months</option>
                <option value="6 Months">6 Months</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Years">2 Years</option>
              </select>
              </div>

               <div class="form-group">
                <label for="type">Internship Type</label>
                <select type="dropdown" name="type" class="form-control form-control-md" id="type" aria-describedby="type" placeholder="Internship Type" required>
                <option value="Part&nbsp;Time">Part Time</option>
                <option value="Full&nbsp;Time">Full Time</option>
              </select>
              </div>

             <div class="form-group">
                <label for="location">Location(s)</label>
                <input type="text" name="location" class="form-control form-control-md" id="location" aria-describedby="location" placeholder="Locations of your Internship" required>
              </div>

              <label>Stipend &nbsp;</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="stnone" name="stnone" value="None" class="custom-control-input" required>
                <label class="custom-control-label" for="stnone">None</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="stmon" name="stmon" value="per Month" class="custom-control-input" required>
                <label class="custom-control-label" for="stmon">Per Month</label>
              </div>
               <div class="form-group">
                <input type="number" name="monthval" class="form-control form-control-md" id="monthval" aria-describedby="monthval" placeholder="Stipend Per Month in $">
              </div>

  						<div class="form-group">
    					<label for="detail">Internship Details</label>
    					<textarea class="form-control" name="detail" id="detail" rows="10" required></textarea>
  						</div>
 
  						<button type="submit" name="submit" class="btn btn-dark">Submit</button>
  						<br>
  						<br>
					</form>
				</div>
				</div>
<!--****************************************************Hire*********************************************-->
<!--****************************************************Hire*********************************************-->

        <div id="hire" class="tab-pane fade" role="tabpanel" aria-labelledby="hire">
          <div class="span7">   
<div class="widget stacked widget-table action-table">
            
        <div class="widget-header">
          <i class="icon-th-list"></i>
          <h3 class="section-title h1">Hire Your Best Interns Free !</h3>
        </div> <!-- /widget-header -->
        
        <div class="widget-content">
          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Student Email</th>
                <th class="td-actions"></th>
              </tr>
            </thead>
            <tbody>
   <?php 
$uname = $_SESSION["User_Name"];
$query2 = "SELECT * FROM internship WHERE compname = '$uname'";
  $execute2 = mysqli_query($connect,$query2);

  while($dr = mysqli_fetch_array($execute2)){
    $uname = $dr["compname"];
    $intern_id = $dr["id"];
     $query1 = "SELECT * FROM match_intern WHERE intern_id = '$intern_id'";
      $execute1=mysqli_query($connect,$query1);

  while($drow = mysqli_fetch_array($execute1)){
        $student_id = $drow['student_id'];

        $query3 = "SELECT * FROM register WHERE id = '$student_id' AND category = 'student'";
        $execute3=mysqli_query($connect,$query3);
        
  while($dro = mysqli_fetch_array($execute3)){
      echo '
              <tr>
                <td>'.$dro["name"].'</td>
                <td>'.$dro["email"].'</td>
                <td class="td-actions">
                  <a class="btn btn-small btn-primary">
                    <i class="fa fa-check "></i>                   
                  </a>
                  
                  <a class="btn btn-small btn-danger">
                    <i class="fa fa-times"></i>                   
                  </a>
                </td>
              </tr>'; } 

  }
}

?>      
              </tbody>
            </table>
          
        </div> <!-- /widget-content -->
      
      </div> <!-- /widget -->
            </div>
        </div>
				
	</div>
</div>
</div></div>

<!--****************************************************Script*********************************************-->
<!--****************************************************Script*********************************************-->

	<script src="js/jquery.js"></script>
  <script type="text/javascript" src="js/dropdown.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

