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
                /* text-align: center; */
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
            }
          .image_resize{
            text-align: center;
          }



        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('navbar_header')

        </nav>

            <div class="container">

              <div>
                <div class="title m-b-md page-header">
                    物品详细信息
              </div>

     <div class="links">
                    <div class="row">
                    <div class="image_resize col-xs-9">
                    <img class="col-xs-9" src= "{{$Itemdetail->path}}" alt="180x100%" style="height: auto;width: auto;max-height: 300px;max-width: 300px;";>
                   </div>
                   </div>



       <div class="title">
         <h6>物品名称：{{$Itemdetail->title}}</h6>
         <h6>物品描述：{{$Itemdetail->description}}</h6>
         <h6>物品价格：{{$Itemdetail->price}}</h6>
         <h6>联系方式：{{$Itemdetail->contact}}</h6>
       </div>



          </div>


        </div>

      </div>

      <!-- </div> -->





    </body>
</html>
