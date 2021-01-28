@extends('control.app')
@section('content')

    <livewire:trips />

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
