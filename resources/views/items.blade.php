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
                    数码电子
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
                              <h3>{{$d->title}}</h3>
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

                  <a href ="digital">点击查看更多</a>
            </div>
          </div>



          <div>
            <div class="title m-b-md page-header">
                家用电器
          </div>

            <div class="links">
              <div class="row">


              @foreach($Elec as $e)
              <div class="col-sm-6 col-md-3">
                   <div class="thumbnail">
                       <div class="image_resize">
                       <img src= "storage/upload/{{$e->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                      </div>
                      <div class="caption">
                          <h3>{{$e->title}}</h3>
                          <p>{{$e->description}}</p>
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

              <a href ="#">点击查看更多</a>
        </div>
      </div>

      <div>
        <div class="title m-b-md page-header">
            生活用品
      </div>

        <div class="links">
          <div class="row">


          @foreach($Life as $l)
          <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                   <div class="image_resize">
                   <img src= "storage/upload/{{$l->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                  </div>
                  <div class="caption">
                      <h3>{{$l->title}}</h3>
                      <p>{{$l->description}}</p>
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
          <a href ="#">点击查看更多</a>
    </div>
  </div>


  <div>
    <div class="title m-b-md page-header">
        护肤美妆
  </div>

    <div class="links">
      <div class="row">


      @foreach($Cosmetic as $c)
      <div class="col-sm-6 col-md-3">
           <div class="thumbnail">
               <div class="image_resize">
               <img src= "storage/upload/{{$c->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
              </div>
              <div class="caption">
                  <h3>{{$c->title}}</h3>
                  <p>{{$c->description}}</p>
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
      <a href ="#">点击查看更多</a>
</div>
</div>

<div>
  <div class="title m-b-md page-header">
      学习用品
</div>

  <div class="links">
    <div class="row">


    @foreach($Study as $s)
    <div class="col-sm-6 col-md-3">
         <div class="thumbnail">
             <div class="image_resize">
             <img src= "storage/upload/{{$s->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
            </div>
            <div class="caption">
                <h3>{{$s->title}}</h3>
                <p>{{$s->description}}</p>
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
    <a href ="#">点击查看更多</a>
</div>
</div>


<div>
  <div class="title m-b-md page-header">
      厨房用品
</div>

  <div class="links">
    <div class="row">


    @foreach($Cusine as $cu)
    <div class="col-sm-6 col-md-3">
         <div class="thumbnail">
             <div class="image_resize">
             <img src= "storage/upload/{{$cu->image_name}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
            </div>
            <div class="caption">
                <h3>{{$cu->title}}</h3>
                <p>{{$cu->description}}</p>
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
    <a href ="#">点击查看更多</a>
</div>
</div>




        </div>
    </body>
</html>
