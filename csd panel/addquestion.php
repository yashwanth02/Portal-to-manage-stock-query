<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Questions</title>
    <link rel="stylesheet" href="./addquestion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <form id="add-ques"  action="db.php" method="POST">
        <div id="add-question" style="background-color:#FFEBCD; font-weight: bold; font-size: 40px; text-align: center; color: brown;text-decoration: underline;">
            <a href="db.php?home">
                <img src="data:image/png;base64,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" height="60" width="55" style="position: absolute;top:0px;left:15px;"/>
            </a>
            ADD QUESTION
        </div>
        <p class="text-primary text-center"><?php if(isset($msg1)) echo $msg1; ?></p>
        <div style="font-weight: bold;font-size:22px;"><b><u>QUESTION</u>:</b></div>
        <textarea id="question" placeholder="Enter the Question" name="ques" class="border border-danger rounded shadow" style="width: 100%; height:250px;" required></textarea><br/>
        <br/>
        <div style="font-weight: bold;font-size:22px;"><b><u>LEVEL OF QUESTION</u>:</b></div>
        <input type="radio"  name="level" value ="easy">Easy<br/>
        <input type="radio" name="level" value ="medium">Medium<br/>
        <input type="radio" name="level" value ="hard">Hard<br/><br/>
        <div style="font-weight: bold;font-size:22px;"><b><u>SUBJECT</u>:</b></div>
        SUBJECT:&nbsp;<input type="text" name="sub" id="subject" class=" border border-danger rounded"><br/><br/>
        <div style="font-weight: bold;font-size:22px;"><b><u>SEMESTER</u>:</b></div>
        Choose Semester: &nbsp;
        <div class="form-group">
            <select class="form-control" style="width: 250px;" name = "sem">
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
        <div style="font-weight: bold;font-size:22px;"><b><u>TEST CASES</u>:</b></div>
        Input1:&nbsp;<input type="text" name="i1" style="position: relative" class="border border-danger rounded" required>&nbsp;&nbsp;
        Output1:&nbsp;<input type="text" name="o1" style="position: relative" class="border border-danger rounded"required> <br><br>
        Input2:&nbsp;<input type="text" name="i2" style="position: relative" class="border border-danger rounded" required>&nbsp;&nbsp;
        Output2:&nbsp;<input type="text" name="o2" style="position: relative" class="border border-danger rounded"required> <br><br>
        Input3:&nbsp;<input type="text" name="i3" style="position: relative" class="border border-danger rounded" >&nbsp;&nbsp;
        Output3:&nbsp;<input type="text" name="o3" style="position: relative" class="border border-danger rounded"> <br><br>
        Input4:&nbsp;<input type="text" name="i4" style="position: relative" class="border border-danger rounded">&nbsp;&nbsp;
        Output4:&nbsp;<input type="text" name="o4" style="position: relative" class="border border-danger rounded"> <br><br>
        Input5:&nbsp;<input type="text" name="i5" style="position: relative" class="border border-danger rounded">&nbsp;&nbsp;
        Output5:&nbsp;<input type="text" name="o5" style="position: relative" class="border border-danger rounded"> <br><br>
        Input6:&nbsp;<input type="text" name="i6" style="position: relative" class="border border-danger rounded">&nbsp;&nbsp;
        Output6:&nbsp;<input type="text" name="o6" style="position: relative" class="border border-danger rounded"> <br><br>
        Input7:&nbsp;<input type="text" name="i7" style="position: relative" class="border border-danger rounded">&nbsp;&nbsp;
        Output7:&nbsp;<input type="text" name="o7" style="position: relative" class="border border-danger rounded"> <br><br>
        Input8:&nbsp;<input type="text" name="i8" style="position: relative" class="border border-danger rounded">&nbsp;&nbsp;
        Output8:&nbsp;<input type="text" name="o8" style="position: relative" class="border border-danger rounded"> <br><br>
        <input type="submit" value="Submit" id="sub_but" name="addques" class="btn btn-danger">&nbsp;
        <button type="Reset" class="btn btn-danger">Reset</button>&nbsp;
        <button  class="btn btn-danger">Add Solution</button><br/>
    </form>
  </div>
</body>
</html>
