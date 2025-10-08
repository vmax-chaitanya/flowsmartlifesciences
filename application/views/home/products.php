<!doctype html>
<html lang="zxx">
<?php include('includes/head.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <!-- search-box-layout -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg4">
        <div class="container">
            <div class="page-title-content">
                <h2>All Products</h2>
            </div>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Products Area -->
    <section class="products-area ptb-100 bg-ebf5e7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="woocommerce-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-5">
                                <div class="topbar-result-count">
                                    <p>Showing 1 – <?php echo count($products); ?> of <?php echo count($products); ?></p>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-7">

                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php
                        foreach ($products as $key => $product) {
                            // print_r($images[$product['id']]);

                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-products-box mb-30">
                                    <div class="products-image text-center">
                                        <a href="<?php echo base_url(); ?>product/<?= $product['id'] ?>   " class="d-block">
                                            <img src="<?php if (isset($images[$product['id']][0])) {
                                                            echo base_url() . $images[$product['id']][0];
                                                        } ?>" alt="image">
                                        </a>
                                    </div>

                                    <div class="products-content">
                                        <h3><a href="<?php echo base_url(); ?>product/<?= $product['id'] ?>"><?= ucwords($product['name']) ?></a></h3>
                                        <!-- <div class="dot"></div> -->
                                        <!-- <ul>
                                            <li>Type: <span>Indica</span></li>
                                            <li>CBD: <span>7%</span></li>
                                            <li>THC: <span>25%</span></li>
                                        </ul> -->
                                        <!-- <div class="price">
                                            $18 - $120
                                        </div> -->
                                    </div>

                                    <div class="select-options-btn">
                                        <a href="<?php echo base_url(); ?>product/<?= $product['id'] ?>"> View Details</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 d-none">
                            <div class="pagination-area">
                                <nav>
                                    <ul>
                                        <li><a href="#" class="page-numbers">01</a></li>
                                        <li><span class="page-numbers current">02</span></li>
                                        <li><a href="#" class="page-numbers">03</a></li>
                                        <li><a href="#" class="page-numbers">04</a></li>
                                        <li><span class="page-numbers dots">…</span></li>
                                        <li><a href="#" class="page-numbers">11</a></li>
                                        <li><a href="#" class="page-numbers">12</a></li>
                                        <li><a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Products Area -->

    <!-- Start Subscribe Area -->
    <!-- <section class="subscribe-area py-4 bg-f7fbf6 d-none">
            <div class="container">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="subscribe-content">
                            <h2>Subscribe to our Newsletter</h2>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 p-0">
                        <div class="subscribe-image text-center">
                            <img src="assets/img/img3.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="subscribe-form">
                            <form class="newsletter-form" data-bs-toggle="validator">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                <button type="submit">Subscribe <i class='bx bx-paper-plane'></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- End Subscribe Area -->

    <!-- Start Footer Area -->
    <?php include('includes/footer.php'); ?>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <?php include('includes/scripts.php'); ?>
</body>

</html>