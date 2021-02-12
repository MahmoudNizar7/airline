<div>
    <div class="content-homepage">
        <div class="content-body-homepage">
            <div class="container">
                <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="row justify-content-center pt-10">
                        <div class="col-xl-12">
                            <table class="table table-bordered table-hover table-striped ">
                                <thead class="thead-dark">
                                <tr class="text-center">
                                    <th><i class="fas fa-map-marker-alt"></i>{{ __('site.from') }}</th>
                                    <th><i class="fas fa-globe-americas"></i>{{ __('site.to') }}</th>
                                    <th><i class="fas fa-list-ol"></i>{{ __('site.trip_number') }}</th>
                                    <th><i class="fas fa-plane-departure"></i>{{ __('site.flying_line') }}</th>
                                    <th><i class="fa fa-dollar"></i>{{ __('site.price') }}</th>
                                    <th><i class="fas fa-chair"></i>{{ __('site.seats_number') }}</th>
                                    <th><i class="far fa-calendar-alt"></i>{{ __('site.trip_date') }}</th>
                                    <th><i class="fas fa-clock"></i>{{ __('site.trip_hour') }}</th>
                                    <th><i class="fas fa-file-invoice-dollar"></i>{{ __('site.reserve') }}</th>
                                </tr>
                                </thead>

                                @if($trips->count() > 0)
                                    <tbody>
                                    @foreach($trips as $trip)
                                        <tr>
                                            <td>{{ $trip->from }}</td>
                                            <td>{{ $trip->to }}</td>
                                            <td>{{ $trip->travel_no }}</td>
                                            <td>{{ $trip->air_line }}</td>
                                            <td>{{ $trip->price }}</td>
                                            <td>{{ $trip->seats }}</td>
                                            <td>{{ date('d/m/Y D', strtotime($trip->date)) }}</td>
                                            <td>{{ date('h:i A', strtotime($trip->date)) }}</td>
                                            <td>
                                                <a href="#" class="btn btn-subscripe btn-hover clickThis"
                                                   data-id="{{ $trip->id }}"
                                                   @if(!auth('client')->check()) wire:click='clientLogin'
                                                   @else  data-toggle="modal" data-target="#exampleModal" @endif><i
                                                        class="icon-checked ml-1">
                                                        <span class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>{{ __('site.reserve_now') }}</a>

                                            </td>

                                        </tr>
                                    @endforeach

                                    @else
                                        <tr>
                                            <td style="text-align: center" colspan="9">{{ __('site.no_trips') }}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('client_trips.create') }}" method="get">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('site.number_of_travelers') }}</h5>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">{{ __('site.adults') }}</label>
                            <input type="number" min="0" class="form-control" id="exampleFormControlInput1"
                                   name="adults">
                            @error('adults') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">{{ __('site.children') }}</label>
                            <input type="number" min="0" class="form-control" id="exampleFormControlInput2"
                                   name="children">
                            @error('children') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">{{ __('site.baby') }}</label>
                            <input type="number" min="0" class="form-control" id="exampleFormControlInput2" name="baby">
                            @error('baby') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <input type="number" style="display: none" id="trip_id" name="trip_id">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">{{ __('site.close') }}</button>
                        <button type="submit" class="btn btn-primary close-modal">{{ __('site.reserve') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
