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
    <link rel="shortcut icon" href="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/favicon.ico">

    <!-- App css -->
    <link href="Admin/Bootstrap_4_alpha6-Versions/default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/Bootstrap_4_alpha6-Versions/default/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="Admin/Bootstrap_4_alpha6-Versions/default/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/Bootstrap_4_alpha6-Versions/default/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/modernizr.min.js"></script>

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
                                    <img src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/logo.png" alt="" height="25">
                                </span>
                <i>
                    <img src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/logo_sm.png" alt="" height="28">
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
                        <img src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
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
                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Search </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Hospital</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Test Result Entry </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="#">Sugar</a></li>
                            <li><a href="#">Pressure</a></li>
                            <li><a href="#">Cholesterol</a></li>
                            <li><a href="#">Weight</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Add patient Detail </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="#">Allergies</a></li>
                            <li><a href="#">Past Surgical History</a></li>
                            <li><a href="#">Current Medication</a></li>
                            <li><a href="#">Anomalies</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fi-layers"></i> <span> Report </span></a>
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
                            <h4 class="page-title float-left">Basic Inputs</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Full Blood Count Blood Report</b></h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form" action="full_blood_count.php">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">TOTAL WHITE CELL COUNT</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="total_white_cell">
                                                </div>
                                            </div>
                                            <h5>DIFFERENTIAL COUNT </h5>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">NEUTROPHILS</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="neutrophils">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">LYMPHOCYTES</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="lymphocytes">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">MONOCYTES</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="monocytes">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">EOSINOPHILS</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">BASOPHILS</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            <h5>HAEMOGLOBIN AND RBC PARAMETEERS </h5>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">HAEMOGLOBIN</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">RED BLOOD CELLS</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">MEAN CELL VOLUME</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">HAEMATOCRIT</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">MEAN CELL HAEMOGLOBIN</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">M.C.H. CONCENTRATION</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">RED CELLS DISTRIBUTION WIDTH</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">PLATELET COUNT</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <input type="submit" value="SUBMIT"/>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2017 © Adminox. - Coderthemes.com
        </footer>

    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.min.js"></script>
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/bootstrap.min.js"></script>
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/metisMenu.min.js"></script>
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/waves.js"></script>
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.core.js"></script>
<script src="Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.app.js"></script>

</body>
</html>