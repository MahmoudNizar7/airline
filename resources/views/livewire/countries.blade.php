<div>
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
                                         إضافة دولة
                                    </h3>
                                    <a href="{{ route('countries.index') }}" class="btn btn-default "
                                       style="color: black; margin-right: 450px">كل الدول</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row mb-25">
                                <label for="name_ar" class="col-3 col-form-label">إسم الدولة بالعربي</label>
                                <div class="col-9">
                                    <input name="name_ar" wire:model="name_ar" value="" placeholder="مثلاً: المملكة العربية السعودية"
                                           class="form-control @error('name_ar') is-invalid @enderror " type="text"
                                           id="name_ar" autocomplete="name_ar">
                                    @error('name_ar')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="name_en" class="col-3 col-form-label">إسم الدولة بالإنجليزي</label>
                                <div class="col-9">
                                    <input name="name_en" wire:model="name_en" value="" placeholder="مثلاً: saudi arabia"
                                           class="form-control @error('name_en') is-invalid @enderror " type="text"
                                           id="name_en" autocomplete="name_en">
                                    @error('name_en')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="code" class="col-3 col-form-label">مقدمة الدولة</label>
                                <div class="col-9">
                                    <input name="code" wire:model="code" value="" placeholder="مثلاً: 0096"
                                           class="form-control @error('code') is-invalid @enderror " type="text"
                                           id="code" autocomplete="code">
                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__body">
                            <div class="m-portlet__head-title col-sm-12">
                                <button type="submit" class="btn btn-success col-sm-12" wire:click="store">حفظ</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet m-portlet--tab mb-25">
                        <div class="m-portlet__body">
                            <label class="col-form-label col-sm-12">علم الدولة</label>
                            <div class="col-sm-12">
                                <div class="m-portlet__head-title col-sm-12">

                                    @if($image)
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <img src="{{ $image->temporaryUrl() }} " width="200">
                                        </div>
                                    @endif
                                    <br>
                                    <br>

                                    <input type="file" name="image" wire:model="image" id="file" class="@error('image') is-invalid @enderror image" accept="image/*">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                        <label id="label" for="file" class="btn btn-success col-sm-12"><i class="material-icons"></i>اختر الصورة </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Form-->
        </div>
    </div>
</div>
