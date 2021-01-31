@extends('control.app')
@section('content')
    @php($title = "لوحة التحكم | قائمة النصوص")

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <!--begin::Form-->
            <form action="{{ route('trans.update','update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-8">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            نصوص الموقع
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="m-portlet__body">

                                @php(
                                    $keys = ['Home','My Trips','Contact Us','Sign Up','Profile','Sign In','Sign Out','Trips Gartr','From','To','Trip Number',
                                            'Flying line','Price','Seats Number','Trip Date','Trip Hour','Reserve','Reserve Now','Adults','Children','Baby',
                                            'Username','Company Name','Address','Phone Number','Email','Password','Password Confirmation','First Name','Last Name',
                                            'Birth Of Date','Nationality','Passport Number','Passport Expiration Date','Total Cost','Options','Ticket details',
                                            'Print','Current balance','Reservation Details','Passenger details','Contact Form','Name','Topic','Message Text',
                                            'Submit','Reservation Type','confirmed reservation','Initial reservation','Reservation status',
                                            'Account balance statement','View ticket','Your reservation has been confirmed','Logo']
                                    )

                                @foreach($keys as $index => $key)
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">{{ $key }}</label>
                                        <div class="col-9">
                                            <textarea name="{{ str_replace(' ','_',strtolower($key)) }}" cols="30" rows="3" class="form-control m-input">@if(isset($trans)){{ $trans[$index]->value }}@endif</textarea>
                                            @error(str_replace(' ','_',strtolower($key)))<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__body">
                                <div class="m-portlet__head-title col-sm-12">
                                    <button type="submit" class="btn btn-success col-sm-12">حفظ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>


@stop
