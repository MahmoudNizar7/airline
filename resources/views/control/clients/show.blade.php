@extends('control.app')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <!--begin::Form-->
            <div class="row">
                <div class="col-lg-8">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        بيانات العميل
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row mb-25">
                                <label for="name" class="col-3 col-form-label">الاسم</label>
                                <div class="col-9">
                                    <input name="name" value="{{ $client->name }}" class="form-control" type="text"
                                           id="name" autocomplete="name" disabled>
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="email" class="col-3 col-form-label">البريد الإلكتروني</label>
                                <div class="col-9">
                                    <input name="email" type="email" value="{{ $client->email }}"
                                           class="form-control m-input" id="email" disabled>
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="company" class="col-3 col-form-label">الشركة</label>
                                <div class="col-9">
                                    <input name="company" type="text" value="{{ $client->company }}"
                                           class="form-control m-input" disabled>
                                </div>
                            </div>
                            <div class="form-group m-form__group row mb-25">
                                <label for="example-text-input" class="col-3 col-form-label">العنوان</label>
                                <div class="col-9">
                                    <input name="address" type="text" value="{{ $client->address }}"
                                           class="form-control m-input" disabled>
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">رقم الهاتف</label>
                                <div class="col-9">
                                    <input name="phone" type="text" value="{{ $client->phone }}"
                                           class="form-control m-input" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="m-portlet m-portlet--tab mb-25">
                        <div class="m-portlet__body">
                            <label class="col-form-label col-sm-12" style="margin-top: -9px">شعار العميل</label>
                            <hr style="margin-top: 7px">
                            <div class="col-sm-12">
                                <div class="m-portlet__head-title col-sm-12">

                                    @if($client->image != '')
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <img src="{{ asset('assets/images/clients/' . $client->image) }}"
                                                 alt="{{ $client->name }}" width="200">
                                        </div>
                                    @else
                                        <p>لا يوجد</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!--end::Form-->
            <div class="row">
                <div class="col-xl-6 col-lg-12">

                    <!--Begin::Portlet-->
                    <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        التذاكر الخاصة به
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <div class="m-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_widget2_tab1_content">

                                    <!--Begin::Timeline 3 -->
                                    <div class="m-timeline-3">
                                        <div class="m-timeline-3__items">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="text-center table" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>رقم الحركة</th>
                                                            <th>قيمة الحركة</th>
                                                            <th>إجمالي الرصيد</th>
                                                            <th>عن</th>
                                                            <th>تاريخ وتوقيت الحركة</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if($client != '')
                                                            @foreach($client->movements as $index => $movement)
                                                                <tr>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td>{{ $movement->id }}</td>
                                                                    <td>{{ $movement->value }}</td>
                                                                    <td>{{ $movement->remainder }}</td>
                                                                    <td>{{ $movement->about }}</td>
                                                                    <td>{{ $movement->created_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--End::Timeline 3 -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End::Portlet-->
                </div>
                <div class="col-xl-6 col-lg-12">

                    <!--Begin::Portlet-->
                    <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        كشف الحساب
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <div class="m-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_widget2_tab1_content">

                                    <!--Begin::Timeline 3 -->
                                    <div class="m-timeline-3">
                                        <div class="m-timeline-3__items">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="text-center table" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>رقم الحركة</th>
                                                            <th>قيمة الحركة</th>
                                                            <th>إجمالي الرصيد</th>
                                                            <th>عن</th>
                                                            <th>تاريخ وتوقيت الحركة</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if($client != '')
                                                            @foreach($client->movements as $index => $movement)
                                                                <tr>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td>{{ $movement->id }}</td>
                                                                    <td>{{ $movement->value }}</td>
                                                                    <td>{{ $movement->remainder }}</td>
                                                                    <td>
                                                                        @if( $movement->about === "شحن الرصيد" ) {{ $movement->about }} @else
                                                                            <a target="_blank" href="{{ route('balances.admin_show', $movement->about) }}">{{ $movement->about }}</a> @endif
                                                                    </td>
                                                                    <td>{{ $movement->created_at }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--End::Timeline 3 -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End::Portlet-->
                </div>
            </div>
            {{--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}


        </div>
    </div>

@stop
@section('style')
    <style>
        input[type="file"] {
            display: none;
        }

        #label {
            color: white;
            height: 40px;
            width: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@stop
