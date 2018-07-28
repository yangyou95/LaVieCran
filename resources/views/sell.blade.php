@extends('theme_usercenter.default')



@section('content')




<div class="row">

<form class="needs-validation" action="{{route('sell')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="mb-3">
      <label for="category">物品类别</label>
      <select class="form-control" name="category">


        <option value="Digital">数码电子</option>
        <option value="Elec">家用电器</option>
        <option value="Life">生活用品</option>
        <option value="Cosmetic">护肤美妆</option>
        <option value="Study">学习用品</option>
        <option value="Cusine">厨房用品</option>



      </select>
  </div>




    <div class="mb-3">
        <label for="title">物品名称</label>
        <input type="text" class="form-control" name="title" placeholder="请填写物品的名称" required>
    </div>

    <div class="mb-3">
        <label for="description">物品描述</label>
        <textarea class="form-control" name="description" rows="10" placeholder="请填写对物品的描述" required></textarea>

    </div>

    <div class="mb-3">
        <label for="price">价格</label>
        <input type="text" class="form-control" name="price" placeholder="请填写价格，例如：“20磅”" required>
    </div>


    <div class="md-12">
      <label for="file">物品图片</label>
      <div class="thumbnail">
        <div class="caption">
          <!-- <h3>Image de Peinture</h3> -->

           <input type="file" name="file" >


          </p>
        </div>
      </div>
    </div>


    <button class="btn btn-primary" type="submit">提交</button>

</form>

</div>


@endsection
