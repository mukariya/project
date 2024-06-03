<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Web Quiz</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
      body {
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        color: #f5f6f7;
      }
      p {
        font-size: 16px;
      }
      .margin {
        margin-bottom: 45px;
      }
      .bg-1 {
        background-color: #1abc9c; /* Green */
        color: #ffffff;
      }
      .bg-2 {
        background-color: #474e5d; /* Dark Blue */
        color: #ffffff;
      }
      .bg-3 {
        background-color: #ffffff; /* White */
        color: #555555;
      }
      .bg-4 {
        background-color: #2f2f2f; /* Black Gray */
        color: #fff;
      }
      .container-fluid {
        padding-top: 70px;
        padding-bottom: 70px;
      }
      .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
        border: 0;
        border-radius: 0;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 5px;
      }
      .navbar-nav  li a:hover {
        color: #1abc9c !important;
      }
      .navbar-brand{
        background-image: url("images/Logoo.png");
        background-size: cover;
        background-position: center;
        width: 100px;
        height: 100px;
      }
      .button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #1abc9c;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

      .button:hover {
        background-color: #3e8e41
      }

      .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
      }
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
 .button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #1abc9c;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

      .button:hover {
        background-color: #3e8e41
      }

      .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
      }

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-default" style="background-color:black;">
      <div class="container">
    
        <div class="navbar-header">
         
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
           <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button">Login</button>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
      <h3 class="margin">WEB QUIZ</h3>

      <img src="images/Logo.png" class="img-responsive img-circle margin" style="display:inline" alt="Logo" width="350" height="350">
      <h3>Want to test your knowledge of a specific language or topic? Give our free coding quizzes a try! Each quiz has 10 questions total picked at random from a larger group, and they’re all multiple choice. Every time you take the test it will be slightly different.</h3>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
      <h3 class="margin">Time for Quizzes</h3>
      <p>In today's digital age, understanding computers and technology is essential for navigating the modern world. Whether you're a seasoned tech enthusiast or just starting your journey into the realm of computers, quizzes offer an engaging and effective way to test your knowledge, identify areas for improvement, and deepen your understanding of key concepts. In this article, we explore the world of computer quizzes, covering topics ranging from hardware and software to programming languages and cybersecurity. </p>
      <br> <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Let's Start
      </a>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center">    
      <h3 class="margin">Quizzes </h3><br>
      <div class="row">
        <div class="col-sm-4">
          <p><h3><b>Hardware Quizzes:</b></h3>
          1.Test your knowledge of computer hardware components such as CPUs, GPUs, RAM, and storage devices.</br>
          2.Identify different types of ports and connectors commonly found on computers and peripherals.</br>
          3.Explore the intricacies of computer architecture, including motherboard layouts and expansion slots.</p>
          <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4"> 
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4"> 
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
      </div>
      <button class="glyphicon glyphicon-search"> >>>More</button>
    </div>
<!--    form-->
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<div class="body">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
 </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
 
  <!-- Footer -->
  <footer class="container-fluid bg-4 text-center">
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
  </footer>

</body>
</html>
