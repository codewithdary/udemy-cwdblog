@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>

        @else
            <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="mx-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>

                <a href="{{ route('articles.index') }}" class="bg-red-700 rounded-md py-2 px-4 font-semibold text-white hover:text-gray-900 dark:text-white dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Articles</a>
            @endif
        @endauth
    </div>
@endif
