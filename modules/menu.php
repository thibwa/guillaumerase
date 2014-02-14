<!-- NAVBAR
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
        <img class="visible-desktop" style="float: left;margin-top: 4px;margin-right: 5px;" src="images/racing_cyclist.png" alt="Logo site"/>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand <?php if($_GET["p"] == null) echo 'active';?>" href="javascript:;" onclick="loadEntry('');">Guillaume Rase</a>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav" id="menu">
				<li <?php if($_GET["p"] == null) echo 'class="active"';?>>
					<a href="javascript:;" onclick="loadEntry('');">
						Accueil
					</a>
				</li>
				<li id="introductionMenu">
					<a href="javascript:;" onclick="loadAndSlide('introduction');">
						Présentation
					</a>
				</li>
				<li id="sponsoringMenu">
					<a href="javascript:;" onclick="loadAndSlide('sponsoring');">
						Sponsors
					</a>
				</li>
				<li class="dropdown <?php if($_GET['p'] == "result") echo 'active';?>">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						Résultats <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li <?php if($_GET['p'] == "result") echo 'class="active"';?>>
                            <a href="javascript:;" onclick="loadEntry('result');">Tous</a>
						</li>
						<li class="divider"></li>
						<?php
						$result_item = array('1<sup>er</sup> Elite', '4<sup>e</sup> Espoir', '3<sup>e</sup> Espoir',
							 '2<sup>e</sup> Espoir', '1<sup>er</sup> Espoir');
						$counter = 0;
				        foreach(glob('resources/result/new/*') as $year)
				        {
				            ?>
				            <li>
								<a href="javascript:;" onclick="loadEntry('result');">
									<?php echo $result_item[$counter]; ?>
								</a>
							</li>
							<?php
				            $counter ++;
				        }
				        ?>
						<li class="divider"></li>
						<li><a href="javascript:;">Anciens</a></li>
					</ul>
				</li>
				<li <?php if($_GET["p"] == "news") echo 'class="active"';?>>
					<a href="javascript:;" onclick="loadEntry('news');">Actualités</a>
				</li>
				<li <?php if($_GET["p"] == "contact") echo 'class="active"';?>>
                    <a href="javascript:;" onclick="loadEntry('contact');">Contact</a>
                </li>
			</ul>
		</div>
	</div>
</div>>