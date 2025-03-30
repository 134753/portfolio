<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Levy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md text-[#15BFA3] hover:bg-[#15BFA3] hover:text-white">
                        <a href="AboutMe.php">Qui suis-je ?</a>
                    </li>
                    <li class="p-2 border-2 border-[#15BFA3] rounded-md bg-[#15BFA3] text-black hover:bg-[#15BFA3] hover:text-white">
                        <a href="Contact.php">Me contacter</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="mt-20 text-center">
        <h2 class="text-[28px] text-[#15BFA3] mb-6">Me Contacter</h2>
        <div class="flex justify-center">
            <div class="bg-gray-900 border border-gray-900 w-[400px] shadow-xl shadow-black rounded-xl p-6 ">
                <form action="https://formspree.io/f/{levy.nyamsi@epitech.eu}" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-[#15BFA3] text-left mb-1">Nom</label>
                        <input type="text" id="name" name="name" required 
                            class="w-full p-2 rounded-lg bg-gray-800 border border-gray-700 text-white">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-[#15BFA3] text-left mb-1">Email</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full p-2 rounded-lg bg-gray-800 border border-gray-700 text-white">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-[#15BFA3] text-left mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" required 
                            class="w-full p-2 rounded-lg bg-gray-800 border border-gray-700 text-white"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#15BFA3] text-black py-2 rounded-lg font-bold hover:bg-[#13a38c] transition">
                        Envoyer
                    </button>
                </form>
            </div>

            <div class=" flex flex-col justify-center gap-6 ml-14">
                <a href="https://www.linkedin.com/in/levy-nyamsi/" target="_blank">
                    <i class="fa-brands fa-linkedin text-[35px] text-[#15BFA3] hover:text-[#1CEFB0]"></i>
                </a>
                <a href="https://github.com/134753" target="_blank">
                    <i class="fa-brands fa-github text-[35px] text-[#15BFA3] hover:text-[#1CEFB0]"></i>
                </a>
            </div>
        </div>
    </section>
    <footer class="text-center border border-black mt-14 p-8">
        <p>©By NYAMSI Lévy</p>
    </footer>
</body>
</html>