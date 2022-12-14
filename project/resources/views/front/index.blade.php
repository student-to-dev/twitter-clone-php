<x-user-layout title="All posts">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#14202E] overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('new-post')
                @livewire('all-posts')
            </div>
        </div>
    </div>
</x-user-layout>
