<div class="flex items-center justify-center">
    <label class="flex items-center cursor-pointer relative mb-4">
        
        <input wire:model.lazy="isOn" type="checkbox" class="sr-only"
            @if ($isOn) checked @endif />
        <div class="toggle-bg bg-gray-200 border-2 border-gray-200 h-6 w-11 rounded-full"></div>
        
    </label>
</div>
