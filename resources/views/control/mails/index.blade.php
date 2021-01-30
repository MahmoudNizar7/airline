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
            color: #ffffff;
            background: 0 0;
            border-radius: 0px;
            background-color: #3598dc;
            padding: 5px 10px;
        }

        .inbox .btn.btn-outline.blue.dropdown-toggle {
            border-color: #3598dc;
            color: #ffffff;
            background: 0 0;
            border-radius: 0px;
            background-color: #3598dc;
            padding: 5px 20px;
        }

        .inbox .btn.btn-outline.blue.dropdown-toggle i {
            padding-right: 5px;
            transform: translateX(-10px) translateY(1px);
        }

        .inbox .table .btn {
            margin-top: 0;
            margin-left: 0;
            margin-right: 5px;
        }

        .inbox .table thead th {
            border: 0;
            border-bottom: solid 5px #fff;
        }

        .inbox .table-striped tbody > tr:nth-child(odd) > td {

            cursor: pointer;
            padding: 8px;
            vertical-align: middle;
        }

        .inbox .table-striped tbody > tr:nth-child(even) > td {

            cursor: pointer;
            padding: 8px;
            vertical-align: middle;
        }

        .inbox tr i.inbox-started {
            color: #fd7b12;
        }

        .inbox .fa-star {
            cursor: pointer;
        }

        .inbox td {
            padding: 15px;
        }

        .inbox .nav-link.dropdown-toggle:after, .btn.dropdown-toggle:after {
            display: none
        }

        .inbox .green.btn {
            color: #FFFFFF;
            background-color: #26a69a;
        }

        .m-checkbox > span:after {
            transform: rotate(45deg)
        }

        .m-checkbox > span {
            top: -3px;
        }

        .inbox .view-message a {
            color: #000;
        }

        .inbox .view-message a:hover {
            text-decoration: none
        }

    </style>

@stop
@section('content')
    @php($title = "لوحة التحكم | قائمة الرسائل")

    <!-- END: Subheader -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="inbox">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inbox-body">
                            <div class="inbox-content">
                                <form action="{{ route('inbox.destroy',"delete") }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <table class="table ">

                                        <tr>
                                            <th colspan="7">
                                                <label class="m-checkbox">
                                                    <input type="checkbox" class="radio" id="checkAll"><span
                                                        style="top: 10px;right: 5px"></span>
                                                    <button type="submit" id="delete" class="btn btn-danger" disabled><i
                                                            class="fa fa-trash"></i>
                                                        حذف
                                                    </button>
                                                </label>
                                            </th>
                                        </tr>

                                        <tbody>
                                        @if($messages->count() > 0)
                                            @foreach($messages as $message)
                                                <tr class="unread" data-messageid="1">
                                                    <td class="inbox-small-cells"><label class="m-checkbox"><input
                                                                type="checkbox" class="mail_id" name="message_id[]"
                                                                value="{{ $message->id }}"><span></span></label></td>
                                                    <td class="view-message hidden-xs">{{ $message->name }}</td>
                                                    <td class="view-message "><a
                                                            href="{{ route('inbox.show', $message->id) }}">{{ $message->title }}</a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">{{ $message->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
    </div>

@stop
@section('scripts')

    <script>
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>

    <script>

        $('.fa-star').click(function () {
            $(this).toggleClass('inbox-started')
        });

        $('.mail_id').change(function () {
            go();
        });

        $('.radio').change(function () {
            go();
        });

        function go() {
            if (jQuery('input[class=mail_id]:checked').length) {
                $('#delete').removeAttr("disabled");
            } else {
                $('#delete').attr("disabled", true);
            }
        }

        $('input').on('click', function () {
            if (jQuery('input[class=mail_id]:checked').length == 0) {
                $(".radio").prop('checked', false);
            }
        })


    </script>

@stop
