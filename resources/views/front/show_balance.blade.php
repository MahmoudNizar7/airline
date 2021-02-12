@extends('front.app')

@section('style')

    <style>
        td {
            text-align: center;
        }
    </style>

@stop

@section('content')

    <div class="content-homepage">
        <div class="content-header-homepage">
            <div class="container">
                <h2>{{ __('site.balance') }}</h2>
            </div>
        </div>
        <div class="content-body-homepage">
            <div class="container">
                <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="row justify-content-center pt-10">
                        <div class="col-xl-12">
                            <table class="table table-bordered table-hover table-striped ">
                                <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>{{ __('site.movement_number') }}</th>
                                    <th>{{ __('site.movement_value') }}</th>
                                    <th>{{ __('site.remainder') }}</th>
                                    <th>{{ __('site.about') }}</th>
                                    <th>{{ __('site.movement_date') }}</th>
                                    <th>{{ __('site.movement_time') }}</th>
                                </tr>
                                </thead>

                                @if($movements->count() > 0)
                                    <tbody>
                                    @foreach($movements as $key => $movement)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $movement->id }}</td>
                                            <td>{{ $movement->value }}</td>
                                            <td>{{ $movement->remainder }}</td>
                                            <td>@if( $movement->about === "شحن الرصيد" ) {{ $movement->about }} @else <a
                                                    href="{{ route('client_trips.show', $movement->about) }}">{{ $movement->about }}</a> @endif</td>
                                            <td>{{ date('d/m/Y D', strtotime($movement->created_at)) }}</td>
                                            <td>{{ date('h:i A', strtotime($movement->created_at)) }}</td>
                                        </tr>
                                    @endforeach

                                    @else
                                        <tr>
                                            <td style="text-align: center" colspan="9">{{ __('site.no_balance_record') }}</td>
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
@stop
