    {{-- left / sidebar --}}
    <div x-cloak="tablet" x-bind:class="menu ? 'lg:-translate-x-full translate-x-0' : '-translate-x-full lg:translate-x-0'" class="lg:w-1/5 sm:w-1/2 w-3/4 overflow-hidden  transition-all duration-300 h-screen flex flex-col bg-secondary fixed left-0 top-0 shadow-xl transform z-10">
        <div class="h-14 flex items-center justify-between bg-primary shadow-lg px-3">
            <a href="{{ route('welcome') }}" class="text-white text-sm font-medium">TALL</a>
            <button x-on:click="menu = ! menu" class="hover:bg-white h-9 w-9 rounded-full hover:bg-opacity-5 inline-flex items-center justify-center transition-all duration-150">
                <svg class="text-white w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path fill="none" d="M0 0H24V24H0z"></path>
                        <path d="M21 18v2H3v-2h18zM6.596 3.904L8.01 5.318 4.828 8.5l3.182 3.182-1.414 1.414L2 8.5l4.596-4.596zM21 11v2h-9v-2h9zm0-7v2h-9V4h9z"></path>
                    </g>
                </svg>
            </button>
        </div>
        <div class="flex-1 overflow-y-auto custom-scrollbar-dark transition-all duration-200">
            <div class="pt-5">
                <div class="uppercase text-xs font-bold text-dark-gray px-6 pb-3">Main Content</div>
                <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'bg-white bg-opacity-10 text-gray-200' : 'hover:bg-white hover:bg-opacity-10 text-gray-400' }} text-sm font-medium  py-2 rounded-lg mx-3 pb-1.5 transition-all duration-200 group flex items-center px-3">
                    <svg class="w-4 h-4 group-hover:text-gray-200 mr-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                        </g>
                    </svg>
                    <span class="group-hover:text-gray-200">Dashboard</span>
                </a>
            </div>

            {{-- /utilities --}}
            <div class="pt-5">
                <div class="uppercase text-xs font-bold text-dark-gray px-6 pb-3">Utilities</div>
                {{-- dropdown --}}
                <div x-data="{ open : {{ Route::is('users.*') ? 'true' : 'false' }} }">
                    <span x-on:click="open = ! open" class="text-sm font-medium  py-2 rounded-lg mx-3 pb-1.5 hover:bg-white hover:bg-opacity-10 transition-all duration-200 group flex items-center justify-between px-3 mt-1">
                        <div class="inline-flex items-center">
                            <svg class="w-4 h-4 text-dark-gray group-hover:text-gray-200 mr-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                                </path>
                            </svg>
                            <span class="text-gray-400 group-hover:text-gray-200">Users</span>
                        </div>
                        <span>
                            <svg x-bind:class="open ? 'rotate-180' : 'rotate-0'" class="transform w-2.5 h-2.5 text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </span>
                    </span>
                    <div x-cloak="" x-bind:class="! open ? 'max-h-0' : 'max-h-96' " class="transform transition-all duration-300 overflow-hidden">
                        <a href="{{ route('users.index') }}" class="{{ Route::is(['users.index', 'users.edit']) ? 'bg-white bg-opacity-10 text-gray-200' : 'hover:bg-white hover:bg-opacity-10 text-gray-400' }} text-sm font-medium  py-2 rounded-lg mx-3 pb-1.5 transition-all duration-200 group flex items-center px-3 mt-1">
                            <div class="w-4 h-4 bg-transparent mr-2.5"></div>
                            <span class="group-hover:text-gray-200">Users Table</span>
                        </a>
                        <a href="{{ route('users.create') }}" class="{{ Route::is('users.create') ? 'bg-white bg-opacity-10 text-gray-200' : 'hover:bg-white hover:bg-opacity-10 text-gray-400' }} text-sm font-medium  py-2 rounded-lg mx-3 pb-1.5 hover:bg-white hover:bg-opacity-10 transition-all duration-200 group flex items-center px-3 mt-1">
                            <div class="w-4 h-4 bg-transparent mr-2.5"></div>
                            <span class="text-gray-400 group-hover:text-gray-200">New User</span>
                        </a>
                    </div>
                </div>
            </div>
            @

            <div class="my-20 bg-gradient-to-br from-secondary-light to-secondary-lighter mx-3 p-3 rounded-lg">
                <div class="text-sm text-gray-300">TALL Tailwind Css + Alpine Js Panel.</div>
                <div class="text-white">
                    <a href="https://github.com/rahmanbayu" target="blank" class="text-sm">github/rahmanbayu</a>
                </div>
            </div>
        </div>
    </div>
    <div x-cloak="left" x-cloak="sidebar" x-bind:class="menu ? 'w-0' : 'lg:w-1/5 w-1/2'" class="lg:block hidden transition-all duration-300 h-screen">
    </div>
