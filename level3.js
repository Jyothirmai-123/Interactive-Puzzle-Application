const questions = [  { question: "If you see one flying around, you'd better be careful at night, as some turn into vampires and will give your neck a big bite. What are they?",    answer: "Bats",    hint: "It's a cricketer's need"  }, 
 {    question: "A zombie, a mummy and a ghost bought a house. It has all the usual rooms except for one. What room won't you find?",    answer: "living room",    hint: "It consists of 2 words. First word is the antonym for non-living and the second word is in the question itself."  }, 
{    question: "This place has hardly any lights, but a lot of creaking floors. There are all kinds of strange noises and some random slamming doors. What is it?",    answer: "Haunted house",    hint: "It's something which you had seen when you started this game"  },  
{    question: "Some people believe in me and others don't. At night I roam around and sometimes I float. If you hear a troubled noise coming from the ground, go run and hide from my creepy sound. What am I?",    answer: "ghost",    hint: "It's an evil spirit" }];
const popupDiv = document.querySelector(".pop-up-wrapper");
let currentQuestion = 0;

const questionEl = document.querySelector('.question');
const answerEl = document.querySelector('#answer');
const hintEl = document.querySelector('.hint');

function displayQuestion() {
  questionEl.textContent = questions[currentQuestion].question;
}
var hints = [
  "This is a phenomenon that occurs when a substance reacts with oxygen and releases heat and light.",
"It can be dangerous and destructive if not properly controlled.",
"It spreads rapidly and can consume almost anything in its path.",
"It is a symbol of passion, transformation, and renewal in many cultures.",
"It is often used for cooking, warmth, and illumination.",
];

// Function to display the hint for the current level
function displayHint(level) {
  var hintIndex = level - 1; // Array index starts from 0
  var hint = hints[hintIndex];
  if (hint) {
    alert("Hint3: " + hint);
    	window.location.href = "HH3.html";
    
   
  }
}
function checkAnswer() {
  const answer = answerEl.value.trim().toLowerCase();
  if (answer === questions[currentQuestion].answer.toLowerCase()) {
    alert("Correct!");
    currentQuestion++;
    if (currentQuestion < questions.length) {
      displayQuestion();
    } else {
      alert("Congratulations! You've answered all the questions!");
    displayHint(3);
    
    }
  } else {
    hintEl.textContent = questions[currentQuestion].hint;
    hintEl.style.display = "block";
  }
}

displayQuestion();
