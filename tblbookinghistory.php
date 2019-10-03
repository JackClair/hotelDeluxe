<?php require_once('database/connect.php'); ?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
body {
  background-image: linear-gradient(to Right, #f0efed, #ffe6b3);
}
.table {
  border-collapse: collapse;
  font-size: 16px;

}
.table-responsive
{
padding-top:100px;
padding-right:40px;
}
.table, th, td ,thead {
  border: 1px solid #00004d;

  }
  .thead{
    width:50%;

  }
  .tbody{
    color:#ffad33;
	 }

	.table-responsive th
	{
		background: #ffad33;
	}

	.table-responsive tr:nth-child(odd)
	{
		background:#ffffff;
	}

	.table-responsive tr:nth-child(even)
	{
		background: #ffcc80;
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
}
body {
    font-family: "Poppins", Arial, sans-serif;
  
    /* font-size: 15px; */
    line-height: 1.8;
    /* font-weight: 400; */
    color: gray;
}
.res
{ height:150px;
}
.hero-wrap .slider-text {
    color: #fff;
    height: 300px;
}
.ftco-navbar-light {
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
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    /* line-height: 1.2; */
}.room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
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
	    </div>
	  </nav>
    <!-- END nav -->
	
<div class="hero-wrap" style="background-image: url('images/luxury_hotel.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            
	            <h1 class="mb-4 bread res">Booking History</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container">
 <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Booking ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Adhaar Number</th>
		    <th>Room Allocate</th>
		    <th>Date</th>
		    <th>Check In</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //$sql = "SELECT Roomno, type, price FROM tblroomdetail";

      // SELECT for advance booking
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tbladvancebooking` WHERE 1";
    // SELECT FOR CURRENT RESIDENT
      $sql = "SELECT `bookingID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tblbookinghistory` WHERE 1";

    //SELEC FOR BOOKING HISTORY
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tblbookinghistory` WHERE 1";

      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          $bookingID = $row["bookingID"];
          $Name = $row["Name"];
          $email = $row["email"];
          $Address = $row["Address"];
          $PhoneNo = $row["PhoneNo"];
          $AdhaarNo = $row["AdhaarNo"];
          $RoomAllocate = $row["RoomAllocate"];
          $Date = $row["Date"];
          $CheckIn = $row["CheckIn"];

          echo "<tr><td>$bookingID</td><td>$Name</td><td>$email</td>".
          "<td>$Address</td><td>$PhoneNo</td><td>$AdhaarNo</td>".
          "<td>$RoomAllocate</td><td>$Date</td><td>$CheckIn</td></tr>";
        }
      }
      $conn->close();
       ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
