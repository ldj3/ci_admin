<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Profile</title>
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
                       Profile
                     <small>simple profile page</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Extra</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Profile</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-user"></i>Profile</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                            <div class="span3">
                                <div class="text-center profile-pic">
                                    <img src="img/profile-pic.jpg" alt="">
                                </div>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-coffee"></i> Portfolio</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-paper-clip"></i> Projects</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-picture"></i> Gallery</a></li>
                                </ul>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span6">
                                <h4>Mosaddek Hossain <br/><small>Frontend Developer</small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2">First Name :</td>
                                        <td>
                                            Mosaddek
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Last Name :</td>
                                        <td>
                                            Hossain
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Country :</td>
                                        <td>
                                            Bangladesh
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Birthday :</td>
                                        <td>
                                            13 july 1983
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Occupation :</td>
                                        <td>
                                            Web Developer
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Email :</td>
                                        <td>
                                            abc@abc.com
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Mobile :</td>
                                        <td>
                                            12345677
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>About</h4>

                                <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                <h4>Skills</h4>

                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">HTML</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 90%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">CSS</span></td>
                                        <td>
                                            <div class="progress progress-warning progress-striped">
                                                <div style="width: 85%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Javascript</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 60%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">PHP</span></td>
                                        <td>
                                            <div class="progress progress-success progress-striped">
                                                <div style="width: 40%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Photoshop</span></td>
                                        <td>
                                            <div class="progress progress-warning progress-striped">
                                                <div style="width: 80%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Node.js</span></td>
                                        <td>
                                            <div class="progress progress-danger progress-striped">
                                                <div style="width: 45%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span1"><span class="label label-inverse">Java</span></td>
                                        <td>
                                            <div class="progress progress-danger progress-striped">
                                                <div style="width: 10%" class="bar"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>Address</h4>
                                <div class="well">
                                    <address>
                                        <strong>Vector Lab, Inc.</strong><br>
                                        Dreamland Ave, Suite 73<br>
                                        Bangladesh, PC 1361<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7891
                                    </address>
                                    <address>
                                        <strong>Full Name</strong><br>
                                        <a href="mailto:#">first.last@gmail.com</a>
                                    </address>
                                </div>
                            </div>
                            <div class="span3">
                                <h4>Experience</h4>
                                <ul class="icons push">
                                    <li><i class="icon-hand-right"></i> <strong>ABC Company</strong><br/><em>Duration: 4 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">abc-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>DEF Company</strong><br/><em>Duration: 3 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">def-company.com</a></li>
                                    <li><i class="icon-hand-right"></i> <strong>GHI Company</strong><br/><em>Duration: 1.7 years</em><br/><em>Description of the company..</em><br><a href="javascript:void(0)">ghi-company.com</a></li>
                                </ul>
                                <h4>Current Status</h4>
                                <div class="alert alert-success"><i class="icon-ok-sign"></i> Working in ABC Company</div>
                                <h4>Some Projects</h4>
                                <ul class="unstyled">
                                    <li> <strong>Project 1</strong>: <a href="javascript:void(0)">exampleproject1.com</a></li>
                                    <li> <strong>Project 2</strong>: <a href="javascript:void(0)">exampleproject2.com</a></li>
                                    <li> <strong>Project 3</strong>: <a href="javascript:void(0)">exampleproject3.com</a></li>
                                    <li> <strong>Project 4</strong>: <a href="javascript:void(0)">exampleproject4.com</a></li>
                                    <li> <strong>Project 5</strong>: <a href="javascript:void(0)">exampleproject5.com</a></li>
                                    <li> <strong>Project 6</strong>: <a href="javascript:void(0)">exampleproject6.com</a></li>
                                    <li> <strong>Project 7</strong>: <a href="javascript:void(0)">exampleproject7.com</a></li>
                                    <li> <strong>Project 8</strong>: <a href="javascript:void(0)">exampleproject8.com</a></li>
                                    <li> <strong>Project 9</strong>: <a href="javascript:void(0)">exampleproject9.com</a></li>
                                    <li> <strong>Project 10</strong>: <a href="javascript:void(0)">exampleproject10.com</a></li>
                                </ul>
                            </div>
                            <div class="space5"></div>
                        </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
   