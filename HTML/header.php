<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="../Resources/Images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poltawski+Nowy:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body>

    <header class="header_navigation">
        <div class="logo">DevoteeVivah</div>
        <nav class="header_navigation_nav">
            <a href="./index.php">Home</a>
            <a href="./aboutus.php">About us</a>
            <a href="./contactus.php">Contact us</a>
            <!-- <a href="./pricing.php">Pricing</a> -->
        </nav>
        <button class="register-btn"><a href="https://play.google.com/store/apps/details?id=net.manish.devotee_match&hl=en_IN">Get Started</a></button>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 z-50 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <button id="close-menu-button" class="absolute top-6 right-6 text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <a href="./main.php" class="text-white text-3xl font-medium hover:text-indigo-400 transition duration-300">Home</a>
            <a href="./aboutus.php" class="text-white text-3xl font-medium hover:text-indigo-400 transition duration-300">About us</a>
            <a href="./contactus.php" class="text-white text-3xl font-medium hover:text-indigo-400 transition duration-300">Contact us</a>
            <!-- <a href="./pricing.php" class="text-white text-3xl font-medium hover:text-indigo-400 transition duration-300">Pricing</a> -->
            <button class="mt-8 bg-black-600 text-white font-semibold px-8 py-3 rounded-lg text-xl hover:bg-white-700 transition duration-300">Get Started</button>
        </div>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const body = document.body;

        // Function to open the menu
        function openMenu() {
            mobileMenu.classList.remove('translate-x-full');
            body.classList.add('overflow-hidden'); // Prevent background scrolling
        }

        // Function to close the menu
        function closeMenu() {
            mobileMenu.classList.add('translate-x-full');
            body.classList.remove('overflow-hidden');
        }

        // Event Listeners
        mobileMenuButton.addEventListener('click', openMenu);
        closeMenuButton.addEventListener('click', closeMenu);

        // Optional: Close menu when a link is clicked
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    </script>

</body>

</html>