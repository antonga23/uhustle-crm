<template>
  <div id="landing" :resize="onResize()"> 
    <b-navbar 
      toggleable="xl"
      type="light"
      fixed="top" 
      class="justify-content-between" 
      @scroll="handleSCroll"
    >
      <b-navbar-brand class="py-0" v-if="!isMobile">
        <img src="/images/SVG_Images/siarem-logo.svg" alt="Siarem logo" width="66.5%">
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse" class="border-0 ml-auto"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav class="justify-content-end">
        <b-navbar-nav class="align-items-center">
          <b-nav-item href="#about">About</b-nav-item>
          <b-nav-item href="#features">Features</b-nav-item>
          <b-nav-item href="#pricing">Pricing</b-nav-item>
          <b-nav-item href="#support">Support</b-nav-item>
          <b-nav-item href="/register" class="sign-up-btn text-uppercase white pr-0">Sign Up Now</b-nav-item>
          <!-- <b-nav-item href="#" class="pl-4">LA/EN</b-nav-item> -->
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>

    <!-- <div class="sections-menu">
      <span
        class="menu-point"
        :class="{active: activeSection == index}"
        @click="scrollToSection(index)"
        v-for="(offset, index) in offsets"
        :key="index">
      </span>
    </div> -->
    <section class="fullpage">
      <first-page/>
    </section>

    <section class="fullpage">
      <crm-page/>
    </section>

    <section class="fullpage">
      <analytics-page/>
    </section>

    <section class="fullpage">
      <flow-page/>
    </section>

    <section class="fullpage">
      <dialer-page/>
    </section>

    <section class="fullpage">
      <why-crm-page/>
    </section>

    <section class="fullpage">
      <pricing-page/>
    </section>

    <section class="fullpage">
      <contact-page/>
    </section>
  </div>
</template>

<script>
import onResize from '../../on_resize.js'
import FirstPage from './FirstPage';
import CrmPage from './CrmPage';
import AnalyticsPage from './AnalyticsPage';
import FlowPage from './FlowPage';
import DialerPage from './DialerPage';
import WhyCrmPage from './WhyCrmPage';
import PricingPage from './PricingPage';
import ContactPage from './ContactPage';
export default {
  components: {
    FirstPage,
    CrmPage,
    AnalyticsPage,
    FlowPage,
    DialerPage,
    WhyCrmPage,
    PricingPage,
    ContactPage
  },
  data: function(){
    return { 
      isMobile: false
    }
  },
  methods: {
    handleSCroll (event) {
      console.log('fired')
      let header = document.querySelector(".navbar");
      console.log(document.scrollY)
      if (document.scrollY > 50 && !header.className.includes('navbar-scroll')) {
        console.log('no')
        header.classList.add('navbar-scroll'); 
      } else if (document.scrollY < 50) {
        console.log('yes')
        header.classList.remove('navbar-scroll');
      }
    }
  },
  created () {
    document.addEventListener('scroll', this.handleSCroll);
    this.onResize = onResize.onResize
  },
  destroyed () {
    document.removeEventListener('scroll', this.handleSCroll);
  } 
  // mounted() {

  // },
  // props: [],
  // data: function(){
  //   return { 
  //     inMove: false,
  //     activeSection: 0,
  //     offsets: [],
  //     touchStartY: 0
  //   }
  // },
  // created() {
  //   this.calculateSectionOffsets();
    
  //   window.addEventListener('DOMMouseScroll', this.handleMouseWheelDOM);  // Mozilla Firefox
  //   window.addEventListener('mousewheel', this.handleMouseWheel, { passive: false }); // Other browsers
    
  //   window.addEventListener('touchstart', this.touchStart, { passive: false }); // mobile devices
  //   window.addEventListener('touchmove', this.touchMove, { passive: false }); // mobile devices
  // },

  // destroyed() {
  //   window.removeEventListener('mousewheel', this.handleMouseWheel, { passive: false });  // Other browsers
  //   window.removeEventListener('DOMMouseScroll', this.handleMouseWheelDOM); // Mozilla Firefox
    
  //   window.removeEventListener('touchstart', this.touchStart); // mobile devices
  //   window.removeEventListener('touchmove', this.touchMove); // mobile devices
  // },
  
  // methods: {
  //   calculateSectionOffsets() {
  //     let sections = document.getElementsByTagName('section');
  //     let length = sections.length;
      
  //     for(let i = 0; i < length; i++) {
  //       let sectionOffset = sections[i].offsetTop;
  //       this.offsets.push(sectionOffset);
  //     }
  //   },

  //   handleMouseWheel: function(e) {
      
  //     if (e.wheelDelta < 30 && !this.inMove) {
  //       this.moveUp();
  //     } else if (e.wheelDelta > 30 && !this.inMove) {
  //       this.moveDown();
  //     }
        
  //     e.preventDefault();
  //     return false;
  //   },

  //   handleMouseWheelDOM: function(e) {
      
  //     if (e.detail > 0 && !this.inMove) {
  //       this.moveUp();
  //     } else if (e.detail < 0 && !this.inMove) {
  //       this.moveDown();
  //     }
      
  //     return false;
  //   },

  //   moveDown() {
  //     this.inMove = true;
  //     this.activeSection--;
        
  //     if(this.activeSection < 0) this.activeSection = this.offsets.length - 1;
        
  //     this.scrollToSection(this.activeSection, true);
  //   },

  //   moveUp() {
  //     this.inMove = true;
  //     this.activeSection++;
        
  //     if(this.activeSection > this.offsets.length - 1) this.activeSection = 0;
        
  //     this.scrollToSection(this.activeSection, true);
  //   },

  //   scrollToSection(id, force = false) {
  //     if(this.inMove && !force) return false;
      
  //     this.activeSection = id;
  //     this.inMove = true;
      
  //     document.getElementsByTagName('section')[id].scrollIntoView({behavior: 'smooth'});
      
  //     setTimeout(() => {
  //       this.inMove = false;
  //     }, 400);
      
  //   },

  //   touchStart(e) {
  //     e.preventDefault();
      
  //     this.touchStartY = e.touches[0].clientY;
  //   },

  //   touchMove(e) {
  //     if(this.inMove) return false;
  //     e.preventDefault();
      
  //     const currentY = e.touches[0].clientY;
      
  //     if(this.touchStartY < currentY) {
  //       this.moveDown();
  //     } else {
  //       this.moveUp();
  //     }
      
  //     this.touchStartY = 0;
  //     return false;
  //   }
  // }
}
</script>

<style>
#landing {
  margin: 0;
  overflow: hidden;
  background-color: #fff;
  position:relative;
}

#landing .navbar-expand .navbar-nav {
  flex-direction: unset;
}

#landing .navbar {
  background-color: #fff !important;
  -webkit-box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
  -moz-box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
  box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
  padding-left: 3.95%;
  padding-right: 3.95%;
}

#landing .navbar-light .navbar-toggler-icon {
  background-image: url('/images/landing/hamburger.svg');
}

#landing .navbar-scroll {
  background-color: #009D95;
}

#landing .navbar-brand img {
  width: 10.4vw!important;
}

#landing .nav-item {
  color: #535554;
  font-size: 15px;
  padding-left: 5.25%;
  padding-right: 5.25%;
  width:100%;
}

#landing .nav-link {
  padding: 0;
}

#landing .nav-item.sign-up-btn a {
  font-size: 0.94vw;
  text-transform : uppercase;
  background: linear-gradient(to right, rgba(255,129,51,1) 0%,  rgba(255,147, 58,1) 100%) !important;
  border-radius:50rem;
  padding: 9% 13%;
  box-shadow:none;
  line-height:1em;
  white-space: nowrap;
  display: flex;
}

#landing .sections-menu {
  position: fixed;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
}

#landing .sections-menu .menu-point {
  width: 10px;
  height: 10px;
  background-color: #FFF;
  display: block;
  margin: 1rem 0;
  opacity: .6;
  transition: .4s ease all;
  cursor: pointer;
}

#landing .sections-menu .menu-point.active {
  opacity: 1;
  transform: scale(1.5);
}

#landing .fullpage {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 4.38%;
}

@media screen and (min-width: 1200px) {
  #landing .fullpage {
    min-height: 100vh;
  }
  #landing .container-row {
    min-height: 100vh; 
  }
}

#landing h1 {
  color: #4D4D4D;
  font-size: 2.71vw;
  font-weight: bold;
  text-transform: capitalize;
  margin-bottom: 0.5rem !important;
}

#landing h2 {
  color: #999999;
  font-size: 1.62vw;
  font-weight: bold;
  text-transform: capitalize;
  margin-bottom: 9%;
  
}

#landing p {
  color: #3A3A3A;
  font-size: 16px;
  font-family: 'Rubik', sans-serif;
  line-height: 30px;
  margin-bottom: 4%;
} 

@media screen and (max-width: 1199px){
  #landing .fullpage {
    padding-top: 54px;
  }
  #landing p {
    font-size: 12px;
    line-height: 1.7em;
  }
  #landing #nav-collapse.collapse.show {
    text-align:right;
  }
  #landing .nav-item {
    padding: 8px 0.75rem;
  }
  #landing .nav-item.sign-up-btn a {
    width: fit-content;
    margin-left: auto;
    font-size:11px!important;
    padding: 9px 22px!important;
  }
  #landing .btn-primary {
    font-size:11px!important;
    padding: 9px 22px!important;
  }
  #landing .col-xl-6 {
    padding-left: 40px!important;
    padding-right: 40px!important;
  }
}

#landing .btn-primary {
  font-size: 0.94vw;
  text-transform : uppercase;
  padding: 2.1% 3.7%;
  box-shadow:none;
  line-height:1em;
  white-space: nowrap;
}

.nav-item.white a.nav-link {
  color: #fff !important;
  font-weight: 700;
}

#landing img {
  max-height: 100vh;
}

</style>

