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
                        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-xl sm:min-w-[50%]">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $post->user->name }}</h5>
                            <p class="text-gray-700 text-sm mb-4 p-3 break-words">
                                {{ $post->description }}
                            </p>
                            @if ($post->image)
                                <a href="{{ asset("../storage/app/$post->image") }}">
                                    <img class="rounded-lg w-1/3" src="{{ asset("../storage/app/$post->image") }}"
                                        alt="#">
                                </a>
                            @endif
                            
                            <div>
                                <livewire:statuses
                                        :model="$post"
                                        field="status"
                                        key="{{ $post->id }}" />
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $posts->links() }}
        </div>

    </div>

</x-admin-layout>
