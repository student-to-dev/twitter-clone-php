<x-admin-layout title="Dashboard">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full">
                @include('admin.stats')
            </div>
        </div>
    </div>
</x-admin-layout>
