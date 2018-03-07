import VueRouter from 'vue-router';

let routes = [
    {
        path : '/',
        component : require('./components/homes/IndexComponent')
    },
    {
        path : '/about',
        component : require('./components/homes/AboutComponent')
    },
    {
        path : '/products',
        component : require('./components/products/ListComponent')
    },
    {
        path : '/products/:productId',
        name:'detail',
        component : require('./components/products/DetailComponent')
    }
];

export default new VueRouter({
        routes,
        mode : 'history' //去掉浏览器中的#
    }
)