@extends('layouts.app')
@section('content')
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Mobile Header & Nav -->
    @include('layouts.navbar-admin-mobile')

    <div class="w-full overflow-x-hidden border-t flex flex-col max-sm:pt-20">
        <main class="w-full flex-grow p-6">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-3xl text-[#24305A] font-bold pb-6 max-sm:pb-0">Tipe Ruangan</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('type.create')}}" class="rounded-md bg-[#24305A] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800 text-xl max-sm:text-center">
                        Tambah Tipe Ruangan
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
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Jumlah Orang
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Harga per Malam
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3 font-extrabold">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        @php
                        $count = ($types->currentPage() - 1) * $types->perPage() + 1;
                        @endphp


                        <tbody id="table-body">
                            @foreach ($types as $type)
                            <tr>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    {{ $count++ }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    {{ $type->name }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    {{ $type->size }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    {{ $type->price }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    {{ $type->description }}
                                </td>
                                <td scope="row" class="px-5 py-4 font-medium text-gray-700 whitespace-normal">
                                    <div class="flex">
                                        <a href="{{ route('type.edit', ['id' => $type->id]) }}">
                                            <button class="rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-950 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('type.destroy', ['id' => $type->id]) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
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
                        {{ $types->links() }}
                    </div>
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