<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    
    <!-- Font Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> -->
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

    <title>Home</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="position: absolute;">

        <!-- Navbar brand for logo -->
        <a class="navbar-brand" href="index.php">
            <img src="../images/logo.svg" alt="Logo">
        </a>

        <!-- Collapse button for Navbar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navBar">

            <!-- Links to Nav Items-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="user-index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <!-- Dropdown for Events Nav-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Events</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbardrop">
                            <a class="dropdown-item" href="#">ASC Events</a>
                            <a class="dropdown-item" href="#">Information Sessions</a>
                            <a class="dropdown-item" href="#">Student Businesses</a>
                            <a class="dropdown-item" href="#">Student Clubs</a>
                        </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="avatarDrop" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                        alt="avatar image" height="35">
                    </a>
                    
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="avatarDrop">
                        <a class="dropdown-item" href="editprofile">Edit Profile</a>
                        <a class="dropdown-item" href="index.php">Logout</a>
                    </div>
                </li>

                <!--Search bar-->
                <li><form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form></li>


            </ul>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--Navbar-->


    <!--Hero Section Content-->

    <!--Background Image-->
    <div class="bg view">
        <div class="mask flex-center rgba-black-strong"></div>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
            <!--Grid column for Text-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <br><br><br><br><br>
            <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s" style="font-family: Quicksand">Never miss an event! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <br>
            <h5 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s" style="font-family: Quicksand">
            We’re here to make your Ashesi experience worth every second. See what’s happening on campus and join in! </h6>
            </div>

            <div class ="col-md-1"></div>
            
            <!--Grid column for Form-->
            <div class="col-md-6 col-xl-5 mb-4">
            <br><br>

            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                <br>
                <!--Body-->
                <div class="md-form" style="padding-left:40px;">
                    <i class="fas fa-envelope prefix white-text active"></i>
                    <label class="active">DATE</label><br>
                    <select class="custom-select" style="width:90%;">
                    <option selected>Any date</option>
                    <option value="1">Today</option>
                    <option value="2">Tomorrow</option>
                    <option value="3">This week</option>
                    <option value="4">Next week</option>
                    <option value="5">This month</option>
                    <option value="6">Next month</option>
                </select>
                </div>

                <div class="md-form" style="padding-left:40px;">
                    <i class="fas fa-envelope prefix white-text active"></i>
                    <label class="active">EVENT CATEGORY</label><br>
                    <select class="custom-select" style="width:320px;">
                    <option selected>Any type</option>
                    <option value="1">ASC Events</option>
                    <option value="2">Information session</option>
                    <option value="3">Student businesses</option>
                    <option value="4">Student clubs</option>
                </select>
                </div>

                <div class="md-form" style="padding-left:40px;">
                    <i class="fas fa-envelope prefix white-text active"></i>
                    <label class="active">YEAR GROUP</label><br>
                    <select class="custom-select" style="width:320px;">
                    <option selected>Any year group</option>
                    <option value="1">2020</option>
                    <option value="2">2021</option>
                    <option value="3">2022</option>
                    <option value="4">2023</option>
                </select>
                </div>

                <div class="text-right mt-4" style="padding-right:35px;">
                    <button type= "submit" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Search</button>
                </div>
                </div>
            </div>
            <!--/.Form-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->

<!--Main Layout-->
<main>
    <div class="container">
    
    <!--Grid row-->
    <div class="row py-5 marg">
        
        <!--Grid column-->
        <div class="col-md-11">
        <h3><b>Upcoming Events</b></h3>
        </div><br>
        <!--Grid column-->

        <!-- Card 1-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/afro-girl.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 2-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 3-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/afro-girl.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!--Grid column-->
        <div class="col-md-11" style="padding-top:40px">
        <h3><b>ASC Events</b></h3>
        </div><br>
        <!--Grid column-->

        <!-- Card 1-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 2-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/afro-girl.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 3-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Milky Mountain</a></h5>
                        <p class="card-text">Pass by the student hangout to get your tasty milkshakes this Wednesday</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!--Grid column-->
        <div class="col-md-11" style="padding-top:40px">
        <h3><b>Information Sessions</b></h3>
        </div><br>
        <!--Grid column-->

        <!-- Card 1-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="../images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">
                        <h5 class="card-title"><a>Bank of America Merrill Lynch</a></h5>
                        <p class="card-text">Spring Internship</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 3-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Goldman Sachs</a></h5>
                        <p class="card-text">Summer Internship</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!--Grid column-->
        <div class="col-md-11" style="padding-top:40px">
        <h3><b>Student Businesses</b></h3>
        </div><br>
        <!--Grid column-->

        <!-- Card 1-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Goldman Sachs</a></h5>
                        <p class="card-text">Spring Internship</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 2-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/afro-girl.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Google</a></h5>
                        <p class="card-text">EMEA Internships</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 3-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Google</a></h5>
                        <p class="card-text">STEP for 2nd Years</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!--Grid column-->
        <div class="col-md-11" style="padding-top:40px">
        <h3><b>Student Clubs</b></h3>
        </div><br>
        <!--Grid column-->

        <!-- Card 1-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Code for Change</a></h5>
                        <p class="card-text">Learn to code in fun and interactive ways!</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 2-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/afro-girl.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Tech Era</a></h5>
                        <p class="card-text">Come with us to give underserved communitites access to tech!</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>

        <!-- Card 3-->
        <div class="col-md-4">
            <span class="container-fluid profiles">
                <div class="card pro3" style="width:100%">
                    <img class="card-img-top" src="images/active-adult.jpg" alt="Card image cap">

            <!-- Card content -->
                    <div class="card-body">
                        <h5 class="card-title"><a>Ashesi Startup Launchpad</a></h5>
                        <p class="card-text">Join us and we will show you how to take your idea from just a concept to a fully-fledged business</p>
                        <a href="#" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">Save</a>
                    </div>
                </div>
            </span> 
        </div><br><br>
  </div>
</main>

<!--Main Layout-->
</body>

<!-- Footer -->
<footer class="page-footer font-small pt-4" style="background-color:#12355B;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <div class="col-md-1"></div>

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase"><img src="../images/logo.svg"></h5>
            <p>Pin Events is here to make your campus experience a worthwhile one.</p>
        </div>
        <div class="col-md-1"></div>

        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h6 class="text-uppercase">Use Pin Events</h6>

            <ul class="list-unstyled">
            <li>
                <a href="user-index.php" style="color:#A9A9A9;">Home</a>
            </li>
            <li>
                <a href="about.php" style="color:#A9A9A9;">About</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Login</a>
            </li>
            <li>
            <a href="#" style="color:#A9A9A9;">Sign Up</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h6 class="text-uppercase">Find Events</h6>

            <ul class="list-unstyled">
            <li>
                <a href="#" style="color:#A9A9A9;">ASC Event</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Information Sessions</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Student Businesses</a>
            </li>
            <li>
            <a href="#" style="color:#A9A9A9;">Student Clubs</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-3">

        <h6 class="text-uppercase">Contact Us</h6>
        <!-- Facebook -->
        <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="about.php"> Pin Events</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>