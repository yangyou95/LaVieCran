<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaVieCran</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
            }

            .links >a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            a{
              margin-top: 5px;
              margin-bottom: 10px;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">用户中心</a>
                    @else
                        <a href="{{ route('login') }}">登录</a>
                        <a href="{{ route('register') }}">注册</a>
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md col-sm-12">
                    Cran中国学生服务平台(beta版)
                </div>


                <div class="row ">

                       <span class="col-xs-12 col-sm-12 links" ><a href="items" >二手物品(开放测试)</a></span>
                       <span class="col-xs-12 col-sm-4 links" ><a href="#" >新闻资讯(筹备中)</a></span>
                     <span class="col-xs-12 col-sm-4 links" >  <a href="/home/developer">开发者</a></span>

                 </div>
            </div>



        </div>





    </body>
</html>
