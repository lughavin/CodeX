<?php

include "./db.php";

session_start();
$name =$_POST["testCentre"];
$tester =$_POST["tester"];

$sql="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

    $result = mysqli_query($conn, $sql);
    // Echo session variables that were set on previous page
    while ($row = $result->fetch_assoc()) {
    $user=$row['name'];}

        $sql2 = "INSERT INTO testcentre (centreName, centreOfficer,tester)
        VALUES ('$name','$user','$tester');";

  $usernamecheck= "SELECT `centreName` FROM `testcentre` WHERE centreName='$name'";

  $qry3 = mysqli_query($conn, $usernamecheck);
   $check = mysqli_fetch_assoc($qry3);

if($check>=1){
         echo '<script>';
         echo 'alert(" Test Centre Already Exist ")';
         echo '</script>';
         echo '<script> window.location.assign("../bit216/registerTestCentre.php"); </script>';
     }else{
      $qry2 = mysqli_query($conn, $sql2);
        if ($qry2) {

       echo '<script>';
               echo 'alert(" Test Centre Successfully Created ")';
               echo '</script>';
            echo '<script> window.location.assign("../bit216/registerTestCentre.php"); </script>';
      }
     }
     $conn->close();

?>
