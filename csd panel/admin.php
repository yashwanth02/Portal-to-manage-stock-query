 <?php
  $uid=$_SESSION['uid'];
  $sql="select * from userdata where uid='$uid'";
  $res=mysqli_query($con,$sql);
  $fetch=mysqli_fetch_array($res);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Admin</title>
</head>
<body style="background-color:#FBFBFB;">
    <div id="logo">
        <img src="https://www.gitam.edu/assets/images/GITAM-logo.png" height=100>
        <img src="https://www.gitam.edu/assets/images/spotlight/teacher-pointing-blackboard.svg" height=100 style="position:absolute;left:1250px"><br>
        <br>
    </div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FDEEDC;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  </button>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <label class="dropdown-toggle" data-toggle="dropdown" style="margin-left:1200px; margin-top:10px;font:18px Arial, sans-serif;" >Welcome <?php echo $fetch['fname']; ?>!</label>
            <ul class="dropdown-menu" style="margin-left:1200px; margin-top:10px;font: 15px Arial, sans-serif;">
                <li><a href="db.php?editprofile" class="dropdown-item"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                <li class="dropdown-divider"></li>
                <li><a href="db.php?logout" class="dropdown-item"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
            </ul>
        </li>
    </ul>
      <!-- <p style="margin-left:1200px; margin-top:10px;font: 15px Arial, sans-serif;"><b>
      </b></p> -->
</nav>
<div id="add-questions" style="position:absolute;left:450px;top:230px;">
        <img src="https://cdn0.iconfinder.com/data/icons/instagram-ui-1/24/Instagram-UI_post-512.png" width=100 height=120><br/>
        <a href="./addquestion.php">
            Add Questions
        </a>
    </div>
    <div id="manage-questions" style="position:absolute;left:450px;top:450px;">
        <img src="data:image/png;base64,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
" width=100 height=120/><br/>
        <a href="db.php?manageques">
            Manage Questions
        </a>
    </div>
    <div id="view-questions" style="position:absolute;left:750px;top:230px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-3vWNn_yADXTLEvdImj6-TA7uk79ckeUpuQ&usqp=CAU" width=100 height=120/><br/>
        <a href="db.php?viewques">
            View Questions
        </a>
    </div>
    <div id="view-solutions" style="position:absolute;left:750px;top:450px;">
        <img src="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width=100 height=120/><br/>
        <a href="db.php?viewsol">
            View Solutions
        </a>
    </div>
</body>
</html>