<template>
    <div class='table-container'>
        <b-table class="order-listing" :items="orderHistory" :per-page="perPage"   
                    :current-page="currentPage">
           <template slot="type_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>
       <template slot="class_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>
       <template slot="origin_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>
       <template slot="requestor_id">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>CPT001
          </a-select-option>
        </a-select>
      </template>
       <template slot="status">
        <a-select class>
          <a-select-option value="0">
            <div class="d-inline-block"></div>Complete
          </a-select-option>
        </a-select>
      </template>
        </b-table>
        <b-pagination
       v-model="currentPage"
      :per-page="perPage"
      align="center"
      size="sm"
      :total-rows="rows"
    ></b-pagination>
    </div>
</template>
<script>
  export default {
    data() {
      return {
         perPage: 20, 
      currentPage: 1,
        orderHistory: [
          {type_id: 1, class_id: '', origin_id: '', requestor_id: '', billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'', date_created:'21/11/2019' },
           { type_id: 1, class_id: '', origin_id: '', requestor_id: '', billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'', date_created:'21/11/2019' },
             { type_id: 1, class_id: '', origin_id: '', requestor_id: '', billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'', date_created:'21/11/2019' },
        ]
      }
    },
    computed: {
      rows() {
        return this.orderHistory.length
      }
    }
  }
</script>