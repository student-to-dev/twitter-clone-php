<x-user-layout title="User logout">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User logout') }}
        </h2>
    </x-slot> --}}
    
    <div class="relative flex items-top justify-center min-h-screen bg-[#14202E] dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                <img src="{{ asset('storage/logo.png') }}" alt="Twitter logo" width="150">
            </div>
            <div class="w-64">
                <h2 class="text-white text-2xl mb-5 text-center">Go back and see what's happening in the world right now!</h2>
                <div class="flex space-x-2 justify-center">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="inline-block px-6 py-2.5 bg-white text-black-700 font-medium text-s leading-tight rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out w-32 text-center font-bold"
                     href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                </a>
                </form>
                
                    <a class="inline-block px-6 py-2.5 bg-[#29a8df] text-black-700 font-medium text-s leading-tight rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out w-32 text-center font-bold"
                     href="{{ route('all-posts') }}">Go back</a>
                </div>
            </div>
        </div>
        
    </div>
    
</x-user-layout>
