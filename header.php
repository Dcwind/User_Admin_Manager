<?php
session_start();

if(basename($_SERVER['PHP_SELF']) == "login.php" || basename($_SERVER['PHP_SELF']) == "register.php" || basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "addcustomer.php" || basename($_SERVER['PHP_SELF']) == "table.php" )
{}  else {
        if (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
            header("Location: http://localhost/frontend/index.php");
        }
}
?>
<!DOCTYPE html >
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html  lang="en"  ng-app> <!--<![endif]-->
<head>
<title><?php echo $title ?></title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="favcon.png">

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>

<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/shop.style.css">

<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="assets/css/headers/header-v5.css">
<link rel="stylesheet" href="assets/css/footers/footer-v4.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="assets/plugins/animate.css">
<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css">
<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

<!-- CSS Theme -->
<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">

<!-- CSS Customization -->
<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">

<div class="wrapper">
            