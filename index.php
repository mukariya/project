<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Web Quiz</title>
  
    <meta charset="utf-8" >  
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="images/favicon.ico" type="image/ico">
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
            <li><button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
            <li><a href="header.php"><span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776;</span></a></li>
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
  <!-- Footer -->
  <footer class="container-fluid bg-4 text-center">
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
  </footer>

</body>
</html>

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