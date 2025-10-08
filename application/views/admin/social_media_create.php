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
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal Two column</h4>
                                    <?php if ($this->session->flashdata('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('index.php/admin/social_media/create_or_update_social_media'); ?>">
                                        <input type="hidden" name="id"
                                            value="<?php echo isset($social_media['id']) ? $social_media['id'] : ''; ?>">

                                        <p class="card-description">Social Media Details</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gmail</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="gmail"
                                                            value="<?php echo isset($social_media['gmail']) ? $social_media['gmail'] : ''; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Facebook</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="facebook"
                                                            value="<?php echo isset($social_media['facebook']) ? $social_media['facebook'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Twitter</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="twitter"
                                                            value="<?php echo isset($social_media['twitter']) ? $social_media['twitter'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Instagram</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="instagram"
                                                            value="<?php echo isset($social_media['instagram']) ? $social_media['instagram'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Pinterest</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="pinterest"
                                                            value="<?php echo isset($social_media['pinterest']) ? $social_media['pinterest'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">WhatsApp</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="whatsapp"
                                                            value="<?php echo isset($social_media['whatsapp']) ? $social_media['whatsapp'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Quora</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="quora"
                                                            value="<?php echo isset($social_media['quora']) ? $social_media['quora'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">LinkedIn</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="linkedin"
                                                            value="<?php echo isset($social_media['linkedin']) ? $social_media['linkedin'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-success mr-2">Save</button>
                                                <a href="<?php echo site_url('admin/social_media'); ?>"
                                                    class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
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