document.addEventListener('DOMContentLoaded', () => {
    const tracks = document.querySelectorAll('.track');
    const playButtons = document.querySelectorAll('i.fa-circle-play, i.fa-pause-circle');
    const audios = document.querySelectorAll('audio');

    function pauseAllTracks() {
        audios.forEach(audio => {
            audio.pause();
            audio.currentTime = 0;
            audio.volume = 1; // Remettre volume normal
        });
        playButtons.forEach(button => {
            button.classList.remove('fa-pause-circle');
            button.classList.add('fa-circle-play');
        });
    }

    function fadeOut(audio, button) {
        let fadeAudio = setInterval(() => {
            if (audio.volume > 0.1) {
                audio.volume -= 0.1;
            } else {
                audio.volume = 0;
                audio.pause();
                audio.currentTime = 0;
                audio.volume = 1; // Remettre volume pour la prochaine fois
                button.classList.remove('fa-pause-circle');
                button.classList.add('fa-circle-play');
                clearInterval(fadeAudio);
            }
        }, 100); // tous les 100ms, on baisse un peu
    }

    playButtons.forEach((button, index) => {
        const currentAudio = audios[index];

        button.addEventListener('click', () => {
            if (currentAudio.paused) {
                pauseAllTracks();
                currentAudio.play();
                button.classList.remove('fa-circle-play');
                button.classList.add('fa-pause-circle');
            } else {
                currentAudio.pause();
                button.classList.remove('fa-pause-circle');
                button.classList.add('fa-circle-play');
            }
        });

        currentAudio.addEventListener('timeupdate', () => {
            if (currentAudio.currentTime >= 29) { 
                // Dès 29s, on commence fade-out pour que à 30s tout soit stoppé
                fadeOut(currentAudio, button);
            }
        });

        currentAudio.addEventListener('ended', () => {
            button.classList.remove('fa-pause-circle');
            button.classList.add('fa-circle-play');
        });
    });
});