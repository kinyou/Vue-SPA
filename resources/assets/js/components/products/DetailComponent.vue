<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{product.name}}</div>

                    <ul class="list-group">
                        <li class="list-group-item">{{product.introduction}}</li>
                        <li class="list-group-item">{{product.cost_price}}</li>
                        <li class="list-group-item">{{product.sell_price}}</li>
                        <li class="list-group-item">{{product.exchange_rate}}</li>
                        <li class="list-group-item">{{product.created_at}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<app-footer></app-footer>-->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('About Component mounted.');

            axios.get('/api/products/' + this.$route.params.productId )
                .then(response=>{
                    this.product = response.data;
                })
                .catch(response=>{
                    console.log('error')
                })
        },

        data(){
            return {
                product: []
            };
        }
    }
</script>
