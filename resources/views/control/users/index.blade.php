@extends('control.app')

@section('content')
    @php($title = "لوحة التحكم | قائمة مستخدمو اللوحة")
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">

                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">

                                    <h3 class="kt-portlet__head-title" >مستخدمو اللوحة
                                        <a href="{{ route('users.create') }}" class="btn btn-default "
                                           style="color: black; margin-right: 600px">إضافة مستخدم</a>
                                    </h3>
                                </div>
                            </div>
                            <hr>
                            <form action="{{ route('users.index') }}">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <input type="text" name="search" class="form-control m-input" value="{{ Request()->search }}"
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
                                            <th>الإسم</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($users->count() > 0)
                                            @foreach($users as $index => $user)
                                                <tr>
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $user->name }}</td>

                                                    <td>
                                                        <div class="d-inline-flex">
                                                            <a href="{{ route('users.edit' , $user->id) }}"
                                                               class="btn btn-info m-btn--custom d-flex align-items-center justify-content-center fs-10 p-0 w-65 h-30 mr-3">
                                                                <i class="fa fa-edit pr-2 fs-10"></i><span>تعديل</span>
                                                            </a>
                                                            <a href="javascript:void (0)"
                                                               class="btn btn-danger m-btn--custom d-flex align-items-center justify-content-center fs-10 p-0 w-65 h-30"
                                                               onclick="if (confirm('هل انت منأكد من حذف المستخدم؟')){document.getElementById('delete-{{ $user->id }}').submit();}else { return false;}">
                                                                <i class="fa fa-trash-alt pr-2 fs-10"></i>حذف</a>
                                                            <form action="{{ route('users.destroy',$user->id) }}"
                                                                  method="post" id="delete-{{ $user->id }}"
                                                                  style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr><td colspan="10">لايوجد بيانات</td></tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                        {{--                                        {{ $trips->links('pagination::bootstrap-4') }}--}}
                                        {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
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
