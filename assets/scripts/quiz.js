// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/from#Polyfill
// Production steps of ECMA-262, Edition 6, 22.1.2.

var correct = 0;
var highscore = 0;
var num = 0;
$("#QuizPunkte").hide();
$("#Highscore").hide();

if (!Array.from) {
	Array.from = (function () {
		var toStr = Object.prototype.toString;
		var isCallable = function (fn) {
			return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
		};
		var toInteger = function (value) {
			var number = Number(value);
			if (isNaN(number)) {
				return 0;
			}
			if (number === 0 || !isFinite(number)) {
				return number;
			}
			return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
		};
		var maxSafeInteger = Math.pow(2, 53) - 1;
		var toLength = function (value) {
			var len = toInteger(value);
			return Math.min(Math.max(len, 0), maxSafeInteger);
		};
		return function from(arrayLike /*, mapFn, thisArg */ ) {
			var C = this;
			var items = Object(arrayLike);
			if (arrayLike == null) {
				throw new TypeError(
					"Array.from requires an array-like object - not null or undefined");
			}
			var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
			var T;
			if (typeof mapFn !== 'undefined') {
				if (!isCallable(mapFn)) {
					throw new TypeError(
						'Array.from: when provided, the second argument must be a function');
				}
				if (arguments.length > 2) {
					T = arguments[2];
				}
			}

			var len = toLength(items.length);
			var A = isCallable(C) ? Object(new C(len)) : new Array(len);
			var k = 0;
			var kValue;
			while (k < len) {
				kValue = items[k];
				if (mapFn) {
					A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T,
						kValue, k);
				} else {
					A[k] = kValue;
				}
				k += 1;
			}
			A.length = len;
			return A;
		};
	}());
}
'use strict';
var myQuiz = {
	container: null,
	createElement: function (o) {
		var el, p;
		if (o && (o.tag || o.tagName)) {
			el = document.createElement(o.tag || o.tagName);
			if (o.text || o.txt) {
				var text = (o.text || o.txt)
				el.innerHTML = text;
			}
			for (p in o) {
				if (!p.match(/^t(e)?xt|tag(name)?$/i)) {
					el[p] = o[p];
				}
			}
		}
		return el;
	},
	createOptions: function () {
		var t = this,
			options = [],
			ul = document.createElement("ul");
		t.emptyContainer();
		t.intoContainer(t.createElement({
			tag: "h2",
			text: " " + t.currentQuestion.question
		}));
		t.intoContainer(ul);
		options.push(t.currentQuestion.solution);
		t.currentQuestion.falses.forEach(function (s) {
			options.push(s);
		});
		t.shuffleArray(options);
		options.forEach(function (s, i) {
			var li = document.createElement("li"),
				label = t.createElement({
					htmlFor: "a" + t.questions.length + "_" + i,
					tag: "label",
					text: s
				}),
				radio = t.createElement({
					id: "a" + t.questions.length + "_" + i,
					name: "answer",
					tag: "input",
					type: "radio",
					tabindex: "0",
					value: s
				});
			ul.appendChild(li);
			li.appendChild(radio);
			li.appendChild(label);
		});
		t.intoContainer(t.createElement({
			tag: "button",
			text: "confirm choice",
			type: "submit"
		}));
	},
	currentChoices: [],
	currentQuestion: null,
	data: [ 
		{
		question: 'In welchen zeitlichen Abständen findet die Heiligtumsfahrt statt?',
		solution: 'alle 7 Jahre',
		falses: ['alle 4 Jahre', 'alle 5 Jahre',
			'alle 10 Jahre'],
		explanation: 'Seit dem Jahr 1349 kommen alle 7 Jahre Pilger nach Aachen, um die Heiligtümer zu verehren.'
	}, {
		question: 'Wo findet die Heiligtumsfahrt statt?',
		solution: 'Aachen',
		falses: ['Karlsruhe',
			'Köln',
			'Düsseldorf'],
		explanation: 'In Aachen werden die Heiligtümer gelagert und präsentiert.'
	}, {
		question: 'Wo werden die Heiligtümer aufbewahrt?',
		solution: 'Marienschrein',
		falses: ['Karlsschrein',
			'Jesusschrein',
			'Dreikönigsschrein'
			],
		explanation: 'Im Marienschrein werden die Heiligtümer zwischen den Heiligtumsfahrten aufbewahrt. Nur alle sieben Jahre wird er geöffnet, um die Heiligtümer zu entnehmen und nach der Heiligtumsfahrt mit einem Schmuckschloss verschlossen.'
	}, {
		question: 'Welches Kleidungsstück Mariens liegt als Heiligtum in Aachen?',
		solution: 'ihr Kleid',
		falses: ['ihr Kopftuch',
			'ihre Hose',
			'ihr Shirt'],
		explanation: 'Im Marienschrein ist das Kleid Mariens aus der heiligen Nacht aufbewahrt.'
	}, {
		question: 'Was war die höchste Besucheranzahl bei der Heiligtumsfahrt?',
		solution: '1.000.000',
		falses: ['100.000',
			'5.000.000',
			'876'],
		explanation: 'Im Jahre 1937 waren 1.000.000 Besucher bei der Heiligtumsfahrt. Dies war in der gesamten Geschichte der Heiligtumsfahrt die größte Menge an Besuchern.'
	}, {
		question: 'Wie viele Einwohner hatte Aachen im 15. Jahrhundert ungefähr?',
		solution: '10.000',
		falses: ['245.000',
			'1.000',
			'131.000'],
		explanation: 'Im 15. Jahrhundert hatte Aachen ungefähr 10.000 Einwohner. Trotzdem kamen täglich rund 100.000 Pilger während der Heiligtumsfahrt in die Stadt.'
	}, {
		question: 'Wie wollten die Menschen im Mittelalter die Gnade und die Kraft der Heiligtümer einfangen?',
		solution: 'mit Spiegeln',
		falses: ['mit Keschern',
			'mit Fischernetzen',
			'gar nicht'],
		explanation: 'Die Menschen versuchten auf den Hausdächern stehend mit kleinen Spiegeln die Gnade und die Kraft der Heiligtümer einzufangen. So wollten sie mit den sogenannten Aachen-Spiegeln die Gnade und Kraft der Heiligtümer mit nach Hause nehmen.'
	}, {
		question: 'Wann wurde die Pfalzkapelle bzw. der Aachener Dom eingeweiht?',
		solution: '799',
		falses: ['1553',
			'328',
			'1004'],
		explanation: 'Die Pfalzkapelle wurde im Jahr 799 in Aachen eingeweiht.'
	}, {
		question: 'Welches Kleidungsstück Jesu wird als Heiligtum verehrt?',
		solution: 'Windeln',
		falses: ['Socken',
			'Unterhose',
			'Unterhemd'],
		explanation: 'Die Windeln Jesu werden als Heiligtum verehrt.'
	}, {
		question: 'Wessen Enthauptungstuch wird als Heiligtum verehrt?',
		solution: 'Johannes des Täufers',
		falses: ['Petrus',
			'Judas',
			'Stephanus'],
		explanation: 'Nach der Enthauptung Johannes des Täufers durch Herodes wurde mit dem Enthauptungstuch sein abgetrennter Kopf bedeckt.'
	}, {
		question: 'Wann soll Jesus das Lendentuch, das als Heiligtum verehrt wird, getragen haben?',
		solution: 'beim Tod am Kreuz',
		falses: ['bei der wunderbaren Brotvermehrung',
			'beim Sturm auf dem See',
			'bei der Hochzeit zu Kanaa'],
		explanation: 'Jesus hat das Ledentuch angeblich beim Tod am Kreuz getragen. Aufgrund dessen lassen sich auf dem Ledentuch auch Blutflecken erkennen.'
	}, {
		question: 'Welche Heiligtümer werden in Kornelimünster verehrt?',
		solution: 'das Schürztuch vom letzten Abendmahl, das Schweißtuch und das Grabtuch Jesu',
		falses: ['die Sandalen, der Umhang und der Stock von Petrus',
			'das Kopftuch, die Kette und der Gürtel Mariens',
			'der Rucksack vom Gang nach Betlehem, die Hose und der Hut von Josef'],
		explanation: 'Im nahegelegenen Kornelimünster werden das Schürztuch vom letzten Abendmahl, das Schweißtuch und das Grabtuch Jesu verehrt. Karl der Große soll sie einst als Geschenk aus Jerusalem erhalten haben.'
	}, {
		question: 'Wie kamen die Heiligtümer nach Aachen?',
		solution: 'als Geschenk für Kaiser Karl aus Jerusalem',
		falses: ['wurden zufällig in Aachen gefunden',
			'durch die Kreuzzüge',
			'auf dem weißen Elefanten'],
		explanation: 'Der Überlieferung nach erhielt Kaiser Karl die Reliquien um das Jahr 800 n. Chr. als Geschenk aus Jerusalem.'
	}, {
		question: 'Womit machten die Pilger Krach, wenn die Heiligtümer präsentiert wurden?',
		solution: 'mit Hörnern',
		falses: ['mit Trompeten',
			'mit Trommeln',
			'mit Posaunen'],
		explanation: 'Die Pilger haben mit Hörnern bei der Präsentation der Heiligtümer Krach gemacht und für Stimmung gesorgt.'
	}
		 ],
	emptyContainer: function () {
		var t = this;
		while (t.container.firstChild) {
			t.container.removeChild(t.container.firstChild);
		}
	},
	handleInput: function () {
		var t = this, 
			inputs = Array.from(t.container.getElementsByTagName("input")),
			selectedSolution = "";
		inputs.forEach(function (o) {
			if (o.checked) {
				selectedSolution = o.value;
			}
		});
		if (selectedSolution && t.currentQuestion) {
			t.currentChoices.push({
				a: selectedSolution,
				q: t.currentQuestion
			});
			t.play();
		}
		if (!t.currentQuestion) {
			t.play();
		}
	},
	init: function () {
		var t = this;
		t.container = document.getElementById("quiz");
		if (t.data.length && t.container) {
			t.container.addEventListener("submit", function (ev) {
				t.handleInput();
				ev.stopPropagation();
				ev.preventDefault();
				return false;
			});
			t.container.addEventListener("mouseup", function (ev) {
				var go = ev.target.tagName.match(/^button$/i);
				if (ev.target.tagName.match(/^label$/i) && t.currentQuestion) {
					go = true;
				}
				if (go) {
					window.setTimeout(function () {
						t.handleInput();
					}, 50);
					ev.stopPropagation();
					ev.preventDefault();
					return false;
				}
			});
			t.start();
		}
	},
	intoContainer: function (el, parentType) {
		var t = this,
			parent;
		if (!el) {
			return;
		}
		if (parentType) {
			parent = document.createElement(parentType);
			parent.appendChild(el);
		} else {
			parent = el;
		}
		t.container.appendChild(parent);
		return parent;
	},
	play: function () {
		var t = this,
			ol;
		if (!t.questions.length) {
			t.showResults();
			showScore();
			window.setTimeout(function () {
				t.start();
			}, 50);
			return;
		}
		t.currentQuestion = t.questions.shift();
		t.createOptions();
		$("#QuizPunkte").hide();
		$("#Highscore").hide();
	},
	questions: [],
	showResults: function () {
		var cat, ol, s, scores = {},
			t = this,
			tab, thead, tbody, tr;
		t.emptyContainer();
		t.intoContainer(t.createElement({
			tag: "p",
			text: "Du hast alle Fragen des Quiz beantwortet. Hier die Auswertung deiner Antworten:"
		}));
		ol = t.intoContainer(t.createElement({
			id: "result",
			tag: "ol"
		}));
		t.currentChoices.forEach(function (o) {
			var p, li = ol.appendChild(t.createElement({
				tag: "li"
			}));
			li.appendChild(t.createElement({
				className: "question",
				tag: "p", 
				text: " " + o.q.question
			}));
			p = li.appendChild(t.createElement({
				tag: "p",
				text: "Deine Antwort: "
			}));
			p.appendChild(t.createElement({
				className: (o.q.solution == o.a ? "correct" : "wrong"),
				tag: "em",
				text: o.a
			}));
			if (o.q.solution != o.a) {
				p = li.appendChild(t.createElement({
					tag: "p",
					text: "Die richtige Antwort wäre gewesen: "
				}));
				p.appendChild(t.createElement({
					tag: "em",
					text: o.q.solution
				}));
			}
			if (o.q.explanation) {
				p = li.appendChild(t.createElement({
					tag: "p",
					text: "Erläuterung: "
				}));
				p.appendChild(t.createElement({
					tag: "em",
					text: o.q.explanation
				}));
			}
		});
		
		// display a kind of percentual score over the categories
		cat = [];
		t.currentChoices.forEach(function (o) {
			if (!cat.includes(o.q.category)) {
				cat.push(o.q.category);
			}
		});
		cat.sort();
		cat.forEach(function (c) {
			t.currentChoices.forEach(function (o) {
				if (o.q.category == c) {
					num++;
					if (o.q.solution == o.a) {
						correct++;
					}
				}
			});
			scores[c] = Math.floor(100 * correct / num) + "%";
		});

		t.intoContainer(t.createElement({
			tag: "p",
			text: "Möchtest du das Quiz erneut spielen?"
		}));
	},
	shuffleArray: function (a) {
		var i = a.length;
		while (i >= 2) {
			var zi = Math.floor(Math.random() * i);
			var t = a[zi];
			a[zi] = a[--i];
			a[i] = t;
		}
	},
	start: function () {
		var t = this;
		t.questions = [];
		t.data.forEach(function (o) {
			t.questions.push(o);
		});
		t.shuffleArray(t.questions);
		t.currentChoices = [];
		t.currentQuestion = null;
		t.intoContainer(t.createElement({
			className: "startBtn",
			tag: "button",
			text: "Starte Quiz!"
		}), "p");
	}
};
document.addEventListener("DOMContentLoaded", function () {
	myQuiz.init();
});

function showScore(){
	$("#QuizPunktestand").text(correct);
	$("#QuizPunkte").fadeIn();
	if(highscore < correct){
		highscore = correct;
	}
	$("#HighscorePunktestand").text(highscore);
	$("#Highscore").fadeIn()
}