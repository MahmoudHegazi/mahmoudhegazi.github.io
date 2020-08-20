<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "landing_page_project";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
  die("Could not connect to the database ". mysqli_error($con));
}
?>