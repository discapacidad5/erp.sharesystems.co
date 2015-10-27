<!-- PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">ShareSystems© 2015</span>
				</div>
			</div>
		</div>
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		

		<script>
			$(document).on("mouseover", ".alert1", function(e) {
			bootbox.alert("
				<div id=\"shortcut\">
						<ul>
							<li>
								<a href=\"perfil_red/\" class=\"jarvismetro-tile big-cubes\" style=\"background: #006\"> <span class=\"iconbox\"> <i class=\"fa fa-user fa-4x\"></i> <span>Ver mi Perfil</span> </span> </a>
							</li>	
							<li>
								<a href=\"perfil_red/foto\" class=\"jarvismetro-tile big-cubes\" style=\"background: #606060\"> <span class=\"iconbox\"> <i class=\"fa fa-camera fa-4x\"></i> <span>Mi Foto</span> </span> </a>
							</li>		
						</ul>
			</div>", function() {
			console.log("Alert Callback");
			});
			});
		</script>
		
		
		<!-- JS dependencies -->
		
		<script>
		$(document).on("click", ".alert1", function(e) {
		bootbox.dialog({
			message: '<div class="col-md-12" style="height: 10em">' +
								'<a href="/perfil_red/" class="jarvismetro-tile big-cubes" style="background: #006"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>Ver mi Perfil</span> </span> </a>' +							
								'<a href="/perfil_red/foto" class="jarvismetro-tile big-cubes" style="background: #606060"> <span class="iconbox"> <i class="fa fa-camera fa-4x"></i> <span>Mi Foto</span> </span> </a>' +							
					'</div>'
		});
		});
		</script>

		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="/template/js/plugin/pace/pace.min.js"></script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="/template/js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="/template/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="/template/js/bootstrap/bootstrap.min.js"></script>

		<script src="/template/js/bootstrap/bootbox.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="/template/js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="/template/js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="/template/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="/template/js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="/template/js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="/template/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="/template/js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="/template/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="/template/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="/template/js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="/template/js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="/template/js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="/template/js/speech/voicecommand.min.js"></script>

		<!-- BOOTBOX.MIN.JS-->
		<script src="/template/js/plugin/bootbox/bootbox.min.js"></script>
