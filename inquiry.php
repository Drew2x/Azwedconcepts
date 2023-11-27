<?php
session_start();
   
if(!isset($_SESSION['inquiries'])){
	header("location:thank_you.html");
	}
?>