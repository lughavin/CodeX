<?php 
  include "./db.php";

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

$sql="insert into testkit(name, stock)
values('$testKitName','$testKitStock');";



if ($update){
$qry2 = mysqli_query($conn, $sql2);
if ($qry2) {
	echo '<script>';
                echo 'alert(" Updated Successfully ")';
                echo '</script>';
    	echo '<script> window.location.assign("../bit216/manageTestKit.html"); </script>';

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
	echo '<script> window.location.assign("../bit216/manageTestKit.html"); </script>';

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

$conn->close();
?>
