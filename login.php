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


<body class="bg-accpunt-pages">

<div class="row">


    <div class="card-box">

        <div class="row">
            <div class="col-sm-4">
                <a href="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-1.jpg" class="img-thumbnail" data-lightbox="#single-image">
                    <img id="single-image" src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-1.jpg" alt="image-1" class="img-fluid" />
                </a>
            </div>

            <div class="col-sm-4">
                <a href="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-2.jpg" class="img-thumbnail" data-lightbox="#single-image-2" data-title="Optional caption.">
                    <img id="single-image-2" src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-2.jpg" alt="image-1" class="img-fluid" />
                </a>
            </div>

            <div class="col-sm-4">
                <a href="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-3.jpg" class="img-thumbnail" data-lightbox="#single-image-3">
                    <img id="single-image-3" src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/small/img-3.jpg" alt="image-1" class="img-fluid" />
                </a>
            </div>
        </div>

    </div>
    <div class="col-xs-4 col-xs-4 col-xs-4">

        <!-- Simple card -->
        <div class="card m-b-20">
            <img class="card-img-top img-fluid" src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/blood-donation.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Blood Donation</h4>
                <p class="card-text">Some of these patients need the following blood types immediately.</p>
                <a href="Admin/Bootstrap_4_alpha6-Versions/templates/taskboard.html" class="btn btn-primary">Button</a>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-sm-4 col-sm-3 col-xs-12">

        <!-- Simple card -->
        <div class="card m-b-20">
            <img class="card-img-top img-fluid" src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/Capture.PNG" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Organ Donation</h4>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="Admin/Bootstrap_4_alpha6-Versions/templates/extras-members-2.html" class="btn btn-primary">Button</a>
            </div>
        </div>

    </div><!-- end col -->

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.php" class="text-success">
                                            <span><img src="Admin/Bootstrap_4_alpha6-Versions/default/assets/images/logo_dark.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <h5 class="text-uppercase font-bold m-b-5 m-t-50">Sign In</h5>
                                    <p class="m-b-0">Login to your FuturaCare account</p>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="Admin/Bootstrap_4_alpha6-Versions/templates/dashboard-2.html">

                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">UserID</label>
                                                <input class="form-control" type="text" id="emailaddress" required="" placeholder="UserID">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <a href="Admin/Bootstrap_4_alpha6-Versions/templates/page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>


                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">Don't have an account? <a href="Admin/Bootstrap_4_alpha6-Versions/templates/page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->



    <script>
        var resizefunc = [];
    </script>

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