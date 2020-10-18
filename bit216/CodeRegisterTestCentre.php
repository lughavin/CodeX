<?php

include "./db.php";

session_start();
$name =$_POST["testCentre"];

$sql="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

    $result = mysqli_query($conn, $sql);
    // Echo session variables that were set on previous page
    while ($row = $result->fetch_assoc()) {
    $user=$row['name'];}

        $sql2 = "INSERT INTO testcentre (centreName, centreOfficer)
        VALUES ('$name','$user');";


$qry2 = mysqli_query($conn, $sql2);
	if ($qry2) {

 echo '<script>';
         echo 'alert(" Test Centre Successfully Created ")';
         echo '</script>';
     	echo '<script> window.location.assign("../bit216/registerTestCentre.php"); </script>';
}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

?>
