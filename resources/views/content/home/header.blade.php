
  <!-- =====  LODER  ===== -->

<div class="wrapper">
    <div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">
        <div class="newsletter-popup"> <img class="offer" src="{{asset('front/img/newsbg.jpg') }}" alt="offer">
            <div class="newsletter-popup-static newsletter-popup-top">
                <div class="popup-text">
                    <div class="popup-title">50% <span>off</span></div>
                        <div class="popup-desc">
                            <div>Sign up and get 50% off your next Order</div>
                        </div>
                    </div>
                    <form onsubmit="return  validatpopupemail();" method="post">
                        <div class="form-group required">
                            <input type="email" name="email-popup" id="email-popup" placeholder="Enter Your Email" class="form-control input-lg" required />
                            <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Subscribe</button>
                            <label class="checkme">
                            <input type="checkbox" value="" id="checkme" /> Dont show again</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =====  HEADER START  ===== -->
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="header-top-left">
                                <div class="contact"><span class="hidden-xs hidden-sm hidden-md">Days a week from 9:00 am to 7:00 pm</span></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <ul class="header-top-right text-right">
                                <li class="account"><a href="login.html">My Account</a></li>
                                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                    </ul>
                                </li>
                                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Currency <span class="caret"></span> </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="main-search mt_40">
                                <input id="search-input" name="search" value="" placeholder="" class="form-control input-lg" autocomplete="off" type="text">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                                </span> 
                            </div>
                        </div>
                        <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="{{ URL::to('') }}"> <img alt="themini" src="{{asset('front/img/logo-Sun-Media-1.png')}}"> </a> </div>
                            <div class="col-xs-6 col-sm-4 shopcart">
                                <div id="cart" class="btn-group btn-block mtb_40">
                                    <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span> </button>
                                </div>
                                <div id="cart-dropdown" class="cart-menu collapse">
                                    <ul>
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <a href="#">
                                                                <img src="{{ asset('front/img/product/70x84.jpg') }}" alt="iPod Classic" title="iPod Classic">
                                                            </a>
                                                        </td>
                                                        <td class="text-left product-name">
                                                            <a href="#">MacBook Pro</a> 
                                                            <span class="text-left price">$20.00</span>
                                                            <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                                        </td>
                                                        <td class="text-center">
                                                            <a class="close-cart">
                                                                <i class="fa fa-times-circle"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <a href="#">
                                                                <img src="{{ asset('front/img/product/70x84.jpg') }}" alt="iPod Classic" title="iPod Classic">
                                                            </a>
                                                        </td>
                                                        <td class="text-left product-name">
                                                            <a href="#">MacBook Pro</a> 
                                                            <span class="text-left price">$20.00</span>
                                                            <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                                        </td>
                                                        <td class="text-center">
                                                            <a class="close-cart">
                                                                <i class="fa fa-times-circle"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$2,100.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                        <td class="text-right">$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$2,122.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <form action="cart_page.html">
                                                <input class="btn pull-left mt_10" value="View cart" type="submit">
                                            </form>
                                            <form action="checkout_page.html">
                                                <input class="btn pull-right mt_10" value="Checkout" type="submit">
                                            </form>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr width="800px" style="border:solid 1px;color:#fff;">
                            <nav class="navbar">
                                <p>menu</p>
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <ul id="menu" class="nav navbar-nav">
                                            <li> 
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="dropdown mega-dropdown"> 
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
                                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                                        <li class="col-md-2">
                                                            <ul>
                                                                <li class="dropdown-header">rings</li>
                                                                <li><a href="#">Wedding</a></li>
                                                                <li><a href="#">Engagemnet</a></li>
                                                                <li><a href="#">Promise</a></li>
                                                                <li><a href="#">Stone</a></li>
                                                                <li><a href="#">Multi-stone</a></li>
                                                                <li><a href="#">Stackable</a></li>
                                                                <li><a href="#">Statement</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-md-2">
                                                            <ul>
                                                                <li class="dropdown-header">Earrings</li>
                                                                <li><a href="#">CLuster</a></li>
                                                                <li><a href="#">Clip-on</a></li>
                                                                <li><a href="#">Dangle & Drop</a></li>
                                                                <li><a href="#">Cuff & Wrap</a></li>
                                                                <li><a href="#">Stud</a></li>
                                                                <li><a href="#">Hoop</a></li>
                                                                <li><a href="#">Chandelier</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-md-2">
                                                            <ul>
                                                                <li class="dropdown-header">Bracelets</li>
                                                                <li><a href="#">Beaded</a></li>
                                                                <li><a href="#">Beangles</a></li>
                                                                <li><a href="#">Charm</a></li>
                                                                <li><a href="#">Cuff</a></li>
                                                                <li><a href="#">Woven & Braided</a></li>
                                                                <li><a href="#">Chain & Link</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-md-2">
                                                            <ul>
                                                                <li class="dropdown-header">Necklaces</li>
                                                                <li><a href="#">Pendant</a></li>
                                                                <li><a href="#">Chokers</a></li>
                                                                <li><a href="#">Charm</a></li>
                                                                <li><a href="#">Crystal</a></li>
                                                                <li><a href="#">Monogram & Wave</a></li>
                                                                <li><a href="#">Chains</a></li>
                                                                <li><a href="#">Beaded</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-md-3">
                                                            <ul>
                                                                <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                    <div class="item active"> 
                                                                        <a href="#">
                                                                            <img src="{{ asset('front/img/menu-banner1.jpg') }}" class="img-responsive" alt="Banner1">
                                                                        </a>
                                                                    </div>
                                                                    <!-- End Item -->
                                                                    <div class="item">
                                                                        <a href="#">
                                                                            <img src="{{ asset('front/img/menu-banner2.jpg') }}" class="img-responsive" alt="Banner1">
                                                                        </a>
                                                                    </div>
                                                                    <!-- End Item -->
                                                                    <div class="item"> 
                                                                        <a href="#">
                                                                            <img src="{{ asset('front/img/menu-banner3.jpg') }}" class="img-responsive" alt="Banner1">
                                                                        </a>
                                                                    </div>
                                                                    <!-- End Item -->
                                                                </div>
                                                                <!-- End Carousel Inner -->
                                                            </li>
                                                            <!-- /.carousel -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="category_page.html">Shop</a></li>
                                            <li> <a href="blog_page.html">Blog</a></li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="cart_page.html">Cart</a></li>
                                                    <li> <a href="checkout_page.html">Checkout</a></li>
                                                    <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                                                    <li> <a href="single_blog.html">Single Post</a></li>
                                                </ul>
                                            </li>
                                            <li> <a href="about.html">About us</a></li>
                                            <li> <a href="contact_us.html">Contact us</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </header>
        <!-- =====  HEADER END  ===== -->
        <!-- =====  BANNER STRAT  ===== -->
    </div>
</div>
      <!-- =====  BANNER END  ===== -->
@push('bottom-script')
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('front/js/jquery.firstVisitPopup.js')}}"></script>
@endpush

@push('top-script')
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}">
@endpush