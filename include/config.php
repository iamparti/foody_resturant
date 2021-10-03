<?php 


$currency="₹";
$host="localhost";
$domain="http://localhost/foody/";

$db_user="root";
$db_name="foodydb";
$db_pass="";



date_default_timezone_set("Asia/Kolkata");

$conn=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("Connection Failed: ".mysqli_error());




?>