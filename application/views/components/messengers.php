<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Conversation</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="public/css/style.css" rel="stylesheet" />
	<link href="public/css/style_responsive.css" rel="stylesheet" />
	<link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="public/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <script src="public/js/jquery-1.8.2.min.js"></script>
	<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.blockui.js"></script>
	<script src="public/assets/flot/jquery.flot.js"></script>
	<script src="public/assets/flot/jquery.flot.resize.js"></script>
	<script src="public/assets/flot/jquery.flot.pie.js"></script>
	<script src="public/assets/flot/jquery.flot.stack.js"></script>
	<script src="public/assets/flot/jquery.flot.crosshair.js"></script>
	<script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
	<script src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="public/js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.init();
		});
	</script>
</head>
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->	    
				<div class="row-fluid">
					<div class="span12">
                        <!-- BEGIN THEME CUSTOMIZER-->
                        <div id="theme-change" class="hidden-phone">
                            <i class="icon-cogs"></i>
                            <span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
                            </span>
                        </div>
                        <!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->				    			
						<h3 class="page-title">
							Conversations
							<small>Interactive  conversations</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Components</a><span class="divider">&nbsp;</span></li>
                            <li><a href="#">Conversations</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN CHAT PORTLET-->
                            <div class="widget" id="">
                                <div class="widget-title">
                                    <h4><i class="icon-comments-alt"></i> Conversation 1</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="timeline-messages">
                                        <!-- Comment -->
                                        <div class="msg-time-chat">
                                            <a href="#" class="message-img"><img class="avatar" src="img/avatar1.jpg" alt=""></a>
                                            <div class="message-body msg-in">
                                                <div class="text">
                                                    <p class="attribution"><a href="#">Mosaddek Hossain</a> at 1:55pm, 13th April 2013</p>
                                                    <p>Hello, How are you brother?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /comment -->

                                        <!-- Comment -->
                                        <div class="msg-time-chat">
                                            <a href="#" class="message-img"><img class="avatar" src="img/avatar2.jpg" alt=""></a>
                                            <div class="message-body msg-out">
                                                <div class="text">
                                                    <p class="attribution"> <a href="#">Dulal Khan</a> at 2:01pm, 13th April 2013</p>
                                                    <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /comment -->

                                        <!-- Comment -->
                                        <div class="msg-time-chat">
                                            <a href="#" class="message-img"><img class="avatar" src="img/avatar1.jpg" alt=""></a>
                                            <div class="message-body msg-in">
                                                <div class="text">
                                                    <p class="attribution"><a href="#">Mosaddek Hossain</a> at 2:03pm, 13th April 2013</p>
                                                    <p>Yeah I'm fine too. Everything is going fine here.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /comment -->

                                        <!-- Comment -->
                                        <div class="msg-time-chat">
                                            <a href="#" class="message-img"><img class="avatar" src="img/avatar2.jpg" alt=""></a>
                                            <div class="message-body msg-out">
                                                <div class="text">
                                                    <p class="attribution"><a href="#">Dulal Khan</a> at 2:05pm, 13th April 2013</p>
                                                    <p>well good to know that. anyway how much time you need to done your task?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /comment -->
                                    </div>
                                    <div class="chat-form">
                                        <div class="input-cont">
                                            <input type="text" placeholder="Type a message here...">
                                        </div>
                                        <div class="btn-cont">
                                            <a class="btn btn-primary" href="javascript:;">Send</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END CHAT PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN CHAT PORTLET-->
                            <div class="widget" id="chats">
                                <div class="widget-title">
                                    <h4><i class="icon-comments-alt"></i> Conversation 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="chats">
                                        <li class="in">
                                            <img class="avatar" alt="" src="img/avatar1.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Mosaddek</a>
                                                <span class="datetime">at Apr 14, 2013 3:23</span>
													<span class="body">
													    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. dolore magna aliquam erat volutpat. dolore magna aliquam erat volutpat.
													</span>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <img class="avatar" alt="" src="img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Dulal Khan</a>
                                                <span class="datetime">at Apr 14, 2013 3:29</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <img class="avatar" alt="" src="img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Munshi Kamal</a>
                                                <span class="datetime">at Apr 14, 2013 3:31</span>
													<span class="body">
													    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.													</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-form">
                                        <div class="input-cont">
                                            <input type="text" placeholder="Type a message here..." />
                                        </div>
                                        <div class="btn-cont">
                                            <a href="javascript:;" class="btn btn-primary">Send</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHAT PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN CHAT PORTLET-->
                            <div class="widget" id="">
                                <div class="widget-title">
                                    <h4><i class="icon-comments-alt"></i> Conversation 3</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="chats normal-chat">
                                            <li class="in">
                                                <img class="avatar" alt="" src="img/avatar1.jpg" />
                                                <div class="message ">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Mosaddek</a>
                                                    <span class="datetime">at Apr 14, 2013 3:23</span>
													<span class="body">
													    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. dolore magna aliquam erat volutpat. dolore magna aliquam erat volutpat.
													</span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar" alt="" src="img/avatar2.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Dulal Khan</a>
                                                    <span class="datetime">at Apr 14, 2013 3:29</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar" alt="" src="img/avatar3.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span>
                                                    <a href="#" class="name">Munshi Kamal</a>
                                                    <span class="datetime">at Apr 14, 2013 3:31</span>
													<span class="body">
													    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.													</span>
                                                </div>
                                            </li>
                                        </ul>
                                    <div class="chat-form">
                                        <div class="input-cont">
                                            <input type="text" placeholder="Type a message here..." />
                                        </div>
                                        <div class="btn-cont">
                                            <a href="javascript:;" class="btn btn-primary">Send</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHAT PORTLET-->
                        </div>
                    </div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- BEGIN PAGE CONTAINER-->		
		</div>