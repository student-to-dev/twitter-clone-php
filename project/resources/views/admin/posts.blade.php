<x-admin-layout title="All Posts">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin posts') }}
        </h2>
    </x-slot> --}}

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('admin.stats')

            {{ $posts->links() }}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach ($posts as $post)
                    <div class="flex justify-center mb-2 rounded-md">
                        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-xl sm:min-w-[50%] mt-4">
                            <p class="text-gray-700 text-sm mb-4 p-3 break-words">
                                <span class="font-extrabold"> Description:</span> <br>{{ $post->description }}
                            </p>
                            <div class="flex">
                                @if ($post->image)
                                    <a class="w-[50%]" href="{{ asset("../storage/app/$post->image") }}">
                                        <img class="rounded-lg w-2/3" src="{{ asset("../storage/app/$post->image") }}"
                                            alt="#">
                                    </a>
                                @endif
    
                                <div class="w-[50%] pb-2">
                                    <h5
                                        class="font-extrabold text-gray-900 text-xl leading-tight font-medium mb-2 flex items-center truncate">
                                        User name: <br> {{ $post->user->name }}</h5>
                                    <span class="flex items-center justify-center font-extrabold">Is it visible:</span>
                                    <livewire:statuses :model="$post" field="status" key="{{ $post->id }}" />
                                        
                                        <div class="flex space-x-2 justify-center">
                                            <div>
                                                <a class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out"
                                                    href="{{ route('show-admin-post', $post) }}">SHOW</a>
                                            </div>
                                        </div> 
                                </div>
                            </div>
    
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $posts->links() }}
        </div>

    </div>

</x-admin-layout>
