<div>
    @foreach ($posts as $post)
    <div class="flex justify-center mb-2 rounded-md">
        <div class="block p-6 rounded-lg shadow-lg bg-[#1F2C3C] max-w-sm md:max-w-lg">
            <h5 class="text-gray-100 text-xl leading-tight font-medium mb-2">{{ $post->user->name }}</h5>
            <p class="text-gray-100 text-xs mb-4 break-words bg-[#253243] p-3 rounded-md">
                {{ $post->description }}
            </p>
            <p class="text-gray-100 text-base mb-4">
                {{ $post->image }}
            </p>
        </div>
    </div>        
    @endforeach
    @if ($showLoadMoreButton)
        <button wire:click="loadPosts" type="button"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Load
            more...</button>
    @endif
</div>
