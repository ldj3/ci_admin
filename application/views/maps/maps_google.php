<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Google Maps</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="public/css/style.css" rel="stylesheet" />
	<link href="public/css/style_responsive.css" rel="stylesheet" />
	<link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" href="public/assets/uniform/css/uniform.default.css" />
    <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <script src="public/js/jquery-1.8.3.min.js"></script>
	<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.blockui.js"></script>
	<script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
	<script src="public/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>	
	<script type="text/javascript" src=""></script>
	<script src="public/js/scripts.js"></script>
	<script src="public/js/gmaps.js"></script>
	<script src="public/js/demo.gmaps.js"></script>
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.init();
			DemoGMaps.init();
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
							Google Maps
							<small>interactive google map samples</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li>
                                <a href="#">Maps</a> <span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Google Maps</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN BASIC PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Basic</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="gmap_basic" class="gmaps"></div>
								</div>
							</div>
							<!-- END BASIC PORTLET-->
						</div>
						<div class="span6">
							<!-- BEGIN MARKERS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Markers</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="gmap_marker" class="gmaps"></div>
								</div>
							</div>
							<!-- END MARKERS PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN GEOLOCATION PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Geolocation</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div class="label label-important visible-ie8">Not supported in Internet Explorer 8</div>
									<div id="gmap_geo" class="gmaps"></div>
								</div>
							</div>
							<!-- END GEOLOCATION PORTLET-->
						</div>
						<div class="span6">
							<!-- BEGIN POLYLINES PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Polylines</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div id="gmap_polylines" class="gmaps"></div>
								</div>
							</div>
							<!-- END POLYLINES PORTLET-->
						</div>
					</div>

                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN GEOCODING PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Geocoding</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <form class="form-inline" action="#">
                                        <input type="text" id="gmap_geocoding_address" class="input-medium" placeholder="Address..." />
                                        <input type="button" id="gmap_geocoding_btn" class="btn" value="Search" />
                                    </form>
                                    <div id="gmap_geocoding" class="gmaps">
                                    </div>
                                </div>
                            </div>
                            <!-- END GEOCODING PORTLET-->
                        </div>
                    </div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 			
		</div>
	