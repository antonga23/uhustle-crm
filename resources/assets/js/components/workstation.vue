<template>
    <div class="">
        <div class="row workstation-gen">
            <div class="col-8 workstation-gen-left">
                <ul>
                <li>
                    <h1>Work Station</h1>
                </li>
                <li class="workstation-gen-left-li">
                    <a href="/login" id="workstation-gen-left-general" class="work-active">General</a>
                </li>
                <li class="workstation-gen-left-li">
                    <a href="/login" id="workstation-gen-left-scripts">Scripts</a>
                </li>
                </ul>
            </div>
            <div class="col-4 workstation-gen-right">
                 <a  href="/login" id="workstation-gen-right-search"><img :src="'/images/SVG_Images/menu/SVG/search.svg'" id="workstation-gen-right-search-img"></a>
                 <a  href="/login" id="workstation-gen-right-online"><img :src="'/images/SVG_Images/menu/SVG/online.svg'" id="workstation-gen-right-online-img"></a>
                 <a  href="/login" id="workstation-gen-right-phone"><img :src="'/images/SVG_Images/menu/SVG/end call button.svg'" id="workstation-gen-right-phone-img"></a>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table-hover work-station-table">
            <thead>
                <tr>
                    <th>Lead Source</th>
                    <th>Online</th>
                    <th>Online Funds</th>
                    <th>Invested</th>
                    <th>Called</th>
                    <th>Answers</th>
                    <th>Sales</th>
                    <!-- and so on -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Digital PayDay</td>
                    <td>2 days ago</td>
                    <td>$ 23.00</td>
                    <td>$ 10.00</td>
                    <td>22</td>
                    <td>3</td>
                    <td>0</td>
                    <!-- and so on -->
                </tr>
            </tbody>
        </table>
    </div>
        <div class="row justify-content-center workstation-lead">
            <div class="col-md-3">
                <div class="card workstation-lead-name">
                    <div class="card-header workstation-lead-card-header"><img :src="'/images/SVG_Images/menu/SVG/Client.svg'" id="Clients-img"> Clients</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h1 class="workstation-lead-h1">{{ lead.name }}</h1>
                            </div>
                            <div class="w-100"></div>
                                <div class="col">
                                    <p>Australian</p>
                                </div>
                                <div class="col">
                                    <p>Male</p>
                                </div>
                                <div class="col">
                                    <p>34</p>
                                </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card workstation-lead-stock">
                    <div class="card-header workstation-lead-card-header"><img :src="'/images/SVG_Images/menu/SVG/Stock.svg'" id="Stock-img"> Stock</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h1 class="workstation-lead-h1">AdsBanc</h1>
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                <p>Advertising</p>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card  workstation-lead-activity">
                    <div class="card-header workstation-lead-card-header"><img :src="'/images/SVG_Images/menu/SVG/Activity.svg'" id="Activity-img"> Activity</div>

                    <div class="card-body">
                       <div class="row">
                                    <div class="col">
                                        <h1 class="workstation-lead-h1">Off-line</h1>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col">
                                        <p>Online 2 days ago</p>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card workstation-lead-time">
                    <div class="card-header workstation-lead-card-header"><img :src="'/images/SVG_Images/menu/SVG/Clock.svg'" id="Time-img"> Time</div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col">
                                    <h1 class="workstation-lead-h1">11:20 Am</h1>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <p>Perth</p>
                                </div>
                                <div class="col">
                                    <p>Australia</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row work-station-lead-interation">
                <div class="col-6">
                   <div class="card">
                            <div class="card-header">
                                <img :src="'/images/SVG_Images/menu/SVG/Stock.svg'" id="Stock-img">
                                    <p>Agent Notes</p>
                                    <p>23 comments</p>
                             </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="workstation-lead-h1">AdsBanc</h1>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col">
                                            <p>Advertising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <img :src="'/images/SVG_Images/menu/SVG/Stock.svg'" id="Stock-img">
                                <p>Feedback Summary</p>
                                <p>220 reviews<p/>
                            </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="workstation-lead-h1">Feedback Summary</h1>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col">
                                            <p>Advertising</p>
                                    </div>
                                </div>
                            </div>
                        </div>
             </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.enqueueLead();

            this.Toast = this.$swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        },
        props: [],
        data: function(){
            return {
                lead : {},
                Toast: null
            }
        },
        methods: {
            enqueueLead(){
                var vm = this;

                var payload = {
                    method : 'GET',
                    end_point : 'leads/get/85'
                }

                vm.$Progress.start();
                axios.post('/api-request', payload).then(function (response) {
                    console.log(response.data);
                    if(response.data.success == true){
                        vm.lead = response.data.lead;
                        vm.$Progress.finish();
                        
                    }else{
                        vm.$Progress.fail();
                        vm.$swal('Failed', 'Opps, something went wrong while retrieving lead, please try again','warning');
                    }
                });
            }
        }
    }
</script>
