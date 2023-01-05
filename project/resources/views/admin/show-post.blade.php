<x-admin-layout title="Show Post">
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                                    <span class="flex items-center justify-center">ID: {{ $post->id }}</span>
                                    
                                    <span class="flex items-center justify-center">User ID: {{ $post->user->id }}</span>

                                    <span class="flex items-center justify-center">Created: {{ $post->created_at }}</span>
                                    
                                    <span class="flex items-center justify-center">Updated: {{ $post->updated_at }}</span>
                                   
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</x-admin-layout>
