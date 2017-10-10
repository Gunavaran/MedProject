<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Futura MyCare </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="mycare.png">

    <!-- C3 charts css -->
    <link href="Admin/Bootstrap_4_alpha6-Versions/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- App css -->
    <link href="../Admin/Bootstrap_4_alpha6-Versions/default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../Admin/Bootstrap_4_alpha6-Versions/default/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../Admin/Bootstrap_4_alpha6-Versions/default/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../Admin/Bootstrap_4_alpha6-Versions/default/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="../index_doctor.php" class="logo">
                                <span>
                                    <img src="mycare.png" alt="" height="55" width="200">
                                </span>
                <i>
                    <img src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/images/logo_sm.png" alt="" height="28">
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
                        <img src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
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
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-target"></i> <span> Patients </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">

                            <?php
                            include 'Connect.php';
                            $query_patientID = "SELECT patient_ID FROM patient where patient_ID in (SELECT patient_ID from doc_pat where doctor_ID ='200001')";
                            $query_patientID_run = mysqli_query($link, $query_patientID);
                            while ($query_patientID_row = mysqli_fetch_assoc($query_patientID_run)){
                                ?>
                                <li><a href="admin-grid.html"><?php echo $query_patientID_row['patient_ID'] ?></a></li>

                                <?php
                            }
                            ?>


                        </ul>
                    </li>

                    <li>
                        <a href="taskboard.html"><i class="fi-paper"></i> <span> More </span></a>
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
                            <h4 class="page-title float-left">Dashboard</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <form action="search.php" method="post" name="fixedform">
                    <input type="text" name="Find">
                    <input type="submit" value="Search">
                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Patients</b></h4>

                            <div class="table-responsive">
                                <table class="table m-0 table-colored table-primary table-hover">
                                    <thead>
                                    <tr>
                                        <th>Hospital</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Facility Rating</th>
                                        <th>Expense Rating</th>
                                        <th>Customer Service rating</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <?php

                                    include 'Connect.php';

                                    if (isset($_POST['Find'])) {
                                        $find = $_POST['Find'];
                                      //  $query_cost = "SELECT a_cost FROM (SELECT AVG(cost) AS a_cost FROM hospital_rating GROUP BY hospital_ID)";
                                       // $query_facility = "SELECT a_facility FROM (SELECT AVG(facility) AS a_facility FROM hospital_rating GROUP BY hospital_ID)";
                                       // $query_custom = "SELECT a_custom FROM (SELECT AVG(customer_service) AS a_custom FROM hospital_rating GROUP BY hospital_ID)";
                                            $query_hospitals = "select name, location, hospital_ID, contact, cost , facility, customer_service from hospital NATURAL JOIN hospital_rating where location LIKE '%$find%' order by facility DESC ";
                                            $query_hospital_run = mysqli_query($link, $query_hospitals);

                                        while ($query_hospital_row = mysqli_fetch_assoc($query_hospital_run)) {
                                            $name = $query_hospital_row['name'];
                                            $address = $query_hospital_row['location'];
                                            $id = $query_hospital_row['hospital_ID'];
                                            $contact_no = $query_hospital_row['contact'];
                                            $facility = $query_hospital_row['facility'];
                                            $cost = $query_hospital_row['cost'];
                                            $customer_service = $query_hospital_row['customer_service'];

                                            ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $address; ?></td>
                                                <td><?php echo $contact_no; ?></td>
                                                <td><?php echo $facility; ?></td>
                                                <td><?php echo $cost; ?></td>
                                                <td><?php echo $customer_service; ?></td>

                                            </tr>
                                            </tbody>


                                            <?php
                                        }
                                    }

                                    ?>

                                </table>

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

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
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.min.js"></script>
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/bootstrap.min.js"></script>
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/metisMenu.min.js"></script>
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/waves.js"></script>
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.slimscroll.js"></script>

<!-- Counter js  -->
<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../plugins/counterup/jquery.counterup.min.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="../plugins/c3/c3.min.js"></script>

<!--Echart Chart-->
<script src="../plugins/echart/echarts-all.js"></script>

<!-- Dashboard init -->
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.core.js"></script>
<script src="../Admin/Bootstrap_4_alpha6-Versions/default/assets/js/jquery.app.js"></script>

<script src="Admin/Bootstrap_4_alpha6-Versions/plugins/raty-fa/jquery.raty-fa.js"></script>

</body>
</html>