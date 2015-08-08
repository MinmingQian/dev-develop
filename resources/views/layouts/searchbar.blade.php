@extends('layouts.default')


@section('title')
  @yield('page_title')
@endsection

@section('content')

  <div class="container" style="margin-top: 63px;">
    <!-- 搜索栏 -->
    <div class="row home-search-container">
      <div class="row home-search-title-container">
        <div class="col-md-2">
          <div class="row home-search-city"><i class="fa fa-map-marker fa-2x"></i><span>杭州市萧山区</span></div>
          <div class="row home-search-chgcity">切换城市</div>
        </div>
        <div class="col-md-9 home-search-btn-container">
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

  @yield('page_content')

@endsection