<div>
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">
            <!--begin::Form-->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__body">

                                <div class="mb-40 m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">العميل</label>
                                    <div class="col-10">
                                        <select wire:model="client_id" name="client_id" id="" class="@error('client_id') is-invalid @enderror form-control m-bootstrap-select--square m_selectpicker" title="اختر العميل">
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('client_id')<span class="invalid-feedback" role="alert"><strong>{{ __($message) }}</strong></span>@enderror
                                    </div>
                                </div>

                                <div class="mb-40 m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">الرصيد</label>
                                    <div class="col-10">
                                        <input type="number" wire:model="balance" name="balance" value="" class="@error('balance') is-invalid @enderror form-control m-input" id="example-text-input">
                                        @error('balance')<span class="invalid-feedback" role="alert"><strong>{{ __($message) }}</strong></span>@enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__body">
                                <div class="m-portlet__head-title col-sm-12">
                                    <button type="submit" wire:click="store" class="btn btn-success m-btn--wide col-sm-12">حفظ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
