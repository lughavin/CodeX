<?php 
  include "./db.php";
  session_start();

error_reporting(0);
ini_set('display_errors', 0);
$testKit_Name=$_POST["testKit_Name"];
$testCentrename=$_POST["testCentrename"];
$testKitStock=$_POST["testKitStock"];
$update=$_POST["update"];
$add=$_POST["add"];
$testCentre=$_POST["testCentre"];
$currentDateTime= date('Y-m-d');

$sql2="UPDATE testkit
SET stock = (stock +'$testKitStock')
WHERE testCentre = '$testCentrename';";

$sql4="UPDATE testkit
SET updatedOn = '$currentDateTime'
WHERE testCentre = '$testCentrename'";

$sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                $result = mysqli_query($conn, $sql3);
                                // Echo session variables that were set on previous page
                                while ($row = $result->fetch_assoc()) {
                                $user=$row['name'];}

$sql="insert into testkit(name, stock, officerName,testCentre)
values('$testKit_Name','$testKitStock','$user','$testCentre');";

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



  $usernamecheck= "SELECT `testCentre` FROM `testkit` WHERE testCentre='$testCentre '";

  $qry3 = mysqli_query($conn, $usernamecheck);
   $check = mysqli_fetch_assoc($qry3);
if ($add){
    if($check>=1){

             echo '<script>';
             echo 'alert(" Test Kit Already Exist for Test Centre, Try Updating Stock!")';
             echo '</script>';
                echo '<script> window.location.assign("../bit216/manageTestKit.php"); </script>';
         }else{
          $qry = mysqli_query($conn, $sql);
            if ($qry) {

            echo '<script>';
                       echo 'alert(" Added Successfully ")';
                       echo '</script>';
            echo '<script> window.location.assign("../bit216/manageTestKit.php"); </script>';
          }
         }
         }


$conn->close();
?>
