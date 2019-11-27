<template>
  <div class="contact-page-container">
    <div class="row mx-0 justify-content-center h-100">
      <div class="col-12">
        <div class="row mx-0 justify-content-center align-items-center">
          <div class="col-6 text-center">
          </div>

          <div class="col-6 text-center">
            <h1>Become an agent today.</h1>
            <p>Connect with millions around the world and begin to work for yourself.</p>
            <div class="row mx-0 justify-content-center">
              <a href="#" class="font-weight-bold btn-primary">Get Started</a>
            </div>
          </div>
        </div>

        <div class="row mx-0">
          <div class="col-4">
            <h5 class="text-uppercase">ABOUT</h5>
            <p class="footer-text">Privacy Policy</p>
            <p class="footer-text">Terms & Conditions</p>
          </div>

          <div class="col-4">
            <h5 class="text-uppercase">Connect</h5>
            <p class="footer-text">Facebook</p>
            <p class="footer-text">Instagram</p>
            <p class="footer-text">LinkedIn</p>
          </div>

          <div class="col-4">
            <h5 class="text-uppercase">Contact</h5>
            <p class="footer-text">email address</p>
            <a href="tel:+27987832728" class="footer-text">+27 98 783 2728</a>
          </div>
        </div>

        <div class="row mx-0 justify-content-between align-items-center">
          <div class="col-6 text-left">
            <img src="/images/SVG_images/siarem-logo-icon.svg" alt="checked" width="46" class="d-inline-block"/>
            <p class="d-inline-block">@ {{ getYear() }} Siarem All rights reserved.</p>
          </div>

          <div class="col-6 text-right">
            <ul>
              <li class="d-inline-block">
                <a href="#"><img src="/images/landing/Linkedin.svg" alt="Linkedin" width="21"/></a>
              </li>

              <li class="d-inline-block">
                <a href="#"><img src="/images/landing/instagram.svg" alt="instagram" width="24"/></a>
              </li>

              <li class="d-inline-block">
                <a href="#"><img src="/images/landing/facebook.svg" alt="facebook" width="14"/></a>
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
    getYear() {
      var d = new Date();
      var year = d.getFullYear();
      return year 
    }
  }
}
</script>

<style scoped>
.contact-page-container {
  width: 100%;
  height:100%;
}

h5 {
  color: #1E2738;
  font-weight: bold;
  font-size: 18px;
}

.footer-text {
  font-size: 0.73vw!important;
}

li {
  padding-left: 15px;
  padding-right: 15px;
}
</style>