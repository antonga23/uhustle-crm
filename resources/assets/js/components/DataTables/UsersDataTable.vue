<template>
    <div class="card no-box-shadow material-table">
        <table ref="table">
            <thead>
                <tr>
                    <th v-for="(column, index) in columns" @click="sort(index)" :class="(sortable ? 'sorting ' : '')
                            + (sortColumn === index ?
                                (sortType === 'desc' ? 'sorting-desc' : 'sorting-asc')
                                : '')
                            + (column.numeric ? ' numeric' : '')" :style="{width: column.width ? column.width : 'auto'}" :key="index">
                        {{column.label}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(row, index) in paginated" :class="onClick ? 'clickable' : ''" @click="click(row, index)" :key="index">
                    <td v-for="(column, i) in columns" :class="column.numeric ? 'numeric' : ''" :key="i">
                        <span v-if="column.field == 'full_name'">
                            <a  @click="showEditModal(row, row.leads,row.clients)"  class="small-avatar">
                                <img v-if="row.avatar != '' && row.avatar != null" :src="avatarUrl + row.id + '/' + row.avatar">
                                <img v-else :src="noImageUrl" >
                                {{ row.full_name }}
                            </a>
                        </span>
                        <span v-else-if="column.field == 'role'">
                            {{ row.role }}
                        </span>
                        <span v-else-if="column.field == 'email'">
                            {{ row.email }}
                        </span>
                        <span v-else-if="column.field == 'personal_number'">
                            {{ row.personal_number }}
                        </span>
                        <span v-else-if="column.field == 'updated_at'">
                            {{ row.updated_at }}
                        </span>
                        <span v-else-if="column.field == 'status'">
                           {{ row.status }}
                        </span>
                        <span v-else-if="column.field == 'actions' && ( role == 1 || role == 2 )" class="actions">
                            <a  class="Edit" href="#" @click="showEditModal(row, row.leads,row.clients)" title="Edit"></a>
                            <a  class="Delete" href="#" @click="deleteItem(row.id)" title="Delete"></a>
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
                        <option value="11">11</option>
                        <option value="20">20</option>
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
            <b-modal
            id="update-user-modal"
            ref="modalUpdateUser"
            title="Update User"
            size="lg"
            header-text-variant="light"
            header-bg-variant="warning"
            @ok="handleOk"
            >
                <a-card title="Update User Profile">
                    <form ref="form" @submit.stop.prevent="handleSubmit">
                        <div :class="{'input': true, 'form-group' :true }">
                            <label class="col-lg-12 control-label">Role
                                <select type="text" id="role"  name="Role" v-model="user.role_id"  class="form-control">
                                    <option value="">- Please Choose Role </option>
                                    <option :value="item.id" v-for="(item, index) in users.roles" :key="index">{{ item.display_name }}</option>
                                </select>
                                <span id="error" v-show="errors.has('Role')" class="help-block">{{ errors.first('Role') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Name
                                <input type="text" id="email"  name="Name" v-model="user.name"  class="form-control">
                                <span id="error" v-show="errors.has('Name')" class="help-block">{{ errors.first('Name') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Surname
                                <input type="text" id="email"  name="Surname" v-model="user.lastname"  class="form-control">
                                <span id="error" v-show="errors.has('Surname')" class="help-block">{{ errors.first('Surname') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Nickname
                                <input type="text" id="nickname"  name="Nickname" v-model="user.nickname" class="form-control">
                            </label>
                            <label class="col-lg-4 control-label">Email
                                <input type="text" id="email"  name="Email" v-model="user.email" class="form-control">
                                <span id="error" v-show="errors.has('Email')" class="help-block">{{ errors.first('Email') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Work Telephone
                                <input type="text" id="work_number"  name="Work Tel" v-model="user.work_number" class="form-control">
                                <span id="error" v-show="errors.has('Work Tel')" class="help-block">{{ errors.first('Work Tel') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Cellphone number
                                <input type="text" id="personal_number"  name="Cell Number" v-model="user.personal_number" class="form-control">
                                <span id="error" v-show="errors.has('Cell Number')" class="help-block">{{ errors.first('Cell Number') }}</span>
                            </label>
                            <label class="col-lg-12 control-label">Address
                                <textarea id="address"  name="Address" v-model="user.address"  class="form-control"></textarea>
                                <span id="error" v-show="errors.has('Address')" class="help-block">{{ errors.first('Address') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Username
                                <input type="text" id="email"  name="Old Password" v-model="user.email" class="form-control" disabled>
                                <span id="error" v-show="errors.has('Old Password')" class="help-block">{{ errors.first('Old Password') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">New Password <em><small>Default: P@ssword</small></em>
                                <input type="password" id="password" ref="password" name="New Password" v-model="user.password" v-validate="'min:6'" class="form-control">
                                <span id="error" v-show="errors.has('New Password')" class="help-block">{{ errors.first('New Password') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Confirm New Password
                                <input type="password" id="password_confirm"  name="Password Confirm" v-model="user.password_confirmation" v-validate="'min:6|confirmed:password'" class="form-control">
                                <span id="error" v-show="errors.has('Password Confirm')" class="help-block">{{ errors.first('Password Confirm') }}</span>
                            </label>
                            <label class="col-lg-4 control-label">Status
                                <select type="text" id="role"  name="Role" v-model="user.activated"  class="form-control">
                                    <option value="">- Please Choose Status </option>
                                    <option value="1">Active</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </label>
                        </div>
                    </form>
                </a-card>
                <a-card :title="'Assigned Leads: ' + user.leads.length" style="margin-top:20px">
                    <a-list itemLayout="horizontal" :dataSource="user.leads">
                        <a-list-item slot="renderItem" slot-scope="item, index">
                            <a-list-item-meta>
                                <a slot="title" :href="'/workstation/' + item.id">{{item.name}}&nbsp;{{item.surname}}</a>
                            </a-list-item-meta>
                        </a-list-item>
                    </a-list>
                </a-card>

                <a-card :title="'Assigned Clients: ' + user.clients.length" style="margin-top:20px">
                    <a-list itemLayout="horizontal" :dataSource="user.clients">
                        <a-list-item slot="renderItem" slot-scope="item, index">
                            <a-list-item-meta>
                                <a slot="title" :href="'/workstation/' + item.id">{{item.name}}&nbsp;{{item.surname}}</a>
                            </a-list-item-meta>
                        </a-list-item>
                    </a-list>
                </a-card>
            </b-modal>
        </div>
        <!-- Modal -->
    </div>
</template>
<script>
import Fuse from 'fuse.js';
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
            default: 10
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
                leads: [],
                clients: [],
            },
            summaryModal: false,
            showModal: false,
            loading: false,
            currentPage: 1,
            currentPerPage: 11,
            sortColumn: -1,
            sortType: 'asc',
            searching: false,
            searchInput: '',
            claim: '',
            claim_items: '',
            Toast: '',
            avatarUrl: '/images/avatars/',
            noImageUrl: '/images/icons/user_icon@4x.png',
        }
    },
    methods: {
        showEditModal(user, leads, clients){
            var vm = this;
            this.user = user;
            this.user.leads = leads;
            this.user.clients = clients;
            this.$bvModal.show('update-user-modal');
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
                        axios.post('/users/update',vm.user).then(function (response) {
                                
                            if(response.data.success == true){
                                Fire.$emit('ReloadUsers');
                                vm.Toast.fire({ type: 'success', title: response.data.message });
                                vm.$bvModal.hide('update-user-modal');
                                vm.user = {
                                    leads: [],
                                    clients: [],
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
                    axios.get('/users/delete/' + id).then(function (response) {
                        if(response.data.success == true){
                            Fire.$emit('ReloadUsers');
                            vm.Toast.fire({ type: 'success', title: response.data.message });
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
.no-box-shadow {
    box-shadow: none !important;
}
.ant-list-item {
    align-items: center;
    display: flex;
    padding: 0;
}
.small-avatar img{
    width: 28px;
    margin-top: 0px;
    border-radius: 50%;
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
    padding: 0px 7px;
    width: 41px;
    display: block;
    height: 46px;
    float: left;
}
table tr td a.View{
    background-image: url('/images/DataTables/View_Icon_Active.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.View:hover,
table tr td a.View:active{
    background-image: url('/images/DataTables/View_Icon.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.Delete{
    background-image: url('/images/DataTables/Delete_Icon.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.Delete:hover,
table tr td a.Delete:active{
    background-image: url('/images/DataTables/Delete_Icon_Active.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.Edit{
    background-image: url('/images/DataTables/Edit_Icon.svg');
    background-size: cover;
    background-repeat: no-repeat;
}
table tr td a.Edit:hover,
table tr td a.Edit:active{
    background-image: url('/images/DataTables/Edit_Icon_Active.svg');
    background-size: cover;
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
    /* border-collapse: separate; */
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
    font-size: 12px;
     border-bottom: 1px solid #B3B3B3;
    padding-left: 0;
    width: auto;
    white-space: nowrap;
    /* box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2); */
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
	background-position: 77% 45%;
}
table th.sorting-desc {
    color: rgba(0, 0, 0, 0.87);
    background-image: url('/images/DataTables/Filter_2.svg') !important;
	background-repeat: no-repeat;
	background-position: 77% 45%;
}
table tr td span a{
    color: #1890ff !important;
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
