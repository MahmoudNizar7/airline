@extends('front.app')
@section('style')

    <style>
        td{
            text-align: center;
        }
    </style>

@stop
@section('content')
    @php($page = "my_trip")
    <div class="content-homepage">
        <div class="content-header-homepage">
            <div class="container">
                <h2>رحلات {{ auth('client')->user()->name }}</h2>
            </div>
        </div>
        <div class="content-body-homepage">
            <div class="container">
                <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="row justify-content-center pt-10">
                        <div class="col-xl-12">
                            <table class="table table-bordered table-hover table-striped ">
                                <caption>Reservation Details</caption>
                                <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>PNR</th>
                                    <th><i class="fas fa-map-marker-alt"></i>Reservation Type</th>
                                    <th><i class="fas fa-map-marker-alt"></i>From</th>
                                    <th><i class="fas fa-globe-americas"></i>To</th>
                                    <th><i class="fas fa-list-ol"></i>Trip Number</th>
                                    <th><i class="fas fa-plane-departure"></i>Flying Number</th>
                                    <th><i class="far fa-calendar-alt"></i>Trip Date</th>
                                    <th><i class="fas fa-clock"></i>Trip Hour</th>
                                    <th>Adults</th>
                                    <th>Children</th>
                                    <th>Baby</th>
                                    <th>Total Cost</th>
                                    <th>Options</th>
                                </tr>
                                </thead>

                                @if( $reservation->count() > 0 )
                                    <tbody>
                                    <td>{{ $reservation->PNR }}</td>
                                    <td>{{ $reservation->confirmation ? 'Confirmed reservation' : 'Initial reservation' }}</td>
                                    <td>{{ $reservation->trip->from }}</td>
                                    <td>{{ $reservation->trip->to }}</td>
                                    <td>{{ $reservation->trip->travel_no }}</td>
                                    <td>{{ $reservation->trip->air_line }}</td>
                                    <td>{{ date('d/m/Y D', strtotime($reservation->trip->date)) }}</td>
                                    <td>{{ date('h:i A', strtotime($reservation->trip->date)) }}</td>
                                    <td>{{ $reservation->adult }}</td>
                                    <td>{{ $reservation->children }}</td>
                                    <td>{{ $reservation->baby }}</td>
                                    <td>{{ $reservation->cost }}</td>
                                    <td class="d-flex">
                                        <a target="_blank" class="btn btn-default" href="{{ route('reservations.print',$reservation->id) }}" title="Print"><i class="fas fa-print"></i></a>
                                        <a target="_blank" class="btn btn-default" href="{{ route('reservations.print',$reservation->id) }}" title="Print"><i class="fas fa-file-powerpoint"></i></a>
                                    </td>
                                    </tbody>
                                @else
                                    <tr>
                                        <td style="text-align: center" colspan="13">لايوجد رحلات</td>
                                    </tr>
                                @endif
                            </table>
                        </div>

                        <div class="col-xl-12">
                            <table class="table table-responsive-xl table-bordered table-hover table-striped ">
                                <caption>Passenger details</caption>
                                <thead class="thead-info">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Birth Of Date</th>
                                    <th>Nationality</th>
                                    <th>Passport Number</th>
                                    <th>Passport Expiration Date</th>
                                    <th>Adults | Children | Baby</th>
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
                                        <td style="text-align: center" colspan="8">لايوجد رحلات</td>
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
