@extends('layouts.admin')
@section('title', 'Register a new User - ' . config('app.name'))
@section('content')
    <div class="h-60 p-5 lg:p-10 bg-secondary-light mt-14">
        <div class="flex items-center justify-between">
            <h2 class="text-white font-medium text-lg">New User</h2>
        </div>
    </div>
    <div class=" -mt-40">
        <div class="p-5 lg:p-10">
            <div class="bg-secondary rounded-xl shadow-lg overflow-auto custom-scrollbar-dark p-5">
                <form action="{{ route('users.store') }}" method="POST">
                    @include('admin.user._form')
                </form>
            </div>
        </div>
    </div>
@endsection
