<?php 
$site_name = "Infos";
$site_description = "Informationen und Fakten zur Heiligtumsfahrt 2023 in Aachen";
$body_class = 'class="bodyWhite"';
include ("includes/header.php"); ?>

<script>
			window.onload = function () {
        	$('#staticBackdrop').modal('show');
    	}
			$('#staticBackdrop').modal({
  				keyboard: true
			})
		</script>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title museo700">Achtung!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><!--&times;--><i class="fas fa-times-circle" id="popOutSchliessen"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<p>Auf dieser Seite findest du die Lösungen aller Fragen. <br/> <br/> Wenn du also das Quiz oder das Videoquiz noch nicht gespielt hast, lies lieber erstmal nicht weiter.</p>
			</div>
			<!--<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>-->
			</div>
	</div>
</div>	
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
	Launch static backdrop modal
</button>-->
<div class="container" id="ContainerInfos">
	<div class="content_box" id="loesungenQuiz">
		<h2>
			Quizfrage 1: <br>In welchen zeitlichen Abständen findet die Heiligtumsfahrt statt? 
		</h2>
		<img src="assets/images/infosPostkarte2-2.jpg" height="200px" alt="Postkarte" class="infosBorder" title="Bildrechte: Domkapitel">
		<p class="content">
			Die ersten Pilger kommen seit dem Jahre 1349 alle 7 Jahre nach Aachen, um die Heiligtümer zu verehren.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 2: <br>Wo findet die Heiligtumsfahrt statt? 
		</h2>
		<div class="infosImage">
			<img src="assets/images/infosHtf.jpg" class="img-fluid" alt="Heiligtumsfahrt" title="Bildrechte: Domkapitel">
		</div>
		<p class="content">
			In Aachen werden die Heiligtümer gelagert und präsentiert.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 3: <br>Wann wurde die Pfalzkapelle bzw. der Aachener Dom eingeweiht? 
		</h2>
		<div class="infosImage">
			<img src="assets/images/infosDom2.jpg" height="200px" alt="Aachener Dom" title="Bildrechte: Domkapitel">
		</div>
		<p class="content">
			Die Pfalzkapelle wurde im Jahr 799 in Aachen eingeweiht.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 4: <br>Wie wollten die Menschen im Mittelalter die Gnade und die Kraft der Heiligtümer einfangen? 
		</h2>
		<img src="assets/images/infosDach.jpg" height="200px" alt="Hausdach" title="Bildrechte: Domkapitel">
		<p class="content">
			Die Menschen versuchten auf den Hausdächern stehend mit kleinen Spiegeln die Gnade und die Kraft der Heiligtümer einzufangen. So wollten sie mit den sogenannten Aachen-Spiegeln die Gnade und Kraft der Heiligtümer mit nach Hause nehmen.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 5: <br>Wie viele Einwohner hatte Aachen im 15. Jahrhundert ungefähr?
		</h2>
		<img src="assets/images/infosProzession.jpg" height="200px" alt="Münze" class="infosBorder" title="Bildrechte: Domkapitel">
		<p class="content">
			Im 15. Jahrhundert hatte Aachen ungefähr 10.000 Einwohner. Trotzdem kamen täglich während der Heiligtumsfahrt rund 100.000 Pilger in die Stadt.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 6: <br>Welches Kleidungsstück Mariens liegt als Heiligtum in Aachen?
		</h2>
		<img src="assets/images/infosKleid.png" height="200px" alt="Kleid" title="Bildrechte: Domkapitel">
		<p class="content">
			Im Marienschrein ist das Kleid Mariens aus der heiligen Nacht aufbewahrt.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 7: <br>Wo werden die Heiligtümer aufbewahrt? 
		</h2>
		<img src="assets/images/infosMarienschrein.jpg" height="200px" alt="Marienschrein" title="Bildrechte: Frans Berkelaar / CC BY-SA (s. Datenschutz)">
		<p class="content">
			Im Marienschrein werden die Heiligtümer zwischen den Heiligtumsfahrten aufbewahrt. Nur alle sieben Jahre wird er geöffnet, um die Heiligtümer zu entnehmen und nach der Heiligtumsfahrt mit einem Schmuckschloss verschlossen.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 8: <br>Was war die höchste Besucheranzahl bei der Heiligtumsfahrt? 
		</h2>
		<div class="infosImage">
			<img src="assets/images/infosElisenbrunnen.jpg" height="200px" class="infosBorder img-fluid" alt="Besucher" title="Bildrechte: Domkapitel">
		</div>
		<p class="content">
			Im Jahre 1937 waren 1.000.000 Besucher bei der Heiligtumsfahrt. Dies war in der gesamten Geschichte der Heiligtumsfahrt die größte Menge an Besuchern.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 9: <br>Welches Kleidungsstück Jesu wird als Heiligtum verehrt?
		</h2>
		<div class="infosImage">
			<img src="assets/images/Windeln.jpg" class="img-fluid" alt="Besucher" title="Bildrechte: Domkapitel Aachen / Angelika Kamlage">
		</div>
		<p class="content">
			Die Windeln Jesu werden als Heiligtum verehrt.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 10: <br>Wessen Enthauptungstuch wird als Heiligtum verehrt?
		</h2>
		<div class="infosImage">
			<img src="assets/images/Enthauptungstuch.jpg" class="img-fluid" alt="Besucher" title="Bildrechte: Domkapitel Aachen / Angelika Kamlage">
		</div>
		<p class="content">
			Nach der Enthauptung Johannes des Täufers durch Herodes wurde mit dem Enthauptungstuch sein abgetrennter Kopf bedeckt.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 11: <br>Wann soll Jesus das Lendentuch, das als Heiligtum verehrt wird, getragen haben?
		</h2>
		<div class="infosImage">
			<img src="assets/images/Lendentuch.jpg" class="img-fluid" alt="Besucher" title="Bildrechte: Domkapitel Aachen / Angelika Kamlage">
		</div>
		<p class="content">
			Jesus hat das Ledentuch angeblich beim Tod am Kreuz getragen. Aufgrund dessen lassen sich auf dem Ledentuch auch Blutflecken erkennen.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 12: <br>Welche Heiligtümer werden in Kornelimünster verehrt?
		</h2>
		<div class="infosImage">
			<img src="assets/images/infosKornelimuenster.jpg" class="img-fluid" alt="Besucher" title="Bildrechte: GdG Himmelsleiter">
		</div>
		<p class="content">
			Im nahegelegenen Kornelimünster werden das Schürztuch vom letzten Abendmahl, das Schweißtuch und das Grabtuch Jesu verehrt. Karl der Große soll sie einst als Geschenk aus Jerusalem erhalten haben.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 13: <br>Wie kamen die Heiligtümer nach Aachen?
		</h2>
		<div class="infosImage">
			<img src="assets/images/infosElisenbrunnen2.jpg" height="200px" class="infosBorder" alt="Besucher" title="Bildrechte: Domkapitel">
		</div>
		<p class="content">
			Der Überlieferung nach erhielt Kaiser Karl die Reliquien um das Jahr 800 n. Chr. als Geschenk aus Jerusalem.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Quizfrage 14: <br>Womit machten die Pilger Krach, wenn die Heiligtümer präsentiert wurden?
		</h2>
		<div class="infosImage">
			<img src="assets/images/Horn-2.jpg" class="img-fluid" alt="Besucher" title="Bildrechte: Bistum Aachen / Anja Klingbeil">
		</div>
		<p class="content">
			Die Pilger haben mit Hörnern bei der Präsentation der Heiligtümer Krach gemacht und für Stimmung gesorgt.'
		</p>
	</div>

	<div class="content_box" id="loesungenVideoquiz">
		<h2>
			Videoquizfrage 1: <br>Woher hat der Barbarossaleuchter seinen Namen?
		</h2>
		<img src="assets/images/infosBarbarossaleuchter.jpg" height="200px" alt="Barbarossaleuchter" title="Bildrechte: Wikipedia CaS2000 / CC BY-SA (s.Datenschutz)">
		<p class="content">
			Der Barbarossaleuchter hat seinen Namen von Kaiser Friedrich I. Dieser stiftete den Barbarossaleuchter um 1165 dem Aachener Dom. Kaiser Friedrich I. wurde Barbarossa genannt, weswegen der Leuchter „Barbarossaleuchter“ genannt wird. 
		</p>
	</div>

	<div class="content_box">
		<h2>
			Videoquizfrage 2: <br>Was befindet sich an der Decke des Oktogons?
		</h2>
		<img src="assets/images/infosDeckenmosaik.jpg" height="200px" alt="Deckenmosaik" title="Bildrechte: Domkapitel">
		<p class="content">
			An der Decke des Oktogons des Aachener Doms befindet sich ein Mosaik. Das Mosaik zeigt aus der Offenbarung des Johannes die Anbetung der 24 Ältesten.
		</p>
	</div>

	<div class="content_box">
		<h2>
			Videoquizfrage 3: <br>Wie heißt die goldene Vorderseite des Altars?
		</h2>
		<img src="assets/images/infosPala-d-Oro.png" height="200px" alt="Pala D'Oro" title="Bildrechte: Domkapitel">
		<p class="content">
			Die Vorderseite des Altars wird von der goldenen Pala d'Oro (Platte aus Gold) geschmückt. Diese stammt aus dem frühen 11. Jahrhundert und zeigt Jesus, Maria, den Erzengel Michael und die Leidensgeschichte Jesu. 
		</p>
	</div>

	<div class="content_box">
		<h2>
			Videoquizfrage 4: <br>Was liegt im Marienschrein?
		</h2>
		<img src="assets/images/infosMarienschrein.jpg" height="200px" alt="Marienschrein" title="Bildrechte: Frans Berkelaar / CC BY-SA (s. Datenschutz)">
		<p class="content">
			Im Marienschrein werden die vier Heiligtümer gelagert. Hier liegen: 
			<ul>
				<li>das Kleid Mariens</li>
				<li>die Windeln Jesu</li>
				<li>das Lendentuch Jesu</li>
				<li>das Enthauptungstuch Johannes des Täufers</li>
			</ul>
		</p>
	</div>

	<div class="content_box">
		<h2>
			Videoquizfrage 5: <br>Aus welchem Material sind die Platten des Königsthrons?
		</h2>
		<img src="assets/images/infosThron.jpg" height="200px" alt="Aachener Königsthron" title="Bildrechte: Domkapitel">
		<p class="content">
			Die Platten des Königsthrons sind aus Mamor. Man kann sogar an einer Stellen ein eingeritztes Mühlespiel entdecken. 
		</p>
	</div>

	<div class="content_box">
		<h2>
			Videoquizfrage 6: <br>Wie wird das Mittelschiff des Domes genannt?
		</h2>
		<img src="assets/images/infosDom.jpg" height="200px" alt="Oktogon des Doms" title="Bildrechte: Wikipedia Photo by CEphoto, Uwe Aranas (s.Datenschutz)">
		<p class="content">
			Das Mittelschiff des Domes wird Oktogon genannt. Es hat seinen Namen aufgrund seiner acht Ecken. Diese Form soll für Vollkommenheit stehen.
		</p>
	</div>
	<div class="content_box">
		<h2>
			Videoquizfrage 7: <br>Wie nennt man die Kunst zur Herrstellung der Fenster?
		</h2>
		<img src="assets/images/infosFenster.jpg" height="200px" alt="Fenster des Doms" title="Bildrechte: Domkapitel">
		<p class="content">
			Die Kunst, mit der die Fenster des Doms hergestellt werden, nennt man Glasmalerei. Hier kannst du oft Motive und Bilder erkennen und bestaunen.
		</p>
	</div>

	<div class="content_box img-fluid">
		<h2>Hier findest du ein kurzes Erklärvideo, das dir die Heiligtumsfahrt in Aachen erklärt.</h2>
		<iframe class="video" src="https://www.youtube-nocookie.com/embed/RWSh3CbPfrk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<h3>Du möchtest uns Feedback senden oder hast einen Fehler gefunden?</h3>
	<h4>Schreibe uns:</h4>
	<a href="mailto: heifa-quiz@web.de">
		<button type="button" class="btn btn-heifa2 btn-lg museo300">E-Mail schreiben</button>
	</a>
	
	<br/><br/>
	
	<div class="content_box img-fluid">
		<h2>Du möchtest erfahren, wie dieses Quiz entstanden ist?</h2>
		<h3>Dann gucke hier:</h3>
		<iframe class="video" src="https://www.youtube-nocookie.com/embed/d5fjOI3jr8g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	
	<div class="spacer-mid-infos"></div>
</div>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>



<?php include ("includes/footer.php"); ?>

<script src="assets/scripts/main.js"></script>
