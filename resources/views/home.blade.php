

@extends('theme_usercenter.default')



@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">Dashboard</h1>

    </div>

    <!-- /.col-lg-12 -->

</div>


<div class="row">


@foreach($sell as $s)
<div class="col-sm-6 col-md-3">
     <div class="thumbnail">
        <!-- <img src= "{{ URL::asset('storage/upload/test.jpg') }}"
         alt="通用的占位符缩略图"> -->
         <img src= "storage/upload/{{$s->image_name}}"
          alt="通用的占位符缩略图" class="image_resize";>
        <div class="caption">
            <h3>{{$s->title}}</h3>
            <p>{{$s->description}}</p>
            <p>
                <a href="#" class="btn btn-primary" role="button">
                    按钮
                </a>
                <a href="#" class="btn btn-default" role="button">
                    按钮
                </a>
            </p>
        </div>
     </div>
</div>

@endforeach



</div>

<!-- /.row -->

<!-- <div class="row">

    <div class="col-lg-3 col-md-6">

        <div class="panel panel-primary">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-xs-3">

                        <i class="fa fa-comments fa-5x"></i>

                    </div>

                    <div class="col-xs-9 text-right">

                        <div class="huge">26</div>

                        <div>New Comments!</div>

                    </div>

                </div>

            </div>

            <a href="#">

                <div class="panel-footer">

                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>

                </div>

            </a>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="panel panel-green">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-xs-3">

                        <i class="fa fa-tasks fa-5x"></i>

                    </div>

                    <div class="col-xs-9 text-right">

                        <div class="huge">12</div>

                        <div>New Tasks!</div>

                    </div>

                </div>

            </div>

            <a href="#">

                <div class="panel-footer">

                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>

                </div>

            </a>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="panel panel-yellow">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-xs-3">

                        <i class="fa fa-shopping-cart fa-5x"></i>

                    </div>

                    <div class="col-xs-9 text-right">

                        <div class="huge">124</div>

                        <div>New Orders!</div>

                    </div>

                </div>

            </div>

            <a href="#">

                <div class="panel-footer">

                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>

                </div>

            </a>

        </div>

    </div>

    <div class="col-lg-3 col-md-6">

        <div class="panel panel-red">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-xs-3">

                        <i class="fa fa-support fa-5x"></i>

                    </div>

                    <div class="col-xs-9 text-right">

                        <div class="huge">13</div>

                        <div>Support Tickets!</div>

                    </div>

                </div>

            </div>

            <a href="#">

                <div class="panel-footer">

                    <span class="pull-left">View Details</span>

                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>

                </div>

            </a>

        </div>

    </div>

</div> -->

@endsection


<style>
img{width:330px;height: 180px;}
</style>
