        {{-- navbar --}}
        <nav x-cloak="navbar" x-bind:class="menu ? 'lg:w-full w-full' : 'lg:w-4/5 w-full'" class="fixed transition-all duration-300 bg-secondary flex items-center justify-between px-5 h-14 shadow-lg top-0 right-0">
            <div>
                <button x-on:click="menu = ! menu" class="hover:bg-white h-9 w-9 rounded-full hover:bg-opacity-5 inline-flex items-center justify-center transition-all duration-150">
                    <svg class="text-white w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M21 18v2H3v-2h18zM17.404 3.904L22 8.5l-4.596 4.596-1.414-1.414L19.172 8.5 15.99 5.318l1.414-1.414zM12 11v2H3v-2h9zm0-7v2H3V4h9z"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="inline-flex items-center space-x-4">
                <div>
                    <svg class="w-4 h-4 text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16a2 2 0 002-2H6a2 2 0 002 2zm.995-14.901a1 1 0 10-1.99 0A5.002 5.002 0 003 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"></path>
                    </svg>
                </div>
                <div x-data="{open : false}" x-on:click="open = ! open" x-on:click.away="open = false" class="text-sm font-medium text-gray-300 cursor-pointer relative">
                    <span>{{ Auth::user()->name }}</span>
                    <div x-cloak x-show="open" class="w-72 rounded-xl bg-primary absolute right-0">
                        <a href="" class="px-3 py-2.5 hover:text-purple-500 block text-gray-200">
                            Profile
                        </a>
                        <a href="" class="px-3 py-2.5 hover:text-purple-500 block text-gray-200">
                            Change Password
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="px-3 py-2.5 hover:text-purple-500 block w-full text-gray-200 text-left">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
