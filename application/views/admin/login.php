<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo//template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:38:29 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/feather/feather.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="https://www.bootstrapdash.com/demo//template/images/logo-inverse.svg" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <?php if ($this->session->flashdata('error')) : ?>
                                <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                            <?php endif; ?>
                            <form class="pt-3" method="post" action="<?php echo site_url('admin/do_login'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="username_email" name="username_email" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="mt-3">
                                    <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN IN</a> -->
                                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN IN">
                                </div>
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/template.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/todolist.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo//template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:38:29 GMT -->

</html>