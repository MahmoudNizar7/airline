@extends('control.app')
@section('style')
    <style>
        .inbox {
            background: #FFF;
            padding: 20px;
        }

        .inbox .pagination-control {
            text-align: left
        }

        .inbox .compose-btn {
            color: #fff;
            text-shadow: none;
            text-align: center;
            margin-bottom: 18px;
            background: #35aa47;
        }

        .inbox .inbox-nav {
            padding: 0px;
        }

        .inbox .inbox-nav > li {
            list-style: none
        }

        .inbox .inbox-nav li a {
            color: #4d82a3;
            display: block;
            font-size: 15px;
            border-left: none;
            text-align: right !important;
            padding: 8px 14px;
            margin-bottom: 1px;
            background: #f4f9fd;
        }

        .inbox .inbox-nav li:hover a {
            color: #4d82a3;
            background: #eef4f7 !important;
            text-decoration: none;
        }

        .inbox .inbox-nav li.active a, .inbox .inbox-nav li.active:hover a {
            color: #fff;
            border-left: none;
            background: #169ef4 !important;
            text-decoration: none;
        }

        .inbox .inbox-nav > li > a .badge {
            float: left;
            margin-top: 1px;
        }

        .badge-success {
            background-color: #36c6d3;
        }

        .badge {
            font-size: 11px !important;
            font-weight: 300;
            height: 18px;
            color: #fff;
            padding: 3px 6px;
            -webkit-border-radius: 12px !important;
            -moz-border-radius: 12px !important;
            border-radius: 12px !important;
            text-shadow: none !important;
            text-align: center;
            vertical-align: middle;
        }

        .inbox .inbox-header h1 {
            color: #666;
            font-size: 24px;
            margin: 0 0 20px;
        }

        .inbox .inbox-header form {
            margin: 0 0 20px;
        }

        .inbox .table td, .inbox .table th {
            border: none;
        }

        .inbox .pagination-control .pagination-info {
            display: inline-block;
            padding-right: 10px;
            font-size: 14px;
            line-height: 14px;
        }

        .inbox .btn.btn-outline.blue {
            border-color: #3598dc;
            color: #3598dc;
            background: 0 0;
        }

        .inbox .table .btn {
            margin-top: 0;
            margin-left: 0;
            margin-right: 5px;
        }

        .inbox .table thead th {
            border: 0;
            background: #eef4f7;
            border-bottom: solid 5px #fff;
        }

        .inbox .table-striped tbody > tr:nth-child(odd) > td {
            background: #f8fbfd;
            cursor: pointer;
            padding: 8px;
            vertical-align: middle;
        }

        .inbox .table-striped tbody > tr:nth-child(even) > td {
            background: #ffffff;
            cursor: pointer;
            padding: 8px;
            vertical-align: middle;
        }

        .inbox tr i.inbox-started {
            color: #fd7b12;
        }

        .inbox .table-hover tbody tr:hover > td, .inbox .table-hover tbody tr:hover > th {
            background: #eef4f7;
        }

        .inbox-view-info {
            margin-bottom: 30px;
            border: 1px solid #EEE;
            padding: 10px;
        }

        .inbox-info-btn {
            text-align: left;
        }

        .reply-btn {
            padding: 5px 15px;
            text-align: left;
            color: #FFFFFF;
            background-color: #3598dc;
        }

        .reply-btn i {
            padding-left: 5px
        }

        .avatar-inbox {
            width: 40px;
            border-radius: 50%;
            margin-left: 15px;
        }

        .inbox .inbox-view p {
            line-height: 40px;
            margin-bottom: 20px;
        }

    </style>
@stop
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="inbox">
                <div class="row">

                    <div class="col-md-12">
                        <div class="inbox-body">
                            <div class="inbox-content">
                                <div class="inbox-header inbox-view-header">
                                    <h1>{{ $mail->title }}</h1>
                                </div>
                                <div class="inbox-view-info">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <span class="bold">{{ $mail->name }}</span>
                                            <span>[ {{ $mail->email }} ]</span>
                                        </div>
                                        <span style="margin-right: 245px">{{ $mail->created_at }}</span>
                                    </div>
                                </div>
                                <div class="inbox-view">{!! $mail->body !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <hr>
                <div class="col-lg-12">
                    <form action="{{ route('inbox.reply') }}" method="post" class="m-form m-form--fit m-form--label-align-right">
                        @csrf
                        <div class="m-portlet__body b-1">
                            <div class="inbox-form-group mail-to ">
                                <label class="control-label">الى:</label>
                                <div class="controls controls-to">
                                    <input type="text" value="{{ $mail->email }}" class="form-control" name="to">
                                </div>
                            </div>
                            <div class="inbox-form-group mail-to ">
                                <label class="control-label">الموضوع:</label>
                                <div class="controls controls-to">
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <br>
                            </div>
                            <div class="form-group  row">
                                <div class=" col-sm-12">
                                    <textarea name="body" class="summernote" id="m_summernote_1"></textarea>
                                </div>
                            </div>
                            <div class=" inbox-info-btn">
                                <div class="btn-group open">
                                    <button type="submit" data-messageid="23" class="blue btn reply-btn">
                                        <i class="fa fa-reply"></i> إرسال رد
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@stop
