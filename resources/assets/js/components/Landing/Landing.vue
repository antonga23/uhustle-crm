<template>
  <div id="landing"> 
    <b-navbar type="light" variant="light" sticky class="navHeader">
      <b-navbar-brand>
        <img src="/images/SVG_Images/siarem-logo.svg" class="pl-4" alt="Siarem logo" width="200">
      </b-navbar-brand>

      <b-navbar-nav class="ml-auto">
        <b-nav-item href="#">About</b-nav-item>
        <b-nav-item href="#">Features</b-nav-item>
        <b-nav-item href="#">Pricing</b-nav-item>
        <b-nav-item href="#">Support</b-nav-item>
        <b-nav-item href="/register" class="btn-primary p-2 text-uppercase white" >Sign Up Now</b-nav-item>
        <!-- <b-nav-item href="#" class="pl-4">LA/EN</b-nav-item> -->
      </b-navbar-nav>
    </b-navbar>

    <div class="sections-menu">
      <span
        class="menu-point"
        :class="{active: activeSection == index}"
        @click="scrollToSection(index)"
        v-for="(offset, index) in offsets"
        :key="index">
      </span>
    </div>

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
}

#landing .navHeader {
    background-color: #fff !important;
    -webkit-box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
    -moz-box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 0px 9.51px 0px rgba(0,0,0,0.1);
}

#landing .navbar-nav.ml-auto {
  width: 50%;
}

#landing .nav-item {
  color: #535554;
  font-size: 15px;
  display: flex;
  flex: 1;
  
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
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
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
  font-size: 0.84vw;;
  font-family: 'Rubik', sans-serif;
  line-height: 30px;
  margin-bottom: 4%;
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
  margin: 0 auto;
}

#landing img {
  max-height: 100vh;
}

</style>

