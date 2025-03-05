<header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Verified Builders <span class="text-2xl font-semibold italic">Consultant</span>
                        </h1>
                        <div class="flex items-center mt-1">
                            <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full mr-2">RERA Registered Consultancy</span>
                        </div>
                    </div>
                </a>
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <nav class="hidden md:block">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">About</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <ul class="px-2 pt-2 pb-3 space-y-1">
            <li><a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">About</a></li>
            <li><a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">Contact</a></li>
        </ul>
    </div>
</header>
