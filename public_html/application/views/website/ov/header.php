	<!--

	TABLE OF CONTENTS.

	Use search to find needed section.

	===================================================================

	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #MAIN PANEL               |  main panel                    |
	|  13. #MAIN CONTENT             |  content holder                |
	|  14. #PAGE FOOTER              |  page footer                   |
	|  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  16. #PLUGINS                  |  all scripts and plugins       |

	===================================================================

	-->

	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-skin-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL (will be avilable from version SmartAdmin 1.5)
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-footer'      - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="desktop-detected pace-done hidden-menu">

		<!-- #HEADER -->
		<header id="header" class="navbar navbar-default navbar-fixed-top" style="height: 70px">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE-->
				<span id="logo"> <a href="/ov/dashboard"><img style="width: 10rem; height: auto;" src="/logo.png" alt="ShareSystems"> </a></span>
				<!--END LOGO PLACEHOLDER -->

<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
<!-- END collapse menu button -->

			</div>
			<!-- #TOGGLE LAYOUT BUTTONS -->
			<!-- pulled right: nav area -->
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 pull-right">
				<!-- #MOBILE -->
				<!-- Top menu profile link : this shows only when top menu is active -->
				<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="/auth/logout" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
							</li>
						</ul>
					</li>
				</ul>

				<!-- logout button -->
				<div style="margin-top: 1rem;" class=" transparent pull-right" id="logout">

					<span> <a style="color: rgb(255, 255, 255); background: rgb(206, 53, 44) none repeat scroll 0% 0%;" class="btn btn-default btn-circle btn-lg" href="/auth/logout" style="color: #CE352C" title="Salir" data-action="userLogout" data-logout-msg="¿Realmente desea salir?">
							<i style="font-size: 3rem;" class="fa fa-sign-out"></i>
							</a></span>
				</div>
				<!-- end logout button -->
				<!-- fullscreen button
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->

				<!-- #Voice Command: Start Speech
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div>
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a>
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Voice command failed
									<br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
									<br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a>
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->

				<!-- CAMBIAR IDIOMA multiple lang dropdown : find all flags in the flags page -->
				<ul class="header-dropdown-list hidden-xs">
					<li>
						<a style="margin: 2.5rem;" href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="/template/img/blank.gif" class="flag flag-es" alt="Spanish"><span> Español </span> <i class="fa fa-angle-down"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);"><img src="/template/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="/template/img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
							</li>
							<li class="active">
								<a href="javascript:void(0);"><img src="/template/img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
							</li>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="/template/img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
							</li>

						</ul>
					</li>
				</ul>
				<!-- end multiple lang -->

			</div>
			<!-- end pulled right: nav area -->
		</header>
		<!-- END HEADER -->
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
						<a href="#" class="alert1" ><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">PERFIL</span></a>
					</li>	
					<li>
						<a href="#" class="alert2" ><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">RED</span></a>
					</li>	
					<li>
						<a href="#" class="alert3" ><i class="fa fa-lg fa-fw fa-folder-open-o"></i> <span class="menu-item-parent">GENERAL</span></a>
					</li>
					<li>
						<a href="#" class="alert4" ><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">COMPRAS</span></a>
					</li>	
					<li>
						<a href="#" class="alert5" ><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">COMISIONES</span></a>
					</li>	
					<li>
						<a href="#" class="alert6" ><i class="fa fa-lg fa-fw fa-dollar"></i> <span class="menu-item-parent">BILLETERA</span></a>
					</li>	
					<li>
						<a href="#" class="alert7" ><i class="fa fa-lg fa-fw fa-info"></i> <span class="menu-item-parent">INFO Y CAPACITACIÓN</span></a>
					</li>	
					<li>
						<a href="#" class="alert8" ><i class="fa fa-lg fa-fw fa-weixin"></i> <span class="menu-item-parent">COMUNICACIÓN</span></a>
					</li>					
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>

