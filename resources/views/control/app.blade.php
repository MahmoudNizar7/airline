<!DOCTYPE html>

<html lang="en" direction="rtl" style="direction: rtl">

<head>
    <meta charset="utf-8"/>
    <title>@if(isset($title)){{ $title }}@else لوحة التحكم | شركة المصطفى للسياحة و السفر @endif</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <!--begin::Global Theme Styles -->
    <link href="{{ asset('assets/css/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    @livewireStyles
    @yield('style')
</head>

<body
    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<div class="m-grid m-grid--hor m-grid--root m-page">

    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="#" target="_blank" i class="m-brand__logo-wrapper">
                                <img alt="" src="{{ asset('assets/images/logo.png') }}"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                        <div class="m-subheader ">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <h3 class="m-subheader__title m-subheader__title--separator bl-0">لوحة التحكم</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="{{ asset('assets/images/user.png') }}"
                                                             class="m--img-rounded m--marginless" alt=""/>
													</span>
                                        <span class="m-topbar__username m--hide">Nick</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center"
                                                 style="background: {{ url('assets/img/user_profile_bg.jpg') }}; background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="{{ asset('assets/images/user.png') }}"
                                                             class="m--img-rounded m--marginless" alt=""/>
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <div
                                                            class="m-card-profile__name">name
                                                        </div>
                                                        <span
                                                            class="m-card-user__name m--font-weight-500">email</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#"
                                                               class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                    <span class="m-nav__link-wrap">
                                                                        <div
                                                                            class="kt-notification__item-title kt-font-bold">الملف الشخصي</div>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#"
                                                               class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                    <span class="m-nav__link-wrap">
                                                                        <div
                                                                            class="kt-notification__item-title kt-font-bold">اعدادات الحساب وكلمة المرور</div>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="#"
                                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                               class="btn m-btn--pill    btn-secondary m-btn  m-btn--label-brand m-btn--bolder">تسجيل
                                                                الخروج</a>
                                                            <form id="logout-form" action="#"
                                                                  method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
                class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                 m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

                    <li class="m-menu__item  m-menu__item--submenu pl-3" aria-haspopup="true"
                        m-menu-submenu-toggle="hover"><a href="{{ route('admin') }}"
                                                         class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon fa fa-home"></i>
                            <span class="m-menu__link-text">الرئيسية</span></a>
                    </li>

                    @if(auth()->user()->hasRole('super_admin'))
                        <li class="m-menu__item  m-menu__item--submenu pl-3" aria-haspopup="true"
                            m-menu-submenu-toggle="hover">

                            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-icon fas fa-user-check"></i>
                                <span class="m-menu__link-text mr-0">العملاء</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>


                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('clients.index') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">كل العملاء</span>
                                        </a>
                                    </li>

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('clients.create') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">عميل جديد</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>



                        <li class="m-menu__item  m-menu__item--submenu pl-3" aria-haspopup="true"
                            m-menu-submenu-toggle="hover">

                            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-icon fas fa-file-invoice-dollar"></i>
                                <span class="m-menu__link-text mr-0">الأرصدة</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>


                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('balances.index') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">كل الأرصدة</span>
                                        </a>
                                    </li>

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('balances.create') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">شحن رصيد</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="m-menu__item  m-menu__item--submenu pl-3" aria-haspopup="true"
                            m-menu-submenu-toggle="hover">

                            <a href="javascript:;" class="m-menu__link m-menu__toggle">

                                <i class="m-menu__link-icon fas fa-plane-departurefas fa-plane-departure"></i>
                                <span class="m-menu__link-text mr-0">الرحلات</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>


                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('trips.index') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">كل الرحلات</span>
                                        </a>
                                    </li>

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('trips.create') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">رحلة جديدة</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="m-menu__item  m-menu__item--submenu pl-3" aria-haspopup="true"
                            m-menu-submenu-toggle="hover">

                            <a href="javascript:;" class="m-menu__link m-menu__toggle">

                                <i class="m-menu__link-icon fas fa-flag"></i>
                                <span class="m-menu__link-text mr-0">الدول</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>


                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('countries.index') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">كل الدول</span>
                                        </a>
                                    </li>

                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="{{ route('countries.create') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                            <span class="m-menu__link-text">دولة جديدة</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>



                    @endif
                </ul>
            </div>
        </div>

        <div class="container">
            <br><br>

            @yield('content')

        </div>
    </div>

    <div class="main-footer" id="section-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-right">
                    <p class="m-card-user__name m--font-weight-500" style="margin-top: -50px; margin-left: -75px">2021 ©
                        شركة المصطفى للسياحة والسفر</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<script src="{{ asset('assets/js/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/summernote.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-select.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.tagsinput.js') }}"></script>
@include('sweetalert::alert')

@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-livewire-alert::scripts/>
@yield('scripts')
</body>
</html>
