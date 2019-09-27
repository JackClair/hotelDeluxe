<?php session_start(); ?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check availability</title>
  </head>
  <body>
    <form class="" method="post">
      <h3>Type :</h3>
      <select name="type" size="">
        <option value="Single Room">Single Room</option>
        <option value="Family Room">Family Room</option>
        <option value="Deluxe Room">Deluxe Room</option>
      </select>
      <h3>Date :</h3>
      <input type="date" name="date" value="">
      <h3>No. of days</h3>
      <input type="text" name="noofdays" value="">
      <input type="submit" name="check" value="Check availability">
    </form> -->

    <?php
    require_once('database/connect.php');

    function splitDate($date, $type)
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

    if (isset($_POST['check']))
    {
      $type = $_POST['type'];
      $_SESSION["type"] = $type;
      $date = $_POST['date'];
      $_SESSION["date"] = $date;
      $date2 = $date;
      $noofdays = $_POST['noofdays'];
      $_SESSION["noofdays"] = $noofdays;
      echo $_SESSION["date"];
      $noofdays2 = $noofdays;
      $sql = "SELECT roomno FROM tblroomdetail where roomno not IN (SELECT roomallocate FROM `tbladvancebooking` WHERE date = '$date') and type = '$type'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0)
       {
        while($row = $result->fetch_assoc())
         {
           $final2 = 'not yet';
           while ($noofdays2 >0) {
             $noofdays2-=1;
             $final = splitDate($date, $type);
             $date = $final;
             if ($final == 'break')
             {
               //sweetalert2
               break;
             }
             else {
               if ($noofdays2 == 0)
               {
                 $_SESSION["roomno"] = $row["roomno"];
                 echo $_SESSION["roomno"];
                 header("Location: advancebooking2.php");
                 //$final2 = 'success';
               }
             }
           }
           if ($final2 == 'success')
           {
             //Nothing
           }
         }
       }
      else
      {
         echo "Unavailable";
       }
       $conn->close();
     }
     ?>
    <?php print_r($_SESSION); ?>
  </body>
</html>
