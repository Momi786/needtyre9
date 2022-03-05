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
                                                    {{-- <li class="price">$13,000<span>/mo</span></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="inventory-list-content prod_data">
                                            <h1><a href="#">{{$item->brand}}</a></h1>
                                            <h4><a href="{{ url('/detail-products') }}/{{$item->id}}">{{$item->item}}</a></h4>
                                            <p class="location"><i class="fas fa-map-marker-alt"></i>{{$item->LongDescription}}</p>
                                            <div class="inv-item-meta">
                                                <ul class="justify-content-end">

{{--                                                    <li class="call pl-5"><a href="#" class="addToCartBtn"><i class="fas fa-shopping-cart"></i></a></li>--}}
                                                    <form action="{{ url('add-to-cart') }}" method="post">
                                                        @csrf
                                                        <div class="quantity">
                                                            <a href="#" class="quantity__minus"><span>-</span></a>
                                                            <input name="prod_qty" type="text" class="quantity__input" value="4">
                                                            <a href="#" class="quantity__plus"><span>+</span></a>
                                                        </div>
                                                        <input type="hidden" value="{{$item->id}}" name="prod_id" class="prod_id">
                                                        <button type="submit" class="addCart">Add To Cart</button>
                                                    </form>

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
                </div>
            </div>
        </section>
        <!-- inventory-list-area-end -->

@endsection







