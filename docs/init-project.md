##初始化项目
* 使用composer创建基于laravel5.5的项目
    * composer create-project laravel/laravel laravel-cms --prefer-dist "5.5.*"
* 安装前端依赖
    * cd /xxx/laravel-cms && npm install
    * 使用npm安装spa单页面应用使用到的vue-router
        * npm install vue-router --save [--save表示把vue-router作为线上运行必须的依赖,会写入到package.json的dependencies对象中]
    * 使用npm run watch实时编译
    * 简单流程分析
        * webpack使用webpack.mix.js后规定js和css编译后的目录-->app.js-->bootstrap.js-->routes.js
    * 注意点使用vue-router的时候必须用<router-view></router-view>占位
    * 注意点使用vue-router的时候用必须使用<router-link></router-link>生成超链接a