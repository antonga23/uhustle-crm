<template>
     <div class='table-container'>
        <b-table class="category-listing" :items="categoryListing">
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
      :per-page="10"
      aria-controls="category-listing"
      align="center"
      size="sm"
    ></b-pagination>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        categoryListing: [
          { name: 'xxx', description: 'printer', status: "", actions: ""},
         { name: 'xxx', description: 'printer', status: "", actions: ""},
         { name: 'xxx', description: 'printer', status: "", actions: ""}
        ]
      }
    }
  }
</script>