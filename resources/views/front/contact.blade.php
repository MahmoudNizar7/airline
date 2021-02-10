@extends('front.app')
@section('content')
    @php($page = "contact_us")
    <div class="content-homepage">
        <div class="content-homepage">
            <div class="content-header-homepage  gradient-overlay">
                <div class="container">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="content-body-homepage">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3 class="two-line-heading text-center">نموذج التواصل</h3>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="الاسم">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-phone ">
                                            <input type="text" class="form-control" placeholder="رقم الجوال">
                                            <div class="input-group-prepend">
                                                <select class="selectpicker">
                                                    <option
                                                        data-content="<span>+934</span><img src='img/images/saudi-arabia.png'> ">
                                                        +934
                                                    </option>
                                                    <option
                                                        data-content="<span>+333</span><img src='img/images/saudi-arabia.png'> ">
                                                        +333
                                                    </option>
                                                    <option
                                                        data-content="<span>+222</span><img src='img/images/saudi-arabia.png'> ">
                                                        +222
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control p-3" rows="5" placeholder="نص الرسالة"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="img/images/CAPTCHA.png" alt="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-hover">ارسال<i
                                                class="icon-left-arrow pr-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
