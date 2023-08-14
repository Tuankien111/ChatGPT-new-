<?php

session_start();
$API_KEY = "";
$arr="";
$host = 'meowtech-chatmeow.mysql.database.azure.com';
$username = 'dev';
$password = 'S3cureP@ss!2023';
$db_name = 'app'; 


// $_SESSION['account_type'] = "pro";
$ac = $_SESSION['account_type'];
 // Set your connection variables
 $conn = mysqli_init();

 mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
 if (mysqli_connect_errno()) {
     die('Failed to connect to MySQL: ' . mysqli_connect_error());
 }
  // Set character set and collation
     mysqli_set_charset($conn, 'utf8mb4');

if($ac== 'free') {
    $ran = rand(1,10);
    $qr = "SELECT `api_key` FROM `api_key` WHERE `id` = 'free-0002'";
    $result = $conn->query($qr);
    while ($row = mysqli_fetch_array($result)) {
        // $ar[] = $row;
        $API_KEY = $row[0];

    }
    // $arr  = $ar[0];
    
    // $API_KEY = $arr[0];

}

if($ac== 'pro') {

    $qr = "SELECT `api_key` FROM `api_key` WHERE `id` = 'pro'";
    $result = $conn->query($qr);
    while ($row = mysqli_fetch_array($result)) {
        // $ar[] = $row;
        $API_KEY = $row[0];

    }}
    