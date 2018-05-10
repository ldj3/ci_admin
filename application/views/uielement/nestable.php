<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Nestable Page</title>
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
    <link href="public/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/nestable/jquery.nestable.css" rel="stylesheet" type="text/css"  />

    <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.blockui.js"></script>
    <script type="text/javascript" src="public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="public/assets/nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="public/js/ui-nestable.js"></script>
    <script type="text/javascript" src="public/js/scripts.js"></script>
    <script>
      jQuery(document).ready(function() {
         App.init();
         UINestable.init();
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
                       Nestable List
                     <small>Nestable list page sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">UI Elements</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Nestable List</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <div class="span12">
                     <div class="margin-bottom-10 pull-right" id="nestable_list_menu">
                         <button type="button" class="btn" data-action="expand-all">Expand All</button>
                         <button type="button" class="btn" data-action="collapse-all">Collapse All</button>
                     </div>
                 </div>
             </div>
             <div class="row-fluid">
                 <div class="span12">
                     <h3>Serialised Output (per list)</h3>
                     <div class="row-fluid">
                         <div class="span6">
                             <textarea id="nestable_list_1_output" class="m-wrap span12"></textarea>
                         </div>
                         <div class="span6">
                             <textarea id="nestable_list_2_output" class="m-wrap span12"></textarea>
                         </div>
                     </div>
                 </div>
             </div>
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-align-left"></i>Nestable List 1</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#widget-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="dd" id="nestable_list_1">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">Item 1</div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">Item 2</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">Item 3</div>
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">Item 4</div>
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle">Item 5</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="6">
                                                        <div class="dd-handle">Item 6</div>
                                                    </li>
                                                    <li class="dd-item" data-id="7">
                                                        <div class="dd-handle">Item 7</div>
                                                    </li>
                                                    <li class="dd-item" data-id="8">
                                                        <div class="dd-handle">Item 8</div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="dd-item" data-id="9">
                                                <div class="dd-handle">Item 9</div>
                                            </li>
                                            <li class="dd-item" data-id="10">
                                                <div class="dd-handle">Item 10</div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="11">
                                        <div class="dd-handle">Item 11</div>
                                    </li>
                                    <li class="dd-item" data-id="12">
                                        <div class="dd-handle">Item 12</div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-align-left"></i>Nestable List 2</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#widget-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="dd" id="nestable_list_2">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="13">
                                        <div class="dd-handle">Item 13</div>
                                    </li>
                                    <li class="dd-item" data-id="14">
                                        <div class="dd-handle">Item 14</div>
                                    </li>
                                    <li class="dd-item" data-id="15">
                                        <div class="dd-handle">Item 15</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="16">
                                                <div class="dd-handle">Item 16</div>
                                            </li>
                                            <li class="dd-item" data-id="17">
                                                <div class="dd-handle">Item 17</div>
                                            </li>
                                            <li class="dd-item" data-id="18">
                                                <div class="dd-handle">Item 18</div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-align-left"></i>Nestable List 3</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#widget-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="dd" id="nestable_list_3">
                                <ol class="dd-list">
                                    <li class="dd-item dd3-item" data-id="13">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">Item 13</div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="14">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">Item 14</div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="15">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">Item 15</div>
                                        <ol class="dd-list">
                                            <li class="dd-item dd3-item" data-id="16">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 16</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="17">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 17</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="18">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 18</div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>