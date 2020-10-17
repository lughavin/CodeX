<?php 
  include "./db.php";
  session_start();

error_reporting(0);
ini_set('display_errors', 0);
$ID=$_POST["testKitID"];
$testKitName=$_POST["testKitName"];
$testKitStock=$_POST["testKitStock"];
$update=$_POST["update"];
$add=$_POST["add"];


$sql2="UPDATE testkit
SET stock = '$testKitStock'
WHERE id = '$ID';";

$sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                $result = mysqli_query($conn, $sql3);
                                // Echo session variables that were set on previous page
                                while ($row = $result->fetch_assoc()) {
                                $user=$row['name'];}

$sql="insert into testkit(name, stock, officerName)
values('$testKitName','$testKitStock','$user');";



if ($update){
$qry2 = mysqli_query($conn, $sql2);
if ($qry2) {
	echo '<script>';
                echo 'alert(" Updated Successfully ")';
                echo '</script>';
    	echo '<script> window.location.assign("../bit216/manageTestKit.php"); </script>';

}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}

if ($add){
$qry = mysqli_query($conn, $sql);
if ($qry) {
	 echo '<script>';
            echo 'alert(" Added Successfully ")';
            echo '</script>';
	echo '<script> window.location.assign("../bit216/manageTestKit.php"); </script>';

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

$conn->close();
?>
