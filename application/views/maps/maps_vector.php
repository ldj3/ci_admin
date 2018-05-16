<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Vector Maps</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="public/css/style.css" rel="stylesheet" />
    <link href="public/css/style_responsive.css" rel="stylesheet" />
    <link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
    <link href="public/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="public/assets/uniform/css/uniform.default.css" />
    <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <script src="public/js/jquery-1.8.3.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.blockui.js"></script>
    <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
    <script src="public/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="public/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="public/js/scripts.js"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.setMapPage(true);
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
							Vector Maps
							<small>Interactive world, europe, usa and russia maps</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li>
                                <a href="#">Maps</a> <span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Vector Maps</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN WORLD PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>World</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="vmap_world" class="vmaps chart"></div>
								</div>
							</div>
							<!-- END WORLD PORTLET-->
						</div>
                        <div class="span6">
                            <!-- BEGIN EUROPE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Europe</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div id="vmap_europe" class="vmaps chart"></div>
                                </div>
                            </div>
                            <!-- END EUROPE PORTLET-->
                        </div>
					</div>
					<div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN USA PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>USA</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div id="vmap_usa" class="vmaps chart "></div>
                                </div>
                            </div>
                            <!-- END USA PORTLET-->
                        </div>

						<div class="span6">
							<!-- BEGIN RUSSIA PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Russia</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="vmap_russia" class="vmaps chart "></div>
								</div>
							</div>
							<!-- END RUSSIA PORTLET-->
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 			
		</div>
    