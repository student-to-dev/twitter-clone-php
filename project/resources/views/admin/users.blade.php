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
                        <div class="block p-6 rounded-lg shadow-lg bg-white min-w-[50%] max-w-xl">
                            <h5 class="text-center text-gray-900 text-base font-extrabold leading-tight font-medium mb-2 border-b-2 pb-2 truncate ">Name: <br> {{ $user->name }}
                            </h5>
                            <div class="flex-col justify-center mt-2 mb-4 border-b-2 pb-2">
                                <p class="text-gray-700 text-base text-center font-extrabold">
                                    User role:
                                </p>
                                <livewire:user-role :user="$user" role="role" key="{{ $user->id }}" />

                            </div>

                            <div class="flex-col justify-center mt-2">
                                <p class="text-gray-700 text-base text-center font-extrabold">
                                    User bannded:
                                </p>
                                <livewire:statuses :model="$user" field="isbanned" key="{{ $user->id }}" />
                            </div>
                            <div class="flex space-x-2 justify-center">
                                <div>
                                    <a class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" href="{{ route('show-user', $user) }}">SHOW</a>
                                </div>
                              </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $users->links() }}
        </div>

    </div>

</x-admin-layout>
