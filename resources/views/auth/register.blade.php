<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Page:Need Tire</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('css/web-css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/default.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/web-css/responsive.css') }}">
</head>
<body>


<!-- preloader-start -->
<div class="preloader">
    <div class="meter">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="subline"></div>
        <div class="loader-circle-1">
            <div class="loader-circle-2"></div>
        </div>
        <span class="loadtext">Loading</span>
    </div>
</div>
<!-- preloader-end -->



<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area pt-5 pb-5" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2>Register</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- login-register-area -->
    <section class="login-register-area gray-lite pb-120">
        <div class="container">
            <div class="">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow p-5">
                            <form method="POST" action="{{ route('register') }}" class="login-form">
                                @csrf
                                <div class="row" style="border-bottom: 1px solid #f7f7f7">
                                    <div class="col-md-12 text-center">
                                        <h3 class="" style="font-size: 20px; font-weight: 600;">Your Personal Details</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">First Name <span>*</span></label>
                                            <input type="text" id="first_name" value="{{ old('first_name') }}" name="first_name" placeholder="Jon">
                                            @if($errors->has('first_name'))
                                                <div class="error text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="password2">Last Name <span>*</span></label>
                                            <input type="text" id="last_name" value="{{ old('last_name') }}" name="last_name" placeholder="Deo">
                                            @if($errors->has('last_name'))
                                                <div class="error text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="email">Date of Birth (Optional)</label>
                                            <input type="date" id="email" name="dob" value="{{ old('dob') }}" placeholder="eg:5/7/1970">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="phone">E-Mail Address</label>
                                            <input type="text" id="phone" name="email" value="{{ old('email') }}" placeholder="info@needtire.com">
                                            @if($errors->has('email'))
                                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3" style="border-bottom: 1px solid #f7f7f7">
                                    <div class="col-md-12 text-center">
                                        <h3 class="" style="font-size: 20px; font-weight: 600;">
                                            Company Details
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <label for="userName">Company Name (Optional)</label>
                                            <input type="text" id="first_name"  name="comp_name" value="{{ old('comp_name') }}" placeholder="Need Tire">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3" style="border-bottom: 1px solid #f7f7f7">
                                    <div class="col-md-12 text-center">
                                        <h3 class="" style="font-size: 20px; font-weight: 600;">
                                            Your Address
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <label for="userName">Street Address<span>*</span></label>
                                            <input type="text" id="st_address" name="st_address" value="{{ old('st_address') }}"
                                                   placeholder="235 Peachtree Street NESuite 400 Atlanta, GA 30303">
                                            @if($errors->has('st_address'))
                                                <div class="error text-danger">{{ $errors->first('st_address') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">City<span>*</span></label>
                                            <input type="text" id="city" name="city"
                                                   placeholder="Atlanta" value="{{ old('city') }}">
                                            @if($errors->has('city'))
                                                <div class="error text-danger">{{ $errors->first('city') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Post Code<span>*</span></label>
                                            <input type="text" id="post_code" name="post_code"
                                                   placeholder="30301" value="{{ old('post_code') }}">
                                            @if($errors->has('post_code'))
                                                <div class="error text-danger">{{ $errors->first('post_code') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">State/Province<span>*</span></label>
                                            <input type="text" id="state_province" name="state_province"
                                                   placeholder="Atlanta" value="{{ old('state_province') }}">
                                            @if($errors->has('state_province'))
                                                <div class="error text-danger">{{ $errors->first('state_province') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Country<span>*</span></label>
                                            <input type="text" id="country" name="country" value="{{ old('country') }}"
                                                   placeholder="United Kingdom">
                                            @if($errors->has('country'))
                                                <div class="error text-danger">{{ $errors->first('country') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3" style="border-bottom: 1px solid #f7f7f7">
                                    <div class="col-md-12 text-center">
                                        <h3 class="" style="font-size: 20px; font-weight: 600;">
                                            Your Contact Information
                                        </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Telephone Number<span>*</span></label>
                                            <input type="text" id="number" name="number"
                                                   placeholder="+11.000000" value="{{ old('number') }}">
                                            @if($errors->has('number'))
                                                <div class="error text-danger">{{ $errors->first('number') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Fax Number (Optional)</label>
                                            <input type="text" id="fax_number" value="{{ old('fax_number') }}" name="fax_number"
                                                   placeholder="+11.000000">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <label for="userName">How did you find us?<span>*</span></label>
                                            <select class="form-select" value="{{ old('find_us') }}" name="find_us" aria-label="Default select example" style="width: 100%;
                                                    display: block;border: 1px solid #ebebeb;background: #f7f7f7;border-radius: 3px;padding: 13px 20px;">
                                                <option selected>Select One</option>
                                                <option value="google_adds">Google Advertisement</option>
                                                <option value="google_search">Google Search</option>
                                                <option value="yahoo_search">Yahoo Search</option>
                                                <option value="bing_search">Bing search</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="other">Other</option>
                                            </select>
                                            @if($errors->has('find_us'))
                                                <div class="error text-danger">{{ $errors->first('find_us') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3" style="border-bottom: 1px solid #f7f7f7">
                                    <div class="col-md-12 text-center">
                                        <h3 class="" style="font-size: 20px; font-weight: 600;">
                                            Your Password
                                        </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Password <span>*</span></label>
                                            <input type="password" id="password"  name="password">
                                            @if($errors->has('password'))
                                                <div class="error text-danger">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <label for="userName">Password Confirmation <span>*</span></label>
                                            <input type="password" id="password" name="password_confirmation">
                                            @if($errors->has('password_confirmation'))
                                                <div class="error text-danger">{{ $errors->first('password_confirmation') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <span class="or">Or</span>
                                <ul class="action">
                                    <li>Continue with :</li>
                                    <li><a href="#"><img src="{{ url('web-img/icon/google.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ url('web-img/icon/twitter.png') }}" alt=""></a></li>
                                </ul>
                                <div class="text-center">
                                    <button class="btn">Register</button>
                                    <br>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login-register-area-end -->


</main>
<!-- main-area-end -->








<!-- JS here -->
<script src="{{url('js/web-js/vendor/jquery-3.5.0.min.js')}}"></script>
<script src="{{ url('js/web-js/popper.min.js') }}"></script>
<script src="{{ url('js/web-js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/web-js/main.js') }}"></script>
</body>
</html>
