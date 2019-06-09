<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="mydb";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$usn=$_POST['num'];
$name=$_POST['name'];
$contact=$_POST['contactno'];
$subject1=$_POST['sub1']
$subject2=$_POST['sub2']
$subject3=$_POST['sub3']
$subject4=$_POST['sub4']
$subject5=$_POST['sub5']

$register_query = "INSERT INTO `form`(`num`, `name`, `contactno`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES ('$usn','$name','$contact','$subject1','$subject2','$subject3','$subject4','$subject5')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}

}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
?>
