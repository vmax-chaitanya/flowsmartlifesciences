   
<!doctype html>
<html lang="zxx">
<?php include('includes/head.php'); ?>

    <body>

        <?php include('includes/header.php'); ?>
 
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog </h2>
                </div>
            </div>

            <div class="overlay"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                <?php foreach ($blogs as $val) { ?>
                    <div class="col-lg-4 col-md-6 card">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <img src="<?php echo base_url('' . $val['image']); ?>" alt="image">
                                <a href="#" class="link-btn"></a>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="bx bx-user"></i> <a href="#">Admin</a></li>
                                    <li><i class='bx bx-calendar'></i> <?php echo date("F d, Y", strtotime($val['created_at']));?></li>
                                </ul>
                                <h3><a href="#"><?php echo $val['title'];?></a></h3>
                                <p><?php echo $val['description'];?></p>
                                <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12">
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
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Feedback Area -->

        <!-- Start Team Area -->
       
        <!-- End Team Area -->

        <!-- Start Delivery Area -->
 
        <!-- End Delivery Area -->

        <!-- Start Subscribe Area -->
        <!-- <section class="subscribe-area py-4 bg-f7fbf6">
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