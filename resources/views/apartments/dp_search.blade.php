@extends('layouts.default')

@section('title', $searchString)

@section('content')
<div class="container" style="margin-top: 53px;">
  <div class="detail_search" >
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
</div>

@if($apartments->count() == 0)
  <div class="container" style="text-align: center">
  <img src="{{ asset('images/nosearch.png') }}" alt="">
    </div>
  @else
<div class="container">
  @foreach(array_chunk($apartments->all(), 4) as $row)
    <div class="row" style="padding-top:10px; padding-bottom: 10px;;">
      @foreach($row as $apartment)
        <div class="col-sm-3 apartment-item">
          <article class="box style">
            <a href="{{url('/apartments/'.$apartment->id)}}" class="image featured"><img src="{{ asset('img/house_example.png') }}" alt=""></a>
            <div class="see-title">{{$apartment->name}}</div>
            <div class="see-des">{{$apartment->description}}</div>

            <div class="row">
              <div class="col-md-8"> <span class="special-price">{{$apartment->price * 0.9}}</span>元/月</div>
              <div class="col-md-4">
                <button type="button" class="btn see-button" onclick="location.href='{{url('/apartments/'.$apartment->id)}}'">去看看</button>
              </div>
            </div>
          </article>
        </div>
      @endforeach
    </div>
  @endforeach
</div>
@endif

@endsection

