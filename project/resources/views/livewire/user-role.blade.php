<div class="flex justify-center">
    <div class="form-check form-check-inline">
      <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" wire:model="user_role" id="user" value="1" @if ($user_role) checked @endif>
      <label class="form-check-label inline-block text-gray-800" for="user">User</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" wire:model="user_role" id="admin" value="2" @if ($user_role) checked @endif>
      <label class="form-check-label inline-block text-gray-800" for="admin">Admin</label>
    </div>
  </div>
