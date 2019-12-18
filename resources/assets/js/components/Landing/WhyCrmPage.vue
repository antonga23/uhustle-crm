<template>
  <div class="why-crm-page-container" :resize="onResize()">
    <a name="features"></a>
    <div class="row mx-0 justify-content-center container-row">
      <div class="col-12 text-center px-0">
        <h1 class>WHY USE SIAREM</h1>
      </div>

      <div class="col-12 text-center px-0">
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5" />
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5" />
        <img src="/images/icons/Orange Dot_Big.svg" alt="dots" width="8" class="mx-5" />
      </div>

      <div class="col-md-10 col-xl-8">
        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <h2>FEATURES</h2>
          </div>

          <div class="col pr-0 text-center">
            <h2>OTHER CRMS</h2>
          </div>

          <div class="col px-0 text-center">
            <h2 v-if="!isMobile">SIAREM</h2>
            <img 
              v-else
              class="logo mx-auto" 
              src="/images/SVG_Images/siarem-logo-icon.svg" 
              alt="logo" 
              width="30" 
              />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Intergrated Time Management</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

         <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Planning for projects and calls</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>
        
        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Tracking of tasks and meetings</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Analytics to track progress</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Automated dialing system</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Internal & integrated mailing system</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Overview of all clients deals</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">External Wigets needed</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">Individual Client Profiles</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
          </div>
        </div>

        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-5 col-xl-4 pl-0">
            <p class="mb-0">24 Hour helpline</p>
          </div>

          <div class="col px-0 text-center" :class="assignBorder()">
            <img src="/images/icons/right-sidebar/Task_Check.svg" alt="unchecked" width="20" />
          </div>

          <div class="col px-0 text-center border-left-0" :class="assignBorder()">
            <img src="/images/landing/Blue Check.svg" alt="checked" width="20" />
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
    assignBorder() {
      if (this.isMobile == false) {
        return 'border-bottom'
      } else {
        return 'border-left border-right'
      }
    }
  }
};
</script>

<style scoped>
.why-crm-page-container {
  width: 100%;
}

.border-bottom,
.border-left, 
.border-right {
  border-color: #ccc;
}

@media screen and (min-width: 1200px) {
  .why-crm-page-container {
    min-height: 100vh;
  }
}

.col img {
  padding-top: 4.1%;
  padding-bottom: 4.1%;
}
h1 {
  margin-top: 1.5rem !important;
}

@media screen and (max-width: 1199px) {
  p {
    line-height: 1.3em!important;
  }
  .col-12, 
  .col-md-10 {
    padding-left: 40px!important;
    padding-right: 40px!important;
  }
  .col {
    height: 100%;
  }
  .col img {
    padding-top: 16px;
    padding-bottom: 16px;
  }
}
</style>