<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tester Interface</title>
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

                <a class="nav-link" href="logout.php"><span class="sr-only"></span>Logout</a>
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
                                     <?php
                                        include "./db.php";

                                        $sql="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                        $result = mysqli_query($conn, $sql);
                                        // Echo session variables that were set on previous page
                                        while ($row = $result->fetch_assoc()) {
                                        echo "<b><h2 style='color:white;' > Welcome Manager  ".$row['name']."</h2></b>"."<br>";}

                                    ?>
                                </h5>
                                <br><br>
                                <img src="img/testCentre.png" style="width:100px;height:70px">
                                <h4 style="color: white; ">Registering A New Test Centre.</h4>
                                <a style= "background-color: grey" href="registerTestCentre.php" class="button">Register Test Centre</a>

                                <br><br>
                                <img src="img/doctor2.png" style="width:70px;height:70px">
                                <h4 style="color: white; ">Record A New Officer Who Will Be A Tester.</h4>
                                <a style= "background-color: grey" href="recordTester.html" class="button">Record Tester</a>

                                <br><br>
                                <img src="img/calculator.png" style="width:80px;height:80px">
                                <h4 style="color: white; ">Manage Test Kit Stock.</h4>
                                <a style= "background-color: grey" href="manageTestKit.php" class="button">Manage Test Kit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <h4 style="color:white;"></h4>


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
