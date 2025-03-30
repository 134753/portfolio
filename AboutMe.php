<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Levy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .holo {
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: linear-gradient(60deg, rgba(255,255,255,0.1) 0%, rgba(0,255,255,0.2) 50%, rgba(255,0,255,0.1) 100%);
            opacity: 0.6;
            mix-blend-mode: overlay;
            animation: holoMove 2s infinite linear;
            display: none;
        }
        @keyframes holoMove {
            0% { transform: rotate(0deg) translateX(0px); }
            50% { transform: rotate(10deg) translateX(20px); }
            100% { transform: rotate(0deg) translateX(0px); }
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
<header class="flex justify-between items-center px-10 py-5">
        <img class="h-[170px]" src="assets/Yellow_Black_Modern_Bulb_Tech_Logo_Design-2-removebg-preview.png" alt="Logo">
        <div class="flex flex-col items-end">
            <a href="assets/mon_cv.pdf" target="_blank" 
            class="mb-4 bg-[#15BFA3] text-black py-2 px-6 rounded-lg font-bold hover:bg-[#13a38c] transition">
                Mon CV
            </a>
            <nav>
                <ul class="flex space-x-5">
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md text-[#15BFA3] hover:bg-[#15BFA3] hover:text-white">
                        <a href="index.php">Mon Portfolio</a>
                    </li>
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md bg-[#15BFA3] text-black hover:bg-[#15BFA3] hover:text-white">
                        <a href="AboutMe.php">Qui suis-je ?</a>
                    </li>
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md text-[#15BFA3] hover:bg-[#15BFA3] hover:text-white">
                        <a href="Contact.php">Me contacter</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="flex mb-32">
        <div class=" w-[60%] ml-[20px] pr-[30px]">
            <h1 class="mt-8 text-[38px] text-[#15BFA3]">Là !  C’est vraiment moi, Lévy !</h1>
            <p class="mt-4">En dehors du développement, je suis passionné par la musique, le football, le gaming et la lecture. J’adore découvrir de nouveaux sons, suivre l’actualité footballistique, me plonger dans un bon livre ou passer du temps sur des jeux vidéo immersifs. Chacune de ces passions m’apporte quelque chose de différent : la créativité, l’esprit d’équipe, la réflexion et le sens du détail.
            Côté personnalité, je suis quelqu’un de rigoureux, une qualité que j’ai développée durant mes années passées dans une école militaire au cours de mon cursus secondaire. Cette expérience m’a appris la discipline, l’organisation et l’importance du travail bien fait. Mais je suis aussi quelqu’un d’adaptable : ayant vécu dans trois pays différents, j’ai appris à m’intégrer rapidement, à comprendre mon environnement et à m’ajuster aux nouvelles situations avec aisance.
            C’est cette combinaison de rigueur et de flexibilité qui me permet aujourd’hui d’aborder le développement web avec sérieux tout en gardant un esprit ouvert et créatif. Toujours prêt à apprendre et à relever de nouveaux défis, je suis enthousiaste à l’idée de découvrir de nouvelles expériences, autant professionnelles que personnelles !</p>
        </div>
        <div id="card" class="relative w-72 h-[380px] hover:rounded-xl rounded-xl overflow-hidden shadow-xl transition-transform duration-300 ease-out bg-center flex flex-col items-center p-4 ml-28" style="background-image: url('https://via.placeholder.com/300x420')">
            <div class="w-52 h-52 bg-[#15BFA3] flex justify-center items-center rounded-xl opacity-90">
                <img class="mt-4 w-full h-full object-cover rounded-lg" src="assets/IMG_5064-removebg-preview.png" alt="">
            </div>
            <div class="text-center mt-4">
                <h3 class="text-lg font-semibold italic">NYAMSI Lévy</h3>
                <h6 class="italic text-[#15BFA3] text-base">Développeur Web</h6>
                <p class="text-sm text-gray-200 mt-2">“La vie est courte, mais assez longue pour que l'on en fasse quelque chose.”</p>
            </div>
            <div class="holo rounded-xl"></div>
        </div>

    </section>
    <section class="text-center">
        <h2 class="text-[28px] text-[#15BFA3]">Mon univers muscial</h2>
        <div class="flex mt-8 w-[80%] bg-gray-900 border border-gray-900 w-[600px] mx-auto shadow-xl shadow-black rounded-xl pb-4">
            <div class="w-[45%] mt-4 pt-4">
                <h4 class="ml-5 text-[24px] text-[#15BFA3]">Mon top 3 du moment !</h4>
                <div class="flex ml-10 mt-5 p-4 bg-blue-900 border border-blue-900 rounded-xl">
                    <img class="w-[60px] shadow-md shadow-black"src="assets/uknow.jpeg" alt="">
                    <div class="mt-6 ml-4 relative">
                        <h6 class="text-[16px] ">Rodeo drive</h6>
                        <p class="text-[10px] mr-4">Leto & Hamza</p>
                    </div>
                    <button class=" flex text-[13px] text-white border border-white hover:bg-white hover:text-blue-900 rounded-md p-[6px] ml-[39%] mt-8"><a href="#">ecouter</a></button>
                </div>
                <div class="flex ml-10 mt-6 p-4 bg-[#865D3F] border border-[#865D3F] rounded-xl">
                    <img class="w-[60px] shadow-md shadow-black"src="assets/Unknown.jpeg" alt="">
                    <div class="mt-6 ml-4 relative">
                        <h6 class="text-[16px] mr-6">Chaque jour</h6>
                        <p class="text-[10px] ">Tarik Azzouz & Zequin</p>
                    </div>
                    <button class=" flex text-[13px] text-white border border-white hover:bg-white hover:text-[#865D3F] rounded-md p-[6px] ml-[32%] mt-8"><a href="#">ecouter</a></button>
                </div>
                <div class="flex ml-10 mt-6 p-4 bg-white border border-white rounded-xl text-black">
                    <img class="w-[60px] shadow-md shadow-black"src="assets/bbJacques.jpeg" alt="">
                    <div class="mt-6 ml-4 relative">
                        <h6 class="text-[16px] mr-12">Extramilles</h6>
                        <p class="text-[10px] ">BB Jacques & Jolagreen23</p>
                    </div>
                    <button class=" flex text-[13px] border border-black hover:bg-black hover:text-white rounded-md p-[6px] ml-[28%] mt-8"><a href="#">ecouter</a></button>
                </div>
            </div>
            <div class="mt-6 ml-[25%]">
                <h4 class="mt-2 text-[24px] text-[#15BFA3]">Ma playlist</h4>
                <img class="mt-5 h-[340px] shadow-md shadow-black ml-4" src="assets/IMG_5057.PNG" alt="">
                <button class=" flex text-[13px] text-white border border-white hover:bg-white hover:text-black rounded-md p-[6px] w-[70%] ml-8 mt-8  "><a href="#">Voulez-vous découvrir ?</a></button>
            </div>
        </div>
    </section>
    <section class="text-center mt-10">
        <h2 class="text-[28px] text-[#15BFA3]">Mode gaming</h2>
        <div class="flex justify-center gap-6">
            <!-- Jeu 1 -->
            <div class="bg-gray-900 border border-gray-900 w-[250px] h-[350px] shadow-xl shadow-black rounded-xl p-4">
                <img class="h-[180px] w-full object-cover rounded-lg mb-3" src="assets/FRC25.jpeg" alt="Elden Ring">
                <h4 class="text-[#15BFA3] text-lg">FC25</h4>
                <p class="text-sm">Je joue principalement en Club Pro, un mode où la coordination et le jeu d’équipe sont essentiels pour gravir les divisions.</p>
            </div>
            <!-- Jeu 2 -->
            <div class="bg-gray-900 border border-gray-900 w-[250px] h-[350px] shadow-xl shadow-black rounded-xl p-4">
                <img class="h-[180px] w-full object-cover rounded-lg mb-3" src="assets/GTAV.jpeg" alt="FIFA 24">
                <h4 class="text-[#15BFA3] text-lg">GTA V</h4>
                <p class="text-sm">En mode libre ou sur des braquages en ligne, j’apprécie la liberté et les possibilités infinies qu’offre GTA 5.</p>
            </div>
            <!-- Jeu 3 -->
            <div class="bg-gray-900 border border-gray-900 w-[250px] h-[350px] shadow-xl shadow-black rounded-xl p-4">
                <img class="h-[180px] w-full object-cover rounded-lg mb-3" src="assets/watchdog.jpeg" alt="The Witcher 3">
                <h4 class="text-[#15BFA3] text-lg">Watch dogs legion</h4>
                <p class="text-sm">J’aime l’aspect infiltration et hacking du jeu, avec la liberté de recruter et incarner n’importe quel personnage pour mener à bien mes missions.</p>
            </div>
        </div>
    </section>
    <footer class="text-center border border-black mt-14 p-8">
        <p>©By NYAMSI Lévy</p>
    </footer>
    <script>
        const card = document.getElementById("card");
        const holo = document.querySelector(".holo");
        
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
    </script>
</body>
</html>