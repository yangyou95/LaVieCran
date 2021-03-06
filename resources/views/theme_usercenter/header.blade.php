
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @else
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button>

        <a class="navbar-brand" href="/">LaVieCran(暂定名)</a>

    </div>

    <!-- /.navbar-header -->



    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-messages">

                <li>

                    <a href="#">

                        <div>

                            <strong>站内信系统</strong>

                            <span class="pull-right text-muted">

                                <em>Yesterday</em>

                            </span>

                        </div>

                        <div>站内信系统。Yang正在建设中...</div>

                    </a>

                </li>

                <li class="divider"></li>

                <li>

                    <a class="text-center" href="#">

                        <strong>Read All Messages</strong>

                        <i class="fa fa-angle-right"></i>

                    </a>

                </li>

            </ul>

            <!-- /.dropdown-messages -->

        </li>

        <!-- /.dropdown -->

        <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-tasks">

                <li>

                    <a href="#">

                        <div>

                            <p>

                                <strong>项目进度</strong>

                                <span class="pull-right text-muted">70% Complete</span>

                            </p>

                            <div class="progress progress-striped active">

                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">

                                    <span class="sr-only">70% Complete (danger)</span>

                                </div>

                            </div>

                        </div>

                    </a>

                </li>

                <li class="divider"></li>

                <li>

                    <a class="text-center" href="#">

                        <strong>所有项目(校内项目系统，Yang建设中)</strong>

                        <i class="fa fa-angle-right"></i>

                    </a>

                </li>

            </ul>

            <!-- /.dropdown-tasks -->

        </li>

        <!-- /.dropdown -->

        <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-alerts">

                <li>

                    <a href="#">

                        <div>

                            <i class="fa fa-upload fa-fw"></i> Server Rebooted

                            <span class="pull-right text-muted small">4 minutes ago</span>

                        </div>

                    </a>

                </li>

                <li class="divider"></li>

                <li>

                    <a class="text-center" href="#">

                        <strong>查看通知</strong>

                        <i class="fa fa-angle-right"></i>

                    </a>

                </li>

            </ul>

            <!-- /.dropdown-alerts -->

        </li>

        <!-- /.dropdown -->

        <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-user">

                <li><a href="/home"><i class="fa fa-user fa-fw"></i> 用户 {{ Auth::user()->name }} 资料</a>

                </li>

                <li><a href="/home/craninfo"><i class="fa fa-gear fa-fw"></i> 用户设置</a>

                </li>

                <li class="divider"></li>

                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out fa-fw"></i> 注销</a>

                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>

            <!-- /.dropdown-user -->

        </li>

        <!-- /.dropdown -->

    </ul>

    <!-- /.navbar-top-links -->
    @endguest
