<x-admin-layout title="All Users">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin users') }}
        </h2>
    </x-slot> --}}
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('admin.stats')

            {{ $users->links() }}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                @foreach ($users as $user)
                    <div class="flex justify-center mt-2">
                        <div class="block p-6 rounded-lg shadow-lg bg-white w-64">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Name: {{ $user->name }}</h5>
                            <p class="text-gray-700 text-base mb-4">
                              Email:  {{ $user->email }}
                            </p>
                            <p class="text-gray-700 text-base mb-4">
                               User role: {{ $user->role }}
                            </p>
                            <div class="flex justify-center justify-between">
                                <p class="text-gray-700 text-base mb-4">
                                    User bannded: 
                                 </p>
                                <livewire:statuses
                                        :model="$user"
                                        field="isbanned"
                                        key="{{ $user->id }}" />
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            {{ $users->links() }}
        </div>
        
    </div>
    
</x-admin-layout>





