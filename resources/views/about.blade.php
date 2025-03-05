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
                    At Verified Builders Consultant, we're more than just a consultancy - we're your trusted partners in the journey to your ideal Pune home. Our passion lies in matching you with properties that resonate with your dreams and lifestyle. With our expert team offering complimentary, tailored guidance, your perfect home is closer than you think.
                </p>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    As a RERA-verified and registered entity, we bring credibility and expertise to every interaction. Your trust is our most valued asset.
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
        @include('_partials.builders')
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
