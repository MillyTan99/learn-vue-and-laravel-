<template>
    <div class="container">
        <!-- mt means margin top 5px -->
        <div class="row mt-5">
<!-- //put navbar here -->
        

        <div>    
        <view-cust></view-cust>
        </div>
        <div>
        </div>

</div>
    </div>
</template>

<script>
import ViewCust from './ViewCust.vue'

    export default {
       
        components:{
            ViewCust
        },
        methods:{
        },
        mounted() {
            console.log('Customer.vue')
        }
    }
</script>
