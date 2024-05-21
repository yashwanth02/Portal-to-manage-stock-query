<!DOCTYPE html>
<html lang="en" >
<head>
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div id="pic">
  <img src="https://w0.peakpx.com/wallpaper/780/201/HD-wallpaper-motivation-coding-i-can-do-it-programing.jpg" alt="Coding Pic" width="700px" height="710px;">
</div>
<div id="login-form-wrap">
  <h2>LOGIN</h2>
  <p style="color:green;"><?php if(isset($msg1)) echo $msg1; ?></p>
  <form id="login-form" action="db.php" method="POST">
    <p>
    <input type="text" id="username" name="empid" placeholder="Employee ID" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
      <input type="submit" id="login" value="Login" name ="Login">
  </form>
  <div id="create-account-wrap">
    <p>Register? <a href="signup.php" style="color:#FECD70;">Create Account</a><p>
  </div>
</div>
</body>
</html>
