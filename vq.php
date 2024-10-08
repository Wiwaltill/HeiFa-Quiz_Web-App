<?php 
$site_name = "Videoquiz";
$site_description = "Das Videoquiz zur Heiligtumsfahrt 2023 in Aachen";?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$site_name?> | Heiligtumsfahrt Quiz 2023</title>
		<meta name="description" content="<?=$site_description?>">
		<link preload href="assets/style/vq.css" type="text/css" rel="stylesheet" />
		<link preload href="assets/style/fontawesome.css" type="text/css" rel="stylesheet" />
		
        <?php include ("includes/favicon.php"); ?>

    </head>
	<body>
    <div class="stream-holder">
        <div class="video-holder admin">
            <div class="logo-holder">
                <img id="vq-logo" src="assets/images/vq-logo.png" alt="Hier könnte ein Logo hin. 608px x 233px">
                <div class="controls-holder">
                    <component class="button-small mute" id="mutebutton"></component>
                </div>
            </div>
            <div class="video-wrapper">
				<div class="overlay" id="overlay-start">
                    <text class="text-medium intro">Herzlich willkommen beim Videoquiz zur Heiligtumsfahrt 2023 und dem Dom. <br/> Um dein Erlebnis bestmöglich zu gestalten, empfehlen wir dir, den Ton einzuschalten.</text>
                    <component class="button red unmute startbutton" id="startbutton1">
                        <text>Mit Ton fortfahren</text>
                    </component>
                    <div class="nosound startbutton" id="startbutton2">
                        <text class="text-normal bold">Ohne Ton fortfahren</text>
					</div>
					<a class="button red link" href="index.php" id="startbutton3">
                        <text> Oder doch zurück zu Startseite</text>
                    </a>
                </div>
                <div class="overlay" id="overlay-end">
                    <!--<text class="text-medium intro" translation="streamEnd">HIER KÖNNTE EINE GRAFIK HIN</text>-->
                    <h3 class="title">Das war das Videoquiz</h3>
                    <text class="text-small">Wenn es dir gefallen hat, kannst du das Quiz gerne erneut spielen.</text>
                    <a class="button red link" href="index.php" id="endbutton1">
                        <text>Zurück zu Startseite</text>
                    </a>
                    <component class="button red link" id="endbutton2">
                        <text>Das Quiz erneut spielen</text>
                    </component>
                </div>
                <div class="overlay state" id="overlaybuttons">
                    <component class="button-circle streamplay" id="playbutton"></component>
                    <component class="button-circle streamnext" id="nextbutton" style="display: none;"></component>
                </div>
                
                <div class="holder" id="player"></div>
            </div>
            <div class="bottom-wrapper">
                <div class="holder">
                    <div class="controls-holder">
                        <component class="button-small streamplay" id="playbuttonmobile"></component>
                        <component class="button-small next" id="nextbuttonmobile" style="display: none;"></component>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-holder">
            <div class="lobby-info">
                <text class="text-normal bold"><br/></text>
                
            </div>
            <div class="tabs-wrapper">
                <div class="tabs-holder">
                    
                </div>
            </div>
            <div class="content-wrapper">
			<div class="container">	
      		
      			<div id="question" class="jumbotron" hidden>
        			<h2>Frage <span id="qno"></span></h2>
        			<p id="question_text">...?</p>
        			<div class="row">
        			  <div class="col-md-6"><p><button id="answer_a_btn" class="answer btn btn-default btn-lg btn-block Antwort" role="button">A: <span id="answer_a">!</span></button></p></div>
        			  <div class="col-md-6"><p><button id="answer_b_btn" class="answer btn btn-default btn-lg btn-block Antwort" role="button">B: <span id="answer_b">.</span></button></p></div>
        			</div>
        			<div class="row">
        			  <div class="col-md-6"><p><button id="answer_c_btn" class="answer btn btn-default btn-lg btn-block Antwort" role="button">C: <span id="answer_c">?</span></button></p></div>
        			  <div class="col-md-6"><p><button id="answer_d_btn" class="answer btn btn-default btn-lg btn-block Antwort" role="button">D: <span id="answer_d">;</span></button></p></div>
        			</div>
        			<div class="row">
        			  <div class="col-md-10"></div>
        			  <div class="col-md-2">
        			    <p><button id="answer_commit_btn" class="btn btn-primary btn-lg btn-block btn-next" role="button"><span id="commit_text">Antworten</span></button></p>
        			    <p><button id="continue_btn" class="btn btn-primary btn-lg btn-block btn-next" role="button" hidden><span id="commit_text_next" >Weiter</span></button></p>
        			  </div>
        			</div>
     		 	</div>

      			<div id="over" class="jumbotron quiz_end" hidden>
      			  <h1 id="punkte">Deine Punkte:</h1>
      			  <p>Du hast <span id="endpoints">0</span> von <span id="possiblepoints">0</span> Fragen richtig beantwortet!</p>
      			</div> 
				</div> 
			</div> 
		</div>
	</div>
	<div id="bgaudioblock" style="display: none">
	<audio id="bgaudio" controls preload="none">
		Leider kann dein browser diese Audiodatei nicht abspielen.
	</audio>

	</div>
		
		<div class="footer">
			<div class="footerbalken"></div>
				<a href="https://www.facebook.com/heiligtumsfahrt" target="_blank" id="facebook" class="social">
					<i class="fab fa-facebook"></i>
				</a>
				<a href="https://twitter.com/heiligtumsfahrt" target="_blank" id="twitter" class="social">
					<i class="fab fa-twitter"></i>
				</a>
				<a href="https://www.instagram.com/heiligtumsfahrt_aachen/" target="_blank" id="instagram" class="social">
					<i class="fab fa-instagram"></i>
					<p id="InstaHashtag">#heifa2023</p>
			</a>
		 	<a id="impressum" href="https://heiligtumsfahrt-aachen.de/impressum/" target="_blank"><p>Impressum</p></a>
			<a id="dateschutz" href="datenschutz.php" target="_blank"><p>Datenschutz</p></a>
		</div>	
		
		<script src="assets/scripts/jquery-3.5.1.js"></script>
		<script src="assets/scripts/vq-questions.js"></script>
		<script src="assets/scripts/vq-main.js"></script>
	</body>
</html>