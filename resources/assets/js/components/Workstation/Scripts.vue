<template>
  <div>
      <div :class="{ 'row mx-0' : true }" data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" style="margin-top: 6%"> 
        <div class="col-lg-12 px-0"> 
          <p class="heading px-0">Calls</p> 
        </div> 

        <div class="row mx-0 justify-content-between"> 
          <div class="col-auto pl-0">
            <div class="card client"> 
              <div class="card-body"> 
                <p class="card-text font-weight-bolder">Cashed Out</p> 
              </div> 
            </div> 
          </div> 

          <div class="col-auto"> 
            <div class="card product"> 
              <div class="card-body"> 
                <p class="card-text font-weight-bolder">Upsell</p> 
              </div> 
            </div> 
          </div> 

          <div class="col-auto"> 
            <div class="card time"> 
              <div class="card-body font-weight-bolder"> 
                <p class="card-text">Not Interested</p> 
              </div> 
            </div> 
          </div> 

          <div class="col-auto pr-0"> 
            <div class="card activity"> 
              <div class="card-body"> 
                <p class="card-text font-weight-bolder">More Info</p> 
              </div> 
            </div> 
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
  	}
  }
}
</script>