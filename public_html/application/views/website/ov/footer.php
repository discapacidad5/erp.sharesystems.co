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
					'<table width=""><tr><td>' +	
								'<a href="/ov/perfil_red/" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>Ver mi Perfil</span> </span> </a>' +		
					'</td><td>'+				
								'<a href="/ov/perfil_red/foto" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-camera fa-4x"></i> <span>Mi Foto</span> </span> </a>' +							
					'</td></tr></table>'
		});
		});
		$(document).on("click", ".alert2", function(e) {
		bootbox.dialog({
			message: '<table width=""><tr><td>' +
								'<a href="/ov/perfil_red/TipoAfiliacion" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-edit fa-4x"></i> <span>Afiliar</span> </span> </a>' +							
						'</td><td>'+
								'<a href="/ov/red/index" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-sitemap fa-4x"></i> <span>Mis Redes</span> </span> </a>' +							
					'</td></tr></table>'
		});
		});
		$(document).on("click", ".alert3", function(e) {
		bootbox.dialog({
			message: '<table width=""><tr><td>' +
								'<a href="/ov/cgeneral/encuestas" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-file-text-o fa-4x"></i> <span>Encuestas</span> </span> </a>' +							
						'</td><td>'+		
								'<a href="/ov/cabecera/archivo" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-archive fa-4x"></i> <span>Archivero</span> </span> </a>' +	
						'</td><td>'+
								'<a href="/ov/cabecera/tablero" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-cogs fa-4x"></i> <span>Tablero</span> </span> </a>' +							
						'</td><td>'+
								'<a href="/ov/cabecera/compartir" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-folder-open-o fa-4x"></i> <span>Compartir</span> </span> </a>' +								
					'</td></tr></table>'
		});
		});
		$(document).on("click", ".alert7", function(e) {
		bootbox.dialog({
			message: '<table width=""><tr><td>' +
								'<a href="/ov/escuela_negocios/informacion" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-info fa-4x"></i> <span>Información</span> </span> </a>' +
						'</td><td>'+		
								'<a href="/ov/escuela_negocios/presentaciones" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-desktop fa-4x"></i> <span>Presentaciones</span> </span> </a>' +							
						'</td><td>'+		
								'<a href="/ov/escuela_negocios/ebooks" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>E-books</span> </span> </a>' +	
						'</td><td>'+		
								'<a href="/ov/escuela_negocios/descargas" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-download fa-4x"></i> <span>Descargas</span> </span> </a>' +							
						'</td></tr><tr><td>'+
								'<a href="/ov/escuela_negocios/promociones" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-gift fa-4x"></i> <span>Promociones</span> </span> </a>' +									
						'</td><td>'+		
								'<a href="/ov/escuela_negocios/eventos" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Eventos</span> </span> </a>' +							
						'</td><td>'+		
								'<a href="/ov/escuela_negocios/noticias" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-bullhorn fa-4x"></i> <span>Noticias</span> </span> </a>' +	
						'</td><td>'+
								'<a href="/ov/escuela_negocios/videos" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-file-video-o fa-4x"></i> <span>Videos</span> </span> </a>' +							
						'</td></tr><tr><td>'+		
								'<a href="/ov/escuela_negocios/reconocimientos" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-star fa-4x"></i> <span>Reconocimientos</span> </span> </a>' +		
						'</td><td>'+
								'<a href="/ov/compras/estadisticas" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-bar-chart-o fa-4x"></i> <span>Estadísticas</span> </span> </a>' +											
					'</td></tr></table>'
		});
		});
		$(document).on("click", ".alert8", function(e) {
		bootbox.dialog({
			message: '<table width=""><tr><td>' +
								'<a href="/ov/cgeneral/soporte_tecnico_ver_redes" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-support fa-4x"></i> <span>Support</span> </span> </a>' +							
						'</td><td>'+		
								'<a href="/ov/cgeneral/web_personal" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-globe fa-4x"></i> <span>Web Personal</span> </span> </a>' +	
						'</td><td>'+
								'<a href="/ov/cgeneral/chat" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_1_color?>"> <span class="iconbox"> <i class="fa fa-weixin fa-4x"></i> <span>Chat</span> </span> </a>' +							
						'</td><td>'+
								'<a href="/ov/cabecera/email" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>E-mail</span> </span> </a>' +								
						'</td></tr><tr><td>'+
								'<a href="/ov/cgeneral/videollamada" class="jarvismetro-tile big-cubes" style="background: <?=$style[0]->btn_2_color?>"> <span class="iconbox"> <i class="fa fa-video-camera fa-4x"></i> <span>Videollamadas</span> </span> </a>' +																
					'</td></tr></table>'
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
