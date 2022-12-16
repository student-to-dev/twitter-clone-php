<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin posts') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $posts->links() }}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                @foreach ($posts as $post)
                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $post->name }}</h5>
                            <p class="text-gray-700 text-base mb-4">
                                {{ $post->description }}
                            </p>
                            <p class="text-gray-700 text-base mb-4">
                                {{ $post->image }}
                            </p>
                            <p class="text-gray-700 text-base mb-4">
                               status: {{ $post->status }}
                            </p>
                            {{-- <form action="submit" method="post">
                                @csrf
                            </form> --}}
                        </div>
                    </div>
                @endforeach
                
            </div>
            {{ $posts->links() }}
        </div>
        
    </div>
    
</x-app-layout>
