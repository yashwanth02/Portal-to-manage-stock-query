<!DOCTYPE html>
<?php
$uid=$_SESSION['uid'];
$sql = "select * from question where fname IN (select fname from userdata where uid='$uid')";
$res = mysqli_query($con,$sql);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>View Questions</title>
  </head>
  <body style="background-color:#FFE5B4;">
  <div id="head" style="font-weight: bold;background-color:chocolate;color:white;text-align:center;font-size: 40px;text-decoration: underline;">
              <a href="db.php?home">
                  <img src="data:image/png;base64,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" height="60" width="55" style="position: absolute;top:0px;left:-2px;"/>
              </a>
                VIEW QUESTIONS
            </div><br/><br/>
    <div class  = "container col-lg-12">
      <form method="POST" action="db.php">
        <table class = "table table-striped mt-3">
          <thead class = "mt-3">
            <!-- <h3 class = "text-center"><u> Manage Questions</u></h3> -->
          
            <tr>
              <th scope = "col">Sno</th>
              <th scope = "col">Question</th>
              <th scope = "col">Level of question</th>
              <th scope = "col">Subject</th>
              <th scope = "col">Semester</th>
              <th scope = "col">Action</th>
            </tr>
          </thead>
          <?php
          foreach($res as $row)
          {
          ?>
          <tbody>
            <td scope = "col"><?php echo $row['qid'];?></td>
            <td scope = "col"><?php echo $row['ques'];?></td>
            <td scope = "col"><?php echo $row['lques'];?></td>
            <td scope = "col"><?php echo $row['sub'];?></td>
            <td scope = "col"><?php echo $row['sem'];?></td>
            <td scope = "col">
            <form action = "db.php" method = "POST">
              <!-- <a type  = "button" href = "#" class = "btn btn-primary">View Question</a> -->
              <input type = "hidden" value = "<?php echo $row['qid'];?>" name = "qid">
              <button type  = "submit" name="editfet" class = "btn btn-primary">Edit Question</button>
              <button type= "submit" name="quesfet" class = "btn btn-success">Add Solution </button>
              <button type  = "submit" name="viewsolution" class = "btn btn-primary">View Solution</button>
              <button type  = "submit" name="download" class = "btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download Question</button>
            </form>
          </tbody>
          <?php }
          ?>
          </form>
        </table>
      </div>
  </body>
</html>
