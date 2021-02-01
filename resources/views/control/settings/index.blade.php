@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | الإعدادات")

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">

            <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-8">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            إعدادات المنصة
                                        </h3>

                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <ul class="nav nav-tabs nav-fill tab-base" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" id="button_general"
                                           role="tab">
                                            <i class="flaticon-settings-1"></i> إعدادات الموقع
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" id="button_social" role="tab"
                                           aria-selected="false">
                                            <i class="fa fa-poll-h"></i> إعدادات مواقع التواصل الإجتماعي
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" id="button_connect" role="tab"
                                           aria-selected="false">
                                            <i class="flaticon-users-1"></i> بيانات الإتصال
                                        </a>
                                    </li>
                                </ul>


                                <div id="general">
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">عنوان
                                            الموقع</label>
                                        <div class="col-9">
                                            <input name="title"
                                                   value="{{ $settings[0]->value ? $settings[0]->value : '' }}"
                                                   class="form-control m-input @error('title') is-invalid @enderror"
                                                   type="text"
                                                   id="example-text-input" placeholder="عنوان الموقع">
                                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input"
                                               class="col-3 col-form-label @error('description') is-invalid @enderror">وصف
                                            الموقع</label>
                                        <div class="col-9">
                                        <textarea name="description" rows="5"
                                                  class="form-control m-input"
                                                  placeholder="وصف الموقع"> {{ $settings[1]->value ? $settings[1]->value : '' }}</textarea>
                                            @error('description')<span
                                                class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">كلمات
                                            دلالية</label>
                                        <div class="col-9">
                                            <input name="tags" id="tags"
                                                   value="{{ $settings[2]->value ? $settings[2]->value : '' }}"
                                                   class="form-control m-input @error('tags') is-invalid @enderror"
                                                   placeholder="الكلمات المفتاحية"/>
                                            @error('tags')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">نص حقوق
                                            الملكية</label>
                                        <div class="col-9">
                                            <input name="rights"
                                                   value="{{ $settings[3]->value ? $settings[3]->value : '' }}"
                                                   class="form-control m-input @error('rights') is-invalid @enderror"
                                                   type="text"
                                                   placeholder="نص حقوق الملكية">
                                            @error('rights')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">المكان</label>
                                        <div class="col-9">
                                            <input name="location"
                                                   value="{{ $settings[4]->value ? $settings[4]->value : '' }}"
                                                   class="form-control m-input @error('location') is-invalid @enderror"
                                                   type="text" placeholder="المكان">
                                            @error('location')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">رابط ملف
                                            الشركة</label>
                                        <div class="col-9">
                                            <input name="link"
                                                   value="{{ $settings[5]->value ? $settings[5]->value : '' }}"
                                                   class="@error('link') is-invalid @enderror form-control m-input"
                                                   type="text"
                                                   id="example-text-input" placeholder="رابط ملف الشركة">
                                            @error('link')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>


                                <div id="social" style="display: none">
                                    @php ($keys =['facebook','twitter','instagram','whatsapp','linkedin','youtube','pinterest','snapchat'])
                                    @foreach($keys as $index => $key)
                                        <div class="form-group m-form__group row mb-25">
                                            <label for="example-text-input"
                                                   class="col-3 col-form-label">{{ ucfirst($key) }}</label>
                                            <div class="col-9">
                                                <input name="{{ $key }}"
                                                       value="{{ $settings[$index+5]->value ? $settings[$index + 6]->value : '' }}"
                                                       class="form-control m-input @error($key) is-invalid @enderror"
                                                       type="text" id="example-text-input">
                                                @error($key)<span
                                                    class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div id="connect" style="display: none">
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">البريد
                                            الإالكتروني</label>
                                        <div class="col-9">
                                            <input name="email"
                                                   value="{{ $settings[14]->value ? $settings[14]->value : '' }}"
                                                   placeholder="name@example.com"
                                                   class="form-control m-input @error('email') is-invalid @enderror"
                                                   type="email" id="example-text-input">
                                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row mb-25">
                                        <label for="example-text-input" class="col-3 col-form-label">رقم الهاتف</label>
                                        <div class="col-9">
                                            <input name="phone" placeholder="رقم الهاتف"
                                                   value="{{ $settings[15]->value ? $settings[15]->value : '' }}"
                                                   class="form-control m-input @error('phone') is-invalid @enderror"
                                                   type="text">
                                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__body">
                                <div class="m-portlet__head-title col-sm-12">
                                    <button type="submit" class="btn btn-success col-sm-12">حفظ</button>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet m-portlet--tab mb-25">
                            <div class="m-portlet__body">
                                <label class="col-form-label col-sm-12">الشعار</label>
                                <div class="col-sm-12">
                                    <div class="m-portlet__head-title col-sm-12">


                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <img src="{{ asset('assets/images/'.$settings[16]->value) }}"
                                                 width="200" class="image-preview">
                                        </div>

                                        <br>
                                        <br>

                                        <input type="file" name="image" id="file"
                                               class="@error('image') is-invalid @enderror  image" accept="image/*">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                        @enderror

                                        <label id="label" for="file" class="btn btn-success col-sm-12"><i
                                                class="material-icons"></i>اختر صورة</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop

@section('scripts')

    <script>

        $('#button_social').on('click', function () {
            $('#general').css('display', 'none');
            $('#connect').css('display', 'none');
            $('#social').css('display', 'block');
        });

        $('#button_general').on('click', function () {
            $('#social').css('display', 'none');
            $('#connect').css('display', 'none');
            $('#general').css('display', 'block');
        });

        $('#button_connect').on('click', function () {
            $('#social').css('display', 'none');
            $('#general').css('display', 'none');
            $('#connect').css('display', 'block');
        });

    </script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#tags').tagsInput({
                width: 'auto',
                defaultText: 'اضف'
            });
        });

        $(".image").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]); // convert to base64 string
            }

        });

    </script>

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


