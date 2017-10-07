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
                                    <img src="assets/images/logo.png" alt="" height="25">
                                </span>
                <i>
                    <img src="assets/images/logo_sm.png" alt="" height="28">
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
                            <li><a href="search_doctor.php">Doctor</a></li>
                            <li><a href="search_hospital.php">Hospital</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Test Result Entry </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="../../../full_blood_count.php">Full Blood Count</a></li>
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
                        <a href="report.php"><i class="fi-layers"></i> <span> Report </span></a>
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
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'med';

    $link = mysqli_connect($host,$username,$password,$database) or die ("could not connect");
    if ($link || mysqli_select_db($link,$database)){
        //echo "Connection successful;";
    } else {
        $message = "connection failed";
    }

    //$id=(int)$_SESSION['doc_id'];
    $query = "SELECT * FROM doctor WHERE doctor_ID=200001";
    $query_run = mysqli_query($link,$query);
    if (mysqli_num_rows($query_run) > 0) {
        $query_row = mysqli_fetch_assoc($query_run);
        $name=$query_row['name'];
        $category=$query_row['category'];
        $gender=$query_row['gender'];
    }
    ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left"><?php echo $name ?></h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box ribbon-box">
                                <div class="ribbon ribbon-custom">Doctor Detail</div>
                                <p class="m-b-0">
                                <h5>Name: </h5><?php echo '<p>'.$name.'</p>'; ?>
                                <h5>Category: </h5><?php echo '<p>'.$category.'</p>'; ?>
                                <h5>Gender: </h5><?php echo '<p>'.$gender.'</p>'; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box ribbon-box">
                                <div class="ribbon ribbon-custom">Rate Us</div>
                                <p class="m-b-0">
                                <div class="col-sm-4">
                                    <h5>Facility</h5>
                                    <div id="default"></div>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Cost</h5>
                                    <div id="scoreName"></div>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Customer Service</h5>
                                    <div id="score"></div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="m-t-0 header-title"><b>Doctors Schedule</b></h5>
                                <div class="table-responsive">
                                    <table class="table m-0 table-colored table-primary table-hover">
                                        <thead>
                                        <tr>
                                            <th>Hospital</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                            <th>Sunday</th>
                                        </tr>
                                        </thead>
                                        <?php
                                        $query_doctors = "SELECT hospital,day,start_time,end_time FROM doc_schedule where doctor_ID=200001";
                                        $query_doctors_run = mysqli_query($link, $query_doctors);

                                        while ($query_doctors_row = mysqli_fetch_assoc($query_doctors_run)){
                                            $hospital=$query_doctors_row['hospital'];
                                            $day = $query_doctors_row['day'];
                                            $start_time = $query_doctors_row['start_time'];
                                            $end_time= $query_doctors_row['end_time'];
                                            ?>
                                            <tbody>
                                            <?php if ($day=="Monday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Tuesday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Wednesday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-" ?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Thursday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-" ;?></td>
                                                    <td><?php echo $start_time," - ",$end_time;?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Friday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-" ;?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                    <td><?php echo "-" ;?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Saturday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                </tr>
                                            <?php }else if($day=="Sunday"){
                                                ?>
                                                <tr>
                                                    <td><?php echo $hospital; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-";?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo "-"; ?></td>
                                                    <td><?php echo $start_time," - ",$end_time; ?></td>
                                                </tr>
                                                <?php
                                            }?>
                                            </tbody>


                                            <?php
                                        }

                                        ?>

                                    </table>

                                </div>

                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div>
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!--Echart Chart-->
<script src="../plugins/echart/echarts-all.js"></script>
<!-- Echart init -->
<script src="assets/pages/jquery.echart.init.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- Flot chart -->
<script src="../plugins/flot-chart/jquery.flot.min.js"></script>
<script src="../plugins/flot-chart/jquery.flot.time.js"></script>
<script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="../plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="../plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
<script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
<script src="../plugins/flot-chart/curvedLines.js"></script>
<script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>
<script src="../plugins/raty-fa/jquery.raty-fa.js"></script>
<script src="assets/pages/jquery.flot.init.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- Rating js -->
<script src="../plugins/raty-fa/jquery.raty-fa.js"></script>
<!-- page init -->
<script src="assets/pages/jquery.rating.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>




</body>
</html>