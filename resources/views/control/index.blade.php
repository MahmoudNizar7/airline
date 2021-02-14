@extends('control.app')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">

                                                    <h1 class="kt-portlet__head-title">
                                                        <i class="fa fa-home"></i> <b class="text-danger">|</b>
                                                        الإحصائيات
                                                    </h1>
                                                </div>

                                                <div class="kt-portlet__head-label">


                                                </div>
                                            </div>
                                            <div class="row text-center">

                                                <!-- Start-->
                                                <div class="col-xl-3 col-sm-3 py-2">
                                                    <a href="{{ route('clients.index') }}" style="text-decoration: none; ">
                                                        <div class="card bg-dark text-white h-100">
                                                            <div class="card-body bg-dark">
                                                                <div class="rotate">
                                                                    <i class=" fas fa-user-check fa-4x"></i>
                                                                </div>
                                                                <h6 class="text-uppercase mt-1" style="">عميل</h6>
                                                                <h1 class="display-4">{{ $clients->count() }}</h1>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End  -->


                                                <!-- Start-->
                                                <div class="col-xl-3 col-sm-3 py-2">
                                                    <a href="{{ route('trips.index') }}" style="text-decoration: none; ">
                                                        <div class="card bg-dark text-white h-100">
                                                            <div class="card-body bg-dark">
                                                                <div class="rotate">
                                                                    <i class=" fas fa-plane-departure fa-4x"></i>
                                                                </div>
                                                                <h6 class="text-uppercase mt-1" style="">رحلة</h6>
                                                                <h1 class="display-4">{{ $trips->count() }}</h1>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End  -->


                                                <!-- Start-->
                                                <div class="col-xl-3 col-sm-3 py-2">
                                                    <a href="{{ route('reservations.admin_show') }}" style="text-decoration: none; ">
                                                        <div class="card bg-dark text-white h-100">
                                                            <div class="card-body bg-dark">
                                                                <div class="rotate">
                                                                    <i class=" fas fa-ticket-alt fa-4x"></i>
                                                                </div>
                                                                <h6 class="text-uppercase mt-1" style="">حجز</h6>
                                                                <h1 class="display-4">{{ $reservations->count() }}</h1>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End  -->

                                                <!-- Start-->
                                                <div class="col-xl-3 col-sm-3 py-2">
                                                    <a href="{{ route('inbox.index') }}" style="text-decoration: none; ">
                                                        <div class="card bg-dark text-white h-100">
                                                            <div class="card-body bg-dark">
                                                                <div class="rotate">
                                                                    <i class="fas fa-mail-bulk fa-4x"></i>
                                                                </div>
                                                                <h6 class="text-uppercase mt-1" style="">بريد وارد</h6>
                                                                <h1 class="display-4">{{ $mails->count() }}</h1>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End  -->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
