<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Record New Test</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">
                                <br>
                                <h5 style="color:white;" class="title-left">
                                    Enter the new patient details:
                                </h5>
                            </div>
                            <form method="POST" action="CodeRecordTest.php">
                                <h4 style="color:white;"> &nbsp;Name:</h4>
                                <input type="text" class="form-control" id="patientName" name="patientName"
                                       placeholder="Name" required/>

                                <br>
                                <h4 style="color:white;"> &nbsp;Username:</h4>
                                <input type="text" class="form-control" id="username" name="username" required/><br>
                                
                                <h4 style="color:white;"> &nbsp;Password:</h4>
                                <input type="password" class="form-control" id="password" name="password"
                                       required/><br>
                                
                                <h4 style="color:white;"> &nbsp;Email:</h4>
                                <input type="email" class="form-control" id="email" name="email" required/><br>
                            
                                 <h4 style="color:white;"> &nbsp;ID:</h4>
                                <input type="text" class="form-control" id="passport" name="passport"
                                       placeholder="ID Number" required/>
                                <br>

                                <div class="form-group">
                                    <label for="patientType"><h4 style="color:white;"> Patient Type</h4></label>
                                    <select class="form-control" id="patientType" name="patientType">
                                        <option value="Quarantined">Quarantined</option>
                                        <option value="Close Contact">Close Contact</option>
                                        <option value="Infected">Infected</option>
                                        <option value="Suspected">Suspected</option>
                                    </select>
                                </div>
                                <br>
                                <h4 style="color:white;"> &nbsp;Symptoms:</h4>
                                <input type="text" class="form-control" id="symptoms" name="symptoms"
                                       placeholder="Redness in the eyes, Running Nose , etc" required/>


                                <br>
                                 <?php
                                    include "./db.php";

                                    $sql="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                    $result = mysqli_query($conn, $sql);
                                    // Echo session variables that were set on previous page
                                    while ($row = $result->fetch_assoc()) {
                                    $user=$row['name'];
                                    }
                                ?>
                                 <h4 style="color:white;"> &nbsp;Test Centre:</h4>
                                    <select name="testcentre" class="form-control">
                                        <option>

                                            <?php
                                             include "./db.php";

                                                $sql2="SELECT * from testcentre WHERE tester = '$user' ";
                                                $result1 = $conn-> query($sql2);

                                                if ($result1) {
                                                  while ($row1= mysqli_fetch_array($result1)) {
                                                    $new=$row1["centreName"];
                                                    echo " <option>$new<br></option> ";
                                                  }
                                                }
                                                  $conn ->close();

                                             ?>
                                        </option>
                                     </select>
                                <br>
                                <button type="submit" name="submit" onclick=fnConfirm() id="submit"
                                        class="button button-a button-big button-rouded">Submit
                                </button>

                                <button type="reset" value="Reset" class="button button-a button-big button-rouded">
                                    Reset
                                </button>
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
