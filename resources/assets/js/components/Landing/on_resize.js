export default {
  onResize () {
    if (window.innerWidth <= 1200) {
      this.isMobile = true
      console.log('mobile')
    } else {
      this.isMobile = false
      console.log('not mobile')
    }
  }
}