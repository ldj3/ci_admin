<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Calendar</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="public/css/style.css" rel="stylesheet" />
   <link href="public/css/style_responsive.css" rel="stylesheet" />
   <link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="public/assets/chosen-bootstrap/chosen/chosen.css"  rel="stylesheet" type="text/css" />
   <link href="public/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"  />
   <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   
   <script type="text/javascript" src="public/js/jquery-1.8.2.min.js"></script>		
   <script type="text/javascript" src="public/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="public/js/jquery.blockui.js"></script>
   <script type="text/javascript" src="public/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>	
   <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
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
                     Calendar
                     <small>calendar with draggable events</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Calendar</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN CALENDAR PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i>Calendar</h4>
                           <span class="tools">
                           <a class="icon-chevron-down" href="javascript:;"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span3 responsive" data-tablet="span12 fix-margin" data-desktop="span8">
                                 <!-- BEGIN DRAGGABLE EVENTS PORTLET-->		
                                 <h3 class="event-form-title">Draggable Events</h3>
                                 <div id="external-events">
                                    <form class="inline-form">
                                       <input type="text" value="" class="span12" placeholder="Event Title..." id="event_title" /><br />
                                       <select id="event_priority" data-placeholder="Select Label..." class="span12 chosen">
                                          <option value=""></option>
                                          <option value="default">Default</option>
                                          <option value="success">Normal</option>
                                          <option value="info">Medium</option>
                                          <option value="warning">Urgent</option>
                                          <option value="important">Important</option>
                                       </select>
                                       <div class="space12"></div>
                                       <a href="javascript:;" id="event_add" class="btn">Add Event</a>
                                    </form>
                                    <hr />
                                    <div id="event_box">
                                    </div>
                                    <label for="drop-remove">
                                    <input type="checkbox" id="drop-remove" />remove after drop									
                                    </label>
                                    <hr class="visible-phone"/>
                                 </div>
                                 <!-- END DRAGGABLE EVENTS PORTLET-->				
                              </div>
                              <div class="span9">
                                 <div id="calendar" class="has-toolbar"></div>
                              </div>
                           </div>
                           <!-- END CALENDAR PORTLET-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->	
      </div>
   