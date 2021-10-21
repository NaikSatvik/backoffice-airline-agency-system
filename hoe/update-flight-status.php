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
        <title>HOE Dashboard</title>
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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                                <h1 style="color:#1560BD;">HOE Dashboard</h1>
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

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
                <div class="modal-dialog modal-lg">  
                <div class="modal-content">  
                    <div class="modal-header">  
                    <!-- <button type="button" class="close" data-dismiss="modal">×</button>   -->
                    <h4 class="modal-title">Edit Faculty</h4>
                    </div>  
                    <div class="modal-body">  
                    <!-- <p>This is a large modal.</p>   -->
                    <form class="custom-validation" action="config/update-status.php" method="POST">
                        <div class="form-group">
                            <label>Flight ID</label>
                            <input type="text" class="form-control" id="fname" name="f_id" readonly/>
                        </div>

                        <div class="form-group">
                            <label>From</label>
                            <input type="text" class="form-control" id="lname" name="last_name" readonly/>
                        </div>

                        <div class="form-group">
                            <div>
                                <label>To</label>
                                <input type="text" class="form-control" id="email" name="email" readonly />
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div>
                                <label>Source (Timestamp)</label>
                                <input type="text" class="form-control" id="age" name="src"/>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label>Destination (Timestamp)</label>
                            <div>
                                <input type="text" class="form-control" id="addr" name="des"/>
                            </div>
                        </div>          
    
                        <div class="form-group">
                            <label>State</label>
                            <div>
                                <input type="text" class="form-control" id="mobno" readonly/>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label>Reason</label>
                            <div>
                                <input type="text" class="form-control" id="desig" name="reason"/>
                            </div>
                        </div>
    
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>  
                    <div class="modal-footer">  
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                    </div>  
                </div>  
                </div>  
            </div>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="update-flight-status.php" class=" waves-effect" style="color:white">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Manage Flight Status</span>
                                </a>
                            </li>

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

                        <!-- <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <input type="text" class="form-control" id="filter" placeholder="Search...">
                            </div>
                        </div>  -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Manage Flight Status</h3><br>
                                        <div class="table-rep-plugin">
                                        <script>
                                            $(document).ready(function() {
                                                (function($) {
                                                    $("#example tbody").addClass("search");
                                                    $('#filter').keyup(function() {
                                                        var rex = new RegExp($(this).val(),'i');
                                                        $('.search tr').hide();
                                                        $('.search tr').filter(function(i, v) {
                                                            var $t = $(this).children(":eq("+"5"+")");  //which column reference
                                                            return rex.test($t.text());
                                                        }).show();
                                                    });
                                                }(jQuery));
                                            });
                                        </script>
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <?php
                                                $result = mysqli_query($link,"SELECT * FROM flights");
                                                if (mysqli_num_rows($result) > 0) {
                                            ?>
                                                <table id="example" class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th data-priority="1">Flight Id</th>
                                                        <th data-priority="3">From</th>
                                                        <th data-priority="1">To</th>
                                                        <th data-priority="3">Source (Time)</th>
                                                        <th data-priority="3">Destination (Time)</th>
                                                        <th data-priority="6">
                                                            State
                                                            <input style="width:20%; display:inline;" class="form-control form-control-sm" type="text" placeholder="Search" id="filter">
                                                        </th>
                                                        <th data-priority="7">Reason</th>
                                                        <th data-priority="8">#Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $i=0;
                                                        while($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <th class="nr1"><span class="co-name"><?php echo $row["flightid"]; ?></span></th>
                                                        <td class="nr2"><?php echo $row["FFrom"]; ?></td>
                                                        <td class="nr3"><?php echo $row["Too"]; ?></td>
                                                        <td class="nr4"><?php echo $row["date_time_src"]; ?></td>
                                                        <td class="nr5"><?php echo $row["date_time_des"]; ?></td>
                                                        <?php
                                                            if ($row["stat"] === '0') {
                                                                ?>
                                                                <td class="nr6">Cancelled</td>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <td class="nr6">Updated</td>
                                                                <?php
                                                            }
                                                        ?>
                                                        <td class="nr7"><?php echo $row["reason"]; ?></td>
                                                        <td>
                                                            <span class="use-address"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button></span>
                                                            <!-- <span class="use-address"><button type="button" class="btn btn-outline-danger waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">Cancel</button></span> -->
                                                            <span>
                                                            <form action="config/delete.php" style="display:inline;">
                                                                <input type="text" name="f_id" value="<?php echo $row["flightid"]; ?>" readonly hidden/>
                                                                <input type="email" name="email" value="<?php echo $row["email"]; ?>" readonly hidden/>
                                                                <button type="submit" class="btn btn-outline-danger waves-effect waves-light">Cancel</button>
                                                            </form>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $i++;
                                                        }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <script>
                                                    $(".use-address").click(function() {
                                                        var $row = $(this).closest("tr"); // Find the row
                                                        var $id = $row.find(".nr1").text(); // Find the id
                                                        var $name = $row.find(".nr2").text();
                                                        var $email = $row.find(".nr3").text();
                                                        var $desgi = $row.find(".nr4").text();
                                                        var $qua = $row.find(".nr5").text();
                                                        var $exp = $row.find(".nr6").text();
                                                        var $spe = $row.find(".nr7").text();
                                            
                                                        $("#fname").val($id);
                                                        $("#lname").val($name)
                                                        $("#email").val($email); 
                                                        $("#age").val($desgi);
                                                        $("#addr").val($qua);
                                                        $("#mobno").val($exp);
                                                        $("#desig").val($spe);
                                                    });
                                                </script>
                                                <?php
                                                    }
                                                    else{
                                                        echo "No result found";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
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