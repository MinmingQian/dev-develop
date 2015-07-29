<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>detail</title>
    
    <meta name="author" content="Name Lastname">

    <!-- Enable responsive viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap styles -->
    <link href="{{ asset('assets/themes/bootstrap-3/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Optional theme -->
    <!-- <link href="{{ asset('assets/themes/bootstrap-3/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet"> -->
    <!-- Sticky Footer -->
    <link href="{{ asset('assets/themes/bootstrap-3/bootstrap/css/bs-sticky-footer.css') }}" rel="stylesheet">
    
    <!-- Custom styles -->
    <link href="{{ asset('assets/themes/bootstrap-3/css/style.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- 主页样式 -->
    <link href="{{ asset('assets/themes/bootstrap-3/css/home.min.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- 相册样式 -->
    <link href="{{ asset('assets/themes/bootstrap-3/css/carousel.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- owl.carousel相册样式 -->
    <link href="{{ asset('assets/themes/bootstrap-3/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- owl.carousel相册样式主题 -->
    <link href="{{ asset('assets/themes/bootstrap-3/css/owl.theme.css') }}" rel="stylesheet" type="text/css" media="all">
    
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/themes/bootstrap-3/bootstrap/css/font-awesome.min.css') }}">

    <!-- baidu map -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PD6N1h8tq7565qeH3FVWQwVL"></script>
  
    <style type="text/css">
    /*消除页面边缘空白*/
        html, body {
          width: auto !important;
          overflow-x: hidden !important;
          padding-bottom: 0px;
        }
    </style>

  </head>

  <body>

    <!-- 导航栏 -->
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" style="opacity: 0.7;">
      <div style="padding-left: 10%;padding-right: 10%;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">LOGO</a>
        </div>
            <div id="navbar" class="navbar-collapse collapse" style="padding-left: 15%;">
              <ul class="nav navbar-nav">
                <li><a href="index.html" class="home-collapse-item">首页</a></li>

                <li><a href="/" class="home-collapse-item">业主加盟</a></li>

                <li><a href="/" class="home-collapse-item">关于我们</a></li>

                <li><a href="/" class="home-collapse-item">在线帮助</a></li>          <!-- here should be the flickr address -->
                <li><a href="/" class="home-collapse-item">找舍友</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                      <li><a href="/" class="home-login-item">注册</a></li>
                      <li><a href="/" class="home-login-item">登录</a></li>
              </ul>
            </div>
      </div>
    </nav>    
    </div>


<!-- 中间部分 -->



    

<div class="container"> 

<div class="detail_search" style="height: 70px; margin-top: 51px;"> 
    <!-- 搜索栏 -->
  <div class="col-md-12 home-search-container">
    <div class="col-md-12 home-search-title-container">
          <div class="col-md-2">
            <div class="row home-search-city"><i class="fa fa-map-marker fa-2x"></i><span>杭州市萧山区</span></div>
            <div class="row home-search-chgcity">切换城市</div>
          </div>
          <div class="col-md-10 home-search-btn-container">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="搜索你想住的区域">
              <span class="input-group-btn">
                <button class="btn btn-danger home-search-button" type="button">搜索</button>
              </span>
            </div><!-- /input-group -->
          </div>
    </div>
  </div>
</div>




<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="{{ asset('assets/img/house_big.png') }}">
      <div class="carousel-caption">
        <h4><a href="#">客厅 浦东新区-世纪锦城-朝南-10m</a></h4>
        <p></p>
      </div>
    </div><!-- End Item -->

    <div class="item">
      <img src="{{ asset('assets/img/house_big.png') }}">
      <div class="carousel-caption">
        <h4><a href="#">主卧 浦东新区-世纪锦城-朝南-10m</a></h4>
        <p></p>
      </div>
    </div><!-- End Item -->

    <div class="item">
      <img src="{{ asset('assets/img/house_big.png') }}">
      <div class="carousel-caption">
        <h4><a href="#">次卧 浦东新区-世纪锦城-朝南-10m</a></h4>
        <p></p>
      </div>
    </div><!-- End Item -->

    <div class="item">
      <img src="{{ asset('assets/img/house_big.png') }}">
      <div class="carousel-caption">
        <h4><a href="#">厨房 浦东新区-世纪锦城-朝南-10m</a></h4>
        <p></p>
      </div>
    </div><!-- End Item -->

    <div class="item">
      <img src="{{ asset('assets/img/house_big.png') }}">
      <div class="carousel-caption">
        <h4><a href="#">卫生间 浦东新区-世纪锦城-朝南-10m</a></h4>
        <p></p>
      </div>
    </div><!-- End Item -->

  </div><!-- End Carousel Inner -->


  <ul class="list-group col-sm-4">
    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active" style="background-image: url('{{ asset('assets/img/house_thumb.png') }}') "><h4>客厅</h4></li>
    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item" style="background-image: url('{{ asset('assets/img/house_thumb.png') }}') "><h4>主卧</h4></li>
    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item" style="background-image: url('{{ asset('assets/img/house_thumb.png') }}') "><h4>次卧</h4></li>
    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item" style="background-image: url('{{ asset('assets/img/house_thumb.png') }}') "><h4>厨房</h4></li>
    <li data-target="#myCarousel" data-slide-to="4" class="list-group-item" style="background-image: url('{{ asset('assets/img/house_thumb.png') }}') "><h4>卫生间</h4></li>
  </ul>

  <!-- Controls -->
  <div class="carousel-controls">
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div><!-- End Carousel -->




<div class="row detail-sec" >
  <div class="col-md-9">
    <div class="house-head">
      <div class="detail-hs-name">浦东新区 - 世纪锦城 - 朝南 -10m</div>
      <div class="detail-hs-des"> <i class="fa fa-map-marker"></i> 杭州市萧山区北干街道白马公寓XX幢202 &nbsp &nbsp &nbsp 整套 | 5层 | 朝南</div>
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
        <td class="text-align"><span class="vert-align ori-price"> {{ $department->price }}元/月</span></td>
        <td class="text-align"><span class="special-price">{{ $department->price * 0.9 }}</span><span clas="vert-align">元/月 <span class="discount">&nbsp 9折 &nbsp</span></span> </td>
        <td class="text-align"><span class="vert-align">100元/月</span></td>
      </tr>

    </table>



    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-md-3 text-align house-des"><i class="fa fa-th fa-4x"></i> <p>128m2</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-building-o fa-4x"></i> <p>5楼</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-bed fa-4x"></i> <p>3室2卫</p></th>
          <th class="col-md-3 text-align house-des"><i class="fa fa-subway fa-4x"></i> <p>地铁沿线</p></th>
        </tr>
      </thead>
    </table>
  </div>  

  <!-- 这里是房主信息   -->
    <div class="col-md-3" >
      <div class="house-holder">
        <img class="img-circle holder-head" src="{{ asset('assets/img/house_example.png') }}">
        <div class="holder-name"> 汪东柬 </div>
        <div class="holder-phone"> 186-6817-9138</div>
        <button type="button" class="btn holder-online"> <i class="fa fa-twitch"></i> 在线咨询</button>
        <button type="button" class="btn holder-book" onclick="location.href='payment.html';"> 下订单 </button>
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


      <tr>
        <td class="text-align">主卧</td>
        <td class="text-align">23m</td>
        <td class="text-align">南</td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-check"></i></td>
      </tr>

      <tr>
        <td class="text-align">次卧</td>
        <td class="text-align">18m</td>
        <td class="text-align">南</td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-circle-thin"></i></td>
      </tr>

      <tr>
        <td class="text-align">小房间</td>
        <td class="text-align">18m</td>
        <td class="text-align">北</td>
        <td class="text-align"><i class="fa fa-circle-thin"></i></td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-circle-thin"></i></td>
      </tr>

      <tr>
        <td class="text-align">客厅</td>
        <td class="text-align">29m</td>
        <td class="text-align">-</td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-check"></i></td>
        <td class="text-align"><i class="fa fa-circle-thin"></i></i></td>
      </tr>
    </table> 
  </div>
</div> <!-- room description row-->




<div class="row detail-sec">
  <div class="col-md-9">
    <div class="detail-sec-head"><i class="fa fa-play"></i><span>&nbsp入住贴士</span></div>
    
    <ul>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
      <li>环球翡翠湾花园位于环球翡翠湾花园近杨高南路，建成于2006年，生活娱乐设施齐全</li>
    </ul>

    <hr class="featurette-divider">
  </div>
</div>




<div class="row detail-sec map-sec" >
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-4 detail-sec-head"><i class="fa fa-play"></i><span>&nbsp周边配套</span></div>
      <div class="col-md-8"> 
        <div class="col-md-2"></div>
        <div class="col-md-2"> <a class="to-click" onclick="searchTraffic();"> <i class="fa fa-bus"></i>&nbsp交通</a></div>
        <div class="col-md-2"> <a class="to-click" onclick="searchFood();"> <i class="fa fa-cutlery"></i>&nbsp餐饮</a></div>
        <div class="col-md-2"> <a class="to-click" onclick="searchSuperMarket();"> <i class="fa fa-shopping-cart"></i>&nbsp超市</a></div>
        <div class="col-md-2"> <a class="to-click" onclick="searchBank();"> <i class="fa fa-credit-card"></i>&nbsp银行</a></div>
        <div class="col-md-2"> <a class="to-click" onclick="searchEntertainment();"> <i class="fa fa-film"></i>&nbsp娱乐</a></div>
      </div>
    </div>

    <div id="allmap"></div>
  </div>
</div>
  







<div class="row detail-sec guess-you-like">
  <div class="detail-sec-head"><i class="fa fa-play"></i><span>&nbsp猜你喜欢</span></div>
  
  <div class="col-sm-3 guess-item">
    <article class="box style">
      <a href="" class="image featured"><img src="{{ asset('assets/img/house_example.png') }}" alt=""></a>
      <div class="see-title">浦东新区-世纪锦城-朝南-10m</div>
      <div class="see-des">公寓 | 5层 | 朝南</div>

      <div class="row">
        <div class="col-xs-8"> <span class="special-price">1900</span>元/月</div>
        <div class="col-xs-4"> 
          <button type="button" class="btn see-button">去看看</button>
        </div>
      </div>
    </article>
  </div>

  <div class="col-sm-3 guess-item">
    <article class="box style">
      <a href="" class="image featured"><img src="{{ asset('assets/img/house_example.png') }}" alt=""></a>
      <div class="see-title">浦东新区-世纪锦城-朝南-10m</div>
      <div class="see-des">公寓 | 5层 | 朝南</div>

      <div class="row">
        <div class="col-xs-8"> <span class="special-price">1900</span>元/月</div>
        <div class="col-xs-4"> 
          <button type="button" class="btn see-button">去看看</button>
        </div>
      </div>
    </article>
  </div>
  <div class="col-sm-3 guess-item">
    <article class="box style">
      <a href="" class="image featured"><img src="{{ asset('assets/img/house_example.png') }}" alt=""></a>
      <div class="see-title">浦东新区-世纪锦城-朝南-10m</div>
      <div class="see-des">公寓 | 5层 | 朝南</div>

      <div class="row">
        <div class="col-xs-8"> <span class="special-price">1900</span>元/月</div>
        <div class="col-xs-4"> 
          <button type="button" class="btn see-button">去看看</button>
        </div>
      </div>
    </article>
  </div>
  <div class="col-sm-3 guess-item">
    <article class="box style">
      <a href="" class="image featured"><img src="{{ asset('assets/img/house_example.png') }}" alt=""></a>
      <div class="see-title">浦东新区-世纪锦城-朝南-10m</div>
      <div class="see-des">公寓 | 5层 | 朝南</div>

      <div class="row">
        <div class="col-xs-8"> <span class="special-price">1900</span>元/月</div>
        <div class="col-xs-4"> 
          <button type="button" class="btn see-button">去看看</button>
        </div>
      </div>
    </article>
  </div>  
</div>
  




<script type="text/javascript">
// 百度地图API功能
var map = new BMap.Map("allmap");            // 创建Map实例
map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);


function searchTraffic() {
　　 var keyword = ["地铁","公交"]
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map, autoViewport:true}
    });
    local.searchNearby(keyword, "浦东");  //这个需要学会怎么使用point来进行搜索,
}

function searchFood() {
　　 var keyword = ["餐厅"]
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map, autoViewport:true}
    });
    local.searchNearby(keyword, "浦东");  //这个需要学会怎么使用point来进行搜索,
}

function searchSuperMarket() {
　　 var keyword = ["超市"]
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map, autoViewport:true}
    });
    local.searchNearby(keyword, "浦东");  //这个需要学会怎么使用point来进行搜索,
}

function searchBank() {
　　 var keyword = ["银行"]
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map, autoViewport:true}
    });
    local.searchNearby(keyword, "浦东");  //这个需要学会怎么使用point来进行搜索,
}

function searchEntertainment() {
　　 var keyword = ["电影院","KTV"]
    var local = new BMap.LocalSearch(map, {
      renderOptions:{map: map, autoViewport:true}
    });
    local.searchNearby(keyword, "浦东");  //这个需要学会怎么使用point来进行搜索,
}

</script>



</div>




 <!-- 页脚 -->
    <div style="background-color: #323336;">
      <div class="container" style="padding-top: 2%;padding-bottom: 2%;">
              <div class="row" style="text-align: center;margin-top: 2%;">

                   <span class="fa-stack fa-lg home-foot-social-container social-weibo">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
                    </span> 
                   <span class="fa-stack fa-lg home-foot-social-container social-tencent-weibo">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-tencent-weibo fa-stack-1x fa-inverse"></i>
                    </span> 
                   <span class="fa-stack fa-lg home-foot-social-container social-weixin">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-weixin fa-stack-1x fa-inverse"></i>
                    </span>
                   <span class="fa-stack fa-lg home-foot-social-container social-facebook">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
              </div>
              <div class="row" style="text-align: center;margin-top: 1.5%;margin-bottom: 1.5%;">
                <button type="button" class="btn btn-default home-foot-button" style="border-radius: 0 !important;">在线客服</button>
              </div>
              <div class="row home-foot-link">
                 <a href="#">关于我们</a> ｜<a href="#">业务介绍</a>  ｜<a href="#">加入蘑菇</a> ｜ <a href="#">投诉建议</a>  ｜<a href="#">友情链接</a>
              </div>
              <div class="row home-foot-link">
                全国热线：<a href="tel:400-800-4949" title="400-800-4949">400-800-4949 </a>(周一至周日9:00－21:00)｜客服邮箱：<a href="mailto:service@mogoroom.com" title="service@mogoroom.com">service@mogoroom.com</a>
              </div>
              <div class="row home-foot-cpright">
                  Copyright&copy;2013-2015上海墨果资产管理有限公司版权所有 沪ICP备14004976号
              </div>
      </div>
    </div>

    




    <!-- Latest compiled and minified JavaScript, requires jQuery 1.x (2.x not supported in IE8) -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/themes/bootstrap-3/bootstrap/js/jquery.min.js') }}"></script>

  <!-- Bootstrap javascript -->
  <script src="{{ asset('assets/themes/bootstrap-3/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- owl.carousel javascript -->
  <script src="{{ asset('assets/themes/bootstrap-3/bootstrap/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/themes/bootstrap-3/bootstrap/js/custom.js') }}"></script>

  <!-- 主页房源推荐js -->
  <script type="text/javascript">
    $(document).ready(function () {
        var carousel = $("#owl-demo");
      carousel.owlCarousel({
        rewindNav : false,
        pagination:false,
        navigation:true,
        autoWidth:true,
        items: 4,
        navigationText: [
          "<i class='fa fa-angle-left fa-5x'></i>",
          "<i class='fa fa-angle-right fa-5x'></i>"
          ],
                     afterAction: function(){
          if ( this.itemsAmount > this.visibleItems.length ) {
            $('.next').show();
            $('.prev').show();

            $('.next').removeClass('disabled');
            $('.next').removeClass('nothing-pre');
            $('.prev').removeClass('disabled');
            $('.prev').removeClass('nothing-pre');
            if ( this.currentItem == 0 ) {
              $('.prev').addClass('disabled');
              $('.prev').addClass('nothing-pre');

            }
            if ( this.currentItem == this.maximumItem ) {
              $('.next').addClass('disabled');
              $('.next').addClass('nothing-pre');
            }

          } else {
            $('.next').hide();
            $('.prev').hide();
          }
        }
      });
        // Custom Navigation Events
        $(".next").click(function(){
        owl.trigger('owl.next');
        })
        $(".prev").click(function(){
        owl.trigger('owl.prev');
        })
  
      });
</script>

  </body>
</html>