<!-- Sau khi thanh toán xong trả về trang này
<?php //session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Thank You</title>
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .jumbotron {
      background-color: #ffffff;
      margin-top: 50px;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="jumbotron text-center">
      <h1 class="display-3">Thank You!</h1>
      <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
      <hr class="my-4">
      <p>
          Please login again !  -->
      <!-- </p>
      <p class="lead">
        <a class="btn btn-primary btn-sm" href="http://localhost/chatGPT2/login_page/ltr/login.php" role="button">Continue to homepage</a>
      </p>
    </div>
  </div>
</body>
</html> -->

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Payment</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="homepage-2">

<?php 
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo '<script>alert("' . $message . '");</script>';
    }
?>
<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main" >

    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="http://localhost/chatGPT2/">
            <img class="navbar-brand-regular" src="./assets/img/logo/logo.png" style="width: 52px; height: 52px" alt="brand-logo">
            <img class="navbar-brand-sticky" src="./assets/img/logo/logo.png" style="width: 52px; height: 52px" alt="sticky brand-logo">
        </a>

    </header>
    <!-- ***** Header End ***** -->


    <!-- ***** Price Plan Area Start ***** -->
    <section id="pricing" class="section price-plan-area bg-gray overflow-hidden ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h4 class="d-none d-sm-block mt-4">Giao dịch đã được xác nhận!</h4>
                        <h4 class="d-none d-sm-block mt-4">Tài khoản của bạn đã được nâng cấp thành công</h4>
                        <p class="d-block d-sm-none mt-4">Vui lòng đăng nhập lại</p>
                        <div class="plan-button">
                            <a href="../login_page/ltr/api/api_logout.php" class="btn mt-4" style="color: #FFFFFF">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
           
</div>