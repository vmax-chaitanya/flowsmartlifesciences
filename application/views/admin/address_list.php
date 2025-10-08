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
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-10">
                                    <h4 class="card-title">Data table</h4>
                                </div>
                                <div class="col-md-2 ms-auto">
                                <a href="<?php echo base_url(); ?>admin/address/add" class="w-100 btn btn-primary">Create</a>
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
                                                    <th>Email</th>
                                                    <th>Contact 1</th>
                                                    <th>Contact 2</th>
                                                    <th>Company Name</th>
                                                    <th>Address</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($addresses as $address) : ?>
                                                    <tr>
                                                        <td><?php echo $address['id']; ?></td>
                                                        <td><?php echo $address['email']; ?></td>
                                                        <td><?php echo $address['contact_1']; ?></td>
                                                        <td><?php echo $address['contact_2']; ?></td>
                                                        <td><?php echo $address['company_name']; ?></td>
                                                        <td><?php echo $address['address']; ?></td>
                                                        <td>
                                                            <?php if ($address['status'] == '1') : ?>
                                                                <span class="badge badge-success">Active</span>
                                                            <?php elseif ($address['status'] == '2') : ?>
                                                                <span class="badge badge-danger">Inactive</span>
                                                            <?php else : ?>
                                                                <span class="badge badge-info">Other</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('admin/address/edit/' . $address['id']); ?>" class="btn btn-outline-primary">Edit</a>
                                                            <a href="<?php echo site_url('admin/address/delete/' . $address['id']); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this address?')">Delete</a>
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