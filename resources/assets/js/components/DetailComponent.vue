<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an detail component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('About Component mounted.');

            axios.get('/api/products')
                .then(response=>{
                    this.products = response.data.data;
                    console.log(this.products);
                })
                .catch(response=>{
                    console.log('error')
                })
        }
    }
</script>
