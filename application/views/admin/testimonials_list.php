<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/libertyui/template/demo/vertical-default-light/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 07:38:16 GMT -->

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
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-10">
                                    <h4 class="card-title">Data table</h4>
                                </div>
                                <div class="col-md-2 ms-auto">
                                <a href="<?php echo base_url(); ?>admin/testimonials/add"
                                        class="w-100 btn btn-primary">Add</a>
                                </div>
                            </div>



                            <!-- <a class="nav-link dropdown-toggle bg-primary" id="actionDropdown" href="#" data-toggle="dropdown">
                                <span class="btn">+ Create new</span>
                            </a> -->
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($testimonials as $testimonial) : ?>
                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo ($testimonial->type == '1') ? 'Customer' : 'Student'; ?></td>
                                                        <td><?php echo $testimonial->name; ?></td>
                                                        <td><?php echo $testimonial->description; ?></td>
                                                        <td><?php echo ($testimonial->gender == '1') ? 'Male' : 'Female'; ?></td>
                                                        <td>
                                                            <?php if ($testimonial->status == '1') : ?>
                                                                <label class="badge badge-success">Active</label>
                                                            <?php elseif ($testimonial->status == '2') : ?>
                                                                <label class="badge badge-danger">Inactive</label>
                                                            <?php else : ?>
                                                                <label class="badge badge-info">Other</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url('admin/testimonials/edit/' . $testimonial->id); ?>" class="btn btn-outline-primary">Edit</a>
                                                            <a href="<?php echo base_url('admin/testimonials/delete/' . $testimonial->id); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
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