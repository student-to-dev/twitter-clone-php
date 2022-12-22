<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Twitter</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
   </head>

<body class="font-sans antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-[#14202E] dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                <img src="{{ asset('storage/logo.png') }}" alt="Twitter logo" width="150">
            </div>

            <div class="w-64">
                <h2 class="text-white text-2xl mb-5 text-center">See what's happening in the world right now!</h2>
                @if (Route::has('login'))
                    <div class="flex space-x-2 justify-center">
                        @auth
                            <a href="{{ route('all-posts') }}"
                                class="inline-block px-6 py-2.5 bg-white text-black-700 font-medium text-s leading-tight rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out w-32 text-center font-bold">Go</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="inline-block px-6 py-2.5 bg-white text-black-700 font-medium text-s leading-tight rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out w-32 text-center font-bold">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="inline-block px-6 py-2.5 bg-white text-black-700 font-medium text-s leading-tight rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out w-32 text-center font-bold">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>


        </div>
    </div>
</body>

</html>
