// Card rotation et ombre
const card = document.getElementById("card");
const holo = document.querySelector(".holo");

if (card && holo) {
    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        const shadowX = (centerX - x) / 5;
        const shadowY = (y - centerY) / 5;

        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        card.style.boxShadow = `${-shadowX}px ${shadowY}px 30px rgba(21, 191, 163, 0.5)`;
        holo.style.display = "block";
    });

    card.addEventListener("mouseleave", () => {
        card.style.transition = "transform 0.5s ease-out, box-shadow 0.5s ease-out";
        card.style.transform = "rotateX(0deg) rotateY(0deg)";
        card.style.boxShadow = "0 10px 30px rgba(21, 191, 163, 0.5)";
        holo.style.display = "none";
    });
}

// Scroll du carousel
function scrollCarousel(direction) {
    const carousel = document.getElementById('carousel');
    const screenWidth = window.innerWidth;
    if (carousel) {
        carousel.scrollBy({
            left: direction * screenWidth,
            behavior: 'smooth'
        });
    }
}

// Gestion des Modales
function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = "hidden"; // bloque le scroll arrière-plan
    }
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = "auto"; // rétablit le scroll
    }
}

// Fermer les modales au clic hors contenu
document.querySelectorAll('[id^="modal"]').forEach(modal => {
    modal.addEventListener('click', function (e) {
        if (e.target === this) {
            this.classList.add('hidden');
            this.classList.remove('flex');
            document.body.style.overflow = "auto";
        }
    });
});

// Fermer les modales avec la touche Escape
document.addEventListener('keydown', function (e) {
    if (e.key === "Escape") {
        document.querySelectorAll('[id^="modal"]').forEach(modal => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
        document.body.style.overflow = "auto";
    }
});

// Slider automatique horizontal
const slider = document.getElementById("slider");
let position = 0;

function scrollSlider() {
    if (slider) {
        position -= 1;
        if (Math.abs(position) >= slider.scrollWidth / 2) {
            position = 0;
        }
        slider.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(scrollSlider);
    }
}

scrollSlider();

// Simulation du chargement
setTimeout(() => {
    document.getElementById('skeleton').classList.add('hidden');
    document.getElementById('real-content').classList.remove('hidden');
}, 2000); // après 2 secondes

