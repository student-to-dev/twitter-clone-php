<div class="flex justify-evenly">
    <div class="form-check form-check-inline">
        <label class="form-check-label inline-block text-gray-800" for="user">
            <input
                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                type="radio" 
                wire:model="user_role" id="user" value="1"
                >
            User
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label inline-block text-gray-800" for="admin">
            <input
                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                type="radio" 
                wire:model="user_role" id="admin" value="2"
                >
            Admin
        </label>
        <br>
        <span>role number {{$user_role}}</span>
    </div>
</div>
