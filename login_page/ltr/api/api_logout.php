<?php 
unset ($_SESSION['account_type']);
unset ($_SESSION['username']);
unset ($_SESSION['email']);
unset ($_SESSION['end_date']);

header('location:../login.php');
//login_page\ltr\api\api_logout.php
?>