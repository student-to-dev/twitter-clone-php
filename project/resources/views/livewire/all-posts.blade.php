<div>
    @foreach ($posts as $post)
    <div class="flex justify-center mb-2 rounded-md">
        <div class="block p-6 rounded-lg shadow-lg bg-[#1F2C3C] w-64 max-w-sm md:max-w-lg sm:min-w-[50%]">
            <h5 class="text-gray-100 text-xl leading-tight font-medium mb-2 truncate">{{ $post->user->name }}</h5>
            <a href="{{ route('show-post', $post) }}"><p class="text-gray-100 text-xs mb-4 break-words bg-[#253243] p-3 rounded-md">
                {{ $post->description }}
            </p></a>
            @if ($post->image)
            <a href="{{ asset("../storage/app/$post->image") }}">
                <img class="rounded-lg" src="{{ asset("../storage/app/$post->image") }}" alt="#" width="100%">
            </a>
            @endif
            
        </div>
    </div>        
    @endforeach
    @if ($showLoadMoreButton)
    <div class="flex justify-center">
        <button wire:click="loadPosts" type="button"
            class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Load more...</button>
    </div>
    @endif
</div>
