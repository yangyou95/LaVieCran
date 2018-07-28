

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
         <img src= "{{$s->path}}" alt="180x100%" style="height: 180px;width: 100%;display: block";>
        </div>
        <div class="caption">
            <h3>{{$s->title}}</h3>
            <p>{{$s->description}}</p>
            <p><small class="text-muted">{{$s->created_at}}</small></p>

            <p>
                <a href="/items/category/{{$s->id}}" class="btn btn-primary" role="button">
                    查看
                </a>

                <a href="" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal{{$s->id}}">
                    下架该物品
                </a>
            </p>
        </div>
     </div>
</div>




<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          确认删除
        </h4>
      </div>
      <div class="modal-body">
        您确认要删除该条信息吗？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
        </button>
        <a href="/delete/sell/{{ $s->id }}" type="button" class="btn btn-primary">
          确认删除
        </a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
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
      <td>



        <a href="" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal{{$p->id}}">
             删除
         </a>
      </td>
      </tr>

      <!-- 模态框（Modal） -->
      <div class="modal fade" id="myModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                确认删除
              </h4>
            </div>
            <div class="modal-body">
              您确认要删除该条信息吗？
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">关闭
              </button>
              <a href="/delete/buy/{{ $p->id }}" type="button" class="btn btn-primary">
                确认删除
              </a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>






    @endforeach

    </tbody>
</div>






@endsection
