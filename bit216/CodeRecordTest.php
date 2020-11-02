<?php 
  include "./db.php";
session_start();
error_reporting(0);
ini_set('display_errors', 0);
$name=$_POST["patientName"];
$username=$_POST["username"];
$password=$_POST["password"];
$patientType=$_POST["patientType"];
$userType="patient";
$symptoms=$_POST["symptoms"];
$passport=$_POST["passport"];
$email=$_POST["email"];
$testcentre=$_POST["testcentre"];


$sql="insert into user(name, username, password, userType, passport,email)
values('$name','$username','$password','$userType','$passport','$email');";

$sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

        $result = mysqli_query($conn, $sql3);
        // Echo session variables that were set on previous page
        while ($row = $result->fetch_assoc()) {
        $user=$row['name'];}


$sql2="insert into covidtest(patientName, officerName, patientType, symptoms, testcentre, patientID)
values('$name','$user','$patientType','$symptoms','$testcentre','$passport');";

$qry = mysqli_query($conn, $sql);
$qry2 = mysqli_query($conn, $sql2);

   
   if(isset($_POST['submit'])) {
      require 'PHPMailerAutoload.php';
      require 'credential.php';

      $mail = new PHPMailer;

      //$mail->SMTPDebug = 4;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'CodeX Team');
      $mail->addAddress($_POST['email']);     // Add a recipient

      $mail->addReplyTo(EMAIL);
      // print_r($_FILES['file']); exit;
      for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
        $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
      }
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'CodeX Login';
      $mail->Body    = 'Your Username is: '.$username. ' and your Password is:' .$password;
      $mail->AltBody = $_POST['message'];

      $mail->send();

    

    }

if ($qry && $qry2) {
	 echo '<script>';
            echo 'alert(" Test has been Successfully Recorded and Email Have been Sent!")';
            echo '</script>';
	echo '<script> window.location.assign("../bit216/recordNewTest.php"); </script>';


}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
