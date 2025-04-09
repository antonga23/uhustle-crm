<style scoped>
.trans-tabs {
  padding-left:5.2%;
  padding-right:5.2%;
}
.tab-pane.card-body {
  padding:4.4% 5.6%;
}
.nav-link.active img {
  display:inline-block!important;
  margin-left: 20px;
}
.table-responsive {
  margin-bottom:20px;
}
.deal-name {
  font-size: 0.83vw;
  margin-bottom:3.9%;
}
</style>
<template>
  <div id="transactions">
    <div class="row mx-0 trans-tabs">
      <div class="col-lg-12 px-0">
        <b-card no-body>
          <b-tabs card>
            <b-tab active>
              <template v-slot:title>
                <h5 class="d-inline-block">Paid</h5>
                <img src="images/icons/transactions/Paid.svg" alt="Paid icon" width="12" class="d-none"/>
              </template>

              <transition name="fade">
                <div>
                  <b-table 
                    hover 
                    :items="paidItems" 
                    class="paid-transactions" 
                    :per-page="perPage" 
                    :current-page="currentPage" 
                    responsive
                  >
                    <template slot="updated_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.updated_at)}}</p>
                    </template>

                    <template slot="created_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.created_at)}}</p> 
                    </template>
                  </b-table>

                  <b-pagination
                    class="paid-pagination"
                    v-model="currentPage"
                    :per-page="perPage"
                    align="center"
                    size="sm"
                    :total-rows="paidRows"
                  ></b-pagination> 
                </div>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block">Pending</h5>
                <img src="images/icons/transactions/Pending.svg" alt="Pending icon" width="12" class="d-none"/>
              </template>

              <transition name="fade">
                <div>
                  <b-table 
                    hover 
                    :items="pendingItems" 
                    class="pending-transactions" 
                    :per-page="perPage" 
                    :current-page="currentPage" 
                    responsive
                  >
                    <template slot="updated_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.updated_at)}}</p>
                    </template>

                    <template slot="created_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.created_at)}}</p> 
                    </template>
                  </b-table>

                  <b-pagination
                    class="pending-pagination"
                    v-model="currentPage"
                    :per-page="perPage"
                    align="center"
                    size="sm"
                    :total-rows="pendingRows"
                  ></b-pagination>
                </div>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block">Due</h5>
                <img src="images/icons/transactions/Pending.svg" alt="Pending icon" width="12" class="d-none"/>
              </template>

              <transition name="fade">
                <div>
                  <b-table 
                    hover 
                    :items="dueItems" 
                    class="due-transactions" 
                    :per-page="perPage" 
                    :current-page="currentPage" 
                    responsive
                  >
                    <template slot="updated_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.updated_at)}}</p>
                    </template>

                    <template slot="created_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.created_at)}}</p> 
                    </template>
                  </b-table>

                  <b-pagination
                    class="due-pagination"
                    v-model="currentPage"
                    :per-page="perPage"
                    align="center"
                    size="sm"
                    :total-rows="dueRows"
                  ></b-pagination>
                </div>
              </transition>
            </b-tab>

            <b-tab> 
              <template v-slot:title>
                <h5 class="d-inline-block">Rejected</h5>
                <img src="images/icons/transactions/Rejected.svg" alt="Rejected icon" width="12" class="d-none"/>
              </template>

              <transition name="fade">
                <div>
                  <b-table 
                    hover 
                    :items="rejectedItems" 
                    class="rejected-transactions" 
                    :per-page="perPage" 
                    :current-page="currentPage" 
                    responsive
                  >
                    <template slot="updated_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.updated_at)}}</p>
                    </template>

                    <template slot="created_at" slot-scope="data">   
                      <p>{{getDaysAgo(data.item.created_at)}}</p> 
                    </template>
                  </b-table>

                  <b-pagination
                    class="rejected-pagination"
                    v-model="currentPage"
                    :per-page="perPage"
                    align="center"
                    size="sm"
                    :total-rows="rejectedRows"
                  ></b-pagination>
                </div>
              </transition>
            </b-tab>

            <b-tab>
              <template v-slot:title>
                <h5 class="d-inline-block">Create a deal</h5>
                <img src="images/icons/Field_Add.svg" alt="Add field icon" width="16"/>
              </template>

              <transition name="fade">
                <div>
                  <create-deal 
                  :empty_deal="deal"  
                  :lead_id="'-None-'" 
                  :agent_id="user_id" 
                  :agent_name="user_name" 
                  />
                </div>
              </transition>
            </b-tab>
          </b-tabs>
        </b-card>
      </div>
    </div>
  </div>
</template>

<script>
  import { Bar } from 'vue-chartjs';
  import { BarChart } from 'vue-morris';
  import DataTable from '../DataTables/TransactionsDataTable';
  import { VclFacebook, VclInstagram,VclTable } from 'vue-content-loading';
  import CreateDeal from './createDeal';
  export default {
    extends: Bar,
    components: { 
      BarChart,
      VclFacebook,
      VclInstagram,
      VclTable,
      'datatable' : DataTable,
      CreateDeal
    },
    mounted() {
      console.log('Component mounted');
      this.current_user = JSON.parse(this.logged_user);
      this.getTransactions();
      this.getDeals();
      var vm = this;

      Fire.$on('FilterData', function(data){
        vm.applyFilter(data);
      });

      Fire.$on('AfterDealAdd', function(data){
        vm.getDeals();
      });

      this.Toast = this.$swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    },
    created: function () {
    },
    props: [
      'active',
      'logged_user',
      'user_name',
      'role_id',
      'user_id',
    ],
    data: function(){
      return {
        transactions: null,
        roles: null,
        modules: null,
        permissions:[],
        selected_permissions: [],
        user: {
          leads: [],
          clients: [],
        },
        current_user: {},
        add_user: false,
        user_roles_active: true,
        leads_active: false,
        contacts_active: false,
        add_new_section_active: false,
        show_page_loader: false,
        avatarUrl: '/images/avatars/',
        noImageUrl: '/images/icons/user_icon@4x.png',
        bulk_actions: "",
        Toast: null,
        deal: {
          lead_id: '-Please Select-' ,
          agent_id:'' ,
          agent_name:'' ,
          deal_name:'' ,
          closing_date:'' ,
          type:'- None -' ,
          lead_source:'- None -' ,
          amount:'' ,
          description:'' ,
          stage:'- None -' ,
          probability:'' ,
          expected_revenue:'' ,
          contact_name:'' ,
          contact_number:'' ,
          status:'' ,
        },
        paidItems: [],
        pendingItems: [],
        dueItems: [],
        rejectedItems: [],
        perPage: 20, 
        currentPage: 1
      }
    },
    methods: {
      getDeals(){
        var vm = this;
        axios.get("/deals/get-all-status").then(function(response) {  
          vm.paidItems = response.data.paidItems;
          vm.pendingItems = response.data.pendingItems;
          vm.dueItems = response.data.dueItems;
          vm.rejectedItems = response.data.rejectedItems;
        });
      },
      secondsToMinues(time){
        var minutes = Math.floor(time / 60);
        var seconds = time - minutes * 60;
        var finalTime = this.str_pad_left(minutes,'0',2) + ':' + this.str_pad_left(seconds,'0',2);
        return finalTime;
      },
      str_pad_left(string,pad,length) {
        return (new Array(length+1).join(pad)+string).slice(-length);
      },
      getTransactions(){
        var vm = this;
        var endpoint = '/clients/transactions';

        vm.show_page_loader = true;
        vm.$Progress.start();

        axios.get(endpoint).then(function (response) {
            
          if(response.data.success == true){
            vm.transactions = response.data.transactions;
            vm.show_page_loader = false;
            vm.$Progress.finish();
          }else{
            vm.show_page_loader = false;
            vm.$Progress.fail();
            vm.$swal('Failed', 'Opps, something went wrong while retrieving call log, please try again','warning');
          }
        });
      },
      getDaysAgo(second_date) {  
        var date_string = "";  
        var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds  
        var firstDate = new Date();  
        var secondDate = new Date(second_date);  
    
        var diffDays = Math.round(  
          Math.abs((firstDate.getTime() - secondDate.getTime()) / oneDay)  
        );  
    
        if (diffDays <= 1) {  
          date_string = "Today";  
        } else if (diffDays > 1 && diffDays <= 7) {  
          date_string = diffDays + " Days ago";  
        } else if (diffDays == 7) {  
          date_string = "1 Week ago";  
        } else if (diffDays >= 7) {  
          date_string = second_date;  
        }  
        return date_string;  
      }  
    },
    computed: {
      paidRows() {
        return this.paidItems.length
      },
      pendingRows() {
        return this.pendingItems.length
      },
      dueRows() {
        return this.dueItems.length
      },
      rejectedRows() {
        return this.rejectedItems.length
      }
    }
  }
</script>
