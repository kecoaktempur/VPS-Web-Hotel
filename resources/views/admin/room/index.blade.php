@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-20">
        <main class="w-full flex-grow p-6">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-3xl text-[#24305A] font-bold pb-6 max-sm:pb-0">Ruangan</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('room.create')}}" class="rounded-md bg-[#24305A] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800 text-xl max-sm:text-center">
                        Tambah Ruangan
                    </a>
                </div>
            </div>

            <div class="w-full mt-5">
                <form class="max-w-md mb-3">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="filter" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#24305A] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
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

                        <tbody id="table-body">
                            @foreach ($rooms as $room)
                            <tr>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->room_number }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->type->name }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->single_bed }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->king_bed }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-nowrap">
                                    {{ $room->queen_bed }}
                                </td>
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
                                            <button class="rounded-md bg-green-800 hover:bg-green-950 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                                                Detail
                                            </button>
                                        </a>
                                        <a href="{{ route('room.edit', ['id' => $room->id]) }}">
                                            <button class="ml-2 rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
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
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchInput = document.getElementById("filter");
                    const tableBody = document.getElementById("table-body");

                    searchInput.addEventListener("input", function() {
                        const searchTerm = searchInput.value.toLowerCase();
                        const rows = tableBody.querySelectorAll("tr");

                        rows.forEach(function(row) {
                            const columns = row.querySelectorAll("td");
                            let found = false;

                            columns.forEach(function(column) {
                                if (column.textContent.toLowerCase().includes(searchTerm)) {
                                    found = true;
                                }
                            });

                            if (found) {
                                row.style.display = ""; // Show the row
                            } else {
                                row.style.display = "none"; // Hide the row
                            }
                        });
                    });
                });
            </script>
        </main>
    </div>
</div>
@endsection