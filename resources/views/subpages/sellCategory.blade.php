<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>类别信息</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{!! asset('usercenter/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
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
                margin-bottom: 10px;
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

        </style>
    </head>
    <body>
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

          @include('navbar_header')

      </nav>

        <div class="flex-center position-ref full-height">


            <div class="content">

              <div>
                <div class="title m-b-md page-header">
                    {{$sells[0]->category}} 该类全部物品
              </div>

     <div class="links">
                  <div class="row">


                  @foreach($sells as $d)
                  <div class="col-xs-6 col-sm-6 col-md-3">
                       <div class="thumbnail">
                           <div class="image_resize">
                           <img src= "{{$d->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
                          </div>
                          <div class="caption">
                            <div class="flex">
                              <p>{{$d->title}}</p>
                            </div>
                              <p>{{$d->price}}</p>
                              <p><small class="text-muted">{{$d->created_at}}</small></p>

                              <p>
                                  <a href="category/{{$d->id}}" class="btn btn-primary" role="button">
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
