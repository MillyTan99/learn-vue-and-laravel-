<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <!-- display product and modify product -->
                    <!-- if the nav select what display on card body -->
                    <div class="card-header">
                        
                    </div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>

.nav-link:hover{
    background:rgb(155, 161, 245);
}
.nav-link:active{
    background: blue;
}
</style>
