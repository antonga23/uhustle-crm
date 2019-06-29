<style scoped>
/*Right Component*/
p{
	color: #9fb3bb;
	margin: 0	;
}
.control-sidebar {
    position: absolute;
    top: 0;
    z-index: 830;
}

.control-sidebar, .control-sidebar {
    width: 350px !important;
    right: 0 !important;
    bottom: 0;
    transition: right 0.3s ease-in-out;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}
.control-sidebar-dark, .control-sidebar-dark {
    background: #fff !important;
}
.status{
	display: none;
}
.status.active{
    width: 76px;
    text-align: center;
    border-radius: 8px;
    display: block;
    background: #00d68f;
    padding: 4px 3px;
    line-height: 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    float: left;
    margin: 0;
}
.status.offline{
    width: 76px;
    text-align: center;
    border-radius: 8px;
    display: block;
    background: orange;
    padding: 4px 3px;
    line-height: 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    float: left;
    margin: 0;
}
.status.active:hover,
.status.offline:hover{
	color: #3b3b3b;
	cursor: pointer;
}
.status.show{
	display: block !important;
}
.navbar{
    margin: 0;
    float: right;
    padding: 0;   
    width: 100%;
}
.navbar-light .navbar-nav .nav-link.icon {
    color: rgba(0, 0, 0, 0.5);
    padding-top: 0;
}
.navbar-light .navbar-nav .nav-link.name {
    font-size: 11px;
    padding-top: 6px;
}
.notification-count{
    position: relative;
    top: -7px;
    right: 13px;
    font-size: 9px;
    color: #003449;
}
.collapse{
    border-bottom: 1px solid #e3e3e3;
    padding-bottom: 10px;
    margin-bottom: 30px;
}
.p-3{
    padding: 1.4rem 2.0rem 1.4rem 1.7rem !important;
}
.progress-bar{
	background: #e3e3e3;
	width: 100%;
	border-radius: 5px;
}
.tank{
	background:  linear-gradient(to right, rgba(161,237,128,1) 0%, rgba(98,211,126,1) 100%) !important;
	border-radius: 5px;
    background: rgb(114, 218, 126);
    height: 8px;
    transition: all 0.5s ease 0s;
}
.monthly-target{
    float: right;
    font-size: 21px;
    color: #1a1c43;
    margin-top: -8px;
}
.value{
    
    font-size: 17px;
    color: #1a1c43;
    margin-top: -8px;
}
.description{
	font-size: 12px;
}
.position{
    display: block;
    position: relative;
    background: #ff8234;
    color: #fff;
    height: 62px;
    text-align: center;
    font-size: 17px;
    padding: 18px 9px;
    width: 62px;
    transform: rotate(45deg); /* Standard syntax */
    margin-bottom: 40px;
}
.position span{
    transform: rotate(0deg); /* Standard syntax */
}
.badge{
	width: 30%;
}
.badge img{
	width: 100%;
}
p.heading{
    border-bottom: 1px solid #e3e3e3;
    margin-bottom: 10px;
}
.vc-border {
    border-width: 0;
}
.aligh-right{
	text-align: right;
}
/*End Right Component*/
</style>
<template>
	<div>
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<div class="row">
	                <nav class="navbar navbar-expand-md navbar-light bg-white">
	                    <div style="padding-left: 12px">
	                        <div class="collapse navbar-collapse" id="">
	                            <!-- Right Side Of Navbar -->
	                            <ul class="navbar-nav">
	                                <li class="nav-item">
	                                    <a class="nav-link icon" href="#" style="padding: 0;">
	                                    	<img src="/images/icons/notification icon clean@4x.png" alt="Notification Bell" width="25">
	                                    	<span class="notification-count">2</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item" style="margin-right: 70px;">
	                                    <a class="nav-link icon" href="#" style="padding-right: 0;">
	                                    	<img src="/images/icons/settings icon@4x.png" alt="Notification Bell" width="25">
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a class="nav-link name" href="#" style="font-size: 12px;">Yongama Sobambela</a>
	                                </li>
	                                <li class="nav-item">
	                                    <a class="nav-link icon" href="#">
	                                    	<img src="https://via.placeholder.com/25" style="border-radius:50%">
	                                    </a>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </nav>
				</div>
			
				<div class="row" style="padding: 0;">
					<div class="col-lg-12">
						<div class="row" style="padding: 0;">
							<div class="col-lg-12">
								<p>Monthly Target <span class="monthly-target">74%</span></p>
								<div class="progress-bar">
									<span class="tank" :style="'width:' + 65 + '%'"></span>
								</div>
							</div>
						</div>
						<div class="row" style="padding:25px  0;">
							<div class="col-lg-6">
								<p class="description">Commision</p>
								<p><span class="value">$1523</span></p>
							</div>
							<div class="col-lg-6 aligh-right">
								<p class="description">Con. Ratio</p>
								<p><span class="value">40%</span></p>
							</div>
						</div>
						<div class="row" style="padding:5px  0;">
							<div class="col-lg-12">
								<p class="heading">Calls</p>
							</div>
							<div class="col-lg-6">
								<p class="description">Leads</p>
								<p><span class="value">125</span></p>
							</div>
							<div class="col-lg-6 aligh-right">
								<p class="description">Called</p>
								<p><span class="value">25</span></p>
							</div>
						</div>
						<div class="row" style="padding:5px  0;">
							<div class="col-lg-12">
								<p class="heading">Sales</p>
							</div>
							<div class="col-lg-6">
								<p class="description">Quantity</p>
								<p><span class="value">54</span></p>
							</div>
							<div class="col-lg-6 aligh-right">
								<p class="description">Value</p>
								<p><span class="value">$2725</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="padding:25px  0;">
					<vc-calendar is-expanded />
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="position" style="display:none;">
							<span>12<sup>th</sup></span>
						</div>

						<div class="badge badge-1">
							<img src="/images/icons/Colonel@4x.png" alt="Badge">
						</div>

						<div class="badge badge-2">
							<img src="/images/icons/Corporal@4x.png" alt="Badge">
						</div>

						<div class="badge badge-2">
							<img src="/images/icons/Captain@4x.png" alt="Badge">
						</div>
					</div>
				</div>
			</div>
		</aside>
	</div>
</template>

<script>
	import { setupCalendar, Calendar} from 'v-calendar'
	export default {
		mounted() {
			console.log('Component mounted.');

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