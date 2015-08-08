@extends('layouts.default')


@section('title')
    心有居
@endsection


@section('content')


  <div class="container-fluid" style="margin-top: 50px;">
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

  <!-- 主页模块1 -->
  <div class="row">

    <!-- 搜索栏 -->
    <div class="row home-search-container">
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
  </div>
    <div class="row" style="text-align: left; padding-top: 8%;">
      <div class="col-xs-2"> </div>
      <div class="col-xs-10">
        <span class="block-maintitle" style="font-size: 60px; line-height: 80px;">{{\App\Models\Message::find(1)->title}}</span>
      </div>
    </div>

    <div class="row" style="text-align: left; padding-bottom: 100px;" >
      <div class="col-xs-2"> </div>
      <div class="col-xs-10">
        <span class="block-subtitle" style="font-size: 60px; line-height: 80px;">{{\App\Models\Message::find(1)->subtitle}}</span>
      </div>
    </div>




  <div class="row" style=" background-color: #fafafa; padding-top: 50px;">
    <div class="row">
      <div class="col-xs-12" style="margin-top: 1%;">
        <div class="col-xs-1"></div>
        <div class="col-xs-10 home-blkone-fimg-container">
          <div class="row">
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
            <img src="images/zhuf_r3_c7.png" class="img-responsive" style="padding:0px;" />
          </div>
          </div>
        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>

    <div class="row" style="font-size: 40px; color: black; text-align: center; font-weight: bold; padding-bottom: 20px;">
      <span> 心有居推出精品房源</span>
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



  <div class="row" style="padding: 100px 0 50px;">
    <div class="row" style="text-align: left;">
      <div class="col-xs-2"> </div>
      <div class="col-xs-10">
        <span class="block-maintitle" style="font-size: 40px; line-height: 80px;">{{\App\Models\Message::find(2)->title}}</span>
      </div>
    </div>

    <div class="row" style="text-align: left; padding-bottom: 100px;" >
      <div class="col-xs-2"> </div>
      <div class="col-xs-10">
        <span class="block-subtitle" style="font-size: 40px; line-height: 80px;">{{\App\Models\Message::find(2)->title}}</span>
      </div>
    </div>

  </div>



  <!-- for video -->
  <div class="row  home-block-two">
    <div class="row block-one-bimg">
      <div class="col-sm-12">
        <img src="images/zhuf_r1_c1.png" style="width:100%;" />
      </div>
    </div>
  </div>

  <!-- 主页模块3 -->
  <div class="row home-block-three" style="color: #FFFFFF; !important; background-color: #B9374A; padding: 100px 0px 100px;">
    <div class="row" style="padding: 40px 0px 20px;">
      <span class="block-maintitle" style="font-size: 2em; font-weight: bold; color: #FFFFFF;">从此，心有所居</span>
    </div>

    <div class="row" style="padding: 20px 0px 20px 0px;">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="row"></div>
      @foreach(\App\Models\Clientcomment::all()->take(3)->all() as $comment)
        <div class="col-sm-4 client-comments" style="padding-left: 30px; padding-right: 30px;">
          <div class="client-coment">
            <span style="font-size: 1.5em;">
              <i class="fa fa-quote-left fa-6" ></i>
            </span>
              <span style="font-size: 1.2em;">
                {{ $comment->comment }}
              </span>
            <span style="font-size: 1.5em;">
              <i class="fa fa-quote-right fa-6"></i>
            </span>
          </div>
          <div style="padding-top: 20px; padding-bottom: 40px; font-size: 1.3em; font-weight: bold;">
            {{ $comment->clientname }}
          </div>
        </div>
      @endforeach
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>


@endsection