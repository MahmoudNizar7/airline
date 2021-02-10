@extends('front.app')
@section('content')
    @php($page = "home")
    <livewire:reservation />

@stop
@section('scripts')
    <script>

        $(document).on("click", ".clickThis", function () {
            var trip_id = $(this).data('id');
            $("#trip_id").val(trip_id);
        });

    </script>
@stop
