@extends('layouts.admin')
@section('title', 'Edit a User - ' . config('app.name'))
@section('content')
    <div class="h-60 p-5 lg:p-10 bg-secondary-light mt-14">
        <div class="flex items-center justify-between">
            <h2 class="text-white font-medium text-lg">Edit User</h2>
            <div x-data="{ modal:false }">
                <button x-on:click="modal = ! modal" class=" bg-teal-500 hover:bg-teal-600 text-white uppercase font-medium text-sm py-1.5 px-4 rounded-lg transition-all duration-150 flex items-center">
                    <div class="mr-2">
                        <svg class="w-3.5 h-3.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path>
                        </svg>
                    </div>
                    <span>Delete User</span>
                </button>
                <div x-cloak="" x-bind:class="modal ? 'translate-y-0 opacity-100' : 'translate-y-6 opacity-0 pointer-events-none'" class="w-1/2 lg:1/4 bg-primary rounded-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-2xl z-20 transition-all duration-200">
                    <div class="text-gray-100 py-3 px-4 font-medium">
                        Delete User
                    </div>
                    <div class="px-4 py-5 bg-secondary text-sm text-gray-200">
                        Are you sure?
                    </div>
                    <div class="bg-secondary px-4 py-3 flex items-center space-x-4">
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-teal-500 hover:bg-teal-600 text-white uppercase font-medium text-sm px-4 rounded-lg transition-all duration-150 flex items-center py-1.5">
                                <span>Yes</span>
                            </button>
                        </form>
                        <button x-on:click="modal = ! modal" class="bg-secondary-lighter hover:bg-secondary-light text-white uppercase font-medium text-sm px-4 rounded-lg transition-all duration-150 flex items-center py-1.5">
                            No
                        </button>
                    </div>
                </div>
                <div x-cloak="" x-show=" modal" x-on:click="modal = ! modal" style="backdrop-filter: blur(5px);" class="bg-primary bg-opacity-20 w-full h-screen fixed top-0 left-0 z-10"></div>
            </div>
        </div>
    </div>
    <div class=" -mt-40">
        <div class="p-5 lg:p-10">
            <div class="bg-secondary rounded-xl shadow-lg overflow-auto custom-scrollbar-dark p-5">
                <form action="{{ route('users.update', $user) }}" method="POST">
                    @method('PUT')
                    @include('admin.user._form')
                </form>
            </div>
        </div>
    </div>
@endsection
