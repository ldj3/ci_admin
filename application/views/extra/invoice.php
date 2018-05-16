<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Invoice Page</title>
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
                     Invoice Page
                     <small>invoice page sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Extra</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Invoice Page</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-edit"></i>Invoice Page</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <img src="img/vector-lab.jpg" alt="">
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="row-fluid invoice-list">
                                <div class="span4">
                                    <h5>BILLING ADDRESS</h5>
                                    <p>
                                        Jonathan Smith <br>
                                        44 Dreamland Tower, Suite 566 <br>
                                        ABC, Dreamland 1230<br>
                                        Tel: +12 (012) 345-67-89
                                    </p>
                                </div>
                                <div class="span4">
                                    <h5>SHIPPING ADDRESS</h5>
                                    <p>
                                        Vector Lab<br>
                                        Road 1, House 2, Sector 3<br>
                                        ABC, Dreamland 1230<br>
                                        P: +38 (123) 456-7890<br>
                                    </p>
                                </div>
                                <div class="span4">
                                    <h5>INVOICE INFO</h5>
                                    <ul class="unstyled">
                                        <li>Invoice Number		: <strong>69626</strong></li>
                                        <li>Invoice Date		: 2013-03-17</li>
                                        <li>Due Date			: 2013-03-20</li>
                                        <li>Invoice Status		: Paid</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="space20"></div>
                            <div class="row-fluid">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th class="hidden-480">Description</th>
                                        <th class="hidden-480">Unit Cost</th>
                                        <th class="hidden-480">Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>LCD Monitor</td>
                                        <td class="hidden-480">20 inch Philips LCD Black color monitor</td>
                                        <td class="hidden-480">$ 1000</td>
                                        <td class="hidden-480">2</td>
                                        <td>$ 2000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Laptop</td>
                                        <td class="hidden-480">Apple Mac book pro 15” Retina Display. 2.8 GHz Processor,8 GB Ram</td>
                                        <td class="hidden-480">$1750</td>
                                        <td class="hidden-480">1</td>
                                        <td>$1750</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mouse</td>
                                        <td class="hidden-480">Apple Magic Mouse</td>
                                        <td class="hidden-480">$90</td>
                                        <td class="hidden-480">3</td>
                                        <td>$270</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Personal Computer</td>
                                        <td class="hidden-480">iMac 21 inch slim body. 1.7 GHz, 8 GB Ram</td>
                                        <td class="hidden-480">$1200</td>
                                        <td class="hidden-480">2</td>
                                        <td>$2400</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Printer</td>
                                        <td class="hidden-480">Epson Color Jet printer </td>
                                        <td class="hidden-480">$200</td>
                                        <td class="hidden-480">2</td>
                                        <td>$400</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="space20"></div>
                            <div class="row-fluid">
                                <div class="span4 invoice-block pull-right">
                                    <ul class="unstyled amounts">
                                        <li><strong>Sub - Total amount :</strong> $6820</li>
                                        <li><strong>Discount :</strong> 10%</li>
                                        <li><strong>VAT :</strong> -----</li>
                                        <li><strong>Grand Total :</strong> $6138</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="row-fluid text-center">
                                <a class="btn btn-primary btn-large hidden-print">Submit Your Invoice <i class="m-icon-big-swapright m-icon-white"></i></a>
                                <a onclick="javascript:window.print();" class="btn btn-success btn-large hidden-print">Print <i class="icon-print icon-big"></i></a>
                            </div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   