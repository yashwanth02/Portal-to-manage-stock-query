<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Signup</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./signup.css">
</head>
<body>
<div id="pic">
  <img src="https://w0.peakpx.com/wallpaper/780/201/HD-wallpaper-motivation-coding-i-can-do-it-programing.jpg" alt="Coding Pic" width="750px" height="800px;" style="position:fixed;margin-top:-20px;">
</div>
<div id="signup-form-wrap">
  <h2><u>SIGNUP</u></h2>
  <p style="color:green;text-align: center;"><?php  if(isset($msg1)) echo $msg1; ?></p>
  <p style="color:red; text-align: center;"><?php if(isset($msg2)) echo $msg2; ?></p>
  <p style="color:red;text-align: center;"><?php if(isset($msg3)) echo $msg3; ?></p>
  <p style="color:grey;text-align: center;"><?php  if(isset($msg4)) echo $msg4; ?></p>
  <form id="signup-form" action="db.php" method="POST">
    <p><input type="text" class="fname" name="fname" placeholder="Enter First Name" required></p>
    <p><input type="text" placeholder="Enter Middle Name" class="mname" name="mname"></p>
    <p><input type="text" placeholder="Enter Last Name" class="lname"name="lname" required></p>
    <p><input type="text" placeholder="Enter Employee ID Name" class="eid" name="eid" required></p>
    <p><input type="password" placeholder="Enter Password" class="pass1"  name="pass1" required></p>
    <p><input type="password" placeholder="Re-Enter Password" class="pass2" name="pass2" required></p>
    <p><input type="text" placeholder="Enter Email id" class="mail" name="mail" required></p>
    <p><input type="text" placeholder="Enter Phone number" class="phno" name="phno" required></p>
    <!-- <p>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <i class="validation"><span></span><span></span></i>
    </p> -->
      <input type="submit" id="signup" value="Signup" name ="signup">
  </form>
  <div id="create-account-wrap">
    <p> Already have an Account?<a href="login.php" style="color:#FECD70;">Click here</a><p>
  </div>
</div>
</body>
</html>
