<?php
$con = mysqli_connect("localhost","mad","Mad@1234","mobile");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>