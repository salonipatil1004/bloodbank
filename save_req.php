<?php
$name = $_POST['fullname'];
$number = $_POST['mobileno'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood'];
$reason = $_POST['reason'];
$hospital = $_POST['hospital'];

$conn = mysqli_connect("localhost", "root", "salonipatil_1004", "bloodbank") or die("Connection error");
$sql = "INSERT INTO blood_requests(request_name, request_number, request_mail, request_age, request_gender, request_blood, request_reason, request_hospital) VALUES ('$name', '$number', '$email', '$age', '$gender', '$blood_group', '$reason', '$hospital')";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");

// Close the database connection
mysqli_close($conn);

// JavaScript for displaying a pop-up message
echo '<script type="text/javascript">';
echo 'alert("Request sent. You will be contacted in 2-3 working days on the information provided.");';
echo 'window.location = "http://localhost/bb1/need_blood.php";';
echo '</script>';
?>
