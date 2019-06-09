<?php
session_start();
$uname=$_SESSION['unamee'];
$password1=$_SESSION['password'];
  // echo("$uname,$password");
$servername = "localhost";
$username="root";
$password="";
$dbname="mydb";

  try{
  $conn = mysqli_connect($servername, $username,$password,$dbname);
  echo("");
  }
  catch(MySQLi_Sql_Exception $ex){
  echo("error in connection");
  }
  $sql=mysqli_query($conn,"SELECT usn,stname,sub1,sub2,sub3,sub4,sub5,phno,Email from attendance where usn='$uname'");
  $sqll=mysqli_query($conn,"SELECT image from logins where uname='$uname'");
  if(!$sql && !$sqll)
  echo("error");
  else {
    echo("");
  }
  // while ($row=mysqli_fetch_row($sql))
  //   {
  //   printf ("%d %d %d %d %d\n",$row[0],$row[1],$row[2],$row[3],$row[4]);
  //   }
  // // Free result set
  // mysqli_free_result($sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <style type="text/css">
    *{
      padding:0;
      margin:0;
    }
      body{

        background-image:url('book1.jpg');

      }
      h1{color:white}
      #header{
        padding-top:0px;
        margin-top:0px;
        width:1510px;
        height:60px;
        background:url('log.jpg'),url('book1.jpg');
        background-repeat:no-repeat;
      }
      .imgcontainer{

          text-align: center;
          margin:24px 0 12px 0;
          position:relative;
          padding-bottom:20px;
      }
      #myimg {
          width: 170px;
      }
      #cap {
        text-transform: capitalize;
      }
      </style>
  </head>
  <body>
    <div id="header">
    <center>
    <h1 id="cap" >Welcome  <?php echo $password1; ?></h1>
    </center>
    </div>
   <div class="imgcontainer">
    <?php $row=mysqli_fetch_row($sqll) ?>
      <img id="myimg" src="<?php echo "$row[0]"; ?>" alt="Avatar" >

    </div>



  <center>
          <table width="25%" border="5" cellspacing="10" cellpadding="10";>
            <?php $row=mysqli_fetch_row($sql) ?>
       <tr>
        <td>WEB INTERNET PROGRAMMING</td>
        <td>COMPUTER NETWORKS</td>
        <td>DATA MINING</td>
        <td>JAVA</td>
        <td>PYTHON</td>
      </tr>

      <tr>
          <td align='center'>
            <?php echo ("   ".$row[2]."   ");?>
          </td>
            <td align='center'>
              <?php echo ("   ".$row[3]."   ");?>
            </td>
          <td align='center'>
              <?php echo ("   ".$row[4]."   ");?>
        </td>
          <td align='center'>
              <?php echo ("   ".$row[5]."   ");?>
        </td>
          <td align='center'>
              <?php echo ("   ".$row[6]."   ");?>
        </td>
      </tr>
            </table>
      </center>
      <br/>
      <br/>
      <center>
      <input type=button onClick="location.href='Start.php'" value='LOGOUT'style="background-color:brown;
        color:white;
        padding:10px 20px;
        margin:10px 0;
        border:black;
        cursor:pointer;"/>
      </center>
</body>
</html>

<?php
if ($row[2]<80 || $row[3]<80 ||$row[4]<80||$row[5]<80||$row[6]<80) {
  // <script> var val='<?php echo $row[5];';</script>
  // <script>alert();</script>
  echo "<script>alert('Message has been sent to your parents contact no $row[7] and email to your id $row[8] about shortage of attendance ');</script>";
}
?>
