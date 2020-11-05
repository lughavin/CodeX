<?php 
  include "./db.php";
session_start();
error_reporting(0);
ini_set('display_errors', 0);


$PpatientType=$_POST["newPType"];
$Psymptoms=$_POST["newPsymptoms"];
$Ptestcentre= $_POST["testcentre"];


$sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

        $result = mysqli_query($conn, $sql3);
        // Echo session variables that were set on previous page
        while ($row = $result->fetch_assoc()) {
        $user=$row['name'];}


$sql2="insert into covidtest(patientName, officerName, patientType, symptoms, testcentre, patientID, patientEmail)
values('{$_SESSION["Name"]}','$user','$PpatientType','$Psymptoms','$Ptestcentre','{$_SESSION["ID"]}', '{$_SESSION["EMAIL"]}');";

$qry2 = mysqli_query($conn, $sql2);


if ($qry2) {
	 echo '<script>';
            echo 'alert(" Test has been Successfully Recorded!")';
            echo '</script>';
	echo '<script> window.location.assign("../bit216/updateTest.php"); </script>';


}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
?>
