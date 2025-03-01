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
                <img src="{{ asset('images/consultant-buildings.png') }}" alt="Consultant displaying buildings" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2">
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Welcome to Verified Builders Consultant. We are a leading consultancy firm specializing in construction and building services. Our team of experts provides innovative solutions and guidance to ensure your projects are completed efficiently and to the highest standards.
                </p>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Contact Us</h2>
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Send Message</button>
                        </div>
                    </form>
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
