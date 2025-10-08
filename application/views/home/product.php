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
        <div class="page-title-area item-bg3">
            <div class="container">
                <div class="page-title-content">
                    <h2>Product Details</h2>
                </div>
            </div>

            <div class="overlay"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70 bg-ebf5e7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="products-details-image">
                            <ul class="slickslide">
                            <?php  foreach($product_images as $key=>$image){ ?>
                                <li><img src="<?php if(isset($image['image'])){ echo base_url().$image['image'];}?>" alt="image"></li>
                            <?php } ?>
                            </ul>

                            <div class="slick-thumbs">
                                <ul>
                                <?php  foreach($product_images as $key=>$image){ ?>
                                <li><img src="<?php if(isset($image['image'])){ echo base_url().$image['image'];}?>" alt="image"></li>
                            <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="product-details-desc">
                            <h3><?=($product['name'])?$product['name']: '';?></h3>

                            <div class="price">
                                <!-- <span class="new-price">$110.00</span>
                                <span class="old-price">$150.00</span> -->
                            </div>

                            <div class="product-review d-none">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>

                                <a href="#" class="rating-count">3 reviews</a>
                            </div>

                            <p><?=($product['description'])?$product['description']: '';?></p>

                            <div class="product-meta d-none" >
                                <span>SKU: <span class="sku">10</span></span>
                                <span>Availability: <span class="in-stock">In Stock</span></span>
                                <span>Category: <a href="#">Business</a></span>
                                <span>Tag: <a href="#">Book</a></span>
                            </div>

                            <div class="product-add-to-cart d-none">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn"><i class='bx bx-plus icon-arrow before'></i><span class="label">Add to Cart</span><i class="bx bx-plus icon-arrow after"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="tab products-details-tab">
                            <ul class="tabs">
                                <!-- <li><a href="#">
                                     Description
                                </a></li>
                                
                                <li><a href="#">
                                     Characteristics
                                </a></li> -->

                                <li><a href="#">
                                     Applications
                                </a></li>
                                <li><a href="#">
                                     Certifications
                                </a></li>
                                <li><a href="#">
                                     Key Features
                                </a></li>
                            </ul>

                            <div class="tab-content">
                                <!-- <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p><?=($product['description'])?$product['description']: '';?></p>
                                    </div>
                                </div>

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <?=($product['description'])?$product['characteristics']: '';?>
                                    </div>
                                </div> -->

                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <?=($product['description'])?$product['applications']: '';?>
                                    </div>
                                </div>
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <?=($product['description'])?$product['certifications']: '';?>
                                    </div>
                                </div>
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <?=($product['description'])?$product['key_features']: '';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-products">
                <div class="container">
                    <div class="section-title text-left">
                        <!-- <span class="sub-title">Our PR</span> -->
                        <h2>Related Products</h2>
                    </div>

                    <div class="row">
                        <?php
                    foreach($products as $key=>$product){ 
                                if($key < 3){
                                ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-products-box mb-30">
                                <div class="products-image text-center">
                                <a href="<?php echo base_url(); ?>product/<?=$product['id']?>" class="d-block">
                                            <img src="<?php if(isset($images[$product['id']][0])){ echo base_url().$images[$product['id']][0];}?>" alt="image">
                                        </a>
                                </div>
    
                                <div class="products-content">
                                    <h3><a href="<?php echo base_url(); ?>product/<?=$product['id']?>"><?=$product['name']?></a></h3>
                                    <!-- <div class="dot"></div> -->
                                    <ul>
                                        <!-- <li>Type: <span>Indica</span></li>
                                        <li>CBD: <span>7%</span></li>
                                        <li>THC: <span>25%</span></li> -->
                                    </ul>
                                    <!-- <div class="price">
                                        $18 - $120
                                    </div> -->
                                </div>
    
                                <div class="select-options-btn ">
                                    <a href="<?php echo base_url(); ?>product/<?=$product['id']?>"><i class='bx bx-select-multiple'></i> View Details</a>
                                </div>
                            </div>
                        </div>
    
                        
    
                        <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3 d-none">
                            <div class="single-products-box mb-30">
                                <div class="products-image text-center">
                                    <a href="single-product.html" class="d-block"><img src="assets/img/products/3.jpg" alt="image"></a>
                                </div>
    
                                <div class="products-content">
                                    <h3><a href="single-product.html">Sour Diesel - AA+</a></h3>
                                    <div class="dot"></div>
                                    <ul>
                                        <li>Type: <span>Diesel</span></li>
                                        <li>CBD: <span>25%</span></li>
                                        <li>THC: <span>50%</span></li>
                                    </ul>
                                    <div class="price">
                                        $25 - $150
                                    </div>
                                </div>
    
                                <div class="select-options-btn">
                                    <a href="#"><i class='bx bx-select-multiple'></i> Select Options</a>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->

        <!-- Start Footer Area -->
        <?php include('includes/footer.php'); ?>
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <?php include('includes/scripts.php'); ?>
    </body>
</html>