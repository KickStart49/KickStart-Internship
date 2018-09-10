<?php 
include("include/db.php");
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body> 

<!--****************************************************Menu*********************************************-->
<!--****************************************************Menu*********************************************-->
<div>
<nav class="navbar navbar-expand-lg fixed-top">
  <a class="navbar-brand" href="admin.php" style="color: white;">
    <img src="images/prahar.png" width="30" height="30" class="d-inline-block align-top" alt="">
    ADMIN SECTION
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mynav">
      <li class="nav-item active">
        <a class="nav-link" href="internships.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://praharpandya.blogspot.com">Blog</a>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="logout.php">   Logout</a>
            </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-default my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<!--****************************************************Main*********************************************-->
<!--****************************************************Main*********************************************-->
<br><br><br>
<div class="cotainer-fluid">

	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<h1 class="text">Internships</h1>
	<br>	
<?php 
$execute=mysqli_query($connect,"SELECT * FROM internship");
$rows = mysqli_num_rows($execute);
echo message();
while($datarow = mysqli_fetch_array($execute)){
 
	$id = $datarow["id"];
	$compname = $datarow["compname"];
	$postedon = $datarow["postedon"];
	$title = $datarow["title"];
	$location = $datarow["location"];
	$startdate = $datarow["startdate"];
  $duration = $datarow["duration"];
  $stipend = $datarow["stipend"];
  $applyby = $datarow["applyby"];
  $type = $datarow["type"];

	echo "<div class='hd'></div>
  <div class=\"card\">
        <div class=\"card-body\">
          <div class='row'>
            <div class='col-md-8'>
  		        <h3>".$title."</h3>
              
              <h4>".$compname."</h4>
              
              <h5>Location(s) : ".$location."</h5>
              
  			    </div>
            <div class='col-md-4'>

            </div>
          </div>
          <div class='row col-md-12'>
            <table class='table table-borederless'>
            <thead>
              <tr>
                  <th scope='col'>Start Date</th>
                  <th scope='col'>Duration</th>
                  <th scope='col'>Stipend</th>
                  <th scope='col'>Posted On</th>
                  <th scope='col'>Apply By</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>".$startdate."</td>
                  <td>".$duration."</td>
                  <td>".$stipend."</td>
                  <td>".$postedon."</td>
                  <td>".$applyby."</td>
              </tr>
            <tbody>
            <table>
          </div>
        </div>
  <div class=\"card-footer text-muted\">
          <div class='d-flex footer justify-content-between'>
              <div>
                <input type='text' class='te' readonly='readonly'  placeholder=".$type.">
              </div>
              <div>
  			        <a class='te' href='showintern.php?id=".$id."'>View Details</a></div>
              </div>
          </div>
        </div><div class='hd col-md-12'></div>
        <br>
	     ";			
}
?>
</div>
</div>
</div>
	


</body>
</html>