<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Form Layouts</title>
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
                  <h3 class="page-title">
                     Form Layouts
                     <small>simple form layouts</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Form Layouts</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12 sortable">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Form Layouts</h4>
                                        <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                        <a href="javascript:;" class="icon-remove"></a>
                                        </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Mini Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-mini" class="input-mini" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Small Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-small" class="input-small" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Meduam Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-medium" class="input-medium" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Large Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-large" class="input-large" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">xLarge Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-xlarge" class="input-xlarge" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">xxLarge Input</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-xxlarge" class="input-xxlarge" />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Disabled Input</label>
                                    <div class="controls">
                                        <input class="medium" type="text" placeholder="Disabled input here..." disabled />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Readonly Input</label>
                                    <div class="controls">
                                        <input class="medium" readonly type="text" placeholder="Readonly input here..." disabled />
                                        <span class="help-inline">Some hint here</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Small Dropdown</label>
                                    <div class="controls">
                                        <select class="input-small m-wrap" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Medium Dropdown</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Large Dropdown</label>
                                    <div class="controls">
                                        <select class="input-large m-wrap" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Radio Buttons</label>
                                    <div class="controls">
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios1" value="option1" />
                                            Option 1
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios1" value="option2" checked />
                                            Option 2
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="optionsRadios1" value="option2" />
                                            Option 3
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Radio Buttons</label>
                                    <div class="controls">
                                        <label class="radio line">
                                            <input type="radio" name="optionsRadios2" value="option1" />
                                            Option 1
                                        </label>
                                        <label class="radio line">
                                            <input type="radio" name="optionsRadios2" value="option2" checked />
                                            Option 2
                                        </label>
                                        <label class="radio line">
                                            <input type="radio" name="optionsRadios2" value="option2" />
                                            Option 3
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Checkbox</label>
                                    <div class="controls">
                                        <label class="checkbox">
                                            <input type="checkbox" value="" /> Checkbox 1
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" value="" /> Checkbox 2
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Checkbox</label>
                                    <div class="controls">
                                        <label class="checkbox line">
                                            <input type="checkbox" value="" /> Checkbox 1
                                        </label>
                                        <label class="checkbox line">
                                            <input type="checkbox" value="" /> Checkbox 2
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Textarea</label>
                                    <div class="controls">
                                        <textarea class="input-medium" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Large Textarea</label>
                                    <div class="controls">
                                        <textarea class="input-large" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">xLarge Textarea</label>
                                    <div class="controls">
                                        <textarea class="input-xlarge" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">xxLarge Textarea</label>
                                    <div class="controls">
                                        <textarea class="input-xxlarge" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                    <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   