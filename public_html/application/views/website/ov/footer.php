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
		

		
		
		
		<!-- JS dependencies -->
		
		<script>
		$(document).on("click", ".alert1", function(e) {
		bootbox.dialog({
			message: 
					'<div class="col-sm-4">' +
						'<a href="perfil_red/">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>">'+
								'<i class="fa fa-user fa-5x"></i>'+
								'<h5>Perfil</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="perfil_red/foto">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">' +
							'<i class="fa fa-camera fa-5x"></i>'+
							'<h5>Foto</h5>'+
							'</div>'+
						'</a>'+
					'</div>'+
					'<div class="col-sm-4">' +
						'<a href="auth/change_password">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-unlock fa-5x"></i>'+
							'<h5>Contraseña</h5>'+
							'</div>'+
						'</a>'+
					'</div>'
		});
		});
		$(document).on("click", ".alert2", function(e) {
		bootbox.dialog({
			message: 	
					'<div class="col-sm-4">' +
						'<a href="perfil_red/TipoAfiliacion">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>">'+
								'<i class="fa fa-edit fa-5x"></i>'+
								'<h5>Afiliar</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="red/index">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-sitemap fa-5x"></i>'+
							'<h5>Red</h5>'+
							'</div>'+
						'</a>'+
					'</div>'
		});
		});
		$(document).on("click", ".alert3", function(e) {
		bootbox.dialog({
			message: 
					'<table width="100%"><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="cgeneral/encuestas">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>">'+
								'<i class="fa fa-file-text-o fa-5x"></i>'+
								'<h5>Encuestas</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="cabecera/archivo">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">' +
							'<i class="fa fa-archive fa-5x"></i>'+
							'<h5>Archivero</h5>'+
							'</div>'+
						'</a>'+
					'</div></td></tr><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="cabecera/tablero">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>">'+
								'<i class="fa fa-cogs fa-5x"></i>'+
								'<h5>Tablero</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="cabecera/compartir">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-folder-open-o fa-5x"></i>'+
							'<h5>Compartir</h5>'+
							'</div>'+
						'</a>'+
					'</div></td></tr></table>'
		});
		});
		$(document).on("click", ".alert7", function(e) {
		bootbox.dialog({
			message: '<table width="100%"><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/informacion">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>">'+
								'<i class="fa fa-info fa-5x"></i>'+
								'<h5>Información</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/presentaciones">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">' +
							'<i class="fa fa-desktop fa-5x"></i>'+
							'<h5>Presentaciones</h5>'+
							'</div>'+
						'</a>'+
					'</div></td></tr><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/ebooks">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>">'+
								'<i class="fa fa-book fa-5x"></i>'+
								'<h5>E-Books</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/descargas">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-download fa-5x"></i>'+
							'<h5>Descargas</h5>'+
							'</div>'+
						'</a>'+
						'</div></td></tr><tr><td>'+
						'<div class="col-sm-4">' +
						'<a href="compras/estadistica">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-bar-chart-o fa-5x"></i>'+
							'<h5>Estadísticas</h5>'+
							'</div>'+
						'</a>'+	
						'</div>' +				
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/eventos">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">' +
							'<i class="fa fa-calendar fa-5x"></i>'+
							'<h5>Eventos</h5>'+
							'</div>'+
						'</a>'+
						'</div></td></tr><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/noticias">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>">'+
								'<i class="fa fa-bullhorn fa-5x"></i>'+
								'<h5>Noticias</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="escuela_negocios/videos">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-file-video-o fa-5x"></i>'+
							'<h5>Videos</h5>'+
							'</div>'+
						'</a>'+						
					'</div></td></tr></table>'
		});
		});
		$(document).on("click", ".alert8", function(e) {
		bootbox.dialog({
			message: '<table width="100%"><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="cgeneral/videollamada">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>">'+
								'<i class="fa fa-video-camera fa-5x"></i>'+
								'<h5>Videollamadas</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="cgeneral/web_personal">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">' +
							'<i class="fa fa-globe fa-5x"></i>'+
							'<h5>Web Personal</h5>'+
							'</div>'+
						'</a>'+
					'</div></td></tr><tr><td>'+
					'<div class="col-sm-4">' +
						'<a href="cgeneral/chat">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>">'+
								'<i class="fa fa-weixin fa-5x"></i>'+
								'<h5>Chat</h5>'+
							'</div>'+
						'</a>'+
					'</div>' +	
					'<div class="col-sm-4">' +
						'<a href="cabecera/email">' +
							'<div class="well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_1_color?>;">' +
							'<i class="fa fa-envelope fa-5x"></i>'+
							'<h5>E-mail</h5>'+
							'</div>'+
						'</a>'+						
					'</div></td></tr></table>'
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
