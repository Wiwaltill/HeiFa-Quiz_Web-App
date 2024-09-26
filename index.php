<?php 
$site_name = "Home";
$site_description = "Herzlich Willkommen zum offiziellen Kinderquiz zur Heiligtumsfahrt 2023 in Aachen";
$body_class = 'class="bodyWhite"';
include ("includes/header.php"); ?>

<script src="assets/scripts/phonetest.js"></script>

<div id="welkomHeadtext">
	<h3>Herzlich willkommen</h3>
	<p>zum Kinderquiz der Heiligtumsfahrt 2023 in Aachen.</p>
</div>

<div class="alle_news">
	<a href="quiz.php">
	<div class="news news1">
		<img src="assets/images/Box1.jpg" width="100%" alt="Quiz" title="Bildrechte: Domkapitel">
		<img src="assets/images/BoxWeiß.png" width="100%" alt="" class="boxWeiss">
		<div class="text">
			<p class="headlineBox">
				<i class="fas fa-question-circle"></i>
				Quiz
			</p>
			<p class="Bildunterschrift">Das Multiple-Choice-Quiz zur Heiligtumsfahrt 2023 in Aachen. </p>
		</div>
	</div>
	</a>
	<a href="vq.php">
	<div class="news news2">
		<img src="assets/images/Box2.jpg" width="100%" alt="Escape-Quiz" title="Bildrechte: Domkapitel">
		<img src="assets/images/BoxWeiß.png" width="100%" alt="" class="boxWeiss">
		<div class="text">
			<p class="headlineBox">
				<i class="fas fa-play-circle"></i>
				Videoquiz
			</p>
			<p class="Bildunterschrift">Das Videoquiz zur Heiligtumsfahrt 2023 und rund um den Dom in Aachen.</p>
		</div>
	</div>
	</a>
	<a href="infos.php">
	<div class="news news3">
		<img src="assets/images/Box3.jpg" width="100%" alt="Informationen" title="Bildrechte: Domkapitel">
		<img src="assets/images/BoxWeiß.png" width="100%" alt="" class="boxWeiss">
		<div class="text">
			<p class="headlineBox">
				<i class="fas fa-info-circle"></i>
				Infos
			</p>
			<p class="Bildunterschrift">Hier bekommst du Informationen und Lösungen zu den Fragen.</p>
		</div>
	</div>
	</a>
	</div>
	<div id="blocks" class="blocks blocksIndex">
		<div class="container-fluid main flex-grow-1">
			<div class="card-deck mb-3">
				<div class="card">
					<a class="card-body" href="quiz.php">
						<h5 class="card-title">
							<i class="fas fa-question-circle"></i>
							Quiz
						</h5>
						<h6 class="card-subtitle text-muted">
							Das Multiple-Choise-Quiz zur Heiligtumsfahrt 2023 in Aachen.
						</h6>
					</a>
				</div>
				<div class="card">
					<a class="card-body" href="vq.php">
						<h5 class="card-title">
							<i class="fas fa-play-circle"></i>
							Videoquiz
						</h5>
						<h6 class="card-subtitle text-muted">
							Das Videoquiz zur Heiligtumsfahrt 2023 und rund um den Dom in Aachen.
						</h6>
					</a>
				</div>
				<div class="card">
					<a class="card-body" href="infos.php">
						<h5 class="card-title">
							<i class="fas fa-info-circle"></i>
							Informationen
						</h5>
						<h6 class="card-subtitle text-muted">
							Hier kannst du die Lösungen der Fragen nachlesen.
						</h6>
					</a>
				</div>
			</div> 
		</div>
	</div>				
	
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light rounded" id="DisclaimerApp">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 font-weight-normal">Hol' dir jetzt die App!</h1>
			<p class="lead font-weight-normal">Spiele das Quiz optimiert und offline auf deinem Smartphone.</p>
			<div class="storeLinks">
				<a id="applebadge" href="https://apps.apple.com/us/app/heifa-quiz/id1551825141?itsct=apps_box&amp;itscg=30200"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/de-DE?size=250x83&amp;releaseDate=1612310400&h=912ac28e8beedad3a974e84137ea6171" alt="Download on the App Store"></a>
				<a id="playbadge" href="https://play.google.com/store/apps/details?id=my.awesome.htfquiz&utm_source=Website&utm_campaign=Werbung%20App&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Jetzt bei Google Play" src="https://play.google.com/intl/en_us/badges/static/images/badges/de_badge_web_generic.png"/></a>
			</div>
		</div>
	<div class="product-device box-shadow d-none d-md-block"></div>
	<div class="product-device product-device-2 product-device-2screen box-shadow d-none d-md-block"></div>
</div>

<div class="spacer-big-home"></div>


<?php include ("includes/footer.php"); ?>
