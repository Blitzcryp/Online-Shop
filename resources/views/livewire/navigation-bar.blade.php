<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-green-800-200 border-teal-800 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-lg lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Please
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Do Not
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                Break Again
            </a>
        </div>
    </div>

    @if (Route::has('login'))
        <div class="hidden px-6 py-4 sm:block text-lg">
            @auth
                <a href="{{ url('/dashboard') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">Dashboard</a>
            @else
                    <a href="{{ route('login') }}" class="inline-block text-lg px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif
</nav>