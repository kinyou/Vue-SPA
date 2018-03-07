<template>

    <div class="container">
        <div class="jumbotron">
            <h1>好好学习,天天向上!</h1>
            <p></p>
            <p><router-link class="btn btn-primary btn-lg" to="/products" role="button">去赚钱</router-link></p>
        </div>

        <div class="row marketing">
            <div class="col-lg-6">
                <h4>人之初性本善</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>性相近习相远</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>养不教父之过</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>

            <div class="col-lg-6">
                <h4>教不严师之惰</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>扬名声显父母</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>光于前裕于后</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>
        </div>

        <!--公共底部-->
        <app-footer></app-footer>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Index Component mounted.')
            axios.get('/api/products')
                 .then(response=>{
                     console.log(response.data);
                 })
                .catch(response=>{
                    console.log('error')
                })
        }
    }
</script>
