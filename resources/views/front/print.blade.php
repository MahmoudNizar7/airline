<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $reservation->count() > 0 ? $reservation->PNR : 'error' }}</title>
</head>
<body
    style="margin: 0; font-family: 'Cairo', sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: right; background: #f7f7f7; direction: rtl;">
<div class="content-wrapper" style="padding: 100px 0px;">
    <div class="container" style=" width: 780px; margin: auto; max-width: 100%;">
        <div class="main-print" style="background-color: #FFF; padding: 40px 30px;">
            <h1 style="/*float:left; */  text-align: center; margin: 0px; font-size: 30px;"><img
                    src="{{ asset('assets/images/' . $data[3]->value) }}" class="img-fluid" height="50px"></h1>
            <h1 style="text-align: center;text-align: center; margin: 0px; font-size: 30px;">شركة المصطفى للسياحة
                والسفر</h1>
            <div class="clearfix" style="clear: both;"></div>
            <div class="print-header"
                 style="  display: flex;border-bottom: 1px solid #000; padding-bottom: 5px; margin-bottom: 10px;">
                <div style="width: 30%; float: right;">
                    <p style="margin: 0px; font-size: 13px;">{{ $data[0]->value }}</p>
                    <p style="margin: 0px; font-size: 13px;">جوال : {{ $data[2]->value }}</p>
                </div>
                <div style="width: 40%; float: right;text-align: center;">
                    <p style="margin-top: 0;">E-mail : {{ $data[1]->value }}</p>


                </div>
                <div style="width: 30%; float: right;">
                    <p style="margin: 0px; font-size: 13px;text-align: left;">Status : {{ $reservation->count() > 0 ? ($reservation->confirmation ? ' Confirmed reservation' : 'Initial reservation' ) : '' }}</p>
                    <p style="margin: 0px; font-size: 13px;text-align: left;">PNR : {{ $reservation->count() > 0 ? $reservation->PNR : '' }}</p>
                    <p style="margin: 0px; font-size: 13px;text-align: left;">Booking Date : {{ $reservation->count() > 0 ? date('d/m/Y D', strtotime($reservation->created_at)) : '' }}</p>

                </div>
            </div>

            <div class="clearfix" style="clear: both;"></div>

            <div class="print-body">
                <h4 style="text-align: center;margin-bottom: 0;">تذكرة</h4>
                <h4 style="text-decoration: underline;text-align: center;margin-bottom: 0;margin-top: 0;">Ticket</h4>

                <div class="clearfix" style="clear: both;"></div>
                <br>
                <h1 style="/* float:right;*/ text-align: right;text-align: right; margin: 0px; font-size: 30px;">
                    @if($reservation->count() > 0 && $reservation->trip->image != '') <img src="{{ asset('assets/images/trips/' . $reservation->trip->image) }}" class="img-fluid" height="50px">@endif
                </h1>

                <table class="table"
                       style="border: 2px solid #000; width: 100%; border-radius: 5px; border-collapse: collapse; text-align: center;">
                    <thead>


                    <tr class="text-center">

                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="fas fa-map-marker-alt"></i>From
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="fas fa-globe-americas"></i>To
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="fas fa-list-ol"></i>Trip Number
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="fas fa-plane-departure"></i>Flying line
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="far fa-calendar-alt"></i>Trip Date
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bolder;">
                            <i class="fas fa-clock"></i>Trip Hour
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Adults</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Children</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Baby</th>

                    </tr>

                    </thead>
                    <tbody>
                    @if($reservation->count() > 0)
                        <tr>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->trip->from }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->trip->to }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->trip->travel_no }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->trip->air_line }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ date('d/m/Y D', strtotime($reservation->trip->date)) }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ date('h:i A', strtotime($reservation->trip->date)) }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->adult }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->children }}</td>
                            <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $reservation->baby }}</td>
                        </tr>
                    @else
                        <tr>
                            <td style="text-align: center" colspan="13">لايوجد رحلات</td>
                        </tr>
                    @endif
                    </tbody>

                </table>
                <div style="float: right; width: 40%;">
                    <p style="font-size: 12px;">Reservation Details</p>
                </div>
                <div class="clearfix" style="clear: both;"></div>
                <table class="table"
                       style="border: 2px solid #000; width: 100%; border-radius: 5px; border-collapse: collapse; text-align: center;">
                    <thead>


                    <tr class="text-center">
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: normal;">#</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">First Name</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Last Name</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Birth Of Date</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Nationality</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Passport Number</th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Passport Expiration
                            Date
                        </th>
                        <th style="border: 1px solid #000; font-size: 12px; font-weight: bold;">Adults | Children |
                            Baby
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($client_trips->count() > 0)
                        @foreach($client_trips as $client_trip)
                            <tr>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->id }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->first_name }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->last_name }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->DOB }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->nationality }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->passport_no }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->passport_expiration_date }}</td>
                                <td style="border: 1px solid #000; font-size: 12px; font-weight: normal;padding: 10px 5px;">{{ $client_trip->type }}</td>
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
            <div class="print-footer">

                <div style="float: left; width: 40%;">

                </div>
                <div class="clearfix" style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
