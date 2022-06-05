<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        只給魚竿不給魚-就職推薦網站
    </title>
    <link rel="shortcut icon" href="./images/favicon_FS.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/icons.min.css">


    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body class="sidebar-expand">
    <?php
     if (!isset($_SESSION['username'])){
      header("Refresh:0;url=user-login.php");
      }
    ?>>  
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index2.php">
                <img src="./images/logo_FS.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="index.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-home'></i>
                        <span>只給魚竿不給魚</span>
                        <div class="dropdown-icon">
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="index2.php">
                                工作能力圖表
                            </a>
                        </li>
                        <!--
                        <li>
                            <a href="user-profile.html">
                                User Profile
                            </a>
                        </li>
<li>
                            <a href="user-login.html">
                                User Login
                            </a>
                        </li>
                        <li>
                            <a href="new-account.html">
                               New Account
                            </a>
                        </li>
-->
                    </ul>
                </li>
                <!--
                <li class="sidebar-submenu">
                    <a href="project.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-bolt'></i>
                        <span>Project</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="project.html">
                               Project
                            </a>
                        </li>
                        <li>
                            <a href="project-details.html">
                                Project Details
                            </a>
                        </li>
                        <li>
                            <a href="new-project.html">
                                New Project
                            </a>
                        </li>
                    </ul>
                </li>
-->

                <!--
                <li class="sidebar-submenu">
                    <a href="clients.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-user'></i>
                        <span>Client</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                                                <li>
                            <a href="clients.html">
                               Manager Client
                            </a>
                        </li>
                        <li>
                            <a href="client-details.html">
                                Client Details
                            </a>
                        </li>
                    </ul>
                </li>
-->
                <!--
                <li>
                    <a href="board.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Board</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class='bx bx-calendar'></i>
                        <span>Calendar</span>
                    </a>
                </li>
-->

                <li>
                    <a href="message.php">
                        <i class='bx bxs-message-rounded-detail'></i>
                        <span>社群</span>
                    </a>
                </li>
                <li>
                    <a href="psychological_test.php">
                        <i class='bx bxs-message-rounded-detail'></i>
                        <span>性向職能測試</span>
                    </a>
                </li>

                <li class="sidebar-submenu">
                    <a href="chart-apex.php" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component'></i>
                        <span>歷年職缺統計</span>
                    </a>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>黑夜模式</span>
                        </div>

                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                職能測試
            </div>
        </div>

        <div class="d-flex align-items-center">

            <!-- App Search-->
            <!--
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
-->
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <!--
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-search-alt' ></i>
                    </button>
                    -->
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="btn dropdown-toggle" id="header-lang-img">
                            EN 
                            <i class='bx bx-caret-down'></i>
                        </span>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
-->

            <!-- item-->
            <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="./images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
-->
            <!-- item-->
            <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="./images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>
-->

            <!-- item-->
            <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="./images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>
-->

            <!-- item-->
            <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="./images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>
-->

            <!-- item-->
            <!--
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="./images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>
-->
            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
            </div> -->

            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="./images/profile_1.png" width="70" height="70"
                            alt="Header Avatar">
                        <span class="pulse-css"></span>
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">Randy Riley</span>
                            <span class="d-block mt-7" >randy.riley@gmail.com</span>
                        </span>
                            
                        <i class='bx bx-chevron-down'></i>
                    </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <div class="dropdown-divider"></div>
					<?php  if (isset($_SESSION['username'])) : ?>
					<p> <a class="dropdown-item text-danger" href="index.php?logout='1'" style="color: red;">登出</a> </p>
					<?php endif ?>
                </div>

            </div>

        </div>
    </div>
    <!-- End Main Header -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-content message">
            <div class="row">
                <!-- 
                <div class="col-12">
                    
                    <div class="box card-box">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class="bx bxs-bell bx-tada"></i>
                            </div>
                            <div class="content">
                                <h5 class="title-box">Notification</h5>
                                <p class="color-1 mb-0 pt-4">5 Unread notification</p>
                            </div>
                        </div>
                        <div class="icon-box bg-color-2">
                            <div class="icon bg-icon-2">
                                <i class='bx bxs-message-rounded'></i>
                            </div>
                            <div class="content click-c">
                                <h5 class="title-box">Message</h5>
                                <p class="color-2 mb-0 pt-4">5 Unread notification</p>
                            </div>
                            <div class="notification-list card">
                                <div class="top box-header">
                                    <h5>Notification</h5>

                                </div>
                                <div class="pd-1r">
                                    <div class="divider"></div>
                                </div>

                                <div class="box-body">
                                    <ul class="list">
                                        <li class="d-flex no-seen">
                                            <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-1.png" alt="avt"></div>
                                            <div class="info">
                                                <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                                <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                            </div>
                                        </li>

                                        <li class="d-flex">
                                            <div class="img-mess"><img class="mr-14" src="./images/avatar/avt-1.png" alt="avt"></div>
                                            <div class="info">
                                                <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                                <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="btn-view">
                                        <a class="font-w600 h5" href="message.html">View All</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="icon-box bg-color-3">
                            <a class="create d-flex" href="calendar.html">
                                <div class="icon bg-icon-3">
                                    <i class="bx bx-calendar"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title-box">Calendar</h5>
                                    <p class="color-3 mb-0 pt-4">5 Unread notification</p>
                                </div>
                            </a>
                        </div>
                        <div class="icon-box bg-color-4">
                            <a class="create d-flex" href="#" data-toggle="modal" data-target="#add_project">
                                <div class="icon bg-white">
                                    <i class="bx bx-plus"></i>
                                </div>
                                <div class="content d-flex align-items-center">
                                    <h5 class="color-white">Create New Project</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>-->
            </div>
            <!--
            <div class="row">
                <div class="col-4 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <!--
                            <div class="box">
                                <div class="box-info-messager">
                                    <div class="box-body pd-0 d-flex align-items-start">
                                        <div class="left w-90">
                                            <div class="message-pic big">
                                                <img src="./images/avatar/avt-mess.png" alt="">
                                                <div class="pulse-css"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <h5 class="fs-24">Randy Riley</h5>
                                                </div>
                                                <div class="text">
                                                    <p class="pb-5 mt-9 mb-0">Lead UX/UI Designer</p>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" value="checkbox" name="check" checked>
                                                    <span class="ml-10">Active</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="dropdown ml-14">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-cog color-text"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-0">
                            <div class="box box-message">
                                <!--
                                <div class="input-group search-area">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="bx bx-search"></i></a></span>
                                    <input type="text" class="form-control" placeholder="Search">

                                </div>
-->
            <!--
                            <div class="box-header">
                                <h4 class="card-title">AI BOT</h4>
                                <div class="dropdown ml-14">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </div>-->
            <!--
                            <div class="box-content" style="height:100px">-->
            <!--
                                <ul class="message-list">
                                    <li class="waves-effect waves-teal active">
                                        <div class="left d-flex">
                                            <div class="avatar">
                                                <img src="./images/avatar/message-2.png" alt="">
                                                <div class="pulse-css-1"></div>
                                            </div>
                                            <div class="content">
                                                <div class="username">
                                                    <div class="name h6">
                                                        職能測試機器人>.0
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Hi,請問要做測驗嗎?</p>
                                                </div>
                                            </div>
                                        </div>

                            <div class="clearfix"></div>
                            </li>

                                </ul>-->
            <!-- /.message-list scroll -->
            <!-- /.box-content
                                </div>
                                <div class="box-header">
                                    <h4 class="card-title">職能社群</h4>
                                    <div class="dropdown ml-14">
                                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <ul class="message-list">
                                        <li class="waves-effect waves-teal active">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-2.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            電商行政總管
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>
                                        </li>

                                        <li class="waves-effect waves-teal">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-3.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            網頁工程師
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </li>
       
                                        <li class="waves-effect waves-teal">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-4.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            設備工程師
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </li>

                                        <li class="waves-effect waves-teal">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-5.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            區塊鍊工程師
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </li>

                                        <li class="waves-effect waves-teal">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-6.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            前端工程師
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="waves-effect waves-teal">
                                            <div class="left d-flex">
                                                <div class="avatar">
                                                    <img src="./images/avatar/message-7.png" alt="">
                                                    <div class="pulse-css-1"></div>
                                                </div>
                                                <div class="content">
                                                    <div class="username">
                                                        <div class="name h6">
                                                            後端工程師
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <p>歡迎近來討論喔!!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </li>

                                    </ul>
                                    <!-- /.message-list scroll -->
            <!--
        </div>

    </div>

    </div>
    </div>
    </div>-->
            <div class="col-8 col-md-12">
                <div class="box message-info">
                    <div class="box-info-messager">
                        <div class="message-pic">
                            <img src="./images/bot.png" width="70" height="70" alt="">
                            <div class="pulse-css"></div>
                        </div>
                        <div class="content">
                            AI職能測驗!!
                            <div class="username">
                                <h5 class="fs-18">職能測試機器人>.0</h5>
                            </div>
                            <div class="text">
                                <p class="fs-14">Hi,我是智能機器人可以辨識出您的職業能力喔!!?</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-info-messager -->
                    <div class="divider"></div>

                    <div class="message-box">
                        <div class="message-out">
                            <div class="message-pic">
                                <img src="./images/bot.png" width="70" height="70" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>您好,我是智能機器人。我可以辨識出您的職業能力喔!!</p>
                                    <p>請問先生／小姐目前有目標職業嗎？</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:45 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/profile_1.png" width="70" height="70" style="border-radius: 50%;">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>軟體工程師</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:39 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.message-in -->
                        <div class="clearfix"></div>
                        <div class="message-out">
                            <div class="message-pic">
                                <img src="./images/bot.png" width="70" height="70" alt="">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>好的麻煩請回答下列心理測試！！</p>
                                    <p>(問問題中)</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:45 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.message-out -->
                        <div class="clearfix"></div>
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/profile_1.png" width="70" height="70" style="border-radius: 50%;">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>(回答問題中)</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:52 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="message-in">
                            <div class="message-pic">
                                <img src="./images/profile_1.png" width="70" height="70" style="border-radius: 50%;">
                                <div class="pulse-css-1"></div>
                            </div>
                            <div class="message-body">
                                <div class="message-text">
                                    <p>....(以下略)</p>
                                </div>
                                <div class="message-meta">
                                    <p class="mt-10">Sunday, march 17, 2021 at 2:52 PM</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="form-chat">
                        <form action="#" method="get" accept-charset="utf-8">
                            <div class="message-form-chat">
                                <!-- /.pin -->
                                <span class="message-text">
                                        <textarea name="message" placeholder="Type your message..." required="required"></textarea>
                                    </span>
                                <!--
                                <span class="camera">
                                        <a href="#" title="">
                                            <i class="fas fa-smile"></i>
                                        </a>
                                    </span> /.message-text -->
                                <!-- 
                                <span class="icon-message">
                                        <a href="#" title="">
                                            <i class="fas fa-paperclip"></i>
                                        </a>
                                    </span>/.camera -->
                                <!-- /.icon-right -->
                                <!-- <div class="icon-mobile">
                                        <ul>
                                            <li>
                                                <a href="#" title=""><i class="fas fa-smile"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fas fa-paperclip"></i></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                <!-- /.icon-right -->
                                <span class="btn-send">
                                        <button class="waves-effect" type="submit">Send <i class="fas fa-paper-plane"></i></button>
                                    </span>
                                <!-- /.btn-send -->

                            </div>
                            <!-- /.message-form-chat -->
                            <div class="clearfix"></div>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>

        <div id="add_project" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input class="form-control" value="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select class="select">
                                                <option>Client 1</option>
                                                <option>Client 2</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control " type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control " type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <input placeholder="$50" class="form-control" value="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <select class="select">
                                                <option>Hourly</option>
                                                <option selected>Fixed</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Priority</label>
                                        <select class="select">
                                                <option selected>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Files</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/apexcharts/apexcharts.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>



    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>