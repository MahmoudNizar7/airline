@extends('front.app')
@section('content')

    <div class="content-homepage">
        <div class="content-header-homepage">
            <div class="container">
                <h2> تأكيد طلب الحجز الخاص بك </h2>
            </div>
        </div>
        <div class="content-body-homepage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="content-warper text-center content-homepage-success wow fadeInUp"
                             data-wow-duration="1s" data-wow-delay=".2s">
                            <span class="icon-checked wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></span>
                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">تم تأكيد طلب الحجز
                                الخاص بك بنجاح</h4>
                            <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s"><a
                                    href="{{ route('client_trips.show',$reservation->PNR) }}">مشاهدة التذكرة</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
