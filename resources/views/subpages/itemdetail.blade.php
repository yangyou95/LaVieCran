<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>物品详细信息</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{!! asset('usercenter/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: auto;
                margin: 0;

            }


            .full-height {
                height: auto;
                margin-bottom: 30px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: 30px;

            }

            .title {
                font-size: 37px;
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 35px;
            }
            .row{
              text-align: center;
            }
          img{
            text-align: center;
          }



        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                  <a href="{{ url('/') }}">首页</a>
                  <a href="{{ url('/items') }}">二手物品</a>
                  <a href="{{ url('/buy') }}">求购信息</a>
                      <a href="{{ url('/home') }}">用户中心</a>
                  @else
                  <a href="{{ url('/') }}">首页</a>
                  <a href="{{ url('/items') }}">二手物品</a>
                  <a href="{{ url('/buy') }}">求购信息</a>
                      <a href="{{ route('login') }}">登录</a>
                      <a href="{{ route('register') }}">注册</a>
                  @endauth
              </div>
          @endif

            <div class="container">

              <div>
                <div class="title m-b-md page-header">
                    物品详细信息
              </div>

     <div class="links">
                  <div class="row">
                    <div class="image_resize">
                    <img src= "{{$Itemdetail->path}}" alt="180x100%" style="height: auto;width: auto;max-width: 1200px;";>
                   </div>
                 </div>
            </div>


       <div class="title">
         <h3>物品名称：{{$Itemdetail->title}}</h3>
         <h3>物品描述：{{$Itemdetail->description}}</h3>
         <h3>物品价格：{{$Itemdetail->price}}</h3>
         <h3>联系方式：{{$Itemdetail->contact}}</h3>
       </div>

          </div>


        </div>





    </body>
</html>
