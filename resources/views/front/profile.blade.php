@extends('front.app')
@section('content')

    <div class="content-homepage">

        <div class="content-homepage">
            <div class="content-header-homepage gradient-overlay">
                <div class="container">
                    <h2>Profile</h2>
                </div>
            </div>
            <div class="content-body-homepage">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <h3 class="two-line-heading text-center">Profile</h3>
                                <form action="{{ route('profile.update') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <lable>Name</lable>
                                        <input type="text" class="@error('name') is-invalid @enderror form-control" placeholder="Name" name="name" value="{{ $client->name }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="text" class="@error('email') is-invalid @enderror form-control" placeholder="Email" name="email" value="{{ $client->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <lable>Company Name</lable>
                                        <input type="text" class="@error('company') is-invalid @enderror form-control" placeholder="Company Name" name="company" value="{{ $client->company }}">
                                        @error('company')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <lable>Address</lable>
                                        <input type="text" class="@error('address') is-invalid @enderror form-control" placeholder="Address" name="address" value="{{ $client->address }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <lable>Phone Number</lable>
                                        <input type="text" class="@error('phone') is-invalid @enderror form-control" placeholder="Phone Number" name="phone" value="{{ $client->phone }}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-hover">Save<i class="icon-left-arrow pr-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

@stop
