<template>
  <div class="analytics-page-container">
    <div class="row mx-0 align-items-center justify-content-center h-100">
      <div class="col-6 align-items-center pl-0">
        <img src="/images/landing/Guided to success ILL.svg" width="74.7%" class="d-block mx-auto" />
      </div>

      <div class="col-6 pr-0">
        <div class="row my-20">
          <div class="col-12">
            <h1>Guided to Success</h1>
            <h2>Simplified Analytics</h2>
          </div>
        </div>

        <div class="row my-20">
          <div class="col-12 ml-9">
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

            <div class="row mx-0 justify-content-end text-right ">
              <a href="/register" class="font-weight-bold btn-primary">Sign Up Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  mounted() {},
  props: [],
  data: function() {
    return {};
  },
  created() {},

  destroyed() {},

  methods: {}
};
</script>

<style scoped>
.analytics-page-container {
  background-color: #00c3ff;
  width: 100%;
  height: 100%;
  background-image: url("/images/landing/analytics-page-background.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: left top;
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

.my-20 {
  margin: 0 20%;
}

</style>
