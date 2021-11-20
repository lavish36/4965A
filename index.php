<?php 
require('top2.php');

$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");

?>
<div class="intro-slider-container mb-4">
<?php if(mysqli_num_rows($resBanner)>0){?>
<div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
        "nav": false, 
        "dots": true,
        "responsive": {
            "992": {
                "nav": true,
                "dots": false
            }
        }
    }'>
    <?php while($rowBanner=mysqli_fetch_assoc($resBanner)){?>
    <div class="intro-slide" >
    <img src="<?php echo BANNER_SITE_PATH.$rowBanner['image']?>" >
        <div class="container intro-content">
            <h3 class="intro-subtitle text-primary"><?php echo $rowBanner['heading1']?></h3><!-- End .h3 intro-subtitle -->
            <h1 class="intro-title"><?php echo $rowBanner['heading2']?></h1><!-- End .intro-title -->

            <a href="category.html" class="btn btn-outline-primary-2">
                <span>DISCOVER MORE</span>
                <i class="icon-long-arrow-right"></i>
            </a>
            <?php } ?>
        </div><!-- End .intro-content -->
        
       
    </div><!-- End .intro-slide -->
    
    </div><!-- End .intro-slide -->
</div><!-- End .intro-slider owl-carousel owl-simple -->



</div><!-- End .intro-slider-container -->
<?php } ?>


<div class="page-content mt-5">
    <div class="container">
        <div class="row">
                		<div class="col-md-6">
                			<div class="banner banner-cat">
	                			<a href="#">
	                				<img src="assets/images/category/banner-1.jpg" alt="Banner">
	                			</a>

	                			<div class="banner-content">
	                				<h3 class="banner-title">Women</h3><!-- End .banner-title -->
	                				<h4 class="banner-subtitle">18 Products</h4><!-- End .banner-subtitle -->
	                				<a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
	                			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                		</div><!-- End .col-md-6 -->

                		<div class="col-md-6">
                			<div class="banner banner-cat">
	                			<a href="#">
	                				<img src="assets/images/category/banner-2.jpg" alt="Banner">
	                			</a>

	                			<div class="banner-content">
	                				<h3 class="banner-title">Men</h3><!-- End .banner-title -->
	                				<h4 class="banner-subtitle">12 Products</h4><!-- End .banner-subtitle -->
	                				<a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
	                			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                		</div><!-- End .col-md-6 -->
        </div><!-- End .row -->
    </div>
</div>

<!-- mail temp end -->
            <div class="brands-border owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="assets/images/brands/7.png" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="banner-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="assets/images/demos/demo-2/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Coffee Tables</h3><!-- End .banner-title -->
                                    <div class="banner-text">from $19.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img style="height:515px "src="assets/images/demos/demo-2/banners/banner-2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-bottom">
                                    <h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Amazing <br>Armchairs</h3><!-- End .banner-title -->
                                    <div class="banner-text text-white">from $39.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-md-6 col-lg-4">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="assets/images/demos/demo-2/banners/banner-3.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Storage <br>Boxes & Baskets</h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="assets/images/demos/demo-2/banners/banner-4.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Lamps Offer</h3><!-- End .banner-title -->
                                    <div class="banner-text">up to 30% off</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->
            <div class="mb-3"></div><!-- End .mb-6 -->
            
<!--
            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Top Rated</a>
                    </li>
                </ul>
            </div><!-- End .container -->
          

<!-- deal of the day -->


<div class="container mt-5">
                <h2 class="title text-center">Best Seller</h2>
                <div class="tab-content">
              
                    <div class="tab-pane fade show active" id="tab-new" role="tabpanel" aria-labelledby="tab-new-link">
                        <div class="row justify-content-center">
                       
                            <?php
							$get_product=get_product($con,4,'','','','','yes');
							foreach($get_product as $list){
						?> 
                            <div class="col-6 col-md-4 col-lg-3">
                            
                                <div class="product product-4 shadow rounded">
                           
                                    <figure class="product-media">
                                        <a  href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="Product image" class="product-image ">
                                            <!-- <img src="assets/images/demos/demo-17/products/product-1-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><span>add to wishlist</span></a>
                                            <!-- <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a> -->
                                            <!-- <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a> -->
                                        </div><!-- End .product-action -->

                                        <div class="product-action">
                                            <a href="product.php?id=<?php echo $list['id']?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->
                                </div>
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Clothing</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                        <i class="fa fa-rupee" style="font-size:18px"></i>
                                        &nbsp;<!-- <?php echo $list['mrp']?> -->
                                        <?php echo $list['price']?>
                                        </div><!-- End .product-price -->
                                        <!-- <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e5dcb1;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #bacbd8;"><span class="sr-only">Color name</span></a>
                                        </div>End .product-nav -->
                                    </div><!-- End .product-body -->
                                   
                                </div><!-- End .product -->
                                <?php } ?>
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                       
                    </div><!-- .End .tab-pane -->

                </div><!-- End .tab-content -->

                <div class="mb-3"></div><!-- End .mb-6 -->
            </div><!-- End .container -->

            <!-- end -->
<!-- Deal of the day -->
<main class="main">
<div class="display-row" id="scroll-to-content">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-last">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="assets/images/demos/demo-15/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content men">
                                    <h3 class="banner-title text-white">01. Get your <br>inspiration <br>in the street.</h3><!-- End .banner-title -->
                                    <h4 class="text-white banner-subtitle text-brightblack">IN THIS LOOK</h4><!-- End .banner-subtitle -->

                                    <ul class="text-white">
                                        <li>Moto Jacket</li>
                                        <li>Henry Backpack</li>
                                    </ul>

                                    <div class="text-white banner-text text-brightblack">$98.00 - $1,298.00</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-primary-2"><span>Buy All</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="heading text-center">
                                <h2 class="title mb-1">Deals Of The Day</h2><!-- End .title text-center -->
                                <p class="title-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p><!-- End .title-desc -->
                            </div><!-- End .heading -->

                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="product product-4">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-15/products/product-1.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <h3 class="product-title"><a href="product.html">Suede Moto Jacket</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">Now $1,298.00</span>
                                                        <span class="old-price">Was $1,400.00</span>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-6">
                                            <div class="product product-4">
                                                <figure class="product-media">
                                                    <a href="product.html">
                                                        <img src="assets/images/demos/demo-15/products/product-2.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <h3 class="product-title"><a href="product.html">Henry Leather Backpack</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $448.00
                                                    </div><!-- End .product-price -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" class="active" style="background: #917f4d;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #c55858;"><span class="sr-only">Color name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 offset-lg-2 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .display-row -->
</main>
            <!-- New products -->
            
<div class="container mt-5">
                <h2 class="title text-center">Currently Popular Items</h2>
                <div class="tab-content">
              
                    <div class="tab-pane fade show active" id="tab-new" role="tabpanel" aria-labelledby="tab-new-link">
                        <div class="row justify-content-center">
                        <?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>  
                            <div class="col-6 col-md-4 col-lg-3">
                            
                                <div class="product product-4 shadow rounded text-center">
                           
                                    <figure class="product-media">
                                    <span class="badge">Founder's Choice</span>
                                        <a  href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="Product image" class="product-image ">
                                            <!-- <img src="assets/images/demos/demo-17/products/product-1-2.jpg" alt="Product image" class="product-image-hover"> -->
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist btn-expandable" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><span>add to wishlist</span></a>
                                            <!-- <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a> -->
                                            <!-- <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a> -->
                                        </div><!-- End .product-action -->

                                        <div class="product-action">
                                            <a href="product.php?id=<?php echo $list['id']?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->
                                </div>
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Clothing</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h3><!-- End .product-title -->
                                        <div class="product-price ">
                                        <!-- <span>&#8377;</span> -->
                                        <i class="fa fa-rupee" style="font-size:18px"></i>
                                        <!-- <?php echo $list['mrp']?> -->
                                        &nbsp;<?php echo $list['price']?>
                                        </div><!-- End .product-price -->
                                        <!-- <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e5dcb1;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #bacbd8;"><span class="sr-only">Color name</span></a>
                                        </div>End .product-nav -->
                                    </div><!-- End .product-body -->
                                   
                                </div><!-- End .product -->
                                <?php } ?>
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                       
                    </div><!-- .End .tab-pane -->

                </div><!-- End .tab-content -->

                <div class="mb-3"></div><!-- End .mb-6 -->
            </div><!-- End .container -->


            <!-- New product end -->
            <div class="pb-3">
                <div class="container brands pt-5 pt-lg-7 ">

                    <h2 class="title text-center mb-4">Customers Reviews</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                        <a href="#" class="brand">
                            <img src="assets/images/brands/1.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/2.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/3.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/4.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/5.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/6.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/7.png" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->

                <div class="mb-5 mb-lg-7"></div><!-- End .mb-5 -->

                <div class="container newsletter">
                    <div class="row">
                        <div class="col-lg-6 banner-overlay-div">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="assets/images/kurti2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white"><a href="#">Limited time only.</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">End of Season<br>save 50% off</a></h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link underline">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6 d-flex align-items-stretch subscribe-div">
                            <div class="cta cta-box">
                                <div class="cta-content">
                                    <h3 class="cta-title">Subscribe To Our Newsletter</h3><!-- End .cta-title -->
                                    <p>Sign up now for <span class="primary-color">10% discount</span> on first order. Customise my news:</p>

                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="text-center">
                                            <button class="btn btn-outline-dark-2" type="submit"><span>subscribe</span></i></button>
                                        </div><!-- End .text-center -->
                                    </form>
                                </div><!-- End .cta-content -->
                            </div><!-- End .cta -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-gray -->

            <div class="mb-2"></div><!-- End .mb-5 -->
            
            <div class="container">
            </div><!-- End .container -->
            
            <div class="blog-posts mb-5">
                <div class="container">
                    <h2 class="title text-center mb-4">From Our Blog</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple mb-3" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-6/blog/post-1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 1 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-6/blog/post-2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 12, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-6/blog/post-3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Quisque volutpat mattis eros.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .blog-posts -->
        </main><!-- End .main -->
        <input type="hidden" id="qty" value="1"/>
<?php
include('footer.php');
?>