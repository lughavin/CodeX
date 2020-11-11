<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Register New Test Centre</title>
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
                
                <li>
                <a class="nav-link" href="managerInterface.php"><span class="sr-only"></span>Back</a>
                </li>
                <li>
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
                                    Register Test Centre
                                </h5><br>

                                <?php
                                include "./db.php";

                                $sql="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                $result = mysqli_query($conn, $sql);
                                // Echo session variables that were set on previous page
                                while ($row = $result->fetch_assoc()) {
                                echo "<b><h2 style='color:white;' > Welcome ".$row['name']."</h2></b>";}
                                ?>

                            </div>

                            
                        </div>

                    </div>
                    <h5 style="color:white;" >
                                    Please enter the name of the test centre to register!
                                </h5><br>

                            <form method="POST" action="CodeRegisterTestCentre.php">
                                <h4 style="color:white;"> &nbsp;Test Centre Name:</h4><br>
                                <input type="text" class="form-control" id="testCentre" name="testCentre" minlength="4
                                       placeholder="Test Centre Name" required/>
                                <br>

                                <select name="tester" class="form-control">
                                    <option>

                                        <?php
                                         include "./db.php";

                                            $sql="SELECT * from user WHERE position = 'Tester' ";
                                            $result1 = $conn-> query($sql);

                                            if ($result1) {
                                              while ($row1= mysqli_fetch_array($result1)) {
                                                $new=$row1["name"];
                                                echo " Select Tester <br> <option>$new<br></option> ";
                                              }
                                            }
                                              $conn ->close();

                                         ?>
                                     </option>
                                         </select><br>
                                <button type="submit" id="register" name="register" class="button button-a button-big button-rouded"><b>Register</b></button>
                            </form>
                </div>
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
<script type="text/javascript">
    function fnConfirm() {
        var objAddress = document.getElementById("address");

        if (objAddress.value == "") {
            alert("Enter Test Centre Name..!!");
            objMonthlyRequired.focus();
            return false;
        } else {
            alert("Succeed to set up New Residence")
        }

    }

 </script>

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
