<x-layout>
    @section('title', 'Home')
    @section('heading')
    Home
    @endsection

    <section class="bg-light-gray dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <a href="https://t.me/A_Cole24" target="_blank" class="inline-flex justify-between items-center py-2 px-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                <span class="text-xs bg-primary-600 rounded-full text-white px-3 py-1.5 mr-3">Tip</span>
                <span class="text-sm font-medium">Follow our Telegram posts</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Unlock the World of Knowledge</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"> Library Management System</p>

            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('about') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 transition">
                    Discover More
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="{{ route('login') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 transition">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                        <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                    </svg>
                    Start Reading
                </a>
            </div>

            <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                <span class="font-semibold text-gray-400 uppercase">Connect with Us</span>
                <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                    <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400 flex items-center">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186a2.997 2.997 0 00-2.113-2.116C19.584 3.5 12 3.5 12 3.5s-7.584 0-9.385.57A2.997 2.997 0 00.502 6.186C0 8.063 0 12 0 12s0 3.937.502 5.814a2.997 2.997 0 002.113 2.116C4.416 20.5 12 20.5 12 20.5s7.584 0 9.385-.57a2.997 2.997 0 002.113-2.116C24 15.937 24 12 24 12s0-3.937-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" fill="currentColor"/>
                        </svg>
                        <span class="ml-2 text-lg font-semibold">YouTube</span>
                    </a>
                    <a href="https://t.me/A_Cole24" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400 flex items-center">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.371 0 0 5.371 0 12C0 18.629 5.371 24 12 24C18.629 24 24 18.629 24 12C24 5.371 18.629 0 12 0ZM17.462 7.377L15.894 16.37C15.783 16.963 15.414 17.128 14.896 16.845L12.083 14.764L10.786 16.02C10.665 16.141 10.563 16.243 10.321 16.243L10.501 13.345L15.267 8.741C15.494 8.533 15.223 8.419 14.935 8.627L8.63 12.615L5.783 11.759C5.204 11.589 5.189 11.182 5.931 10.879L16.857 6.57C17.343 6.381 17.744 6.653 17.462 7.377Z" fill="currentColor"/>
                        </svg>
                        <span class="ml-2 text-lg font-semibold">Telegram</span>
                    </a>
                    <a href="https://github.com/andybete" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400 flex items-center" target="_blank" rel="noopener noreferrer">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 .297C5.373.297 0 5.67 0 12.297c0 5.297 3.438 9.8 8.205 11.388.6.112.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.332-1.757-1.332-1.757-1.09-.746.082-.73.082-.73 1.204.084 1.838 1.237 1.838 1.237 1.07 1.836 2.81 1.305 3.495.997.108-.774.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.93 0-1.31.467-2.38 1.236-3.22-.124-.304-.536-1.527.117-3.176 0 0 1.01-.323 3.3 1.23a11.52 11.52 0 013.005-.403c1.02.005 2.045.138 3.005.403 2.29-1.552 3.3-1.23 3.3-1.23.653 1.65.242 2.872.118 3.176.77.84 1.235 1.91 1.235 3.22 0 4.61-2.803 5.625-5.475 5.92.43.37.81 1.102.81 2.222 0 1.606-.015 2.896-.015 3.286 0 .32.218.694.825.576C20.565 22.092 24 17.59 24 12.297 24 5.67 18.627.297 12 .297z" fill="currentColor"/>
                        </svg>
                        <span class="ml-2 text-lg font-semibold">GitHub</span>
                    </a>
                </div>
            </div> 
        </div>
    </section>
</x-layout>