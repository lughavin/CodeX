<?php 
  include "./db.php";
session_start();
//error_reporting(0);
//ini_set('display_errors', 0);
$name=$_POST["patientName"];
$username=$_POST["username"];
$password=$_POST["password"];
$patientType=$_POST["patientType"];
$userType="patient";
$symptoms=$_POST["symptoms"];
$passport=$_POST["passport"];


$sql="insert into user(name, username, password, userType, passport)
values('$name','$username','$password','$userType','passport');";

$sq3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                $result = mysqli_query($conn, $sql3);
                                // Echo session variables that were set on previous page
                                while ($row = $result->fetch_assoc()) {
                                $user=$row['name'];}


$sql2="insert into covidtest(patientName, officerName, patientType, symptoms)
values('$name','$user','$patientType','$symptoms');";

$qry = mysqli_query($conn, $sql);
$qry2 = mysqli_query($conn, $sql2);

if ($qry && $qry2) {
	 echo '<script>';
            echo 'alert(" Test has been Successfully Recorded ")';
            echo '</script>';
	echo '<script> window.location.assign("../bit216/recordNewTest.php"); </script>';

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
