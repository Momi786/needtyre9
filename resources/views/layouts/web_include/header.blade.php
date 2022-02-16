
<!-- header-area -->
<header class="header-style-three transparent-header">
    <div class="header-top-wrap">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <div class="header-top-action">
                        <ul>
                            <li><i class="far fa-envelope"></i><a href=""></a></li>
                            <li><i class="far fa-clock"></i> 10:00 AM To 5:00 PM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-right">
                        <ul>
                            <li class="header-top-social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-vimeo-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="header-top-login">
                                <a href="login-register.html"><i class="far fa-user-circle"></i> LOGIN</a>
                                <a href="login-register.html">REGISTER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="#" class="sticky-logo-none"><img src="{{ url('web-img/logo/logo.png') }}" alt="Logo"></a>
                                <a href="#" class="sticky-logo-active"><img src="{{ url('web-img/logo/b_logo.png') }}" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="/">Home</a>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="{{url('/products')}}">Products</a></li>
                                    <li><a href="#">Contact</a></li>



                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="img/product/cart_p01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">Volvo S60 Cross Country</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="img/product/cart_p02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">Mercedes-Benz GLE Coupe</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="red-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-btn"><a href="contact.html" class="btn">get a quote</a></li>
                                    <li class="header-search">
                                        <a href="#" data-toggle="collapse" data-target="#collapse-search-body"
                                           aria-expanded="false" aria-controls="collapse-search-body">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
        <div id="collapse-search-body" class="collapse-search-body collapse">
            <div class="search-body">
                <div class="container custom-container">
                    <form action="{{ url('/search') }}">
                        <div class="form-item">
                            <input name="query" placeholder="Type here...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
