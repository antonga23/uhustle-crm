<template>
  <div class="flow-page-container">
    <div class="row mx-0 align-items-center justify-content-center container-row">
      <div class="col-xl-6 align-items-center">
        <div class="row ml-20 mr-0">
          <div class="col-12">
            <h1>Eliminate Agent Mistakes</h1>
            <h2>Easy System Flow</h2>
          </div>
        </div>


         <div class="row mx-20">
          <div class="col-12 ml-9">
            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Create daily tasks synced with your calendar & stay up-to-date with your scheduled callbacks.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Quick and effortless creation of notes and appointments linked to specific contacts.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0 ">
                <p>Advanced integrated calendar allows users the ability to receive on-the-go reminders and immediate callback appointments.</p>
              </div>
            </div>

            <div class="row mx-0 justify-content-end text-right ">
              <button href="/register" class="font-weight-bold btn-primary">Sign Up Now</button>
            </div>
          </div>
        </div>
        </div>

      <div class="col-xl-6 pr-0">
        <img src="/images/landing/Eliminate Agent Mistakes ILL.svg" width="65.2%" class="d-block mx-auto"/>
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
.flow-page-container {
  /* background-color: #00C3FF; */
  width: 100%;
}

@media screen and (min-width: 1200px) {
  .flow-page-container {
    min-height:100vh;
    background-image: url('/images/landing/Pages_3_(2).png');
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: right center;
  }
}

.col-auto {
  margin-right: 3%;
}

/* Equivalent of 50px is 9% */
.ml-9 { 
  margin-left: 9%;
}

.mx-20 {
  margin: 0px 20%;
}

.ml-20 {
  margin: 0 0 0 20%;
}

@media screen and (max-width: 1199px) {
  .col-xl-6.align-items-center {
    order: 1;
  }
  .mx-20, 
  .ml-20, 
  .ml-9 {
    margin: 0;
  }
}
</style>