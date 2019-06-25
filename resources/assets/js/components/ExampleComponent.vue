<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example 1</div>

                    <div class="card-body">
                       11 I'm an example component1.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let uri = 'http://34.241.86.1/api/leads/get/84?session_user_id=22&session_user_name=sone thasi';
         let Years = new Array();
         let Labels = new Array();
         let Prices = new Array();
         this.axios.get(uri).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               Years.push(element.id);
               Labels.push(element.name);
               Prices.push(element.age);
               });
               this.renderChart({
               labels: Years,
               datasets: [{
                  label: 'Bitcoin',
                  backgroundColor: '#FC2525',
                  data: Prices
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>
