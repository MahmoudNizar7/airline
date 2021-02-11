@extends('front.app')

@section('content')
    <div class="content-homepage">
        <div class="content-header-homepage">
            <div class="container">
                <h2>التسجيل</h2>
            </div>
        </div>
        <div class="content-body-homepage">
            <div class="container">
                <div class="row justify-content-center">


                    <div class="col-lg-6">
                        <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <h3 class="two-line-heading text-center">التسجيل</h3>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم ">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company" value="{{ old('company') }}" class="form-control @error('company') is-invalid @enderror" placeholder="اسم الشركة">
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" placeholder="العنوان">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="رقم الجوال">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="كلمة المرور">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"  placeholder="تأكيد كلمة المرور">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-hover">تسجيل <i class="icon-left-arrow pr-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
