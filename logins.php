<?php
$uname=$_POST['uname'];
$password=$_POST['password'];
session_start();
$con=mysqli_connect("localhost","root","","mydb");
$result=mysqli_query($con,"SELECT * FROM `logins` WHERE `uname`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
  $_SESSION['log']=1;
  $_SESSION['unamee']=$uname;
  $_SESSION['password']=$password;
  $_SESSION['image']=$image;
  header("Location:attendance1.php");

}
else
{
  echo '<img src="mainerror.jpg" alt="fail" />';
  header("refresh:2;url=indexs.php");
}
?>
