@extends('layouts.searchbar')

@section('page_title')
    心有所居|房源搜索
@endsection

@section('title', $searchString)

@section('page_content')
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
            <a href="{{url('/apartments/'.$apartment->id)}}" class="image featured" style="overflow: hidden;"><img src="{{ $apartment->pic }}" alt=""></a>
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

