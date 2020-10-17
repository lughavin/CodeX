<?php
  session_start();
  echo '<script>';
  echo 'alert("Thank you! ")';
  echo '</script>';
  echo '<script> window.location.assign("../bit216/index.html"); </script>';
  session_destroy();
?>

