@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | كل الأرصدة")

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
                                        @if($movements->count() > 0)
                                            @foreach($movements as $index => $movement)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td><a href="{{ route('clients.show',$movement->clients->id) }}">{{ $movement->clients->name }}</a></td>
                                                    <td>{{ $movement->value }}</td>
                                                    <td>{{ $movement->remainder }}</td>
                                                    <td>@if( $movement->about === "شحن الرصيد" ) {{ $movement->about }} @else <a
                                                            target="_blank" href="{{ route('balances.admin_show', $movement->about) }}">{{ $movement->about }}</a> @endif</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr><td colspan="5">لايوجد بيانات</td></tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                        {{--{{ $balances->links('pagination::bootstrap-4') }}--}}
                                        {{ $movements->appends(request()->query())->links('pagination::bootstrap-4') }}
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
