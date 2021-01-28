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
                                        الرحلات
                                    </h3>
                                    <a href="{{ route('trips.index') }}" class="btn btn-default "
                                       style="color: black; margin-right: 450px">كل الرحلات</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row mb-25">
                                <label for="name" class="col-3 col-form-label">من</label>
                                <div class="col-9">
                                    <input name="from" wire:model="from" value="" placeholder="  مثلاً : Baghdad" class="form-control @error('from') is-invalid @enderror " type="text" id="name">
                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="email" class="col-3 col-form-label">إلى</label>
                                <div class="col-9">
                                    <input name="to" wire:model="to" type="text" value="" placeholder="  مثلاً : Istanbul Turkey" class="@error('to') is-invalid @enderror form-control m-input">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="company" class="col-3 col-form-label">رقم الرحلة</label>
                                <div class="col-9">
                                    <input name="travel_no" wire:model="travel_no" type="text" placeholder="  مثلاً :  MS 638" value="" class="form-control m-input @error('travel_no') is-invalid @enderror ">
                                    @error('travel_no')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group m-form__group row mb-25">
                                <label for="example-text-input" class="col-3 col-form-label">خط الطيران</label>
                                <div class="col-9">
                                    <input name="air_line" wire:model="air_line" type="text" placeholder="  مثلاً :  Egypt Air" value="" class="@error('air_line') is-invalid @enderror form-control m-input">
                                    @error('air_line')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">السعر</label>
                                <div class="col-9">
                                    <input name="price" wire:model="price" type="number" value="" class="@error('price') is-invalid @enderror form-control m-input">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">السعر للرضيع</label>
                                <div class="col-9">
                                    <input name="baby_price" wire:model="baby_price" type="number" value="" class="@error('baby_price') is-invalid @enderror form-control m-input">
                                    @error('baby_price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">عدد المقاعد</label>
                                <div class="col-9">
                                    <input name="seats" wire:model="seats" type="number" value="" class="@error('seats') is-invalid @enderror form-control m-input">
                                    @error('seats')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">التاريخ و الوقت</label>
                                <div class="col-9">
                                    <input name="date" wire:model="date" type="datetime-local" value="" class="@error('date') is-invalid @enderror form-control m-input">
                                    @error('date')
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
                            <label class="col-form-label col-sm-12">شعار شركة الطيران</label>
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
