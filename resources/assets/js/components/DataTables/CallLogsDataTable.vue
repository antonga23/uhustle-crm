<template>
    <div class="no-box-shadow material-table">
        <table ref="table">
            <thead>
                <tr>
                    <th v-for="(column, index) in columns" @click="sort(index)" :class="(column.sortable ? 'sorting ' : '')
                            + (sortColumn === index ? (sortType === 'desc' ? 'sorting-desc' : 'sorting-asc') : '')
                            + (column.numeric ? ' numeric' : '')" :style="{width: column.width ? column.width : 'auto'}" :key="index"
                            >

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
                    <td v-for="(column, i) in columns" :class="column.numeric ? 'numeric' : ''" :key="i" >
                        <span v-if="column.field == 'full_name'">
                            {{ collect(row, column.field) }}
                        </span>
                        <span v-else-if="column.field == 'status'" :class="collect(row, column.field)">
                            
                        </span>
                        <span v-else-if="column.field == 'actions' && ( role == 1 || role == 2 )" class="actions">
                            &nbsp;
                        </span>
                        <span v-else>{{ collect(row, column.field) }}</span>
                    </td>
                </tr>
            </tbody>
        </table>
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
        <!-- Modal Start Summary-->
        <div>
             <input type="hidden"  @click="startCall()" ref="callJoinBtn" />
        </div>
        <!-- Modal -->
    </div>
</template>
<script>
import Fuse from 'fuse.js';
const Device = require('twilio-client').Device;
export default {
    props: {
        role: '',
        title: {},
        users: null,
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
            view_claim: {
                claim : [],
                hub : [],
            },
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
                comments: [],
                assigned: [],
            },
            summaryModal: false,
            showModal: false,
            loading: false,
            currentPage: 1,
            currentPerPage: 15,
            sortColumn: -1,
            sortType: 'asc',
            searching: false,
            searchInput: '',
            claim: '',
            claim_items: '',
            Toast: '',
        }
    },
    methods: {
        showEditModal(user){
            var vm = this;
            this.user = user;
            this.user.source = user.lead_source;
            this.$bvModal.show('update-user-modal');
        },
        handleOk(bvModalEvt) {
            // Prevent modal from closing
            bvModalEvt.preventDefault()
            // Trigger submit handler
            this.handleSubmit()
        },
        coachActions(action, conference){
            var vm = this;
            vm.$swal.fire({
                title: 'Are you sure?',
                text: "Proceed with action: " + action,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#409EFF',
                cancelButtonColor: '#F56C6C',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.value) {
                    vm.createDevice(action, conference);
                }
            });
        },
        createDevice(action, conference){
            var vm = this;
            axios.get('/calls/token').then(function (response) {
                console.log('Token',response.data.token);
                // Setup Twilio.Device
                Device.destroy();
                Device.setup(response.data.token,{ debug: true, region: "ie1" });

                Device.on('ready',function (device) {
                    console.log('Device Ready');
                    var audioCtx = new AudioContext();
                    
                    audioCtx.resume();

                    Fire.$emit('InitiateCallJoin');

                    var form_data = {
                        'action' : action,
                        'conference' : conference.friendlyName,
                        'coaching_sid' : conference.coaching_sid,
                    }
                    console.log('Form Data');
                    console.log(form_data);
                    Device.connect(form_data);
                });

                Device.on('error',function (error) {
                    console.log('Device Error: ' + error.message);
                });

                Device.on('connect',function (conn) {
                    console.log('Successfully established call');
                    // vm.call_back.call_sid = conn.parameters.CallSid;
                });

                Device.on('incoming', function (conn) {
                    console.log('Incoming connection from ' + conn.parameters.From);
                    var archEnemyPhoneNumber = '+12099517118';
            
                    if (conn.parameters.From === archEnemyPhoneNumber) {
                        conn.reject();
                        console.log('It\'s your nemesis. Rejected call.');
                    } else {
                        // accept the incoming connection and start two-way audio
                        conn.accept();
                    }
                });

                Device.on('disconnect',function (conn) {
                    console.log('Call Disconnected');
                });


                vm.$Progress.finish();
                
            }).catch(function (error) {                    
                console.log(error);
            });
        },
        startCall() {
            var vm = this;
            this.idle = true;
            this.show_edication_blocks = true;
            this.general = false;
            var audioCtx = new AudioContext();
            
            audioCtx.resume();

            Fire.$emit('InitiateCall');

            var form_data = {
                lead_id : vm.lead_info.id,
                is_client : vm.lead_info.is_client,
                lead_owner : vm.lead_info.user_created_id,
                lead_assignee : vm.lead_info.user_assigned,
                user_id : vm.user_id,
                // phone_number : vm.lead_info.contact_number,
                phone_number : '+27782013556',
            }
            
            Device.connect(form_data);
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
                    axios.get('/leads/delete/' + id).then(function (response) {
                        if(response.data.success == true){
                            vm.Toast.fire({ type: 'success', title: response.data.message });
                            Fire.$emit('ReloadLeads');
                            vm.$Progress.finish();
                        }else{
                            vm.$Progress.fail();
                            vm.$swal('Failed', 'Opps, something went wrong while deleting data, please try again','warning');
                        }
                    });
                }
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

thead th {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: white;
    z-index: 10;
}
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

 .dropdown-menu {
        border-radius: 15px;
        box-shadow: -4px -3px 5px 0px rgba(179, 179, 179, 0.24);
        border: 0;
        font-size: 0.63vw;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 0.05em;
        color: #1e2331;
  }

.no-box-shadow {
  box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  -o-box-shadow: none !important;
}
    
table tr td a.Canceled{
    color: red;
}
table tr td a.Inactive{
    color: orange;
}
table tr td a.Active{
    color: green;
}
table tr td span.actions a{
    width: 32px;
    display: block;
    height: 35px;
    float: left;
}
table tr td span.in-progress{
    background-image: url('/images/icons/Talking.svg');
    background-size: 75%;
    background-repeat: no-repeat;
    display: block;
    width: 100%;
    height: 38px;
    background-position: center;
}
table tr td span.completed{
    background-image: url('/images/icons/No Talking.svg');
    background-size: 90%;
    background-repeat: no-repeat;
    display: block;
    width: 100%;
    height: 38px;
    background-position: center;
}
table tr td a.View{
    background-image: url('/images/DataTables/View_Icon_Active.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.View:hover,
table tr td a.View:active{
    background-image: url('/images/DataTables/View_Icon.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.Delete{
    background-image: url('/images/DataTables/Delete_Icon.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.Delete:hover,
table tr td a.Delete:active{
    background-image: url('/images/DataTables/Delete_Icon_Active.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.Edit{
    background-image: url('/images/DataTables/Edit_Icon.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.Edit:hover,
table tr td a.Edit:active{
    background-image: url('/images/DataTables/Edit_Icon_Active.svg');
    background-size: 36px 35px;
    background-repeat: no-repeat;
}
table tr td a.Whisper{
    background-image: url('/images/icons/Whisper.svg');
    background-size: 30px 35px;
    background-repeat: no-repeat;
}
table tr td a.Whisper:hover,
table tr td a.Whisper:active{
    background-image: url('/images/icons/Whisper.svg');
    background-size: 31px 35px;
    background-repeat: no-repeat;
}
table tr td a.Barge{
    background-image: url('/images/icons/Barge.svg');
    background-size: 30px 35px;
    background-repeat: no-repeat;
}
table tr td a.Barge:hover,
table tr td a.Barge:active{
    background-image: url('/images/icons/Barge.svg');
    background-size: 31px 35px;
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
    font-size: 12px !important;
    color: rgba(0, 0, 0, 0.54);
    position: relative !important;
    right: -100px !important;
}
@media screen and (max-width: 1500px) {
    .table-footer {
    position: relative !important;
    right: -500px !important;
    }
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
    font-size: 12px;
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
    font-size: 12px;
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
    font-size: 14px;
    color: #1c2331;
    display: table-cell;
    font-family: 'Rubik', sans-serif !important;
    padding: 10px 20px 10px 0px;
    min-width: 150px;

}
 @media screen and (max-width: 1500px) {
     table tr td {
        font-size: 12px;
        padding: 5px 10px 5px 0px;
     }
 }

table tr td a i {
    font-size: 18px;
    color: rgba(0, 0, 0, 0.54);
}

table tr {
    font-size: 12px;
    border-bottom: 1px solid #f2f2f2;
    padding-left: 0;
    width: auto;
    white-space: nowrap; 

}

table thead tr:first-child {
    border-bottom: 0;
}

table th {
    font-size: 12px;
    font-weight: 600;
    color: #A6A6A6;
    cursor: pointer;
    white-space: nowrap;
    padding-right: 20px !important;
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
	background-position: 77% 7px;
}
table th.sorting-desc {
    color: rgba(0, 0, 0, 0.87);
    background-image: url('/images/DataTables/Filter_2.svg') !important;
	background-repeat: no-repeat;
	background-position: 77% 7px;
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
    padding-left: 11px;
    background-image: none !important;
}

/* table th:first-child,
table td:first-child {
    padding-left: 25px;
} */
</style>
