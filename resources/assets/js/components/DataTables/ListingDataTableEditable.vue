<template>
  <div>
    <b-table
      :items="items"
      :fields="table_fields"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      responsive="sm"
    ></b-table>

    <div>
      Sorting By: <b>{{ sortBy }}</b>, Sort Direction:
      <b>{{ sortDesc ? 'Descending' : 'Ascending' }}</b>
    </div>
  </div>
</template>

<script>
  export default {
    mounted(){
      this.getItems();
    },
    data() {
      return {
        sortBy: 'age',
        sortDesc: false,
        table_fields: [
          { key: 'last_name', sortable: true },
          { key: 'first_name', sortable: true },
          { key: 'age', sortable: true },
          { key: 'isActive', sortable: false }
        ],
        items: [
          { isActive: true, age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { isActive: false, age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { isActive: false, age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { isActive: true, age: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
      }
    },
    props: ['active'],
    methods: {

      getItems(){

        var vm = this;

        var endpoint = '/modules/get-assigned-items/' + vm.active;

        vm.show_page_loader = true;

        vm.$Progress.start();

        axios.get(endpoint).then(function (response) {
            
          if(response.data.success == true){

            vm.items = response.data.items;
            
            vm.cachItems = response.data.items;

            vm.display_items = response.data.display_items;
            
            vm.chached_display_items = response.data.display_items;

            vm.count_assigned = response.data.count_assigned;

            vm.count_unassigned = response.data.count_unassigned;
            
            vm.show_page_loader = false;

            vm.$Progress.finish();
          }else{
            vm.show_page_loader = false;
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
          }
        });
      }
    }
  }
</script>