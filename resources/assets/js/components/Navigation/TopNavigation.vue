<style scoped>
	/*Right Component*/
	li.title a strong{
		color: #003449;
		font-size: 25px;
	}

	.navbar-nav li.title{
		line-height: 20px;
	}

	.pull-right{
		float: right;
	}

	.pull-right li{
    	float: left !important;
	    width: 43px;
        margin-left: 15px !important;
	}

	.pull-right li a{
	    background-size: 100%;
	    background-repeat: no-repeat;
	    color: black;
	    padding: 0 !important;
	    background-size: 59px !important;
	    background-repeat: no-repeat !important;
	    background-position: center center !important;
	}

	.pull-right li a.search{
    	background-image: url('/images/icons/search button@4x.png') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li a.status{
    	background-image: url('/images/icons/online button@4x.png') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.pull-right li a.call{
    	background-image: url('/images/icons/end call button@4x.png') !important;
    	background-size: contain;
    	background-repeat: no-repeat;
	}

	.border-bottom {
	    border-bottom: none !important;
        padding: 40px 40px 0;
	}
	/*End Right Component*/
</style>
<template>
	<div>
		<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<div class="row" style="width: 100%;">
				<div class="col-lg-6">
					<ul class="navbar-nav left">
						<li class="nav-item d-none d-sm-inline-block title">
							<a href="index3.html" class="nav-link"><strong>Workstation</strong></a>
						</li> 
						<li class="nav-item d-none d-sm-inline-block">
							<a href="index3.html" class="nav-link">General</a>
						</li>
						<li class="nav-item d-none d-sm-inline-block">
							<a href="#" class="nav-link">Scripts</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-6" style="padding-right: 0">
					<ul class="navbar-nav pull-right">
						<li class="nav-item d-none d-sm-inline-block">
							<a href="#" class="nav-link search">
								<!-- <img src="/images/icons/search button@4x.png" alt="Call Buttons" /> -->
							</a>
						</li>
						<li class="nav-item d-none d-sm-inline-block">
							<a href="#" class="nav-link status">
								<!-- <img src="/images/icons/search button@4x.png" alt="Call Buttons" /> -->
							</a>
						</li>
						<li class="nav-item d-none d-sm-inline-block">
							<a href="#" class="nav-link call">
								<!-- <img src="/images/icons/search button@4x.png" alt="Call Buttons" /> -->
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</template>

<script>
	import { setupCalendar, Calendar} from 'v-calendar'
	export default {
		mounted() {
			console.log('Component mounted. 22');

			this.Toast = this.$swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
		},
		components: {
			
		},
		data: function(){
			return {
				status : 'active'
			}
		}
	}
</script>