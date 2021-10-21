<?php
// include('../login/login.php');
session_start();
?>
<?php
    $link = mysqli_connect("localhost", "root", "", "AAMS");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Your Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/airplane.png">
        <!-- slick css -->
        <link href="../assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/airr.png" alt="" height="60">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <h1 style="color:#1560BD;">Profile</h1>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="../assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION['email'] ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../login/logout.php"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="admin-profile.php" class="waves-effect" style="color:white">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right"></span>
                                    <span>Your Profile</span>
                                </a>
                            </li>

                            <!-- <li>
                                <a href="view-flight-status.php" class=" waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Go To Dashboard</span>
                                </a>
                            </li> -->

                        </ul>

                        <div class="sidebar-section mt-5 mb-3">
                            <!-- <h6 class="text-reset font-weight-medium">
                                Project Completed
                                <span class="float-right">67%</span>
                            </h6>
                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <?php
                                    $mail = $_SESSION['email'];
                                    $result = mysqli_query($link,"SELECT * FROM employees WHERE email='$mail'");
                                    if (mysqli_num_rows($result) > 0) {
                                ?>
                                <?php
                                        $i=0;
                                        while($row = mysqli_fetch_array($result)) {
                                ?>
                                <form action="config/update-profile.php" method="post">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h3>View / Update Your Profile</h3><br>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">First Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="first_name" value="<?php echo $row["fname"]; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Last Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="last_name" value="<?php echo $row["lname"]; ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" id="example-text-input" name="email" value="<?php echo $row["email"]; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Age</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="age" value="<?php echo $row["age"]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="addr" value="<?php echo $row["address"]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Mobile Number</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="mob_no" value="<?php echo $row["mobile_no"]; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input" name="desig" value="<?php echo $row["desig"]; ?>" readonly>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3 mt-sm-0">Update</button>
                                    </div>
                                </div>
                                
                                </form>
                                <?php
                                    $i++;
                                    }
                                ?>
                                <?php
                                    }
                                else{
                                    echo "No result found";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- end page title -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- Right bar overlay-->
        <!-- <div class="rightbar-overlay"></div> -->
        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="../assets/libs/slick-slider/slick/slick.min.js"></script>

        <!-- Jq vector map -->
        <script src="../assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="../assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="../assets/js/pages/dashboard.init.js"></script>

        <script src="../assets/js/app.js"></script>
    </body>
</html>