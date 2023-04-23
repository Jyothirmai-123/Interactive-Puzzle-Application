let btn = document.querySelector(".button");
let soundHorror = document.querySelector(".soundHorror");
let scaryImg = document.querySelector(".scary-img")
let missSound = document.querySelector(".missSound");
let hitSound = document.querySelector(".hitSound");
let backgroundMusic = document.querySelector(".backgroundMusic");
let width = window.innerWidth;
let height = window.innerHeight;


let checkIfClicked = false;

let counter = 0;
let speed = 0;
let backs = [
    "https://assets.codepen.io/1651485/hello1.png",
    "https://assets.codepen.io/1651485/hello2.png",
    "https://assets.codepen.io/1651485/hello3.png",
    "https://assets.codepen.io/1651485/hello4.png",
    "https://assets.codepen.io/1651485/hello5.png"
];
var hints = [
    "Look for hidden paths",
    "Use the double jump to reach high places",
    "Remember to save your progress often"
  ];
  
  // Function to display the hint for the current level
  
btn.addEventListener("click", () => {
    counter++;
    speed++;
    checkIfClicked = true;

    hitSound.play();
    hitSound.volume = 0.1;
  
    console.log('tu sam');

    document.querySelector(".hits-val").innerHTML = counter;
    if (counter % 2 == 0) {
        // btn.style.transform = `scale(${1.8 / counter})`;
        for (let i = 0; i < 25; i++) {
            var img = document.createElement("img");
            img.style.top = Math.floor(Math.random() * height + 1) + "px";
            img.style.left = Math.floor(Math.random() * width + 1) + "px";
            
            img.src = backs[Math.floor(Math.random() * 4)];
            document.body.appendChild(img);
        }
    }

    if (counter == 7) {
        alert("Boo!!! You lost as you didn't hit 10 times");
        alert("Hint2:   It can be dangerous and destructive if not properly controlled.")
        
            window.location.href = "DD1.html";
    
            
       }
});
function hide(){
    scaryImg.style.display = "none";
    soundHorror.pause();
}
// Button Moving 

let h = setInterval(function () {
    btn.style.top = Math.floor(Math.random() * height + 1) + "px";
    btn.style.left = Math.floor(Math.random() * width + 1) + "px";
}, 1000);

document.querySelector(".btn").addEventListener("click", () => {
    document.querySelector(".modal").style.display = "none";
    backgroundMusic.play();
    backgroundMusic.volume = 0.15;
});

