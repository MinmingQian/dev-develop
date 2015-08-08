@extends('layouts.default')

@section('meta')
    <meta http-equiv="refresh" content="2; url={{url('/')}}" />
@endsection

@section('content')
    <div class="container"  style="text-align: center;">
        <div class="panel panel-danger" style="margin-top: 300px; margin-bottom: 300px;">
            <div class="panel-body" style="margin-top: 20px; margin-bottom: 20px;">
                已经提交管理员审核，3秒后跳转到主页.....
            </div>
            <div class="panel-footer">xinyouju.com</div>
        </div>
    </div>

@endsection


