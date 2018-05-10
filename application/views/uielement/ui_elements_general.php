<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
    <title>General</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="stylesheet" type="text/css" href="public/assets/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="public/assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="public/assets/fancybox/source/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/jslider/css/jslider.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/jslider/css/jslider.blue.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/jslider/css/jslider.plastic.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/jslider/css/jslider.round.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/jslider/css/jslider.round.plastic.css" />
    <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/jquery.blockui.js"></script>
	<script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="public/assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="public/js/jquery.pulsate.min.js"></script>
	<script type="text/javascript" src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/jshashtable-2.1_src.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/jquery.numberformatter-1.2.3.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/tmpl.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/jquery.dependClass-0.1.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/draggable-0.1.js"></script>
    <script type="text/javascript" src="public/assets/jslider/js/jquery.slider.js"></script>
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
							General
							<small>sliders, alerts, notifications and more</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li>
                                <a href="#">UI Elements</a> <span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="#">General</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
                    <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN SLIDER-->
                        <div class="widget">
                            <div class="widget-title">
                                <h4><i class="icon-plane"></i>Sliders</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                            </div>
                            <div class="widget-body">

                                <div class="form_inputs slider clearfix">
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <label class="control-label">Simple slider:</label>
                                        </div>

                                        <div class="span9">
                                            <input id="Slider1" type="slider" name="price" value="20" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form_inputs slider clearfix">
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <label class="control-label">Range slider:</label>
                                        </div>

                                        <div class="span9">
                                            <input id="Slider2" type="slider" name="price" value="10000;50000" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form_inputs slider clearfix">
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <label class="control-label">With scale:</label>
                                        </div>

                                        <div class="span9">
                                            <input id="Slider3" type="slider" name="area" value="2;10" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form_inputs slider clearfix">
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <label class="control-label">Time calculation:</label>
                                        </div>

                                        <div class="span9">
                                            <input id="Slider4" type="slider" name="area" value="600;720" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SLIDER-->
                    </div>
                </div>
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN ALERTS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Alerts</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
								</div>
								<div class="widget-body">
									<div class="alert">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Your monthly traffic is reaching limit.
									</div>
									<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Success!</strong> The page has been added.
									</div>
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Info!</strong> You have 198 unread messages.
									</div>
									<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Error!</strong> The daily cronjob has failed.
									</div>
								</div>
							</div>
							<!-- END ALERTS PORTLET-->

						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Inline Notifications</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <div class="alert alert-block alert-warning fade in">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h4 class="alert-heading">Warning!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                    </div>
									<div class="alert alert-block alert-success fade in">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h4 class="alert-heading">Success!</h4>
										<p>
											Duis mollis, est non commodo luctus, 
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
									</div>
									<div class="alert alert-block alert-info fade in">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h4 class="alert-heading">Info!</h4>
										<p>
											Duis mollis, est non commodo luctus, 
											nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										</p>
									</div>
                                    <div class="alert alert-block alert-error fade in">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h4 class="alert-heading">Error!</h4>
                                        <p>
                                            Duis mollis, est non commodo luctus,
                                            nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                        </p>
                                    </div>
								</div>
							</div>
							<!-- END INLINE NOTIFICATIONS PORTLET-->

                            <!-- BEGIN LABELS AND BADGES PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Labels and Badges</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Badges</th>
                                            <th>Labels</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Default
                                            </td>
                                            <td>
                                                <span class="badge">1</span>
                                            </td>
                                            <td>
                                                <span class="label">Default</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Success
                                            </td>
                                            <td>
                                                <span class="badge badge-success">2</span>
                                            </td>
                                            <td>
                                                <span class="label label-success">Success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Warning
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">4</span>
                                            </td>
                                            <td>
                                                <span class="label label-warning">Warning</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Important
                                            </td>
                                            <td>
                                                <span class="badge badge-important">6</span>
                                            </td>
                                            <td>
                                                <span class="label label-important">Important</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Info
                                            </td>
                                            <td>
                                                <span class="badge badge-info">8</span>
                                            </td>
                                            <td>
                                                <span class="label label-info">Info</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Inverse
                                            </td>
                                            <td>
                                                <span class="badge badge-inverse">10</span>
                                            </td>
                                            <td>
                                                <span class="label label-inverse">Inverse</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END LABELS AND BADGES PORTLET-->
						</div>
						<div class="span6">
                            <!-- BEGIN TOOLTIPS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>tooltips</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <p>
                                        Tight pants next level keffiyeh
                                        <a href="#" class="tooltips" data-original-title="Default tooltips">you probably</a> haven't heard of them.
                                        Photo booth beard raw denim letterpress vegan messenger bag stumptown.
                                        <a href="#" class="tooltips" data-original-title="Another tooltips">have a</a>
                                        terry richardson vinyl chambray.
                                        <a href="#" class="tooltips" data-original-title="The last tip!">twitter handle</a>
                                        freegan cred raw denim single-origin coffee viral.
                                    </p>
                                    <p class="">
                                        <button class="btn tooltips"  data-placement="top" data-original-title="tooltips in top">Top</button>
                                        <button class="btn tooltips"  data-placement="left" data-original-title="tooltips in left">Left</button>
                                        <button class="btn tooltips"  data-placement="right" data-original-title="tooltips in right">Right</button>
                                        <button class="btn tooltips"  data-placement="bottom" data-original-title="tooltips in bottom">Bottom</button>
                                    </p>
                                </div>
                            </div>
                            <!-- END TOOLTIPS PORTLET-->
                            <!-- BEGIN POPOVERS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>popovers</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                                </div>
                                <div class="widget-body">
                                    <p>
                                        Tight pants next level keffiyeh
                                        <a href="javascript:;" class="popovers" data-placement="left" data-content="popovers body goes here! popovers body goes here!" data-original-title="Default popovers">trigger me on click</a> haven't heard of them.
                                        Photo booth beard raw denim letterpress vegan messenger bag stumptown. loem ipsum dolor
                                        <a href="javascript:;" class="popovers" data-placement="top" data-trigger="hover" data-content="popovers body goes here! popovers body goes here!" data-original-title="Another popovers">trigger me on hover</a>
                                        terry richardson vinyl chambray. Beard stumptown. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa.
                                    </p>
                                    <p class="">
                                        <button class="btn popovers"   data-trigger="hover" data-placement="top" data-content="popovers body goes here! popovers body goes here!" data-original-title="popovers in top">Top</button>
                                        <button class="btn popovers"  data-trigger="hover" data-placement="left" data-content="popovers body goes here! popovers body goes here!" data-original-title="popovers in left">Left</button>
                                        <button class="btn popovers"  data-trigger="hover" data-placement="right" data-content="popovers body goes here! popovers body goes here!" data-original-title="popovers in right">Right</button>
                                        <button class="btn popovers" data-trigger="hover" data-placement="bottom" data-content="popovers body goes here! popovers body goes here!" data-original-title="popovers in bottom">Bottom</button>
                                    </p>
                                </div>
                            </div>
                            <!-- END POPOVERS PORTLET-->
                            <!-- BEGIN MODAL DIALOG PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Modal Dialogs</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body ">
                                    <h5>Click on below buttons to check it out.</h5>
                                    <!-- Button to trigger modal -->
                                    <a href="#myModal1" role="button" class="btn btn-primary" data-toggle="modal">Dialog</a>
                                    <a href="#myModal3" role="button" class="btn btn-warning" data-toggle="modal">Confirm</a>
                                    <a href="#myModal4" role="button" class="btn btn-success" data-toggle="modal">Success</a>
                                    <a href="#myModal2" role="button" class="btn btn-danger" data-toggle="modal">Alert</a>
                                    <!-- Modal -->
                                    <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel1">Modal Header</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Body goes here...</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel2">Alert Header</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Body goes here...</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-primary">OK</button>
                                        </div>
                                    </div>
                                    <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel3">Confirm Header</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Body goes here...</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <button data-dismiss="modal" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                    <div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel4">Success Header</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Body goes here...</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <button data-dismiss="modal" class="btn btn-success">Success</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL DIALOG PORTLET-->
							<!-- BEGIN PAGINATION PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Pagination</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div class="pagination pagination-large">
										<ul>
											<li><a href="#">«</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li class="hidden-phone"><a href="#">4</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									<div class="pagination">
										<ul>
											<li><a href="#">«</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									<div class="pagination pagination-small">
										<ul>
											<li><a href="#">«</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
									<div class="pagination pagination-mini">
										<ul>
											<li><a href="#">«</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
                                    <div class="pagination pagination-mini pagination-centered">
                                        <ul>
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                    <div class="pagination pagination-mini pagination-right">
                                        <ul>
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
							<!-- END PAGINATION PORTLET-->

						</div>
					</div>

                    <div class="row-fluid">
                        <div class="span7">
                            <!-- BEGIN GRITTER NOTIFICATIONS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Gritter Notifications</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body ">
                                    <h5>Click on below buttons to check it out.</h5>
                                    <a href="javascript:;" class="btn " id="gritter-regular">Regular</a>
                                    <a href="javascript:;" class="btn btn-success" id="gritter-sticky">Sticky</a>
                                    <a href="javascript:;" class="btn btn-info" id="gritter-without-image">Imageless</a>
                                    <div class="space10 visible-phone visible-tablet"></div>
                                    <a href="javascript:;" class="btn btn-warning" id="gritter-light">Light</a>
                                    <a href="javascript:;" class="btn btn-success" id="gritter-max">Max of 3</a>
                                    <a href="#" class="btn btn-info" id="gritter-remove-all">Remove all</a>
                                </div>
                            </div>
                            <!-- END GRITTER NOTIFICATIONS PORTLET-->
                        </div>
                        <div class="span5">
                            <!-- BEGIN PULSATE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Pulsate</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body ">
                                    <h5>Click on below buttons to check it out.</h5>
                                    <a href="javascript:;" class="btn btn-success" id="pulsate-once">Pulsate once</a>
                                    <a href="javascript:;" class="btn btn-info" id="pulsate-hover">Pulsate hover</a>
                                    <div class="space10 visible-phone visible-tablet"></div>
                                    <a href="javascript:;" class="btn btn-danger" id="pulsate-crazy">Crazy pulsate :)</a>
                                </div>
                            </div>
                            <!-- END PULSATE PORTLET-->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- BEGIN PROGRESS BARS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Basic Progress Bars</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="progress">
                                        <div style="width: 20%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-success">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-warning">
                                        <div style="width: 60%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-danger">
                                        <div style="width: 80%;" class="bar"></div>
                                    </div>
                                    <h4>Stacked</h4>
                                    <div class="progress">
                                        <div class="bar bar-success" style="width: 25%;"></div>
                                        <div class="bar bar-warning" style="width: 30%;"></div>
                                        <div class="bar bar-danger" style="width: 15%;"></div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="bar bar-success" style="width: 25%;"></div>
                                        <div class="bar bar-warning" style="width: 30%;"></div>
                                        <div class="bar bar-danger" style="width: 15%;"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar bar-success" style="width: 25%;"></div>
                                        <div class="bar bar-warning" style="width: 30%;"></div>
                                        <div class="bar bar-danger" style="width: 15%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROGRESS BARS PORTLET-->
                            <!-- BEGIN PROGRESS BARS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Animated Progress Bars</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="progress progress-striped active">
                                        <div style="width: 20%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-success active">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-warning active">
                                        <div style="width: 60%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-danger active">
                                        <div style="width: 80%;" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Modal Dialogs PORTLET-->
                        </div>
                        <div class="span6">
                            <!-- BEGIN PROGRESS BARS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Striped Progress Bars</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="progress progress-striped">
                                        <div style="width: 20%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-success">
                                        <div style="width: 40%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-warning">
                                        <div style="width: 60%;" class="bar"></div>
                                    </div>
                                    <div class="progress progress-striped progress-danger">
                                        <div style="width: 80%;" class="bar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROGRESS BARS PORTLET-->
                            <!-- BEGIN PRELOADER-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-magic"></i>Preloader</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="nav nav-pills list_items">
                                        <li><img src="public/assets/pre-loader/Whirlpool.gif" alt="Whirlpool"></li>
                                        <li><img src="public/assets/pre-loader/Broken ring.gif" alt="Broken ring"></li>
                                        <li><img src="public/assets/pre-loader/Storm.gif" alt="Storm"></li>
                                        <li><img src="public/assets/pre-loader/Twirl.gif" alt="Twirl"></li>
                                        <li><img src="public/assets/pre-loader/Snow with rain.gif" alt="Snow with rain"></li>
                                        <li><img src="public/assets/pre-loader/Atom.gif" alt="Atom"></li>
                                        <li><img src="public/assets/pre-loader/Nuclear alert.gif" alt="Nuclear alert"></li>
                                        <li><img src="public/assets/pre-loader/Radar.gif" alt="Radar"></li>
                                        <li><img src="public/assets/pre-loader/Kaleidoscope.gif" alt="Kaleidoscope"></li>
                                        <li><img src="public/assets/pre-loader/Spinning spiral.gif" alt="Spinning spiral"></li>
                                        <li><img src="public/assets/pre-loader/3D snake.gif" alt="3D snake"></li>
                                        <li><img src="public/assets/pre-loader/Surrounded segments.gif" alt="Surrounded segments"></li>
                                        <li><img src="public/assets/pre-loader/Pie chart.gif" alt="Pie chart"></li>
                                        <li><img src="public/assets/pre-loader/Searching.gif" alt="Searching"></li>
                                        <li><img src="public/assets/pre-loader/Water ripples.gif" alt="Water ripples"></li>
                                        <li><img src="public/assets/pre-loader/Drawing flower.gif" alt="Drawing flower"></li>
                                        <li><img src="public/assets/pre-loader/Spider web.gif" alt="Spider web"></li>
                                        <li><img src="public/assets/pre-loader/Sun.gif" alt="Sun"></li>
                                        <li><img src="public/assets/pre-loader/Rounded blocks.gif" alt="Rounded blocks"></li>
                                        <li><img src="public/assets/pre-loader/Thin fading line.gif" alt="Thin fading line"></li>
                                        <li><img src="public/assets/pre-loader/Snakes chasing.gif" alt="Snakes chasing"></li>
                                        <li><img src="public/assets/pre-loader/Thin broken ring.gif" alt="Thin broken ring"></li>
                                        <li><img src="public/assets/pre-loader/Triangles indicator.gif" alt="Triangles indicator"></li>
                                        <li><img src="public/assets/pre-loader/Snake.gif" alt="Snake"></li>
                                        <li><img src="public/assets/pre-loader/Fading squares.gif" alt="Fading squares"></li>
                                        <li><img src="public/assets/pre-loader/Spinning line.gif" alt="Spinning line"></li>
                                        <li><img src="public/assets/pre-loader/Velocity.gif" alt="Velocity"></li>
                                        <li><img src="public/assets/pre-loader/Ovals in circle.gif" alt="Ovals in circle"></li>
                                        <li><img src="public/assets/pre-loader/Rounded stripes.gif" alt="Rounded stripes"></li>
                                        <li><img src="public/assets/pre-loader/Search with arrow.gif" alt="Search with arrow"></li>
                                        <li><img src="public/assets/pre-loader/Ventilator.gif" alt="Ventilator"></li>
                                        <li><img src="public/assets/pre-loader/preview.gif" alt="preview"></li>
                                        <li><img src="public/assets/pre-loader/Clock with hands.gif" alt="Clock with hands"></li>
                                        <li><img src="public/assets/pre-loader/preview2.gif" alt="preview2"></li>
                                        <li><img src="public/assets/pre-loader/3D coffee cup.gif" alt="3D coffee cup"></li>
                                        <li><img src="public/assets/pre-loader/Hourglass.gif" alt="Hourglass"></li>
                                        <li><img src="public/assets/pre-loader/Tree on wind.gif" alt="Tree on wind"></li>
                                        <li><img src="public/assets/pre-loader/preview3.gif" alt="preview3"></li>
                                        <li><img src="public/assets/pre-loader/Bouncing ball.gif" alt="Bouncing ball"></li>
                                        <li><img src="public/assets/pre-loader/Linear star.gif" alt="Linear star"></li>
                                        <li><img src="public/assets/pre-loader/Fancy pants.gif" alt="Fancy pants"></li>
                                        <li><img src="public/assets/pre-loader/Drink in glass.gif" alt="Drink in glass"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END PRELOADER-->
                        </div>
                    </div>


				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->			
		</div>
    
	