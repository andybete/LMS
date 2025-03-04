<nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
    <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen-xl">
        <div class="flex items-center lg:w-1/3">
            <a href="{{ route('home') }}" class="flex items-center"> <!-- Change here -->
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                    <h1>@yield('heading')</h1>
                </span>
            </a>
        </div>
        <div class="flex justify-center flex-grow lg:w-1/3">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <x-nav-link href="{{ route('home') }}" :active="request()->is('/')">Home</x-nav-link> <!-- Ensure this points to the home route -->
                <x-nav-link href="/books" :active="request()->is('books')">Books</x-nav-link>
                @can('create', 'App\Models\Book')
                <x-nav-link href="/admin" :active="request()->is('admin')">Admin Page</x-nav-link>
                @endcan
                @can('is-librarian')
                <x-nav-link href="/librarian" :active="request()->is('librarian')">Librarian Page</x-nav-link>
                @endcan
            </ul>
        </div>
        <div class="flex items-center lg:w-1/3 lg:justify-end">
            @guest
            <x-auth-link href="{{ route('register') }}">Register</x-auth-link>
            <x-auth-link href="{{ route('login') }}">Log In</x-auth-link>
            @endguest

            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="_method" value="DELETE">
                <x-auth-button>Log Out</x-auth-button>
            </form>
            @endauth

            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
</nav>