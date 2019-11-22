<template>
  <div class="table-container">
    <b-table  class="branch-listing" :items="branchesListing" :per-page="perPage"   
                    :current-page="currentPage" >
    <template slot="type_id">
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
     <template slot="actions">
        <span class="actions">
          <a class="Edit" href="#" title="Edit"></a>
          <a class="Delete" href="#" title="Delete"></a>
        </span>
      </template>
    </b-table>
    <b-pagination
    class="branch-pagination"
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
      branchesListing: [
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0089",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0660",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        },
        {
          name: "CPT Main",
          address: "9 Dock Rd",
          province: "Western Cape",
          city: "Cape Town",
          tell: "021 000 0000",
          fax: "021 000 0000",
          tax_number: "0431256",
          type_id: "",
          code: "CPT001",
          status: "",
actions: ""
        }
      ]
    };
  },
    computed: {
      rows() {
        return this.branchesListing.length
      }
    }
};
</script>