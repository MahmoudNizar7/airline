@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | قائمة الحجوزات")
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
                                            <th>PNR</th>
                                            <th>العميل</th>
                                            <th>الرحلة</th>
                                            <th>حالة الحجز</th>
                                            <th>اجمالي التكلفة</th>
                                            <th>الكبار</th>
                                            <th>الاطفال</th>
                                            <th>الرضع</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($reservations->count() > 0)
                                            @foreach($reservations as $index => $reservation)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td><a target="_blank" href="{{ route('balances.admin_show', $reservation->PNR) }}">{{ $reservation->PNR }}</a></td>
                                                    <td>{{ $reservation->client->name }}</td>
                                                    <td>{{ $reservation->trip->travel_no }}</td>
                                                    <td>{{ $reservation->confirmation ? 'حجز مؤكد' : 'حجز مبدئي' }}</td>
                                                    <td>{{ $reservation->cost }}</td>
                                                    <td>{{ $reservation->adult }}</td>
                                                    <td>{{ $reservation->children }}</td>
                                                    <td>{{ $reservation->baby }}</td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8">لايوجد بيانات</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                        {{--                                        {{ $clients->links('pagination::bootstrap-4') }}--}}
                                        {{ $reservations->links('pagination::bootstrap-4') }}
                                        {{--{{ $clients->links() }}--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
