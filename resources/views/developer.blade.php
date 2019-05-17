<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>开发者</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }


            .full-height {
                height: 100vh;
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
               margin-top: 40px;
                margin-bottom: 20px;
                font-size: 25px;
            }
            p{
              text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

          <!-- <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                   <div class="image_resize">
                   <img src="{{ URL::asset('developer/Yang.jpeg') }}" alt="180x100%" style="height: 180px;width: 60%;display: block";>
                  </div>

               </div>
          </div> -->

            <div class="content">
                <div class="title m-b-md">
                    开发者：尤扬
                </div>

                <div class="links">

                    <a href="https://yangyou95.github.io/"><URL>点击查看个人资料</URL></a>
                </div>

                <div class="title m-b-md">
                 项目开发模式：MVC    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    项目运营/测试/技术团队：期待你的加入！
                </div>

                <div class="links">
                    <a>欢迎各位对运营/测试/技术感兴趣的同学加入这个项目，你的名字将被显示在项目团队里，该经历可作为日后求职中个人简历的项目经验的一部分。
                      另外欢迎有前端或后端开发经验的小伙伴加入，共同学习进步。</a>
                </div>
            </div>
        </div>
    </body>
</html>
