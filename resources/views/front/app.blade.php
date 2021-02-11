<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الرئيسية | شركة المصطفى للسياحة و السفر</title>
    <meta name="ICBM" content="latitude, longitude">
    <meta name="geo.position" content="latitude;longitude">
    <meta name="geo.region" content="country[-state]">
    <meta name="geo.placename" content="city/town">
    <link rel="stylesheet" href="{{ asset('front/css/style-font.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    @livewireStyles
@yield('style')

<body>

@php

    $app_data = \App\Models\Control\Setting::whereIn('key',['location','phone','email','image','rights','facebook','twitter','instagram','whatsapp'])->get();

@endphp

<div class="homepage">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-0">
        <div class="container">
            <a class="navbar-brand mx-0" href="{{ route('home') }}"><img src="{{ asset('assets/images/'.$app_data[8]->value) }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item @if(isset($page) && $page === 'home') active @endif">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="icon-home"></i>
                            home
                        </a>
                    </li>

                    <li class="nav-item @if(isset($page) && $page === 'my_trip') active @endif">
                        <a class="nav-link"
                           @if(auth('client')->check()) href="{{ route('reservations.show', auth('client')->id()) }}"
                           @else href="{{ route('client.login') }}" @endif>
                            <i class="fas fa-plane-departure"></i>
                            My Trips
                        </a>
                    </li>

                    <li class="nav-item @if(isset($page) && $page === 'contact_us') active @endif">
                        <a class="nav-link" href="{{ route('inbox.create') }}">
                            <i class="icon-phone-call"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>

                @if(auth('client')->check())

                    <ul class="navbar-nav mr-4 mr-lg-auto">
                        <li class="nav-itemr">
                            <select class="custom-select select-lang">
                                <option>العربية</option>
                                <option>English</option>

                            </select>
                        </li>

                        <li class="nav-item dropdown nav-register ">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="icon-man-user"></i>{{ auth('client')->user()->name }}
                                | {{ isset(auth('client')->user()->balance->balance) ? auth('client')->user()->balance->balance : 0  }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('reservations.show', auth('client')->id()) }}"><i class="fas fa-plane-departure"></i>My Trips</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="icon-man-user"></i>Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('balances.show',auth('client')->id()) }}"><i class="fas fa-file-invoice-dollar"></i>Balance</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('client.logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Sign Out </a>
                                <form id="logout-form" action="{{ route('client.logout') }}"
                                      method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                @else

                    <ul class="navbar-nav mr-4 mr-lg-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route::has('register') ? route('register') : '#' }}">
                                تسجيل
                            </a>
                        </li>
                        <li class="nav-item nav-register">
                            <a class="nav-link btn-hover" href="{{ route('client.login') }}">
                                <i class="icon-man-user"></i>
                                دخول
                            </a>
                        </li>
                    </ul>

                @endif

            </div>
        </div>
    </nav>

    @yield('content')


    <div class="helpdesk gradient-overlay">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 text-center text-lg-center">
                    <a class="btn-show-all bg-white text-dark wow fadeInUp hvr-bounce-to-top" data-wow-duration="1s"
                       data-wow-delay=".2s" target="_blank" href=""><i class="icon-at"></i>
                        {{ $app_data[6]->value }}
                    </a>
                </div>
                <div class="col-lg-4 text-center text-lg-center">
                    <a class="btn-show-all bg-white text-dark wow fadeInUp hvr-bounce-to-top" data-wow-duration="1s"
                       data-wow-delay=".2s" target="_blank" href=""><i class="icon-map"></i>
                        {{ $app_data[1]->value }}
                    </a>
                </div>
                <div class="col-lg-4 text-center text-lg-center">
                    <a class="btn-show-all bg-white text-dark wow fadeInUp hvr-bounce-to-top" data-wow-duration="1s"
                       data-wow-delay=".2s" target="_blank" href=""><i class="icon-whatsapp-2"></i>
                        {{ $app_data[7]->value }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-0">{{ $app_data[0]->value }}</p>
                </div>
                <div class="col-lg-6">
                    <div class="social">
                        <a href="{{ $app_data[2]->value }}" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="{{ $app_data[3]->value }}" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="{{ $app_data[4]->value }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $app_data[5]->value }}" target="_blank"><i class="icon-whatsapp-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.select.min.js') }}"></script>
<script src="{{ asset('front/js/wow.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
<script>
    $('.selectpaicker').selectpicker();
</script>

<script src="https://kit.fontawesome.com/111a66e208.js" crossorigin="anonymous"></script>
@livewireScripts
@include('sweetalert::alert')
<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });
</script>
@yield('scripts')
</body>
</html>
