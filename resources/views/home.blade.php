@extends('layouts.default')

@section('content')


  <div class="container-fluid">
    <!-- 相册 -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active fill" style="background-image: url('images/carousel/Slides-1.png')">
          <!--       <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div> -->
        </div>
        <div class="item fill" style="background-image: url('images/carousel/Slides-2.png')">
          <!--       <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div> -->
        </div>
        <div class="item fill" style="background-image: url('images/carousel/Slides-3.png')">
          <!--       <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div> -->
        </div>
      </div>

      <!-- Controls -->
      <!--   <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->
    </div>
  </div>

  <!-- 搜索栏 -->
  <div class="col-md-12 home-search-container">
    <div class="col-md-2"></div>
    <div class="col-md-8 home-search-title-container">
      <div class="col-md-2">
        <div class="row home-search-city"><i class="fa fa-map-marker fa-2x"></i><span>杭州市萧山区</span></div>
        <div class="row home-search-chgcity">切换城市</div>
      </div>
      <div class="col-md-10 home-search-btn-container">
        <form method="GET" action="{{url('/search')}}">
          <div class="input-group">
            <input name="searchString" type="text" class="form-control" placeholder="搜索你想住的区域">
              <span class="input-group-btn">
                  <button class="btn btn-danger home-search-button" type="submit">搜索</button>
              </span>
          </div><!-- /input-group -->
        </form>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>

  <!-- 主页模块1 -->
  <div class="col-md-12 home-block-one">
    <div class="row">
      <span class="block-maintitle">你每天与时间赛跑</span>
    </div>
    <div class="row" style="margin-top: 0.5%;">
      <span class="block-maintitle">或许，本就不该如此操劳</span>
    </div>
    <div class="row" style="margin-top: 1.5%;">
      <span class="block-subtitle">我们为你提供一站式的租房服务，让你在忙碌了一天后不必再为租房而奔波</span>
    </div>
    <div class="col-sm-12 block-one-bimg">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <img src="images/zhuf_r1_c1.png" style="width:100%;" />
      </div>
      <div class="col-sm-1"></div>
    </div>
    <div class="row">
      <div class="col-xs-12" style="margin-top: 0.5%;">
        <div class="col-xs-1"></div>
        <div class="col-xs-10 home-blkone-fimg-container">
          <div class="col-xs-3">
            <img src="images/zhuf_r3_c1.png" class="img-responsive" style="padding:0px;" />
          </div>
          <div class="col-xs-3">
            <img src="images/zhuf_r3_c3.png" class="img-responsive" style="padding:0px;" />
          </div>
          <div class="col-xs-3">
            <img src="images/zhuf_r3_c5.png" class="img-responsive" style="padding:0px;" />
          </div>
          <div class="col-xs-3">
            <img src="images/zhuf_r3_c7.jpg" class="img-responsive" style="padding:0px;" />
          </div>
        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>
  </div>

  <!-- 主页模块2 -->
  <div class="col-md-12 home-block-two">
    <div class="row">
      <span class="block-maintitle">我们为你推荐</span>
    </div>
    <div class="row" style="margin-top: 1.5%;">
      <span class="block-subtitle">总有个声音告诉自己，无论工作多幸苦，莫忘初心——对家的美好追求，是我对生活方式的选择</span>
    </div>

    <div class="row" style="text-align: center;">
      <a class="btn btn-danger home-block-two-refbtn" href="#" onclick="">
        <i class="fa fa-refresh fa-lg"></i> 换一组
      </a>
    </div>


    <div id="randomShow" class="col-sm-12" style="padding:0px;">
      <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach(array_chunk( \App\Models\Apartment::all()->random(12)->all(), 2) as $item)
          <div class="item" style="padding:0px;margin:0px;">
            <div style="padding: 0px;">
              <img class="img" src="{{array_values($item)[0]->pic}}" alt="" />
              <div id="mengban">
                <div class="row mengban-main-title-container">
                  <span>{{array_values($item)[0]->name}}</span>
                </div>
                <div class="row mengban-main-subtitle-container">
                  <span>{{array_values($item)[0]->description}}</span>
                </div>
                <div class="row">
                </div>
                <button class="btn btn-danger home-search-button" style="z-index: 2;" type="button" onclick="location.href='{{url('/apartments/'.array_values($item)[0]->id)}}';">去看看</button>
              </div>
            </div>

            <div style="padding: 0px;">
              <img class="img" src="{{array_values($item)[1]->pic}}" alt="" />
              <div id="mengban2">
                <div class="row mengban-main-title-container">
                  <span>{{array_values($item)[1]->name}}</span>
                </div>
                <div class="row mengban-main-subtitle-container">
                  <span>{{array_values($item)[1]->name}}</span>
                </div>
                <div class="row">

                </div>
                <button class="btn btn-danger home-search-button" style="z-index: 2;" type="button" href="detail" onclick="location.href='{{url('/apartments/'.array_values($item)[1]->id)}}';">去看看</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>

  <!-- 主页模块3 -->
  <div class="col-sm-12 home-block-three">
    <div class="row home-block-tt-container">
      <span class="block-maintitle">客户之声</span>
    </div>
    <div class="col-sm-12">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-6">
            <img src="images/rent2_r1_c1.png" style="width:100%;" />
          </div>
          <div class="col-sm-6">
            <img src="images/rent2_r1_c3.png" style="width:100%;" />
          </div>
        </div>
        <div class="row" style="padding-top: 3%;margin-bottom: 10%;">
          <div class="col-sm-6">
            <img src="images/rent2_r3_c1.png" style="width:100%;" />
          </div>
          <div class="col-sm-6">
            <img src="images/rent2_r3_c3.png" style="width:100%;" />
          </div>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>


@endsection