@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>生日列表</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
                <li class="active">
                    <strong>生日列表</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{!!trans('callboard.callboard_list')!!}</h5>
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
                        @include('flash::message')
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTablesAjax" >
                                <thead>
                                <tr>
                                    <th>剩余天数</th>
                                    <th>生日时间</th>
                                    <th>姓名</th>
                                    <th>学号</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('vendors/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('vendors/layer/layer.js')}}"></script>
    <script src="{{asset('admin/js/birthday/datatable.js')}}"></script>
    <script type="text/javascript">
        $(document).on('click','.destroy_item',function() {
            var _item = $(this);
            layer.confirm('{{trans('admin/alert.deleteTitle')}}', {
                btn: ['{{trans('admin/action.actionButton.destroy')}}', '{{trans('admin/action.actionButton.no')}}'],
                icon: 5,
            },function(index){
                _item.children('form').submit();
                layer.close(index);
            });
        });
        $(document).on('click','.reset_password',function() {
            var item = $(this);
            layer.confirm('{{trans('admin/alert.reset_password').config('admin.global.reset')}}', {
                btn: ['{{trans('admin/action.actionButton.reset')}}','{{trans('admin/action.actionButton.no')}}'] //按钮
            }, function(){
                var _id = item.attr('data-id');
                $.ajax({
                    url:'/admin/user/'+_id+'/reset',
                    success:function (response) {
                        layer.msg(response.msg);
                        layer.close(index);
                    }
                });
            });
        });
    </script>
@endsection