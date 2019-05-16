<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>开发者</title>

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
                font-size: 84px;
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

              <div>
                <div class="title m-b-md page-header">
                    数码电子类全部物品
              </div>

     <div class="links">
                  <div class="row">


                  @foreach($Digital as $d)
                  <div class="col-sm-6 col-md-3">
                       <div class="thumbnail">
                           <div class="image_resize">
                           <img src= "storage/upload/{{$d->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                          </div>
                          <div class="caption">
                              <p>{{$d->title}}</p>
                              <p>{{$d->description}}</p>
                              <p>
                                  <a href="#" class="btn btn-primary" role="button">
                                      查看
                                  </a>


                              </p>
                          </div>
                       </div>
                  </div>

                  @endforeach
                  </div>
            </div>
          </div>
















        </div>
    </body>
</html>
