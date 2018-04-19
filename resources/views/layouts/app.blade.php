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
    <!--公共的导航条-->
    <nav-bar></nav-bar>

    <!--vue-router组件的模板渲染占位符-->
    <router-view></router-view>

    <!--尾部-->
    <app-footer></app-footer>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
