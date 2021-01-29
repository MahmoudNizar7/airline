@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | تعديل بيانات الدولة")

    <livewire:countries :country="$country"/>


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
