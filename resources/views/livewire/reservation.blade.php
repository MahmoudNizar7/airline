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
                                <th><i class="fas fa-map-marker-alt"></i> من</th>
                                <th><i class="fas fa-globe-americas"></i> إلى</th>
                                <th><i class="fas fa-list-ol"></i> رقم الرحلة</th>
                                <th><i class="fas fa-plane-departure"></i> خط الطيران</th>
                                <th><i class="fa fa-dollar"></i>السعر</th>
                                <th><i class="fas fa-chair"></i> عدد المقاعد</th>
                                <th><i class="far fa-calendar-alt"></i> تاريخ الرحلة</th>
                                <th><i class="fas fa-clock"></i> الساعة</th>
                                <th><i class="fas fa-file-invoice-dollar"></i> حجز</th>
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
                                            <a href="#" class="btn btn-subscripe btn-hover" @if(!auth('client')->check()) wire:click='clientLogin' @else  data-toggle="modal" data-target="#exampleModal" @endif><i class="icon-checked ml-1">
                                                    <span class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span></i>احجز
                                                الأن</a>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            @else
                                <tr>
                                    <td style="text-align: center" colspan="9">لايوجد رحلات</td>
                                </tr>
                            @endif

                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter Email">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
