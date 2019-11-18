<style scoped>
  .tab-pane.card-body{
    padding: 4.4% 5.6% 6.8%;
  }
  .form-control {
    border-radius: 50rem;
    padding: 11px 18px!important;
    font-size: 0.63vw;
    box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
    color: #003449;
    border-color: #ccc;
    font-family: 'Rubik', sans-serif;
    height:auto!important;
  }
  label {
    font-family: 'Rubik', sans-serif;
    font-size: 10px;
    color: #999999;
    margin-bottom:7px;
    margin-left: 17px;
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
  .permissions-divider {
    margin-top:3.7%;
    margin-bottom:3.1%;
  }
  h5 {
    font-size: 0.83vw;
  }
  p {
    color: #999999;
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
  }
  .btn-secondary {
    background: transparent;
    border: 0;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -o-box-shadow: none;
  }
</style>
<template>
  <div id="api-integration">
    <b-card no-body>
      <b-tabs pills card>
        <b-tab title="Commission Structure">
          <div class="col-lg-12 px-0">
            <b-container fluid class="px-0">
              <div class="row mx-0 align-items-center permissions-divider">
                <div class="col-auto pl-0">
                  <h5 class="mb-0">Commission Structure A</h5>
                </div>

                <div class="col px-0">
                  <div class="divider-line"></div>
                </div>
              </div>
              
              <a-row v-for="(item, index) in structure_a" :key="index" >
                <a-col :span="5" class="mr-4">
                  <div>
                    <label for="input-none">Percentage of Sales amount</label>
                    <b-form-input id="input-none" :state="null" v-model="item.percentage.value"></b-form-input>
                  </div>
                </a-col>

                <a-col :span="5">
                  <div>
                    <label for="input-none" class="mb-4 ml-0">Status</label>
                    <br/>
                    <a-switch v-model="item.status.value" :id="'structure_a-0'"/>
                    <label v-if="item.status.value == 0">Inactive</label>
                    <label v-if="item.status.value == 1">Active</label>
                  </div>
                </a-col>
              </a-row>

              <div class="row mx-0 align-items-center permissions-divider">
                <div class="col-auto pl-0">
                  <h5 class="mb-0">Commission Structure B</h5>
                </div>

                <div class="col px-0">
                  <div class="divider-line"></div>
                </div>
              </div>

              <a-row v-for="(range, index) in structure_b" :key="index">
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Minimum Sales</label>
                    <b-form-input id="input-none" :state="null" v-model="range.min_sales.value"></b-form-input>
                  </div>
                </a-col>
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Maximum Sales</label>
                    <b-form-input id="input-none" :state="null" v-model="range.max_sales.value"></b-form-input>
                  </div>
                </a-col>
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Percentage</label>
                    <b-form-input id="input-none" :state="null" v-model="range.percentage.value"></b-form-input>
                  </div>
                </a-col>

                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none" class="mb-4 ml-0">Status</label>
                    <br/>
                    <a-switch v-model="range.status.value" :id="'structure_b-' + index"/>
                    <label v-if="range.status.value == 0">Inactive</label>
                    <label v-if="range.status.value == 1">Active</label>
                  </div>
                </a-col>

                <a-col :span="3" sm="auto" class="pr-0" style="padding-top: 45px;">
                  <b-button
                    v-if="(index + 1) < structure_b.length" 
                    @click="removeBField(index)"
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Delete.svg" width="19"/>
                  </b-button>

                  <b-button 
                    v-else 
                    @click="addBField(range.status.comm_structure_id)" 
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Add.svg" width="19"/>
                  </b-button>
                </a-col>
              </a-row>

              <div class="row mx-0 align-items-center permissions-divider">
                <div class="col-auto pl-0">
                  <h5 class="mb-0">Commission Structure C</h5>
                </div>

                <div class="col px-0">
                  <div class="divider-line"></div>
                </div>
              </div>

              <a-row v-for="(item, i) in structure_c" :key="i">
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Minimum Amount</label>
                    <b-form-input id="input-none" :state="null" v-model="item.min_amount.value"></b-form-input>
                  </div>
                </a-col>
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Maximum Amount</label>
                    <b-form-input id="input-none" :state="null" v-model="item.max_amount.value"></b-form-input>
                  </div>
                </a-col>
                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none">Percentage</label>
                    <b-form-input id="input-none" :state="null" v-model="item.percentage.value"></b-form-input>
                  </div>
                </a-col>

                <a-col :span="3" class="mr-4">
                  <div>
                    <label for="input-none" class="mb-4 ml-0">Status</label>
                    <br/>
                    <a-switch v-model="item.status.value" :id="'structure_c' + i"/>
                    <label v-if="item.status.value == 0">Inactive</label>
                    <label v-if="item.status.value == 1">Active</label>
                  </div>
                </a-col>

                <a-col :span="3" sm="auto" class="pr-0" style="padding-top: 45px;">
                  <b-button
                    v-if="(index + 1) < structure_c.length" 
                    @click="removeCField(index)"
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Delete.svg" width="19"/>
                  </b-button>

                  <b-button 
                    v-else 
                    @click="addCField(item.status.comm_structure_id)" 
                    class="icon m-0 p-0"
                  >
                    <img src="images/icons/Field_Add.svg" width="19"/>
                  </b-button>
                </a-col>
              </a-row>

              <div class="row justify-content-end mx-0">
                <b-button class="btn-primary font-weight-bold mr-0 my-0" @click="updateDetails()">Update</b-button>
              </div>
            </b-container>
          </div>
        </b-tab>
      </b-tabs>
    </b-card>
  </div>
</template>
<script>
  export default {
    components: { 
    },
    mounted() {
      console.log('Commision Component mounted');

      this.getCommissionStructures();

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: ['apis'],
    data: function(){
      return {
        structure_a:[
            {
              percentage : {
                field_id: '',
                value: 0
              },
              status : {
                field_id: '',
                value: 0
              },
          }
        ],
        structure_b: [
          {
            min_sales : {
              field_id: '',
              value: 0
            },
            max_sales : {
              field_id: '',
              value: 0
            },
            percentage : {
              field_id: '',
              value: 0
            },
            status : {
              field_id: '',
              value: 0
            },
          },
        ],
        structure_c: [
          {
            min_amount : {
              field_id: '',
              value: 0
            },
            max_amount : {
              field_id: '',
              value: 0
            },
            percentage : {
              field_id: '',
              value: 0
            },
            status : {
              field_id: '',
              value: 0
            },
          },
        ],
        Toast: null,
      }
    },
    methods: {
      getCommissionStructures(){
        var vm = this;
        axios.get('/settings/get-comm-structures',).then(function (response) {
          if(response.data.structure_a.length > 0){
            vm.structure_a = response.data.structure_a;
            console.log(response.data.structure_a);
          }
          if(response.data.structure_b.length > 0){
            vm.structure_b = response.data.structure_b;
            console.log(response.data.structure_b);
          }
          if(response.data.structure_c.length > 0){
            vm.structure_c = response.data.structure_c;
            console.log(response.data.structure_c);
          }
        });

      },
      updateDetails(){

        var vm = this;  

        vm.display_name_state = true;

        var end_point = '/settings/update-commission';

        axios.post(
          end_point,{
            structure_a : vm.structure_a,
            structure_b : vm.structure_b,
            structure_c : vm.structure_c,
          }).then(function (response) {
                
          if(response.data.success == true){                                   
            Fire.$emit('AfterUpdatingCommission');
            vm.$Progress.finish();
            vm.Toast.fire({ type: 'success', title: response.data.message });
          }else {
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
          }
        });
      },
      addBField(comm_structure_id){
        console.log(comm_structure_id);
        this.structure_b.push(
          {
            min_sales : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            max_sales : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            percentage : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            status : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
          }
        );
      },
      removeBField(index){
          
        if (index > -1) {
          this.structure_b.splice(index, 1);
        }
      },
      addCField(comm_structure_id){
        this.structure_c.push(
          {
            min_amount : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            max_amount : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            percentage : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
            status : {
              comm_structure_id : comm_structure_id,
              field_id: '',
              value: 0
            },
          }
        );
      },
      removeCField(index){
          
        if (index > -1) {
          this.structure_c.splice(index, 1);
        }
      }
    }
  }
</script>