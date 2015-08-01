<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>

  <meta name="author" content="Name Lastname">

  <!-- Enable responsive viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap styles -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Sticky Footer -->
  <link href="{{ asset('css/bs-sticky-footer.css') }}" rel="stylesheet">

  <!-- Custom styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all">

  <!-- 主页样式 -->
  <link href="{{ asset('css/home.min.css') }}" rel="stylesheet" type="text/css" media="all">

  <!-- 相册样式 -->
  <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" type="text/css" media="all">

  <!-- owl.carousel相册样式 -->
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">

  <!-- owl.carousel相册样式主题 -->
  <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" media="all">


  <link href="{{ asset('/css/dp-add.css') }}" rel="stylesheet" type="text/css" media="all">
  <link href="{{ asset('/css/simple-sidebar.css') }}" rel="stylesheet">

  <!-- Fontawesome css -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">


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
            <li><a href="{{url('/')}}" class="home-collapse-item">首页</a></li>

            <li><a href="{{url('/holder')}}" class="home-collapse-item">业主加盟</a></li>

            <li><a href="{{url('/about')}}" class="home-collapse-item">关于我们</a></li>

            <li><a href="{{url('/online')}}" class="home-collapse-item">在线帮助</a></li>          <!-- here should be the flickr address -->
            <li><a href="{{url('/roommate')}}" class="home-collapse-item">找舍友</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a class="btn btn-danger"  href="{{url('/apartments/add')}}">添加房源 </a></li>
            @if (Auth::guest())
              <li><a href="{{ url('/auth/login') }}">登录</a></li>
              <li><a href="{{ url('/auth/register') }}">注册</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/profile') }}">个人档案</a></li>
                  <li><a href="{{ url('/auth/logout') }}">注销</a></li>
                </ul>
              </li>
            @endif
          </ul>

        </div>
      </div>
    </nav>
  </div>



  @yield('content')



      <!-- 页脚 -->
    <div class="container-fluid" style="padding-top: 2%;padding-bottom: 2%; background-color:#323336; ">
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
        <a href="#">关于我们</a> ｜<a href="#">业务介绍</a>  ｜<a href="#">加入心有居</a> ｜ <a href="#">投诉建议</a>  ｜<a href="#">友情链接</a>
      </div>
      <div class="row home-foot-link">
        全国热线：<a href="tel:0571-83732573" title="0571-83732573">0571-83732573 </a>(周一至周日9:00－21:00)｜客服邮箱：<a href="mailto:service@xinyouju.com" title="service@xinyouju.com">service@xinyouju.com</a>
      </div>
      <div class="row home-foot-cpright">
        Copyright&copy;2013-2015杭州心有居资产管理有限公司版权所有
      </div>
    </div>




  <!-- Latest compiled and minified JavaScript, requires jQuery 1.x (2.x not supported in IE8) -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>

  <!-- Bootstrap javascript -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- owl.carousel javascript -->
  <script src="{{ asset('js/owl.carousel.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/custom_2.js') }}"></script>



  @yield('baidumap')

  @yield('script')

  </body>
</html>