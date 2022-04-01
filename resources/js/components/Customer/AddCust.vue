<template> 
<div class="container-fluid">
    <div class="container">
        <div class='row mt-5'>
            <div class="col-md-12">
                <div class="card mx-auto">
              <div class="card-header">
                  <div class="card-title">
                      Add New Customer
                  </div>
              </div>
                <div class="card-body table-responsive p-0">
      <form @submit.prevent="addCust" name='addCust' id='addCust'>
          <div class="form-group mt-2">
              <label>Username</label>
              <input required v-model="name" type="text" class="form-control" name='name'>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input required v-model="email" type="email" class="form-control" name='email'>
          </div>
          <div class="form-group">
              <label>Password</label>
              <input required type="text" v-model="password" class="form-control" name='password'>
          </div>
          <div class="form-group">
              <label>Phone Number</label>
              <input required v-model="phonenumber" type="tel" class="form-control" name='phonenumber'>
          </div>
          <div class="form-group">
              <label>Address</label>
              <textarea required v-model="address" class="form-control" name='address'></textarea>
          </div>
          <div class="d-flex justify-content-around mb-2">
        <button type='submit' class="btn btn-success text-white">Submit
        <i class="fa-solid fa-circle-check" style="color:white"></i>
        </button>
          </div>


      </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
    name:'addCust',
    data(){
        return{
            name:'',
            phonenumber:'',
            password:'',
            email:'',
            address:'',
        }
    },
    methods:{
        addCust(){  
            if(this.email=='' || this.name==''|| this.address==''|| this.password==''||this.phonenumber==''){
                console.log('does not submited')
            }else{
                console.log(this.name)
                console.log(this.email)
                console.log(this.password)
                console.log(this.address)
                console.log(this.phonenumber)
                var formData = new FormData (document.getElementById("addCust"));
                let instance = this;
                axios.post('addCust', formData)
                    .then(function (response) {
                        console.log(formData);
                        alert(formData);
                        instance.$router.push("/customer");
                    })
                    .catch(function (error) {
                        console.log(error);
                        alert(error)
                    });
            //     axios.post('addCust',{
            //         'name':this.name,
            //         'email':this.email,
            //         'password':this.password,
            //         'address':this.address,
            //         'phonenumber':this.phonenumber
            //     }).then((res)=>{
            //         console.log(res);
            //         alert(res);
            //     }).catch(function(error){
            //         console.log(error);
            //         alert(error)
            //     })
            // }
                

          
        }
    }
    },
    mounted(){
        
    },
    
}
</script>

<style>
.card{
    font-size:13px
}
.form-group{
    margin-left: 20px;
    margin-right: 20px;
}
</style>