<x-admin-layout title="Show user {{ $user->name }}">
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-4 pt-4 min-h-screen">
                <div class="flex justify-center mt-2">
                    <div class="block p-6 rounded-lg shadow-lg bg-white min-w-[50%] max-w-xl">
                        <h5
                            class="text-center text-gray-900 text-base font-extrabold leading-tight font-medium mb-2 border-b-2 pb-2 truncate ">
                            Name: <br> {{ $user->name }}
                        </h5>
                        <div class="flex-col justify-center mt-2 mb-4 border-b-2 pb-2">
                            <p class="text-gray-700 text-base text-center font-extrabold">
                                User role:
                            </p>
                            <livewire:user-role :user="$user" role="role" key="{{ $user->id }}" />

                        </div>

                        <div class="flex-col justify-center mt-2 border-b-2">
                            <p class="text-gray-700 text-base text-center font-extrabold">
                                User bannded:
                            </p>
                            <livewire:statuses :model="$user" field="isbanned" key="{{ $user->id }}" />
                        </div>
                        <h5 class="text-center text-gray-900 text-base leading-tight font-medium mb-2 pb-2">
                            ID: {{ $user->id }}
                        </h5>
                        <h5 class="text-center text-gray-900 text-base leading-tight font-medium mb-2 pb-2">
                            mail: {{ $user->email }}
                        </h5>
                        <h5 class="text-center text-gray-900 text-base leading-tight font-medium mb-2 pb-2">
                            Created: <br>{{ $user->created_at }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
