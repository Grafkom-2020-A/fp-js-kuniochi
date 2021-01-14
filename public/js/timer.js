const startingMinutes = 25;
let time = startingMinutes * 60;

const countdownEl = document.getElementById('countdown');

setInterval(updateCountdown, 1000);

function updateCountdown(){
    const minutes = Math.floor(time/60);

    let minutesDisp = minutes < 10 ? '0' + minutes : minutes;

    let seconds = time % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;

    countdownEl.innerHTML = `${minutesDisp} : ${seconds}`
    time--;

    time = time < 0 ? 0 : time; 
}