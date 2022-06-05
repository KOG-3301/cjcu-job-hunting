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

    <!-- Plugin -->
    <link rel="stylesheet" href="./libs/owl.carousel/assets/owl.carousel.min.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

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
		<?php  if (isset($_SESSION['success'])) : ?>
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="index2.php" class="sidebar-menu-dropdown">
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
                <li>
-->
                <!--
                    <a href="board.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Board</span>
                    </a>
-->
                <!--
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
                        <span>歷年職缺統計</span>
                    </a>
                </li>
                <li>
                    <a href="psychological_test.php">
                        <i class='bx bxs-message-rounded-detail'></i>
                        <span>性向職能測試</span>
                    </a>
                </li>
                <li class="sidebar-submenu">
                    <a href="chart-apex.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component'></i>
                        <span>歷年職缺統計</span>
                    </a>
                </li>
                <!--
                <li class="sidebar-submenu">
                    <a href="chart-apex.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component' ></i>
                        <span>Components</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="chart-apex.html">
                                Apex Charts
                            </a>
                        </li>

                    </ul>
                </li>
-->
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
		<?php endif ?>

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
                工作能力圖表
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
                    </button>-->
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
-->
            <!--                </div>-->
            <!--            </div>-->
            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
            </div> -->

            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="./images/profile_1.png" width="70" height="70"
                            alt="Header Avatar" >
                        <span class="pulse-css"></span>
                        <span class="info d-xl-inline-block  color-span">
                            <span class="d-block fs-20 font-w600">Randy Riley</span>
                            <span class="d-block mt-7" >randy.riley@gmail.com</span>
                        </span>
                            
                        <i class='bx bx-chevron-down'></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
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


        <div class="main-content dashboard">
            <div class="row">
                <div class="col-12" style="background-color:#ffffff;border-radius:10px">
                    <img src=" ./images/icon.png " style="display:block; margin:auto; ">
                    <!--
                    <div class="box card-box ">
                        <div class="icon-box bg-color-1 ">
                            <div class="icon bg-icon-1 ">
                                <i class="bx bxs-bell bx-tada bx-tada "></i>
                            </div>
                            <div class="content ">
                                <h5 class="title-box ">Notification</h5>
                                <p class="color-1 mb-0 pt-4 ">5 Unread notification</p>
                            </div>
                        </div>
                        <div class="icon-box bg-color-2 ">
                            <div class="icon bg-icon-2 ">
                                <i class='bx bxs-message-rounded'></i>
                            </div>
                            <div class="content click-c ">
                                <h5 class="title-box ">Message</h5>
                                <p class="color-2 mb-0 pt-4 ">5 Unread notification</p>
                            </div>
                            <div class="notification-list card ">
                                <div class="top box-header ">
                                    <h5>Notification</h5>

                                </div>
                                <div class="pd-1r ">
                                    <div class="divider "></div>
                                </div>

                                <div class="box-body ">
                                    <ul class="list ">
                                        <li class="d-flex no-seen ">
                                            <div class="img-mess "><img class="mr-14 " src="./images/avatar/avt-1.png " alt="avt "></div>
                                            <div class="info ">
                                                <a href="# " class="font-w600 mb-0 color-primary ">Elizabeth Holland</a>
                                                <p class="pb-0 mb-0 line-h14 mt-6 ">Proin ac quam et lectus vestibulum</p>
                                            </div>
                                        </li>

                                        <li class="d-flex ">
                                            <div class="img-mess "><img class="mr-14 " src="./images/avatar/avt-1.png " alt="avt "></div>
                                            <div class="info ">
                                                <a href="# " class="font-w600 mb-0 color-primary ">Elizabeth Holland</a>
                                                <p class="pb-0 mb-0 line-h14 mt-6 ">Proin ac quam et lectus vestibulum</p>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="btn-view ">
                                        <a class="font-w600 h5 " href="message.html ">View All</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="icon-box bg-color-3 ">
                            <a class="create d-flex " href="calendar.html ">
                                <div class="icon bg-icon-3 ">
                                    <i class="bx bx-calendar "></i>
                                </div>
                                <div class="content ">
                                    <h5 class="title-box ">Calendar</h5>
                                    <p class="color-3 mb-0 pt-4 ">5 Unread notification</p>
                                </div>
                            </a>
                        </div>
                        <div class="icon-box bg-color-4 ">
                            <a class="create d-flex " href="# " data-toggle="modal " data-target="#add_project ">
                                <div class="icon bg-white ">
                                    <i class="bx bx-plus "></i>
                                </div>
                                <div class="content d-flex align-items-center ">
                                    <h5 class="color-white ">Create New Project</h5>
                                </div>
                            </a>
                        </div>
                    </div>
-->
                </div>

            </div>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center; ">
                            <table style="width: 70%;">
                                <tr>
                                    <td>
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="text-align:center;">
                                            <h3>職能心理測驗結果</h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div style="text-align:center;">
                                            <h2>您的測試結果為:RSI</h2>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="text-align:center;">
                                            <h4>您的適合的職業</h4>
                                            <h6>紡織工、編織工、農業學校教師、某些職業課程教師(諸如藝術、商業、技術、工藝課程)、雨衣上膠工</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="background-color:#dddddd;border-radius:10px;margin: auto;width:100%;"><canvas id="myChart" width="100%" height="40%"></canvas></div>
                                        <script>
                                            Chart.defaults.global.defaultFontColor = 'black';
                                            const ctx = document.getElementById('myChart');
                                            const myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: ['常規型', '現實型', '研究型', '管理型', '社會型', '藝術型'],
                                                    datasets: [{
                                                        label: '職能心理測驗結果',
                                                        data: [(5 / 10), (5 / 10), (4 / 10), (3 / 10), (5 / 10), (1 / 10)],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.5)',
                                                            'rgba(54, 162, 235, 0.5)',
                                                            'rgba(255, 206, 86, 0.5)',
                                                            'rgba(75, 192, 192, 0.5)',
                                                            'rgba(153, 102, 255, 0.5)',
                                                            'rgba(255, 159, 64, 0.5)'
                                                        ],
                                                        borderColor: [
                                                            'rgba(255, 99, 132, 1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)'
                                                        ],
                                                        borderWidth: 2
                                                    }]
                                                },
                                                options: {
                                                    scales: {

                                                        y: {
                                                            beginAtZero: true
                                                        },
                                                        yAxes: [{
                                                            ticks: {
                                                                suggestedMax: 1.0
                                                            }
                                                        }]
                                                    }
                                                }
                                            });
                                        </script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <hr>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex;justify-content: center;align-items: center; ">
                            <table style="width: 70%;">
                                <tr>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <hr>
                                        <div style="text-align:center;">
                                            <h3>推薦適合職缺</h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="w3-table w3-striped w3-white">
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/92293376/">行政事務專員(總管理處),芊愉國際有限公司, 台北市 中山區 民權東路</a></td>
                                                <td><i>月薪3w-3.2w</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/98782719/">台中豐原倉-電商行政人員-排休制~週六需輪班,品臻國際行銷有限公司,台中市 豐原區 祥和東路</a></td>
                                                <td><i>月薪2.8w-3.2w</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/98649891/">『台北營運總部』電商行政人員,葡萄王生技股份有限公司, 台北市 內湖區 金莊路</a></td>
                                                <td><i>月薪2.6w-2.8w</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/98649891/">電商行政人員,蘿菈衛浴有限公司, 新北市 土城區 中央路</a></td>
                                                <td><i>月薪2.8-?</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/92267513/">PHP 初階網頁工程師,顯赫資訊股份有限公司,新北市 中和區 中正路</a></td>
                                                <td><i>月薪3.5w-5w</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
                                                <td><a href="https://www.1111.com.tw/job/98747676/">【資訊】網頁工程師(JavaScript、CSS、AngularJS、JQuery、Boostrap),群益金鼎證券股份有限公司, 台北市 松山區 民生東路</a></td>
                                                <td><i>月薪3w-3.2w</i></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <hr>
                                        <div style="text-align:center;">
                                            <h3>政府開放課程</h3>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="text-align:center;">
                                            <h5>由於您選擇"軟體工程師"為感興趣的職業</h5><br>
                                            <h5>以下為推薦您可參與的課程:</h5>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="w3-table w3-striped w3-white">
                                            <tr>
                                                <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                                                <td><a href="#">網頁開發好簡單!!</a></td>
                                                <td><i>報名時間:04/23-5/22</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                                                <td><a href="#">前端工程師大解析</a></td>
                                                <td><i>報名時間:05/09-6/13</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                                                <td><a href="#">javascript開發大探索</a></td>
                                                <td><i>報名時間:05/14-6/22</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                                                <td><a href="#">C#職前大解密</a></td>
                                                <td><i>報名時間:05/11-6/24</i></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                                                <td><a href="#">前後端與資料庫實戰訓練班</a></td>
                                                <td><i>報名時間:05/17-6/30</i></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <hr>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 "></div>
    <div class="col-6 col-sm-12 ">
    </div>
    <div class="col-6 col-sm-12 ">
    </div>
    </div>


    <div id="add_project " class="modal custom-modal fade " role="dialog ">
        <div class="modal-dialog modal-dialog-centered modal-lg " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title ">Create Project</h5>
                    <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                <span aria-hidden="true ">&times;</span>
                            </button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="row ">
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Project Name</label>
                                    <input class="form-control " value=" " type="text ">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Client</label>
                                    <select class="select ">
                                                <option>Client 1</option>
                                                <option>Client 2</option>
                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Start Date</label>
                                    <div class="cal-icon ">
                                        <input class="form-control " type="date ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>End Date</label>
                                    <div class="cal-icon ">
                                        <input class="form-control " type="date ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-3 mb-0 ">
                                <div class="form-group ">
                                    <label>Rate</label>
                                    <input placeholder="$50 " class="form-control " value=" " type="text ">
                                </div>
                            </div>
                            <div class="col-sm-3 mb-0 ">
                                <div class="form-group ">
                                    <label>&nbsp;</label>
                                    <select class="select ">
                                                <option>Hourly</option>
                                                <option selected>Fixed</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Priority</label>
                                    <select class="select ">
                                                <option selected>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <textarea rows="4 " class="form-control " placeholder="Enter your message here "></textarea>
                        </div>
                        <div class="form-group ">
                            <label>Upload Files</label>
                            <input class="form-control " type="file ">
                        </div>
                        <div class="submit-section ">
                            <button class="btn btn-primary submit-btn ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal custom-modal fade " id="delete_project " role="dialog ">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-body ">
                    <div class="form-header ">
                        <h3>Delete Project</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action ">
                        <div class="row ">
                            <div class="col-6 mb-0 ">
                                <a href="javascript:void(0); " class="btn btn-primary continue-btn ">Delete</a>
                            </div>
                            <div class="col-6 mb-0 ">
                                <a href="javascript:void(0); " data-dismiss="modal " class="btn btn-primary cancel-btn ">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal custom-modal fade " id="edit_project " role="dialog ">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-body ">
                    <div class="form-header ">
                        <h5 class="modal-title ">Edit Project</h5>
                    </div>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="row ">
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Project Name</label>
                                    <input class="form-control " value="Gold App " type="text ">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-0 ">
                                <div class="form-group ">
                                    <label>Client</label>
                                    <select class="select ">
                                                <option>Client 1</option>
                                                <option>Client 2</option>
                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section ">
                            <button class="btn btn-primary submit-btn ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay "></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js "></script>
    <script src="./libs/moment/min/moment.min.js "></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="./libs/peity/jquery.peity.min.js "></script>
    <script src="./libs/chart.js/Chart.bundle.min.js "></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js "></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js "></script>
    <script src="./libs/apexcharts/apexcharts.js "></script>
    <script src="./libs/simplebar/simplebar.min.js "></script>

    <!-- APP JS -->
    <script src="./js/main.js "></script>
    <script src="./js/dashboard.js "></script>
    <script src="./js/shortcode.js "></script>
    <script src="./js/pages/dashboard.js "></script>


</body>

</html>