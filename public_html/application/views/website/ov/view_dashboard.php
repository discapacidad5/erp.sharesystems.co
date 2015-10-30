<?php $ci = &get_instance();
   	$ci ->load ->model("model_permissions");?>
			<!-- MAIN CONTENT -->
			<div id="main" role="main">

				<!-- row -->
				<div class="row">
				<br /><br /><br />
				</div>
				<!-- end row -->
<?php
	   	if($hayPremios==true){
	   	?>
	   				<script type="text/javascript">
	   				window.onload = function() {
	   					$.ajax({
	   						type: "POST",
	   						url: "/ov/dashboard/ConsultarPremio",
	   						data: {}
	   					}).done(function( msg )
	   							{
	   						bootbox.dialog({
	   							message: msg,
	   							title: "Felicitaciones",
	   							buttons: {
	   								success: {
	   								label: "Cerrar!",
	   								className: "btn btn-danger",
	   								callback: function() {
	   									//location.href="";
	   									}
	   								}
	   							}
	   						});
	   					});
	   				}
	   				</script>
	   			<?php 
	   	}?>


<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header">				    
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-home"></i> </span>
				</div>
				<h4 class="pull-right" style="margin-right: 1em"><strong>Haz click en el Ícono 
<i class="fa fa-home"></i> de la Izquierda para desplegar el Menú</strong></h4>

<!-- END collapse menu button -->

<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a >
						<img src="<?=$user?>" alt="me" class="online" /> 
						<span>
							<?=$usuario[0]->nombre?> <span class="semi-bold"><?=$usuario[0]->apellido?></span> 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul>					
					<li>
						<a href="#" class="alert1" ><i class="fa fa-2x fa-fw fa-user"></i> <span class="menu-item-parent">PERFIL</span></a>
					</li>	
					<li>
						<a href="#" class="alert2" ><i class="fa fa-2x fa-fw fa-sitemap"></i> <span class="menu-item-parent">RED</span></a>
					</li>
					
					<li>
						<a href="/ov/compras/carrito?tipo=1" class="alert4" ><i class="fa fa-2x fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">COMPRAS</span></a>
					</li>	
					<li>
						<a href="/ov/billetera2/index_estado" class="alert5" ><i class="fa fa-2x fa-fw fa-money"></i> <span class="menu-item-parent">ESTADO DE CUENTA</span></a>
					</li>	
					<li>
						<a href="/ov/billetera2/index" class="alert6" ><i class="fa fa-2x fa-fw fa-dollar"></i> <span class="menu-item-parent">BILLETERA</span></a>
					</li>	
					<li>
						<a href="#" class="alert7" ><i class="fa fa-2x fa-fw fa-info"></i> <span class="menu-item-parent">INFO Y CAPACITACIÓN</span></a>
					</li>	
					<li>
						<a href="#" class="alert8" ><i class="fa fa-2x fa-fw fa-weixin"></i> <span class="menu-item-parent">COMUNICACIÓN</span></a>
					</li>	
					<li>
						<a href="#" class="alert3" ><i class="fa fa-2x fa-fw fa-folder-open-o"></i> <span class="menu-item-parent">GENERAL</span></a>
					</li>	
					<li>
						<a href="/ov/compras/reportes" class="alert9" ><i class="fa fa-2x fa-fw fa-table"></i> <span class="menu-item-parent">REPORTES</span></a>
					</li>				
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>



      <div class="row">
					<div class="col-sm-12">
							<div class="well well-sm">
								<div class="row">
					      	<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="well well-light well-sm no-margin no-padding">
											<div class="row">
												<div class="col-sm-12">
													<div id="myCarousel" class="carousel fade profile-carousel">
														<div class="air air-top-left padding-10">
															<h4 class="txt-color-white font-md"></h4>
														</div>
														<div class="carousel-inner">
															<!-- Slide 1 -->
															<div class="item active">
																<img src="/template/img/demo/m3.jpg" alt="demo user">
															</div>
														</div>
													</div>
												</div>

												<div class="col-sm-12">

													<div class="row">

														<div class="col-sm-3 profile-pic">
															<img src="<?=$user?>" alt="demo user">
															<!--<div class="padding-10">
																<h4 class="font-md"><strong>1,543</strong>
																<br>
																<small>Followers</small></h4>
																<br>
																<h4 class="font-md"><strong>419</strong>
																<br>
																<small>Connections</small></h4> 
															</div>-->
														</div>
														<div class="col-sm-6">
															<h1><?=$usuario[0]->nombre?> <span class="semi-bold"><?=$usuario[0]->apellido?></span>
															<br>
															<small> Diamante</small></h1>

															<ul class="list-unstyled ">
															    <li>
															        <div class="demo-icon-font pull-left">
																		<img class="flag flag-<?=strtolower($pais)?>">
																	</div>
																</li>
																<li>
																	<p class="text-muted pull-left">
																		|<i class="fa fa-phone"></i>(<span class="txt-color-darken"><?=$telefono?></span>)</span>
																	</p>
																</li>
																<li>
																	<p class="text-muted pull-left">
																		|<i class="fa fa-envelope"></i><a ><?=$email?></a>
																	</p>
																</li>
																<li>
																	<p class="text-muted pull-left">
																		|<i class="fa fa-user"></i><span class="txt-color-darken"><?=$username?></span>
																	</p>
																</li>
																<li>
																	<p class="text-muted pull-left">
																		|<i class="fa fa-calendar"></i><span class="txt-color-darken">Ultima sesión: <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment"><?=$ultima?></a></span>
																	</p>
																</li>
                                <li>
                                <?php
                                if(($id_sponsor[0]->id_usuario!=1)){
                                ?>
                               <b>Patrocinador:</b>
                              <p class="text-muted pull-left"><?=$name_sponsor[0]->nombre?> <?=$name_sponsor[0]->apellido?> con id <?=$id_sponsor[0]->id_usuario?></p><br/>

                              <?php }else{?>
                              <p class="text-muted pull-left">Eres un nodo raíz, fuiste patrocinado por la empresa.</p><br />
                              <?php }?>
                                </li>
															</ul>
															<br>
														</div>
														<div class="col-sm-3">
                           <!--
															<h1><small>Connections</small></h1>
															<ul class="list-inline friends-list">
																<li><img src="img/avatars/1.png" alt="friend-1">
																</li>
																<li><img src="img/avatars/2.png" alt="friend-2">
																</li>
																<li><img src="img/avatars/3.png" alt="friend-3">
																</li>
																<li><img src="img/avatars/4.png" alt="friend-4">
																</li>
																<li><img src="img/avatars/5.png" alt="friend-5">
																</li>
																<li><img src="img/avatars/male.png" alt="friend-6">
																</li>
																<li>
																	<a href="javascript:void(0);">413 more</a>
																</li>
															</ul>

															<h1><small>Recent visitors</small></h1>
															<ul class="list-inline friends-list">
																<li><img src="img/avatars/male.png" alt="friend-1">
																</li>
																<li><img src="img/avatars/female.png" alt="friend-2">
																</li>
																<li><img src="img/avatars/female.png" alt="friend-3">
																</li>
															</ul> -->
														</div>
													</div>
												</div>
											</div>
  									</div>
									</div>
                <div class="col-sm-12 col-md-12 col-lg-6">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
	        <!-- a blank row to get started -->
	        <div class="col-sm-12">
	            <br />
	            <br />
	        </div>
        </div>
			</div>
			<!-- END MAIN CONTENT -->
