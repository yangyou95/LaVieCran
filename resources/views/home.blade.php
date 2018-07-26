

@extends('theme_usercenter.default')



@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">我的出售</h1>

    </div>

    <!-- /.col-lg-12 -->

</div>


<div class="row">


@foreach($sell as $s)
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

                <a href="#" class="btn btn-default" role="button">
                    下架该物品
                </a>
            </p>
        </div>
     </div>
</div>

@endforeach
</div>

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">我的求购</h1>

    </div>

    <!-- /.col-lg-12 -->

</div>

<div class="row">
  <table class="table table-bordered table-responsive" style="margin-top: 10px">
    <thead>
      <tr>
        <th> 物品名称 </th>
        <th> 物品类别 </th>
        <th> 物品描述 </th>
        <th> 联系方式 </th>
        <th> 创建时间 </th>
        <th> 操作 </th>


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
      <td>  <a href="#" class="btn btn-primary" role="button">
            编辑
        </a>
        <a href="#" class="btn btn-default" role="button">
             删除
         </a>
      </td>
      </tr>
    @endforeach

    </tbody>
</div>


@endsection
