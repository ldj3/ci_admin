<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title> <?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.blockui.js"></script>
    <script type="text/javascript" src="public/assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="public/js/scripts.js"></script>
    <script>
      jQuery(document).ready(function() {
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
                     Buttons
                     <small>buttons, dropdowns and more</small>
                  </h3>
                  <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">UI Elements</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Buttons</a><span class="divider-last">&nbsp;</span></li>
                  </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid">
                  <div class="span12">
                     <!-- BEGIN BUTTONS PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-leaf"></i>Buttons</h4>
                           <span class="tools">
                                <a class="icon-chevron-down" href="javascript:;"></a>
                                <a class="icon-remove" href="javascript:;"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="span6">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Button</th>
                                        <th>class=""</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn">Default</button>
                                        </td>
                                        <td>
                                            <code>btn</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary">Primary</button>
                                        </td>
                                        <td>
                                            <code>btn btn-primary</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-info">Info</button>
                                        </td>
                                        <td>
                                            <code>btn btn-info</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-success">Success</button>
                                        </td>
                                        <td>
                                            <code>btn btn-success</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-warning">Warning</button>
                                        </td>
                                        <td>
                                            <code>btn btn-warning</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-danger">Danger</button>
                                        </td>
                                        <td>
                                            <code>btn btn-danger</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-inverse">Inverse</button>
                                        </td>
                                        <td>
                                            <code>btn btn-inverse</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn disabled">Disabled</button>
                                        </td>
                                        <td>
                                            <code>btn disabled</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-link" type="button">Link</button>
                                        </td>
                                        <td>
                                            <code>btn btn-link</code>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="span6">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Button Size</th>
                                        <th>class=""</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <button class="btn btn-large btn-primary" type="button">Large button</button>
                                            <button class="btn btn-large" type="button">Large button</button>
                                        </td>
                                        <td>
                                            <code>btn btn-large btn-primary</code>
                                            <code>btn btn-large</code>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-primary" type="button">Default button</button>
                                            <button class="btn" type="button">Default button</button>
                                        </td>
                                        <td>
                                            <code>btn btn-primary</code><br/>
                                            <code>btn </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-small btn-primary" type="button">Small button</button>
                                            <button class="btn btn-small" type="button">Small button</button>
                                        </td>
                                        <td>
                                            <code>btn btn-small btn-primary</code>
                                            <code>btn btn-small</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-mini btn-primary" type="button">Mini button</button>
                                            <button class="btn btn-mini" type="button">Mini button</button>
                                        </td>
                                        <td>
                                            <code>btn btn-mini btn-primary</code>
                                            <code>btn btn-mini</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="btn disabled">Disabled Default  Button</a>
                                            <a href="#" class="btn btn-primary disabled">Disable Primary Button</a>
                                        </td>
                                        <td>
                                            <code>btn disabled</code>
                                            <code>btn btn-primary disabled</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-block" type="button">Block button</button>
                                        </td>
                                        <td>
                                            <code>btn btn-block</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn">Left</button>
                                                <button class="btn">Middle</button>
                                                <button class="btn">Right</button>
                                            </div>
                                        </td>
                                        <td>
                                            <code>.btn-group</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <button class="btn">1</button>
                                                <button class="btn">2</button>
                                                <button class="btn">3</button>
                                            </div>
                                        </td>
                                        <td>
                                            <code>.btn-group-vertical</code>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <span class="space5"></span>
                        </div>
                     </div>
                     <!-- END BUTTONS PORTLET-->

                     <!-- BEGIN BUTTONS WITH ICONS PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Buttons with Icons</h4>
                           <span class="tools">
                                <a class="icon-chevron-down" href="javascript:;"></a>
                                <a class="icon-remove" href="javascript:;"></a>
                           </span>							
                        </div>
                        <div class="widget-body">
                           <p>Examples to use icons with buttons.</p>
                           <p>
                              <button class="btn"><i class="icon-eye-open"></i> View</button>
                              <button class="btn btn-warning"><i class="icon-plus icon-white"></i> Create</button>
                              <button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> Update</button>
                              <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button>
                              <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
                              <button class="btn btn-info"><i class="icon-ban-circle icon-white"></i> Cancel</button>
                               <button class="btn btn-success"><i class="icon-ok icon-white"></i> Approve</button>
                           </p>

                           <p>Toolbar icon example</p>
                           <div class="btn-group">
                              <button class="btn"><i class="icon-step-backward"></i></button>
                              <button class="btn"><i class="icon-fast-backward"></i></button>
                              <button class="btn hidden-phone"><i class="icon-backward"></i></button>
                              <button class="btn"><i class="icon-play"></i></button>
                              <button class="btn"><i class="icon-pause"></i></button>
                              <button class="btn"><i class="icon-stop"></i></button>
                              <button class="btn hidden-phone"><i class="icon-forward"></i></button>
                              <button class="btn"><i class="icon-fast-forward"></i></button>
                              <button class="btn"><i class="icon-step-forward"></i></button>
                           </div>
                            <div class="btn-group">
                                <button class="btn btn-primary"><i class="icon-step-backward"></i></button>
                                <button class="btn btn-primary"><i class="icon-fast-backward"></i></button>
                                <button class="btn hidden-phone btn-primary"><i class="icon-backward"></i></button>
                                <button class="btn btn-primary"><i class="icon-play"></i></button>
                                <button class="btn btn-primary"><i class="icon-pause"></i></button>
                                <button class="btn btn-primary"><i class="icon-stop"></i></button>
                                <button class="btn hidden-phone btn-primary"><i class="icon-forward"></i></button>
                                <button class="btn btn-primary"><i class="icon-fast-forward"></i></button>
                                <button class="btn btn-primary"><i class="icon-step-forward"></i></button>
                            </div>
                           <div class="btn-toolbar">
                              <div class="btn-group">
                                 <a class="btn" href="#"><i class="icon-align-left"></i></a>
                                 <a class="btn" href="#"><i class="icon-align-center"></i></a>
                                 <a class="btn" href="#"><i class="icon-align-right"></i></a>
                                 <a class="btn" href="#"><i class="icon-align-justify"></i></a>
                              </div>
                               <div class="btn-group">
                                   <a class="btn btn-success" href="#"><i class="icon-align-left"></i></a>
                                   <a class="btn btn-success" href="#"><i class="icon-align-center"></i></a>
                                   <a class="btn btn-success" href="#"><i class="icon-align-right"></i></a>
                                   <a class="btn btn-success" href="#"><i class="icon-align-justify"></i></a>
                               </div>
                           </div>
                           <p>Star Rating Example</p>
                           <div>
                              <span class="rating">
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              <span class="star"></span>
                              </span>							
                           </div>
                        </div>
                     </div>
                     <!-- END BUTTONS WITH ICONS PORTLET-->
                     <!-- BEGIN DROPDOWNS PORTLET-->
                     <div class="widget">
                         <div class="widget-title">
                             <h4><i class="icon-flag"></i>Custom Dropdowns</h4>
                               <span class="tools">
                                    <a class="icon-chevron-down" href="javascript:;"></a>
                                    <a class="icon-remove" href="javascript:;"></a>
                               </span>
                         </div>
                         <div class="widget-body custom-btn">
                             <p>Dropdown buttons</p>
                             <div class="btn-toolbar">
                                 <div class="btn-group">
                                     <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <p>Dropdown button with icons</p>
                             <div class="btn-toolbar">
                                 <div class="btn-group">
                                     <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a><a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span></a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                         <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                         <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#"><i class="i"></i> Make admin</a></li>
                                     </ul>
                                 </div>
                                 <div class="btn-group">
                                     <a class="btn" href="#"><i class="icon-cog"></i> Settings</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span>
                                 </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"><i class="icon-plus"></i> Add</a></li>
                                         <li><a href="#"><i class="icon-trash"></i> Edit</a></li>
                                         <li><a href="#"><i class="icon-remove"></i> Delete</a></li>
                                         <li class="divider"></li>
                                         <li><a href="#"><i class="i"></i> Full Settings</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- END DROPDOWNS PORTLET-->
                  </div>

               </div>
               <div class="row-fluid">
                   <div class="span12">
                       <!-- BEGIN CUSTOM BUTTONS WITH ICONS PORTLET-->
                       <h4>Custom Buttons with Icons</h4>
                       <div class="row-fluid">
                           <a href="#" class="icon-btn span2">
                               <i class="icon-group"></i>
                               <div>Users</div>
                               <span class="badge badge-important">2</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-barcode"></i>
                               <div>Products</div>
                               <span class="badge badge-success">4</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-bar-chart"></i>
                               <div>Reports</div>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-sitemap"></i>
                               <div>Categories</div>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-calendar"></i>
                               <div>Calendar</div>
                               <span class="badge badge-success">4</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-envelope"></i>
                               <div>Inbox</div>
                               <span class="badge badge-info">12</span>
                           </a>
                       </div>
                       <div class="row-fluid">
                           <a href="#" class="icon-btn span2">
                               <i class="icon-bullhorn"></i>
                               <div>Notification</div>
                               <span class="badge badge-important">3</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-map-marker"></i>
                               <div>Locations</div>
                           </a>

                           <a href="#" class="icon-btn span2">
                               <i class="icon-money"></i>
                               <div>Finance</div>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-plane"></i>
                               <div>Projects</div>
                               <span class="badge badge-info">21</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-thumbs-up"></i>
                               <div>Feedback</div>
                               <span class="badge badge-info">2</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-cloud"></i>
                               <div>Servers</div>
                               <span class="badge badge-important">2</span>
                           </a>
                       </div>
                       <div class="row-fluid">
                           <a href="#" class="icon-btn span2">
                               <i class="icon-globe"></i>
                               <div>Regions</div>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-heart-empty"></i>
                               <div>Popularity</div>
                               <span class="badge badge-info">221</span>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-wrench"></i>
                               <div>Settings</div>
                           </a>
                           <a href="#" class="icon-btn span2">
                               <i class="icon-search"></i>
                               <div>Search</div>
                           </a>
                       </div>
                       <!-- END CUSTOM BUTTONS WITH ICONS PORTLET-->
                   </div>
                   <span class="space20">&nbsp;</span>
               </div>
               <!--END:BODY-->
            </div>
            <!-- page -->
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->	
      </div>