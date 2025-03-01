<header class="bg-white dark:bg-gray-800 shadow">
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Verified Builders Consultant Logo" class="h-10 w-auto mr-4">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                            Verified Builders <span class="text-2xl font-semibold italic">Consultant</span>
                        </h1>
                        <div class="flex items-center mt-1">
                            <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full mr-2">RERA registered <i>A52100047862</i></span>
                        </div>
                    </div>
                </a>
                <nav class="hidden md:block">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">About</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Contact</a></li>
                    </ul>
                </nav>
    <div id="mobile-menu" class="hidden md:hidden">
        <ul class="px-2 pt-2 pb-3 space-y-1">
            <li><a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">About</a></li>
            <li><a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700">Contact</a></li>
        </ul>
    </div>
</header>
