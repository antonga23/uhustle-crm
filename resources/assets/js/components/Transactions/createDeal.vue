<style scoped>
input, textarea, select {
  border-radius: 50rem;
  padding: 11px 18px!important;
  font-size: 12px;
  box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.1);
  color: #003449;
  border-color: #ccc;
  margin-bottom: 7px;
  font-family: 'Rubik', sans-serif;
  height: auto!important;
}
textarea {
  border-radius: 25px;
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
.cancel-deal {
  border-radius: 50rem!important;
  font-size: 10px;
  text-transform: uppercase;
  box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -moz-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -o-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  color: #999999;
  padding: 9px;
}
.save-deal {
  font-size: 10px;
  text-transform:uppercase;
  font-weight: 700;
  padding: 9px;
}
</style>

<template>
  <div class="createDeal">   
    <p>Deal information</p>   
    <div class="row mx-0">   
      <div class="col-7 pl-0">   
        <div class="row mx-0">   
          <div class="col-6 pl-0">   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Agent Name   
              <input
                v-model="deal.agent_name"    
                type="text"    
                id="agent-name"     
                name="AgentName"   
                class="form-control border-0 rounded-pill"/>   
            </label>   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Lead Name 
              <select v-model="deal.lead_id" class="custom-select rounded-pill border-0">   
                <option value="-None-" selected>-None-</option>   
                <option :value="lead.id" v-for="(lead, index) in leads" :key="index">{{ lead.name + " " + lead.surname  }}</option>  
              </select>   
            </label>   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Deal Name   
              <input
                v-model="deal.deal_name"     
                type="text"    
                id="deal-name"     
                name="DealName"   
                class="form-control border-0 rounded-pill"/>   
            </label>   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Closing Date   
              <input    
                v-model="deal.closing_date" 
                type="date"    
                id="closing-date"     
                name="ClosingDate"   
                class="form-control border-0 rounded-pill"/>   
            </label>   
          </div>   
          <div class="col-6 pr-0">   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Type   
              <select v-model="deal.type"  class="custom-select rounded-pill border-0">   
                <option value="-None-" selected>-None-</option>   
                <option value="1">Existing Business</option>   
                <option value="2">New Business</option>   
              </select>   
            </label>   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Lead Source   
              <select v-model="deal.lead_source" class="custom-select rounded-pill border-0">   
                <option value="-None-" selected>-None-</option>   
                <option value="1">Advertising</option>   
                <option value="2">Cold Call</option>   
                <option value="3">Employee Referral</option>   
                <option value="4">External Referral</option>   
                <option value="5">Online Store</option>   
              </select>   
            </label>   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Amount   
              <input   
                v-model="deal.amount" 
                type="number"    
                id="amount"     
                name="Amount"   
                class="form-control border-0 rounded-pill"/>   
            </label>   
          </div>   

          <div class="col-12 px-0">   
            <label class="col-lg-12 control-label w-100 p-0 mb-2">Description Information   
              <textarea 
                v-model="deal.description"   
                id="info"     
                name="Info"   
                class="form-control border-0"/>   
            </label>   
          </div>   
        </div>   

      </div>   

      <div class="col-3">   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Stage   
          <select v-model="deal.stage" class="custom-select rounded-pill border-0">   
            <option value="-None-" selected>-None-</option>   
            <option value="1">Qualification</option>   
            <option value="2">Needs Analysis</option>   
            <option value="3">Value Proposition</option>   
            <option value="4">Proposal</option>   
            <option value="5">Negotiation</option>   
          </select>   
        </label>   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Probability (%)   
          <input
            v-model="deal.probability"    
            type="text"    
            id="probability"     
            name="Probability"   
            class="form-control border-0 rounded-pill"/>   
        </label>   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Expected Revenue   
          <input
            v-model="deal.expected_revenue"    
            type="number"    
            id="revenue"     
            name="Revenue"   
            class="form-control border-0 rounded-pill"/>   
        </label>   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Name   
          <input  
            v-model="deal.contact_name"   
            type="text"    
            id="contact-name"     
            name="ContactName"   
            class="form-control border-0 rounded-pill"/>   
        </label>   
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Contact Number   
          <input 
            v-model="deal.contact_number"    
            type="tel"    
            id="contact-number"     
            name="ContactNumber"   
            class="form-control border-0 rounded-pill"/>   
        </label> 
        <label class="col-lg-12 control-label w-100 p-0 mb-2">Status     
          <select v-model="deal.status" class="custom-select rounded-pill border-0">   
            <option value="-None-" selected>-None-</option>   
            <option value="1">Paid</option>   
            <option value="2">Pending</option>   
            <option value="3">Due</option>   
            <option value="4">Rejected</option>     
          </select>  
        </label> 
      </div>   

      <div class="col-2 align-self-end pr-0">   
        <div class="row mx-0">   
          <div class="col-lg-6 pl-0 pr-2">   
            <button    
              type="submit"    
              class="btn btn-default cancel-deal w-100 m-0 border-0"    
              @click="clearDeal()"   
            >Cancel</button>   
          </div>   
          <div class="col-lg-6 pr-0 pl-2">   
            <button    
              type="submit"    
              class="btn btn-primary save-deal w-100 rounded-pill m-0"    
              @click="createDeal()"   
            >Save</button>   
          </div>   
        </div>   
      </div>   
    </div>  
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {
    this.getLeads();

    this.Toast = this.$swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  },
  created: function () {},
  props: ['empty_deal', 'lead_id'],
  data: function(){
    return { 
      deal: {
        lead_id: this.lead_id,
        agent_id:'' ,
        agent_name:'' ,
        deal_name:'' ,
        closing_date:'' ,
        type:'-None-' ,
        lead_source:'-None-' ,
        amount:'' ,
        description:'' ,
        stage:'-None-' ,
        probability:'' ,
        expected_revenue:'' ,
        contact_name:'' ,
        contact_number:'' ,
        status:'' ,
      },
      leads: [],
      Toast: null,
    }
  },
  methods: {
    clearDeal(){
      this.deal.lead_id = this.lead_id;
      this.deal.agent_id = '';
      this.deal.agent_name = '';
      this.deal.deal_name = '';
      this.deal.closing_date = '';
      this.deal.type = '-None-';
      this.deal.lead_source = '-None-';
      this.deal.amount = '';
      this.deal.description = '';
      this.deal.stage = '-None-';
      this.deal.probability = '';
      this.deal.expected_revenue = '';
      this.deal.contact_name = '';
      this.deal.contact_number = '';
    },
    createDeal(){
      var vm = this;
      axios.post("/deals/create", vm.deal).then(function(response) {  
        if (response.data.success == true) {  

          vm.Toast.fire({ 
              type: 'success', 
              title: response.data.message
          }); 

          Fire.$emit('AfterDealAdd');

          vm.clearDeal();
          
        } else {  
          vm.$Progress.fail();  
          vm.$swal(  
            "Failed",  
            "Opps, something went wrong while retrieving lead, please try again",  
            "warning"  
          );  
        }  
      });
    },
    getLeads(){
      var vm = this;
      if(this.lead_id !== '-None-'){
        axios.get("/modules/get-single-item/" + this.lead_id).then(function(response) {  
          vm.leads = response.data.leads.display_items;
        });
      }else{
        axios.get("/modules/get-all-items").then(function(response) {  
          vm.leads = response.data.leads.display_items;
        });
      }
    },
  }
}
</script>