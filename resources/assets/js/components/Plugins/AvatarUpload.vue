
<template>
  <div>
      <my-upload v-show="show" field="img"
              :no-rotate="false"
              @crop-success="cropSuccess"
              @crop-upload-success="cropUploadSuccess"
              @crop-upload-fail="cropUploadFail"
              v-model="show"
              :width="200"
              :height="200"
              url="/upload-avatar"
              :params="params"
              :headers="headers"
              img-format="jpg"
              lang-type="en">
      </my-upload>
    <slot/>
  </div>
</template>
<script>

import myUpload from 'vue-image-crop-upload';
export default {
    mounted() {
      console.log('Avatar Uploader Mounted');
      var vm = this;
      Fire.$on('ShowAvatarUploader', function(){
        vm.show = true;
      });
    },
		components: {
			'my-upload' : myUpload
    },
    data: function(){
      return {
        show:false,
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
				params: {
					_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
					name: 'avatar'
				},
				headers: {
					smail: '*_~'
				},
				imgDataUrl: '',
      }
    },
    methods: {
			cropSuccess(imgDataUrl, field){
				console.log('-------- crop success --------');
			},
			cropUploadSuccess(jsonData, field){
				console.log('-------- upload success --------');
				console.log(jsonData);
				console.log('field: ' + field);
				Fire.$emit('AvatarUploadComplete');
			},
			cropUploadFail(status, field){
				console.log('-------- upload fail --------');
				console.log(status);
				console.log('field: ' + field);
			},

    },
};
</script>