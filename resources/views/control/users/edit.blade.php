@extends('control.app')
@section('content')

    @php($title = "لوحة التحكم | تعديل بيانات المستخدم")

    <livewire:users :user="$user"/>

@stop
