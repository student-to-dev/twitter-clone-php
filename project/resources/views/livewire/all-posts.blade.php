<div>
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
            </div>
        </div>
    @endforeach
    @if ($showLoadMoreButton)
        <button wire:click="loadPosts" type="button"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Load
            more...</button>
    @endif
</div>
