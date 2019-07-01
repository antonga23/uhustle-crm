<script>
import { Bar } from 'vue-chartjs'
 
export default {
  extends: Bar,
  props: ['data', 'options','labels', 'data_sets','height', 'width'],
  mounted () {
    // Overwriting base render method with actual data.
    console.log(this.labels);
    console.log(this.data_sets);
    console.log(this.data);
    
    this.renderChart(this.data, this.options)
  },
  data: function() {
  	return {
        notes_data: {
            labels: this.labels,
            datasets: [
                {
                    label: 'Summary',
                    backgroundColor: '#89cff0',
                    data: [23]
                }
            ]
        }
  	}
  }
}
</script>