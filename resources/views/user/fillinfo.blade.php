@extends('layouts.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>编辑信息</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
                <li>
                    <a href="{{url('/callboard')}}">信息列表</a>
                </li>
                <li class="active">
                    <strong>信息编辑</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑信息</h5>
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
                        <form method="post" action="{{url('/userinfo')}}" class="form-horizontal" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">照片</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="photo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">学号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}" readonly="readonly">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" readonly="readonly">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sex"  value="{{$info?$info->sex:''}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">民族</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nation"  value="{{$info?$info->nation:''}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">家庭住址</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address"  value="{{$info?$info->address:''}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">出生日期</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="birthday" placeholder="格式如:1998-03-23" value="{{$info?$info->birthday:''}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">手机号码</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" value="{{$info?$info->phone:''}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">QQ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="qq"  value="{{$info?$info->qq:''}}">
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