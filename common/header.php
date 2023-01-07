<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/css/animate.css'; ?>">
    <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/css/style.css'; ?>">
</head>
<body id="scroll_chg">
    <div id="wrap">
        <div id="header">
            <h1 class="logo"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/index.php'; ?>"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/img/ukr_logo.png'; ?>"></a></h1>
            <a class="hide_menu" href="#">
                <span class="w_line"></span>
                <span class="w_line"></span>
                <span class="w_line"></span>
            </a>
            <div class="welcome">
                <div class="wel_bg"></div>
                <ul class="sm_menu">
                    <li class="wow fadeInLeft"><a href="#"><span>works</span></a></li>
                    <li class="com wow fadeInLeft" data-wow-delay="0.1s"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/company.php'; ?>"><span>company</span></a></li>
                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/recruit.php'; ?>"><span>recruit</span></a></li>
                    <li class="wow fadeInLeft" data-wow-delay="0.5s"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/hanbom/sub/contact.php'; ?>"><span>contact</span></a></li>
                </ul>
                <div class="copyright">ⓒ<span>HANBOM</span> STUDIO</div>
                <ul class="down_list">
                    <li><a href="#">BROCHURE DOWNLOAD<span class="material-symbols-outlined">file_download</span></a></li>
                    <li><a href="#">BLOG<span><i class="fas fa-share"></i></span></a></li>
                </ul>
            </div>
        </div>
        <div id="container">