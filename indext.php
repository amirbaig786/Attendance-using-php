<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Portal</title>
    <style type="text/css">
    *{
      margin:0;
      padding:0;
    }
      #main
        {
        width:1510px; height:900px;margin:0 Auto;



      }
        #header{
          width:1520px;
          height:60px;

          background:url('log.jpg'),url('books.jpeg');
          background-repeat:no-repeat,repeat-x;


              }


        #tagline
        {
          h1{color:white}
        }
        #right{

           background-color:grey;
           background-image:url('teacher.png'),url('books.jpeg');
          background-position:top-left;
           background-repeat:no-repeat,repeat;
           background:cover;
           width:45%;
           height:900px;
           float:right;


            }
        #left{
          position:absolute;
          margin:0 auto;
          text-align: center;
          display: inline-block;
          background:url('books.jpeg');
          float:left;
          width:100%;
          height:900px;
          }


        #footer
        {
          position:relative;
          bottom:0;
          width:100%;
          height:30px;
          color:white;
          text-align:center;

        }
        label.a
        {

          color:white;
          text-align:right;
        }
        h1{
          font-size:25pt;
          font-style:normal;

        }
        label.b
        {

          color:white;
          text-align:right;
        }
        label.c
        {

          color:white;
          text-align:right;
          margin:26px 30px;
        }

        .foot{
          color:white;
          align-self: auto;

        }
        input[type=text],input[type=password]{
          padding: 12px 20px;
          margin:8px 0;
          display:inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }

        button{
          background-color:brown;
          color:white;
          padding:10px 20px;
          margin:5px 0;
          border:black;
          cursor:pointer;

        }

        button:hover{
          opacity: 1.8;
        }

        .cancelbtn{
          text-align:right;
          width:0%;

          background-color:brown;
          padding-right:55px;
        }

        .imgcontainer{
          text-align: center;
          margin:24px 0 12px 0;
          position:relative;
        }

        img.avatar{
          width:40%;
          border-radius:50%;
          }

          .container{
              padding:20px;
          }
          span.psw{
              padding-top: 16px;
          }

          .modal{
              display:none;
              position:absolute;
              z-index: 1;
              left:0;
              top:0;
              overflow:auto;
              padding-top: 60px;
              padding-left:250px;
          }
          .modal-content{
              background-color: #fefefe;
              margin: 5% auto 15% auto;
              border:1px solid #888;
              width:90%;
          }

          .close{
            position: absolute;
            right: 25px;
            top: 0px;
            color: #000;
            font-size: 35px;
            font-weight: bold;
          }

          .close:hover,
          .close:focus{
            color:black;
            cursor:pointer;
          }


    </style>
  </head>
  <body>


    <div id="main">

        <div id="header">
            <div id="logo">
            </div>
            <div id="tagline">
              <center>
            <h1 style="color:white;">Teacher Portal</h1></center>
            </div>
      </div>

      <div id="left">
        <div id="right"></div>
        <button onclick="document.getElementById('id01').style.display='block'"
        style="width:auto;">Hi ! Click Me For Signing In</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" method="POST" action="logint.php" autocomplete="off">
            <div class="imgcontainer">

              <span
          onclick="document.getElementById('id01').style.display='none'"
          class="close" title="Close Modal ">&times;</span>
              <img src="teachicon.png" alt="Avatar" class"avatar" >
            </div>

            <div class="container">
              <label for="uname"><b>TEACHER-ID</b></label>
              <input type="text" placeholder="ENTER TEACHER-ID" name="uname"required>
              <br/>

              <label for="psw"><b>PASSWORD</b></label>
              <input type="password" placeholder="ENTER PASSWORD" name="password"required>

              <br/>
              <button type="submit" name="tloginn">Login</button>

              <button type="button"
        onclick="document .getElementById('id01').style.display='none'"
        class="cancelbtn">Cancel</button>
        <br/>

              </div>




        </div>
      </form>
      </div>
    </div>

<div id ="footer">
  <p class="foot">Copyright 2019
                    All Rights Reserved</p>
  </div>
  <script>
  var modal=document.getElementsById('id01');
  window.onclick=function(event)
  {
    if(event.target==modal)
    {
      modal.style.display="none";
    }
  }
  </script>
  </body>
</html>
