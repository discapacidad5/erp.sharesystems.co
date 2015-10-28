 <!-- MAIN CONTENT -->
<div id="content" style="margin-top: 6em">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<h1 class="page-title txt-color-blueDark">
					<a class="backHome" href="/ov"><i class="fa fa-home"></i> Menu</a> 
				<span>
				>	Ver Redes
				</span>
			</h1>
		</div>
	</div>
<section id="widget-grid" class="">
<div class="row" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;margin-bottom:2rem;">	
<div class="well">
		<fieldset>
											<legend>Redes</legend>
											<div class="row">
											<? foreach ($redes_de_usuario as $red ) { ?>
												<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
													<a href="/ov/cgeneral/chat_red?id_red=<?= $red->id; ?>">
														<div class="well well-sm txt-color-white text-center link_dashboard" style="background:#606060">
																<i class="fa fa-sitemap fa-5x"></i>
																<h5><?= $red->nombre;?></h5>
														</div>	
													</a>
												</div>
												<?php } ?>
			</fieldset>
	</div>
</div>
</section>	
</div>	