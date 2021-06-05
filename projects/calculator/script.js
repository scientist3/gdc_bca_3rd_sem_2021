//alert("Thanks for 250+ Likes 👍🏻😊😀☺️");
function v() {
	try {
		navigator.vibrate();
	} catch (bi) {}
}

function uv() {
	try {
		navigator.vibrate(100);
	} catch (biu) {}
}

function del() {
	var e = document.getElementById("screen").innerHTML;
	(y = document.getElementById("screen2").innerHTML),
		(document.getElementById("screen").innerHTML = e.substring(
			0,
			e.length - 1
		)),
		(document.getElementById("screen2").innerHTML = y.substring(
			0,
			y.length - 1
		));
	if (y.length == 1) {
		$("#screen2").html("00.00");
	}
}

$(function () {
	// alert(
	// 	"Please one Like? 😊👍🏻🙏🏻\n What's new? \nversion 3.0 \n*Keypress Vibration added!\n*Delete  key added\n*Syntax Error Detection\n*Screen layout fixed \n*Other Bug Fixed"
	// ),
	$("#screen").html(" "),
		$("#calcButtone").html(window.atob("QWFtaXIgQmFzaGly")),
		$("#screen2").html("00.00"),
		$("#calcBody").hide(),
		$("#calcBody").fadeIn(3e3);
	var t = 0;
	(op = ""),
		$("#1").click(function () {
			$("#screen").append("1"), v();
		}),
		$("#2").click(function () {
			$("#screen").append("2"), v();
		}),
		$("#3").click(function () {
			$("#screen").append("3"), v();
		}),
		$("#4").click(function () {
			$("#screen").append("4"), v();
		}),
		$("#5").click(function () {
			$("#screen").append("5"), v();
		}),
		$("#6").click(function () {
			$("#screen").append("6"), v();
		}),
		$("#7").click(function () {
			$("#screen").append("7"), v();
		}),
		$("#8").click(function () {
			$("#screen").append("8"), v();
		}),
		$("#9").click(function () {
			$("#screen").append("9"), v();
		}),
		$("#0").click(function () {
			$("#screen").append("0"), v();
		}),
		$("#st").click(function () {
			$("#screen").append("("), v();
		}),
		$("#ed").click(function () {
			$("#screen").append(")"), v();
		}),
		$("#equal").click(function () {
			var x = document.getElementById("screen").innerText;
			try {
				(x = eval(x)),
					(document.getElementById("screen2").innerHTML = "Ans:" + x),
					uv();
			} catch (e) {
				(document.getElementById("screen2").innerHTML =
					"<font color=red>Syntax Error</font>"),
					uv();
			}
		}),
		$("#point").click(function () {
			$("#screen").append("."), v();
		}),
		$("#plus").click(function () {
			$("#screen").append("+"), v();
		}),
		$("#minus").click(function () {
			$("#screen").append("-"), v();
		}),
		$("#x").click(function () {
			$("#screen").append("*"), v();
		}),
		$("#div").click(function () {
			$("#screen").append("/"), v();
		}),
		$("#ac").click(function () {
			$("#screen").html("");
			$("#screen2").html("00.00");
			var value2 = eval($("#screen").innerTexT);
			$("#screen2").html(eval()), v();
		});
});
