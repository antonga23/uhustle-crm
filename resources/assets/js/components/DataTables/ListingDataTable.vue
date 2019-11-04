
<template>
    <div class="card no-box-shadow material-table" style="width: fit-content;">
        <b-form-group>
            <b-form-checkbox-group id="checkbox-group-1" v-model="selected" name="flavour-1">
                <table ref="table">
                    <thead>
                        <tr>
                            <th v-for="(column, index) in columns" @click="sort(index)" :class="(sortable ? 'sorting ' : '')
                                    + (sortColumn === index ?
                                        (sortType === 'desc' ? 'sorting-desc' : 'sorting-asc')
                                        : '')
                                    + (column.numeric ? ' numeric' : '')" :style="{width: column.width ? column.width : 'auto'}" :key="index">
                                <!-- <b-form-checkbox value="select_all" unchecked-value="select_none" v-if="index == 0" @change="selectAll"></b-form-checkbox>   -->
                                <span style="float:left;padding-top: 2px;">
                                  {{column.label}}
                                </span>
                                    
                                <div v-if="index == columns.length-1" class="col pl-0 dropdown">
                                    <b-button class="rounded-circle m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="/images/workstation/Asset 28@4x.png" alt="Icon" class="icon" style="width: 10px;" />
                                    </b-button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Calls</a>
                                        <a class="dropdown-item" href="#">Sales</a>
                                        <a class="dropdown-item" href="#">Calls</a>
                                        <a class="dropdown-item" href="#">Sales</a>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(row, index) in paginated" :class="onClick ? 'clickable' : ''" @click="click(row, index)" :key="index">
                            <td v-for="(column, i) in columns" :class="column.numeric ? 'numeric' : ''" :key="i" @>
                                <!-- <span v-if="column.field == 'all'">
                                    <b-form-checkbox :value="row.id" v-model="selected" @change="selectOne"></b-form-checkbox>
                                </span> -->

                                <span v-if="column.field == 'actions'" class="actions" style="display: block;width: 180px;">

                                    <a class="View" :href="'/workstation/' + row.id" title="View"></a>

                                    <a 
                                      href="#"
                                      title="Save"
                                      class="Save"
                                      @click="submitEdit(row.id)"  
                                      v-if="editing_row === true && row_id === row.id" 
                                    >
                                    </a>
                                    <a v-else class="Edit" href="#" @click="showEdit(row.id)" title="Edit"></a>
                                    
                                    <a v-if="editing_row === true && row_id === row.id" class="Cancel" href="#"  @click="cancelEdit(row.id)" title="Cancel Edit"></a>

                                    <a v-if="editing_row === false && ( row_id === null || row_id != row.id)" class="Delete" href="#" @click="deleteItem(row.id)" title="Delete"></a>
                                </span>

                                <span v-else>
                                    <span v-for="(item, k) in module_items" :key="k">
                                      <span v-if="item.item.id == row.id">
                                        <span v-for="(custom_field, j) in custom_fields" :key="j">
                                          <span v-if="column.field == custom_field.name && item.item.id == row.id">

                                            <span v-if="column.field == 'source'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value.name  }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value.name  }}
                                                </span>
                                              </span>
                                              <select v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="Source"  name="Source" v-model="item.item[column.field].meta_value"  class="form-control">
                                                  <option :value="null">- Please Choose Source</option>
                                                  <option :value="{ id : item.id, name : item.name }" v-for="(item,index) in sources" :key="index">{{ item.name}}</option>
                                              </select>
                                            </span>

                                            <span v-else-if="column.field == 'product'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value.name  }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value.name  }}
                                                </span>
                                              </span>
                                              <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="package"  name="Package" v-model="item.item[column.field].meta_value"   class="form-control">
                                                  <option :value="null">- Please Choose Package</option>
                                                  <option :value="item" v-for="(item,index) in packages" :key="index">{{ item.name }}</option>
                                              </select>
                                            </span>

                                            <span v-else-if="column.field == 'owner'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value.name + ' ' + item.item[column.field].meta_value.surname  }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value.name + ' ' + item.item[column.field].meta_value.surname  }}
                                                </span>
                                              </span>
                                              <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="role"  name="Owner" v-model="item.item[column.field].meta_value" class="form-control">
                                                  <option :value="null">- Please Choose Lead Owner </option>
                                                  <option :value="{id: item.id, name : item.name, surname : item.lastname }" v-for="(item,index) in active_users" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                              </select>
                                            </span>

                                            <span v-else-if="column.field == 'assignee'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value.name + ' ' + item.item[column.field].meta_value.surname  }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value.name + ' ' + item.item[column.field].meta_value.surname  }}
                                                </span>
                                              </span>
                                              <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="Assignee"  name="Assignee" v-model="item.item[column.field].meta_value"  class="form-control">
                                                  <option :value="null">- Please Choose Assignee</option>
                                                  <option :value="{id: item.id, name : item.name, surname : item.lastname }" v-for="(item,index) in active_users" :key="index">{{ item.name + ' ' + item.lastname }}</option>
                                              </select>
                                            </span>

                                            <span v-else-if="column.field == 'status'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value  }}
                                                </span>
                                              </span>
                                                <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="status"  name="Status" v-model="item.item[column.field].meta_value"  class="form-control">
                                                    <option :value="null">- Please Choose Status </option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Canceled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </span>

                                            <span v-else-if="column.field == 'title'">
                                                <span v-if="item.item[column.field].meta_value !== null">
                                                  <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                    {{ item.item[column.field].meta_value }}
                                                  </span>
                                                  <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                    {{ item.item[column.field].meta_value  }}
                                                  </span>
                                                </span>
                                                <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="status"  name="Status" v-model="item.item[column.field].meta_value"  class="form-control">
                                                    <option :value="null">- Please Choose Status </option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Prof">Prof</option>
                                                </select>
                                            </span>

                                            <span v-else-if="column.field == 'gender'">
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value  }}
                                                </span>
                                              </span>
                                                <select  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="status"  name="Status" v-model="item.item[column.field].meta_value"  class="form-control">
                                                    <option value="">- Please Choose Status </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </span>

                                            <span v-else>
                                              <span v-if="item.item[column.field].meta_value !== null">
                                                <span v-if="editing_row === false && item.item.id == row.id && row_id === null">
                                                  {{ item.item[column.field].meta_value }}
                                                </span>
                                                <span v-if="editing_row === true && item.item.id == row.id && row_id != row.id">
                                                  {{ item.item[column.field].meta_value  }}
                                                </span>
                                              </span>
                                                <input  v-if="editing_row === true && item.item.id == row.id && row_id === row.id" type="text" id="Name"  name="Name" v-model="item.item[column.field].meta_value"  class="form-control">
                                            </span>

                                          </span>
                                        </span>
                                      </span>
                                    </span>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </b-form-checkbox-group>
        </b-form-group>
        <div class="table-footer" v-if="paginate">
            <div class="datatable-length">
                <label>
                    <span>Rows per page:</span>
                    <select class="browser-default" @change="onTableLength">
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="-1">All</option>
                    </select>
                </label>
            </div>
            <div class="datatable-info">
                {{(currentPage - 1) * currentPerPage ? (currentPage - 1) * currentPerPage : 1}} -{{Math.min(processedRows.length, currentPerPage * currentPage)}} of {{processedRows.length}}
            </div>
            <div>
                <ul class="material-pagination">
                    <li>
                        <a href="javascript:undefined" class="waves-effect btn-flat" @click.prevent="previousPage" tabindex="0">
                            <img src="/images/DataTables/left arrow.svg" class="chevron" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:undefined" class="waves-effect btn-flat" @click.prevent="nextPage" tabindex="0">
                            <img src="/images/DataTables/right arrow.svg" class="chevron" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import Fuse from 'fuse.js';
export default {
    props: {
        role: '',
        title: {},
        users: null,
        active_users : null,
        active_roles : null,
        sources : null,
        packages : null,
        custom_fields :{
            required: true
        },
        module_items :{
            required: true
        },
        columns: {
            required: true
        },
        rows: {
            required: true
        },
        onClick: {},
        customButtons: {
            default: () => []
        },
        perPage: {
            default: 15
        },
        sortable: {
            default: true
        },
        searchable: {
            default: true
        },
        paginate: {
            default: true
        },
        exportable: {
            default: true
        },
        printable: {
            default: true
        },
    },
    mounted(){
        var vm = this;
        Fire.$on('Export', function(){
            vm.exportExcel();
        });        
        Fire.$on('Print', function(){        
            vm.print();
        });
        Fire.$on('Search', function(data){
            vm.searching = true;    
            vm.searchInput = data.search_term;
        });

        this.Toast = vm.$swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    },
    data() {
        return {
            selected: [],
            leads_select_all: null,
            show_mass_assign: false,
            user_assigned: '',
            lead_owner: '',
            selected_assignees: '',
            selected_owners: '',
            user: {
                name: '',
                surname: '',
                account: '',
                email: '',
                user_created_id: '',
                phone_number: '',
                product_id: '',
                user_assigned: '',
                source: '',
                status: '',
                title: '',
                country: '',
                city: '',
                winsta_uploads: [],
                comments: [],
                assigned: [],
            },
            modified_row: null,
            editing_row: false,
            row_id: null ,
            summaryModal: false,
            showModal: false,
            loading: false,
            currentPage: 1,
            currentPerPage: 15,
            sortColumn: -1,
            sortType: 'asc',
            searching: false,
            searchInput: '',
            Toast: '',
            winstaUpload: '/images/winsta-uploads/'
        }
    },
    methods: {
        getText(col, field){
          var field_value = "";
          if(col !== undefined){
              if(field == 'owner' || field == 'assignee'){
                field_value = col.meta_value.name + ' ' + col.meta_value.lastname;
              }else if(field == 'product'){
                field_value = col.meta_value.name;
              }else if(field == 'source'){
                field_value = col.meta_value.name;
              }else{
                field_value = col.meta_value;
              }
          }
          return field_value; 
        },
        selectOne(e){
            if(e !== null){ 
                if(this.selected.length > 0 ){
                    this.show_mass_assign = true;
                }else{
                    this.show_mass_assign = false;
                }
            }
        },
        assignTo(){
            var vm = this;
            axios.post('/leads/mass-assign',{ lead_ids : vm.selected, 'user_assigned' : vm.selected_assignees, 'lead_owner' : vm.selected_owners }).then(function (response) {
                    
                if(response.data.success == true){
                    vm.Toast.fire({ type: 'success', title: response.data.message });
                    vm.$Progress.finish();
                    Fire.$emit('ReloadLeads');
                }else{
                    vm.$Progress.fail();
                    vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                }
            });
        },
        selectAll(e){
            if(e == 'select_all'){
                this.rows.map((lead) => {
                    this.selected.push(lead.lead.id);
                });
                this.show_mass_assign = true;
            }else{
                this.selected = [];
                this.show_mass_assign = false;
            }
        },
        getDaysRemaining(lead){
            if(lead.expires_at){ 
                var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
                var firstDate = new Date();
                var secondDate = new Date(lead.expires_at);

                var diffDays = Math.round(( secondDate.getTime() - firstDate.getTime())/(oneDay));

                return ( diffDays < 0 ) ? 'Expired' : diffDays;
            }else{
                return '-'
            }
        },
        showEdit(row_id){
            var vm = this;
            this.editing_row = !this.editing_row;

            if(this.editing_row === false){
              this.row_id = null;
            }else{
              this.row_id = row_id;
            }
            
            // this.$bvModal.show('update-user-modal');
        },
        cancelEdit(row_id){
            var vm = this;
            this.editing_row = !this.editing_row;

            if(this.editing_row === false){
              this.row_id = null;
            }else{
              this.row_id = row_id;
            }
            
            // this.$bvModal.show('update-user-modal');
        },
        submitEdit(row_id){
          var vm = this;
          this.module_items.map((item) => {
            if( item.item.id == row_id){
              vm.modified_row = item.item ;
            } 
            
          });
          
          console.log(this.modified_row);
          
          vm.$Progress.start();

          axios.post('/modules/update-item',this.modified_row).then(function (response) {
                  
              if(response.data.success == true){
                  vm.Toast.fire({ type: 'success', title: response.data.message });
                  vm.showEdit(row_id);
                  vm.$Progress.finish();
              }else{ 
                  vm.$Progress.fail();
                  vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
              }
          });
        },
        handleOk(bvModalEvt) {
            // Prevent modal from closing
            bvModalEvt.preventDefault()
            // Trigger submit handler
            this.handleSubmit()
        },
        handleSubmit(){
            var vm = this;  
            vm.$Progress.start();
            this.$validator.validateAll().then((result) => {
                    if(!result){
                    }else{
                        axios.post('/leads/update',vm.user).then(function (response) {
                                
                            if(response.data.success == true){
                                vm.Toast.fire({ type: 'success', title: response.data.message });
                                Fire.$emit('ReloadLeads');
                                vm.$bvModal.hide('update-user-modal');
                                vm.user = {
                                    comments: [],
                                    assigned: [],
                                };
                                vm.$Progress.finish();
                            }else if(response.data.errors.email[0] != ''){
                                vm.$Progress.fail();
                                vm.$swal('Failed', response.data.errors.email[0] ,'warning');
                            }else{
                                vm.$Progress.fail();
                                vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                            }
                        });
                    }
            });
        },
        deleteItem(id){
            var vm = this;  
            vm.$swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#F56C6C',
                cancelButtonColor: '#409EFF',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    vm.$Progress.start();
                    axios.get('/modules/delete-item/' + id).then(function (response) {
                        if(response.data.success == true){
                            vm.Toast.fire({ type: 'success', title: response.data.message });
                            
                            Fire.$emit('ReloadLeads', {'id' : id});

                            vm.$Progress.finish();
                        }else{
                            vm.$Progress.fail();
                            vm.$swal('Failed', 'Opps, something went wrong while deleting data, please try again','warning');
                        }
                    });
                }
            });
        },
        deleteFile(id, index){
            var vm = this;  
            vm.$swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#F56C6C',
                cancelButtonColor: '#409EFF',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    vm.$Progress.start();
                    axios.get('/delete-file/' + id).then(function (response) {
                        if(response.data.success == true){
                            vm.Toast.fire({ type: 'success', title: response.data.message });
                            vm.user.winsta_uploads.splice(index, 1);
                            vm.$Progress.finish();
                        }else{
                            vm.$Progress.fail();
                            vm.$swal('Failed', 'Opps, something went wrong while deleting data, please try again','warning');
                        }
                    });
                }
            });
        },
        downloadFile(id, index){
            var vm = this;  
            axios.get('/download-file/' + id).then(function (response) {
                window.open('/download-file/' + id);
            });
        },
        nextPage() {
            if (this.processedRows.length > this.currentPerPage * this.currentPage)
                ++this.currentPage;
        },

        previousPage() {
            if (this.currentPage > 1)
                --this.currentPage;
        },

        onTableLength(e) {
            this.currentPerPage = e.target.value;
        },

        sort(index) {
            if (!this.sortable)
                return;
            if (this.sortColumn === index) {
                this.sortType = this.sortType === 'asc' ? 'desc' : 'asc';
            } else {
                this.sortType = 'asc';
                this.sortColumn = index;
            }
        },

        search(e) {
            this.searching = !this.searching;
        },

        click(row, index) {
            if (this.onClick)
                this.onClick(row, index);
        },

        exportExcel() {
            const mimeType = 'data:application/vnd.ms-excel';
            const html = this.renderTable().replace(/ /g, '%20');

            const d = new Date();

            var dummy = document.createElement('a');
            dummy.href = mimeType + ', ' + html;
            dummy.download = this.title.toLowerCase().replace(/ /g, '-') + '-' + d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate() + '-' + d.getHours() + '-' + d.getMinutes() + '-' + d.getSeconds() + '.xls';
            dummy.click();
        },

        print() {
            let win = window.open("");
            win.document.write(this.renderTable());
            win.print();
            win.close();
        },

        renderTable() {
            var table = '<table><thead>';

            table += '<tr>';
            for (var i = 0; i < this.columns.length; i++) {
                const column = this.columns[i];
                table += '<th>';
                table += column.label;
                table += '</th>';
            }
            table += '</tr>';

            table += '</thead><tbody>';

            for (var i = 0; i < this.rows.length; i++) {
                const row = this.rows[i];
                table += '<tr>';
                for (var j = 0; j < this.columns.length; j++) {
                    const column = this.columns[j];
                    table += '<td>';
                    table += this.collect(row, column.field);
                    table += '</td>';
                }
                table += '</tr>';
            }

            table += '</tbody></table>';

            return table;
        },

        dig(obj, selector) {
            var result = obj;
            const splitter = selector.split('.');
            for (let i = 0; i < splitter.length; i++)
                if (typeof(result) === 'undefined')
                    return undefined;
                else
                    result = result[splitter[i]];
            return result;
        },

        collect(obj, field) {
            if (typeof(field) === 'function')
                return field(obj);
            else if (typeof(field) === 'string')
                return this.dig(obj, field);
            else
                return undefined;
        },
        viewLine(id, type){
            if(type="order"){
                window.location ='/view-order/'+id;
            }else{

            }
        },
    },

    computed: {
        processedRows: function() {
            
            var computedRows = this.rows;

            if (this.sortable !== false)
                computedRows = computedRows.sort((x, y) => {
                    if (!this.columns[this.sortColumn])
                        return 0;

                    const cook = (x) => {
                        x = this.collect(x, this.columns[this.sortColumn].field);
                        if (typeof(x) === 'string') {
                            x = x.toLowerCase();
                            if (this.columns[this.sortColumn].numeric)
                                x = x.indexOf('.') >= 0 ? parseFloat(x) : parseInt(x);
                        }
                        return x;
                    }

                    x = cook(x);
                    y = cook(y);

                    return (x < y ? -1 : (x > y ? 1 : 0)) * (this.sortType === 'desc' ? -1 : 1);
                })

            if (this.searching && this.searchInput)
                computedRows = (new Fuse(computedRows, {
                    keys: this.columns.map(c => c.field)
                })).search(this.searchInput);

            return computedRows;
        },

        paginated: function() {
            var paginatedRows = this.processedRows;
            if (this.paginate)
                paginatedRows = paginatedRows.slice((this.currentPage - 1) * this.currentPerPage, this.currentPerPage === -1 ? paginatedRows.length + 1 : this.currentPage * this.currentPerPage);
            return paginatedRows;
        }
    }
}
</script>
<style scoped>
.btn-secondary{
    color: #fff;
    background-color: #f6f8f9;
    border-color: #f6f8f9;
    padding: 0px 6px;
}
.btn-secondary img{
    width: 11px;
}
th .dropdown{
  width: 25%;
  padding: 0;
  margin: 0;
  float: right;
}
thead th {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: white;
    z-index: 10;
}
.no-box-shadow {
    box-shadow: none !important;
}
.btn-orange {
	background: #FF9039;
	color: #ffffff;
    border: transparent !important;
	padding: 9px 12px 9px 10px;
    font-size: 13px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.dropdown-menu.show {
    display: block;
    width: 98%;
}
.orange-btn:hover {
	background: #FF9039;
	color: #ffffff;
    border: transparent !important;
	padding: 9px 12px 9px 10px;
    font-size: 13px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
table.tg{
    width: 98%;
    margin: 0 auto;
}
table.tg td p{
    margin-top: 1em;
}
span.days-remaining{
    display: block;
    width: 100%;
    text-align: center;
}
table tr td a.Canceled{
    color: red;
    background-color: red;
    width: 19px;
    display: block;
    height: 19px;
    margin: 0 auto;
    border-radius: 32px;
}
table tr td a.Inactive{
    color: orange;
    background-color: orange;
    width: 19px;
    display: block;
    height: 19px;
    margin: 0 auto;
    border-radius: 32px;
}
table tr td a.Active{
    color: green;
    background-color: green;
    width: 19px;
    display: block;
    height: 19px;
    margin: 0 auto;
    border-radius: 32px;
}
table tr td span.actions a{
    width: 32px;
    display: block;
    height: 35px;
    float: left;
}
table tr td a.Save{
    background-image: url('/images/DataTables/New/Check Icon.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.Save:hover,
table tr td a.Save:active{
    background-image: url('/images/DataTables/New/Check Icon Hover.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.Cancel{
    background-image: url('/images/DataTables/New/Cancel Icon.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.Cancel:hover,
table tr td a.Cancel:active{
    background-image: url('/images/DataTables/New/Cancel Hover.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.View{
    background-image: url('/images/DataTables/New/View Icon.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.View:hover,
table tr td a.View:active{
    background-image: url('/images/DataTables/New/View Icon Hover.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    width: 100%;
    float: left;
}
table tr td a.Delete{
    background-image: url('/images/DataTables/New/Delete Icon.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.Delete:hover,
table tr td a.Delete:active{
    background-image: url('/images/DataTables/New/Delete Icon Hover.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
.uploaded-files a{
    display: flex;
    width: 90%;
    float: left;
}
.uploaded-files .Delete{
    background-color: transparent;
    border: none;
    width: 49px;
    height: 46px;
    margin: 0;
    box-shadow: none;
    background-image: url('/images/DataTables/New/Delete Icon.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
.uploaded-files .Delete:hover,
.uploaded-files .Delete:active{
    background-color: transparent;
    border: none;
    width: 49px;
    height: 46px;
    margin: 0;
    box-shadow: none;
    background-image: url('/images/DataTables/New/Delete Icon Hover.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.Edit{
    background-image: url('/images/DataTables/New/Edit Icon_1.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
table tr td a.Edit:hover,
table tr td a.Edit:active{
    background-image: url('/images/DataTables/New/Edit Icon Hover.svg');
    background-size: 25px 35px;
    background-repeat: no-repeat;
}
.control-label{
    float: left;
}
div.material-table {
    padding: 0;
}

#breakdown tr td{
    height: 35px;
}
#items tr td{
    padding: 12px 0 0 14px;
}
#breakdown tr, #items tr {
    border: 1px solid #dddddd;
}
tr.clickable {
    cursor: pointer;
}

#search-input {
    margin: 0;
    border: transparent 0 !important;
    height: 48px;
    color: rgba(0, 0, 0, .84);
}

#search-input-container {
    padding: 0 14px 0 24px;
    border-bottom: solid 1px #DDDDDD;
}

table {
    /* table-layout: fixed; */
    border-spacing: 0 6px;
}

.table-header {
    height: 64px;
    padding-left: 24px;
    padding-right: 14px;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    display: flex;
    -webkit-display: flex;
    border-bottom: solid 1px #DDDDDD;
}

.table-header .actions {
    display: -webkit-flex;
    margin-left: auto;
}

.table-header .btn-flat {
    min-width: 36px;
    padding: 0 8px;
}

.table-header input {
    margin: 0;
    height: auto;
}

.table-header i {
    color: rgba(0, 0, 0, 0.54);
    font-size: 24px;
}

.table-footer {
    height: 56px;
    padding-left: 24px;
    padding-right: 14px;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    flex-direction: row;
    -webkit-justify-content: flex-end;
    justify-content: flex-end;
    -webkit-align-items: center;
    align-items: center;
    font-size: 0.63vw !important;
    color: rgba(0, 0, 0, 0.54);
}

.table-footer .datatable-length {
    display: -webkit-flex;
    display: flex;
}

.table-footer .datatable-length select {
    outline: none;
}

.table-footer img {
    width: 46px;
}
.table-footer label {
    font-size: 0.63vw;
    color: rgba(0, 0, 0, 0.54);
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    /* works with row or column */
    flex-direction: row;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    margin-bottom: 0;
}

.table-footer .select-wrapper {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    /* works with row or column */
    flex-direction: row;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
}

.table-footer .datatable-info,
.table-footer .datatable-length {
    margin-right: 32px;
}

.table-footer .material-pagination {
    display: flex;
    -webkit-display: flex;
    margin: 0;
    list-style-type: none;
}

.table-footer .material-pagination li a {
    color: rgba(0, 0, 0, 0.54);
    padding: 0 8px;
    font-size: 24px;
}

.table-footer .select-wrapper input.select-dropdown {
    margin: 0;
    border-bottom: none;
    height: auto;
    line-height: normal;
    font-size: 0.63vw;
    width: 40px;
    text-align: right;
}

.table-footer select {
    background-color: transparent;
    width: auto;
    padding: 0;
    border: 0;
    border-radius: 0;
    height: auto;
    margin-left: 20px;
}

.table-title {
    font-size: 20px;
    color: #000;
}

table tr td {
    height: 35px;
    font-size: 0.73vw;
    color: #003449;
    display: table-cell;
    font-family: 'Rubik', sans-serif !important;
    padding: 25px 0px 25px 0px;
    min-width: 150px;
}

table tr td a i {
    font-size: 18px;
    color: rgba(0, 0, 0, 0.54);
}

table tr {
    font-size: 0.63vw;
    border-bottom: 1px solid #B3B3B3;
    padding-left: 0;
    width: auto;
    white-space: nowrap; 
}

table thead tr:first-child {
   border-bottom: 0 !important;
}

table th {
   font-size: 0.63vw;
    font-weight: 600;
    color: #A6A6A6;
    cursor: pointer;
    white-space: nowrap;
    padding: 0;
    /* height: 56px; */
    /* padding-left: 14px; */
    vertical-align: middle;
    outline: none !important;
    overflow: hidden;
    text-overflow: ellipsis;
    background-size: 11px 12px;
    background-repeat: no-repeat;
    background-position: left center;
    font-family: 'Montserrat bold', sans-serif;
}

table th:hover {
    overflow: visible;
    text-overflow: initial;
}
table th.sorting-asc,
table th.sorting-desc {
    color: rgba(0, 0, 0, 0.87);
}
table th.sorting-asc {
    color: rgba(0, 0, 0, 0.87);
    background-image: url('/images/DataTables/Filter_1.svg') !important;
	background-repeat: no-repeat;
	background-position: 100% 7px;
}
table th.sorting-desc {
    color: rgba(0, 0, 0, 0.87);
    background-image: url('/images/DataTables/Filter_2.svg') !important;
	background-repeat: no-repeat;
	background-position: 100% 7px;
}
table tr td a{
    color: #1890ff;
    background-color: transparent;
    text-decoration: none;
    outline: none;
    cursor: pointer;
    transition: color 0.3s;
    -webkit-text-decoration-skip: objects;
}

table th.sorting:hover:after,
table th.sorting-asc:after,
table th.sorting-desc:after {
    display: inline-block;
}

table tbody tr:hover {
    background-color: #EEE;
}

table th:last-child,
table td:last-child {
    padding-right: 14px;
    background-image: none !important;
}

table th:first-child,
table td:first-child {
    padding-left: 25px;
}
</style>
