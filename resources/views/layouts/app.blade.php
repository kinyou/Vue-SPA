<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="csrf_token">

    <title>Laravel-SPA</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- router-link标签会生成超链接a -->
                <router-link to="/" class="navbar-brand">Vue-SPA</router-link>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><router-link to="/products">商品</router-link></li>
                    <li><router-link to="/about">关于</router-link></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

                    <li class="dropdown">
                        <router-link to="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Laravel-spa <span class="caret"></span>
                        </router-link>

                        <ul class="dropdown-menu">
                            <li>
                                <router-link to="logout"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </router-link>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--路由匹配到的组件将渲染在这里 container-->
    <router-view></router-view>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
