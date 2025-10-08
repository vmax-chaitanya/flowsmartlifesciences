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
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php //echo form_open_multipart('admin/banner/create'); ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/product/store'); ?>"
                                        enctype="multipart/form-data" novalidate>
                                        <p class="card-description">Blog Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo set_value('name'); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="category">
                                                            <option value="">Select</option>
                                                            <option value="1">Category 1</option>
                                                            <option value="2">Category 2</option>
                                                            <option value="3">Category 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status">
                                                            <option value="">Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="2">In-Active</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control" name="description" rows="4"
                                                            required><?php echo set_value('description'); ?></textarea>
                                                        <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Characteristics</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="characteristics" rows="4"
                                                            required><?php echo set_value('characteristics'); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Application</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="application" rows="4"
                                                            required><?php echo set_value('application'); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Certification</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="certification" rows="4"
                                                            required><?php echo set_value('certification'); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">KeyFeatures</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="key_feature" rows="4"
                                                            required><?php echo set_value('key_feature'); ?></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">KeyFeatures</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="key_feature" rows="4"
                                                            required><?php echo set_value('key_feature'); ?></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Attributes</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="editor" class="form-control ce_editor" name="attributes" rows="4"
                                                            required><?php echo set_value('attributes'); ?></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file"  name='files[]' multiple="" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Created By</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="created_by"
                                                            value="<?php echo set_value('created_by'); ?>" required>
                                                        <?php echo form_error('created_by', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-success mr-2">Create</button>
                                                <a href="<?php echo site_url('admin/blogs'); ?>"
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