@extends('layouts.detail')


@section('page_title', $apartment->name)

@section('searchbar')
<div class="container" style="margin-top: 53px;">

    <!-- 搜索栏 -->
  <div class="col-md-12 home-search-container">
    <div class="col-md-12 home-search-title-container">
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
  </div>
</div>
@endsection


@section('page_content')
  <div class="container">
<div class="container row" style="padding-bottom: 32px;">
<div id="detailCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($rooms as $index => $room)
      <div class="item @if ($index==0) active @endif">
        <img src="{{ $room->room_pic }}">
        <div class="carousel-caption">
          <h3>{{$apartment->name}}&nbsp{{$room->name}}</h3>
        </div>
      </div><!-- End Item -->
    @endforeach
  </div><!-- End Carousel Inner -->

  <ul class="nav nav-pills nav-justified">
    @foreach($rooms as $index => $room)
      <li data-target="#detailCarousel" data-slide-to="{{$index}}"
          class="list-group-item @if ($index==0) active @endif"
          style="background-image: url('{{ $room->room_pic }}') ">
        <h4>{{$room->name}}</h4></li>
    @endforeach
  </ul>

</div><!-- End Carousel -->
</div>



<div class="row detail-sec" >
  <div class="col-md-9">
    <div class="house-head">
      <div class="detail-hs-name">{{$apartment->name}} &nbsp {{$apartment->description}}</div>
      <div class="detail-hs-des"> <i class="fa fa-map-marker"></i> {{$apartment->address}}</div>
    </div>


    <table class="table">
      <thead>
        <tr>
          <th class="col-md-3 text-align">付款方式</th>
          <th class="col-md-3 text-align">原价</th>
          <th class="col-md-3 text-align">折扣价</th>
          <th class="col-md-3 text-align">服务费</th>
        </tr>
      </thead>


      <tr>
        <td class="text-align"><span class="vert-align">押一付三</span></td>
        <td class="text-align"><span class="vert-align ori-price"> {{ $apartment->price }}元/月</span></td>
        <td class="text-align"><span class="special-price">{{ $apartment->price * $apartment->discount / 10 }}</span><span clas="vert-align">元/月
            @if($apartment->discount != 10)
              <span class="discount">&nbsp {{$apartment->discount}}折 &nbsp</span>
            @endif
          </span> </td>

        <td class="text-align"><span class="vert-align">100/月</span></td>
      </tr>

    </table>



    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-3 text-align house-des"><i class="fa fa-th fa-4x"></i> <p>{{$apartment->size}}m2</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-building-o fa-4x"></i> <p>{{$apartment->level}}楼</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-bed fa-4x"></i> <p>3室2卫</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-subway fa-4x"></i> <p>地铁沿线</p></th>
        </tr>
      </thead>
    </table>
  </div>  

  <!-- 这里是房主信息   -->
    <div class="col-md-3" >
      <div class="house-holder">
        <img class="img-circle holder-head" src="{{ asset('img/house_example.png') }}">
        <div class="holder-name"> 心有居管家 </div>
        <div class="holder-phone"> 0571-83732573 </div>
        <button type="button" class="btn holder-online"  onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=2116356614&o=心有居&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');">
          <i class="fa fa-twitch"></i> 在线咨询</button>
        <button type="button" class="btn holder-book" onclick="location.href='{{url('/payment')}}'"> 下订单 </button>
      </div>
    </div>
</div> <!-- house information row-->



<div class="row detail-sec">
  <div class="col-md-9">
    <div class="detail-sec-head"><i class="fa fa-play"></i><span>&nbsp房间情况</span></div>

    <table class="table">
      <thead>
        <tr>
          <th class="col-md-2 text-align head-gray">房间</th>
          <th class="col-md-2 text-align head-gray">面积</th>
          <th class="col-md-2 text-align head-gray">朝向</th>
          <th class="col-md-2 text-align head-gray">电视</th>
          <th class="col-md-2 text-align head-gray">空调</th>
          <th class="col-md-2 text-align head-gray">卫生间</th>
        </tr>
      </thead>


        @foreach($rooms as $room)
            <tr>
                <td class="text-align">{{ $room->name }}</td>
                <td class="text-align">{{$room->size}}m2</td>
                <td class="text-align">南</td>
                <td class="text-align"> @if($room->tv) <i class="fa fa-check"></i> @else <i class="fa fa-circle-thin"></i> @endif </td>
                <td class="text-align"> @if($room->air_condition) <i class="fa fa-check"></i> @else <i class="fa fa-circle-thin"></i> @endif </td>
                <td class="text-align"> @if($room->toilet) <i class="fa fa-check"></i> @else <i class="fa fa-circle-thin"></i> @endif </td>
            </tr>
        @endforeach

    </table>
  </div>
</div> <!-- room description row-->




<div class="row detail-sec">
  <div class="col-md-9">
    <div class="detail-sec-head"><i class="fa fa-play"></i><span>&nbsp入住贴士</span></div>
        {{ $apartment->introduction }}
    <hr class="featurette-divider">
  </div>
</div>




<div class="row detail-sec map-sec" >
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-4 detail-sec-head"><i class="fa fa-play"></i><span>&nbsp周边配套</span></div>
      <div class="col-md-8"> 
        <div class="col-md-2"></div>
        <ul class="toolsIcon" style="list-style: none">
          <li><div class="col-md-2"> <a class="to-click" > <i class="fa fa-bus"></i>&nbsp交通</a></div></li>
          <li><div class="col-md-2"> <a class="to-click" > <i class="fa fa-cutlery"></i>&nbsp餐饮</a></div></li>
          <li><div class="col-md-2"> <a class="to-click" > <i class="fa fa-shopping-cart"></i>&nbsp超市</a></div></li>
          <li><div class="col-md-2"> <a class="to-click" > <i class="fa fa-credit-card"></i>&nbsp银行</a></div></li>
          <li><div class="col-md-2"> <a class="to-click" > <i class="fa fa-film"></i>&nbsp娱乐</a></div></li>
        </ul>
      </div>
    </div>

    <div id="allmap"></div>
  </div>
</div>
  




<div class="row detail-sec guess-you-like">
  <div class="detail-sec-head"><i class="fa fa-play"></i><span>&nbsp猜你喜欢</span></div>

    @foreach($guesses as $guess)
        <div class="col-sm-3 guess-item">
            <article class="box style">
                <a href="" class="image featured"><img src="{{ $guess->pic }}" alt=""></a>
                <div class="see-title">{{$guess->name}}</div>
                <div class="see-des">{{$guess->description}}</div>

                <div class="row">
                    <div class="col-xs-8"> <span class="special-price">{{$guess->price * 0.9}}</span>元/月</div>
                    <div class="col-xs-4">
                        <button type="button" class="btn see-button" onclick="location.href='{{url('/apartments/'.$guess->id)}}'">去看看</button>
                    </div>
                </div>
            </article>
        </div>
    @endforeach

</div>
</div>
@endsection




@section('baidumap')
<!-- baidu map -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PD6N1h8tq7565qeH3FVWQwVL"></script>

<script type="text/javascript">
// 百度地图API功能
var map = new BMap.Map("allmap");            // 创建Map实例
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.ScaleControl());
map.enableScrollWheelZoom();
var lng ="120.1784435";
var lat ="30.1784435";
var point=new BMap.Point(lng,lat);
var marker=new BMap.Marker(point);
marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
map.centerAndZoom(point,14);
map.addOverlay(marker);


var local = new BMap.LocalSearch(map, {
  renderOptions:{map: map}
});

var $toolIconLi=$(".toolsIcon li");
$toolIconLi.click(function(){
  var text=$(this).text().trim();
  $toolIconLi.removeClass("hover");
  $(this).addClass("hover");
  local.searchInBounds(text, map.getBounds());
});

</script>
@endsection





