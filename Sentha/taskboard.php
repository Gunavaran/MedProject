<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Adminox - Responsive Web App Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css-->
    <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                                <span>
                                    <img src="assets/images/mycare.png" alt="" height="60">
                                </span>
                <i>
                    <img src="assets/images/mycare.png" alt="" height="28">
                </i>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="badge badge-pink noti-icon-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                            <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Navigation</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded=false>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="dashboard-2.html">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Admin UI </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="admin-grid.html">Grid</a></li>
                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="admin-tiles.html">Tiles Box</a></li>
                            <li><a href="admin-nestable.html">Nestable List</a></li>
                            <li><a href="admin-rangeslider.html">Range Slider</a></li>
                            <li><a href="admin-ratings.html">Ratings</a></li>
                            <li><a href="admin-filemanager.html">File Manager</a></li>
                            <li><a href="admin-lightbox.html">Lightbox</a></li>
                            <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                            <li><a href="admin-slider.html">Slider</a></li>
                            <li><a href="admin-treeview.html">Treeview</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Kit </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-panels.html">Panels</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-portlets.html">Portlets</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-notifications.html">Notification</a></li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            <li><a href="ui-video.html">Video</a>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="tickets.html"><i class="fi-help"></i><span class="badge badge-danger pull-right">New</span> <span> Tickets </span></a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-colored.html">Colored Icons</a></li>
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                            <li><a href="icons-flags.html">Flag Icons</a></li>
                            <li><a href="icons-file.html">File Icons</a></li>
                            <li><a href="icons-pe7.html">PE7 Icons</a></li>
                            <li><a href="icons-typicons.html">Typicons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Graphs </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-google.html">Google Chart</a></li>
                            <li><a href="chart-echart.html">Echarts</a></li>
                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-c3.html">C3 Chart</a></li>
                            <li><a href="chart-justgage.html">Justgage Charts</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                            <li><a href="email-compose.html">Compose Email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="taskboard.html"><i class="fi-paper"></i> <span> Task Board </span></a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-warning pull-right">12</span> <span> Forms </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-layouts.html">Form Layouts</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-typeahead.html">Typeahead</a></li>
                            <li><a href="form-x-editable.html">X Editable</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-foo-tables.html">Foo Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                            <li><a href="tables-editable.html">Editable Tables</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-google-full.html">Full Google Map</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li><a href="calendar.html"><i class="fi-clock"></i> <span>Calendar</span> </a></li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-logout.html">Logout</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span> Extra Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-about.html">About Us</a></li>
                            <li><a href="extras-contact.html">Contact</a></li>
                            <li><a href="extras-companies.html">Companies</a></li>
                            <li><a href="extras-members.html">Members</a></li>
                            <li><a href="extras-members-2.html">Membars 2</a></li>
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-email-template.html">Email Templates</a></li>
                            <li><a href="extras-search-result.html">Search Results</a></li>
                            <li><a href="extras-sitemap.html">Site Map</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="todo.html"><i class="fi-layers"></i> <span> Todo </span></a>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Taskboard</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                <li class="breadcrumb-item active">Taskboard</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <a href="#" class="pull-right btn btn-secondary btn-sm waves-effect waves-light"></a>
                            <h4 class="text-dark header-title m-t-0">Later need</h4>
                            <p class="text-muted m-b-30 font-13">
                                The following people are need fund donations but it is not need immedietly. If you want you can help them within a month.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="upcoming">
                                <li class="task-warning" id="task1">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    This request is from a 42 years old woman from Nittambuwa. She has to transplant her heart within 1-2 month. She need helping hands from the donors.
                                    <div class="clearfix"></div>
                                    <div class="m-t-20">
                                        <p class="pull-right m-b-0 m-t-10">
                                            <button type="button" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="#task-detail-modal">View</button>
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0">Emergency</h4>
                            <p class="text-muted m-b-30 font-13">
                                There are some people who needs immediate help from you within 2-3 days. Please help them as much as possible.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="inprogress">
                                <li id="task9">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    This child has a hole in the heart. He must do an operation within 2 days to survive. Please give him a hand.
                                    <div class="clearfix"></div>
                                    <div class="m-t-20">
                                        <p class="pull-right m-b-0 m-t-10">
                                            <button type="button" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="#task-detail-modal">View</button>
                                        </p>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0">At Hospital</h4>
                            <p class="text-muted m-b-30 font-13">
                                These people are at the hospital now after some treatement but they need more money to conitnue with their treatment and medications.
                            </p>

                            <ul class="sortable-list taskList list-unstyled" id="completed">
                                <li class="task-warning" id="task14">
                                    <div class="checkbox checkbox-custom checkbox-single pull-right">
                                        <input type="checkbox" aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    This man is from Kankesanthurai and he was affected by brain tumour and he had the operation and now he is in the Thellilpalai Base Hospital.
                                    <div class="clearfix"></div>
                                    <div class="m-t-20">
                                        <p class="pull-right m-b-0 m-t-10">
                                            <button type="button" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="#task-detail-modal">View</button>
                                        </p>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <!-- Modal -->
                <div id="task-detail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div class="modal-body">

                                <div class="p-10 task-detail">
                                    <div class="media m-t-0 m-b-20">
                                        <img class="d-flex mr-3 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="48">
                                        <div class="media-body">
                                            <h5 class="media-heading m-b-5 mt-0">Michael Zenaty</h5>
                                            <span class="label label-danger">Urgent</span>
                                        </div>
                                    </div>

                                    <h4 class="font-600 m-b-20">Code HTML email template for welcome email</h4>

                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste
                                        itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                                        delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo
                                        rerum? Lorem ipsum dolor sit amet.
                                    </p>

                                    <ul class="list-inline task-dates m-b-0 m-t-20">
                                        <li>
                                            <h5 class="font-600 m-b-5">Start Date</h5>
                                            <p> 22 March 2017 <small class="text-muted">1:00 PM</small></p>
                                        </li>

                                        <li>
                                            <h5 class="font-600 m-b-5">Due Date</h5>
                                            <p> 17 April 2017 <small class="text-muted">12:00 PM</small></p>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>

                                    <div class="task-tags m-t-20">
                                        <h5 class="font-600">Tags</h5>
                                        <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                                    </div>

                                    <div class="assign-team m-t-30">
                                        <h5 class="font-600 m-b-5">Followers</h5>
                                        <div>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-5.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-8.jpg"> </a>
                                        </div>
                                    </div>

                                    <div class="attached-files m-t-30">
                                        <h5 class="font-600">Attached Files </h5>
                                        <div class="files-list">
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 m-b-5 text-muted"><small>File one</small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 m-b-5 text-muted"><small>Attached-2</small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-3.png" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 m-b-5 text-muted"><small>Dribbble shot</small></p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2017 © TEAM HOPE
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- Bootstrap tagsinput -->
<script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<!-- Jquery Ui js -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script>
    $(document).ready(function () {

        $("#upcoming, #inprogress, #completed").sortable({
            connectWith: ".taskList",
            placeholder: 'task-placeholder',
            forcePlaceholderSize: true,
            update: function (event, ui) {

                var todo = $("#todo").sortable("toArray");
                var inprogress = $("#inprogress").sortable("toArray");
                var completed = $("#completed").sortable("toArray");
            }
        }).disableSelection();

    });
</script>

</body>
</html>