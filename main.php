<!DOCTYPE html>
<html>
<head>
<style>

img {
    opacity: 0.5;
}

h2{
    color: white; 
}

.bg {
  /* The image used */
  background-image: url("background.jpg");


  /* Half height */
  height: 50%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<title>FINAL PROJECT GROUP 18</title>

</head>

<body>
    
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a href="#" class="navbar-brand">ONTARIO TECH UNIVERSITY</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="main.php" class="nav-link active">Home</a>
            </li>
           
            <li class="nav-item">
                <a href="calendar.html" class="nav-link">Schedule an Event</a>
            </li>

            <li class="nav-item">
                <a href="contact.html" class="nav-link" data-toggle="modal">Contact</a>
            </li>
            
            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){
                ?>

            <li class="nav-item">
                <a href="Logout.html" class="nav-link">Logout</a>
            </li>

            <?php 
            }
            else{ 
                ?>

            <li class="nav-item">
                <a href="Log In Page.html" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="Log In Page.html" class="nav-link">Sign up</a>
            </li>
            <?php 
            } ?>
            
            
        </ul>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>CAMPUS RECREATIONAL WELNESS CENTER</h1>
</div>

<div class="container bg">
    <div class="row">
        <div class="col-sm-4">
            <a href="calendar.html">
                <img src="images/booking.png" class="img-thumbnail">
            </a>
                <h2>Book a Gym Time</h2>
            <a href="calender.html" class="btn btn-danger">Make an appointment</a>
    
        </div>
        <div class="col-sm-4">
            <a href="calendar.html">
                <img src="images/basketball.jpg" class="img-thumbnail">
            </a>
                <h2>Book an Open Gym time</h2>
            <a href="calendar.html" class="btn btn-danger">Make an appointment</a>
    
        </div>
        <div class="col-sm-4">
            <a href="#">
                <img src="images/facility" class="img-thumbnail">
            </a>
                <h2>Facilities</h2>
            <a href="#" class="btn btn-danger">Facility information</a>

        </div>
        <div class="col-sm-4">
            <a href="calendar.html">
                <img src="images/yoga.jpg" class="img-thumbnail">
            </a>
                <h2>Virtual Gym class</h2>
            <a href="calendar.html" class="btn btn-danger">Book an appointment</a>
        </div>
        <div class="col-sm-4">
            <a href="#">
                <img src="images/membership.jpg" class="img-thumbnail">
            </a>
                <h2>Memberships</h2>
            <a href="#" class="btn btn-danger">Memberships</a>
        </div>
    </div>
</div>


</body>
</html>
