<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an about component!
                    </div>
                </div>
            </div>
        </div>

        <app-footer></app-footer>
    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('About Component mounted.')
        },
    }
</script>
