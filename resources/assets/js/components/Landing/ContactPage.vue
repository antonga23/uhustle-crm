<template>
  <div class="contact-page-container">
    <a name="support"></a>
    <div class="row mx-0 justify-content-center container-row" :resize="onResize()">
      <div class="col-12 px-0">
        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-6 text-center pl-0" v-if="!isMobile">
            <img src="/images/landing/Dev_1.png" alt="map" class="contact" />
          </div>

          <div class="col-xl-6 text-center">
            <h1 class="mb-0">Become an agent today.</h1>
            <p class="mb-9">Connect with millions around the world and begin to work for yourself.</p>
            <div class="row mx-0 justify-content-center">
              <button href="/register" class="font-weight-bold btn-primary">Get Started</button>
            </div>
          </div>
        </div>

        <div class="row mx-0" v-if="!isMobile">
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
                <a href="mailto:info@siarem.com" class="footer-text mb-1">info@siarem.com</a>
                <a href="tel:+27987832728" class="footer-text">+27 98 783 2728</a>
              </div>
            </div>
          </div>
        </div>

        <div v-else>
          <div class="row mx-0 border-bottom align-items-center">
            <div class="col-6 pl-0">
              <h5 class="text-uppercase">ABOUT</h5>
            </div>

            <div class="col-6 pr-0">
              <p class="footer-text mb-1">Privacy Policy</p>
              <p class="footer-text mb-1">Terms & Conditions</p>
              <p class="footer-text">Guides</p>
            </div>
          </div>

          <div class="row mx-0 border-bottom align-items-center">
            <div class="col-6 pl-0">
              <h5 class="text-uppercase">Connect</h5>
            </div>

            <div class="col-6 pr-0">
              <p class="footer-text mb-1">Facebook</p>
              <p class="footer-text mb-1">Instagram</p>
              <p class="footer-text">LinkedIn</p>
            </div>
          </div>

          <div class="row mx-0 align-items-center">
            <div class="col-6 pl-0">
              <h5 class="text-uppercase">Contact</h5>
            </div>

            <div class="col-6 pr-0">
              <a href="mailto:info@siarem.com" class="footer-text mb-1">info@siarem.com</a>
              <a href="tel:+27987832728" class="footer-text mb-1">+27 98 783 2728</a>
              <p class="footer-text">Amsterdam</p>
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

          <div class="col-auto pr-0" v-if="!isMobile">
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
  .container-row {
    background-color: #F2F2F2;
  }
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