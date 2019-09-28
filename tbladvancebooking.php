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





</style>
</head>
<body>
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
      $sql = "SELECT `booking_ID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tbladvancebooking` WHERE 1";

    //SELEC FOR BOOKING HISTORY
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tblbookinghistory` WHERE 1";

      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          $bookingID = $row["booking_ID"];
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
