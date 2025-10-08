<!DOCTYPE html>
<html lang="en">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include('includes/styles.php'); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php include('includes/settings.php'); ?>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include('includes/side_menu.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-12 grid-margin">
                            <div class="card card-statistics">
                                <div class="row">
                                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                                <i
                                                    class="mdi mdi-account-multiple-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                                <div class="wrapper text-center text-sm-left">
                                                    <p class="card-text mb-0">New Users</p>
                                                    <div class="fluid-container">
                                                        <h3 class="card-title mb-0">65,650</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                                <i
                                                    class="mdi mdi-checkbox-marked-circle-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                                <div class="wrapper text-center text-sm-left">
                                                    <p class="card-text mb-0">New Feedbacks</p>
                                                    <div class="fluid-container">
                                                        <h3 class="card-title mb-0">32,604</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                                <i class="mdi mdi-trophy-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                                <div class="wrapper text-center text-sm-left">
                                                    <p class="card-text mb-0">Employees</p>
                                                    <div class="fluid-container">
                                                        <h3 class="card-title mb-0">17,583</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                                        <div class="card-body">
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                                <i class="mdi mdi-target text-primary mr-0 mr-sm-4 icon-lg"></i>
                                                <div class="wrapper text-center text-sm-left">
                                                    <p class="card-text mb-0">Total Sales</p>
                                                    <div class="fluid-container">
                                                        <h3 class="card-title mb-0">61,119</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('includes/footer.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('includes/scripts.php'); ?>
    <!-- End custom js for this page-->
</body>




</html>