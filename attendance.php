<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <style type="text/css">
    *{
      padding:0;
      margin:0;
    }

  #main{
      width:1510px;
      height:900;
      margin:0 Auto;
      }
  #container{
                padding-bottom:10px;
                padding-right:100px;
                padding-top:30px;
                display:inline-table;
                width:100%;
              }
  #form_login {
                display: table-cell;
                text-align: center;
                vertical-align: middle;
                padding-bottom:10px;
              }
    .tab{
          float: left;
        }
    .tab-2
          {
            margin-left:10px
          }
    .tab-2 input
                {
                  margin-bottom:30px;
                   }
      body{
            background-image:url('book1.jpg');
          }
      h1
        {
          color:white
        }
  #header
        {
          padding-top:0px;
          margin-top:0px;
          width:1510px;
          height:60px;
          background:url('log.jpg');
          background-repeat:no-repeat;
        }
  #left
        {
          text-align: center;
          position:absolute;
          margin:0 auto;
          display: inline-block;
          float:left;
        }

  #right
        {
          background-image:url('insideteacher.jpg'),url('book1.jpg');
          background-position:top-left;
          background-repeat:no-repeat,repeat;
          background:cover;
          float:right;
        }
button{
  background-color:brown;
  color:white;
  padding:5px 10px;
  margin:5px 5px;
  border:black;
  cursor:pointer;
  padding-left:10px;
  text-align:center;

}

button:hover{
  opacity: 0.8;
}
.imgcontainer{

    text-align: center;
    margin:24px 0 12px 0;
    position:relative;
    padding-bottom:20px;
}
.modal-content{

background-color: red;
margin: 5% auto 15% auto;
border:1px solid #888;
width:90%;}
.info{
      margin:0 auto;
}
</style>
  </head>
  <body>
  <div id="header">
      <center>
            <h1>Welcome Teacher!</h1>
      </center>
  </div>

      <div id="main">

          <div id="container">

            <form id="form_login" action="phpattendance.php" method="POST" autocomplete="off">

              <div id="id01" class="modal">

                <form class="modal-content animate"action="phpattendance.php" method="POST" autocomplete="off">

                  <div class="imgcontainer">
                    <img src="insideteacher.jpg" alt="Avatar" width="170px" class"avatar" ><br/><br/><br/>
                  </div>

          <div class="tab-2">

          <h3>STUDENT DETAILS</h3>
          <br/><br/>

          <label>STUDENT NAME :</label>
          <input type="text" name="name" id="name" placeholder="name" required>
          <label>USN :</label>
          <input type="text" name="num" id="num"  placeholder="usn" required>

          <label>CONTACT-NO: </label>
          <input type="tel" name="contactno" id="num1"placeholder="contact no" required>

          <label>EMAIL-ID: </label>
          <input type="email" name="email" id="num2"placeholder="email-id" required><br/>

          <h3>ATTENDANCE RECORD  </h3><br/><br/>

          <label>SUBJECT:</label>
          <input type="number" name="sub1" id="sub1" min="0" max="100" placeholder="subject" required>
          <br/>

      <!--    <label>SUBJECT2:</label>
          <input type="number" name="sub2" id="sub2" min="0" max="100" placeholder="CN" required><br/>

          <label>SUBJECT3: </label>
          <input type="number" name="sub3" id="sub3" min="0" max="100" placeholder="DM" required><br/>

          <label>SUBJECT4:</label>
          <input type="number" name="sub4" id="sub4" min="0" max="100" placeholder="JAVA" required><br/>

          <label>SUBJECT5:</label>
          <input type="number" name="sub5" id="sub5" min="0" max="100" placeholder="PYT" required><br/>-->

          <input type="submit" name="submit" value="SUBMIT" style="  background-color:brown;
          color:white;
          padding:5px 10px;
          margin:5px 5px;
          border:black;
          cursor:pointer;
          text-align:center;
          padding-left:10px">

          <input type=button onClick="location.href='indext.php'" value='CANCEL'style="background-color:brown;
            color:white;
            padding:5px 10px;
            margin:5px 5px;
            border:black;
            cursor:pointer;
            text-align:center;
            padding-left:10px"/>

      </div>

  </form>

</div>

</form>
</div>

</div>

</body>

</html>
