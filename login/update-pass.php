<?php
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
        <title>Reset Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/airplane.png">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <!-- <a href=""><i class="mdi mdi-home-variant h2 text-white"></i></a> -->
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <!-- <a href="index.html" class="logo"></a> -->
                            <h5 class="font-size-16 text-white-50 mb-4"></h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Reset Password</h5>
                                    <form class="form-horizontal" action="update-pass-auth.php">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Enter your <b>New Password</b> carefully!
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label for="useremail">Email</label>
                                                    <input name="email" type="email" class="form-control" id="useremail" value="<?php echo $_SESSION['email'] ?>" readonly>
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label for="useremail">New Password</label>
                                                    <input name="pass1" type="password" class="form-control" id="useremail" placeholder="Enter new password">
                                                </div>

                                                <div class="form-group mt-4">
                                                    <label for="useremail">Confirm Password</label>
                                                    <input name="pass2" type="password" class="form-control" id="useremail" placeholder="Renter password">
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Reset Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->


        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>

    </body>
</html>
