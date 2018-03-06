<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <ul class="list-group">
                        <li class="list-group-item" v-for="(product, index) in products" :key="index">
                            <!--两种显示方式-->
                            <router-link :to="`/products/${product.id}`">{{product.name}}</router-link> -
                            <router-link :to="{name : 'detail', params: {productId : product.id}}">1{{product.name}}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Product Component mounted.');

            axios.get('/api/products')
                .then(response=>{
                    this.products = response.data.data;
                    console.log(this.products);
                })
                .catch(response=>{
                    console.log('error')
                })
        },
        data() {
            return {
                products : []
            };
        }
    }
</script>
