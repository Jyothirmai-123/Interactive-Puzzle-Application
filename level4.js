'use strict';

// gets a random number (1-20)
let randomNumber = Math.trunc(Math.random()*20) + 1;
let score = 20;
//let highScore = 0;

const checkEl = document.querySelector(".check");
const guessEl = document.querySelector(".guess");
const messageEl = document.querySelector(".message");
const scoreEl = document.querySelector(".score");
const bodyEl = document.querySelector("body");
const numberEl = document.querySelector(".number");
const againEl = document.querySelector(".again");
const highScoreEl = document.querySelector(".highscore");

const displayMessage = function(message) {
  messageEl.textContent = message;
}

checkEl.addEventListener("click", function(){
  const guess = Number(guessEl.value);
  
  // When there is no input
  if (!guess) {
    displayMessage("No Number!");

  // When player wins
  } else if (guess === randomNumber) {
    displayMessage("Correct Number!");
    numberEl.textContent = randomNumber;
    bodyEl.style.backgroundColor = "#60b347";
    numberEl.style.width = "30rem";
    alert("Congrats,your guess is correct!!!")
    alert("Hint4:   It is a symbol of passion, transformation, and renewal in many cultures.");
    window.location.href = "HH4.html";
    if(score > highScore) {
      highScore = score;
      highScoreEl.textContent = highScore;
    }

  // When guess is wrong
  } else if (guess != randomNumber) {
    if (score > 1) {
      displayMessage((guess > randomNumber) ? "Too high!" : "Too low");
      score--;
      scoreEl.textContent = score;
    } else {
      displayMessage("You lost the game!");
      scoreEl.textContent = 0;
    }
  }
});

againEl.addEventListener("click", function(){
  score = 20;
  randomNumber = Math.trunc(Math.random()*20) + 1;

  messageEl.textContent = "Start guessing...";
  numberEl.textContent = "?";
  scoreEl.textContent = score;
  guessEl.value = "";

  bodyEl.style.backgroundColor = "#222";
  numberEl.style.width = "15rem";
});