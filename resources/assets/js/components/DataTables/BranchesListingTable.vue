<template>
    <div class='table-container'>
        <b-table class="branch-listing" :items="branchesListing"></b-table>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        branchesListing: [
          { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' },
          { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' },
          { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' },
           { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' },
          { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' },
          { name: 'CPT Main', address: '9 Dock Rd', province: 'Western Cape', city: 'Cape Town', tell: '021 000 0000', fax: '021 000 0000', tax_number: '0431256', type_id: 'X', code: 'CPT001', status: 'Y' }
        ]
      }
    }
  }
</script>