<?php
include 'conn.php';
  $request_id = $_GET['id'];
$sql= "DELETE FROM blood_requests where request_id={$request_id}";
$result=mysqli_query($conn,$sql);

header("Location: requests.php");

mysqli_close($conn);

 ?>
