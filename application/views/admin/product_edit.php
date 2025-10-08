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
                                    <?php //echo form_open_multipart('admin/banner/create'); 
                                    ?>

                                    <form class="form-sample" method="POST"
                                        action="<?php echo site_url('admin/product/update/' . $product['id']); ?>"
                                        enctype="multipart/form-data" novalidate>
                                        <p class="card-description">Blog Details</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name"
                                                            value="<?php echo $product['name']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Categories</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="category" required>
                                                            <option value="1" <?php echo ($product['cat_id'] == '1') ? 'selected' : ''; ?>>category 1</option>
                                                            <option value="2" <?php echo ($product['cat_id'] == '2') ? 'selected' : ''; ?>>category 2</option>
                                                            <option value="3" <?php echo ($product['cat_id'] == '3') ? 'selected' : ''; ?>>category 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status" required>
                                                            <option value="1" <?php echo ($product['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                                                            <option value="2" <?php echo ($product['status'] == '2') ? 'selected' : ''; ?>>In-Active</option>
                                                            <option value="3" <?php echo ($product['status'] == '3') ? 'selected' : ''; ?>>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                      
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Created By</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="created_by"
                                                            value="<?php echo $product['created_by']; ?>" required>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="4"
                                                            required><?php echo strip_tags($product['description']); ?></textarea>
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
                                                        <textarea class="form-control ce_editor" name="characteristics" rows="4"
                                                            required><?php echo set_value('characteristics'); ?><?php echo strip_tags($product['characteristics']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Application</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ce_editor" name="application" rows="4"
                                                            required><?php echo set_value('application'); ?><?php echo strip_tags($product['applications']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Certification</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ce_editor" name="certification" rows="4"
                                                            required><?php echo set_value('certification'); ?><?php echo strip_tags($product['certifications']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">KeyFeatures</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control ce_editor" name="key_feature" rows="4"
                                                            required><?php echo set_value('key_feature'); ?><?php echo strip_tags($product['key_features']); ?></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Attributes</label>
                                                    <div class="col-sm-10">
                                                        <textarea id="" class="form-control ce_editor" name="attributes" rows="4"
                                                            required><?php echo set_value('attributes'); ?></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                            <input type="hidden" class="form-control" name="old_image" value="<?php echo $product['image']; ?>">
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php echo site_url('admin/blog'); ?>"
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