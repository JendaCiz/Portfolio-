var bugElement = document.getElementById('bug');
var scoreElement = document.getElementById('score');
var messageElement = document.getElementById('message');
var windowWidth = window.innerWidth; 
var windowHeight = window.innerHeight; 
var score = 0;
var clickSound = document.getElementById('clickSound');
var bugsRemoved = 0;

function moveBug() {
  var randomX = Math.random() * (windowWidth - 50); 
  var randomY = Math.random() * (windowHeight - 50); 

  bugElement.style.transform = `translate(${randomX}px, ${randomY}px)`;
}

function increaseScore() {
  score++;
  scoreElement.textContent = score;
  bugElement.style.display = 'none'; 
  clickSound.currentTime = 0; 
  clickSound.play(); 

  bugsRemoved++;
  messageElement.textContent = `Congratulations, you removed ${bugsRemoved} bug${bugsRemoved === 1 ? '' : 's'}!`;

  setTimeout(function() {
    bugElement.style.display = 'block'; 
    moveBug(); 
  }, 1000);
}

bugElement.addEventListener('click', increaseScore);


setInterval(moveBug, 500);



