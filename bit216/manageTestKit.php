<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Manage Test Kit Stock</title>
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
                    <a class="nav-link active" href="registerTestCentre.php">Register Test Centre</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="recordTester.html">Record Tester</a>
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

            <div class="col-1"></div>

                <div class="col-10">
                <br>  <br>  <br>  <br>
                <h4 style="color:white;"> &nbsp;Test Kit Stock Collection</h4>
                        <table class="table">
                            <tr class="thead-dark">
                                <th>Test Kit ID</th>
                                <th>Test Name</th>
                                <th>Stock</th>
                                <th>Officer Name</th>
                                <th>Test Centre</th>
                                <th>Added On</th>
                                <th>Updated ON</th>
                            </tr>

                            <?php

                              include "./db.php";

                                      $sql="SELECT * FROM testkit";
                                      $result = $conn-> query($sql);

                                      if ($result-> num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()) {
                                          echo "<tr><td>". $row["id"]."</td><td>".$row["name"]."</td><td>".$row["stock"]."</td><td>"
                                          .$row["officerName"]."</td><td>".$row["testCentre"]."</td><td>".$row["addOn"]."</td><td>"
                                          .$row["updatedOn"]."</td></tr>";
                                          # code...
                                        }
                                        echo "</table>";
                                        # code...
                                      }
                                    else{
                                      echo "No Test Kits found";
                                    }

                                    ?>
                        </table>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-6">


                <div class="card">

                    <h4 style="text-align: center">Add New Stock</h4>
                    <div class="card-body">
                        <p class="card-text">
                        <form method="POST" action="CodeManage.php">
                            <h4 style="color:black;"> &nbsp;Test Kit Name:</h4><br>
                            <input type="text" class="form-control" id=testKitName name="testKitName"
                                   placeholder="Enter Test Kit name" required/>
                            <br>
                            <h4 style="color:black;"> &nbsp;Stock:</h4><br>
                            <input type="number" class="form-control" id=testKitStock name="testKitStock"
                                   required/>
                            <br>
                            <select name="testCentre" class="form-control">
                                <option>

                                    <?php
                                     include "./db.php";

                                        $sql="SELECT * from testcentre  ";
                                        $result1 = $conn-> query($sql);

                                        if ($result1) {
                                          while ($row1= mysqli_fetch_array($result1)) {
                                            $new=$row1["centreName"];
                                            echo " Select Test Centre <br> <option>$new<br></option> ";
                                          }
                                        }
                                          $conn ->close();

                                     ?>
                                 </option>
                           </select><br>
                        <button type="submit" id="add" name="add" value="add" class="button button-a button-big button-rouded"><b>Add</b></button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <h4 style="text-align: center">Update Existing Stock</h4>
                    <div class="card-body">
                        <p class="card-text">
                        <form method="POST" action="CodeManage.php">
                            <h4 style="color:black;"> &nbsp;Test Kit ID:</h4><br>
                            <select name="testKit_Name" class="form-control">
                            <option>

                                <?php
                                 include "./db.php";


                                 $sql3="SELECT * FROM user WHERE username = '{$_SESSION["findUser"]}' ";

                                     $result = mysqli_query($conn, $sql3);
                                     // Echo session variables that were set on previous page
                                     while ($row = $result->fetch_assoc()) {
                                     $user=$row['name'];}


                                    $sql="SELECT * from testkit WHERE officerName = '$user' ";
                                    $result1 = $conn-> query($sql);

                                    if ($result1) {
                                      while ($row1= mysqli_fetch_array($result1)) {
                                        $new=$row1["name"];
                                        echo " TestKit Name <br> <option>$new<br></option> ";
                                      }
                                    }
                                      $conn ->close();

                                 ?>
                                 </option>
                                 </select><br>
                            <br>
                            <h4 style="color:black;"> &nbsp;Stock:</h4><br>
                            <input type="number" class="form-control" id=testKitStock name="testKitStock"
                                   required/>
                            <br>
                        <button type="submit" name="update" id="update" value="update" class="button button-a button-big button-rouded"><b>Update</b></button>
                        </form>
                        </p>



                    </div>
                </div>
            </div>


        </div>
        <br>


    </div>
</div>


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
