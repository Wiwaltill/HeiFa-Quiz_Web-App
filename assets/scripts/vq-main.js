var video1ID = "hKueR6K929w";
var video2ID = "UpmdtlDLSRI";
var video3ID = "Vf87txCpySE";
var video4ID = "D894ERYKI0M";
var video5ID = "FwTF_VrihzM";
var video6ID = "lQVgZx2D7p4";
var video7ID = "7ogC8v3XyGw";
/*var video8ID = "fRJAzI_PM0s";*/
var video9ID = "AtBvgFzEfTM";
var audio = document.getElementById("bgaudio");


//YouTube iFrame API
//https://developers.google.com/youtube/iframe_api_reference
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var player;
		function onYouTubePlayerAPIReady() {
			player = new YT.Player('player', {
				height: "1080",
                width: "1920",
				videoId: video1ID,
				playerVars: { 
					autoplay: 0,
                    controls: 0,
                    disablekb: 1,
                    enablejsapi: 1,
                    playsinline: 1,
                    modestbranding: 1,
                    rel: 0,
                    cc_load_policy: 0,
                    iv_load_policy: 3,
                    showinfo: 0,
                    cc_lang_pref: localStorage.getItem("language")},
					loop: 1,
				
				events: {
				'onReady': onPlayerReady,
				/*'onStateChange': onStateChange,*/ 	
              
  }
});
}

/*
function onStateChange(event){
	if (event.data == YT.PlayerState.ENDED) {
		videoende();
	}}

*/

function onPlayerReady(event) {
	event.target.mute();
	event.target.playVideo();
	$("#overlay-start").fadeIn();
	$("#overlay-start").css("display", "flex");
	startQuiz();
	}



function videoende(){
	$("#overlay-start").fadeOut();
	//$("#overlay-start").css("display", "none");
	$("#overlay-end").fadeIn();
	$("#overlay-end").css("display", "flex");
	$("#overlaybuttons").css("display", "none");
	player.stopVideo();
}



var overlaystartmitton = document.getElementById('startbutton1');
	overlaystartmitton.onclick = function restart() {
		$("#overlay-start").fadeOut();
		//$("#overlay-start").css("display", "none");
		$("#mutebutton").fadeIn();
		$("#mutebutton").css("display", "block").addClass("on");
		audio.play();
	}
	
var overlaystartohneton = document.getElementById('startbutton2');
	overlaystartohneton.onclick = function restart() {
		$("#overlay-start").fadeOut();
		//$("#overlay-start").css("display", "none");
		$("#mutebutton").fadeIn();
		$("#mutebutton").css("display", "block");
	}
	

var endbutton2 = document.getElementById('endbutton2');
	endbutton2.onclick = function restart() {
		location.reload()
	}
	

var mutebutton = document.getElementById('mutebutton');
	mutebutton.onclick = function mute() {
		if($("#mutebutton").hasClass("on")){
			$("#mutebutton").removeClass("on")
			audio.pause();
		}
		else{
			$("#mutebutton").addClass("on")
			audio.play();
		}
	}	
	
var playbutton = document.getElementById('playbutton');
	playbutton.onclick = function mute() {
		if($("#playbutton").hasClass("pause")){
			$("#playbutton").removeClass("pause")
			player.playVideo()
		}
		else{
			$("#playbutton").addClass("pause")
			player.pauseVideo()
		}
	}	
	
var playbuttonmobile = document.getElementById('playbuttonmobile');
	playbuttonmobile.onclick = function mobileplay() {
		if($("#playbuttonmobile").hasClass("pause")){
			$("#playbuttonmobile").removeClass("pause")
			player.playVideo()()
		}
		else{
			$("#playbuttonmobile").addClass("pause")
			player.pauseVideo()
		}
	}	

//Videoeinbindung
//Bei mehr Video muss die Funktion hier um die Anzahl der Videos ergänz werden.
//Dies dient zu Synchronität von Fragen und Video
	
function video2(){
	player.cueVideoById({videoId:video2ID})
	player.playVideo()
}
function video3(){
	player.cueVideoById({videoId:video3ID})
	player.playVideo()
}
function video4(){
	player.cueVideoById({videoId:video4ID})
	player.playVideo()
}
function video5(){
	player.cueVideoById({videoId:video5ID})
	player.playVideo()
}
function video6(){
	player.cueVideoById({videoId:video6ID})
	player.playVideo()
}
function video7(){
	player.cueVideoById({videoId:video7ID})
	player.playVideo()
}
function video8(){
	player.cueVideoById({videoId:video8ID})
	player.playVideo()
}
function video9(){
	player.cueVideoById({videoId:video9ID})
	player.playVideo()
}

/*Ehemals vq-script.js*/

//Hier wird die Erscheinung und der korrekte Ablauf des Quiz deklariert.
$(function() {
  //Hauptfunktion
});

//Durch automatischen Videostart nicht benötigt
/*
$(".start").click(function() {
  console.log( "Start" );
  $(".quiz_start").fadeOut(function() {
    startQuiz();
  });
});
*/

function startQuiz() {
  console.log("Starte Quiz");
  showNextQuestion();
  $("#question").fadeIn();  
  $("#continue_btn").hide();
  player.setPlaybackQuality("highres")
  
}

$("#answer_a_btn").click(function() {
  selectAnswer("#answer_a_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_b_btn").click(function() {
  selectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_c_btn").click(function() {
  selectAnswer("#answer_c_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_a_btn");
  deselectAnswer("#answer_d_btn");
});

$("#answer_d_btn").click(function() {
  selectAnswer("#answer_d_btn");
  deselectAnswer("#answer_b_btn");
  deselectAnswer("#answer_c_btn");
  deselectAnswer("#answer_a_btn");
});

$("#answer_commit_btn").click(function() {
  validateAnswer();
});

/*
$(".restart").click(function() {
  $(".quiz_end").fadeOut(function() {
    startQuiz();  
  });
});
*/

function validateAnswer() {
  $("#answer_commit_btn").hide();
  var rightAnswer = getRightAnswer();
  var selectedAnswerId = $(".answer.btn-primary").attr("id");
  var selectedAnswer = $(".answer.btn-primary").text()[0]; 
  if (selectedAnswer == rightAnswer) {
    $(".answer.btn-primary").removeClass("btn-primary");
    $(".answer.btn-default").removeClass("btn-default");
    $("#"+selectedAnswerId).addClass("btn-success");
    points += rightAnswerPoints;
  } else {
    $(".answer.btn-primary").removeClass("btn-primary");
    $(".answer.btn-default").removeClass("btn-default");
    $("#"+selectedAnswerId).addClass("btn-danger");
  }
  $("#continue_btn").show();
}

$("#continue_btn").click(function() {
  currentQuestionNo++;
  showNextQuestion();  
  $("#continue_btn").hide();
  $("#answer_commit_btn").show();
});

function selectAnswer(id) {
  $(id).addClass("btn-primary");
  $(id).removeClass("btn-default");
}

function deselectAnswer(id) {
  $(id).addClass("btn-default");
  $(id).removeClass("btn-primary");  
}

function showEnd() {
  $("#question").fadeOut(function() {
    $("#endpoints").text(points);
    $("#possiblepoints").text(rightAnswerPoints * questions.length);
    $(".quiz_end").fadeIn(); 
	videoende();
	video9();
	console.log("Quiz beendet!");
  });  
}

/*Ehemals vq-quiz.js*/

//Erstellung der grundlegenden Variablem für die Fragen.
var currentQuestionNo = 0;
var points = 0;
var rightAnswerPoints = 1;
var currentQuestion;

//Zeigt die nächste Frage
function showNextQuestion() {
  if (currentQuestionNo >= questions.length) {
    showEnd();
	console.log("Keine weiteren Fragen vorhanden!").delay(200);
	currentQuestionNo = 0;
  }
  console.log("Lade Frage: " + (currentQuestionNo+1));
  currentQuestion = questions[currentQuestionNo];
  $("#qno").text(currentQuestionNo+1);
  $("#question_text").text(currentQuestion.question);
  $("#answer_a").text(currentQuestion.answers.A);
  $("#answer_b").text(currentQuestion.answers.B);
  $("#answer_c").text(currentQuestion.answers.C);
  $("#answer_d").text(currentQuestion.answers.D); 
  
  $(".answer").removeClass("btn-primary btn-danger btn-success btn-default");
  $(".answer").addClass("btn-default");
	IDaenderung()
}

function getRightAnswer() {
  return currentQuestion.right;
}


function IDaenderung(){
//Starten eines neuen Videos  bei beendeter Frage
//Bei mehr Video muss die Funktion hier um die Anzahl der Videos ergänz werden.
//Dies dient zu Synchronität von Fragen und Video
if (currentQuestionNo == 1){
	video2()
}
if (currentQuestionNo == 2){
	video3()
}
if (currentQuestionNo == 3){
	video4()
}
if (currentQuestionNo == 4){
	video5()
}
if (currentQuestionNo == 5){
	video6()
}
if (currentQuestionNo == 6){
	video7()
}
if (currentQuestionNo == 7){
	video8()
}
}

//Quiz by lerneprogrammieren.de

/*Ehemals vq-audio.js*/

//Playlist Initialisierung
//ACHTUNG!!!
//Hier wird das letzte Lied immer wiederholt!

var playlist = {
    'song_1' : 'assets/music/epic-pirate.mp3',
    'song_2' : 'assets/music/powerful-cinematic.mp3',
	'song_3' : 'assets/music/epic-pirate.mp3',
    'song_4' : 'assets/music/powerful-cinematic.mp3',
	'song_5' : 'assets/music/epic-pirate.mp3',
    'song_6' : 'assets/music/powerful-cinematic.mp3',
	'song_7' : 'assets/music/epic-pirate.mp3',
    'song_8' : 'assets/music/powerful-cinematic.mp3',
	'song_9' : 'assets/music/epic-pirate.mp3',
    'song_10' : 'assets/music/powerful-cinematic.mp3',
}

//Audio laden

$("#bgaudio").trigger('load');

//Audio start
//Durch Button 
//Hier nicht benötigt

function play_audio(task) {
      if(task == 'play'){
           $("#bgaudio").trigger('play');
      }
      if(task == 'stop'){
           $("#bgaudio").trigger('pause');
           $("#bgaudio").prop("currentTime",0);
      }
 }

//Einsetzten des nächsten Tracks

var keys = Object.keys(playlist);
$('#bgaudio').append("<source id='sound_src' src=" + playlist[keys[0]] + " type='audio/mpeg'>");

//Automtischer start des nächsten Trackss

var count = 0; 
$('#bgaudio').on('ended', function() { 
   count++;  
   $("#sound_src").attr("src", playlist[keys[count]])[0];
   $("#bgaudio").trigger('load');
   play_audio('play');
	
});
/*
function resetPlaylist() {
	if (count == 1){
		alert("1");
		count = 0;
	}
}
*/
/*
//TABWECHSEL MUTE
//Code-Snippet by webdesign weisshart (s. Datenschutzerklärung)

var audio1 = document.getElementsByTagName("audio")[0];

document.addEventListener("visibilitychange", function() {
	if (document.visibilityState === 'visible') {
		audio1.play();
	} else {
		audio1.pause();
	}
});

*/