@extends('layouts.web_layout')

@section('content')

    <!-- main-area -->
    <main class="mt-70">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg inventory-details-breadcrumb" data-background="{{ url('web-img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>{{$item->item}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('/products')}}">All Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$item->item}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <!-- inventory-list-area -->
        <section class="inventory-details-area gray-lite-bg pt-70 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="inventory-details-description mb-30">
                            <div class="inv-details-title">
                                <h5>{{$item->item}}</h5>
                            </div>
                            <div class="inv-details-img">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{ url('web-img/images/inv_details_img01.jpg') }}" alt="">
                                        <div class="inventory-list-content">
                                            <div class="inv-content-top">
                                                <ul class="ul">
                                                    <li class="option1 option mb-3">
                                                        @if($item->qty < 5)
                                                            <a href="" class="new"> <i class="fa fa-times"></i> Less Than 5 in Stock </a>
                                                        @else
                                                            <a href="#">InStock {{ $item->qty }}</a>
                                                        @endif
                                                    </li>
                                                    <li><i class="fas fa-shipping-fast"></i> Free Shipping</li>
                                                    <li><i class="fas fa-handshake"></i> Risk-Free Guarantee</li>
                                                    {{--                                            <li class="price">$13,000<span>/mo</span></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="inventory-list-content">
                                            <h1><a href="#">{{$item->brand}}</a></h1>
                                            <h4><a href="{{ url('/detail-products') }}/{{$item->id}}">{{$item->item}}</a></h4>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>{{$item->LongDescription}}</p>
                                            <div class="inv-item-meta">
                                                <ul class="justify-content-end">
                                                    <li class="call"><a href="#"><i class="fas fa-shopping-cart"></i>Add To Cart</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--    Tire Over View          --}}
                        <div class="inventory-features mb-30">
                            <div class="inv-details-title">
                                <h5 class="text-center">Overview</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="inventory-features-item">
                                        <h6>Tire Overview</h6>
                                        <span>{{$item->LongDescription}}</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>Manufacturer Part Number:</h6>
                                        <span>{{$item->item}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{--         TIRE SPECIFICATION               --}}
                        <div class="inventory-features mb-30">
                            <div class="inv-details-title">
                                <h5 class="text-center">TIRE SPECIFICATION</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>Section WidthIn :</h6>
                                        <span>Coupe</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>Aspect Ratio :</h6>
                                        <span>BMW</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>Rim Size :</h6>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>SpeedRate :</h6>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>40hc :</h6>
                                        <span>New</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>LoadIndex :</h6>
                                        <span>Petrol</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>MaxLoad :</h6>
                                        <span>Front Wheel Drive</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>MaxPressure :</h6>
                                        <span>5-door</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>OveralDiameter :</h6>
                                        <span>Front Wheel Drive</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>TreadDepth :</h6>
                                        <span>5-door</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>UTQG :</h6>
                                        <span>Front Wheel Drive</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>MinRimWidth :</h6>
                                        <span>5-door</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>Measured Rim Width :</h6>
                                        <span>Front Wheel Drive</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>Max Rim Width :</h6>
                                        <span>5-door</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="inventory-features-item">
                                        <h6>DOT Registration :</h6>
                                        <span>Front Wheel Drive</span>
                                    </div>
                                    <div class="inventory-features-item">
                                        <h6>Manufacturer :</h6>
                                        <span>5-door</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--        TREAD LIFE WARRANTY                --}}
                        <div class="inventory-features mb-30">
                            <div class="inv-details-title">
                                <h5 class="text-center">TREAD LIFE WARRANTY</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="inventory-features-item">
                                        <h6>Tire Overview</h6>
                                        <span>{{$item->LongDescription}}</span>
                                    </div>
                                    <div class="inventory-features-item">
{{--                                        <h6>Manufacturer Part Number:</h6>--}}
                                        <span>This product is not covered by a manufacturer’s treadlife warranty.</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
{{--                    <div class="col-lg-4">--}}
{{--                        <aside class="inventory-sidebar">--}}
{{--                            <div class="widget inventory-widget">--}}
{{--                                <div class="inv-widget-title mb-25">--}}
{{--                                    <h5 class="title">Find Perfect Vehicles</h5>--}}
{{--                                </div>--}}
{{--                                <form action="#" class="sidebar-find-car">--}}
{{--                                    <div class="form-grp search-box">--}}
{{--                                        <input type="text" placeholder="Search">--}}
{{--                                        <button><i class="fas fa-search"></i></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-grp">--}}
{{--                                        <i class="flaticon-placeholder-1"></i>--}}
{{--                                        <input type="text" placeholder="Location">--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6">--}}
{{--                                            <div class="form-grp">--}}
{{--                                                <i class="flaticon-gasoline-pump"></i>--}}
{{--                                                <input type="text" placeholder="Petrol">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6">--}}
{{--                                            <div class="form-grp">--}}
{{--                                                <i class="far fa-clock"></i>--}}
{{--                                                <input type="text" value="2021">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-grp">--}}
{{--                                        <i class="flaticon-car-4"></i>--}}
{{--                                        <select name="name" class="selected">--}}
{{--                                            <option value="">Car Type</option>--}}
{{--                                            <option value="">Jaguer M1 Hybrid</option>--}}
{{--                                            <option value="">Audi New Bom 800</option>--}}
{{--                                            <option value="">Audi A8 Hybrid</option>--}}
{{--                                            <option value="">Toyota T86LM</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-grp">--}}
{{--                                        <i class="fas fa-dollar-sign"></i>--}}
{{--                                        <select name="name" class="selected">--}}
{{--                                            <option value="">Price</option>--}}
{{--                                            <option value="">$10000 - $15000</option>--}}
{{--                                            <option value="">$15000 - $25000</option>--}}
{{--                                            <option value="">$25000 - $35000</option>--}}
{{--                                            <option value="">$35000 - $55000</option>--}}
{{--                                            <option value="">$55000 - $100000</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-grp">--}}
{{--                                        <i class="flaticon-speedometer"></i>--}}
{{--                                        <select name="name" class="selected">--}}
{{--                                            <option value="">Transmission :</option>--}}
{{--                                            <option value="">Manual Transmission</option>--}}
{{--                                            <option value="">Gear Transmission</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <button class="btn">Find New Vehicles</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="widget inventory-widget">--}}
{{--                                <div class="inv-widget-title mb-25">--}}
{{--                                    <h5 class="title">Featured Vehicles</h5>--}}
{{--                                </div>--}}
{{--                                <div class="sidebar-fv-active">--}}
{{--                                    <div class="sidebar-fv-item" data-background="img/images/sidebar_featured_vehicle01.jpg">--}}
{{--                                        <div class="fv-top-tag">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">For Rent</a></li>--}}
{{--                                                <li><a class="new" href="#">New Car</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar-fv-content">--}}
{{--                                            <h5>$11,000<span>/mo</span></h5>--}}
{{--                                            <p><a href="inventory-details.html">BMW 8 - Series 2 Door</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="sidebar-fv-item" data-background="img/images/sidebar_featured_vehicle02.jpg">--}}
{{--                                        <div class="fv-top-tag">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#">For Rent</a></li>--}}
{{--                                                <li><a class="new" href="#">New Car</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar-fv-content">--}}
{{--                                            <h5>$29,000<span>/mo</span></h5>--}}
{{--                                            <p><a href="inventory-details.html">Audi - A4 Sedan XL</a></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="sidebar-loan-calculator">--}}
{{--                                    <a href="loan-calculator.html"><i class="fas fa-calculator"></i><span>Auto Loan Calculator</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="widget inventory-widget">--}}
{{--                                <div class="inv-widget-title mb-25">--}}
{{--                                    <h5 class="title">Listed By Advisor</h5>--}}
{{--                                </div>--}}
{{--                                <div class="advisor-wrap mb-25">--}}
{{--                                    <div class="advisor-thumb">--}}
{{--                                        <img src="img/images/sidebar_listed_img.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="advisor-info">--}}
{{--                                        <h5><a href="#">Hamil Alexander.</a></h5>--}}
{{--                                        <div class="phone">--}}
{{--                                            <a href="tel:0987654321"><i class="flaticon-phone-call"></i> (123)456-7890</a>--}}
{{--                                        </div>--}}
{{--                                        <a href="author-profile.html" class="profile">Advisor Profile</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <form action="#" class="advisor-form">--}}
{{--                                    <input type="text" placeholder="Your Name *">--}}
{{--                                    <input type="email" placeholder="Your Email *">--}}
{{--                                    <textarea name="message" placeholder="I'm interest in { Linting Single }"></textarea>--}}
{{--                                    <button class="btn">Search</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </aside>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- inventory-list-area-end -->

@endsection
