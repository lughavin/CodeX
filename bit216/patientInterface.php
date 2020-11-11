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
                                        echo "<b><h2 style='color:white;' > Welcome ".$row['name']."!</h2></b>"."";}

                                    ?>
                                </h5>
                                
                        </div>
                       			 <img src="img/glass.png" style="width:70px;height:70px"><br>
                                <h4 style="color: white; ">View Testing History.</h4>
                                <a style="background-color: grey" href="viewTestingHistory.php" class="button"> View </a>

                                <br><br>

                    </div>



                    <div class="container" style="background-color: #f5f5dc; color: black; padding: 20px; border-radius: 20px;">
				               <h4>
				               	Covid-19 News
				               </h4>


				               <a > 
								COVID-19 | The Health Ministry today reported  <b>852 new Covid-19 cases</b>, breaking the previous five-day streak in which new daily infections were <b>above the 1,000 mark</b>.
                                <br>
                                This brings the <b>cumulative cases to 40,209, crossing the 40,000 mark for the first time</b>. Meanwhile, the <b>cumulative recoveries stand at 28,234.</b>
                                <br>
                                Leading indicators in brief:
                                <br>
                                Active cases =  11,689 ↑ (23 more than previous day) 
                                <br>
                                Patients in intensive care = 94 ↑ (Seven more than since yesterday) 
                                <br>
                                Intubated patients = 32 (Unchanged)
                                <br>
                                Deaths = 4 ↑ (One more than yesterday)
                                <br>
                                Recoveries = 825 ↓ (204 less than yesterday)
                                <br>
                                <b>Health Ministry director-general Dr Noor Hisham Abdullah, in a statement, said 61.5 percent of the new cases were from Sabah while 19.9 percent were from the Klang Valley.</b>
                                <br>
                                He also reported four deaths with two from Sabah and one from Perak and Kedah respectively. The death toll now stands at 286..</a>
                                <br>

							</div>

							<br>
                            <a> &nbsp </a>
                            <a> &nbsp </a>


                            <div class="container" style="background-color: #f5f5dc; color: black; padding: 20px; border-radius: 20px;">
                               <h4>
                                Covid-19 Symptoms
                               </h4>


                               <a > 
                                COVID-19 symptoms are manifest usually as fevers, a dry cough and tiredness. Some infected individuals may have mild symptoms like headaches, muscle pains, runny nose, sore throat or diarrhea. Some COVID-19 patients may suffer from severe pneumonia, organ failure (e.g. kidney), acute respiratory tract infection and septic shock, which can lead to death. However, there are some infected individuals who do not develop any symptoms and do not feel unwell. These people are called asymptomatic carriers. The people who are highly vulnerable to COVID-19 are the elderly, young children, pregnant ladies, and people with chronic diseases such as hypertension, diabetes, heart problems, kidney and liver diseases, in addition to immuno-compromised people including patients with cancer, HIV, auto-immune disorders, and smokers.</a>
                            </div>

                            <br>

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
