@extends('layouts.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>编辑公告</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
                <li>
                    <a href="{{url('/callboard')}}">公告列表</a>
                </li>
                <li class="active">
                    <strong>公告编辑</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑公告</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{url('/admin/callboard')}}" class="form-horizontal">
                            {{csrf_field()}}
                            <input type="hidden" name=""id >
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"  placeholder="公告标题">
                                    @if ($errors->has('title'))
                                        <span class="help-block m-b-none text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="author_name"  placeholder="作者">
                                    @if ($errors->has('author_name'))
                                        <span class="help-block m-b-none text-danger">{{ $errors->first('author_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">内容</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="content"  placeholder="内容">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a class="btn btn-white" href="{{url()->previous()}}">{!!trans('admin/action.actionButton.cancel')!!}</a>
                                    <button class="btn btn-primary" type="submit">{!!trans('admin/action.actionButton.submit')!!}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection