<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Grids</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="public/css/style.css" rel="stylesheet" />
	<link href="public/css/style_responsive.css" rel="stylesheet" />
	<link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="public/assets/uniform/css/uniform.default.css"  rel="stylesheet" type="text/css" />
    <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="public/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>	
	<script type="text/javascript" src="public/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>				
	<script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/jquery.blockui.js"></script>
	<script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="public/js/scripts.js"></script>
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
							Grids
							<small>grids system</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">Grids</a><span class="divider-last">&nbsp;</span></li>
                        </ul>

						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 12</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span12" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
					<div class="row-fluid">
						<div class="span10">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid 10</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <code> class="span10" </code>
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span2">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <code> class="span2" </code>
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span8">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid 8</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <code> class="span8" </code>
								</div>
							</div>
							<!-- END GRID PORTLET-->
						</div>
						<div class="span4">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid 4</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <code> class="span4" </code>
								</div>
							</div>
						</div>
					</div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 6</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span6" </code>
                                </div>
                            </div>
                            <!-- END GRID PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 6</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span6" </code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 4</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span4" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span4">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 4</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span4" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span4">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 4</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span4" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                        <div class="span2">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span2" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
					<div class="row-fluid">
						<div class="span10 offset2">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid 10 offset 2</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
                                <div class="widget-body">
                                    <code> class="span10 offset2" </code>
                                </div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
                    <div class="row-fluid">
                        <div class="span8 offset4">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 8 offset 4</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span8 offset4" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 offset6">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 6 offset 6</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span6 offset6" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4 offset8">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 4 offset 8</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <code> class="span4 offset8" </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span2 offset10">
                            <!-- BEGIN GRID SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Grid 10 offset 2</h4>
                                </div>
                                <div class="widget-body">
                                    <code> span10 offset2 </code>
                                </div>
                            </div>
                            <!-- END GRID SAMPLE PORTLET-->
                        </div>
                    </div>

					<!--END:BODY-->
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->	
		</div>