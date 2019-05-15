<div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

    </button>

    <a class="navbar-brand" href="/">LaVieCran(暂定名)</a>

</div>

<!-- /.navbar-header -->


      <ul class="nav navbar-right collapse in" id="navbar-top">

    <li>
        <a href="/items">
            二手物品
        </a>
    </li>

    <li>
        <a href="/buy">
            求购信息
        </a>
    </li>
  @if (Route::has('login'))
    @auth
    <li>
      <a href="{{ url('/home') }}">
          用户中心
      </a>
    </li>

 @else
 <li>
     <a href="{{ route('login') }}">
         登录
     </a>
 </li>

 <li>
     <a href="{ route('register') }}">
         注册
     </a>
 </li>
 @endauth
@endif



</ul>
