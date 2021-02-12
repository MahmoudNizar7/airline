@extends('front.app')
@section('content')

    <div class="content-homepage">
        <div class="content-header-homepage">
            <div class="container">
                <h2>{{ __('site.login') }}</h2>
            </div>
        </div>
        <div class="content-body-homepage">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <h3 class="two-line-heading text-center">{{ __('site.login') }}</h3>
                            <form action="{{ route('client.login.post') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="{{ __('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-hover">{{ __('login') }}<i class="icon-left-arrow pr-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
