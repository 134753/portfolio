
    const clientId = '5e09807d1b084b76bbaa71143c2ba490';
    const clientSecret = 'ca316460fc4140a98d49d98a3fa3e2ae';
  
    let accessToken = "";

// Obtenir le token d'accès Spotify
async function getAccessToken() {
    const result = await fetch("https://accounts.spotify.com/api/token", {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Authorization': 'Basic ' + btoa(clientId + ':' + clientSecret)
        },
        body: 'grant_type=client_credentials'
    });
    const data = await result.json();
    accessToken = data.access_token;
}

// Chercher la préview d'un morceau
async function searchTrackAndPlayPreview(trackName) {
    if (!accessToken) {
        await getAccessToken();
    }

    const response = await fetch(`https://api.spotify.com/v1/search?q=${encodeURIComponent(trackName)}&type=track&limit=1`, {
        headers: {
            'Authorization': 'Bearer ' + accessToken
        }
    });

    const data = await response.json();
    if (data.tracks.items.length > 0) {
        const previewUrl = data.tracks.items[0].preview_url;
        if (previewUrl) {
            playAudio(previewUrl);
        } else {
            alert('Pas d\'extrait audio disponible pour ce morceau 😔');
        }
    } else {
        alert('Morceau non trouvé sur Spotify ❌');
    }
}

let currentAudio = null;

// Jouer le son
function playAudio(url) {
    if (currentAudio) {
        currentAudio.pause();
        currentAudio = null;
    }

    currentAudio = new Audio(url);
    currentAudio.play();

    // Bonus : ajoute un effet visuel pendant la lecture
    const playingIcon = document.querySelector(".playing");
    if (playingIcon) {
        playingIcon.classList.remove("playing");
    }
    if (currentPlayingElement) {
        currentPlayingElement.classList.remove("animate-pulse");
    }

    if (currentClickedIcon) {
        currentClickedIcon.classList.add("animate-pulse");
        currentPlayingElement = currentClickedIcon;
    }
}

let currentClickedIcon = null;
let currentPlayingElement = null;

// Quand on clique sur un bouton lecture
document.querySelectorAll('.fa-circle-play').forEach(button => {
    button.addEventListener('click', async (e) => {
        e.preventDefault();
        const track = button.getAttribute('data-track');
        currentClickedIcon = button;
        await searchTrackAndPlayPreview(track);
    });
});
