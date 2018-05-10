<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
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
                     Tabs & Accordions
                     <small>tabs & accordion samples</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">UI Elements</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Tabs & Accordions</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
               <div class="row-fluid ">
                  <div class="span6">
                     <!-- BEGIN TAB PORTLET-->   
                     <div class="widget widget-tabs">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i>Tabs</h4>
                        </div>
                        <div class="widget-body">
                           <div class="tabbable portlet-tabs">
                              <ul class="nav nav-tabs">
                                 <li><a href="#portlet_tab3" data-toggle="tab">Tab 3</a></li>
                                 <li><a href="#portlet_tab2" data-toggle="tab">Tab 2</a></li>
                                 <li class="active"><a href="#portlet_tab1" data-toggle="tab">Tab 1</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="portlet_tab1">
                                    <p>
                                       Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                    </p>
                                    <p>
                                       Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  sed diam nonummy nibh euismod.
                                    </p>
                                 </div>
                                 <div class="tab-pane" id="portlet_tab2">
                                    <p>
                                       Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.  
                                    </p>
                                    <p>
                                       Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                                    </p>
                                 </div>
                                 <div class="tab-pane" id="portlet_tab3">
                                    <p>
                                       Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.   
                                    </p>
                                    <p>
                                       Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END TAB PORTLET-->
                  </div>
                  <div class="span6">
                     <!-- BEGIN ACCORDION PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i>Accordions</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a class="icon-remove" href="javascript:;"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                           <div class="accordion" id="accordion1">
                              <div class="accordion-group">
                                 <div class="accordion-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                    <i class=" icon-plus"></i>
                                    Collapsible Group Item #1
                                    </a>
                                 </div>
                                 <div id="collapse_1" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-group">
                                 <div class="accordion-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                                    <i class=" icon-plus"></i>
                                    Collapsible Group Item #2
                                    </a>
                                 </div>
                                 <div id="collapse_2" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-group">
                                 <div class="accordion-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">
                                    <i class=" icon-plus"></i>
                                    Collapsible Group Item #3
                                    </a>
                                 </div>
                                 <div id="collapse_3" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                    </div>
                                 </div>
                              </div>
                               <div class="accordion-group">
                                   <div class="accordion-heading">
                                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">
                                           <i class=" icon-plus"></i>
                                           Collapsible Group Item #4
                                       </a>
                                   </div>
                                   <div id="collapse_4" class="accordion-body collapse">
                                       <div class="accordion-inner">
                                           Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                     </div>
                     <!-- END ACCORDION PORTLET-->      
                  </div>
               </div>
               <div class="row-fluid ">
                  <div class="span12">
                     <!-- BEGIN INLINE TABS PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i>Inline Tabs</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a class="icon-remove" href="javascript:;"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                           <div class="row-fluid">
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_1_1" data-toggle="tab">Section 1</a></li>
                                       <li><a href="#tab_1_2" data-toggle="tab">Section 2</a></li>
                                       <li><a href="#tab_1_3" data-toggle="tab">Section 3</a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_1_1">
                                          <p>Section 1.</p>
                                          <p>
                                              Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                          </p>
                                       </div>
                                       <div class="tab-pane" id="tab_1_2">
                                          <p>Section 2.</p>
                                          <p>
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                          </p>
                                       </div>
                                       <div class="tab-pane" id="tab_1_3">
                                          <p>Section 3.</p>
                                          <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--END TABS-->
                              </div>
                              <div class="space10 visible-phone"></div>
                              <div class="span6">
                                 <!--BEGIN TABS-->
                                 <div class="tabbable tabbable-custom tabs-below">
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="tab_2_1">
                                          <p>Section 1.</p>
                                           <p>
                                               Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                           </p>
                                       </div>
                                       <div class="tab-pane" id="tab_2_2">
                                          <p>Section 2.</p>
                                          <p>
                                             Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                             Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                          </p>
                                       </div>
                                       <div class="tab-pane" id="tab_2_3">
                                          <p>Section 3.</p>
                                           <p>
                                               Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                           </p>
                                       </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#tab_2_1" data-toggle="tab">Section 1</a></li>
                                       <li><a href="#tab_2_2" data-toggle="tab">Section 2</a></li>
                                       <li><a href="#tab_2_3" data-toggle="tab">Section 3</a></li>
                                    </ul>
                                 </div>
                                 <!--END TABS-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END INLINE TABS PORTLET-->
                  </div>
               </div>
               <div class="row-fluid ">
                   <div class="span12">
                       <!-- BEGIN INLINE TABS PORTLET-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i>Inline Tabs</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a class="icon-remove" href="javascript:;"></a>
                           </span>
                           </div>
                           <div class="widget-body">
                               <div class="row-fluid">
                                   <div class="span6">
                                       <!--BEGIN TABS-->
                                       <div class="tabbable tabbable-custom tabs-left">
                                           <!-- Only required for left/right tabs -->
                                           <ul class="nav nav-tabs tabs-left">
                                               <li class="active"><a href="#tab_3_1" data-toggle="tab">Section 1</a></li>
                                               <li><a href="#tab_3_2" data-toggle="tab">Section 2</a></li>
                                               <li><a href="#tab_3_3" data-toggle="tab">Section 3</a></li>
                                           </ul>
                                           <div class="tab-content">
                                               <div class="tab-pane active" id="tab_3_1">
                                                   <p> Section 1.</p>
                                                   <p>
                                                       Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                   </p>
                                               </div>
                                               <div class="tab-pane" id="tab_3_2">
                                                   <p>Section 2.</p>
                                                   <p>
                                                       Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.
                                                   </p>
                                               </div>
                                               <div class="tab-pane" id="tab_3_3">
                                                   <p>Section 3.</p>
                                                   <p>
                                                       Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                       <!--END TABS-->
                                   </div>
                                   <div class="space10 visible-phone"></div>
                                   <div class="span6">
                                       <!--BEGIN TABS-->
                                       <div class="tabbable tabbable-custom tabs-right">
                                           <!-- Only required for left/right tabs -->
                                           <ul class="nav nav-tabs tabs-right">
                                               <li class="active"><a href="#tab_4_1" data-toggle="tab">Section 1</a></li>
                                               <li><a href="#tab_4_2" data-toggle="tab">Section 2</a></li>
                                               <li><a href="#tab_4_3" data-toggle="tab">Section 3</a></li>
                                           </ul>
                                           <div class="tab-content">
                                               <div class="tab-pane active" id="tab_4_1">
                                                   <p>Section 1.</p>
                                                   <p>
                                                       Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                                   </p>
                                               </div>
                                               <div class="tab-pane" id="tab_4_2">
                                                   <p> Section 2.</p>
                                                   <p>
                                                       Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                                   </p>
                                               </div>
                                               <div class="tab-pane" id="tab_4_3">
                                                   <p>Section 3.</p>
                                                   <p>
                                                       Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.   Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                       <!--END TABS-->
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- END INLINE TABS PORTLET-->
                   </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER--> 
      </div>
      
   