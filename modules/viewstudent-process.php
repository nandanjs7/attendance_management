<?php
  $conn = new mysqli("localhost", "root", "", "mattendance");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
    }
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set sid='" . $_POST['sid'] . "', rollno='" . $_POST['rollno'] . "', name='" . $_POST['name'] . "',sex='".$_POST['sex']."',city='".$_POST['city']."',email='".$_POST['email']."',phone='".$_POST['phone']."' WHERE sid='" . $_POST['sid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE sid='" . $_GET['sid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Student Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Register Id: <br>
<input type="hidden" name="sid" class="txtField" value="<?php echo $row['sid']; ?>">
<input type="text" name="sid"  value="<?php echo $row['sid']; ?>" disabled>
<br>
Roll No: <br>
<input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>">
<br>
Name :<br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
sex :<br>
<input type="text" name="sex" class="txtField" value="<?php echo $row['sex']; ?>">
<br>
city :<br>
<input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
<br>
email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
phone :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>