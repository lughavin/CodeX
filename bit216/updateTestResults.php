<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Update Test</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/codeX.png" rel="icon">
    <link href="img/codeX.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script> 

</head>

<body id="page-top">

<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <img src="img/logo_main.png" style="width:200px;height:70px" class="nav-link js-scroll active" href="#home">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>

                <a class="nav-link" href="testerInterface.php"><span class="sr-only"></span>Back</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="home" class="intro2 route bg-image" style="background-image: url(img/dna.jpg)">


    <div class="overlay-itro"></div>


    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <!--<div id="contact" class="box-shadow-full">-->
                        <br>  

                        <h5 style="color:white;" class="title-left">
                                    Enter the patient details:</h5>
                                    <br>

 			<h4 style="color: white;">Patient are required to complete a first test before taking another test!</h4>
 			<br>


            <div style="height:400px;overflow:auto;">            
            <table class="table">
            <tr class="thead-dark">
                <th>Test ID</th>
                <th>Patient Name</th>
                 <th>Patient ID</th>
                 <th>Test Centre</th>
                <th>Officer Name</th>
                <th>Result Status</th>
                <th>Result Date</th>
                <th>Test Date</th>
            </tr>

            <?php

              include "./db.php";

                      $sql="SELECT * FROM covidtest";
                      $result = $conn-> query($sql);

                      if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                          echo "<tr><td>". $row["id"]."</td><td>".$row["patientName"]."</td><td>".$row["patientID"]."</td><td>".$row["testCentre"]."</td><td>".$row["officerName"]."</td><td>"
                          .$row["status"]."</td><td>".$row["resultDate"]."</td><td>".$row["testdate"]."</td><td>";

                        }
                        echo "</table>";
                      }
                    else{
                      echo "No Test Done";
                    }

                    ?>
        </table>
      </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">
                                
                            </div>


                            <form method ="POST" action ="">
                                <h4 style="color:white;"> &nbsp; Patient ID:</h4>
                                <input type="text" class="form-control" id="patientID" name="patientID" /><br>

                                 <button type="submit" name="search" onclick=fnConfirm() id="search"
                                        class="button button-a button-big button-rouded">Search
                                </button><br><br>

                                 <?php
                                     include "./db.php";

                                      $patientID = $_POST["patientID"];
                                      $status = 'pending';

                                      $sql5="SELECT * FROM covidtest WHERE patientID = '$patientID'AND status='$status' ";
                                      $resultFind = mysqli_query($conn, $sql5);


                                          if ($resultFind){
                                          while ($row1= mysqli_fetch_array($resultFind)){
                                            $email=$row1["patientEmail"];
                                             $TestId=$row1["id"];
                                             
                                               ?>

                                               <select name="testID" id="testID" class="form-control">
                                                  <option>

                                                      <?php
                                                        echo " Select Test ID <br> <option>$TestId<br></option> ";
                                                       ?>


                                                       </option>
                                                       </select><br>
                                                       <?php
                                               }

                                               echo "<br><b>The Patient Email is: <a href=''>".$email."<a></b> <br> <br>" ;}
                                           
                                           ?>

                                            <h5 style="color:white;"> &nbsp;Email:</h5>
                                           <input type="email" class="form-control" id="email2" name="email2"
                                                  placeholder="exampleEmail@gmail.com" /><br>

                                            <h5 style="color:white;"> &nbsp;Subject:</h5>
                                           <input type="text" class="form-control" id="subject" name="subject"
                                                  placeholder="CodeX Test Results!" /><br>


                                           <h5 style="color:white; height:300;"> &nbsp;Message</h5>
                                           <textarea style=" height:600; resize: none;" type="text" class="form-control" id="message" name="message"
                                                    > </textarea>


                                           <br>
                                           <button type="submit" name="submit" onclick=fnConfirm()  id="submit"
                                                   class="button button-a button-big button-rouded">Submit
                                           </button>

                                           <button type="reset" value="Reset" class="button button-a button-big button-rouded">
                                               Reset
                                           </button>

                                           <?php
                                           $status ="Completed";
                                           $testID=$_POST['testID'];
                                           $currentDateTime= date('Y-m-d');


                                           $sqlUp="UPDATE covidtest
                                           SET status = '$status', resultDate = '$currentDateTime'
                                           WHERE id = '$testID';";




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
                                                 $mail->addAddress($_POST['email2']);     // Add a recipient

                                                 $mail->addReplyTo(EMAIL);
                                                 // print_r($_FILES['file']); exit;

                                                 $mail->isHTML(true);                                  // Set email format to HTML

                                                 $mail->Subject = $_POST['subject'];
                                                 $mail->Body    = $_POST['message'];
                                                 $mail->AltBody = $_POST['message'];

                                                $mail->send();
                                             }
                                             $qryUp = mysqli_query($conn, $sqlUp);




                                           ?>

                           </form>

                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
    </div>
</div>
</div>


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/counterup/jquery.waypoints.min.js"></script>
<script src="lib/counterup/jquery.counterup.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<!-- JavaScript Confirm-->
<footer id="main-footer">
  <div class="row">
    <div class="col-9">
      <small>Made in Help University &copy; 2020</small>
    </div>

    <div class="col-3">
      <p>This website was developed by Code X team</p>
    </div>

  </div>
</footer>
</body>
</html>
