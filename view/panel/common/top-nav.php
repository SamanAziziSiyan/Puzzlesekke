<?php
$menu = [
    'panel' => 'پنل مدیریت',
    'profile' => 'مشاهده پروفایل'
];

?>
<div id="top-nav">
    <nav class="navbar navbar-default navbar-fixed-top custom-navbar-default ">
        <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
            <i class="icon-align-justify"></i>
        </a>
        <!-- LOGO SECTION -->
        <header class="navbar-header">

            <a href="index.php" class="navbar-brand">
                <img src="img/7l.png" alt="" height="30" />
                <span class="site-title"><?php echo $menu['panel']; ?></span>
            </a>
        </header>
        <!-- END LOGO SECTION -->
        <ul class="nav navbar-top-links navbar-left">
            <!-- MESSAGES SECTION -->

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="label label-success">1</span> <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages" style="padding: 0">

                    <li>
                        <a href="#">
                            <div>
                                <img class="img-circle" width="35" height="35" src="img/gravatar.png">
                                <span style="font-size: 12px">وحید صالحی</span>
                                <span class="pull-left text-muted" style="margin-top: 10px">
                                    <label class="label label-danger" style="font-size: 8px">مهم</label>
                                    <!--<label class="label label-info" style="font-size: 8px">1</label>-->
                            </div>
                            <div style="margin: 10px 0;font-size: 13px;color: #aea5a9">
                                <br />
                            </div>
                        </a>
                    </li>

                    <div class="alert alert-danger text-center" style="margin: 0!important;font-size: 13px">در حال حاضر تیکتی ثبت نکرده اید<br><br><a href="create_ticket.html">ارسال تیکت</a></div>

                </ul>
            </li>
            <!--END MESSAGES SECTION -->

            <!--TASK SECTION -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="label label-danger">5</span> <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> دوره آموزشی برنامه نویسی شی گرا </strong>
                                    <span class="pull-left text-muted">40% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% تکمیل شده</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>دوره آموزشی فتوشاپ </strong>
                                    <span class="pull-left text-muted">20% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% تکمیل شده</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> دوره آموزشی طراحی وب </strong>
                                    <span class="pull-left text-muted">60% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% پیشرفت</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> دوره آموزشی فریم ورک بوت استرپ ۴ </strong>
                                    <span class="pull-left text-muted">80% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">55% تکمیل شده </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong> دوره آموزشی Flex Box و CSS Grid</strong>
                                    <span class="pull-left text-muted">80% تکمیل شده</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% تکمیل شده </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <i class="icon-angle-left"></i>
                            <strong>مشاهده همه تسک ها</strong>
                        </a>
                    </li>
                </ul>

            </li>
            <!--END TASK SECTION -->

            <!--ALERTS SECTION -->

            <!-- END ALERTS SECTION -->

            <!--ADMIN SETTINGS SECTIONS -->

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                </a>

                <ul class="dropdown-menu dropdown-user">
                    <li><a href="../index.html"><i class="icon-circle-arrow-right"></i> بازگشت به سایت </a>
                    </li>
                    <li><a href="#"><i class="icon-user"></i> <?php echo $menu['profile']; ?> </a>
                    </li>
                    <li><a href="#"><i class="icon-gear"></i> تنظیمات </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="icon-signout"></i> خروج </a>
                    </li>
                </ul>

            </li>
            <!--END ADMIN SETTINGS -->
        </ul>

    </nav>

</div>