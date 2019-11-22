<template>
     <div class='table-container'>
        <b-table class="category-listing" :items="categoryListing" :per-page="perPage"   
                    :current-page="currentPage">
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
        categoryListing: [
          { name: 'xxx', description: 'printer', status: "", actions: ""},
         { name: 'xxx', description: 'printer', status: "", actions: ""},
         { name: 'xxx', description: 'printer', status: "", actions: ""}
        ]
      } 
    },
     computed: {
      rows() {
        return this.categoryListing.length
      }
    },
  }
</script>