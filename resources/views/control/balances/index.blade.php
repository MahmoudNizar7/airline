@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | كل رصيد")

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">

                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">

                                    <h3 class="kt-portlet__head-title">
                                        الأرصدة
                                        <a href="{{ route('balances.create') }}" class="btn btn-default "
                                           style="color: black; margin-right: 770px">إضافة جديد</a>
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
                                            <th>العميل</th>
                                            <th>قيمة الحركة</th>
                                            <th>إجمالي الرصيد</th>
                                            <th>عن</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($balances->count() > 0)
                                            @foreach($balances as $index => $balance)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $balance->client->name }}</td>
                                                    <td>{{ $balance->balance }}</td>
                                                    <td>{{ $balance->balance }}</td>
                                                    <td>{{ $balance->balance }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                        {{--                                        {{ $balances->links('pagination::bootstrap-4') }}--}}
                                        {{ $balances->appends(request()->query())->links('pagination::bootstrap-4') }}
                                        {{--{{ $balances->links() }}--}}
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
