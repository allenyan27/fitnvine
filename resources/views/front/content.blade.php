@extends('front.index')

@section('content')
<!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner">
        <div class="main-banner owl-carousel">
          <div class="item"><a href="#"><img src="{{asset('front/img/Main-banner-01.jpg')}}" alt="Main Banner" class="img-responsive" /></a></div>
          <div class="item"><a href="#"><img src="{{asset('front/img/main-banner-02.jpg')}}" alt="Main Banner" class="img-responsive" /></a></div>
        </div>
      </div>
      <!-- =====  BANNER END  ===== -->
      <!-- =====  CONTAINER START  ===== -->
      <div id="wrapper category">
        <div class="container">
          <div class="row mt_50">
            <div class="col-md-4 ">
              <div id="subbanner4" class="sub-hover">
                <div class="sub-img"><a href="#"><img src="{{asset('front/img/category-banner-01.jpg')}}" alt="category-banner-01" class="img-responsive"></a></div>
              </div>
              <div class="text-span">
                <span><h3>DIAMOND</h3></span>
                <span><h3>RINGS</h3></span>
                <span><h6><a href="#"><u>VIEW ALL RINGS</u></a></h6></span>
              </div>
            </div>
            <div class="col-md-4">
              <div id="subbanner4" class="sub-hover">
                <div class="sub-img"><a href="#"><img src="{{asset('front/img/category-banner-02.jpg')}}" alt="category-banner-02" class="img-responsive"></a></div>
              </div>
              <div class="text-span">
                <span><h3>STARBELLA</h3></span>
                <span><h3>HAIR PIN</h3></span>
                <span><h6><a href="#"><u>VIEW ALL RINGS</u></a></h6></span>
              </div>
            </div>
            <div class="col-md-4">
              <div id="subbanner4" class="sub-hover">
                <div class="sub-img"><a href="#"><img src="{{asset('front/img/category-banner-03.jpg')}}" alt="category-banner-03" class="img-responsive"></a></div>
              </div>
              <div class="text-span">
                <span><h3>WOMAN'S</h3></span>
                <span><h3>EARRINGS</h3></span>
                <span><h6><a href="#"><u>VIEW ALL RINGS</u></a></h6></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row ">
          <div class="col-sm-12 mt_30">
            <!-- =====  PRODUCT TAB  ===== -->
            <div id="product-tab" class="mt_10">
              <div class="heading-part mb_10 ">
                <h2 class="main_title">Featured Products</h2>
              </div>
              <ul class="nav text-right">
                <li class="active"> <a href="#nArrivals" data-toggle="tab">New Arrivals</a> </li>
                <li><a href="#Bestsellers" data-toggle="tab">Bestsellers</a> </li>
                <li><a href="#Featured" data-toggle="tab">Featured</a> </li>
              </ul>
              <div class="tab-content clearfix box">
                <div class="tab-pane active" id="nArrivals">
                  <div class="nArrivals owl-carousel">
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/earing-1-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-2-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-3-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-4-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-5-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-6-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-7-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-8-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/earring-9-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/necklace-11-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/necklace-11-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-12-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="Bestsellers">
                  <div class="Bestsellers owl-carousel">
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-13-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/earring-14-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/necklace-15-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-16-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-17-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/earring-18-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/earring-19-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/earing-1-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-2-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-3-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-4-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-5-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="Featured">
                  <div class="Featured owl-carousel">
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-6-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-7-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-8-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/earring-9-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/necklace-10-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/necklace-11-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-12-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-13-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/earring-14-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/necklace-15-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-grid">
                      <div class="item">
                        <div class="product-thumb  mb_30">
                          <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/ring-16-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/ring-17-296x396.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                            <div class="button-group text-center">
                              <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                              <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                              <div class="compare"><a href="#"><span>Compare</span></a></div>
                              <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                          </div>
                          <div class="caption product-detail text-center">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                            <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- =====  PRODUCT TAB  END ===== -->
          </div>
        </div>
        <div class="row">
          <div class="cms_banner">
            <div class="col-xs-12 mt_60">
              <div id="subbanner4" class="sub-hover">
                <div class="sub-img"><a href="#"><img src="{{asset('front/img/littlebird-banner.jpg')}}" alt="littlebird-banner" class="img-responsive"></a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 mtb_10">
            <!-- =====  PRODUCT TAB  ===== -->
            <div class="mt_60">
              <div class="heading-part mb_10 ">
                <h2 class="main_title">Deals of the Week</h2>
              </div>
              <div class="latest_pro box">
                <div class="latest owl-carousel">
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-16-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-17-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/earring-14-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/necklace-15-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-12-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/ring-13-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/necklace-10-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/necklace-11-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-13-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/necklace-11-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{asset('front/img/product/ring-13-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('front/img/product/earring-14-296x396.jpg')}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Vide..</a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 mtb_10">
            <!-- =====  Blog ===== -->
            <div id="Blog" class="mt_50">
              <div class="heading-part mb_10 ">
                <h2 class="main_title">Latest News</h2>
              </div>
              <div class="blog-contain box">
                <div class="blog owl-carousel ">
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="{{asset('front/img/blog/blog-1170x823.jpg')}}" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="{{asset('front/img/blog/blog-2-1170x823.jpg')}}" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-3-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-4-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-5-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-6-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-7-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-holder">
                      <div class="thumb post-img"><a href="#"> <img src="images/blog/blog-8-1170x823.jpg" alt="themini"> </a>
                        <div class="date-time text-center">
                          <div class="day"> 11</div>
                          <div class="month">Aug</div>
                        </div>
                        <div class="post-image-hover"> </div>
                        <div class="post-info">
                          <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Fashions fade, style is eternal</a> </h6>
                          <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                          <div class="view-blog">
                            <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Comments</a> </div>
                            <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> read more</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- =====  Blog end ===== -->
            </div>
          </div>
        </div>
        <!-- =====  SUB BANNER END  ===== -->
        <div id="brand_carouse" class="ptb_60 text-center">
          <!-- <div class="type-01">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Brand Logo</h2>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="brand owl-carousel ptb_20">
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                  <div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div id="our-promise">
        <div class="row mb_50">
            <div class="col-sm-3 mt_20 cms-icon ">
              <div class="feature-i-left ptb_30 ">
                <div class="icon-right Shipping"></div>
                <h6>Free Shipping</h6>
                <p>Free dedlivery worldwide</p>
              </div>
            </div>
            <div class="col-sm-3 mt_20 cms-icon ">
              <div class="feature-i-left ptb_30 ">
                <div class="icon-right Order"></div>
                <h6>Order Onlivne</h6>
                <p>Hours : 8am - 11pm</p>
              </div>
            </div>
            <div class="col-sm-3 mt_20 cms-icon ">
              <div class="feature-i-left ptb_30 ">
                <div class="icon-right Save"></div>
                <h6>Shop And Save</h6>
                <p>For All Spices & Herbs</p>
              </div>
            </div>
            <div class="col-sm-3 mt_20 cms-icon ">
              <div class="feature-i-left ptb_30 ">
                <div class="icon-right Safe"></div>
                <h6>Safe Shoping</h6>
                <p>Ensure genuine 100%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  CONTAINER END  ===== -->
@endsection


@push('bottom-script')
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('front/js/jquery.firstVisitPopup.js')}}"></script>
@endpush

@push('top-script')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}">
@endpush