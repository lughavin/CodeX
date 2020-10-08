<?php

include "./db.php";

$username =$_POST["username"];
$password =$_POST["password"];
$name =$_POST["name"];
$tester = "Tester";
$userType = "officer";

        $sql2 = "INSERT INTO user (username, password, userType, name, position)
        VALUES ('$username', '$password', '$userType', '$name','$tester');";


$qry2 = mysqli_query($conn, $sql2);
	if ($qry2) {

 echo '<script>';
                 echo 'alert(" Tester Successfully Created ")';
                 echo '</script>';
     	echo '<script> window.location.assign("../bit216/recordTester.html"); </script>';
}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

?>
