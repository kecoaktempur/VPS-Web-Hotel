@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-3xl text-[#24305A] font-bold pb-6">Ruangan</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('room.create')}}" class="rounded-md bg-[#24305A] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800 text-xl">
                        Tambah Ruangan
                    </a>
                </div>
            </div>

            <div class="w-full mt-5">
                <div class="bg-white overflow-auto">
                    <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 overflow:hidden">
                        <thead class="text-xs uppercase border-b border-gray-700" style="color: #070A52;">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Nomor Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Tipe
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Single Bed
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    King Bed
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Queen Bed
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Dispenser
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Magic Jar
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Rak Piring
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Alat Makan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Meja Makan
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Dapur
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Living Room
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Microwave
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Kulkas
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Shower
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Waterheater
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Wastafel
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Closet
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Bathtub
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    AC
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    TV
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($rooms as $room)
                            <tr>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->room_number }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->type->name }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->single_bed }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->king_bed }}
                                </th>
                                <th scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->queen_bed }}
                                </th>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->dispenser == 1 ? 'green' : 'red' }}">
                                    {{ $room->dispenser == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->magic_jar == 1 ? 'green' : 'red' }}">
                                    {{ $room->magic_jar == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->rak_piring == 1 ? 'green' : 'red' }}">
                                    {{ $room->rak_piring == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->alat_makan == 1 ? 'green' : 'red' }}">
                                    {{ $room->alat_makan == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->meja_makan == 1 ? 'green' : 'red' }}">
                                    {{ $room->meja_makan == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->dapur == 1 ? 'green' : 'red' }}">
                                    {{ $room->dapur == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->living_room == 1 ? 'green' : 'red' }}">
                                    {{ $room->living_room == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->microwave == 1 ? 'green' : 'red' }}">
                                    {{ $room->microwave == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->kulkas == 1 ? 'green' : 'red' }}">
                                    {{ $room->kulkas == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->shower == 1 ? 'green' : 'red' }}">
                                    {{ $room->shower == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->waterheater == 1 ? 'green' : 'red' }}">
                                    {{ $room->waterheater == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->wastafel == 1 ? 'green' : 'red' }}">
                                    {{ $room->wastafel == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->closet == 1 ? 'green' : 'red' }}">
                                    {{ $room->closet == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->bathtub == 1 ? 'green' : 'red' }}">
                                    {{ $room->bathtub == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->ac == 1 ? 'green' : 'red' }}">
                                    {{ $room->ac == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium whitespace-nowrap" style="color: {{ $room->tv == 1 ? 'green' : 'red' }}">
                                    {{ $room->tv == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    <div class="flex">
                                        <a href="{{ route('room.edit', ['id' => $room->id]) }}">
                                            <button class="rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('room.destroy', ['id' => $room->id]) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button room="submit" class="ml-2 rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col-reverse justify-end items-end bottom-0 right-0 mt-4 mb-4 mr-4">
                    <div class="inline-flex rounded-md">
                        ..........
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
@endsection