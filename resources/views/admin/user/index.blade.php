@extends('layouts.admin')
@section('title', 'Users Table')
@section('content')
    <div class="h-60 p-5 lg:p-10 bg-secondary-light mt-14">
        <h2 class="text-white font-medium text-lg">Users</h2>
        <div class="py-10">
            <input type="text" name="q" value="" class="text-gray-300 text-sm focus:outline-none bg-secondary-lighter rounded-full px-3.5 py-2 hover:border-dark-gray focus:border-dark-gray border border-transparent placeholder-gray-300" placeholder="Search..">
        </div>
    </div>
    <div class="-mt-24">
        <div class="p-5 lg:p-10">
            <div class="bg-secondary rounded-xl shadow-lg overflow-auto custom-scrollbar-dark">
                <table class="w-full leading-normal md:table-fixed">
                    <thead class="text-xs text-gray-300 tracking-wider text-left">
                        <tr class="border-b border-secondary-light">
                            <th class="w-1/4 px-5 py-5">
                                Name
                            </th>
                            <th class="w-1/4 px-5 py-5">
                                Email
                            </th>
                            <th class="w-1/4 px-5 py-5">
                                Is Verified
                            </th>
                            <th class="w-1/4 px-5 py-5">
                                Register At
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $item)
                            <tr onclick="window.location = '{{ route('users.edit', $item) }}'" class="border-b group border-secondary-light cursor-pointer">
                                <td class="text-gray-300 px-5 text-sm py-3 group-hover:bg-white group-hover:bg-opacity-5">
                                    <span class="inline-block font-bold">{{ $item->name }}</span>
                                </td>
                                <td class="text-gray-300 px-5 text-sm py-3 group-hover:bg-white group-hover:bg-opacity-5">
                                    <span class="inline-block font-bold">{{ $item->email }}</span>
                                </td>
                                <td class="text-gray-300 px-5 text-sm py-3 group-hover:bg-white group-hover:bg-opacity-5">
                                    <span class="inline-block font-bold">
                                        @if ($item->email_verified_at == null)
                                            <div class="inline-flex px-1 items-center space-x-1 bg-rose-400 bg-opacity-30 rounded">
                                                <div class="w-2 h-2 rounded-full bg-rose-400"></div>
                                                <span class="text-xxs text-rose-400">Belum</span>
                                            </div>
                                        @else
                                            <div class="inline-flex px-1 items-center space-x-1 bg-teal-400 bg-opacity-30 rounded">
                                                <div class="w-2 h-2 rounded-full bg-teal-400"></div>
                                                <span class="text-xxs text-teal-400">Sudah</span>
                                            </div>
                                        @endif
                                    </span>
                                </td>
                                <td class="text-gray-300 px-5 text-sm py-3 group-hover:bg-white group-hover:bg-opacity-5">
                                    <span class="inline-block">{{ $item->created_at }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="p-5">

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
