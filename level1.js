const next = document.querySelector("#next-button");
const popupResponse = document.querySelector("#pop-up");
const popupDiv = document.querySelector(".pop-up-wrapper");
const bgWrapper = document.querySelector(".bg-wrapper");
const cubes = document.querySelectorAll(".cubes");

const spriteResponse = ['The spirits of darkness are near. can you feel them?','Help me to reach out the treasure'];

const gameEndResponse = ['congratulations! you have successfully completed this level 1.'];


let click = 0, track = 0;

next.addEventListener("click", sResponse);
bgWrapper.addEventListener("click", validate);


function sResponse()
{
  click++;
  popupResponse.innerHTML = spriteResponse[click];
  if(click == 2)
    {
      popupDiv.style.display = "none";
      for(i=0; i<cubes.length; i++)
        {
      cubes[i].style.display = "flex";
        }
    }
}

function validate(event)
{
  //track how many time correct elem is selected
  if(event.target.id != "spirit-sprites")
    {
      alert("wrong");
    } else {
      track++;
       event.target.style.background = "var(--green)"
      if(track == 1)
        {
          endGame();
        }
    }
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
    alert("Hint1:   " + hint);
  }
}
function endGame()
{
  let click = 0;
  popupDiv.style.display = "flex";
  popupResponse.innerHTML = gameEndResponse;
  next.innerHTML = "Done";
  next.addEventListener("click", function(){
    popupResponse.innerHTML = "Now you can get the clue!!!";
    next.innerHTML = "Level 1 Done";
    

    displayHint(1);
    window.location.href = "HH1.html";
  })
}

 

