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
                <img src="{{ asset('images/consultant-1.png') }}" alt="Verified Builders Consultant" class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2">
                <h1 class="text-5xl md:text-6xl font-extrabold text-indigo-600 dark:text-indigo-400 mb-8 leading-tight">
                    Find Your Dream Home Today!
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                    Discover your perfect home in Pune with Verified Builders Consultant! As the city's premier property experts, we're your key to unlocking dream homes. Our passionate team offers free, expert guidance to navigate Pune's vibrant real estate market. Your ideal living space is just a consultation away!
                </p>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Your Journey to Dream Home</h2>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-indigo-500 rounded-full p-3 mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">Book Your Slot</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-indigo-500 rounded-full p-3 mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">Free Pickup And Drop</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-indigo-500 rounded-full p-3 mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">Unlimited Site Visits</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-indigo-500 rounded-full p-3 mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">We Guide, You Choose</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-indigo-500 rounded-full p-3 mr-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300">Find Your Home</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row-reverse items-center md:space-x-reverse md:space-x-8 mb-12">
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
