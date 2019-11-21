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
.btn-primary {
  border-radius: 50rem!important;
  text-transform:uppercase;
  font-size: 10px;
  padding: 11px 14px 10px;
  line-height:1em;
  margin-left: 0.9%;
  margin-right: 0.9%;
}
</style>

<template>
  <div class="createDeal">  
    <div class="row mt-0 mx-0 align-items-center fields-divider">
      <div class="col-auto pl-0">
        <h5 class="mb-0">Category Information</h5>
      </div>

      <div class="col px-0">
        <div class="divider-line"></div>
      </div>
    </div>

    <b-row class="mx-0">
      <b-col sm="6" class="px-0">
        <label for="input-none">Name</label>
        <input 
          v-model="category.name"    
          type="text"    
          id="category-name"     
          name="categoryName"   
          class="form-control rounded-pill"/>

        <label for="input-none">Description</label>
        <textarea 
          v-model="category.description"   
          id="info"     
          name="Info"   
          class="form-control"/>

        <label for="input-none">Status</label>
        <a-select v-model="category.category_status" class="custom-select rounded-pill border-0">   
          <a-select-option value="-None-" selected>-None-</a-select-option>   
          <a-select-option v-for="(c_status, index) in category.category_statuses" :key="index">{{c_status}}</a-select-option> 
        </a-select>

        <div class="row mx-0 justify-content-end">
          <b-button variant="primary" class="font-weight-bold m-0">Add</b-button>
        </div>
      </b-col>
    </b-row>  
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {
    
  },
  created: function () {},
  props: [],
  data: function(){
    return { 
      category: {
        name: '',
        description: '',
        category_status:'-None-',
        category_statuses: ['In stock', 'Out of Stock']
      },
      Toast: null,
    }
  },
  methods: {
  }
}
</script>