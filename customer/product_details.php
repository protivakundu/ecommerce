<?php 

    include("./inc/header.php"); 
    include("./Controller/db.php");   
?>

<?php 
    $id = $_GET["id"];
    $result = $con->query("SELECT * FROM product WHERE id='$id'");
    $record = mysqli_fetch_array($result);
?>

    <!-- Main -->
    <main class="main--wrapper">


        <!-- Shop-details start -->
        <section class="shop-details-area pb-80">
            <div class="container">
               <div class="row">
                   <div class="col-sm-12">
                       <div class="shop-bred pt-35 pb-35">
                            <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="index-3.html">Home</a></li>
                                   <li class="breadcrumb-item"><a href="index-3.html">Phones & Tablet</a></li>
                                   <li class="breadcrumb-item"><a href="index-3.html">Headphone</a></li>
                                   <li class="breadcrumb-item active" aria-current="page"><?php echo $record["p_name"] ?></li>
                               </ol>
                           </nav>
                        </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 order-1 order-lg-1">
                        <div class="pro-img">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5"><img src="http://localhost/ecommerce/admin/product_image/<?php echo $record["image"] ?>" class="img-fluid" alt=""></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-3 order-lg-2">
                        <div class="pro-content">
                            <h5 class="title"><?php echo $record["p_name"] ?></h5>
                            <div class="pro-rating pb-40">
                                <a href="#" class="active"><i class="fas fa-star"></i></a>
                                <a href="#" class="active"><i class="fas fa-star"></i></a>
                                <a href="#" class="active"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#" class="review">(2 customer reviews)</a>
                            </div>
                            <div class="about-pro">
                                <p><?php echo $record["description"] ?> </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-success">Buy Now</a>
                                </div>
                                <div class="col-md-6 cart-wrapper">
                                    <a href="http://localhost/ecommerce/customer/Controller/Cart/add.php?id=<?php echo $record["id"] ?>" class="cart-button">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop-details end -->

        <!-- Product  -->
            <div class="product pt-75 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Best Related</span> On Latest Coming</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="all__product--link text-right">
                                            <a class="all-link" href="shop-collection.html">Discover All Products<span
                                                    class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product__active owl-carousel">
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__33.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__34.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__14.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__35.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__33.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__36.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__34.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__37.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__35.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__38.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__33.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing
                                                    Systems Purple Degree</a></h6>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__35.jpg" alt="">
                                                <img class="img secondary-img" src="img/allproducts/products__thumb__33.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li class="rating-active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product end -->

        <!-- Subscribe -->
        <div class="subscribe subscribe--area grenadier-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                            <div class="left d-flex justify-content-between align-items-center">
                                <div class="newsletter__title">
                                    <span class="notification--icon"><img src="img/icon/notification-icon.png" alt="notification"></span>
                                    <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                                </div>
                                <div class="newsletter--message d-none d-xl-block">
                                    <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                        free delivery.</p>
                                </div>
                            </div>
                            <form class="right newsletter--form pos-rel">
                                <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                                <button class="btn newsletter--button" type="button"><img src="img/icon/plan-icon.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

    </main>
    <!-- Main End -->

<?php include("./inc/footer.php"); ?>             