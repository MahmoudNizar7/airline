@extends('control.app')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">

                <div class="col-xl-10 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  h-auto">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                    role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab"
                                           href="#m_user_profile_tab_1" role="tab">
                                            <i class="flaticon-share m--hide"></i>
                                            الملف الشخصي
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" id="tap_2" data-toggle="tab"
                                           href="#m_user_profile_tab_2" role="tab">
                                            الاعدادات
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="m_user_profile_tab_1">
                                <form action="{{ route('profile.update') }}" method="post"
                                      class="m-form m-form--fit m-form--label-align-right">
                                    @csrf
                                    <div class="m-portlet__body">

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">الملف الشخصي</h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">الاسم
                                                كامل</label>
                                            <div class="col-7">
                                                <input name="name"
                                                       class="@error('name') is-invalid @enderror form-control m-input"
                                                       type="text" value="{{ auth()->user()->name }}">
                                                @error('name')<span
                                                    class="invalid-feedback"><strong>{{ __($message) }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">البريد
                                                الإلكتروني</label>
                                            <div class="col-7">
                                                <input name="email" disabled class="form-control m-input" type="text"
                                                       value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2">
                                                </div>
                                                <div class="col-7">
                                                    <button type="submit"
                                                            class="btn btn-success m-btn  m-btn--custom pull-left">حفظ
                                                    </button>&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane " id="m_user_profile_tab_2">
                                <form action="{{ route('password.update') }}" method="post"
                                      class="m-form m-form--fit m-form--label-align-right">
                                    @csrf
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">تعديل كلمة المرور</h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-3 col-form-label">كلمة المرور
                                                القديمة</label>
                                            <div class="col-7">
                                                <input name="old_password" value="{{ old('old_password') }}"
                                                       class="@error('old_password') is-invalid @enderror form-control m-input"
                                                       type="password">
                                                @error('old_password')<span
                                                    class="invalid-feedback"><strong>{{ __($message) }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-3 col-form-label">كلمة المرور
                                                الجديدة</label>
                                            <div class="col-7">
                                                <input name="new_password" value="{{ old('new_password') }}"
                                                       class="@error('new_password') is-invalid @enderror form-control m-input"
                                                       type="password">
                                                @error('new_password')<span
                                                    class="invalid-feedback"><strong>{{ __($message) }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-3 col-form-label">تأكيد كلمة
                                                المرور</label>
                                            <div class="col-7">
                                                <input name="confirmation_password"
                                                       value="{{ old('confirmation_password') }}"
                                                       class="@error('confirmation_password') is-invalid @enderror form-control m-input"
                                                       type="password">
                                                @error('confirmation_password')<span
                                                    class="invalid-feedback"><strong>{{ __($message) }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <div class="row">
                                                    <div class="col-2">
                                                    </div>
                                                    <div class="col-7">
                                                        <button type="submit"
                                                                class="btn btn-success m-btn  m-btn--custom pull-left">
                                                            حفظ
                                                        </button>&nbsp;&nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    @if($tap = \Illuminate\Support\Facades\Session::has('tap_name') || $errors->any())
        <script>
            $('#m_user_profile_tab_2').addClass('active');
            $('#m_user_profile_tab_1').removeClass('active');
        </script>
    @endif
@stop
