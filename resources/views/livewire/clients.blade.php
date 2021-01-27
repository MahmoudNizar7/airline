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
                                        العملاء
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row mb-25">
                                <label for="name" class="col-3 col-form-label">الاسم</label>
                                <div class="col-9">
                                    <input name="name" wire:model="name" value="endif"
                                           class="form-control @error('name') is-invalid @enderror " type="text"
                                           id="name" autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="email" class="col-3 col-form-label">البريد
                                    الإلكتروني</label>
                                <div class="col-9">
                                    <input name="email" wire:model="email" type="email" value="endif"
                                           class="@error('email') is-invalid @enderror form-control m-input"
                                           id="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="company" class="col-3 col-form-label">الشركة</label>
                                <div class="col-9">
                                    <input name="company" wire:model="company" type="text" value="endif"
                                           class="form-control m-input @error('company') is-invalid @enderror ">
                                    @error('company')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group m-form__group row mb-25">
                                <label for="example-text-input" class="col-3 col-form-label">العنوان</label>
                                <div class="col-9">
                                    <input name="address" wire:model="address" type="text" value="endif"
                                           class="@error('address') is-invalid @enderror form-control m-input">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="phone" class="col-3 col-form-label">رقم الهاتف</label>
                                <div class="col-9">
                                    <input name="phone" wire:model="phone" type="text" value="endif"
                                           class="@error('phone') is-invalid @enderror form-control m-input">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="example-text-input" class="col-3 col-form-label">كلمة المرور</label>
                                <div class="col-9">
                                    <input name="password" wire:model="password" type="password"
                                           class="@error('password') is-invalid @enderror form-control m-input">
                                    @if($client_id)<span class="text-warning" role="alert">اتركه فارغاً إذا كنت لا تريد تغيير كلمة المرور</span>@endif

                                    @error('password')
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

                                @if($client_id)
                                    <button type="submit" class="btn btn-success col-sm-12" wire:click="update">تعديل</button>
                                @else
                                    <button type="submit" class="btn btn-success col-sm-12" wire:click="store">حفظ</button>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="m-portlet m-portlet--tab mb-25">
                        <div class="m-portlet__body">
                            <label class="col-form-label col-sm-12">شعار العميل</label>
                            <div class="col-sm-12">
                                <div class="m-portlet__head-title col-sm-12">

                                    @if($image)
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <img src="{{ $image === $image_name ? asset('assets/images/clients/'.$image) : $image->temporaryUrl() }} " width="200">
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

                                    @if($client_id)
                                        <label id="label" for="file" class="btn btn-success col-sm-12"><i class="material-icons"></i>&nbsp;تعديل الصورة</label>
                                    @else
                                        <label id="label" for="file" class="btn btn-success col-sm-12"><i class="material-icons"></i>اختر الصورة </label>
                                    @endif
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
