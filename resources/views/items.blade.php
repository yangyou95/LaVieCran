<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>二手物品</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Bootstrap Core CSS -->

  <link href="{!! asset('usercenter/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

  <!-- MetisMenu CSS -->

  <link href="{!! asset('usercenter/vendor/metisMenu/metisMenu.min.css') !!}" rel="stylesheet">



  <!-- Custom CSS -->

  <link href="{!! asset('usercenter/dist/css/sb-admin-2.css') !!}" rel="stylesheet">



  <!-- Morris Charts CSS -->

  <link href="{!! asset('usercenter/vendor/morrisjs/morris.css') !!}" rel="stylesheet">




  <!-- Custom Fonts -->

  <link href="{!! asset('usercenter/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">



  <!-- jQuery -->

  <script src="{!! asset('usercenter/vendor/jquery/jquery.min.js') !!}"></script>



  <!-- Bootstrap Core JavaScript -->

  <script src="{!! asset('usercenter/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>




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
                margin-bottom: 15px;
                font-size: 15px;
            }
            .row{
              text-align: center;
            }
            .flex >p{
              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
            }

            /* .navbar-brand{margin-left:50px;border: 1px solid #fff;width: 100px;height: 40px;text-align: center;}
                ul{margin-left:50px;}
                ul li a{margin-right: 40px;color: #fff !important;}
                .navbar-toggler-icon{color:#fff !important;}
                .navbar-dark .navbar-toggler{border-color: white !important;} */



        </style>
    </head>
    <body>
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

          @include('navbar_header')

      </nav>


        <div class="flex-center position-ref full-height ">




          <!-- <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">


			<span class="navbar-toggler-icon"></span>
		</button> -->

          <!-- @if (Route::has('login'))
              <div class="collapse navbar-collapse navbar-right is-collapse top-right links" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  @auth
                  <li class="nav-item">
					             <a class="nav-link" href="{{ url('/') }}">首页</a>
                  </li>
                  <li class="nav-item">
					             <a class="nav-link" href="{{ url('/items') }}">二手物品</a>
                  </li>
                  <li class="nav-item">
					             <a class="nav-link" href="{{ url('/buy') }}">求购信息</a>
                  </li>
                  <li class="nav-item">
					             <a class="nav-link" href="{{ url('/home') }}">用户中心</a>
                  </li> -->

                  <!-- <a href="{{ url('/') }}">首页</a>
                  <a href="{{ url('/items') }}">二手物品</a>
                  <a href="{{ url('/buy') }}">求购信息</a>
                      <a href="{{ url('/home') }}">用户中心</a> -->
                  <!-- @else
                  <li class="nav-item">
                       <a class="nav-link" href="{{ url('/') }}">首页</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="{{ url('/items') }}">二手物品</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="{{ url('/buy') }}">求购信息</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">登录</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">注册</a>
                  </li> -->

                  <!-- <a href="{{ url('/') }}">首页</a>
                  <a href="{{ url('/items') }}">二手物品</a>
                  <a href="{{ url('/buy') }}">求购信息</a>
                      <a href="{{ route('login') }}">登录</a>
                      <a href="{{ route('register') }}">注册</a> -->
                  <!-- @endauth
                </ul>
              </div>
          @endif
        </nav> -->





            <div class="content">

              <div>
                <div class="title m-b-md page-header">
                    数码电子
              </div>

     <div class="links">
                  <div class="row">


                  @foreach($Digital as $d)
                  <div class="col-xs-6 col-sm-6 col-md-3">
                       <div class="thumbnail">
                           <div class="image_resize">
                           <img src= "{{$d->path}}" alt="180x100%" style="height: 120px ;width: 100%;display: block";>
                          </div>
                          <div class="caption">
                            <div class="flex">
                              <p>{{$d->title}}</p>
                            </div>
                              <p>{{$d->price}}</p>
                              <p><small class="text-muted">{{$d->created_at}}</small></p>

                              <p>
                                  <a href="items/category/{{$d->id}}" class="btn btn-primary" role="button">
                                      查看
                                  </a>


                              </p>
                          </div>
                       </div>
                  </div>

                  @endforeach
                  </div>

                  <a href ="items/Digital">点击查看更多数码电子</a>
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
                       <img src= "{{$e->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                      </div>
                      <div class="caption">
                        <div class="flex">
                          <p>{{$e->title}}</p>
                        </div>
                          <p>{{$e->price}}</p>
                          <p><small class="text-muted">{{$e->created_at}}</small></p>

                          <p>
                              <a href="items/category/{{$e->id}}" class="btn btn-primary" role="button">
                                  查看
                              </a>


                          </p>
                      </div>
                   </div>
              </div>

              @endforeach
              </div>

              <a href ="items/Elec">点击查看更多家用电器</a>
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
                   <img src= "{{$l->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                  </div>
                  <div class="caption">
                    <div class="flex">
                      <p>{{$l->title}}</p>
                    </div>
                      <p>{{$l->price}}</p>
                      <p><small class="text-muted">{{$l->created_at}}</small></p>

                      <p>
                          <a href="items/category/{{$l->id}}" class="btn btn-primary" role="button">
                              查看
                          </a>


                      </p>
                  </div>
               </div>
          </div>

          @endforeach
          </div>
          <a href ="items/Life">点击查看更多生活用品</a>
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
               <img src= "{{$c->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
              </div>
              <div class="caption">
                    <div class="flex">
                      <p>{{$c->title}}</p>
                    </div>
                  <p>{{$c->price}}</p>
                  <p><small class="text-muted">{{$c->created_at}}</small></p>

                  <p>
                      <a href="items/category/{{$c->id}}" class="btn btn-primary" role="button">
                          查看
                      </a>


                  </p>
              </div>
           </div>
      </div>

      @endforeach
      </div>
      <a href ="items/Cosmetic">点击查看更多护肤美妆</a>
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
             <img src= "{{$s->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
            </div>
            <div class="caption">
              <div class="flex">
                <p>{{$s->title}}</p>
              </div>
                <p>{{$s->price}}</p>
                <p><small class="text-muted">{{$s->created_at}}</small></p>

                <p>
                    <a href="items/category/{{$s->id}}" class="btn btn-primary" role="button">
                        查看
                    </a>


                </p>
            </div>
         </div>
    </div>

    @endforeach
    </div>
    <a href ="items/Study">点击查看更多学习用品</a>
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
             <img src= "{{$cu->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
            </div>
            <div class="caption">
              <div class="flex">
                <p>{{$cu->title}}</p>
              </div>
                <p>{{$cu->price}}</p>
                <p><small class="text-muted">{{$cu->created_at}}</small></p>

                <p>
                    <a href="items/category/{{$cu->id}}" class="btn btn-primary" role="button">
                        查看
                    </a>
                </p>


            </div>
         </div>
    </div>

    @endforeach
    </div>
    <a href ="items/Cusine">点击查看更多厨房用品</a>
</div>
</div>




        </div>
    </body>
</html>
