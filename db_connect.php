<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "ehc1u4pmphj917qf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "l3ek16gh00sj0zv5";
$user_pass = "hbd0mxj5v4pf4vzd";
$database_in_use = "e1sscuxb6kzra4ty";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>