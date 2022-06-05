<?php include('server.php') ?>
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

    <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand counter-scroll">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="./images/logo_FS.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
            <li>
                <span>登</span>
            </li>
            <li>
                <span>入</span>
            </li>
            <li>
                <span>後</span>
            </li>
            <li>
                <span>開</span>
            </li>
            <li>
                <span>放</span>
            </li>
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
                登入
            </div>
        </div>   
    </div>
    <!-- End Main Header -->

    <!-- MAIN CONTENT -->
    <div class="main">

        <div class="main-content">
            <section class="login">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header d-flex justify-content-between">
                                <a href="index2.php">
                                    <img src="./images/logo_FS.png" alt="">
                                </a>
								<?php  if (isset($_SESSION['username'])) : ?>
								<div class="action-reg">
                                    <h4 class="fs-30">登入</h4>
                                    <a href="new-account.html">登錄到您的帳戶</a>
                                </div>
								<?php endif ?>
								<?php  if (isset($_SESSION['username'])) : ?>
								<p>歡迎 <strong><?php echo $_SESSION['username']; ?></strong></p>
								<p> <a href="index.php?logout='1'" style="color: red;">登出</a> </p>
								<?php endif ?>
                                <?php
                                    if (isset($_SESSION['username'])){
                                        header("Refresh:0;url=index2.php");
                                    }
                                ?>
                                

                            </div>
                            <div class="line"></div>
                            <div class="box-body">
                                <div class="auth-content my-auto" >
								<form method="post" action="user-login.php">							
											<?php include('errors.php'); ?>
											<?php  if (!isset($_SESSION['username'])) : ?>
											<div class="input-group">
												<label>你的信箱(Username)</label>																																		
											</div>
											<?php
												echo '<br>';
											?>
											<div class="input-group">
												<input type="text" class="form-control" id="username" placeholder="Your text" name="username" >
											</div>
											<?php
												echo '<br>';
											?>
											<div class="input-group">
												<label>密碼(Password)</label>
											</div>
											<?php
												echo '<br>';
											?>
											<div class="input-group">
												<input type="text" class="form-control" id="username" placeholder="Enter Password" name="password" >
											</div>
											<?php
												echo '<br>';
											?>
											<div class="input-group">
												<button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit" name="login_user">登入</button>
											</div>
											<p>
												還不是會員嗎? <a href="register.php">註冊帳號</a>
											</p>
											<?php endif ?>
                                            <?php  if (isset($_SESSION['username'])) : ?>
								            <h1>1秒後轉跳到開始介面</h1>
								            <?php endif ?>
								</form>
								<?php  if (!isset($_SESSION['username'])) : ?>
                                    <div class="mt-20 pt-2 text-center">
                                        <div class="signin-other-title">
                                            <a href="#" class="text-muted fs-14">忘記密碼?</a>
                                        </div>

                                    </div>

                                    <div class="mt-37 text-center" action="user-login.php">
                                        <p class="text-muted mb-0 fs-14">沒有帳號 ? <a href="register.php" class="text-primary fw-semibold"> 建立新帳號</a> </p>
                                    </div>
									<?php endif ?>
                                    <div class="mt-37 text-center">

                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-facebook-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-linkedin-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-google-plus'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/countto.js"></script>
    <script src="./libs/date-picker/datepicker.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>
    <script src="./libs/password/pass-addon.init.js"></script>


    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>

    <script>
    </script>
</body>

</html>