<?php 
$site_name = "Home";
$site_description = "Herzlich Willkommen zum offiziellen Kinderquiz zur Heiligtumsfahrt 2023 in Aachen";
$body_class = '';
include ("includes/header.php"); ?>

<div id="all-HomePhone">
    <div id="blocks" class="blocks">
        <div class="container-fluid main flex-grow-1">
            <div class="card card-full">
                <div class="card-body d-flex flex-wrap">
                    <!--<div class="align-self-center pr-5 mr-auto  card-full-text">-->
                    <div class="align-self-center mr-auto  card-full-text">
                        <h3 class="mb-1">Herzliche wilkommen</h3>
                        <p>zum Kinderquiz der Heiligtumsfahrt 2023 in Aachen.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3">
                <div class="card">
                    <a class="card-body" href="quiz.html">
                        <h5 class="card-title">
                            <i class="fas fa-question-circle"></i>
                            Quiz
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            Das Multiple-Choice-Quiz zur Heiligtumsfahrt 2023 in Aachen.
                        </h6>
                    </a>
                </div>
                <div class="card">
                    <a class="card-body" href="vq.html">
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
                    <a class="card-body" href="infos.html">
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
    <div id="carouselStartseite" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Slider1.jpg" alt="Bild 1" title="Bildrechte: Domkapitel">
                <div class="carousel-caption clearfix">
                    <h4>Quiz dich durch die Heifa 2023</h4>
                    <a href="quiz.html" class="pull-right btn btn-primary btn-sm" role="button">spielen <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <p>Kannst du alle Fragen beantworten?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/Slider2.jpg" alt="Bild 2" title="Bildrechte: Domkapitel">
                <div class="carousel-caption clearfix">
                    <h4>Interaktiv um und durch den Dom</h4>
                    <a href="vq.html" class="pull-right btn btn-primary btn-sm" role="button">spielen <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <p>Spiele jetzt das Videoquiz!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/Slider3.jpg" alt="Bild 3" title="Bildrechte: Domkapitel">
                <div class="carousel-caption clearfix">
                    <h4>Du willst mehr Fakten und Lösungen?</h4>
                    <a href="infos.html" class="pull-right btn btn-primary btn-sm" role="button">weiterlesen <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <p>Auf unserer Info Seite findest du alle Antworten.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselStartseite" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carouselStartseite" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light rounded" id="DisclaimerAppMobile">
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
    <div class="spacer-mid-phone"></div>
    
</div>
		

<?php include ("includes/footer.php"); ?>