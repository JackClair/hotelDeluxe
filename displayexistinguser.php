<?php require_once('database/connect.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>Room no</th>
        <th>Type</th>
        <th>Price</th>
      </thead>
      <<?php
      $sql = "SELECT Roomno, type, price FROM tblroomdetail";

      // SELECT for advance booking
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tbladvancebooking` WHERE 1";

    // SELECT FOR CURRENT RESIDENT
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tblcurrentresident` WHERE 1";

    //SELEC FOR BOOKING HISTORY
    //  $sql = "SELECT `booking_ID` as 'Booking ID', `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn` FROM `tblbookinghistory` WHERE 1";

      $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          $room = $row["Roomno"];
          $type = $row["type"];
          $price = $row["price"];
          echo "<tr><td>$room</td><td>$type</td><td>$price</td></tr>";
        }
      }
      $conn->close();
       ?>
    </table>
  </body>
</html>
