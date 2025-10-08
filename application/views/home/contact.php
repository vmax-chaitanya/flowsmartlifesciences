   <!doctype html>
   <html lang="zxx">
   <?php include('includes/head.php'); ?>

   <body>

       <?php include('includes/header.php'); ?>
       <!-- Start Page Title Area -->
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
                   <h2>Contact Us</h2>
               </div>
           </div>

           <div class="overlay"></div>
       </div>
       <!-- End Page Title Area -->

       <!-- Start Contact Info Area -->
       <section class="contact-info-area pt-100 pb-70">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6">
                       <div class="contact-info-box mb-30">
                           <div class="icon">
                               <i class='bx bx-envelope'></i>
                           </div>

                           <h3>Email Here</h3>

                           <p><a href="#"><span class="__cf_email__">
                                       info@flowsmartlifesciences.com</span></a></p>

                       </div>
                   </div>

                   <div class="col-lg-6 col-md-6 col-sm-6">
                       <div class="contact-info-box mb-30">
                           <div class="icon">
                               <i class='bx bx-map'></i>
                           </div>

                           <h3>Location Here</h3>
                           <p><a href="#" target="_blank">Plot no: 22-6-176, Deshaipet, Hanamkonda, Telangana, India</a></p>
                       </div>
                   </div>

                   <!-- <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="contact-info-box mb-30">
                            <div class="icon">
                                <i class='bx bx-phone-call'></i>
                            </div>

                            <h3>Call Here</h3>
                            <p><a href="tel:1234567890">+123 456 7890</a></p>
                            <p><a href="tel:2414524526">+241 452 4526</a></p>
                        </div>
                    </div> -->
               </div>
           </div>
       </section>
       <!-- End Contact Info Area -->

       <!-- Start Contact Area -->
       <section class="contact-area pb-100">
           <div class="container">
               <div class="section-title">
                   <span class="sub-title">Contact Us</span>
                   <h2>Drop us Message for any Query</h2>
                   <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
               </div>

               <div class="contact-form">
                   <form id="contactForm" name="contact">
                       <!-- <form action="#" id="contact-form" name="contact"> -->
                       <div class="row">
                           <div class="col-lg-6 col-md-6">
                               <div class="form-group">
                                   <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="form-group">
                                   <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="form-group">
                                   <input type="text" name="mobile" id="mobile" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="form-group">
                                   <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>

                           <div class="col-lg-12 col-md-12">
                               <div class="form-group">
                                   <textarea name="message" class="form-control" id="message" cols="30" rows="6" data-error="Write your message" placeholder="Your Message"></textarea>
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>

                           <div class="col-lg-12 col-md-12">
                               <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                               <div id="msgSubmit" class="h3 text-center hidden"></div>
                               <div class="clearfix"></div>
                           </div>
                       </div>
                   </form>
               </div>
           </div>

           <div class="contact-bg-image"><img src="assets/img/map.png" alt="image"></div>
       </section>
       <!-- End Contact Area -->


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