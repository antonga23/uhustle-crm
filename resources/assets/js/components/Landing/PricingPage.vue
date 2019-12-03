<template>
  <div class="pricing-page-container">
    <div class="row mx-0 justify-content-center h-100">
      <div class="col-8 text-center">
        <table width="100%" height="90%">
          <thead>
            <tr>
              <th>
                <h3 class="text-uppercase siarem pl-0">SIAREM</h3>
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
              <th class="extra-padding">
                <h4 class="text-uppercase mb-0">Pricing Table</h4>
                <span class="text-uppercase small-text">We have three different packages</span>
              </th>
              
              <th class="extra-padding">
                <h3 class="price">$29.99</h3>
                <h5>per month</h5>
              </th>

              <th class="extra-padding">
                <h3 class="price">$49.99</h3>
                <h5>per month</h5>
              </th>

              <th class="extra-padding">
                <h3 class="price">$69.99</h3>
                <h5>per month</h5>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="border-0 left">Consectetur adipiscing</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">Adipiscing consectetur</td>
              <td class="text-uppercase border-left-0">Unlimited</td>
              <td class="text-uppercase">Unlimited</td>
              <td class="text-uppercase border-right-0">Unlimited</td>
            </tr>

            <tr>
              <td class="border-0 left">Pellentesque</td>
              <td class="border-left-0">50 contacts</td>
              <td>100 contacts</td>
              <td class="border-right-0">>100 contacts</td>
            </tr>

            <tr>
              <td class="border-0 left">Vitae purus</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">Donec egestas nec</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">Mauris interdum</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">lacus in nisi molestie</td>
              <td class="border-left-0">>10 person</td>
              <td>>10 person</td>
              <td class="border-right-0">>10 person</td>
            </tr>

            <tr>
              <td class="border-0 left">lacus in nisi molestie</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">Mauris ultrices</td>

              <td class="border-left-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>

              <td>
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>

              <td class="border-right-0">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </td>
            </tr>

            <tr>
              <td class="border-0 left">Pellentesque</td>
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
  font-size: 1.5vw;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 0;
}

h3.siarem {
  color: #999999;
  font-size: 1.5vw;
}

h3.price {
  font-size: 2vw;
}

h4 {
  color: #999999;
  font-size: 1.4vw;
  font-weight: bold;
}

h5 {
  color: #4D4D4D;
  font-size: 10px;
  font-weight: bold;
  text-transform: uppercase;
}

.start {
  background: linear-gradient(to right, rgba(255,129,51,1) 0%, rgba(255,147, 58,1) 100%);
  border-radius: 13px;
  font-size: 1.5vw;
  padding: 17px;
  width: 100%;
  margin: 0 auto;
}

.basic {
  background: linear-gradient(to right, #02E3F4 0%, #0496F0 100%);
  border-radius: 13px;
  font-size: 1.5vw;
  padding: 17px;
   width: 100%;
  margin: 0 auto;
}

.premium {
  background: linear-gradient(to right, #C079D9 0%, #683EFC 100%);
  border-radius: 13px;
  font-size: 1.5vw;
  padding: 17px;
   width: 100%;
  margin: 0 auto;
}

td {
  color: #999999;
  font-family: 'Rubik', sans-serif !important;
  border:1px solid #CCCCCC;
  font-size: 0.72vw;
}

td:first-child {
  width: 23%;
  padding-left: 40px;
  font-size: 0.72vw;
}
th {
  padding: 1%;
}

.left {
  text-align: left;
}

.extra-padding {
  padding-bottom: 3%;
}

span.small-text {
  font-size: 8px;
  color: #999999;
}

@media screen and (max-width: 1440px) {
  img.checkMarks {
  width: 10px;
}
}

</style>