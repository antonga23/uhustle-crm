<style scoped>
input, textarea, select {
  box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  padding: 11px 18px!important;
  font-size: 12px;
  color: #003449;
  border-color: #ccc;
  margin-bottom: 17px;
  font-family: 'Rubik', sans-serif;
  height: auto!important;
}
textarea {
  border-radius: 10px;
  height: 124px!important;
}
.custom-select {
  height: auto;
}
label{
  font-family: 'Rubik', sans-serif;
  font-size: 10px;
  color: #999999;
  margin-bottom: 7px;
  margin-left: 17px;
}
h5 {
  font-family: 'Rubik', sans-serif;
  font-size: 0.73vw;
  color: #2D2D2D;
  margin-bottom: 20px;
}
.btn-default{
  background: #fff;
  color: #999999;    
  border: none!important;
  padding: 11px 14px 10px;
  font-size: 10px;
  text-transform:uppercase;
  border-radius: 50rem!important;
  line-height:1em;
  margin-left: 0.9%;
  margin-right: 0.9%;
  -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
  box-shadow: 0px 0px 5px rgba(0,0,0,0.05);
}
.btn-primary {
  border-radius: 50rem!important;
  text-transform:uppercase;
  font-size: 10px;
  padding: 11px 14px 10px;
  line-height:1em;
  margin-left: 0.9%;
  margin-right: 0.9%;
}
.ant-switch {
  margin-left: 17px;
}
</style>

<template>
  <div class="createDeal">  
    <h5>Add Category</h5>

    <b-row class="mx-0">
      <b-col sm="4" class="px-0">
        <label for="input-none">Name</label>
        <input 
           v-validate="'required'"
          v-model="category.name"    
          type="text"    
          id="category-name"     
          name="Name"   
          class="form-control rounded-pill"/>
          <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>

        <label for="input-none">Description</label>
        <textarea 
          v-model="category.description"   
          id="info"     
          name="Info"   
          class="form-control"/>

        <label for="input-none" class="d-block">Status</label>
        <span id="error" v-show="errors.has('Status')" class="help-block">{{ errors.first('Status') }}</span>
        <a-switch v-model="category.status" v-validate="'required'" name="Status"/>
        <label v-if="category.status == 1 || category.status == true">Active</label>
        <label v-if="category.status == 0 || category.status == false">Inactive</label>

        <div class="row mx-0 justify-content-end">
          <div class="col-auto pl-0">
            <b-button class="btn btn-default my-0 ml-0" @click="clearCategory()">Cancel</b-button>
          </div>

          <div class="col-auto pl-0">
            <b-button class="btn btn-primary font-weight-bold my-0 mr-0" @click="createCategory">Save</b-button>
          </div>
        </div>
      </b-col>
    </b-row>  
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {

    this.Toast = this.$swal.mixin({ 
      toast: true, 
      position: 'top-end', 
      showConfirmButton: false, 
      timer: 3000 
    });
  },
  created: function () {},
  props: [],
  data: function(){
    return { 
      category: {
        name: '',
        description: '',
        status: true,
      },
      Toast: null,
    }
  },
  methods: {
    clearCategory(){
      this.category.name = '';
      this.category.description = '';
      this.category.status = '';
    },
    createCategory(){
      var vm = this; 
      vm.$validator.validateAll().then((result) => { 
        if (!result) {} else { 
          axios.post('/products/create-category', { 
            category: vm.category,
          }).then(function(response) { 

            if (response.data.success === true) { 
              vm.Toast.fire({ 
                type: 'success', 
                title: response.data.message 
              }); 

              Fire.$emit('CategoryCreated', {
                category : response.data.category
              }); 
              vm.clearCategory();
              vm.$Progress.finish(); 
            } else { 
              vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again', 'warning'); 
              vm.$Progress.fail(); 
            } 
          }); 
        } 
      });
    }
  }
}
</script>