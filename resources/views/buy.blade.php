@extends('theme_usercenter.default')



@section('content')

<style>
.dd{
  margin-top: 10px;
}
</style>


<div class="row">

<form class="needs-validation" action="{{route('buy')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="mb-3">
      <label for="category">物品类别</label>
      <select class="form-control" name="category">


        <!-- <option value="Digital">数码电子</option>
        <option value="Elec">家用电器</option>
        <option value="Life">生活用品</option>
        <option value="Cusine">厨房用品</option>
        <option value="Cosmetic">护肤美妆</option>
        <option value="Study">学习用品</option> -->
        <option >数码电子</option>
        <option >家用电器</option>
        <option >生活用品</option>
        <option >厨房用品</option>
        <option >护肤美妆</option>
        <option >学习用品</option>

      </select>
  </div>




    <div class="mb-3">
        <label for="title">物品名称</label>
        <input type="text" class="form-control" name="title" placeholder="请输入物品的名称" required>
    </div>

    <div class="mb-3">
        <label for="description">物品描述</label>
        <textarea class="form-control" name="description" rows="10" placeholder="请填写对该物品的描述" required></textarea>
    </div>




  <div class="mb-3 dd" >

    <button class="btn btn-primary" type="submit">提交</button>
    </div>

</form>

</div>


@endsection
