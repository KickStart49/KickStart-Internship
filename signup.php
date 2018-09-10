<?php

include("session.php");

?>

<html>
<head>
	<title>Internshala Login</title>
	<link rel="stylesheet" href="css/authstyle.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loading.css">
</head>
<body>
  <div class="container text-center middle">
    <div class="row">

<!--................................Text..................................-->
<!--................................Text..................................-->

      <div class="col-md-6 col-12">
        <div class="" style="position: relative;">
          <a href="" id="student"><button class="btn btn-default">STUDENT REGISTRATION</button></a>
          <a href="" id="employer"><button class="btn btn-dark">EMPLOYER REGISTRATION</button></a>
          <br><br>
          <?php echo message(); ?>
        </div>
        <div class="jumbotron">
          <div class="text">
          <h1>Hire The Best Interns</h1> 
          <hr class="style13">
          <br>
          <p>More than 80,000 brands trust Internshala for hiring interns.
              Find interns across 100+ profiles round the year. And it's free!</p> 
          </div>
          <div class="text" style="display: none;">
          <h1>Free Ride To Your Dream Internship</h1> 
          <hr class="style13">
          <br>
          <p>More than 80,000 interns trust Internshala for applying interns.
              Find internship across 100+ companies round the year. And it's free!</p> 
          </div>
        </div>
        
      </div>

<!--................................Login..................................-->
<!--................................Login..................................-->
      <div class="col-md-6 col-12 h-100 justify-content-center align-items-center">
        <div class="login stureg">
          <h1>INTERNSHALA &nbsp;<strong>STUDENT</strong> REGISTRATION</h1>
            <form class="form-group" method="post" action="register.php">
              <h6 style="display: none;"> <br>
  <select class="custom-select form-control" name="student" id="inlineFormCustomSelectPref">
    <option selected value="student">STUDENTS</option>
  </select></h6>
              <h6> <br>
                <input type="text" name="name"  id="name" placeholder="Student Name" required>
              </h6>
              <h6> <br>
                <input type="email" name="email"  id="email" placeholder="Student Email" required>
              </h6>
              <h6> <br><input type="password" name="password"  id="password" placeholder="Password" required></h6>
              <h6> <br><input type="password" name="conpassword"  id="conpassword" placeholder="Confirm Password" data-rule-password="true" data-rule-equalTo="#password" required></h6>
              <br>
              <button type="submit" class="mx-auto" name="submit" id="login">SignUp &nbsp;<span class="ld ld-hourglass ld-spin-fast" style="font-size:12px;color:#cde5ef;"></span></button>
            </form>
          <div class="login-help">
            
            <p>Want to Login ?<a href="login"><strong>Click here to Login</strong></a>.</p>
          </div>
        </div>
      
      
        <div class="login hidden empreg">
          <h1>INTERNSHALA &nbsp;<strong>EMPLOYER</strong> REGISTRATION</h1>
            <form method="post" action="register.php">
              <h6 style="display: none;"> <br>
  <select class="custom-select form-control" name="employer" id="inlineFormCustomSelectPref">
    <option selected value="employer">EMPLOYER</option>
  </select></h6><h6><br>
                <input type="text" name="name"  id="name" placeholder="Organization Name" required>
              </h6>
              <h6> <br>
                <input type="email" name="email"  id="email" data-rule-email="true" placeholder="Organization Email" required>
              </h6>
              <h6> <br><input type="password" name="password"  id="password" data-rule-password="true"  placeholder="Password" required></h6>
              
              <h6> <br><input type="password" name="conpassword"  id="conpassword" placeholder="Confirm Password" data-rule-password="true" data-rule-equalTo="#password" required></h6>
              <br>
              <button type="submit" class="mx-auto" name="submit" id="login">SignUp &nbsp;<span class="ld ld-hourglass ld-spin-fast" style="font-size:12px;color:#cde5ef;"></span></button>
            </form>
          <div class="login-help">
            
            <p>Want to Login ? <a href="login"><strong>Click here to Login</strong></a>.</p>
          </div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
  $next = 1;      // fixed, please do not modfy;
  $current = 0;   // fixed, please do not modfy;
  $interval = 4000; // You can set single picture show time;
  $fadeTime = 800;  // You can set fadeing-transition time;
  $textNum = 2;    // How many pictures do you have
 
  $(document).ready(function(){
    //NOTE : Div Wrapper should with css: relative;
    //NOTE : img should with css: absolute;
    //NOTE : img Width & Height can change by you;
    $('.jumbotron').css('position','relative');
    $('.jumbotron .text').css({'position':'absolute'});
 
    nextFadeIn();
  });
  
  function nextFadeIn(){
    //make image fade in and fade out at one time, without splash vsual;
    $('.jumbotron .text').eq($current).delay($interval).fadeOut($fadeTime)
    .end().eq($next).delay($interval).hide().fadeIn($fadeTime, nextFadeIn);
        
    // if You have 5 images, then (eq) range is 0~4 
    // so we should reset to 0 when value > 4; 
    if($next < $textNum-1){ $next++; } else { $next = 0;}
    if($current < $textNum-1){ $current++; } else { $current =0; }
  };
</script>
<script type="text/javascript">
  $(function() {

    $('#student').click(function(e) {
    $(".stureg").delay(100).fadeIn(1000);
    $(".empreg").fadeOut(1000);
    $('.empreg').addClass('hidden');
    $('.stureg').removeClass('hidden');
    e.preventDefault();
  });
  $('#employer').click(function(e) {
    $(".empreg").delay(100).fadeIn(1000);
    $(".stureg").fadeOut(1000);
    $('.stureg').addClass('hidden');
    $('.empreg').removeClass('hidden');
    e.preventDefault();
  });

});

</script>
<script>$('#password').keypress(function(event){if(event.which == 13){$('#login').click();}});</script>
  <script src="js/authstyle.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>	



