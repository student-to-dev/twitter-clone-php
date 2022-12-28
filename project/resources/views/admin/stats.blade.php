
<!-- component -->
<div
    class='flex sm:flex-row flex-col space-y-0 sm:space-x-2 flex-row w-full items-center justify-center min-h-[35vh] bg-gray-100'>
    <div
        class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-purple-300'>
        <div class="flex justify-between w-full">
            <div>
                <div class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                      </svg>                      
                      
                </div>
            </div>
            <div>
                {{-- <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                    class="flex items-center text-xs px-3 bg-purple-200 text-purple-800 rounded-full">25%</div> --}}
            </div>
        </div>
        <div>
            <div class="font-bold text-5xl text-center">
                {{ $usersCount }}
            </div>
            <div class="font-bold text-sm">
                Users Total
            </div>
        </div>
    </div>
    <div
        class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-8 border-purple-300'>
        <div class="flex justify-between w-full">
            <div>
                <div class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M10.375 2.25a4.125 4.125 0 100 8.25 4.125 4.125 0 000-8.25zM10.375 12a7.125 7.125 0 00-7.124 7.247.75.75 0 00.363.63 13.067 13.067 0 006.761 1.873c2.472 0 4.786-.684 6.76-1.873a.75.75 0 00.364-.63l.001-.12v-.002A7.125 7.125 0 0010.375 12zM16 9.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5h-6z" />
                      </svg>
                      
                      
                </div>
            </div>
            <div>
                {{-- <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                    class="flex items-center text-xs px-3 bg-purple-200 text-purple-800 rounded-full">25%</div> --}}
            </div>
        </div>
        <div>
            <div class="font-bold text-5xl text-center">
                {{ $usersIsBanned }}
            </div>
            <div class="font-bold text-sm">
                Banned users
            </div>
        </div>
    </div>
    <div
        class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-red-300'>
        <div class="flex justify-between w-full">
            <div>
                <div class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                      </svg>
                      
                      
                      
                </div>
            </div>
            <div>
                {{-- <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                    class="flex items-center text-xs px-3 bg-red-200 text-red-800 rounded-full">50%</div> --}}
            </div>
        </div>
        <div>
            <div class="font-bold text-5xl text-center">
                {{ $postsCount }}
            </div>
            <div class="font-bold text-sm">
                Posts Total
            </div>
        </div>
    </div>
    <div
        class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/4 p-5 bg-white rounded-md shadow-xl border-l-4 border-green-300'>
        <div class="flex justify-between w-full">
            <div>
                <div class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>                      
                </div>
            </div>
            <div>
                {{-- <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                    class="flex items-center text-xs px-3 bg-green-200 text-green-800 rounded-full">25%</div> --}}
            </div>
        </div>
        <div>
            <div class="font-bold text-5xl text-center">
                {{ $postsIsBanned }}
            </div>
            <div class="font-bold text-sm">
                Banned Posts
            </div>
        </div>
    </div>
</div>
