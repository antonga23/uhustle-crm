<template>
    <div>
        <ejs-schedule height='550px' :selectedDate='selectedDate' :eventSettings='eventSettings'></ejs-schedule>
    </div>
</template>
<script>
    import { extend } from '@syncfusion/ej2-base';
    import { Day } from "@syncfusion/ej2-vue-schedule";
    import moment from 'moment' 
    export default {
      props: [],
      data () {
        return {
          call_backs: new Date(),
          selectedDate: new Date(),
          eventSettings: {
            dataSource: [{
              Id: 1,
              Subject: 'Meeting',
              StartTime: new Date('2019-11-07 15:30'),
              EndTime: new Date('2019-11-07 16:00')
            }]
          }
        }
      },
      provide: {
        schedule: [Day]
      },
      mounted(){
        var vm = this;

        vm.getUserCallbackToday();
      },
      methods:{
        moment,
        getUserCallbackToday(){
 
          var vm = this; 

          axios.get('/leads/get-user-callbacks-today').then(function(response) { 
              
              vm.call_backs = response.data.call_backs; 

              vm.call_backs.forEach(function(call_back,index) { 

                  var subject = call_back.lead.name + ' ' +call_back.lead.surname;

                  var start = call_back.call_date + ' ' + call_back.call_time;
                  
                  var start_date = moment(start);

                  var end_date = moment(start_date).add(30, 'm').toDate();

                  vm.eventSettings.dataSource.push({
                    Id: call_back.id,
                    Subject: subject,
                    StartTime: new Date(moment(start_date).format( 'YYYY-MM-DD hh:mm')),
                    EndTime: new Date(moment(end_date).format( 'YYYY-MM-DD hh:mm'))
                  }); 
              }); 

          });
        }
      } 

    };

</script>