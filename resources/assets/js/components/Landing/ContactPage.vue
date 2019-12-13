<template>
  <div class="contact-page-container">
    <a name="support"></a>
    <div class="row mx-0 justify-content-center container-row">
      <div class="col-12 px-0">
        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-6 text-center pl-0">
            <img src="/images/landing/Dev_1.png" alt="map" class="contact" />
          </div>

          <div class="col-6 text-center">
            <h1 class="mb-0">Become an agent today.</h1>
            <p class="mb-9">Connect with millions around the world and begin to work for yourself.</p>
            <div class="row mx-0 justify-content-center">
              <button href="/register" class="font-weight-bold btn-primary">Get Started</button>
            </div>
          </div>
        </div>

        <div class="row mx-0">
          <div class="col-12">
            <div class="row margin-footer">
              <div class="col-4">
                <h5 class="text-uppercase">ABOUT</h5>
                <p class="footer-text mb-1">Privacy Policy</p>
                <p class="footer-text">Terms & Conditions</p>
              </div>

              <div class="col-4">
                <h5 class="text-uppercase">Connect</h5>
                <p class="footer-text mb-1">Facebook</p>
                <p class="footer-text mb-1">Instagram</p>
                <p class="footer-text">LinkedIn</p>
              </div>

              <div class="col-4">
                <h5 class="text-uppercase">Contact</h5>
                <p class="footer-text mb-1">email address</p>
                <a href="tel:+27987832728" class="footer-text">+27 98 783 2728</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mx-0 justify-content-between align-items-center footer-row">
          <div class="col-auto pl-0">
            <img
              src="/images/SVG_images/siarem-logo-icon.svg"
              alt="checked"
              width="11.9%"
              class="d-inline-block"
            />
            <p class="d-inline-block mb-0">@ {{ getYear() }} Siarem All rights reserved.</p>
          </div>

          <div class="col-auto pr-0">
            <ul class="mt-3">
              <li class="d-inline-block">
                <a href="#">
                  <img src="/images/landing/Linkedin.svg" alt="Linkedin" width="21" />
                </a>
              </li>

              <li class="d-inline-block">
                <a href="#">
                  <img src="/images/landing/instagram.svg" alt="instagram" width="24" />
                </a>
              </li>

              <li class="d-inline-block">
                <a href="#">
                  <img src="/images/landing/facebook.svg" alt="facebook" width="14" />
                </a>
              </li>
            </ul>
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

  methods: {
    getYear() {
      var d = new Date();
      var year = d.getFullYear();
      return year;
    }
  }
};
</script>

<style scoped>
.contact-page-container {
  width: 100%;
}

@media screen and (min-width: 1200px) {
  .contact-page-container {
    min-height: 100vh;
  }
}

h5 {
  color: #1e2738;
  font-weight: bold;
  font-size: 0.96vw;
  margin-bottom: 5%;

}

.footer-text {
  font-size: 14 !important;
  color: inherit;
}

@media screen and (max-width:1199px) {
  .footer-text {
  font-size:12px !important;
}
}

li {
  padding-left: 15px;
  padding-right: 15px;
}

.mb-9 {
  margin-bottom: 9%;
}

.margin-footer {
  margin: 3% 20% 3%;
}
.m-7 {
  margin: 0 7%;
}

img.contact {
  width: 100%;
}

.footer-row {
  padding-left: 3.95%;
  padding-right: 3.95%;
  margin-bottom: 17px;
}

.footer-row p {
  margin-left: 12%;
}
</style>