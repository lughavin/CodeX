<?php

include "./db.php";

$username =$_POST["username"];
$password =$_POST["password"];
$name =$_POST["name"];
$tester = "Tester";
$userType = "officer";
$id =$_POST["id"];

        $sql2 = "INSERT INTO user (username, password, userType, name, position,passport)
        VALUES ('$username', '$password', '$userType', '$name','$tester','$id');";





 $usernamecheck= "SELECT 'passport' FROM `user` WHERE passport='$id '";

  $qry3 = mysqli_query($conn, $usernamecheck);
   $check = mysqli_fetch_assoc($qry3);
    if($check>=1){

             echo '<script>';
             echo 'alert(" Duplicate Data Entered, Tester Might Exist Alright!")';
             echo '</script>';
                echo '<script> window.location.assign("../bit216/recordTester.html"); </script>';
         }else{
          $qry = mysqli_query($conn, $sql2);
            if ($qry) {

            echo '<script>';
                       echo 'alert(" Tester Added Successfully ")';
                       echo '</script>';
            echo '<script> window.location.assign("../bit216/recordTester.html"); </script>';
          }
         }


?>
