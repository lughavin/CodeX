<?php
  include "./db.php";
  session_start();

   $patientID = $_POST["patientID"];

   $sql5="SELECT * FROM covidtest WHERE patientID = '$patientID' ";
   $resultFind = mysqli_query($conn, $sql5);


       if ($resultFind){
       while ($row1= mysqli_fetch_array($resultFind)){
         $new=$row1["patientEmail"];
          $new2=$row1["id"];

            echo "the result is ".$new." thank you " ;
             echo "the test id is ".$new2." thank you " ;
            }

        }

$conn->close();

  ?>
