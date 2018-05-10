<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Visual Charts</title>
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
							Visual Charts
							<small>Basic, tracking, real time charts and graphs</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Charts & Graphs</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
                    <div class="span12">
                        <!-- BEGIN TRACKING CURVES PORTLET-->
                        <div class="widget">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i>Statistics</h4>
							<span class="tools">
							<a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
							</span>
                            </div>
                            <div class="widget-body">
                                <div id="chart_3" class="chart"></div>
                            </div>
                        </div>
                        <!-- END TRACKING CURVES PORTLET-->
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN BASIC CHART PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Basic Chart</h4>
							<span class="tools">
							<a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
							</span>
                                </div>
                                <div class="widget-body">
                                    <div id="chart_1" class="chart"></div>
                                </div>
                            </div>
                            <!-- END BASIC CHART PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN INTERACTIVE CHART PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Interactive Chart</h4>
							<span class="tools">
							<a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
							</span>
                                </div>
                                <div class="widget-body">
                                    <div id="chart_2" class="chart"></div>
                                </div>
                            </div>
                            <!-- END INTERACTIVE CHART PORTLET-->
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN DYNAMIC CHART PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Real Time Chart</h4>
                                    <span class="tools">
                                    <a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <div class="btn-toolbar no-bottom-space clearfix" style="height: 50px">
                                        <div data-toggle="buttons-radio" class="btn-group">
                                            <button class="btn btn-mini">Web</button><button class="btn btn-mini">Database</button><button class="btn btn-mini">Static</button>
                                        </div>
                                    </div>
                                    <div id="chart_4" class="chart"></div>
                                    <div class="btn-toolbar no-bottom-space clearfix">
                                        <div data-toggle="buttons-radio" class="btn-group pull-right">
                                            <button class="btn btn-mini active">Asia</button><button class="btn btn-mini">
                                                <span class="visible-phone">Eur</span>
                                                <span class="hidden-phone">Europe</span>
                                            </button>
                                            <button class="btn btn-mini">USA</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END DYNAMIC CHART PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN Bar Chat PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Bar Chat</h4>
							<span class="tools">
							<a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
							</span>
                                </div>
                                <div class="widget-body">
                                    <div id="chart_5" style="height:350px;"></div>
                                    <div class="btn-toolbar">
                                        <div class="btn-group stackControls">
                                            <input type="button" class="btn btn-info" value="With stacking" />
                                            <input type="button" class="btn btn-danger" value="Without stacking" />
                                        </div>
                                        <div class="space5"></div>
                                        <div class="btn-group graphControls">
                                            <input type="button" class="btn" value="Bars" />
                                            <input type="button" class="btn" value="Lines" />
                                            <input type="button" class="btn" value="Lines with steps" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Bar Chat PORTLET-->
                        </div>
                    </div>


					<!-- BEGIN PIE CHART PORTLET-->
					<div class="row-fluid">
						<div class="span6">
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Pie Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="graph_1" class="chart"></div>
								</div>
							</div>
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Pie Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="graph_2" class="chart"></div>
								</div>
							</div>
						</div>
						<div class="span6">
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Interactive Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="graph_3" class="chart"></div>
								</div>
							</div>
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Donut Chart</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div id="graph_4" class="chart"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PIE CHART PORTLET-->
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- BEGIN PAGE CONTAINER-->		
		</div>
	