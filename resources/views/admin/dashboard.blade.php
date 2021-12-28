@extends('layouts.admin')
@section('title', 'Dashboard - ' . config('app.name'))
@section('content')
    <div class="h-60 p-5 lg:p-10 bg-secondary-light mt-14">
        <h2 class="text-white font-medium text-lg">Dashboard</h2>
    </div>
    <div class="-mt-24">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-10 px-5">
            <div>
                <div class="bg-secondary shadow-lg p-4 rounded flex items-center justify-between">
                    <div>
                        <span class="text-sm font-light block text-gray-300">Lorem</span>
                        <span class="text-xl mt-3 text-purple-500">50<span>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-purple-300 bg-opacity-30 flex items-center justify-center">
                        <svg class="w-7 h-7 text-purple-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM7 6v4h4V6H7zm0 6v2h10v-2H7zm0 4v2h10v-2H7zm6-9v2h4V7h-4z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-secondary shadow-lg p-4 rounded flex items-center justify-between">
                    <div>
                        <span class="text-sm font-light block text-gray-300">Lorem</span>
                        <span class="text-xl mt-3 text-yellow-500">50</span>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-yellow-300 bg-opacity-30 flex items-center justify-center">
                        <svg class="w-7 h-7 text-yellow-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM7 6v4h4V6H7zm0 6v2h10v-2H7zm0 4v2h10v-2H7zm6-9v2h4V7h-4z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-secondary shadow-lg p-4 rounded flex items-center justify-between">
                    <div>
                        <span class="text-sm font-light block text-gray-300">Lorem</span>
                        <span class="text-xl mt-3 text-rose-500">50</span>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-rose-300 bg-opacity-30 flex items-center justify-center">
                        <svg class="w-7 h-7 text-rose-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM7 6v4h4V6H7zm0 6v2h10v-2H7zm0 4v2h10v-2H7zm6-9v2h4V7h-4z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-secondary shadow-lg p-4 rounded flex items-center justify-between">
                    <div>
                        <span class="text-sm font-light block text-gray-300">Lorem</span>
                        <span class="text-xl mt-3 text-teal-500">50</span>
                    </div>
                    <div class="w-11 h-11 rounded-full bg-teal-300 bg-opacity-30 flex items-center justify-center">
                        <svg class="w-7 h-7 text-teal-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
