<?php
$name=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['psw'];
$gender=$_POST['gender'];
$cpsw = $_POST['cpsw'];

$sql="INSERT INTO login VALUES ('$name','$email','$pwd','$gender')";
include('user_process.php');
if($conn->query($sql)==true)
{
  if ($pwd===$cpsw)
  {
    header('location:welcomepage.php');
  }
}
 ?>
