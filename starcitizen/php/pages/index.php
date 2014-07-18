	<!--<div class="container">-->
	<script src="assets/js/s3Slider.js" type="text/javascript"></script>
	
		<!--<div class="full nopadding">-->
			<div id="s3slider">
				<ul id="s3sliderContent">
					<!--<li class="s3sliderImage">
						<img src="/assets/img/front/announcement1.jpg" width="890px">
						<div class="left top">
							<h3>Announcement</h3>
							<p>Soon to be revealed.</p>
						</div>
						<p class="slideNumber">1 / 7</p>
					</li>
					<!--<li class="s3sliderImage">
						<img src="/assetsimg/front/SimpleStar.jpg" width="890px">
						<div class="left top">
							<h3>Reach the stars.</h3>
							<p>We are there for you.</p>
						</div>
						<p class="slideNumber">2 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="/assets/img/front/Atmosless.jpg" width="890px">
						<div class="right top">
							<h3>TerraSafe&trade;</h3>
							<p>Live wherever you want.</p>
						</div>
						<p class="slideNumber">3 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="/assets/img/front/Asteroidbelt.jpg" width="890px">
						<div class="left top">
							<h3>AstroSystems&trade;</h3>
							<p>Protection against asteroids and high impact particles.</p>
						</div>
						<p class="slideNumber">4 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="/assets/img/front/NebulaSystem.jpg" width="890px">
						<div class="right top">
							<h3>GasFilterPlus&trade;</h3>
							<p>No more limits of where you can go.</p>
						</div>
						<p class="slideNumber">5 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="/assets/img/front/SunsetPeak.jpg" width="890px">
						<div class="left top">
							<h3>Clean Air&trade;</h3>
							<p>For a safer, healthier future.</p>
						</div>
						<p class="slideNumber">6 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="/assets/img/front/SpaceVehicle.jpg" width="890px">
						<div class="right top">
							<h3>Riptide Class</h3>
							<p>Go fast in style.</p>
						</div>
						<p class="slideNumber">7 / 7</p>
					</li>
					<div class="clear s3sliderImage"></div>
				</ul>-->
				<?php 
                    $slides = array(
                        array(
                            'src'       => 'Announcement1',
                            'loc'       => 'left bottom',
                            'title'     => 'Ship Announcement',
                            'content'   => '<p>Soon to be revealed.</p>',
                        ),
                        array(
                            'src'       => 'SimpleStar',
                            'loc'       => 'left top',
                            'title'     => 'Reach the Stars',
                            'content'   => '<p>We are there for you.</p>',
                        ),
                        array(
                            'src'       => 'EarlyRedGiant',
                            'loc'       => 'right top',
                            'title'     => 'SphereTours&trade',
                            'content'   => '<p>Witness the space events <i>you</i> want to experience.</p>',
                        ),
                        array(
                            'src'       => 'Atmosless',
                            'loc'       => 'top',
                            'title'     => 'TerraSafe&trade',
                            'content'   => '<p>Live wherever you want.</p>',
                        ),
                        array(
                            'src'       => 'Asteroidbelt',
                            'loc'       => 'left top',
                            'title'     => 'AstroSystems&trade',
                            'content'   => '<p>Your guide through asteroid fields.</p>',
                        ),
                        array(
                            'src'       => 'NebulaSystem',
                            'loc'       => 'right top',
                            'title'     => 'GasFilterPlus&trade',
                            'content'   => '<p>No more limits of where you can go.</p>',
                        ),
                        array(
                            'src'       => 'SunsetPeak',
                            'loc'       => 'left top',
                            'title'     => 'Clean Air&trade',
                            'content'   => '<p>For a safer, healthier future.</p>',
                        ),
                        array(
                            'src'       => 'SpaceVehicle',
                            'loc'       => 'right top',
                            'title'     => 'Riptide Class',
                            'content'   => '<p>Go fast in style.</p>',
                        )
                    );
                
                    foreach ($slides as $i => $slide) { ?>
                        <li class="s3sliderImage"><img src="assets/img/front/<?= $slide['src']; ?>.jpg" width="890px\">
                            <div class=" <?= $slide['loc']; ?>">
                                <h3><?= $slide['title']; ?></h3>
                                <?= $slide['content']; ?>
                            </div>
                            <p class="slideNumber"><?= $i + 1; ?> / <?= count($slides); ?></p>
                        </li>
                    <?php } 
                ?>
                </ul>
			</div>
		<!--</div>
		
	</div>-->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#s3slider').s3Slider({
				timeOut: 6000
			});
		});
	</script>