<template>
  <div class="dialer-page-container">
    <div class="row mx-0 justify-content-center align-items-center container-row">
      <div class="col-12 px-0 container-col">
        <img src="/images/landing/Automated Dialier ILL.svg" width="74.7%" class="d-block mx-auto" />
        <h1 class="text-center">Fully Automated Dialer</h1>
        <h2 class="text-center">Less Work, More Talk</h2>

        <div class="row ml-7 mr-0">
          <div class="col-12 px-0">
            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0">
                <p>50% user efficiency in contacting leads with advanced added features.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0">
                <p>Queuing and calling leads back to back, without human interaction.</p>
              </div>
            </div>

            <div class="row mx-0">
              <div class="col-auto pl-0">
                <img src="/images/landing/Paragraph-Check.svg" alt="checked" width="13" />
              </div>

              <div class="col pr-0">
                <p>Users stay focus and become 30% more efficient.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mx-0 justify-content-center text-center">
          <button href="/register" class="font-weight-bold btn-primary">Sign Up Now</button>
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
.crm-page-container {
  width: 100%;
}

@media screen and (min-width: 1200px) {
  .crm-page-container {
    min-height: 100vh;
  }
}

@media screen and (max-width: 1199px) {
  .container-col {
    padding-left: 40px!important;
    padding-right: 40px!important;
  }
  .ml-7 {
    margin-left: 0!important;
  }
  .row.mx-0.justify-content-center.text-center {
    margin-top: 5%;
  }
}

.ml-7 {
  margin-left: 7%;
}
</style>