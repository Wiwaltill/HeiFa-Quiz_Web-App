<?php 
$site_name = "Quiz";
$site_description = "Das Quiz zur Heiligtumsfahrt 2023 in Aachen";
$body_class = 'class="bodyWhite"';
include ("includes/header.php"); ?>

<div id="quizblock" class="container">
	<h2 id="headquiz" class="museo700">Multiple-Choice-Quiz</h2>
	<div class="card" id="QuizPunkte" style="width: 35rem;">
		<div class="card-body grau">
			Score: <span id="QuizPunktestand">0</span> von <span id="AnzahlFragen">14</span> Punkten
		</div>
	</div>
	<br/>
	<div class="card" id="Highscore" style="width: 35rem;">
		<div class="card-body grau">
			Highscore: <span id="HighscorePunktestand">0</span> von <span id="AnzahlFragen">14</span> Punkten
		</div>
	</div>
	<main id="main">
		<form id="quiz" action="">
		<h2 id="intro">Starte jetzt das Quiz, um mehr über die Heiligtumsfahrt und über die Stadt Aachen zu erfahren.</h2>
		</form>
	</main>
	<br/>
</div>

<div class="spacer-quiz"></div>


<?php include ("includes/footer.php"); ?>

<script src="assets/scripts/quiz.js"></script>
