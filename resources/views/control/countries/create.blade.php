@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | إضافة دولة")

    <livewire:countries />
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
