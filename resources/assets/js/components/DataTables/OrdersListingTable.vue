<template>
    <div>
        <p>Orders Data table goes here </p>
        <b-table striped hover :items="orderHistory"></b-table>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        orderHistory: [
          { billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'Complete', date_created:'21/11/2019' },
           { type_id: 1, class_id: 'P002', origin_id: 'CPT001', requestor_id: 'P100', billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'Complete', date_created:'21/11/2019' },
             { type_id: 1, class_id: 'P002', origin_id: 'CPT001', requestor_id: 'P100', billing_address: '9 Dock Road', contact_number:'021 000 0000',contact_person:'John Doe', amount: 'R1000', vat_mount:'R150', vat:'15%', total_amount:'R1150', status:'Complete', date_created:'21/11/2019' }
        ]
      }
    }
  }
</script>