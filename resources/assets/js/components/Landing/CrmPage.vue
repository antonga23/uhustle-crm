<template>
  <div class="crm-page-container" :resize="onResize()">
    <a name="about"></a>
    <div class="row mx-0 justify-content-center container-row">
      <div class="col-12 text-center">
        <h1 class="mt-3">Customer Relationship Management. Simplified.</h1>
        <p>SIAREM is streamlined to increase the speed of your sales department. All processes are optimized to guide your agents and focus on the most important: closing deals. SIAREM is used and tested by thousands of sales agents; we redesigned and tested our modules until perfection.</p>
      </div>

      <div class="col-12 text-center" v-if="!isMobile">
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5"/>
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5"/>
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5"/>
      </div>

      <div class="col-12 text-center">
        <img src="/images/landing/MockUp-tiny.png" alt="mockup" width="63%"/>
      </div>

      <div class="row mx-0 justify-content-end" v-if="isMobile">
        <button href="/register" class="font-weight-bold btn-primary">Sign Up Now</button>
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
.crm-page-container {
  width: 100%;
}

@media screen and (min-width: 1200px) {
  .crm-page-container {
    min-height:100vh;
  }
}

@media screen and (max-width: 1199px) {
  .col-12 {
    padding-left: 40px!important;
    padding-right: 40px!important;
  }
  p {
    margin-top: 10%;
    margin-bottom: 10%!important;
  }
  img {
    margin-bottom: 7%;
  }
}

.col-12 {
  padding-left: 13%;
  padding-right: 13%;
}
.mt-3 {
  margin-top: 3% !important;
}
</style>
