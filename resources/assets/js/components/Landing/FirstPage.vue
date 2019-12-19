<template>
  <div class="first-page-container" :resize="onResize()">
    <div class="row mx-0 align-items-center justify-content-center container-row">
      <div class="col-xl-6 align-items-center pl-0">
        <img 
          src="/images/SVG_Images/siarem-logo.svg" 
          alt="Siarem logo"
          width="62.7%" 
          class="d-block mx-auto" 
          v-if="isMobile"/>
        <img src="/images/landing/Computer ILL.svg" width="74.7%" class="d-block mx-auto"/>
      </div>

      <div class="col-xl-6 text-center pr-0">
        <div class="row mx-0 justify-content-center">
          <div class="col-12">
            <img src="/images/SVG_Images/siarem-logo.svg" alt="Siarem logo" width="62.7%" v-if="!isMobile"/>
          </div>
        </div>

        <div class="row mx-0 justify-content-center text-center">
          <div class="col-12">
            <button href="/register" class="font-weight-bold btn-primary">Get Started</button>
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
  .first-page-container {
    /* background-color: #00C3FF; */
    width: 100%;
  }

  @media screen and (max-width: 1199px) {
    .first-page-container {
      background-size: 150% auto;
      background-position: top left;
    }
    #landing .btn-primary {
      font-size:12px!important;
      padding: 12px 25px!important;
    }
    .col-xl-6 img:first-child {
      margin-top: 15%;
      margin-bottom: 15%;
    }
    .col-xl-6 img:nth-child(2) {
      margin-bottom: 15%;
    }
  }

  @media screen and (min-width: 1200px) {
    .first-page-container {
      min-height: 100vh; 
      background-image: url('/images/landing/Pages_1_reduced_2.png');
      background-size: auto 100%;
      background-repeat: no-repeat;
      background-position: left center;
    }
  }

  .col-xl-6 .row .col-12 img {
    margin-bottom: 3.4%;
  }
</style>

