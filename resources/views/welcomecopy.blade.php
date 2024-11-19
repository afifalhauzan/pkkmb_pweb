<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Krona+One&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">
    <nav class="bg-hijau-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <span class="text-xl font-bold text-white">SpotCafe</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-[35px]">
                    <a href="#home" class="text-gray-300 hover:text-hijau-100">Home</a>
                    <a href="#profile" class="text-gray-300 hover:text-hijau-100">Profile</a>
                    <a href="#activity" class="text-gray-300 hover:text-hijau-100">By Activity</a>
                </div>

                <!-- User Greeting -->
                <div class="flex items-center space-x-4">
                    <span class="hidden md:block text-gray-300">Hai, <span class="font-medium text-white">Afif!</span></span>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#home" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a>
            <a href="#profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
            <a href="#activity" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">By Activity</a>
            <div class="px-4 py-2 text-gray-600">Hai, <span class="font-medium text-gray-800">Afif!</span></div>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>