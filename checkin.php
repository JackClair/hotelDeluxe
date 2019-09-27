<!-- <?php session_start(); ?> -->
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
