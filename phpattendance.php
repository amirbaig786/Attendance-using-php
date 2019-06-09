<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="mydb";
session_start();
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("");
}
catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$usn=$_POST['num'];
$name=$_POST['name'];
$contact=$_POST['contactno'];
$email=$_POST['email'];
$subject1=$_POST['sub1'];
// $subject2=$_POST['sub2'];
// $subject3=$_POST['sub3'];
// $subject4=$_POST['sub4'];
// $subject5=$_POST['sub5'];
$uname=$_SESSION['uname'];
$result=mysqli_query($conn,"SELECT * FROM `logins` WHERE `uname`='$usn' ");
$count=mysqli_num_rows($result);
if($count==1)
{
//echo ("$name,$usn,$contact,$subject1,$subject2,$subject3,$subject4,$subject5");
$result1=mysqli_query($conn,"SELECT * FROM `attendance` WHERE `usn`='$usn' ");
$count=mysqli_num_rows($result1);
if($count==1)
{
  if($uname=="Gowri")
  {
    $updaterecord="UPDATE `attendance` SET `sub1`='$subject1' WHERE `usn`='$usn'";
  }
  if($uname=="shoba")
  {
    $updaterecord="UPDATE `attendance` SET `sub2`='$subject1' WHERE `usn`='$usn'";
  }
  if($uname=="Mohan")
  {
    $updaterecord="UPDATE `attendance` SET `sub3`='$subject1' WHERE `usn`='$usn'";
  }
  if($uname=="Gangadhar")
  {
    $updaterecord="UPDATE `attendance` SET `sub4`='$subject1' WHERE `usn`='$usn'";
  }
  if($uname=="Vandana")
  {
    $updaterecord="UPDATE `attendance` SET `sub5`='$subject1' WHERE `usn`='$usn'";
  }
  if(! mysqli_query($conn, $updaterecord))
  echo '<img src="mainerror.jpg" alt="icon" />';
  else {
    include 'Lastpage.php';
  }

}
else{
  if($uname=="Gowri")
  {
    $register_query = "INSERT INTO `attendance`(`usn`,`stname`,`phno`,`Email`,`sub1`) VALUES('$usn','$name','$contact','$email','$subject1')";

  }
  if($uname=="shoba")
  {
    $register_query = "INSERT INTO `attendance`(`usn`,`stname`,`phno`,`Email`,`sub2`) VALUES('$usn','$name','$contact','$email','$subject1')";
 }
  if($uname=="Mohan")
  {
    $register_query = "INSERT INTO `attendance`(`usn`,`stname`,`phno`,`Email`,`sub3`) VALUES('$usn','$name','$contact','$email','$subject1')";
 }
  if($uname=="Gangadhar")
  {
    $register_query = "INSERT INTO `attendance`(`usn`,`stname`,`phno`,`Email`,`sub4`) VALUES('$usn','$name','$contact','$email','$subject1')";
 }
  if($uname=="Vandana")
  {
    $register_query = "INSERT INTO `attendance`(`usn`,`stname`,`phno`,`Email`,`sub5`) VALUES('$usn','$name','$contact','$email','$subject1')";
  }
if(! mysqli_query($conn, $register_query))
echo '<img src="mainerror.jpg" alt="icon" />';
else {
  include 'Lastpage.php';
}
}
}
else {
  echo '<img src="mainerror.jpg" alt="fail" />';
  header("refresh:1100;url=indexs.php");
}
}
?>
