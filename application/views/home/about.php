   <!doctype html>
   <html lang="zxx">
   <?php include('includes/head.php'); ?>

   <body>

       <?php include('includes/header.php'); ?>
       <!-- Start Page Title Area -->
       <div class="page-title-area item-bg2">
           <div class="container">
               <div class="page-title-content">
                   <h2>About Us</h2>
               </div>
           </div>

           <div class="overlay"></div>
       </div>
       <!-- End Page Title Area -->

       <!-- Start About Area -->
       <section class="about-area ptb-100">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-6 col-md-12">
                       <div class="about-content">
                           <h2>Flowsmart</h2>
                           <span class="sub-title">A little story about us</span>

                           <p>

                               An ISO 9001-2015 Certified Company is manufacturer and exporter of Food / Pharma /
                               Medical Grade rubbers products.</p>

                           <p> We believe in Superior Quality, Fastest Developement,
                               Quick Delivery, Best service & Competitive Price.
                               Flowsmart Lifesciences is the one-stop-shop for Fluid Management products like Bioprocess Bags wide assortments of silicone & viton rubber
                               products including Silicone Tubes, Hoses, FBD Inflatable Gaskets, O-rings, Molded
                               Rubber Gaskets, Extruded Rubber Gaskets, Sponge Gaskets, Rubber Door Gaskets, Triclover Gaskets, Autoclave Gasket etc.,</p>
                           <p>
                               We have successfully developed several Pharma Hoses for High Pressure, Vacuum,
                               Chemical And Antistatic Applications. Besides the Silicone Rubber Products, the
                               company also manufactures a wide range of Products in Viton, EPDM, Neoprene,
                               Nitrle, Hypalon also SBR
                               We present reliable silicone products which all are widely used in different industries
                               including petrochemicals, medical sectors, pharma, chemical etc. Our superlative
                               products are widely used in control panel, switchgears, instrumentation,
                               air conditioning etc. We keenly observe the superior quality of our products as per
                               US FDA 21 CFR 177.2600 & USP CLASS VI regulations, ensuring optimum
                               quality production.</p>

                           </p>
                           <div class="about-author d-flex align-items-center">


                               <div class="info">
                                   <!-- <h3>Lucy Eva</h3>
                                    <span>Founder Goldie</span> -->
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-6 col-md-12">
                       <div class="about-image text-center">
                           <img src="assets/img/about-img1.jpg" alt="image">
                       </div>
                   </div>
               </div>
           </div>

           <div class="shape-img1"><img src="assets/img/banner/pipes1.png" alt="image"></div>

       </section>
       <!-- End About Area -->

       <!-- Start Feedback Area -->
       <!-- <section class="feedback-area ptb-100 bg-ebf5e7">
        <div class="container">
            <div class="section-title">
                <h2>What Our Customers Say</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>

            <div class="feedback-slides owl-carousel owl-theme">

                <?php foreach ($testimonials as $val) { ?>
                    <div class="single-feedback-item mb-30">
                        <div class="rating">
                            <i class='bx star-light'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <p>
                            <?php echo $val['description']; ?>
                        </p>
                        <div class="client-info">
                        <?php if ($val['gender'] == '1') { ?>
                             <img src="<?php echo base_url(); ?>assets/images/male.jpg" alt="image">
                             <?php } else { ?>
                            <img src="<?php echo base_url(); ?>assets/images/female.jpg" alt="image">
                            <?php } ?>
                            <h3>
                                <?php echo $val['name']; ?>
                            </h3>
                            <span>Founder Lister Group</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section> -->
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