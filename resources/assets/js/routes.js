import VueRouter from 'vue-router';

let routes = [
    {
        path : '/',
        component : require('./components/IndexComponent')
    },
    {
        path : '/about',
        component : require('./components/AboutComponent')
    },
    {
        path : '/products',
        component : require('./components/ProductComponent')
    },
    {
        path : '/products/:productId',
        name:'detail',
        component : require('./components/DetailComponent')
    }
];

export default new VueRouter({
        routes,
        mode : 'history' //去掉浏览器中的#
    }
)