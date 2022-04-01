<template>
  <div class="col-md-12">
      <div class="mb-5">
      <button v-on:click='addCust' class="btn btn-success text-white">Add New 
        <i class="fa-solid fa-user-plus" style="color:white"></i>
    </button>
      </div>

<div class="card">
<div class="card-header">
<h3 class="card-title">Customer Table</h3>

<div class="card-tools">
</div>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone No.</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>183</td>
    <td>John Doe</td>
    <td>JohnDoe@gmail.com</td>
    <td>No 24, jalan kering, taman sultan</td>
    <td>123-7876354
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
</template>

<script>
export default {
 mounted() {

    console.log('ViewCust.vue')
        },
        methods:{
            addCust(){
                this.$router.push('/addcust')
            }
        }
}
</script>

<style>

</style>