<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Form Validation</title>
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
      <!-- BEGIN PAGE -->  
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
                  <h3 class="page-title">
                     Form Validation
                     <small>form validation sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Form Validation</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN VALIDATION STATES-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Validation 1</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <p>Basic validations</p>
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                           <div class="control-group warning">
                              <label class="control-label" for="inputWarning">Input with warning</label>
                              <div class="controls">
                                 <input type="text" class="span6" id="inputWarning" />
                                 <span class="help-inline">Something may have gone wrong</span>
                              </div>
                           </div>
                           <div class="control-group error">
                              <label class="control-label" for="inputError">Input with error</label>
                              <div class="controls">
                                 <input type="text" class="span6" id="inputError" />
                                 <span class="help-inline">Please correct the error</span>
                              </div>
                           </div>
                           <div class="control-group success">
                              <label class="control-label" for="inputSuccess">Input with success</label>
                              <div class="controls">
                                 <input type="text" class="span6" id="inputSuccess" />
                                 <span class="help-inline ">Woohoo!</span>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" class="btn btn-success">Save</button>
                              <button type="button" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END VALIDATION STATES-->
               </div>
            </div>
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN VALIDATION STATES-->
                  <div class="widget box blue">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Validation 2</h4>
                         <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <p>Validations with icon</p>
                        <form action="#" class="form-horizontal">
                           <div class="control-group warning">
                              <label class="control-label">Input with warning</label>
                              <div class="controls input-icon">
                                 <input type="text" class="span6" />
                                 <span class="input-warning tooltips" data-original-title="please write a valid email">
                                 <i class="icon-warning-sign"></i>
                                 </span>
                              </div>
                           </div>
                           <div class="control-group error">
                              <label class="control-label">Input with error</label>
                              <div class="controls input-icon">
                                 <input type="text" class="span6" />
                                 <span class="input-error tooltips" data-original-title="please write a valid email">
                                 <i class="icon-exclamation-sign"></i>
                                 </span>
                              </div>
                           </div>
                           <div class="control-group success">
                              <label class="control-label">Input with success</label>
                              <div class="controls input-icon">
                                 <input type="text" class="span6" />
                                 <span class="input-success tooltips" data-original-title="Success input!">
                                 <i class="icon-ok"></i>
                                 </span>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" class="btn btn-success">Save</button>
                              <button type="button" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END VALIDATION STATES-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   