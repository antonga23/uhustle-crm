<template>
  <div>
      <div class="row">
        <div class="col-lg-3 col-md-3 idle-footer" v-if="!show_edication_blocks"> 
          <p>Show Education</p> 
          <a href="#" class="down-scroll d-block" @click="show_edication_blocks = true;"> 
            <img src="/images/Idle_Pages_Assest/Asset 120.png" alt="Scroll Down" /> 
          </a> 
        </div> 

        <div class="col-lg-3 col-md-3 idle-footer"  v-if="show_edication_blocks"> 
          <p>Hide Education</p> 
          <a href="#" class="down-scroll d-block" @click="show_edication_blocks = false;"> 
            <img src="/images/Idle_Pages_Assest/Asset 119.png" alt="Scroll Down" /> 
          </a> 
        </div> 
      </div>
      <div class="row idle-education justify-content-center" v-if="show_edication_blocks"> 
        <div class="col-lg-10"> 
          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 106.svg" width="71" height="60" /> 
            <p>Education</p> 
            <a href="#" class="down-scroll d-block"> 
              <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 

          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 107.svg" width="71" height="60" /> 
            <p>Clients</p> 
            <a href="#" class="down-scroll d-block"> 
              <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 

          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 108.svg" width="71" height="60" /> 
            <p>Commission</p> 
            <a href="#" class="down-scroll d-block"> 
              <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 

          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 108.svg" width="71" height="60" /> 
            <p>Upselling</p> 
            <a href="#" class="down-scroll d-block"> 
                <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 

          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 107.svg" width="71" height="60" /> 
            <p>Breaking the Ice</p> 
            <a href="#" class="down-scroll d-block"> 
              <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 
          
          <div class="col-lg-4 text-center"> 
            <img src="/images/Idle_Pages_Assest/Asset 106.svg" width="71" height="60" /> 
            <p>Callbacks</p> 
            <a href="#" class="down-scroll d-block"> 
              <img src="/images/Idle_Pages_Assest/Asset 119.png" /> 
            </a> 
          </div> 
        </div> 
      </div> 
  </div>
</template>
<script>
export default {
  props: [],
  mounted () {
    // Overwriting base render method with actual data.
    console.log('Scripts Component Mounted');
  },
  data: function() {
  	return {
      show_edication_blocks: false
  	}
  }
}
</script>