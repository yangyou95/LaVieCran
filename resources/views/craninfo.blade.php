

@extends('theme_usercenter.default')



@section('content')

<div class="row">

    <div class="col-lg-12">

        <h1 class="page-header">我的Cran信息</h1>

    </div>

    <!-- /.col-lg-12 -->

</div>


<div class="row col-lg-12">

  <h3> 我的邮箱 </h3>
  <div class="text-muted">{{$user->email}}</div>

  <h3> 我的Cran专业 </h3>
  <div class="text-muted">{{$user->Cran_info}}</div>

  <h3> 我的联系方式 </h3>
  <div class="text-muted">{{$user->contact}}</div>

</div>

<div class="col-lg-12">

    <h1 class="page-header">更新联系方式</h1>

</div>

<form class="needs-validation" action="{{route('info')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="mb-3">
    <label for="newcontact">新的联系方式</label>
    <input type="newcontact" class="form-control" name="newcontact" placeholder="请填写新的联系方式" required>

</div>

<button class="btn btn-primary dd" type="submit">提交更新</button>

</form>



<style>
.dd{
  margin-top: 10px;
}
</style>




@endsection
