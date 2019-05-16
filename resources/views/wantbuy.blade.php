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
                margin-bottom: 30px;
                font-size: 35px;
            }
            .row{
              text-align: center;
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
                   全部求购信息
              </div>

     <div class="links">
       <div class="row" style="height: auto;width: auto;">
         <table class="table table-bordered table-responsive" style="margin-top: 10px">
           <thead>
             <tr>
               <th> 物品名称 </th>
               <th> 物品类别 </th>
               <th> 物品描述 </th>
               <th> 联系方式 </th>
               <th> 创建时间 </th>



             </tr>
           </thead>
           <tbody>
           @foreach($buy as $p)
             <tr>
               <td> {{$p->title}}</td>
               <td> {{$p->category}}</td>
               <td> {{$p->description}}</td>
               <td> {{$p->contact}}</td>
               <td> {{$p->created_at}}</td>

             </tr>
           @endforeach

           </tbody>
       </div>
            </div>
          </div>



        </div>
    </body>
</html>
