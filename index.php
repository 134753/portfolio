<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Levy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md bg-[#15BFA3] text-black hover:bg-[#15BFA3] hover:text-white">
                        <a href="index.php">Mon Portfolio</a>
                    </li>
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md text-[#15BFA3] hover:bg-[#15BFA3] hover:text-white">
                        <a href="AboutMe.php">Qui suis-je ?</a>
                    </li>
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md text-[#15BFA3] hover:bg-[#15BFA3] hover:text-white">
                        <a href="Contact.php">Me contacter</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="flex">
        <div class=" w-[60%] ml-[20px] pr-[30px]">
            <h1 class="mt-8 text-[38px] text-[#15BFA3]">Hello !  Moi c’est Lévy !</h1>
            <p class="mt-4">Un jeune développeur web passionné par le code et le design. Pour moi, le développement, ce n’est pas juste écrire des lignes de code : c’est créer des expériences fluides, accessibles et impactantes. J’aime concevoir des interfaces intuitives et optimiser des fonctionnalités pour qu’elles soient aussi performantes que plaisantes à utiliser.<br>
            Actuellement en formation Developpement Web & Mobile à Epitech,  je cherche une alternance à partir de septembre 2025 pour continuer à apprendre et évoluer au sein d’une équipe motivante. J’aime les environnements dynamiques, le travail en équipe et surtout, résoudre des problèmes de manière créative.</p>
            <h3 class="mt-5 text-[#15BFA3]">Voici les techos que j’utilise :</h3>
            <div class="mt-20 flex">

            </div>
            <h4 class="mt-10 text-[#15BFA3]">Je suis bien sure ouvert à decouvir de nouvelles technos.</h4>
        </div>
        <div id="card" class="relative w-72 h-[380px] hover:rounded-xl rounded-xl overflow-hidden shadow-xl transition-transform duration-300 ease-out bg-center flex flex-col items-center p-4 ml-28" style="background-image: url('https://via.placeholder.com/300x420')">
            <div class="w-52 h-52 bg-[#15BFA3] flex justify-center items-center rounded-xl">
                <img class="w-full h-full object-cover rounded-xl" src="assets/deffc199-785e-41a6-a1eb-942bebc1dc7d-removebg-preview.png" alt="">
            </div>
            <div class="text-center mt-4">
                <h3 class="text-lg font-semibold italic">NYAMSI Lévy</h3>
                <h6 class="italic text-[#15BFA3] text-base">Développeur Web</h6>
                <p class="text-sm text-gray-200 mt-2">“Un bon design est invisible. Mais un mauvais, on ne voit que ça.”</p>
            </div>
            <div class="holo rounded-xl"></div>
        </div>

    </section>
    <section class="mt-20 text-center">
        <h2 class="text-[28px] text-[#15BFA3]">Mes projets</h2>
        <div class="flex flex-wrap mt-10">
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-4 pt-10">
                <h4 class="text-[#15BFA3] text-lg mb-10">Mini-blog Real Madrid (Projet personnel)</h4>
                <div class="flex ml-4">
                    <p class="w-[70%] mt-8 ml-12 text-[14px]items-center">Création d’un site web d’actualité sur le Real Madrid en HTML et CSS, avec une mise en page responsive et structurée pour une lecture fluide. Ce projet m’a permis de maîtriser les bases du développement web et du design d’interface. </p>
                    <div class="">
                        <img class="h-[160px]" src="assets/fa4f0db883d36fbfcfe76c06d9012be0-removebg-preview.png" alt="">
                    </div>
                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mt-20"><a target="_blank" href="https://github.com/134753/my_first_site">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
            </div>
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-4 pt-10 mb-20">
                <h4 class="text-[#15BFA3] text-lg mb-5 items-center">Reproduction d’une maquette responsive (Projet scolaire)</h4>
                <div class="flex ml-4">
                    <p class="w-[70%] mt-8  text-[14px]">Un exercice de précision où j’ai reproduit fidèlement une maquette en HTML, CSS et JavaScript en une semaine. L’objectif était d’assurer un design pixel-perfect tout en garantissant une expérience fluide sur tous les écrans. Ce projet m’a permis d’affiner mes compétences en CSS Grid/Flexbox, media queries et animations en JavaScript.</p>
                    <div class="">
                        <img class="h-[260px] w-[120px] ml-2 shadow-xl shadow-black" src="assets/screenshot_2.png" alt="">
                    </div>
                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mb-12"><a href="#">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
            </div>
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-4 pt-10">
                <h4 class="text-[#15BFA3] text-lg mb-10">Plateforme de rencontres type Meetic (Projet scolaire)</h4>
                <div class="flex ml-4">
                    <p class="w-[70%] mt-8 text-[14px]">Développement en 2 semaines d’un site de mise en relation en MVC avec HTML, CSS, PHP et SQL. <br> Fonctionnalités : inscription, connexion, recherche de profils. Expérience enrichissante qui m’a permis de structurer une application, gérer une base de données et sécuriser l’authentification.</p>
                    <div class="">
                        <img class="h-[120px] ml-4 mt-10 shadow-xl shadow-black" src="assets/White Grey Red Vintage Illustrative Love Logo.png" alt="">
                    </div>
                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mt-20"><a href="#">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
            </div>
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-4 pt-10">
                <h4 class="text-[#15BFA3] text-lg mb-10">Réseau social type Twitter (Projet en groupe – 1 mois)</h4>
                <div class="flex ml-2">
                    <p class="w-[70%] mt-8 ml-6 text-[14px]">Développement d’une plateforme de microblogging en MVC avec HTML, Tailwind CSS, PHP et SQL. <br>
                    Fonctionnalités : publications, abonnements/désabonnement, messagerie privée. <br>Expérience enrichissante alliant travail collaboratif (Git, gestion de projet) et développement full-stack (CRUD, optimisation SQL). </p>
                    <div class="ml-6">
                        <img class="h-[180px] mt-10" src="assets/Black_Illustration_Ninja_Esport_Or_Gaming_Mascot_Logo_-3-removebg-preview.png" alt="">
                    </div>
                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mt-5"><a href="#">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
            </div>
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-14 pt-10">
                <h4 class="text-[#15BFA3] text-lg mb-10">Développement d’un Puissance 4 (projet scolaire)</h4>
                <div class="flex">
                    <p class="w-[70%] text-[14px] mt-8 ml-12">Développement d’un Puissance 4 interactif en HTML, CSS et JavaScript en deux semaines. Fonctionnalités : duel joueur contre joueur, interface responsive, détection du gagnant. Projet formateur ayant renforcé mes compétences en JavaScript, manipulation du DOM et logique de jeu.</p>
                    <div class="">
                        <img class="h-[190px] " src="assets/d844896c477478b2d00d2032ef82ab34-removebg-preview.png" alt="">
                    </div>
                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mt-12"><a href="#">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
            </div>
            <div class="bg-gray-900 border border-gray-900 w-[600px] h-[400px] mx-auto shadow-xl shadow-black rounded-xl mt-14 pt-10">
                <h4 class="text-[#15BFA3] text-lg mb-8">TradBot – Bot de suivi des marchés financiers (Projet personnel – En cours)</h4>
                <div class="flex">
                    <p class="w-[70%] text-[14px] mt-5 ml-12">Développement d’un bot Discord en Python fournissant des mises à jour en temps réel sur les marchés financiers via Yahoo Finance et Forex. Fonctionnalités : alertes de prix, suivi personnalisé, interaction avec Discord. Projet stimulant combinant automatisation, analyse de données et intégration d’API.</p>
                    
                    <img class="h-[220px] w-[120px]" src="assets/a4cc03e652e742e948b92126e4f0e293-removebg-preview.png" alt="">

                </div>
                <button class="mb-4 flex text-[13px] text-purple-600 border border-purple-600 hover:bg-purple-600 hover:text-white rounded-md p-[6px] ml-[35%] mb-8"><a href="#">Voir le code</a><i class="fa-brands fa-github text-[18px] ml-[5px]"></i></button>
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

