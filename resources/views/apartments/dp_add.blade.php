@extends('layouts.default')

@section('title')
    心有所居｜房源添加
@endsection


@section('content' )
        <!-- tabs left -->
<div class="container" style="width: 100%;padding: 0px;">
    <div class="tabbable tabs-left" style="width: 100%; padding-top: 50px;">

        <div class="col-sm-12" style="padding: 0px;">
            <div class="col-sm-2" style="padding: 0px;background-color: #F5F5F5;overflow: scroll;height: 100vh;" >
                <ul class="nav tab-sub">
                    <li class="active" style="z-index: 2;">
                        <a href="#houseinfo" data-toggle="tab">房屋描述
                            <i class="fa fa-home fa-2x" style="float: right;line-height: 22px;"></i>

                        </a>
                    </li>
                    <li style="z-index: 1;"><a href="#roominfo" data-toggle="tab" >房间描述<i class="fa fa-bed fa-2x" style="float: right;line-height: 22px;"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-10" style="padding: 0px;overflow: scroll;height: 100vh;">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>信息填写不完整!</strong><br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::open(array('url' => 'apartments/submit','method'=>'post','files' => true)) !!}
                <div class="tab-content addstyle" style="padding: 5vh;">
                    <div class="tab-pane active" id="houseinfo" style="margin-bottom: 5%;">
                        <table class="addstyle">
                            <tr>
                                <td>
                                    {!! Form::label('dname','房屋名称:') !!}
                                </td>
                                <td>
                                    <input type="text" name="depname" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dsize','房屋面积:') !!}
                                </td>
                                <td>
                                    {!! Form::text('depsize',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dadd','房屋地址:') !!}
                                </td>
                                <td>
                                    {!! Form::text('depadd',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('ddes','房屋描述:') !!}
                                </td>
                                <td>
                                    {!! Form::text('depdes',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dlevel','楼层:') !!}
                                </td>
                                <td>
                                    {!! Form::text('deplevel',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('drenttime','出租时间:') !!}
                                </td>
                                <td>
                                    <input type="date" name="deprenttime">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('ddeposit','押金:',['style' => 'float:right;']) !!}
                                </td>
                                <td>
                                    {!! Form::text('depdeposit',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dprice','租金:',['style' => 'float:right;']) !!}
                                </td>
                                <td>
                                    {!! Form::text('depprice',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dpintro','介绍:',['style' => 'float:right;']) !!}
                                </td>
                                <td>
                                    {!! Form::textarea('depintro',null,['class' => 'form-control']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::label('dppic','公寓照片:',['style' => 'float:right;']) !!}
                                </td>
                                <td>
                                    <input type="file" name="deppic">
                                </td>
                            </tr>

                        </table>
                        <hr>
                        <div class="col-md-12">
                            <a class="btn btn-info btnNext" style="float:right;">下一页</a>
                        </div>


                    </div>

                    <div class="tab-pane" id="roominfo">
                        <div class="col-md-12" id="roomcontent">
                            <table class="addstyle" id="rminfo-1">
                                <tr>
                                    <td>
                                        <label>房间名称:</label>
                                    </td>
                                    <td>
                                        <input type="text" name="roomname[1]" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>面积:</label>
                                    </td>
                                    <td>
                                        <input type="text" name="roomsize[1]">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>朝向:</label>
                                    </td>
                                    <td>
                                        <input type="text" name="roomori[1]">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>空调:</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="roomac[1]" value="1">有
                                        <input type="radio" name="roomac[1]" value="0">没有</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>电视:</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="roomtv[1]" value="1">有
                                        <input type="radio" name="roomtv[1]" value="0">没有</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>厕所:</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="roomtoilet[1]" value="1">有
                                        <input type="radio" name="roomtoilet[1]" value="0">没有</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>厨房:</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="roomkit[1]" value="1">有
                                        <input type="radio" name="roomkit[1]" value="0">没有</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>房间照片:</label>
                                    </td>
                                    <td>
                                        <input type="file" name="roomimg[1]">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>出租时间:</label>
                                    </td>
                                    <td>
                                        <input type="date" name="roomrenttime[1]">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a class="btn btn-danger" onclick="remdiv(this);" id="roomrmv[1]">删除此房间</a></td>
                                </tr>
                            </table>
                            <hr id="roomdiv-1">
                        </div>
                        <div class="col-sm-12" style="margin-bottom: 5%;">
                            <div class="col-sm-6">
                                <a class="btn btn-info btnPrevious" style="float:left;margin-right: 5%;">上一页</a>
                                <a class="btn btn-primary add-more" onclick="add()">添加新房间</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" style="float:right;">房源提交审核</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<!-- /tabs -->



@endsection


@section('script')
    <script>

        var count = 2;
        function add(){
            {{--$("#roominfo").append('@yield('add_form_template')');--}}
            if(count<=10){
                $("#roomcontent").append('<table class="addstyle" id="rminfo-'+count+'"><tr><td><label>房间名称:</label></td><td>' +
                        '<input type="text" name="roomname['+count+']" class="form-control"></td></tr>' +
                        '<tr><td><label>面积:</label></td><td><input type="text" name="roomsize['+count+']"></td></tr>'+
                        '<tr><td><label>朝向:</label></td><td><input type="text" name="roomori['+count+']"></td></tr>'+
                        '<tr>' +
                        '<td><label>空调:</label></td>' +
                        '<td><input type="radio" name="roomac['+count+']" value="1">有' +
                        '<input type="radio" name="roomac['+count+']" value="0">没有</td></tr>' +

                        '<tr><td><label>电视:</label></td>' +
                        '<td><input type="radio" name="roomtv['+count+']" value="1">有' +
                        '<input type="radio" name="roomtv['+count+']" value="0">没有</td></tr>' +

                        '<tr><td><label>厕所:</label></td>' +
                        '<td><input type="radio" name="roomtoilet['+count+']" value="1">有' +
                        '<input type="radio" name="roomtoilet['+count+']" value="0">没有</td></tr>' +

                        '<tr><td><label>厨房:</label></td>' +
                        '<td><input type="radio" name="roomkit['+count+']" value="1">有' +
                        '<input type="radio" name="roomkit['+count+']" value="0">没有</td></tr>' +

                        '<tr><td><label>房间照片:</label></td>' +
                        '<td><input type="file" name="roomimg['+count+']"></td></tr>'+
                        '<tr><td><label>出租时间:</label></td>' +
                        '<td><input type="date" name="roomrenttime['+count+']"></td></tr>' +
                        '<tr><td></td><td></td><td><a class="btn btn-danger" onclick="remdiv(this);" id="roomrmv['+count+']">删除此房间</a></td></tr>' +
                        '</table><hr id="roomdiv-'+count+'">');
                count = count + 1;
            }else{
                alert("已到达上限！");
            }
        };

        function remdiv(ele){
            var split2 = ele.id.split('[')[1].split(']')[0];
            $("#rminfo-"+split2[0]).remove();
            $("#roomdiv-"+split2[0]).remove();
        };

        $('.btnNext').click(function(){
            $('.nav > .active').next('li').find('a').trigger('click');
        });

        $('.btnPrevious').click(function(){
            $('.nav > .active').prev('li').find('a').trigger('click');
        });

        var inFormOrLink = true;
        $('form').bind('submit', function() { inFormOrLink = false; });

        $(window).bind("beforeunload", function() {
            if(inFormOrLink){
                return "Do you really want to close?";
            }
        })

    </script>
@endsection