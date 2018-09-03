<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home | APABENA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />	
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3425570132933671",
    enable_page_level_ads: true
  });
</script>

</head>
<body>



<div id="wrapper">
	<!-- start header -->
	<?php include('header.php'); ?>
	<!-- end header -->
	<section id="featured" class="bg">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li>
                <img id="image" style="height:500px;width:100%" src="img/home/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>APABENA Headquarter</h3> 
					<p>APABENA is located in Kigali City, Kacyiru sector</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img style="height:500px;width:100%"  src="img/home/16.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Committee</h3> 
					<p style="">The Executive Committee is composed of a Legal representative; Vice-legal representative; Advisor, Secretary and Treasurer.</p> 
					<a href="administration.php" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img style="height:500px;width:100%" src="img/home/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>We offer different services. </h3> 
					<p>like Wedding services such as Gardens</p>
					<!--<p>New menu have been introduced, we expect more customer to come and enjoy our services.</p>-->
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
			  <li>
                <img style="height:500px;width:100%" src="img/home/4.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Education Promotion</h3> 
					<p>We encourage education in a number of ways like support in school equipments.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
			  <li>
                <img style="height:500px;width:100%" src="img/home/5.jpg" alt="" />
                <div class="flex-caption">
                    <h3>We also promote Gender in Education</h3>
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	


	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cta-text">
									<h2>What is <span>APABENA</span> ?</h2>
									<p class="lead" style="text-align:justify;padding:10px"> APABENA is a Non-Governmental Organization granted by Rwandan law and complies with the new law number 04/2012 of 17/02/2012 governing the organization and
										the functioning of national non-governmental organization. Its statutes were amended and accepted by the Ministerial Order No. 050/11 of 29<sup>th</sup> May 2003 and it is legally operating in Rwanda 
										under legal personality No: 090/11 issued by Rwanda Governance BOARD (RGB).
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										The idea of its creation dates back in 1995 after the 1994 Genocide perpetrated against Tutsi where Rwanda have had a huge number of orphans and street children who were 
										separated with thier families.
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										To rehabilitate those orphans and vulnerable children, generous parents with heart full of love came together with ideas of providing moral and assistance to build hope and strength 
										among those children victims of 1994 Genocide against Tutsi.
									</p>
									<p class="lead" style="text-align:justify;padding:10px">
										Obviously children could not stay as victims of all those problems such as malnutriton, lack of education. For that reason, we approached them, bringing them in place they could feel like 
										at home already and so the impact of that some of them have grown up, they are achieving goals, some even finished the schools, and they are no longer vulnerable children but instead they are able 
										to help other young ones who are still struggling, which is a very big impact of APABENA fruits that grew up.
									</p>
                                    <p align="right" style="padding:10px"><a href="more.php" class="btn btn-theme btn-lg">More About Us <i class="fa fa-angle-right"></i></a></p>
								</div>
							</div>
		</div>
	</div>
	</section>
	
	<section id="content">
		<div class="container">
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
	
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-5 col-md-5">
					<h4>Testimonials</h4>
						<div class="testimonialslide clearfix flexslider">
							<ul style="text-align:justify" class="slides">
							<?php
								include('connect.php');
								$sql = 'SELECT * FROM test ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo'
								<li><blockquote>
								'.html_entity_decode($row['Content']).'
									</blockquote>
									<h4>'.ucfirst($row['Name']).'<span>&#8213; '.$row['Role'].'</span></h4> 
								</li>
									';
								}
							?>
							</ul>
						</div>					
					</div>	
					<div class="col-sm-7 col-lg-7">
						<h4 align="center">Communication Board</h4>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Monday</a></li>
							<li><a href="#two" data-toggle="tab">Tuesday</a></li>
							<li><a href="#three" data-toggle="tab">Wednesday</a></li>
							<li><a href="#four" data-toggle="tab">Thursday</a></li>
							<li><a href="#five" data-toggle="tab">Friday</a></li>
							<li><a href="#six" data-toggle="tab">Saturday</a></li>
							<li><a href="#seven" data-toggle="tab">Sunday</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'monday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa mbere</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="two">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'tuesday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa kabiri</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="three">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'wednesday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatatu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="four">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'thursday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa kane</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="five">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'friday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatanu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="six">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'saturday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo kuwa gatandatu</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
							<div class="tab-pane" id="seven">
							<?php
								$sql = 'SELECT * FROM gahunda WHERE Day=\'sunday\' ORDER BY ID DESC LIMIT 0,2';
								$res= mysqli_query($dbcon,$sql);
								while($row= mysqli_fetch_array($res)){
									echo html_entity_decode($row['Content']);
								}
							?>
								<!--<h4 align="center">Gahunda yo ku cyumweru</h4>
								<dl class="dl-horizontal">
									<dt>Icyambere : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakabiri : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
									<dt>Icyagatatu : </dt>
									<dd>Gusura abanyeshuri</dd>
									<dt>Icyakane : </dt>
									<dd>Kugenzura business zikorera muri APABENA.</dd>
								</dl>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

        <div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<p class="lead"><span class="highlight">APABENA</span> offers entrepreneurship opportunities for career readiness and youth employment among children supported by the organization.
                        We have initiated three medium business; <span>Carpentry</span>, <span>Bakery</span> and <span>Accomodation facilities</span> which improve employment for children supported by the organization.
                    </p>
				</div>
			</div>		
		</div>
		</div>
		
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-cutlery fa-5x"></i>
								</div>
								<h3>Accomodation facilities</h3>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-key fa-5x"></i>
								</div>
								<h3>Carpentry</h3>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="fa fa-cubes fa-5x"></i>
								</div>
								<h3>Bakery</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<!--<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>-->
		<!-- end divider -->
	
		<!-- Portfolio Projects -->
		<!--<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>

				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
					<div data-filter=".identity" class="cbp-filter-item">Identity<div class="cbp-filter-counter"></div></div>
					<div data-filter=".web-design" class="cbp-filter-item">Web Design<div class="cbp-filter-counter"></div></div>
					<div data-filter=".graphic" class="cbp-filter-item">Graphic<div class="cbp-filter-counter"></div></div>
					<div data-filter=".logo" class="cbp-filter-item">Logo<div class="cbp-filter-counter"></div></div>
				</div>
				

				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/1.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/2.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/2big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">World Clock Widget</div>
							<div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/3.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item web-design graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/4.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Events and More</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/5.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/5big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">WhereTO App</div>
							<div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/6.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/6big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
							<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/7.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/8.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
							<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
						</li>
					</ul>
				</div>
				
				<div class="cbp-l-loadMore-button">
					<a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
				</div>

			</div>
		</div>
		</div>-->
		
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
		<!-- clients -->
		<div class="container">
				<div class="row">
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 0,1';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 1,2';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 2,3';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 3,4';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>									
								
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 4,5';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>									
								<div class="col-xs-6 col-md-2 aligncenter client">
                                    <?php
										$sql = 'SELECT * FROM adverts ORDER BY ID DESC LIMIT 5,6';
										$res= mysqli_query($dbcon,$sql);
										while($row= mysqli_fetch_array($res)){
											echo '<img alt="logo" src="'.$row['Picture'].'" class="img-responsive" />';
										}
									?>
								</div>	

				</div>
		</div>
	
	</section>
	
	<?php include('footer.php');?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

	
</body>
</html>