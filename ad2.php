<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
</head>
<body>
  
</body>
</html>
<?php
require_once('database/connect.php');

function incrementDate($date, $type)
{
  $daysbrk = explode ("-", $date);
  $day = (int)$daysbrk[2];
  $month = (int)$daysbrk[1];
  $year = (int)$daysbrk[0];
  $day+=1;
  $condition = $day == 32 AND ($month == 1 OR $month == 3 OR $month == 5 OR $month == 7 OR $month == 8 OR $month == 10 OR $month == 12);
  if ($condition)
  {
    $month = $month + 1;
    if ($month == 13)
    {
      $year = $year + 1;
      $month = 1;
    }
  }
  $condition2 = $day == 31 AND !($month == 1 OR $month == 3 OR $month == 5 OR $month == 7 OR $month == 8 OR $month == 10 OR $month == 12);
  if($condition2){
    $month = $month + 1;
  }
  if ($day < 10)
  {
    $day = "0".$day;
  }
  if ($month < 10)
  {
    $month = "0".$month;
  }
  $date = $year.'-'.$month.'-'.$day;
  $mysql_user = 'root';
  $mysql_host = 'localhost';
  $dbname = 'dbhotel';
  $mysql_password = '';
  $conn2 = new mysqli($mysql_host, $mysql_user, $mysql_password, $dbname);
  $sql = "SELECT roomno FROM tblroomdetail where roomno not IN (SELECT roomallocate FROM `tbladvancebooking` WHERE date = '$date') and type = '$type'";
  $result2 = $conn2->query($sql);
  if ($result2->num_rows > 0)
  {
    return $date;
  }
  else
  {
    return 'break';
  }
  $conn2->close();
}

if (isset($_POST['submit']))
{
  $type = $_SESSION["type"];
  $date = $_SESSION["date"];
  $noofdays = $_SESSION["noofdays"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $phoneNo = $_POST["phoneNo"];
  $addhar = $_POST["addhar"];
  $roomno = $_SESSION["roomno"];

  $conn3 = new mysqli($mysql_host, $mysql_user, $mysql_password, $dbname);
  $sql = "SELECT max(ID) as counter FROM tbladvancebooking";
  $result3 = $conn3->query($sql);
  if ($result3->num_rows > 0)
  {
    while($row = $result3->fetch_assoc())
    {
      $booking_ID = (int)$row['counter'];
      $booking_ID += 1;
    }
    $conn3->close();
  }
  else
  {
    return 'break';
  }

  while ($noofdays > 0) {
    $noofdays-=1;
    $sql = "INSERT INTO `tbladvancebooking` (`ID`, `booking_ID`, `Name`, `email`, `Address`, `PhoneNo`, `AdhaarNo`, `RoomAllocate`, `Date`, `CheckIn`) VALUES (NULL, '$', '$name', '$email', '$address', '$phoneNo', '$addhar', '$roomno', '$date', current_timestamp());;";
    $date2 = $date;
    $date = incrementDate($date2, $type);
    if ($conn->query($sql) === TRUE)
    {
      // echo "New record created successfully";
    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // echo "<script>Swal.fire('Congartulation','Your Booking Has been Confirmed!','success')</script>"; 
    echo "<script>Swal.fire('Congartulation','Your Booking ID is $booking_ID','success');document.location='index.html'</script>";
    // sleep(5);
    // header("Location: index.html");
  }
}
else {
  // echo "<script>Swal.fire({type: 'error',title: 'Oops...',text: 'Something went wrong!'footer:''})</script>";
  // sleep(5);
  // header("Location: index.html");
  echo "<script>Swal.fire({type: 'error',title: 'Oops...',text: 'Something went wrong!'footer:''});document.location='index.html'</script>";
}
//sweetalert2
$conn->close();
 ?>
