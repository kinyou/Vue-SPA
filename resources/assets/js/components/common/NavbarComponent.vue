<template>
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
                <router-link to="/" class="navbar-brand">Laravel-SPA</router-link>

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
</template>

<script>
    export default {
        name : 'app-header',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
