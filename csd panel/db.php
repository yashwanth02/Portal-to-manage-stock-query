<?php
$con=mysqli_connect("localhost","root","","miniproject");
session_start();
if(isset($_POST['signup']))
{
  if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['eid']) && !empty($_POST['pass1']))
  {
    $fn=$_POST['fname'];
    $mn=$_POST['mname'];
    $ln=$_POST['lname'];
    $emp=$_POST['eid'];
    $pass=$_POST['pass1'];
    $cpass=$_POST['pass2'];
    $phone = $_POST['phno'];
    $email = $_POST['mail'];
    $sql="select * from userdata where Employee='$emp'";
    $res=mysqli_query($con,$sql);
    $fetch=mysqli_fetch_array($res);
    if(empty($fetch))
    {
      if($pass==$cpass)
      {
        $sql1="insert into userdata values('','$fn','$mn','$ln','$emp','$pass','$phone','$email')";
        $res1=mysqli_query($con,$sql1);
      }
      if($res1)
      {
        $msg1="Successfully Signed Up..!!";
        require "login.php";
      }
      else
      {
        $msg2="Invalid Details";
        require "signup.php";
      }
    }
    else
    {
      $msg3="Already Data Exits";
      require "signup.php";
    }
  }
  else
  {
    $msg4="Please Fill the Details..! Details are mandatory";
    require "Register.php";
  }
}
elseif (isset($_POST['Login']))
{
  if(!empty($_POST['empid']) && !empty($_POST['password']))
  {
    $emp=$_POST['empid'];
    $p=$_POST['password'];
    $sql2="select * from userdata where Employee='$emp' and pass='$p'";
    $res2=mysqli_query($con,$sql2);
    $fetch2=mysqli_fetch_array($res2);
    if($fetch2>0)
    {
      $_SESSION['uid']=$fetch2['uid'];
      require "admin.php";
    }
    else
    {
      $msg5="User details are invalid";
      require "login.php";
    }
  }
  else
  {
    $msg5="Please Fill all the Details";
    require "login.php";
  }
}
elseif(isset($_POST['addques']))
 {
   $uid=$_SESSION['uid'];
   $sql="select * from userdata where uid='$uid'";
   $query=mysqli_query($con,$sql);
   $fetch=mysqli_fetch_array($query);
    if (isset($_SESSION['uid']))
    {
      if(!empty($_POST['ques']) && !empty($_POST['sub']) &&  !empty($_POST['i1']) && !empty($_POST['o1']) && !empty($_POST['i2']) && !empty($_POST['o2']))
      {
      $q = $_POST['ques'];
      $lq = $_POST['level'];
  	  $su = $_POST['sub'];
      $se=$_POST['sem'];
      $f= $fetch['fname'];
  	  $i1 = $_POST['i1'];
      $o1 = $_POST['o1'];
      $i2 = $_POST['i2'];
      $o2 = $_POST['o2'];
      $i3 = $_POST['i3'];
      $o3 = $_POST['o3'];
      $i4 = $_POST['i4'];
      $o4 = $_POST['o4'];
      $i5 = $_POST['i5'];
      $o5 = $_POST['o5'];
      $i6 = $_POST['i6'];
      $o6 = $_POST['o6'];
      $i7 = $_POST['i7'];
      $o7 = $_POST['o7'];
      $i8 = $_POST['i8'];
      $o8 = $_POST['o8'];
  	  $sql1="insert into question values('','$f','$q','$lq','$su','$se','$i1','$o1','$i2','$o2','$i3','$o3','$i4','$o4','$i5','$o5','$i6','$o6','$i7','$o7','$i8','$o8')";
      $res1=mysqli_query($con,$sql1);
        if($res1)
        {
          $msg1="Data Stored Successfully..!!";
          require "addquestion.php";
        }
        else
        {
          $msg2="Data Failed to Store :(";
          require "addquestion.php";
        }
      }
    }
    else
    {
      require "login.php";
    }
 }
 elseif (isset($_GET['Solution']))
 {
   if(isset($_SESSION['uid']))
   {
     require "addsolution.php";
   }
   else
   {
     require "login.php";
   }
 }
elseif (isset($_GET['Editques']))
 {
   if(isset($_SESSION['uid']))
   {
     require "Editquestion.php";
   }
   else
   {
     require "login.php";
   }
 }
 elseif (isset($_POST['edituser']))
{
  if(isset($_SESSION['uid']))
	{
		$n = $_POST['fname'];
    $l=$_POST['lname'];
		$m = $_POST['phone'];
		$e = $_POST['email'];
    $pass=$_POST['password'];
		$id = $_SESSION['uid'];
		$sql = "update userdata set fname = '$n',lname='$l',Phone = '$m',Email = '$e', pass='$pass' where uid = '$id'";
		$res = mysqli_query($con,$sql);
		if($res == true)
		{
			require 'admin.php';
		}
		else
		{
			$msg = "Something went wrong";
			require 'Edit user.php';
		}
	}
	else
	{
		require 'login.php';
	}
}
elseif(isset($_GET['manageques']))
{
  require "manageques.php";
}
elseif(isset($_GET['viewques']))
{
  require "viewques.php";
}
elseif(isset($_GET['viewsol']))
{
  require "viewsol.php";
}
elseif (isset($_GET['home']))
{
  if(isset($_SESSION['uid']))
  {
    require "admin.php";
  }
  else
  {
    require "login.php";
  }
}
elseif(isset($_GET['editprofile']))
{
  require "Edit.php";
}
else if(isset($_GET['logout']))
{
	if(isset($_SESSION['uid']))
	{
		SESSION_UNSET();
		SESSION_DESTROY();
		require 'login.php';
	}
	else
	{
		require 'login.php';
	}
}
elseif(isset($_POST['solution']))
{
    $qid = $_POST['qid'];
    $sql = "select * from question where qid='$qid'";
    $result = mysqli_query($con,$sql);
    $ques = mysqli_fetch_array($result);
    $q=$ques['ques'];
    $sol = $_POST['sol'];
    $lang = $_POST['lang'];
    $yesno = $_POST['yesno'];
    $query = "insert into solution values('','$q','$sol','$lang','$yesno')";
    $res= mysqli_query($con,$query);
      if($res)
      {
        $msg1="Solution Added Successfully :)";
        require "addsolution.php";
      }
      else
      {
        $msg2="Solution Failed to Store :(";
        require "addsolution.php";
      }
}

elseif(isset($_POST['quesfet']))
{
  $id = $_POST['qid'];
  require "addsolution.php";
}
elseif(isset($_POST['editmang']))
{
  $id = $_POST['qid'];
  require "editquestion.php";
}
elseif(isset($_POST['editmqu']))
 {
   $uid=$_SESSION['uid'];
   $sql="select * from userdata where uid='$uid'";
   $query=mysqli_query($con,$sql);
   $fetch=mysqli_fetch_array($query);
    if (isset($_SESSION['uid']))
    {
      if(!empty($_POST['ques']) && !empty($_POST['sub']) &&  !empty($_POST['i1']) && !empty($_POST['o1']) && !empty($_POST['i2']) && !empty($_POST['o2']))
      {
      $q = $_POST['ques'];
      $lq = $_POST['level'];
  	  $su = $_POST['sub'];
      $se=$_POST['sem'];
      $f= $fetch['fname'];
  	  $i1 = $_POST['i1'];
      $o1 = $_POST['o1'];
      $i2 = $_POST['i2'];
      $o2 = $_POST['o2'];
      $i3 = $_POST['i3'];
      $o3 = $_POST['o3'];
      $i4 = $_POST['i4'];
      $o4 = $_POST['o4'];
      $i5 = $_POST['i5'];
      $o5 = $_POST['o5'];
      $i6 = $_POST['i6'];
      $o6 = $_POST['o6'];
      $i7 = $_POST['i7'];
      $o7 = $_POST['o7'];
      $i8 = $_POST['i8'];
      $o8 = $_POST['o8'];
  	  $sql1="insert into question values('','$f','$q','$lq','$su','$se','$i1','$o1','$i2','$o2','$i3','$o3','$i4','$o4','$i5','$o5','$i6','$o6','$i7','$o7','$i8','$o8')";
      $res1=mysqli_query($con,$sql1);
        if($res1)
        {
          echo "<h1>Data Stored Successfully..!!</h1>";
          require "manageques.php";
        }
        else
        {
          $msg2="Data Failed to Store :(";
          require "editquestion.php";
        }
      }
    }
 }
elseif(isset($_POST['editques']))
{
  $qid = $_POST['qid'];
  $sql = "select * from question where qid='$qid'";
  $result = mysqli_query($con,$sql);
  $ques = mysqli_fetch_array($result);
  $qu = $_POST['ques'];
  //$lq = $_POST['level'];
  $su = $_POST['sub'];
  $se=$_POST['sem'];
  $i1 = $_POST['i1'];
  $o1 = $_POST['o1'];
  $i2 = $_POST['i2'];
  $o2 = $_POST['o2'];
  $i3 = $_POST['i3'];
  $o3 = $_POST['o3'];
  $i4 = $_POST['i4'];
  $o4 = $_POST['o4'];
  $i5 = $_POST['i5'];
  $o5 = $_POST['o5'];
  $i6 = $_POST['i6'];
  $o6 = $_POST['o6'];
  $i7 = $_POST['i7'];
  $o7 = $_POST['o7'];
  $i8 = $_POST['i8'];
  $o8 = $_POST['o8'];
  $sql="UPDATE question SET ques='$qu', sub='$su', sem='$se', i1='$i1', o1='$o1', i2='$i2', o2='$o2', i3='$i3', o3='$o3', i4='$i4', o4='$o4',i5='$i5', o5='$o5',i6='$i6', o6='$o6',i7='$i7', o7='$o7',i8='$i8', o8='$o8' where qid='$qid'";
  $res=mysqli_query($con,$sql);
    if($res)
    {
      echo '<h3>Data Updated</h3>';
      require "viewques.php";
    }
    else
    {
      require "login.php";
    }
  }

elseif(isset($_POST['editsolution']))
{
  $id = $_POST['sid'];
  require "editsolution.php";
}
elseif (isset($_POST['editsol']))
{
    $id = $_POST['sid'];
    $sql1="select * from solution where sid='$id'";
    $res1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($res1);
    $s=$_POST['sol'];
    $l=$_POST['lang'];
    $yn=$_POST['yesno'];
    $sql="UPDATE solution SET sol='$s', lang='$l', yes_no='$yn' where sid='$id'";
    $res=mysqli_query($con,$sql);
    if($res)
    {
      require "viewsol.php";
    }
    else
    {
      require "login.php";
    }
}
elseif (isset($_POST['Back']))
{
  require "manageques.php";
}
elseif (isset($_POST['editfet']))
{
   require "Editquestions.php";
}
elseif (isset($_POST['viewsolution']))
{
   require "viewsol.php";
}
elseif (isset($_POST['download']))
{
  $delimiter = ","; 
  $filename = 'users.csv';
  $id = $_POST['qid'];
  $query = "select * from question where qid='$id'"; 
  $f = fopen('php://memory', 'w'); 
  $fields = array('QID', 'FACULTY NAME', 'QUESTION', 'LEVEL OF QUESTION', 'SUBJECT', 'SEMESTER', 'INPUT-1', 'OUTPUT-1','INPUT-2', 'OUTPUT-2','INPUT-3', 'OUTPUT-3','INPUT-4', 'OUTPUT-4','INPUT-5', 'OUTPUT-5','INPUT-6', 'OUTPUT-6','INPUT-7', 'OUTPUT-7','INPUT-8', 'OUTPUT-8'); 
  fputcsv($f, $fields, $delimiter);
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);
  $lineData = array($row['qid'], $row['fname'], $row['ques'], $row['lques'], $row['sub'], $row['sem'], $row['i1'], $row['o1'],$row['i2'], $row['o2'],$row['i3'], $row['o3'],$row['i4'], $row['o4'],$row['i5'], $row['o5'],$row['i6'], $row['o6'],$row['i7'], $row['o7'],$row['i8'], $row['o8']); 
  fputcsv($f, $lineData, $delimiter); 

 
// Move back to beginning of file 
fseek($f, 0);
header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
elseif (isset($_POST['download-sol']))
{
  $delimiter = ","; 
  $filename = 'solution.csv';
  $id = $_POST['sid'];
  $query = "select * from solution where sid='$id'"; 
  $f = fopen('php://memory', 'w'); 
  $fields = array('SID', 'QUESTION', 'SOLUTION', 'LANGUAGE', 'YES_NO'); 
  fputcsv($f, $fields, $delimiter);
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);
  $lineData = array($row['sid'], $row['ques'], $row['sol'], $row['lang'], $row['yes_no']); 
  fputcsv($f, $lineData, $delimiter); 

 
// Move back to beginning of file 
fseek($f, 0);
header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
 ?>