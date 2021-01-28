@extends('control.app')

@section('content')
    @php($title = "لوحة التحكم | قائمة العملاء")
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">

                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">

                                    <h3 class="kt-portlet__head-title">
                                        الرحلات
                                        <a href="{{ route('trips.create') }}" class="btn btn-default "
                                           style="color: black; margin-right: 770px">إضافة رحلة</a>
                                    </h3>
                                </div>
                            </div>
                            <hr>
                            <form action="{{ route('trips.index') }}">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <input type="text" name="search" class="form-control m-input"
                                               placeholder="بحث..." id="generalSearch">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-info">بحث <i class="la la-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="text-center table" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>رقم الرحلة</th>
                                            <th>من</th>
                                            <th>إلى</th>
                                            <th>خط الطيران</th>
                                            <th>السعر للكبير و الطفل</th>
                                            <th>السعر للرضيع</th>
                                            <th>عدد المقاعد</th>
                                            <th>توقيت الرحلة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($trips->count() > 0)
                                            @foreach($trips as $index => $trip)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $trip->travel_no }}</td>
                                                    <td>{{ $trip->from }}</td>
                                                    <td>{{ $trip->to }}</td>
                                                    <td>{{ $trip->air_line }}</td>
                                                    <td>{{ $trip->price }}</td>
                                                    <td>{{ $trip->baby_price }}</td>
                                                    <td>{{ $trip->seats }}</td>
                                                    <td>{{ $trip->date }}</td>

                                                    <td>
                                                        <div class="d-inline-flex">
                                                            <a href="{{ route('trips.edit' , $trip->id) }}"
                                                               class="btn btn-info m-btn--custom d-flex align-items-center justify-content-center fs-10 p-0 w-65 h-30 mr-3">
                                                                <i class="fa fa-edit pr-2 fs-10"></i><span>تعديل</span>
                                                            </a>
                                                            <a href="javascript:void (0)"
                                                               class="btn btn-danger m-btn--custom d-flex align-items-center justify-content-center fs-10 p-0 w-65 h-30"
                                                               onclick="if (confirm('هل انت منأكد من حذف الرحلة؟')){document.getElementById('delete-{{ $trip->id }}').submit();}else { return false;}">
                                                                <i class="fa fa-trash-alt pr-2 fs-10"></i>حذف</a>
                                                            <form action="{{ route('trips.destroy',$trip->id) }}"
                                                                  method="post" id="delete-{{ $trip->id }}"
                                                                  style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                        {{--                                        {{ $trips->links('pagination::bootstrap-4') }}--}}
                                        {{ $trips->appends(request()->query())->links('pagination::bootstrap-4') }}
                                        {{--{{ $trips->links() }}--}}
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
