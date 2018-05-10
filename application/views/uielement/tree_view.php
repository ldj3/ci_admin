<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Tree View Page</title>
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
   <link href="public/assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"  />
   <link href="public/assets/bootstrap-tree/bootstrap-tree/css/bootstrap-tree.css" rel="stylesheet" type="text/css"  />
   <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="public/js/jquery.blockui.js"></script>
   <script type="text/javascript" src="public/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="public/assets/bootstrap-tree/bootstrap-tree/js/bootstrap-tree.js"></script>
   <script type="text/javascript" src="public/js/scripts.js"></script>
   <script type="text/javascript" src="public/js/ui-tree.js"></script>
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
         UITree.init();
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
                       Tree View
                       <small>tree view sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">UI Elements</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Tree View Page</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span6">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class=" icon-indent-left"></i>Inline Tree</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="actions">
                                <a class="btn btn-small" id="tree_1_collapse" href="javascript:;"> Collapse All</a>
                                <a class="btn btn-small" id="tree_1_expand" href="javascript:;"> Expand All</a>
                            </div>
                            <div class="space10"></div>
                            <ul id="tree_1" class="tree">
                                <li>
                                    <a data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" data-role="branch" href="#">
                                        Bootstrap Tree
                                    </a>
                                    <ul class="branch in">
                                        <li>
                                            <a id="nut1" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" href="#">
                                                Documents
                                            </a>
                                            <ul class="branch in">
                                                <li>
                                                    <a id="nut2" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="#">
                                                        Finance
                                                    </a>
                                                    <ul class="branch">
                                                        <li><a data-role="leaf" href="#"><i class="icon-book"></i> Sale Revenue</a></li>
                                                        <li><a data-role="leaf" href="#"><i class="icon-fire"></i> Promotions</a></li>
                                                        <li><a data-role="leaf" href="#"><i class="icon-edit"></i> IPO</a></li>
                                                    </ul>
                                                </li>
                                                <li><a data-role="leaf" href="#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut3" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="#">
                                                Examples
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="#"><i class="icon-cloud"></i> Internal</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-user-md"></i> Client Base</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-retweet"></i> Product Base</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut4" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" href="#">
                                                Tasks
                                            </a>
                                            <ul class="branch in">
                                                <li><a data-role="leaf" href="#"><i class="icon-suitcase"></i> Internal Projects</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-cloud-download"></i> Outsourcing</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-sitemap"></i> Bug Tracking</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut6" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="#">
                                                Customers
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="#"><i class="icon-tags"></i> Finance</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut8" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="#">
                                                Reports
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="#"><i class="icon-tags"></i> Finance</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a data-role="leaf" target="_blank" href="http://themeforest.net/item/admin-lab-responsive-admin-dashboard-template/full_screen_preview/4701827">
                                                <i class="icon-share"></i> External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-role="leaf" target="_blank" href="http://themeforest.net/item/admin-lab-responsive-admin-dashboard-template/full_screen_preview/4701827">
                                                <i class="icon-share"></i> Another External Link
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                  </div>
               </div>
                <div class="span6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class=" icon-indent-left"></i>Data Sources</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="actions">
                                <a class="btn btn-small" id="tree_2_collapse" href="javascript:;"> Collapse All</a>
                                <a class="btn btn-small" id="tree_2_expand" href="javascript:;"> Expand All</a>
                            </div>
                            <div class="space10"></div>
                            <ul id="tree_2" class="tree">
                                <li>
                                    <a data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" data-role="branch" href="#">Bootstrap Tree
                                    </a>
                                    <ul class="branch in">
                                        <li><a id="nut" data-role="leaf" href="#"><i class=" icon-book"></i> Documents</a></li>
                                        <li><a data-role="leaf" href="#"><i class=" icon-bullhorn"></i> Projects</a></li>
                                        <li><a data-role="leaf" href="#"><i class="icon-tasks"></i> Tasks</a></li>
                                        <li>
                                            <a data-role="leaf"  href="#">
                                                <i class="icon-share"></i> External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-role="leaf"  href="#">
                                                <i class="icon-share"></i> Another External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-value="XML_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/xmlexample.xml">Load data from XML document via Ajax
                                            </a>
                                            <ul class="branch">
                                                <li><a role="branch" class="tree-toggle closed folder" data-toggle="branch" data-value="number_8" data-itemid="root/number_8" href="#">this branch</a>
                                                    <ul class="branch">
                                                        <li><a role="leaf" data-value="2" data-itemid="root/number_8/wow" href="#"><i class="icon-shopping-cart"></i> Purchase admin lab Today</a></li>
                                                    </ul>
                                                </li>
                                                <li><a role="branch" class="tree-toggle folder" data-toggle="branch" data-value="number_9" data-itemid="root/number_9" href="#">Check this Out!</a>
                                                    <ul class="branch in">
                                                        <li><a role="leaf" data-value="But admin lab Today" data-itemid="root/number_9/admin lab" href="#"><i class="icon-shopping-cart"></i> Purchase admin lab Today</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a data-value="HTML_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/htmlexample.html">Load data from HTML page via Ajax
                                            </a><ul class="branch"><li><a target="_blank" href="#">Some Link</a></li>
                                            <li><a target="_blank" href="#">Another Link</a></li>
                                            <li>
                                                <a data-value="GitHub_Repos" data-toggle="branch" class="tree-toggle closed" role="branch" href="#">Some Structure</a>
                                                <ul class="branch">
                                                    <li><a href="#">Events</a></li>
                                                    <li><a href="#">Users</a></li>
                                                    <li><a href="#">Feedbacks</a></li>
                                                    <li><a href="#">Reports</a></li>
                                                    <li><a href="#">Sales</a></li>
                                                    <li><a href="#">Revenue</a></li>
                                                </ul>
                                            </li></ul>
                                        </li>

                                        <li><a data-value="JSON_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/jsonexample.json">Load data from JSON via Ajax</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>