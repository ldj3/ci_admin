<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>500 Errors</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="public/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="public/css/style.css" rel="stylesheet" />
   <link href="public/css/style_responsive.css" rel="stylesheet" />
   <link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="public/assets/uniform/css/uniform.default.css" />
   <script src="public/js/jquery-1.8.3.min.js"></script>
   <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="public/js/jquery.blockui.js"></script>
   <script type="text/javascript" src="public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
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
                     Error Page
                     <small>error page sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Extra</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">500 Error Page</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <div class="span12">
                     <div class="space20"></div>
                     <div class="space20"></div>
                     <div class="widget-body">
                         <div class="error-page" style="min-height: 800px">
                             <img src="img/500.png" alt="500 error">
                             <h1>
                                 <strong>500!</strong> <br/>
                                 OOPS! Something went wrong.
                             </h1>
                         </div>
                     </div>
                 </div>
             </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   