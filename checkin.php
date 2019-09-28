<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="fonts\flaticon\font\flaticon.css">
<style type="text/css">

body {
  background-image: linear-gradient(to Right, #f0efed, #ffe6b3);
 
}
.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    /* margin-right: 1rem; */
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}.ftco-navbar-light {
    background: transparent !important;
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    z-index: 3;
    padding: 0;
	}
	#nav-item2{
  color: #fff;
}
.lbldel{
  color: #f0efed;
  font-size: 1.2em;
}
#lblwelcome{
  font-size: 3.8em;
  color: #fff;
}
.hero-wrap .slider-text {
    color: #fff;
    height: 300px;
}.text
{ height:50%;
}
.ftco-footer {
    font-size: 16px;
    padding: 7em 0;
    background: #232323;
	}
	body {
    font-family: "Poppins", Arial, sans-serif;
  
    /* font-size: 15px; */
    line-height: 1.8;
    /* font-weight: 400; */
    color: gray;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    /* line-height: 1.2; */
}
ftco-footer {
    font-size: 16px;
    padding: 7em 0;
    background: #232323;
	}
	body {
    font-family: "Poppins", Arial, sans-serif;
  
    /* font-size: 15px; */
    line-height: 1.8;
    /* font-weight: 400; */
    color: gray;
}
room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.ftco-section {
    padding: 6em 0;
    position: relative;
	}
	#btnsubmit {
  background-color: #cc9900;
  color: #f0f0f5;
  margin-top:10px;
}


.seperater
{
  border-style: solid;
  border-width: 3.5px;
  border-color:#664d00;
  padding-top: 20px;
  padding-bottom:20px;
  padding-right:100px;
  padding-left:100px;
  margin-top:70px;
  margin-left:300px;
  position: absolute;
  background-color:#ffffff;
}
#lb
{
text-align:left;
}

#footer-align{
  margin-top:380px;
}	
	
	
	
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="lbldel" href="index.html">Deluxe</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li id="nav-item2" class="nav-item" ><a href="rooms.html" class="nav-link">Rooms</a></li>
	          <li class="nav-item" id="nav-item"><a href="Restaurants.html" class="nav-link">Restaurant</a></li>
	          <li class="nav-item" id="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item" id="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
	

<div class="hero-wrap" style="background-image: url('images/luxury_hotel.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	           
	           <h1 class="mb-4 bread">Check In</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
    
       <div class="container">
	   <div class="seperater" id="lb">
	  <form action = "checkin.php" method = "post">
	  <div class="form-group">
    <label for="exampleInputbooking">Enter Booking ID</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Booking ID" required>
      </div>
     <input type="submit" value="Submit" name="submit" class="btn btn-warning" id="btnsubmit">
  </form>
  
   </div>
      </div>
	 
        
	
		<footer class="ftco-footer ftco-bg-dark ftco-section" id="footer-align">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Deluxe Hotel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
		   <p>
 <Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  </p>
          </div>
        </div>
      </div>
    </footer>-->
	</body>
	</html>
<?php
require_once('database/connect.php');
if (isset($_POST["submit"])) {
  $booking_ID = $_POST['booking_ID'];
  $sql = "INSERT INTO `tblcurrentresident` (`BookingID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`) SELECT `booking_ID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date` FROM `tbladvancebooking` WHERE booking_ID = '$booking_ID';";
  $result = $conn->query($sql);

  $sql = "DELETE FROM `tbladvancebooking` WHERE booking_ID = '$booking_ID';";
  $result = $conn->query($sql);
}
 ?>
