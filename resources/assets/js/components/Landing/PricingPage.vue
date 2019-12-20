<template>
  <div class="pricing-page-container" :resize="onResize()">
    <a name="pricing"></a>
    <div class="row mx-0 justify-content-center container-row">
      <div class="col-xl-8 text-center px-0">
        <table width="100%" height="90%" v-if="!isMobile">
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
                <h4 class="text-capitalize mb-0">Pricing Table</h4>
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

        <div v-else class="row mx-0 justify-content-center">
          <div class="col-12 px-0">
            <h1>SIAREM</h1>
            <h2 class="text-capitalize">Pricing table</h2>
          </div>

          <div class="col-md-10 col-xl-8">
            <div class="row mx-0 justify-space-between align-items-center start">
              <div class="col text-left pl-0">
                <h3 class="text-white text-uppercase font-weight-bold">Start</h3>
              </div>

              <div class="col-auto text-right pr-0">
                <p class="text-white mb-0 font-weight-bold">$29.99
                  <span class="p-month">p/m</span>
                </p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Consectetur adipiscing</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Adipiscing consectetur</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">50 contacts</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Vitae purus</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Donec egestas nec</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris interdum</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="mb-0">>10 person</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris ultrices</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>
          </div>

          <div class="col-md-10 col-xl-8">
            <div class="row mx-0 justify-space-between align-items-center basic">
              <div class="col text-left pl-0">
                <h3 class="text-white text-uppercase font-weight-bold">Basic</h3>
              </div>

              <div class="col-auto text-right pr-0">
                <p class="text-white mb-0 font-weight-bold">$49.99
                  <span class="p-month">p/m</span>
                </p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Consectetur adipiscing</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Adipiscing consectetur</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">50 contacts</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Vitae purus</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Donec egestas nec</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris interdum</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="mb-0">>10 person</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris ultrices</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>
          </div>

          <div class="col-md-10 col-xl-8">
            <div class="row mx-0 justify-space-between align-items-center premium">
              <div class="col text-left pl-0">
                <h3 class="text-white text-uppercase font-weight-bold">Premium</h3>
              </div>

              <div class="col-auto text-right pr-0">
                <p class="text-white mb-0 font-weight-bold">$69.99
                  <span class="p-month">p/m</span>
                </p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Consectetur adipiscing</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Adipiscing consectetur</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">50 contacts</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Vitae purus</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
              <p class="mb-0">Donec egestas nec</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

          <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris interdum</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

            <div class="col-5 text-center border-bottom">
                <p class="mb-0">>10 person</p>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">lacus in nisi molestie</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Cross.svg" class="checkMarks" alt="unchecked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Mauris ultrices</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <img src="/images/landing/Price Tick.svg" class="checkMarks" alt="checked" width="15"/>
              </div>
            </div>

            <div class="row mx-0 align-items-center">
              <div class="col-7 text-left">
                <p class="mb-0">Pellentesque</p>
              </div>

              <div class="col-5 text-center border-bottom">
                <p class="text-uppercase">Unlimited</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import onResize from '../../on_resize.js'
export default {
  components: {},
  mounted() {

  },
  props: [],
  data: function(){
    return { 
      isMobile: false
    }
  },
  created () {
    this.onResize = onResize.onResize
  },

  destroyed() {
    
  },
  
  methods: {
    
  }
}
</script>

<style scoped>
@media screen and (min-width: 1200px) {
  .pricing-page-container {
    min-height:100vh;
  }
}

.pricing-page-container {
  width: 100%;
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
  font-size: 14px;
}

.col-6.border-bottom {
  border-color:#CCCCCC;
}

td:first-child {
  width: 23%;
  padding-left: 40px;
  padding-top: 1%;
  padding-bottom: 1%;
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

@media screen and (max-width: 1199px) {
  td {
    font-size: 12px;
  }
  .start, 
  .basic,
  .premium {
    border-radius: 5px;
    padding: 10px 6%;
  }
  h3 {
    font-size: 14px;
  }
  p {
    font-family: 'Rubik', sans-serif !important;
    color: #999999!important;
  }
  .p-month {
    font-size: 8px;
  }
  .col-md-12 {
    padding-left: 40px!important;
    padding-right: 40px!important;
  }
  .col-md-10 {
    padding-left: 40px!important;
    padding-right: 40px!important;
    margin-bottom: 10%;
  }
  .col-7 {
    padding-left: 6%;
  }
  .col-5 {
    padding-right: 6%;
  }
  .col-5 img {
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .col-5 p {
    line-height: 1em!important;
    margin-top: 20px;
    margin-bottom: 20px!important;
  }
  .text-white {
    color: #fff!important;
  }
}

@media screen and (max-width: 1440px) {
  img.checkMarks {
    width: 10px;
  }
}

</style>