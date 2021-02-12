@extends('control.app')
@section('style')

    <style>
        td{
            text-align: center;
        }
    </style>

@stop
@section('content')




    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">

                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">

                                    <h3 class="kt-portlet__head-title">
                                        الحجوزات
                                    </h3>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="text-center table" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('site.first_name') }}</th>
                                            <th>{{ __('site.last_name') }}</th>
                                            <th>{{ __('site.birth_of_date') }}</th>
                                            <th>{{ __('site.nationality') }}</th>
                                            <th>{{ __('site.passport_number') }}</th>
                                            <th>{{ __('site.passport_ex_date') }}</th>
                                            <th>{{ __('site.adults') .' | '. __('site.children') .' | '. __('site.baby') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($client_trips->count() > 0)
                                            @foreach($client_trips as $client_trip)
                                                <tr>
                                                    <td>{{ $client_trip->id }}</td>
                                                    <td>{{ $client_trip->first_name }}</td>
                                                    <td>{{ $client_trip->last_name }}</td>
                                                    <td>{{ $client_trip->DOB }}</td>
                                                    <td>{{ $client_trip->nationality }}</td>
                                                    <td>{{ $client_trip->passport_no }}</td>
                                                    <td>{{ $client_trip->passport_expiration_date }}</td>
                                                    <td>{{ $client_trip->type }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td style="text-align: center" colspan="8">{{ __('site.no_trips') }}</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
