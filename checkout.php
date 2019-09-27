<!-- <?php session_start(); ?> -->
<?php
require_once('database/connect.php');
if (isset($_POST["submit"])) {
  $booking_ID = $_POST['booking_ID'];
  $sql = "INSERT INTO `tblbookinghistory` (`BookingID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`) SELECT `BookingID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date` FROM `tblcurrentresident` WHERE BookingID = '$booking_ID';";
  $result = $conn->query($sql);

  $sql = "DELETE FROM `tblcurrentresident` WHERE BookingID = '$booking_ID';";
  $result = $conn->query($sql);
}
 ?>
