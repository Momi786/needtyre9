@extends('layouts.web_layout')

@section('content')

    <!-- main-area -->
    <main class="mt-70">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>All Type Of Tires</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Type Of Tires</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- inventory-list-area -->
        <section class="inventory-list-area gray-lite-bg pt-120 pb-120">
            <div class="container">
                <div class="inventory-meta-wrap mb-50">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="inventory-top-meta">
                                <ul>
                                    <li class="find">Total Tires Find : <span>{{$count}}</span></li>
{{--                                    <li class="filter d-none d-lg-flex">--}}
{{--                                        <a href="#"><i class="flaticon-menu-1"></i></a>--}}
{{--                                        <a class="active" href="#"><i class="flaticon-menu-3"></i></a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <form action="#" class="inventory-short-meta">
                                <label>Sort by :</label>
                                <select name="name" class="selected">
                                    <option value="">New Listed : Newest</option>
                                    <option value="">Old Listed : Oldest</option>
                                    <option value="">Price High to Low</option>
                                    <option value="">Price Low to High</option>
                                    <option value="">Most Popular</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-7 col-md-9">
                        @foreach($items as $item)
                            <div class="inventory-list-item">
                                <div class="inventory-list-thumb">
                                    <img src="{{ url('web-img/images/inventory_list_img01.jpg') }}" alt="">
                                    <ul class="inv-thumb-meta">
                                        <li><a href="{{ url('web-img/images/inventory_list_img01.jpg') }}" class="popup-image" data-toggle="tooltip" data-placement="top" data-original-title="View Image"><i class="fas fa-camera"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Add to Favorite"><i class="fas fa-star"></i></a></li>
                                        <li><a href="inventory-details.html" data-toggle="tooltip" data-placement="top" data-original-title="Details"><i class="fas fa-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="inventory-list-content">
                                    <div class="inv-content-top">
                                        <ul>
                                            <li class="option">
                                                    @if($item->qty < 5)
                                                        <a href="" class="new"> Less Than 5 in Stock </a>
                                                    @else
                                                        <a href="#">InStock {{ $item->qty }}</a>
                                                    @endif
                                            </li>
{{--                                            <li class="price">$13,000<span>/mo</span></li>--}}
                                        </ul>
                                    </div>
                                    <h6><a href="#">{{$item->brand}}</a></h6>
                                    <h4><a href="{{ url('/detail-products') }}/{{$item->id}}">{{$item->item}}</a></h4>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>{{$item->LongDescription}}</p>
                                    <div class="inv-item-meta">
                                        <ul>
                                            <li class="call"><a href="#"><i class="fas fa-shipping-fast"></i>Free Shipping</a></li>
                                            <li><i class="fas fa-handshake"></i> Risk-Free Guarantee</li>
                                            <li>Doors : 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-right">
                            {{ $items->links() }}
                        </div>
                    </div>
{{--                    <div class="col-xl-4 col-lg-5 col-md-9">--}}
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
