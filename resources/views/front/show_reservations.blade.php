@extends('front.app')
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

                                @if( ($reservations->count() > 0) )
                                    <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
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
                                                <a target="_blank" class="btn btn-default" href="{{ route('client_trips.show', $reservation->id) }}" title="Print"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @else
                                    <tr>
                                        <td style="text-align: center" colspan="13">لايوجد رحلات</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
