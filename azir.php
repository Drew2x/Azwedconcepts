<?php
include("config.php");
include("inquiry.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$message = $_POST['message'];


$sql = "INSERT INTO azir(name, email, subject, date, message) 
VALUES('$name', '$email', '$subject', '$date','$message')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Message Sent!");';
	echo 'window.location="thank_you.html";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="index.php";';
	echo '</script>';
}
?>