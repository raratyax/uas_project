@extends('fashion/index')
@section('produk')


<section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-furniture-tab" data-toggle="pill" href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture" aria-selected="true">Food</a>
                            
                            <a id="v-pills-decorative-tab" data-toggle="pill" href="#v-pills-decorative" role="tab" aria-controls="v-pills-decorative" aria-selected="false">Drink</a>
                            
                            <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab" aria-controls="v-pills-lighting" aria-selected="false">Desert</a>
                        
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/food/1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-50%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail.php">Beef Steak</a></h5>
                                                <span class="regular-price">Rp100.000</span>
                                                <span class="discount-price">Rp200.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now<i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/food/2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-30%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail2.php">Saucy Ramen</a></h5>
                                                <span class="regular-price">Rp50.000</span>
                                                <span class="discount-price">Rp70.000</span>
                        
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now<i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/food/3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail3.php">Shrimp Soup</a></h5>
                                                <span class="regular-price">Rp70.000</span>
                                                <span class="discount-price">Rp100.000</span>
                                                
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/food/4.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Kimchi Fried Rice</a></h5>
                                        
                                                <span class="regular-price">Rp25.000</span>
                                                <span class="discount-price">Rp40.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/food/5.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Dumpling Sauces</a></h5>
                                               
                                                <span class="regular-price">Rp20.000</span>
                                                <span class="discount-price">Rp30.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-decorative" role="tabpanel" aria-labelledby="v-pills-decorative-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/drink/1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>25%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail4.php">Lemon Ice</a></h5>
                                                <span class="regular-price">Rp15.000</span>
                                                <span class="discount-price">Rp20.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/drink/2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail5.php">Blue Mocktail</a></h5>
            
                                                <span class="regular-price">Rp25.000</span>
                                                <span class="discount-price">Rp30.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/drink/3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail6.php">Boba Milk Tea</a></h5>
                                                
                                                <span class="regular-price">Rp17.000</span>
                                                <span class="discount-price">Rp20.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/drink/4.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Strawberry Coconut</a></h5>
                                            
                                                <span class="regular-price">Rp30.000</span>
                                                <span class="discount-price">Rp35.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/drink/5.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-10%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Sakura Late</a></h5>
                                                
                                                <span class="regular-price">Rp28.000</span>
                                                <span class="discount-price">Rp35.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-lighting" role="tabpanel" aria-labelledby="v-pills-lighting-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/desert/1.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-15%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail7.php">Custard fruit</a></h5>
                                                
                                                <span class="regular-price">Rp25.000</span>
                                                <span class="discount-price">Rp35.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/desert/2.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-40%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail8.php">Red Velvet</a></h5>
                                                
                                                <span class="regular-price">Rp60.000</span>
                                                <span class="discount-price">Rp70.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/desert/3.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="detail9.php">Grape Puding</a></h5>
                                               
                                                <span class="regular-price">Rp35.000</span>
                                                <span class="discount-price">Rp50.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/desert/4.jpg" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-14%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Chocolate Pots</a></h5>
                                                
                                                <span class="regular-price">Rp45.000</span>
                                                <span class="discount-price">Rp60.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-product-items">
                                            <div class="product-item-image">
                                                <a href="#"><img src="assets/images/product/desert/5.png" alt="Product"></a>
                                                <div class="product-discount-tag">
                                                    <p>-60%</p>
                                                </div>
                                            </div>
                                            <div class="product-item-content text-center mt-30">
                                                <h5 class="product-title"><a href="#">Ultimate Freakshake</a></h5>
                                                
                                                <span class="regular-price">50.000</span>
                                                <span class="discount-price">Rp55.000</span>
                                                <a class="main-btn" href="form_beli.php" data-animation="fadeInUp" data-delay="1.5s">Buy Now <i class="lni-chevron-right"></i></a>
                                            </div>
                                        </div> <!-- single product items -->
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->
                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endsection