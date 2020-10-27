<?php 
  include "./db.php";
  session_start();

error_reporting(0);
ini_set('display_errors', 0);
$testKit_Name=$_POST["testKit_Name"];
$testKitName=$_POST["testKitName"];
$testKitStock=$_POST["testKitStock"];
$update=$_POST["update"];
$add=$_POST["add"];
$testCentre=$_POST["testCentre"];
$currentDateTime= date('Y-m-d');

$sql2="UPDATE testkit
SET stock = (stock +'$testKitStock')
WHERE name = '$testKit_Name';";

$sql4="UPDATE testkit
SET updatedOn = '$currentDateTime'
WHERE name = '$testKit_Name'";

$sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                $result = mysqli_query($conn, $sql3);
                                // Echo session variables that were set on previous page
                                while ($row = $result->fetch_assoc()) {
                                $user=$row['name'];}

$sql="insert into testkit(name, stock, officerName,testCentre)
values('$testKitName','$testKitStock','$user','$testCentre');";

$qry4 = mysqli_query($conn, $sql4);

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
if ($qry ) {
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
