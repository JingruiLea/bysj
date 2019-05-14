@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{!!trans('callboard.title')!!}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
            </li>
            <li>
                <a href="{{url('/callboard')}}">{!!trans('callboard.breadcrumb.list')!!}</a>
            </li>
            <li class="active">
                <strong>{!!trans('callboard.breadcrumb.showarticle')!!}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <div class="title-action">
            <a href="{{url('/callboard')}}" class="btn btn-info">返回</a>
        </div>
    </div>
    <div class="col-lg-12">
        <h1 id="title">
            {{$title}}
        </h1>
        <p>作者:{{$author}}</p>
        <p id="content">{{$content}}</p>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">

    </script>
@endsection