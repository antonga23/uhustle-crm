<template>
     <div class='table-container'>
        <b-table class="category-listing" :items="categoryListing"></b-table>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        categoryListing: [
          { name: 'xxx', description: 'printer', status: 'available'},
         { name: 'xxx', description: 'printer', status: 'available'},
         { name: 'xxx', description: 'printer', status: 'available'}
        ]
      }
    }
  }
</script>