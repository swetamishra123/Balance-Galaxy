<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Catch The Insect</title>
    <style>
       
        @import url('https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap');

        @import url('https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap');

* {
  box-sizing: border-box;
}

body {
  background-color: #516dff;
  color: #fff;
  font-family: 'Press Start 2P', sans-serif;
  height: 100vh;
  overflow: hidden;
  margin: 0;
  text-align: center;
}

a {
  color: #fff;
}

h1 {
  line-height: 1.4;
}

.btn {
  border: 0;
  background-color: #fff;
  color: #516dff;
  padding: 15px 20px;
  font-family: inherit;
  cursor: pointer;
}

.btn:hover {
  opacity: 0.9;
}

.btn:focus {
  outline: 0;
}

.screen {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100vw;
  transition: margin 0.5s ease-out;
}

.screen.up {
  margin-top: -100vh;
}

.insects-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  list-style-type: none;
  padding: 0;
}

.insects-list li {
  margin: 10px;
}

.choose-insect-btn {
  background-color: transparent;
  border: 2px solid #fff;
  color: #fff;
  cursor: pointer;
  font-family: inherit;
  width: 150px;
  height: 150px;
}

.choose-insect-btn:hover {
  background-color: #fff;
  color: #516dff;
}

.choose-insect-btn:active {
  background-color: rgba(255, 255, 255, 0.7);
}

.choose-insect-btn img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}

.game-container {
  position: relative;
}

.time,
.score {
  position: absolute;
  top: 20px;
}

.time {
  left: 20px;
}

.score {
  right: 20px;
}

.message {
  line-height: 1.7;
  background-color: rgba(0, 0, 0, 0.5);
  width: 100%;
  padding: 20px;
  z-index: 100;
  text-align: center;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -150%);
  transition: transform 0.4s ease-in;
}

.message.visible {
  transform: translate(-50%, 150%);
  opacity: 1;
}

.insect {
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  height: 100px;
  position: absolute;
  transform: translate(-50%, -50%) scale(1);
  transition: transform 0.3s ease-in-out;
}

.insect.caught {
  transform: translate(-50%, -50%) scale(0);
}

.insect img {
  width: 100px;
  height: 100px;
}
    </style>
</head>
<body>
    <div class="screen">
        <h1>Catch The Insect</h1>
        <button class="btn" id="start-btn">Play Game</button>
    </div>

    <div class="screen">
        <h1>What is your "favorite" insect?</h1>
        <ul class="insects-list">
            <li>
                <button class="choose-insect-btn">
                    <p>Fly</p>
                    <img src="http://pngimg.com/uploads/fly/fly_PNG3946.png" alt="fly">
                </button>
            </li>
            <li>
                <button class="choose-insect-btn">
                    <p>Mosquito</p>
                    <img src="http://pngimg.com/uploads/mosquito/mosquito_PNG18175.png" alt="mosquito" />
                </button>
            </li>
            <li>
                <button class="choose-insect-btn">
                    <p>Spider</p>
                    <img src="http://pngimg.com/uploads/spider/spider_PNG12.png" alt="spider" />
                </button>
            </li>
            <li>
                <button class="choose-insect-btn">
                    <p>Roach</p>
                    <img src="http://pngimg.com/uploads/roach/roach_PNG12163.png" alt="roach" />
                </button>
            </li>
        </ul>
    </div>

    <div class="screen game-container" id="game-container">
        <h3 id="time" class="time">Time: 00:00</h3>
        <h3 id="score" class="score">Score: 0</h3>
        <h5 id="message" class="message">
            Are you annoyed yet? <br>
            You are playing an impossible game!!
        </h5>
    </div>

    <script>
        const screens = document.querySelectorAll('.screen');
const choose_insect_btns = document.querySelectorAll('.choose-insect-btn');
const start_btn = document.getElementById('start-btn')
const game_container = document.getElementById('game-container')
const timeEl = document.getElementById('time')
const scoreEl = document.getElementById('score')
const message = document.getElementById('message')
let seconds = 0
let score = 0
let selected_insect = {}

start_btn.addEventListener('click', () => screens[0].classList.add('up'))

choose_insect_btns.forEach(btn => {
    btn.addEventListener('click', () => {
        const img = btn.querySelector('img')
        const src = img.getAttribute('src')
        const alt = img.getAttribute('alt')
        selected_insect = { src, alt }
        screens[1].classList.add('up')
        setTimeout(createInsect, 1000)
        startGame()
    })
})

function startGame() {
    setInterval(increaseTime, 1000)
}

function increaseTime() {
    let m = Math.floor(seconds / 60)
    let s = seconds % 60
    m = m < 10 ? `0${m}` : m
    s = s < 10 ? `0${s}` : s
    timeEl.innerHTML = `Time: ${m}:${s}`
    seconds++
}

function createInsect() {
    const insect = document.createElement('div')
    insect.classList.add('insect')
    const { x, y } = getRandomLocation()
    insect.style.top = `${y}px`
    insect.style.left = `${x}px`
    insect.innerHTML = `<img src="${selected_insect.src}" alt="${selected_insect.alt}" style="transform: rotate(${Math.random() * 360}deg)" />`

    insect.addEventListener('click', catchInsect)

    game_container.appendChild(insect)
}

function getRandomLocation() {
    const width = window.innerWidth
    const height = window.innerHeight
    const x = Math.random() * (width - 200) + 100
    const y = Math.random() * (height - 200) + 100
    return { x, y }
}

function catchInsect() {
    increaseScore()
    this.classList.add('caught')
    setTimeout(() => this.remove(), 2000)
    addInsects()
}

function addInsects() {
    setTimeout(createInsect, 1000)
    setTimeout(createInsect, 1500)
}

function increaseScore() {
    score++
    if(score > 19) {
        message.classList.add('visible')
    }
    scoreEl.innerHTML = `Score: ${score}`
}
    </script>
</body>
</html>
