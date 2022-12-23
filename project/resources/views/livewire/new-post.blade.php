<div class="flex justify-center mb-2 rounded-md">
    <form wire:submit.prevent="save"
        class="block p-6 rounded-lg shadow-lg bg-[#1F2C3C] w-64 max-w-sm md:max-w-lg sm:min-w-[50%]"
        enctype="multipart/form-data">
        @if ($messageText != '')
            <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                {{ $messageText }}
            </div>
        @endif
        
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
        <div class="mt-4 flex items-center">
            <label class="block font-medium text-sm text-gray-100 py-2" for="photo">
            <input wire:model="photo" type="file"
                class="block w-full text-sm text-gray-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-gray-300 file:text-gray-700
                          hover:file:bg-gray-100 cursor-pointer
                        " />
            </label>
            @error('photo')
            <div class="text-sm text-red-500 ml-1">
                {{ $message }}
            </div>
        @enderror
            <button type="submit"
                class="block w-[50%] px-4 py-2 bg-[#29a8df] border border-[#29a8df] rounded-full font-semibold text-sm text-white uppercase">
                Tweet
            </button>
        </div>
    </form>
</div>
