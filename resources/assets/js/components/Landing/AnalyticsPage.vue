<template>
  <div class="analytics-page-container" :resize="onResize()">
    <div class="row mx-0 align-items-center justify-content-center container-row">
      <div class="col-xl-6 align-items-center pl-0">
        <img src="/images/landing/Guided to success ILL.svg" width="74.7%" class="d-block mx-auto" />
      </div>

      <div class="col-xl-6 pr-0">
        <div class="row mx-20 mx-0">
          <div class="col-12 px-0">
            <h1>Guided to Success</h1>
            <h2>Simplified Analytics</h2>
          </div>
        </div>

        <div class="row my-20 mx-0">
          <div class="col-12 ml-9 px-0">
            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Create monthly sales targets and key performance goals specific to the individual.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Advanced AI systems allow managers to keep track of the performance of individual client profiles.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Automatic Lead assigning to specific agents and teams.</p>
              </div>
            </div>

            <div class="row mx-0 justify-content-end" :class="alignText()">
              <button href="/register" class="font-weight-bold btn-primary">Sign Up Now</button>
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

  destroyed() {},

  methods: {
    alignText() {
      if (this.isMobile == false) {
        return 'text-right'
      } else {
        return 'text-center'
      }
    }
  }
};
</script>

<style scoped>
.analytics-page-container {
  /* background-color: #00c3ff; */
  width: 100%;
}

@media screen and (min-width: 1200px) {
  .analytics-page-container {
    min-height: 100vh;
    background-image: url("/images/landing/Pages_2_(2).png");
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: left center;
  }
}

.col-auto {
  margin-right: 3%;
}

/* Equivalent of 50px is 9% */
.ml-9 { 
  margin-left: 9%;
}

.my-9 {
  margin: 9%;
}

.mx-20 {
  margin: 0 20%;
}

@media screen and (max-width: 1199px) {
  .my-9, 
  .mx-20, 
  .ml-9 {
    margin: 0;
  }
  .text-center button {
    margin: 0 auto;
  }
}

</style>
