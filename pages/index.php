<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>PROJECT1</title>
</head>
<body>
    
<nav class="navbar navbar-expand-sm  navbar-dark fixed-top bg-dark p-1">

  <a class="navbar-brand px-5" href="#">MY LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navNavbar" >
    <span class="navbar-toggler-icon"></span>
      </button>
              
          
          <div class="collapse navbar-collapse" id="navNavbar">
          <ul class="navbar-nav" >
              <li class="nav-item px-2">
                  <a href="#home" class="nav-link ">Home</a>
              </li>
              <li class="nav-item px-2">
                  <a href="#about" class="nav-link">About Us</a>
              </li>
              <li class="nav-item px-2">
                  <a href="#services" class="nav-link">Services</a>
              </li>
              <li class="nav-item px-2">
                  <a href="#contact" class="nav-link">Contact Us</a>
              </li>
          </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> Welcome Andrew
          </a>
          <div class="dropdown-menu">
            <a href="profile2.html" class="dropdown-item">
            <i class="fa fa-user-circle"></i>Profile
          </a>
            <a href="settings.html" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="coverpage2.html" class="nav-link">
              <i class="fa fa-user-times"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a href="coverpage2.html" class="nav-link">
              <i class="fa fa-user-times"></i> Sign up
            </a>
          </li>
    
      </ul>

      </div>
    </nav>
    
  
    <section>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="../images/post_14.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="../images/post_15.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img src="../images/post_16.jpg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>



    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>