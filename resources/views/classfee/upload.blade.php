@extends('layouts.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>上传作业</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
                <li>
                    <a href="{{url('/callboard')}}">作业列表</a>
                </li>
                <li class="active">
                    <strong>作业上传</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>作业上传</h5>
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
                        <form method="post" action="{{url('/homework/upload')}}" class="form-horizontal" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$id}}">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作业名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="homeworkname" readonly="readonly" value="{{$homework->homeworkname}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">教师</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="teachername"  readonly="readonly" value="{{$homework->teachername}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文件</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="homework" required>
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