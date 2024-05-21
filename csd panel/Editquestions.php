<!DOCTYPE html>
<?php
$id = $_POST['qid'];
$sql="select * from question where qid='$id'";
$row=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($row);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Questions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  <body>
          <a href="db.php?home">
                  <img src="data:image/png;base64,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" height="60" width="55" style="position: absolute;top:0px;left:-2px;"/>
        </a>
      <div class="container col-lg-6 border border-danger rounded shadow well mt-5">
        <form action="" method="POST">
          <h1 class="text-center text-danger font-italic">Edit Questions</h1>
          <input type = "hidden" value = "<?php echo $id;?>" name = "qid"/>
          <p class="text-primary text-center"><?php if(isset($msg1)) echo $msg1; ?></p>
          <p class="text-danger text-center"><?php if(isset($msg2)) echo $msg2; ?></p>
          <div>
            <label style="font-weight:bold;">Question</label><br>
            <textarea name="ques" rows="8" cols="85" class="border border-danger rounded"><?php echo $fetch['ques']; ?></textarea>
          </div>
          <div>
            <label style="font-weight:bold;">Level</label><br>
            <input type="radio"  name="level" value ="easy">Easy<br>
            <input type="radio" name="level" value ="medium">Medium<br>
            <input type="radio" name="level" value ="hard">Hard<br>
          </div>
          <div>
            <label style="font-weight:bold;">Semester</label><br>
            <select class=" form-control border border-danger rounded" name="sem" value="<?php $fetch['sem']; ?>>
                <option value = "sem1">Semester-1</option>
                <option value = "sem2">Semester-2</option>
                <option value = "sem3">Semester-3</option>
                <option value = "sem4">Semester-4</option>
                <option value = "sem5">Semester-5</option>
                <option value="sem6">Semester-6</option>
                <option value="sem7">Semester-7</option>
                <option value="sem8">Semester-8</option>
            </select>
          </div>
          <div>
            <label style="font-weight:bold;">Subject</label><br>
            <input type="text" name="sub" value="<?php echo $fetch['sub']; ?>" class="border border-danger rounded shadow form-control">
          </div><br>
          <div>
            <label style="font-weight:bold;">i1</label>
            <input type="text" name="i1" value="<?php echo $fetch['i1']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o1</label>
            <input type="text" name="o1" value="<?php echo $fetch['o1']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i2</label>
            <input type="text" name="i2" value="<?php echo $fetch['i2']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o2</label>
            <input type="text" name="o2" value="<?php echo $fetch['o2']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i3</label>
            <input type="text" name="i3" value="<?php echo $fetch['i3']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o3</label>
            <input type="text" name="o3" value="<?php echo $fetch['o3']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i4</label>
            <input type="text" name="i4" value="<?php echo $fetch['i4']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o4</label>
            <input type="text" name="o4" value="<?php echo $fetch['o4']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i5</label>
            <input type="text" name="i5" value="<?php echo $fetch['i5']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o5</label>
            <input type="text" name="o5" value="<?php echo $fetch['o5']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i6</label>
            <input type="text" name="i6" value="<?php echo $fetch['i6']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o6</label>
            <input type="text" name="o6" value="<?php echo $fetch['o6']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i7</label>
            <input type="text" name="i7" value="<?php echo $fetch['i7']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o7</label>
            <input type="text" name="o7" value="<?php echo $fetch['o7']; ?>" class="border border-danger rounded shadow">
          </div>
          <div>
            <label style="font-weight:bold;">i8</label>
            <input type="text" name="i8" value="<?php echo $fetch['i8']; ?>" class="border border-danger rounded shadow">
            <label style="font-weight:bold;margin-left:20px;">o8</label>
            <input type="text" name="o8" value="<?php echo $fetch['o8']; ?>" class="border border-danger rounded shadow">
          </div>
          <input type="submit" id="submit" value="Submit" name="editques"  class="btn btn-danger" style="width: 100px; margin:5px;padding:5px;position:absolute;left:20px;">
        </form>
      </div>
  </body>
</html>