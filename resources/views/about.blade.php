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
    @include('_partials.header')

    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center md:space-x-8 mb-12">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="{{ asset('images/consultant-2.png') }}" alt="Consultant displaying buildings" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2">
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Welcome to Verified Builders Consultant. We are a leading consultancy firm specialized in finding your dream home in Pune. Our team of experts provides you free-of-charge right guidance to find your dream home.
                </p>
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Our Services</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div class="ml-3">
                                <h3 class="font-medium text-gray-800 dark:text-white">Real Estate Consultancy</h3>
                                <p class="text-gray-600 dark:text-gray-400">Expert guidance for your property investment decisions</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div class="ml-3">
                                <h3 class="font-medium text-gray-800 dark:text-white">Free Cab Pickup & Drop</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Complimentary transportation for site visits
                                    <a href="https://verifiedbuilderscabservice.com" class="text-blue-600 dark:text-blue-400 hover:underline ml-1">verifiedbuilderscabservice.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Contact Us</h2>
                    @include('_partials.contact-details')
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

    @include('_partials.footer')
</div>
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
