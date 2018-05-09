<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title> <?php echo $title; ?></title>
	<base href = "<?php echo $base_url;?>"/>
	<link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="public/css/style.css" rel="stylesheet" />
	<link href="public/css/style_responsive.css" rel="stylesheet" />
	<link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="public/assets/uniform/css/uniform.default.css" />
	<link href="public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="public/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-top">
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				    <img src="public/img/logo.png" alt="Admin Lab" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="public/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="public/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="public/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="public/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<li class="dropdown" id="header_notification_bar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">

							<i class="icon-bell-alt"></i>
							<span class="badge badge-warning">7</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>You have 7 new notifications</p>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Server #3 overloaded.
									<span class="small italic">34 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-warning"><i class="icon-bell"></i></span>
									Server #10 not respoding.
									<span class="small italic">1 Hours</span>
									</a>
								</li>
                                <li>
                                    <a href="#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-bullhorn"></i></span>
									Application error.
									<span class="small italic">10 mins</span>
									</a>
								</li>
								<li>
									<a href="#">See all notifications</a>
								</li>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->

					</ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="public/img/avatar1_small.jpg" alt="">
                                <span class="username">Mosaddek Hossain</span>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
								<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
								<li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $site_url ?>/login/log_out"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
    </div>
    <div id="footer">
		2013 &copy; Admin Lab Dashboard. 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
    </div>
</body>
    <script src="public/js/jquery-1.8.3.min.js"></script>
	<script src="public/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="public/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="public/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.blockui.js"></script>
	<script src="public/js/jquery.cookie.js"></script>
	<script src="public/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="public/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="public/assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="public/assets/flot/jquery.flot.js"></script>
	<script src="public/assets/flot/jquery.flot.resize.js"></script>
    <script src="public/assets/flot/jquery.flot.pie.js"></script>
    <script src="public/assets/flot/jquery.flot.stack.js"></script>
    <script src="public/assets/flot/jquery.flot.crosshair.js"></script>
	<script src="public/js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
	<script src="public/js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.setMainPage(true);
			App.init();
		});
    </script>
    </html>