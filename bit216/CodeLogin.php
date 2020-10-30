<?php
  include "./db.php";
  session_start();
  error_reporting(0);
  ini_set('display_errors', 0);
  $username = $_POST['username'];
  $password = $_POST['password'];

$sql="SELECT * FROM user WHERE username ='$username' && password='$password';";



$result = mysqli_query($conn, $sql);

$num=mysqli_num_rows($result);

$row = $result->fetch_assoc();

$_SESSION['findUser']=$username;



  if ($num==1 && $row['position'] === 'Tester') {
  header("Location: /bit216/testerInterface.php");
  } else if ($row['userType'] === 'patient') {
    header("Location: /bit216/viewTestingHistory.php");
  }else if ($row['userType'] === 'manager') {
       header("Location: /bit216/managerInterface.php");
  }else if ($row['position'] === 'officer') {
           header("Location: /bit216/testReport.php");
           }
  else {
    echo "<script>
    alert('Username or Password Incorect');
    window.location.href='/bit216/index.html';
    </script>";
  }
  if (isset($_SESSION['findUser'])) {
         echo "session is set";
  }


$conn->close();


  ?>
