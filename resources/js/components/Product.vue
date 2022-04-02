<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <!-- display product and modify product -->
                    <!-- if the nav select what display on card body -->
                    <div class="card-header">
                        <div class='card-title'>
                        Product list    
                        </div>
                        
                    </div>

                    <div class="card-body">
<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
  <tr>
    <th>ID</th>
    <th>Product</th>
    <th>Image</th>
    <th>Description</th>
    <th>Cost</th>
  </tr>
</thead>
<tbody>
  <tr class='d-flex' style="display:inline-block">
    <td>123</td>
    <td>Badminton</td>
    <td><img src="img/badminton.jpg" class='product'></td>
    <td>Yonex Muscle Power 2 Bdminton Racket</td>
    <td>RM 69.99
        <a href="#">
        <i class="fa fa-edit blue"></i>
        </a>
        /
        <a href="#">
            <i class="fa fa-trash red"></i>
        </a>
    </td>
  </tr>
</tbody>
</table>
</div>
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
.product{
    width: 40px;
    height: 40px;
}

</style>
