<style scoped>
input, textarea, select {
  border-radius: 50rem;
  padding: 11px 18px!important;
  font-size: 0.63vw;
  box-shadow: 0 0 4px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.1);
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
  font-size: 0.52vw;
  color: #999999;
  margin-bottom: 7px;
  margin-left: 17px;
}
.cancel-deal {
  border-radius: 50rem!important;
  font-size: 0.52vw;
  text-transform: uppercase;
  box-shadow: 0 0 4px rgba(0,0,0,0.05);
  -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.05);
  letter-spacing: 0.05em;
  color: #999999;
  padding: 9px;
}
.save-deal {
  font-size: 0.52vw;
  text-transform:uppercase;
  letter-spacing: 0.05em;
  font-weight: 700;
  padding: 9px;
}
p {
  
}
</style>

<template>
  <div class="createDeal">
    <p>Deal information</p>
    <div class="row mx-0">
      <div class="col-7 pl-0">
        <div class="row mx-0">
          <div class="col-6 pl-0">
            <label class="col-lg-12 control-label w-100 p-0">Agent Name</label>
            <input 
              type="text" 
              id="agent-name"  
              name="AgentName"
              class="form-control rounded-pill"/>

            <label class="col-lg-12 control-label w-100 p-0">Deal Name</label>
            <input 
              type="text" 
              id="deal-name"  
              name="DealName"
              class="form-control rounded-pill"/>

            <label class="col-lg-12 control-label w-100 p-0">Closing Date</label>
            <input 
              type="date" 
              id="closing-date"  
              name="ClosingDate"
              class="form-control rounded-pill"/>
          </div>

          <div class="col-6 pr-0">
            <label class="col-lg-12 control-label w-100 p-0">Type</label>
            <select class="custom-select rounded-pill">
              <option selected>-None-</option>
              <option value="1">Existing Business</option>
              <option value="2">New Business</option>
            </select>

            <label class="col-lg-12 control-label w-100 p-0">Lead Source</label>
            <select class="custom-select rounded-pill">
              <option selected>-None-</option>
              <option value="1">Advertising</option>
              <option value="2">Cold Call</option>
              <option value="3">Employee Referral</option>
              <option value="4">External Referral</option>
              <option value="5">Online Store</option>
            </select>

            <label class="col-lg-12 control-label w-100 p-0">Amount</label>
            <input 
              type="number" 
              id="amount"  
              name="Amount"
              class="form-control rounded-pill"/>
          </div>

          <div class="col-12 px-0">
            <label class="col-lg-12 control-label w-100 p-0">Description Information</label>
            <textarea 
              id="info"  
              name="Info"
              class="form-control"/>
          </div>
        </div>
      </div>

      <div class="col-3 align-self-end">
        <!-- <label class="col-lg-12 control-label w-100 p-0">Stage</label>
        <select class="custom-select rounded-pill">
          <option selected>-None-</option>
          <option value="1">Qualification</option>
          <option value="2">Needs Analysis</option>
          <option value="3">Value Proposition</option>
          <option value="4">Proposal</option>
          <option value="5">Negotiation</option>
        </select> -->

        <label class="col-lg-12 control-label w-100 p-0">Probability (%)</label>
        <input 
          type="text" 
          id="probability"  
          name="Probability"
          class="form-control rounded-pill"/>

        <label class="col-lg-12 control-label w-100 p-0">Expected Revenue</label>
        <input 
          type="number" 
          id="revenue"  
          name="Revenue"
          class="form-control rounded-pill"/>

        <label class="col-lg-12 control-label w-100 p-0">Contact Name</label>
        <input 
          type="text" 
          id="contact-name"  
          name="ContactName"
          class="form-control rounded-pill"/>

        <label class="col-lg-12 control-label w-100 p-0">Contact Number</label>
        <input 
          type="tel" 
          id="contact-number"  
          name="ContactNumber"
          class="form-control rounded-pill"/>
      </div>

      <div class="col-2 align-self-end pr-0">
        <div class="row mx-0">
          <div class="col-lg-6 pl-0 pr-2">
            <button 
              type="submit" 
              class="btn btn-default cancel-deal w-100 m-0 border-0" 
              @click=""
            >Cancel</button>
          </div>
          <div class="col-lg-6 pr-0 pl-2">
            <button 
              type="submit" 
              class="btn btn-primary save-deal w-100 rounded-pill m-0" 
              @click=""
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
  mounted() {},
  created: function () {},
  props: [],
  data: function(){},
  methods: {}
}