<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verified Builders Consultant</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Verified Builders Consultant Logo" class="h-10 w-auto mr-4">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                        Verified Builders Consultant
                    </h1>
                </div>
                <nav class="hidden md:block">
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Contact Us</a></li>
                    </ul>
                </nav>
                <button id="mobile-menu-button" class="md:hidden text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden">
            <ul class="px-2 pt-2 pb-3 space-y-1">
                <li><a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">About Us</a></li>
                <li><a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center md:space-x-8 mb-12">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="{{ asset('images/consultant-buildings.png') }}" alt="Consultant displaying buildings" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2">
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Welcome to Verified Builders Consultant. We are a leading consultancy firm specializing in construction and building services. Our team of experts provides innovative solutions and guidance to ensure your projects are completed efficiently and to the highest standards.
                </p>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Contact Us</h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Email: info@verifiedbuilders.com<br>
                        Phone: (555) 123-4567<br>
                        Address: 123 Construction Ave, Builder's City, BC 12345
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Our Verified Builders</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <li class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Acme Construction Co.</h3>
                    <p class="text-gray-600 dark:text-gray-300">Specializing in residential buildings</p>
                </li>
                <li class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Skyscraper Experts Ltd.</h3>
                    <p class="text-gray-600 dark:text-gray-300">Commercial high-rise specialists</p>
                </li>
                <li class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Green Builders Inc.</h3>
                    <p class="text-gray-600 dark:text-gray-300">Eco-friendly construction solutions</p>
                </li>
            </ul>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 dark:text-gray-400">
                &copy; 2025 Verified Builders Consultant. All rights reserved.
            </p>
        </div>
    </footer>
</div>
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
