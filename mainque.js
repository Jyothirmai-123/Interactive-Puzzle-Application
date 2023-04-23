function checkAnswer() {
	var answer = document.getElementById("answer").value;
	if (answer.toLowerCase() === "fire") {
		//document.getElementById("result").innerHTML = "Correct!";
		window.location.href="Congrats.php";
	} else {
		document.getElementById("result").innerHTML = "Incorrect";
	}
}
