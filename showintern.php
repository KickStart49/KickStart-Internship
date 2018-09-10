<?php 
include("include/db.php");
include("session.php");
?>
<?php

$id=$_GET['id'];
$execute=mysqli_query($connect,"SELECT * FROM internship WHERE id = ".$id);
$rows = mysqli_num_rows($execute);

if($datarow = mysqli_fetch_array($execute)){
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
  $detail = $datarow["detail"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
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
              <a class="nav-link" aria-selected="false" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>   Logout</a>
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
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <h1 class="text"><?php echo $title; ?></h1> 
  <br> 
<?php
	echo "<div class='hd'></div>
  <div class='jumboshow'>
          <div class='row'>
            <div class='col-md-8'>";
            
            echo "
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
          <div class='d-flex footer justify-content-between'>
              <div>
                <input type='text' readonly='readonly'  placeholder=".$type.">
              </div>
          </div>
        <div class='hd col-md-12'></div>
        <br>
        <div class='jumbotron justify-content-center align-items-center'>
        <p>".$detail."</p>
        <div class=''>
        <form action='intern?id=".$id."' method='post'>
        <button class='apply mx-auto btn btn-dark'>Apply Now</button>
        </form>
        <button class='applied mx-auto btn btn-success disabled hidden'>Applied</button>
        <button class='empapply mx-auto btn btn-info disabled hidden'>Application is only for Students</button>
        </div>
        </div>
        </div>
       ";   
?>

</div>
</div>
</div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <?php
  if(isset($_SESSION["User_Id"])){
    $uid = $_SESSION["User_Id"];

    $query2 = "SELECT * FROM match_intern WHERE student_id = '$uid' AND intern_id = '$id'"; 
    $execute2=mysqli_query($connect,$query2);
    $rows2 = mysqli_num_rows($execute2);

  if($rows2){
  echo "<script type=\"text/javascript\">
    $('.apply').addClass('hidden');
    $('.applied').removeClass('hidden');
  </script>";
}
 $query3 = "SELECT * FROM register WHERE category = 'employer' AND id = '$uid'"; 
    $execute3=mysqli_query($connect,$query3);
    $rows3 = mysqli_num_rows($execute3);

if($rows3){
  echo "<script type=\"text/javascript\">
    $('.apply').addClass('hidden');
    $('.empapply').removeClass('hidden');
  </script>";
} 
}


  ?>
  
</body>
</html>