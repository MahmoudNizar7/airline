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
                                        إضافة مستخدم
                                    </h3>
                                    <a href="{{ route('users.index') }}" class="btn btn-default"
                                       style="color: black; margin-right: 350px">كل المستخدمين</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row mb-25">
                                <label for="name" class="col-3 col-form-label">الإسم</label>
                                <div class="col-9">
                                    <input name="name" wire:model="name" value="" class="form-control @error('name') is-invalid @enderror" type="text" id="name" autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="email" class="col-3 col-form-label">البريد الإلكتروني</label>
                                <div class="col-9">
                                    <input name="email" wire:model="email" value="" class="form-control @error('email') is-invalid @enderror" type="email" id="email" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ __($message) }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group m-form__group row mb-25">
                                <label for="password" class="col-3 col-form-label">كلمة المرور</label>
                                <div class="col-9">
                                    <input name="password" wire:model="password" class="form-control @error('password') is-invalid @enderror " type="password" id="password">
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
                                @if($user_id)
                                    <button type="submit" class="btn btn-success col-sm-12" wire:click="update">تعديل</button>
                                @else
                                    <button type="submit" class="btn btn-success col-sm-12" wire:click="store">حفظ</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Form-->
        </div>
    </div>
</div>
