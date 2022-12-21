<div class="flex justify-center mb-2 rounded-md">
    <form wire:submit.prevent="save" class="block p-6 rounded-lg shadow-lg bg-[#1F2C3C] w-64 max-w-sm md:max-w-lg sm:min-w-[60%]">
        @if ($messageText != '')
            <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                {{ $messageText }}
            </div>
        @endif
        {{-- <div>
            <label class="block font-medium text-sm text-gray-700" for="name">
                Product name
            </label>
            <input wire:model="name" type="text"
                   class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" />
            @error('name')
            <div class="text-sm text-red-500 ml-1">
                {{ $message }}
            </div>
            @enderror
        </div> --}}
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-100" for="description">
                Add description
            </label>
            <textarea wire:model="description"
                      class="mt-2 mb-0 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"></textarea>
            <input type="hidden" name="user_id" wire:model="user_id">
            @error('description')
            <div class="text-sm text-red-500 ml-1">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex items-center mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Tweet
            </button>
        </div>
    </form>
</div>
