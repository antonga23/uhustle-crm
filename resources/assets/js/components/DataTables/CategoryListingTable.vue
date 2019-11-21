<template>
    <div>
        <p>Categories Data table goes here </p>
        <b-table striped hover :items="categoryListing"></b-table>
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