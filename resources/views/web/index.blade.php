@extends('layouts.web_layout')

@section('content')
    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner-area home-three-banner" data-background="{{ url('web-img/slider/banner_bg02.jpg') }}">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-content text-center">
                            <div class="banner-icon mb-25 wow fadeInUp" data-wow-delay=".3s"><img src="{{ url('webi-img/slider/slider_content_icon.png') }}" alt=""></div>
                            <div class="fact-area-title wow fadeInUp" data-wow-delay=".6s">your trust our asset <span class="left"></span><span class="right"></span></div>
                            <h2 class="wow fadeInUp" data-wow-delay=".9s">Find Perfect Car</h2>
                            <p class="wow fadeInUp" data-wow-delay="1.2s">A car dealership, or vehicle local distribution, is a business</p>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1.5s">find it now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-car-search-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#" class="car-search-form">
                                <div class="row align-items-end justify-content-center">
                                    <div class="col custom-col-5">
                                        <select name="name" class="selected">
                                            <option value="">Select Model</option>
                                            <option value="">Mercedes-Benz</option>
                                            <option value="">Volkswagen</option>
                                            <option value="">Aston-Martin</option>
                                            <option value="">Lamborghini</option>
                                            <option value="">Koenigsegg</option>
                                        </select>
                                    </div>
                                    <div class="col custom-col-5">
                                        <select name="name" class="selected">
                                            <option value="">Select Model</option>
                                            <option value="">Volkswagen SC20</option>
                                            <option value="">Honda CBR9</option>
                                            <option value="">Aston K35l8</option>
                                            <option value="">BMW SC20</option>
                                            <option value="">Toyota T86LM</option>
                                        </select>
                                    </div>
                                    <div class="col custom-col-5">
                                        <select name="name" class="selected">
                                            <option value="">Select Model</option>
                                            <option value="">SORN Status</option>
                                            <option value="">Fuel Type</option>
                                            <option value="">Last Log Book</option>
                                            <option value="">MOT Expires</option>
                                            <option value="">Vehicle TAX</option>
                                        </select>
                                    </div>
                                    <div class="col custom-col-5">
                                        <select name="name" class="selected">
                                            <option value="">BMW 7 Series</option>
                                            <option value="">Mercedes-Benz</option>
                                            <option value="">Volkswagen</option>
                                            <option value="">Aston-Martin</option>
                                            <option value="">Lamborghini</option>
                                            <option value="">Koenigsegg</option>
                                        </select>
                                    </div>
                                    <div class="col custom-col-5">
                                        <button class="btn">SELECT VEHICLE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- features-area -->
        <section class="features-area gray-lite-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="{{ url('web-img/icon/h3_features_icon01.png') }}" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Dealership Points</h5>
                                <p>Placlder text commonly is used detrate theys visual consectetur ading elitmod use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="{{ url('web-img/icon/h3_features_icon02.png') }}" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Trusted by clients</h5>
                                <p>Placlder text commonly is used detrate theys visual consectetur ading elitmod use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="{{ url('web-img/icon/h3_features_icon03.png') }}" alt="">
                            </div>
                            <div class="features-content">
                                <h5>We are your location</h5>
                                <p>Placlder text commonly is used detrate theys visual consectetur ading elitmod use</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="{{ url('web-img/icon/h3_features_icon04.png') }}" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Easy Financing</h5>
                                <p>Placlder text commonly is used detrate theys visual consectetur ading elitmod use</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- latest-cars-area -->
        <section class="latest-cars-area latest-cars-three pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title text-center mb-35">
                            <h2 class="overlay-title">All Seller</h2>
                            <span class="sub-title">our Featured Cars</span>
                            <h2 class="title">latest released Cars</h2>
                        </div>
                        <div class="latest-car-menu-wrap">
                            <div class="latest-car-menu-active">
                                <button class="active" data-filter="*">all SELLER</button>
                                <button class="" data-filter=".cat-one">NEW CARS</button>
                                <button class="" data-filter=".cat-two">USED CARS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-cars-wrapper">
                    <div class="row latest-car-items-active">
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb01.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">Jaguer M1 Hybrid</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-one">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb02.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">Audi New BoM 800</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb03.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">mercedez benz EI8</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-one cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb04.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">Audi New BoM 800</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-one">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb05.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">Audi A8 Hybrid</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-one cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="inventory-details.html">
                                        <img src="{{ url('web-img/images/t_released_cars_thumb06.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="btn book-btn">Book now</a>
                                </div>
                                <div class="latest-car-content-wrap">
                                    <div class="latest-car-content">
                                        <h5><a href="inventory-details.html">mercedez new EI9</a></h5>
                                        <p>Placlder text commonly used detrate</p>
                                    </div>
                                    <div class="latest-car-meta">
                                        <ul>
                                            <li><i class="flaticon-settings"></i> Automatic</li>
                                            <li><i class="flaticon-gasoline-pump"></i> Diesel</li>
                                            <li><i class="flaticon-motorway"></i> 7500 km</li>
                                        </ul>
                                    </div>
                                    <div class="latest-car-bottom">
                                        <ul>
                                            <li class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li><span class="total">Total Price :</span><span class="price">$2300</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="latest-car-btn text-center mt-10">
                                <a href="#" class="btn">SHOW ALL CARS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest-cars-area-end -->

        <!-- about-area -->
        <section class="about-area about-bg pt-120 pb-120" data-background="{{ url('web-img/bg/about_bg.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="row align-items-end">
                                <div class="col-sm-6">
                                    <div class="about-exp">
                                        <h2>49<span>+</span></h2>
                                    </div>
                                    <div class="about-img">
                                        <img src="{{ url('web-img/images/about_img01.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="about-img">
                                        <img src="{{ url('web-img/images/about_img02.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-wrap">
                            <div class="section-title white-title mb-40">
                                <span class="sub-title">About Our Company</span>
                                <h2 class="title">More for trade-in could increase car here<span>.</span></h2>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ url('web-img/images/m.png') }}" alt="">
                                </div>
                                <p>Lorem ipsum, or lipsum as it is sometimes known dummy text used in laying out print, graphic or web designs. The passage
                                    is attributed to an unknown.</p>
                            </div>
                            <div class="about-list mb-40">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        Sometimes known dummy
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        Best solution for developing your business
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        Deserunt ad ipsum sint excepteur
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-check"></i></div>
                                        Lorem sit occaecat ea proident excepteur
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- exclusive-featured-area -->
        <section class="exclusive-featured-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-70">
                            <h2 class="overlay-title">Our Services</h2>
                            <span class="sub-title">our service Cars</span>
                            <h2 class="title">Exclusive Car Featured</h2>
                            <div class="line"><img src="{{ url('web-img/images/title_line.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center align-items-xl-start">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="exc-featured-item">
                            <div class="icon">
                                <i class="flaticon-belt"></i>
                            </div>
                            <div class="content">
                                <h5>SUPER FAST car</h5>
                                <p>Placlder text commonly used detrate theyjlos visual form amet, consectetur ading elitmod
                                    tempor used.</p>
                            </div>
                        </div>
                        <div class="exc-featured-item">
                            <div class="icon">
                                <i class="flaticon-piston"></i>
                            </div>
                            <div class="content">
                                <h5>dealership points</h5>
                                <p>Placlder text commonly used detrate theyjlos visual form amet, consectetur ading elitmod
                                    tempor used.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                        <div class="exc-featured-img">
                            <img src="{{ url('web-img/images/exc_featured_img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="exc-featured-item">
                            <div class="icon">
                                <i class="flaticon-fan"></i>
                            </div>
                            <div class="content">
                                <h5>SUPER FAST car</h5>
                                <p>Placlder text commonly used detrate theyjlos visual form amet, consectetur ading elitmod
                                    tempor used.</p>
                            </div>
                        </div>
                        <div class="exc-featured-item">
                            <div class="icon">
                                <i class="flaticon-jerrycan"></i>
                            </div>
                            <div class="content">
                                <h5>dealership points</h5>
                                <p>Placlder text commonly used detrate theyjlos visual form amet, consectetur ading elitmod
                                    tempor used.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- exclusive-featured-area-end -->

        <!-- fact-area -->
        <section class="fact-area fact-bg pt-135 pb-70 jarallax parallax-img" data-background="{{ url('admin-img/bg/fact_bg.jpg') }}">
            <div class="fact-area-title">Find your Perfect Car <span class="left"></span><span class="right"></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item mb-50">
                            <div class="fact-icon">
                                <i class="flaticon-car-3"></i>
                            </div>
                            <div class="fact-content">
                                <h3><span class="odometer" data-count="2900"></span>+</h3>
                                <p>NEW CARS IN STOCK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item mb-50">
                            <div class="fact-icon">
                                <i class="flaticon-service-1"></i>
                            </div>
                            <div class="fact-content">
                                <h3><span class="odometer" data-count="3400"></span>+</h3>
                                <p>USED CARS IN STOCK</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item mb-50">
                            <div class="fact-icon">
                                <i class="flaticon-gears"></i>
                            </div>
                            <div class="fact-content">
                                <h3><span class="odometer" data-count="1200"></span>+</h3>
                                <p>SERVICE CENTERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item mb-50">
                            <div class="fact-icon">
                                <i class="flaticon-rocket"></i>
                            </div>
                            <div class="fact-content">
                                <h3><span class="odometer" data-count="34"></span>K</h3>
                                <p>HAPPY CLIENTS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-120 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-center mb-70">
                            <h2 class="overlay-title">Latest Blog</h2>
                            <span class="sub-title">Latest News & Blog</span>
                            <h2 class="title">Update News & Articles</h2>
                            <div class="line"><img src="{{ url('admin-img/images/title_line.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-50">
                            <div class="blog-post-thumb mb-20">
                                <a href="blog-details.html"><img src="{{ url('admin-img/blog/blog_post_thumb01.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="tag"><a href="#">Creative Design</a></div>
                                <h3><a href="blog-details.html">Car dealership, or vehicle local distribution</a></h3>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">Jon Deo</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Mar 10, 2020</li>
                                        <li class="read-more"><a href="blog-details.html"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-50">
                            <div class="blog-post-thumb mb-20">
                                <a href="blog-details.html"><img src="{{ url('admin-img/blog/blog_post_thumb02.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="tag"><a href="#">Creative Design</a></div>
                                <h3><a href="blog-details.html">Based dealership contract with an automaker</a></h3>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">Jon Deo</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Mar 10, 2020</li>
                                        <li class="read-more"><a href="blog-details.html"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-50">
                            <div class="blog-post-thumb mb-20">
                                <a href="blog-details.html"><img src="{{ url('admin-img/blog/blog_post_thumb03.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="tag"><a href="#">Creative Design</a></div>
                                <h3><a href="blog-details.html">Employ automobile sales their vehicles</a></h3>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">Jon Deo</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Mar 10, 2020</li>
                                        <li class="read-more"><a href="blog-details.html"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->







@endsection
