@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/nestable/nestable.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/ladda/ladda-themeless.min.css')}}">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>签到</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
                <li class="active">
                    <strong>签到</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            @include('flash::message')
            <div class="col-lg-6">
                <div class="ibox animated fadeInRightBig">
                    <div class="ibox-title">
                        <h5>签到</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 menuBox">
                <div id='qrcode'></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('vendors/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('vendors/ladda/spin.min.js')}}"></script>
    <script src="{{asset('vendors/ladda/ladda.min.js')}}"></script>
    <script src="{{asset('vendors/ladda/ladda.jquery.min.js')}}"></script>
    <script src="{{asset('vendors/layer/layer.js')}}"></script>
    <script src="{{asset('admin/js/menu/menu.js')}}"></script>
    <script src="{{asset('admin/js/menu/qrcode.js')}}"></script>
    <script type="text/javascript">
        function getBaseUrl() {
            var currentUrl = window.location.toString().split('/');
            var baseUrl = currentUrl[0];
            for (i = 1; i < currentUrl.length - 2; ++i) {
                baseUrl += '/' + currentUrl[i];
            }
            return baseUrl;
        }
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width : 500,
            height : 500
        });
        $.get('/admin/checkin/qrcode',(result)=>{
            console.log(result)
            qrcode.makeCode(getBaseUrl() + result + `&checkintime=${parseInt(new Date().getTime() / 1000)}`)
        })
    </script>
@endsection