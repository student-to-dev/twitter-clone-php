<x-user-layout title="Show post">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#14202E] overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center mb-2 rounded-md">
                    <div class="block p-6 rounded-lg shadow-lg bg-[#1F2C3C] w-64 max-w-sm md:max-w-lg sm:min-w-[50%]">
                        <h5 class="text-gray-100 text-xl leading-tight font-medium mb-2 truncate">{{ $post->user->name }}</h5>
                        <p class="text-gray-100 text-md mb-4 break-words bg-[#253243] p-3 rounded-md">
                            {{ $post->description }}
                        </p>
                            <img class="rounded-lg" src="{{ asset("../storage/app/$post->image") }}" alt="#">
                    </div>
                </div>   
            </div>
        </div>
    </div>
</x-user-layout>
