<template>
  <div class="pricing-page-container">
    <div class="row mx-0 justify-content-center h-100">
      <div class="col-12 text-center">
        <table width="100%">
          <thead>
            <tr>
              <th>
                <h3 class="text-uppercase siarem">SIAREM</h3>
              </th>

              <th>
                <h3 class="text-white text-uppercase start">Start</h3>
              </th>

              <th>
                <h3 class="text-white text-uppercase basic">Basic</h3>
              </th>

              <th>
                <h3 class="text-white text-uppercase premium">Premium</h3>
              </th>
            </tr>

            <tr>
              <th>
                <h4 class="text-uppercase">Pricing Table</h4>
              </th>
              
              <th>
                <h3>$29.99</h3>
                <h5>per month</h5>
              </th>

              <th>
                <h3>$49.99</h3>
                <h5>per month</h5>
              </th>

              <th>
                <h3>$69.99</h3>
                <h5>per month</h5>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="border-0">Consectetur adipiscing</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">Adipiscing consectetur</td>
              <td class="text-uppercase border-left-0">Unlimited</td>
              <td class="text-uppercase">Unlimited</td>
              <td class="text-uppercase border-right-0">Unlimited</td>
            </tr>

            <tr>
              <td class="border-0">Pellentesque</td>
              <td class="border-left-0">50 contacts</td>
              <td>100 contacts</td>
              <td class="border-right-0">>100 contacts</td>
            </tr>

            <tr>
              <td class="border-0">Vitae purus</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">Donec egestas nec</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">Mauris interdum</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">lacus in nisi molestie</td>
              <td class="border-left-0">>10 person</td>
              <td>>10 person</td>
              <td class="border-right-0">>10 person</td>
            </tr>

            <tr>
              <td class="border-0">lacus in nisi molestie</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">Mauris ultrices</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0">Pellentesque</td>
              <td class="text-uppercase border-left-0">Unlimited</td>
              <td class="text-uppercase">Unlimited</td>
              <td class="text-uppercase border-right-0">Unlimited</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {

  },
  props: [],
  data: function(){
    return { 
      
    }
  },
  created() {
    
  },

  destroyed() {
    
  },
  
  methods: {
    
  }
}
</script>

<style scoped>
.pricing-page-container {
  width: 100%;
  height:100%;
}

h3 {
  color: #4D4D4D;
  font-size: 30px;
  font-weight: bold;
  text-transform: uppercase;
}

h3.siarem {
  color: #999999 
}

h4 {
  color: #999999;
  font-size: 23px;
  font-weight: bold;
}

h5 {
  color: #4D4D4D;
  font-size: 0.73vw;
  font-weight: bold;
  text-transform: uppercase;
}

.start {
  background: linear-gradient(to right, rgba(255,129,51,1) 0%, rgba(255,147, 58,1) 100%);
  border-radius: 13px;
}

.basic {
  background: linear-gradient(to right, #02E3F4 0%, #0496F0 100%);
  border-radius: 13px;
}

.premium {
  background: linear-gradient(to right, #C079D9 0%, #683EFC 100%);
  border-radius: 13px;
}

td {
  color: #999999;
  font-family: 'Rubik', sans-serif !important;
  border:1px solid #CCCCCC;
}
</style>