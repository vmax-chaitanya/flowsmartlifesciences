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
                                        action="<?php echo site_url('admin/gallery/update/' . $gallery_item['id']); ?>"
                                        enctype="multipart/form-data">
                                        <p class="card-description">Gallery Info</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="title"
                                                            value="<?php echo set_value('title', $gallery_item['title']); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="type">
                                                            <option value="">Select</option>
                                                            <option value="1" <?php echo ($gallery_item['type'] == '1') ? 'selected' : ''; ?>>Gallery</option>
                                                            <option value="2" <?php echo ($gallery_item['type'] == '2') ? 'selected' : ''; ?>>Client Logos</option>
                                                            <option value="3" <?php echo ($gallery_item['type'] == '3') ? 'selected' : ''; ?>>Tools Images</option>
                                                            <option value="4" <?php echo ($gallery_item['type'] == '4') ? 'selected' : ''; ?>>Certification</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="status">
                                                            <option value="">Select</option>
                                                            <option value="1" <?php echo ($gallery_item['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                                                            <option value="2" <?php echo ($gallery_item['status'] == '2') ? 'selected' : ''; ?>>In-Active</option>
                                                            <option value="3" <?php echo ($gallery_item['status'] == '3') ? 'selected' : ''; ?>>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Image</label>
                                                    <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="image"
                                                            placeholder="" />
                                                        <?php if ($gallery_item['image']): ?>
                                                            <img src="<?php echo base_url('' . $gallery_item['image']); ?>"
                                                                alt="Gallery Image" width="150">
                                                        <?php else: ?>
                                                            No Image
                                                        <?php endif; ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" rows="4"
                                                            required><?php echo set_value('description', $gallery_item['description']); ?></textarea>
                                                        <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                            </div>
                                            <div class="col-md-3">
                                            <input type="hidden" name="old_image" value="<?php echo set_value('old_image', $gallery_item['image']); ?>" />
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <a href="<?php echo base_url('admin/gallery'); ?>"
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