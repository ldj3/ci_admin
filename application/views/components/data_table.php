<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Data Tables</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="public/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="public/css/style.css" rel="stylesheet" />
   <link href="public/css/style_responsive.css" rel="stylesheet" />
   <link href="public/css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="public/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link href="public/assets/uniform/css/uniform.default.css"  rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="public/js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>   
   <script type="text/javascript" src="public/js/jquery.blockui.js"></script>
   <script type="text/javascript" src="public/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="public/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="public/assets/data-tables/DT_bootstrap.js"></script>
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
                     Data Tables
                     <small>Full DataTables Integration</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Components</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Data Tables</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->          
            <div class="row-fluid">
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Simple Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th class="hidden-phone">Username</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td>Rafiqul</td>
                                 <td>Islam</td>
                                 <td class="hidden-phone">dk123</td>
                                 <td><span class="label label-success">Approved</span></td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Mosaddek</td>
                                 <td>Hossain</td>
                                 <td class="hidden-phone">mos123</td>
                                 <td><span class="label label-info">Pending</span></td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Dulal</td>
                                 <td>Khan</td>
                                 <td class="hidden-phone">lorem</td>
                                 <td><span class="label label-warning">Suspended</span></td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Sumon</td>
                                 <td>Ahmed</td>
                                 <td class="hidden-phone">ispum</td>
                                 <td><span class="label label-danger">Blocked</span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
                <div class="span6">
                    <!-- BEGIN SAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Striped Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th class="hidden-phone">Username</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rafiqul</td>
                                    <td>Islam</td>
                                    <td class="hidden-phone">dk123</td>
                                    <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mosaddek</td>
                                    <td>Hossain</td>
                                    <td class="hidden-phone">mos123</td>
                                    <td><span class="label label-info">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dulal</td>
                                    <td>Khan</td>
                                    <td class="hidden-phone">lorem</td>
                                    <td><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sumon</td>
                                    <td>Ahmed</td>
                                    <td class="hidden-phone">ispum</td>
                                    <td><span class="label label-danger">Blocked</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE widget-->
                </div>
            </div>
            <div class="row-fluid">
               <div class="span12">
                    <!-- BEGIN BORDERED TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Bordered Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th class="hidden-phone">Username</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rafiqul</td>
                                    <td>Islam</td>
                                    <td class="hidden-phone">dk123</td>
                                    <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mosaddek</td>
                                    <td>Hossain</td>
                                    <td class="hidden-phone">mos123</td>
                                    <td><span class="label label-info">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dulal</td>
                                    <td>Khan</td>
                                    <td class="hidden-phone">lorem</td>
                                    <td><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sumon</td>
                                    <td>Ahmed</td>
                                    <td class="hidden-phone">ispum</td>
                                    <td><span class="label label-danger">Blocked</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE widget-->
                </div>
            </div>
            <div class="row-fluid">
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-cogs"></i>Advance Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body">
                        <table class="table table-striped table-bordered table-advance table-hover">
                           <thead>
                              <tr>
                                 <th><i class="icon-briefcase"></i> Company</th>
                                 <th class="hidden-phone"><i class="icon-user"></i> Contact</th>
                                 <th><i class="icon-shopping-cart"></i> Total</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="highlight">
                                    <div class="success"></div>
                                    <a href="#">KLK</a>
                                 </td>
                                 <td class="hidden-phone"> Rafiq</td>
                                 <td>2560.60$</td>
                                 <td><a href="#" class="btn mini purple"><i class="icon-edit"></i> Edit</a></td>
                              </tr>
                              <tr>
                                 <td class="highlight">
                                    <div class="info"></div>
                                    <a href="#">BGF</a>
                                 </td>
                                 <td class="hidden-phone">Mosaddek </td>
                                 <td>560.60$</td>
                                 <td><a href="#" class="btn mini black"><i class="icon-trash"></i> Delete</a></td>
                              </tr>
                              <tr>
                                 <td class="highlight">
                                    <div class="important"></div>
                                    <a href="#">ABC</a>
                                 </td>
                                 <td class="hidden-phone">Dulal Khan</td>
                                 <td>3460.60$</td>
                                 <td><a href="#" class="btn mini purple"><i class="icon-edit"></i> Edit</a></td>
                              </tr>
                              <tr>
                                 <td class="highlight">
                                    <div class="warning"></div>
                                    <a href="#">DEF</a>
                                 </td>
                                 <td class="hidden-phone">DKMOS </td>
                                 <td>2560.60$</td>
                                 <td><a href="#" class="btn mini blue"><i class="icon-share"></i> Share</a></td>
                              </tr>
                              <tr>
                                  <td class="highlight">
                                      <div class="important"></div>
                                      <a href="#">ABC</a>
                                  </td>
                                  <td class="hidden-phone">Sumon Ahmed</td>
                                  <td>3460.60$</td>
                                  <td><a href="#" class="btn mini purple"><i class="icon-edit"></i> Edit</a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
               <div class="span6">
                  <!-- BEGIN SAMPLE TABLE widget-->            
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-cogs"></i>Advance Table</h4>
                        <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                        </span>
                     </div>
                     <div class="widget-body">
                        <table class="table table-striped table-bordered table-advance table-hover">
                           <thead>
                              <tr>
                                 <th><i class="icon-briefcase"></i> From</th>
                                 <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                                 <th><i class="icon-bookmark"></i> Total</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><a href="#">Pixel Ltd</a></td>
                                 <td class="hidden-phone">Server hardware purchase</td>
                                 <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                 <td><a href="#" class="btn mini green-stripe">View</a></td>
                              </tr>
                              <tr>
                                 <td>
                                    <a href="#">
                                    Smart House
                                    </a>  
                                 </td>
                                 <td class="hidden-phone">Office furniture purchase</td>
                                 <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                 <td><a href="#" class="btn mini blue-stripe">View</a></td>
                              </tr>
                              <tr>
                                 <td>
                                    <a href="#">
                                    FoodMaster Ltd
                                    </a>
                                 </td>
                                 <td class="hidden-phone">Company Anual Dinner Catering</td>
                                 <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                 <td><a href="#" class="btn mini blue-stripe">View</a></td>
                              </tr>
                              <tr>
                                 <td>
                                    <a href="#">
                                    WaterPure Ltd
                                    </a>
                                 </td>
                                 <td class="hidden-phone">Payment for Jan 2013</td>
                                 <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
                                 <td><a href="#" class="btn mini red-stripe">View</a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END SAMPLE TABLE widget-->
               </div>
            </div>
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Managed Table</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                    <th>Username</th>
                                    <th class="hidden-phone">Email</th>
                                    <th class="hidden-phone">Points</th>
                                    <th class="hidden-phone">Joined</th>
                                    <th class="hidden-phone"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>shuxer</td>
                                    <td class="hidden-phone"><a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a></td>
                                    <td class="hidden-phone">120</td>
                                    <td class="center hidden-phone">12 Jan 2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>looper</td>
                                    <td class="hidden-phone"><a href="mailto:looper90@gmail.com">looper90@gmail.com</a></td>
                                    <td class="hidden-phone">120</td>
                                    <td class="center hidden-phone">12.12.2011</td>
                                    <td class="hidden-phone"><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@yahoo.com">userwow@yahoo.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>user1wow</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>restest</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>foopl</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>weep</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>coop</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>pppol</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>goop</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>weep</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">15.11.2011</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>toopl</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">16.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">9.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>tes21t</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">14.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>fop</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">13.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>kop</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">17.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>vopl</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.11.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>wap</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">12.12.2012</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">19.12.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>toop</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">17.12.2010</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>weep</td>
                                    <td class="hidden-phone"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-phone">20</td>
                                    <td class="center hidden-phone">15.11.2011</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   
